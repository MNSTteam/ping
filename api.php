<?php
header('Access-Control-Allow-Origin: https://ping.mnst.club');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers: NCZ');
header('Access-Control-Max-Age: 1728000');
header('Access-Control-Allow-Credentials: true');
header("X-Accel-Expires: 0");
header('Content-Type: application/json');


/*
CONNECT DB & REDIS
*/

if(isset($_GET['posts']) && isset($_GET['address'])) {
	$_GET['address']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['address']);
	
	$WHR='';
	if(isset($_GET['ptx'])) {
	$_GET['ptx']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['ptx']);
		$WHR = " WHERE tx='".$_GET['ptx']."'";
	}
	
	$POSTS=array();
	if($_GET['address']=='ALL') {
		$pst=pg_query("SELECT * FROM ping_posts".$WHR." ORDER BY block DESC LIMIT 50");
	} else {
		$pst=pg_query("SELECT * FROM ping_posts WHERE wallet='".pg_escape_string($_GET['address'])."' ORDER BY block DESC");
	}
	
	while($l=pg_fetch_assoc($pst)) {
	
	$POST = json_decode(file_get_contents($GLOBALS['NODEURL'].'/transaction?hash='.$l['tx']));
	$l['post']=$POST;
	
		$IMG='';
	
	//$redis->delete('PING:img:'.$l['tx']);
	if(!$redis->exists('PING:img:'.$l['tx'])) {
	
	$exts = array('png','gif','jpg','jpeg','svg');
	
	foreach($exts as $ext) {
		if(file_exists('i/'.$l['tx'].'.'.$ext)) {
			$IMG = 'https://ping.mnst.club/i/'.$l['tx'].'.'.$ext;
			$redis->set('PING:img:'.$l['tx'],$IMG);
			break;
		}
	}
	
	} else {
		$IMG = $redis->get('PING:img:'.$l['tx']);
	}
	
	$l['img']=$IMG;
	
	$CMNTS = pg_fetch_array(pg_query("SELECT count(*) FROM ping_comments WHERE posttx='".pg_escape_string($l['tx'])."'"));
	
	$l['comments_count']=$CMNTS[0];
	
	$LIKES = pg_fetch_array(pg_query("SELECT count(wallet) FROM ping_likes WHERE posttx='".pg_escape_string($l['tx'])."'"));
	
	$l['likes']=$LIKES[0];
	
	$ALLLIKES = pg_fetch_array(pg_query("SELECT count(*) FROM ping_likes WHERE tow='".pg_escape_string($l['wallet'])."'"));
	
	$l['likesCOUNT']=$ALLLIKES[0];
	
	$POSTS[]=$l;
		
	}
		
	echo json_encode($POSTS);
}

if(isset($_GET['comments']) && isset($_GET['posttx'])) {
	$_GET['posttx']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['posttx']);
	
	$POSTS=array();
	$pst=pg_query("SELECT * FROM ping_comments WHERE posttx='".pg_escape_string($_GET['posttx'])."' ORDER BY block DESC");
	
	while($l=pg_fetch_assoc($pst)) {
	$POST = json_decode(file_get_contents($GLOBALS['NODEURL'].'/transaction?hash='.$l['tx']));
	$l['comment']=$POST;
		$POSTS[]=$l;
	}
	
	echo json_encode($POSTS);
}

if(isset($_GET['messages']) && isset($_GET['address'])) {
	$_GET['address']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['address']);
	
	$POSTS=array();
	$pst=pg_query("SELECT * FROM ping_private WHERE wt='".pg_escape_string($_GET['address'])."' ORDER BY block DESC");
	
	while($l=pg_fetch_assoc($pst)) {
	$POST = json_decode(file_get_contents($GLOBALS['NODEURL'].'/transaction?hash='.$l['tx']));
	$l['message']=$POST;
		$POSTS[]=$l;
	}
	
	echo json_encode($POSTS);
}

if(isset($_GET['banned']) && isset($_GET['address'])) {
	$_GET['address']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['address']);
	
	$POSTS=array();
	$pst=pg_query("SELECT * FROM ping_banned WHERE wallet='".pg_escape_string($_GET['address'])."' ORDER BY block DESC");
	
	while($l=pg_fetch_assoc($pst)) {
		$POSTS[]=$l;
	}
	
	echo json_encode($POSTS);
}


if(isset($_GET['getKey']) && isset($_GET['address'])) {
	$_GET['address']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['address']);
	
	$pst=pg_fetch_array(pg_query("SELECT key FROM ping_keys WHERE wallet='".pg_escape_string($_GET['address'])."' ORDER BY block DESC LIMIT 1"));
	$pgp=pg_fetch_array(pg_query("SELECT pk FROM ping_rsa WHERE wallet='".pg_escape_string($_GET['address'])."' LIMIT 1"));
	
	if(isset($_GET['pub'])) {
		echo json_encode((object)array('pub'=>$pst[0]));
		exit();
	}
	
	if($pgp[0]!='') {
		echo json_encode((object)array('pub'=>$pst[0],"priv"=>$pgp[0]));
	} else {
		echo '';
	}
}


if(isset($_POST['saveKey']) && isset($_POST['address'])) {
	$_POST['address']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_POST['address']);
	
	pg_query("INSERT INTO ping_rsa (wallet,pk) VALUES('".pg_escape_string($_POST['address'])."','".pg_escape_string($_POST['rsa'])."')");
	
	echo json_encode((object)array('response'=>'OK'));
}



if(isset($_GET['getImage']) && isset($_GET['posttx'])) {
	$_GET['posttx']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['posttx']);
	
	$IMG='';
	
	if(!$redis->exists('PING:img:'.$_GET['posttx'])) {
	
	$exts = array('png','gif','jpg','jpeg','svg');
	
	foreach($exts as $ext) {
		if(file_exists('i/'.$_GET['posttx'].'.'.$ext)) {
			$IMG = 'https://mnst.club/ping/i/'.$_GET['posttx'].'.'.$ext;
			$redis->set('PING:img:'.$_GET['posttx'],$IMG);
			break;
		}
	}
	
	} else {
		$IMG = $redis->get('PING:img:'.$_GET['posttx']);
	}
	
	echo $IMG;
}



if(isset($_GET['counters']) && isset($_GET['address'])) {
	$_GET['lbp']=preg_replace("/[^0-9]+/ism","",$_GET['lbp']);
	$_GET['lbm']=preg_replace("/[^0-9]+/ism","",$_GET['lbm']);
	$_GET['address']=preg_replace("/[^0-9a-zA-Z]+/ism","",$_GET['address']);
		
	$POSTS = pg_fetch_array(pg_query("SELECT count(*) FROM ping_posts WHERE block>".pg_escape_string($_GET['lbp'])));
	
	$ANSWERS = pg_fetch_array(pg_query("SELECT count(*) FROM ping_private WHERE wt='".pg_escape_string($_GET['address'])."' AND block>".pg_escape_string($_GET['lbm'])));
	
		
	echo json_encode((object)array("cntposts"=>$POSTS[0],"cntmsg"=>$ANSWERS[0]));
}
?>