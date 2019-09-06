<?php
/*
CONNECT DB & REDIS
*/

use Minter\MinterAPI;

//$GLOBALS['redis']->delete('LASTparseBLOCK_PING');

$GLOBALS['api'] = new MinterAPI('http://localhost:8841');

function trimzero($i) {
	return bcdiv($i,1000000000000000000,18);
}

function parse() {
$CURRENTBLOCK=json_decode(file_get_contents("http://localhost:8841/status"))->result->latest_block_height;

if(!$GLOBALS['redis']->exists('LASTparseBLOCK_PING')) {
	$GLOBALS['redis']->set('LASTparseBLOCK_PING',1921300);
}

$START=$GLOBALS['redis']->get('LASTparseBLOCK_PING')+1;

/*echo $START.'

';*/

	try{
		$B=$GLOBALS['api']->getBlock($START);
	} catch (Exception $exception) {
    $message = $exception->getMessage();
    $content = $exception->getResponse()
                    ->getBody()
                    ->getContents();
    $error = json_decode($content, true);

	echo $error['error']['data'].'
	
	';
	
		if($error['error']['data']=='Unregistered interface types.Evidence') {
					
			$GLOBALS['redis']->set('LASTparseBLOCK_PING',$START);	
			parse();
			
			exit();
			
		} else {

		echo '
		STOPBLOCK: '.$START.'
		';
			exit();
		}
	}


		if(!isset($B->result)) {
			echo '
			STOPBLOCK: '.$START.'
			';
			exit();
		}
	
			$date = preg_replace("/(\.\d+)/ism","",$B->result->time);
			$date = (strtotime($date));
			
	if(isset($B->result->transactions) && sizeof($B->result->transactions)>0) {
	foreach($B->result->transactions as $t) {
		
		
		if($t->type==1 && $t->data->coin=='PING' && $t->payload!='' && $t->from==$t->data->to) {
			$TEXT=base64_decode($t->payload);
			$CMNT = explode('>', $TEXT);
			if(strlen($CMNT[0])!=66 && $CMNT[0]=='post') {
				pg_query("INSERT INTO ping_posts (wallet,tx,block) VALUES ('".$t->from."','".$t->hash."','".$START."')");
				echo 'INSERT POST
				
				';
			}
		}
		
		if($t->type==1 && $t->data->coin=='PING' && $t->payload!='') {
			$TEXT=base64_decode($t->payload);
			$CMNT = explode('>', $TEXT);
			if(strlen($CMNT[0])==66) {
				pg_query("INSERT INTO ping_comments (wallet,posttx,tx,block) VALUES ('".$t->from."','".pg_escape_string($CMNT[0])."','".$t->hash."','".$START."')");
				echo 'INSERT COMMENT
				
				';
			}
			if($CMNT[0]=='ban' && strlen($CMNT[1])==66) {
				pg_query("INSERT INTO ping_banned (wallet,commenttx,tx,block) VALUES ('".$t->from."','".pg_escape_string($CMNT[1])."','".$t->hash."','".$START."')");
				echo 'INSERT BAN
				
				';
			}
			
			if($CMNT[0]=='like' && strlen($CMNT[1])==66) {
				pg_query("INSERT INTO ping_likes (wallet,posttx,tx,block,value,tow) VALUES ('".$t->from."','".pg_escape_string($CMNT[1])."','".$t->hash."','".$START."',".trimzero($t->data->value).",'".pg_escape_string($t->data->to)."')");
				echo 'INSERT LIKE
				
				';
			}
						
			if($CMNT[0]=='pgpkey' && isset($CMNT[1])) {
				pg_query("INSERT INTO ping_keys (wallet,key,tx,block) VALUES ('".$t->from."','".pg_escape_string($CMNT[1])."','".$t->hash."','".$START."')");
				echo 'INSERT KEY
				
				';
			}
			
			if($CMNT[0]=='message' && isset($CMNT[1])) {
				pg_query("INSERT INTO ping_private (wf,wt,tx,block) VALUES ('".$t->from."','".pg_escape_string($t->data->to)."','".$t->hash."','".$START."')");
				echo 'INSERT MESSAGE
				
				';
			}
		}
		
	}
	}
				
	
$GLOBALS['redis']->set('LASTparseBLOCK_PING',$START);	
sleep(0.1);
parse();
}

parse();
?>