<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
<head>
<title>PING</title>
<link data-n-head="true" rel="icon" type="image/x-icon" href="/favicon.png"> 
<style>
.frmbet input {
	font-size: 16px;
}

@font-face{
font-family:Ubuntu;
font-style:normal;
font-weight:400;
src:local("Ubuntu Regular"),
local("Ubuntu-Regular"),
url(/fonts/ubuntu-v11-cyrillic_latin-regular.4f9cb44.woff2) format("woff2"),
url(/fonts/ubuntu-v11-cyrillic_latin-regular.b3d1002.woff) format("woff")
}
@font-face{
font-family:Ubuntu;
font-style:normal;
font-weight:700;
src:local("Ubuntu Bold"),
local("Ubuntu-Bold"),
url(/fonts/ubuntu-v11-cyrillic_latin-700.1878bde.woff2) format("woff2"),
url(/fonts/ubuntu-v11-cyrillic_latin-700.0f3b6eb.woff) format("woff")}*,
:after,:before{box-sizing:border-box
}

html{
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    -ms-overflow-style: scrollbar;
}

*,
*::before,
*::after {
  -webkit-box-sizing: inherit;
          box-sizing: inherit;
}


body{font-family:Ubuntu,SimSun,PingFang SC,sans-serif;font-size:14pt;font-weight:400;color: #111111;}

a:link, a:visited, a:active, a:hover {
	color:#0096FF;
	text-decoration:none;
}

.btn {
	cursor:pointer;
}
form {
	padding-bottom: 5px;
	border-bottom: 3px solid #111111;
}
.wbl {
	padding-bottom: 15px;
}
.mailInput {
	font-size: 18pt;
	width: 100%;
	border: 1px solid #0096FF;
	margin-top: 10px;
	padding: 10px 12px;
	-moz-border-radius: 10px; 
    border-radius: 10px; 
    min-height: 30px;
    color: #000!important;
}
.sBtn {
  padding: 10px 20px;
  margin-bottom: 15px;
  -moz-border-radius: 10px; 
  border: 3px solid #0096FF;
  border-radius: 10px; 
  color: #0096FF;
  cursor: pointer;
  font-size: 18pt;
  text-align: center;
  min-height: 30px;
  overflow: auto;
  background-color: transparent;
}
h1 {
	border-top: 3px solid #111111;
	font-size: 18pt;
	color: #111111;
	text-align: center;
	padding-top: 20px;
}


body{
  background: #fff; 
  /*background-image:url(/img/logo.svg);
  background-position:center right;
  background-repeat:no-repeat;
  background-size: auto 75%;*/
  min-width: 990px;
}


.btn, .wbl button {
  padding: 10px 20px;
  margin-bottom: 15px;
  -moz-border-radius: 10px; 
  border: 3px solid #0096FF;
  border-radius: 10px; 
  color: #0096FF;
  cursor: pointer;
  font-size: 18pt;
  text-align: center;
  min-height: 30px;
  overflow: auto;
  background-color: transparent;
}
.btn, .wbl button {
	cursor:pointer;
}
a.btn {
max-width: 100px;
  padding: 10px 20px;
  -moz-border-radius: 10px; 
  border: 1px solid #0096FF;
  border-radius: 10px; 
  color: #0096FF;
  cursor: pointer;
  font-size: 14pt;
  text-align: center;
  min-height: 30px;
  overflow: auto;
  background-color: transparent;
  margin-bottom: 10px;
  display: block;
}

 .btn:hover, .wbl button:hover, .sBtn:hover {
    	color: #fff;
    	background: #0096FF;
}

.btnsall, .wbl, .btnBack {
	margin: auto;
	max-width: 400px;

}
h2 {
	margin-top: 50px;
	font-size: 20pt;
	color: #111111;
	text-align: center;
}

.cntrcont {
	padding-right: 15%;
}
@media only screen and (max-width: 1024px), (min-height: 1024px) and (min-width: 450px) and (max-width: 900px), (min-height: 2400px) and (min-width: 900px) and (max-width: 1800px), (min-height: 4500px) and (min-width: 1800px) and (max-width: 3375px) {
/*.btnsall, .wbl, .btnBack {
	margin-left: 50px;
	max-width: 400px;

}
h2 {
	margin-left: 50px;
	max-width: 400px;
	text-align: left;
}*/
.cntrcont {
	padding-right: 20px;
}
}

#AUTHOR {
	padding-bottom: 20px;
}
#wallet {
	word-break: break-all;
}
.author, .pgpk, .postlnk {
	word-break: break-all;
}
.pgpk {
	font-size: 12px;
}
.userBg {
  background-position:15px 15px;
  background-repeat:no-repeat;
  background-size: 36px;
}
.picture {
	text-align: center;
	padding: 15px 0;
}
.picture img {
	border-radius: 10px;
	max-height: 200px;
}
.clear {
float:none; clear:both; width:100%; padding:0; font-size:1px;
}
.pstauthor {
	font-weight: bold;
	padding-bottom: 7px;
	word-break: break-all;
	cursor: pointer;
}
.pstauthor:hover {
	text-decoration:underline;
}
.likeres a {
	font-size: 10px;
	color:#666;
}
.post { 
	word-wrap: break-word;
}
.main_input_file {
	display: none;
}

.upload_form div {
	width: 100px;
	background: #f0f0f0;
	border-radius: 10px;
	color: #fff;
	padding: 5px 0;
	text-align: center;
	font-size:14px;
	display: inline-block;
	vertical-align: top;
	border: 1px solid #ccc;
}

.upload_form div:hover {
	border: 1px solid #0096FF;
	cursor: pointer;
}

#f_name {
	background: transparent;
	border: 0;
	display: inline-block;
	vertical-align: middle;
	height: 30px;
	padding: 0 8px;
	width: 30%;
}
</style>

<script src="https://monsternode.net/jquery.min.js"></script>
<script src="https://monsternode.net/bundleMN.js?9078"></script>
<script src="https://monsternode.net/clipboard/dist/clipboard.js"></script>
<!--[if IE 8]>
<script src="js/linkifyjs/linkify-polyfill.js"></script>
<![endif]-->
<script src="/js/linkifyjs/linkify.js"></script>
<script src="/js/linkifyjs/linkify-string.js"></script>

 		<script language="JavaScript" type="text/javascript" src="/rsa2/jsbn.js"></script>
        <script language="JavaScript" type="text/javascript" src="/rsa2/random.js"></script>
        <script language="JavaScript" type="text/javascript" src="/rsa2/hash.js"></script>
        <script language="JavaScript" type="text/javascript" src="/rsa2/rsa.js"></script>
        <script language="JavaScript" type="text/javascript" src="/rsa2/aes.js"></script>
        <script language="JavaScript" type="text/javascript" src="/rsa2/api.js"></script>
        
        <script src="/aes.js"></script>

<script>

function setWalLGN(id) {
	if(id=='BACK') {
		$('.wbl').fadeOut('fast');
		$('.btnBack').fadeOut('fast');
		$('.btnsall').fadeIn('slow');
		return true;
	} else {
		$('.btnsall').fadeOut('fast');
		$('.wbl').fadeOut('fast');
	
		$('.btnBack').fadeIn('slow');
		$('#'+id).fadeIn('slow');
	}
}

function RSAParse(rsaString) {
    var json = JSON.parse(rsaString);
    var rsa = new RSAKey();

    rsa.setPrivateEx(json.n, json.e, json.d, json.p, json.q, json.dmp1, json.dmq1, json.coeff);

    return rsa;
}
RSAKey.prototype.toJSON = function() {
    return JSON.stringify({
      type: 'RSAKey',
      coeff: this.coeff.toString(16),
      d: this.d.toString(16),
      dmp1: this.dmp1.toString(16),
      dmq1: this.dmq1.toString(16),
      e: this.e.toString(16),
      n: this.n.toString(16),
      p: this.p.toString(16),
      q: this.q.toString(16)
    })
}

function b64EncodeUnicode(str) {
    // first we use encodeURIComponent to get percent-encoded UTF-8,
    // then we convert the percent encodings into raw bytes which
    // can be fed into btoa.
    return btoa(encodeURIComponent(str).replace(/%([0-9A-F]{2})/g,
        function toSolidBytes(match, p1) {
            return String.fromCharCode('0x' + p1);
    }));
}


var encryptedAES;
var MattsPublicKeyString;
var ALLOWBET=1;

function generateKey(nop) {
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	
	if(!TXWALLET) { $('#pgpkeyvalue').html('<a href="javascript:void(0)" onclick="$(\'#content\').hide(); $(\'#logins\').show();">Sign in</a>'); $('#pgpkeyPRIVATEvalue').html('<a href="javascript:void(0)" onclick="$(\'#content\').hide(); $(\'#logins\').show();">Sign in</a>'); return false; }

		$.get("/api.php?getKey&address="+TXWALLET['address'], function(data) {
			
			if(data.priv) {
				MattsPublicKeyString = data.pub;
				encryptedAES = data.priv;
				$('#pgpkeyvalue').html(MattsPublicKeyString);
				$('#pgpkeyPRIVATEvalue').html(encryptedAES);
				if(nop!=1) { $('#pgpKey').hide();
          		$('#messageform').show();
          		getMessages();
          		}
			}		
			
			}).fail(function() { 

			var PassPhrase = TXWALLET['seed'];
        	var Bits = 512;
        
        	var MattsRSAkey = cryptico.generateRSAKey(PassPhrase, Bits);
        	MattsPublicKeyString = cryptico.publicKeyString(MattsRSAkey);       

			$('#pgpkeyvalue').html(MattsPublicKeyString);
			
			var privk = JSON.stringify(MattsRSAkey.toJSON());
	
			encryptedAES = CryptoJS.AES.encrypt(privk, TXWALLET['seed'])+'';
	
			$('#pgpkeyPRIVATEvalue').html(encryptedAES);
			
			$('#sendPGP').show();

		});
	
}


function setPubKey() {
	if(ALLOWBET==0) { alert('6 seconds interval!'); return false; }
	
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	var cwlt = TXWALLET['address'];
	
	var FEECN = FEECN='PING'; 
		
		FORM_DATA = {
    		to: cwlt,
    		coin: 'PING',
    		value: 0,
    		feecoin: FEECN,
    		payload: 'pgpkey>'+MattsPublicKeyString+'',
		};
		
	  try {
	  	  
		window.send(cwlt,TXWALLET['pk'],'send',FORM_DATA,$('#pgpkeyRes'));
		
		} catch(err) {
      	console.log(err);
      }
	
	ALLOWBET=0;
	setTimeout(function() { ALLOWBET=1; },6000);
}


function sendKey() {
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));

    var dataSRV = [];
    dataSRV.push({name: "saveKey", value: 1},{name: "address", value: TXWALLET['address']}, {name: "rsa", value: encryptedAES});
    $.ajax({
      type: "POST",
      url: "/api.php",
      data: dataSRV,
      dataType: "json",
      success: function(data) {
          console.log(data);
          setPubKey();
          window.setTimeout(function(){
          	$('#pgpKey').hide();
          	$('#messageform').show();
          },1000);
     },
    error: function(e) {
        console.log(e);
    }
	});
	
}



function message() {

if($('#messageaddress').val()=='') { $('#messageRes').html('ERROR! Fill address to send message!'); return false; }

	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
		
	$.get("/api.php?getKey&pub&address="+$('#messageaddress').val(), function(data) {
			
			if(data.pub!=null) {
				var encrMessage = cryptico.encrypt(b64EncodeUnicode($('#messagetext').val()), data.pub);
				//console.log(encrMessage.cipher);
				
	if(ALLOWBET==0) { alert('6 seconds interval!'); return false; }
	
	var cwlt = TXWALLET['address'];
	
	var FEECN = FEECN='PING'; 
		
		FORM_DATA = {
    		to: $('#messageaddress').val(),
    		coin: 'PING',
    		value: ($('#messageprice').val()>0?$('#messageprice').val():0),
    		feecoin: FEECN,
    		payload: 'message>'+encrMessage.cipher+'',
		};
		
	  try {
	  	  
		window.send(cwlt,TXWALLET['pk'],'send',FORM_DATA,$('#messageRes'));
		
		} catch(err) {
      	console.log(err);
      }
	
	ALLOWBET=0;
	setTimeout(function() { ALLOWBET=1; },6000);
				
			} else {
				$('#messageRes').html('ERROR! No public key for this user!');
			}	
			
			}).fail(function() { 

				$('#messageRes').html('ERROR! No public key for this user!');

			});
}


    function setTXTarea() { 
    $('textarea').on("load propertychange keyup input paste",
    function () { 
        var limit = $(this).data("limit");     
        var remainingChars = limit - $(this).val().length;      
        if (remainingChars <= 0) {
            $(this).val($(this).val().substring(0, limit));
        }
        $(this).parent().find(".countdown").text(remainingChars<=0?0:remainingChars);
    });
  
  $('textarea').trigger('load'); 
  
  
    $('.pstauthor').on("click",
    function () { 
        var addr = $(this).data("author");     
        document.location.href='/'+addr;
    });
    
    
		$(".main_input_file").change(function() {

			var f_name = [];

			for (var i = 0; i < $(this).get(0).files.length; ++i) {

				f_name.push(" " + $(this).get(0).files[i].name);

			}

			$("#f_name").val(f_name.join(", "));
		});
  }

</script>

</head>
<body>


<div id="content" style="padding-top:30px">

<div style="position:fixed; left:30px; width:250px">
<div style="padding-bottom:20px; font-size:14px; text-align:left; padding:15px; padding-top:0" class="userBg">
<span id="wallet"></span>
<b>Balance: <span class="balance"></span> PING</b>
<div style="font-size:16px">
<br><br>
<a href="javascript:void(setPage('ALL'))"><img src="/world.svg" style="height:20px; vertical-align:middle; margin-right:10px;">World</a>&nbsp;&nbsp;&nbsp;<span class="cntposts"></span>
<br><br>
<a href="javascript:void(setPage('MY'))"><img src="/my.svg" style="height:20px; vertical-align:middle; margin-right:10px;">My pings</a>
<br><br>
<a href="javascript:void(showMessages())"><img src="/messages.svg" style="height:20px; vertical-align:middle; margin-right:10px;">Messages</a>&nbsp;&nbsp;&nbsp;<span class="cntmsg"></span>
<br><br>
<a href="javascript:void(showProfile())"><img src="/user.svg" style="height:20px; vertical-align:middle; margin-right:10px;">Profile</a>
</div>
<br><br>
<a href="javascript:void(0)" onclick="if(confirm('Log out?')) { logout() }" style="font-size:12px; display:none" id="logoutlink"><img src="/logout.svg" style="height:16px; vertical-align:middle; margin-right:10px;">Logout</a>
</div>
</div>

<div align="right" class="cntrcont" style="padding-left:300px">
<div style="text-align:left; border-left:1px #f0f0f0 solid; border-right:1px #f0f0f0 solid; padding:0 25px">


<div id="AUTHOR" class="userBg"></div>


<form action="" method="POST" name="postform" class="frmbet" id="postform" style="display:none;" onsubmit="post('post'); return false;">
<table width="100%" cellspacing="0" cellpadding="0"> 
<tr><td valign="top" align="left">
<table border="0" cellpadding="3" cellspacing="1" width="500">
<tbody>
<tr>
<td><input name="price" id="price" style="width:100%; height:30px; padding:5px; font-size:14px" placeholder="Comment and like price" class="mailInput"></td>
</tr>
<tr>
<td><textarea name="message" id="message" data-limit="500" style="width:100%; height:90px; padding:5px; font-size:16px" placeholder="Message" class="mailInput"></textarea><div style="font-size:14px; color:#666; float:right" class="countdown">500</div></td>
</tr>
<tr>
<td>
<div class="upload_form">

	<label>

		<input name="pic" type="file" id="pic" class="main_input_file" />
		<div><img src="/img.svg" height="32" id="filepicimg"></div>
		<input class="f_name" type="text" id="f_name" value="Choose file" disabled />

	</label>

</div>
</tr>
<tr><td colspan="2" align="left">
<a href="javascript:void(betthis())" class="btn">Send!</a>
<div style="padding:7px"><small id="betRes"></small></div>

</td></tr>
</table>
</td></tr>
</table>
</form>


<div id="POSTS" style="padding-bottom:20px"></div>

<div id="MESSAGES" style="padding-bottom:20px; display:none">
<h3 name="messagesh">Messages</h3>
<form action="" method="POST" class="frmbet" id="messageform" style="display:none" onsubmit="message(); return false;">
<table width="100%" cellspacing="0" cellpadding="0"> 
<tr><td valign="top" align="left">
<table border="0" cellpadding="3" cellspacing="1" width="500">
<tbody>
<tr>
<td><input name="messageaddress" id="messageaddress" style="width:100%; height:30px; padding:5px; font-size:14px" placeholder="Address (Mx...)" class="mailInput"></td>
</tr>
<tr>
<td><input name="messageprice" id="messageprice" style="width:100%; height:30px; padding:5px; font-size:14px" placeholder="Add PING" class="mailInput"></td>
</tr>
<tr>
<td><textarea name="messagetext" id="messagetext" data-limit="250" style="width:100%; height:90px; padding:5px; font-size:16px" placeholder="Message" class="mailInput"></textarea><div style="font-size:12px; color:#666; float:right" class="countdown">250</div></td>
</tr>
<tr><td colspan="2" align="left">

<a href="javascript:void(message())" class="btn">Send!</a>
<div style="padding:7px"><small id="messageRes"></small></div>
<p><a href="javascript:void(generateKey())"><img src="/reload.svg" height="32"></a></p>
</td></tr>
</table>
</td></tr>
</table>
</form>

<div id="pgpKey">To use message system, you must send your Public key:
<br><br>
Public:<br>
<code id="pgpkeyvalue" class="pgpk"><img src="/loaderB.svg" height="24"></code>
<br><br>
Private (save it!):<br>
<code id="pgpkeyPRIVATEvalue" class="pgpk"><img src="/loaderB.svg" height="24"></code>
<br><br>
<a href="javascript:void(sendKey())" class="btn" id="sendPGP">Send!</a>
<div style="padding:7px"><small id="pgpkeyRes"></small></div>
</div>

<div id="MSGTO"></div>


</div>



</div>
</div>
</div>



<script>
var CURRENTUSER;


function isset (accessor) {
  try {
    // Note we're seeing if the returned value of our function is not
    // undefined
    return typeof accessor() !== 'undefined'
  } catch (e) {
    // And we're able to catch the Error it would normally throw for
    // referencing a property of undefined
    return false
  }
}

function logout() {
    
    localStorage.removeItem('PING');
	setAuth();
}

window.localSendError = (TXTP,FORM_DATA,error,addr,txresid) => {
		
	console.log('Type: '+TXTP);
	console.log(FORM_DATA);
	console.log(error);
	
}


function uploadFile() {

if(!$('#pic')[0].files[0]) {
	return false;
}

$('#filepicimg').attr('src','/loaderB.svg');

if($('#betRes').html()!='' && $('#betRes').find('a').length>0) {
if($('#betRes').find('a').html().indexOf('Mt')!=-1) {
setTimeout(function() {
		var fd = new FormData();
        var files = $('#pic')[0].files[0];
        fd.append('file',files);
        fd.append('tx',$('#betRes').find('a').html());

        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response){
                    console.log(response);
                    $('#filepicimg').attr('src','/img.svg');
                }
            },
        });
		},500);
} else { $('#filepicimg').attr('src','/img.svg'); }
} else {
	setTimeout(function() { uploadFile(); },1000);
}

}

function betthis() {
	if(ALLOWBET==0) { alert('6 seconds interval!'); return false; }
	
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	var cwlt = TXWALLET['address'];
	
	var FEECN = FEECN='PING'; 
		
		FORM_DATA = {
    		to: cwlt,
    		coin: 'PING',
    		value: ($('#price').val()>0?$('#price').val():0),
    		feecoin: FEECN,
    		payload: 'post>'+$('#message').val()+'',
		};
		
	  try {
	  	  
		window.send(cwlt,TXWALLET['pk'],'send',FORM_DATA,$('#betRes'));
		
		uploadFile();
		
		} catch(err) {
      	console.log(err);
      }
	
	ALLOWBET=0;
	setTimeout(function() { ALLOWBET=1; $('#postform')[0].reset(); },6000);
}


function comment(ptx) {
	if(ALLOWBET==0) { alert('6 seconds interval!'); return false; }
	$('#msgsendbtn'+ptx).html('<img src="/loaderB.svg" height="16">');
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	var cwlt = TXWALLET['address'];
	
	var FEECN = FEECN='PING'; 
		
		FORM_DATA = {
    		to: $('#WLTcomment_'+ptx).val(),
    		coin: 'PING',
    		value: $('#PRCcomment_'+ptx).val(),
    		feecoin: FEECN,
    		payload: ptx+'>'+$('#TXTcomment_'+ptx).val()+'',
		};
		
	  try {
	  	  
		window.send(cwlt,TXWALLET['pk'],'send',FORM_DATA,$('#betRes'+ptx));
		
		} catch(err) {
      	console.log(err);
      }
	
	ALLOWBET=0;
	setTimeout(function() { ALLOWBET=1; },6000);
	
	setTimeout(function() { getComments(TXWALLET['address'],ptx,$('#PRCcomment_'+ptx).val(),$('#WLTcomment_'+ptx).val()); $('#msgsendbtn'+ptx).html('Send!'); },12000);
}


function ban(ctx) {
	if(ALLOWBET==0) { alert('6 seconds interval!'); return false; }
	
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	var cwlt = TXWALLET['address'];
	
	var FEECN = FEECN='PING'; 
		
		FORM_DATA = {
    		to: cwlt,
    		coin: 'PING',
    		value: 0,
    		feecoin: FEECN,
    		payload: 'ban>'+ctx+'',
		};
		
	  try {
	  	  
		window.send(cwlt,TXWALLET['pk'],'send',FORM_DATA,$('#banRes'+ctx));
		
		} catch(err) {
      	console.log(err);
      }
	
	ALLOWBET=0;
	setTimeout(function() { ALLOWBET=1; },6000);
}

function likepost(ptx,tw) {
	if(ALLOWBET==0) { alert('6 seconds interval!'); return false; }
	
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	
	if(!TXWALLET) {
		 $('#content').hide(); 
		 $('#logins').show();
		return;
	}
	
	var cwlt = TXWALLET['address'];
	
	var FEECN = FEECN='PING'; 
		
		FORM_DATA = {
    		to: tw,
    		coin: 'PING',
    		value: $('#POSTminprice_'+ptx).attr('data-minp'),
    		feecoin: FEECN,
    		payload: 'like>'+ptx+'',
		};
		
	  try {
	  	  
		window.send(cwlt,TXWALLET['pk'],'send',FORM_DATA,$('#likeResTX'+ptx));
		
		$('#likeResCNT'+ptx).html((1*$('#likeResCNT'+ptx).html())+1);
		
		} catch(err) {
      	console.log(err);
      }
	
	ALLOWBET=0;
	setTimeout(function() { ALLOWBET=1; },6000);
}


function b64DecodeUnicode(str) {
    // Going backwards: from bytestream, to percent-encoding, to original string.
    return decodeURIComponent(atob(str).split('').map(function(c) {
        return '%' + ('00' + c.charCodeAt(0).toString(16)).slice(-2);
    }).join(''));
}
function nl2br(str, is_xhtml) {
    if (typeof str === 'undefined' || str === null) {
        return '';
    }
    var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
    return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1' + breakTag + '$2');
}

var PROFILES = [];

var BANNED=[];
var POSTS = [];
var COMMENTS = [];

	var LASTB_posts = localStorage.getItem('PING_lbp');
	var LASTB_msg = localStorage.getItem('PING_lbm');
	if(LASTB_posts=='undefined') { LASTB_posts=0; }
	if(LASTB_msg=='undefined') { LASTB_msg=0; }


function getMessages() {
var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
// MESSAGES	
$('#MSGTO').html('Loading...');						
$.get("/api.php?messages&address="+TXWALLET['address'], function(data) {
if(data) {
				var MSGS='';
				$('#MSGTO').html('');
				$.each(data, function( n, c ) {
											
							//DECRYPT				
				var decryptedBytes = CryptoJS.AES.decrypt(encryptedAES, TXWALLET['seed']);

				var DECR = jQuery.parseJSON((decryptedBytes.toString(CryptoJS.enc.Utf8)));
				
				var DecryptionResult = cryptico.decrypt(b64DecodeUnicode(c.message.result.payload).replace('message>',''), RSAParse(DECR));
				
				try {
					var DECMSG = b64DecodeUnicode(DecryptionResult.plaintext);
				} catch(err) {
					console.log(err);
					var DECMSG = '';
     			}
							
							if(LASTB_msg<c.message.result.height) { LASTB_msg=c.message.result.height; }
							
							MSGS='<div style="font-size:14px; padding-bottom:10px; padding-top:10px" class="post"><div style="float:right; color:#ccc; float:right;">'+c.message.result.height+'</div><div class="msgAuthor_'+c.message.result.from+' author" style="padding-bottom:7px"></div>'+nl2br(linkifyStr(DECMSG.replace(/<\/?[^>]+(>|$)/g, "")));
							
							MSGS=MSGS+'<div style="padding-top:7px"><a href="javascript:void(0)" onclick="$(\'#messageaddress\').val(\''+c.message.result.from+'\'); window.scrollTo(0,0); return false;"><img src="/reply.svg" style="height:16px; vertical-align:middle; margin-right:5px;">Answer</a></div></div><div style="float:none; clear:both; width:100%; border-bottom:1px #f0f0f0 dashed; padding:0; font-size:1px">&nbsp;</div>';
							$('#MSGTO').html($('#MSGTO').html()+MSGS);

// AVATAR							
if(!isset(() => PROFILES[c.message.result.from])) {
$.get("https://minterscan.pro/profiles/"+c.message.result.from, function(mdata) {
			if(mdata) {
				PROFILES[c.message.result.from]=mdata;
				$('.msgAuthor_'+c.message.result.from).html('<div style="padding-bottom:10px;"><img src="'+PROFILES[c.message.result.from].icons.jpg+'" style="height:32px; vertical-align:middle; margin-right:10px; margin-bottom:5px; float:left"><strong>'+PROFILES[c.message.result.from].title+'</strong><br><code>'+c.message.result.from+'</code></div>');
			} else {
				PROFILES[c.message.result.from]=c.message.result.from;
				$('.msgAuthor_'+c.message.result.from).html(c.message.result.from);
			}
}).fail(function() { 
	PROFILES[c.message.result.from]=c.message.result.from; 
	$('.msgAuthor_'+c.message.result.from).html(c.message.result.from); 
});
} else {
	if(isset(() => PROFILES[c.message.result.from].title)) {
		$('.msgAuthor_'+c.message.result.from).html('<div style="padding-bottom:10px;"><img src="'+PROFILES[c.message.result.from].icons.jpg+'" style="height:32px; vertical-align:middle; margin-right:10px; margin-bottom:5px; float:left"><strong>'+PROFILES[c.message.result.from].title+'</strong><br><code>'+c.message.result.from+'</code></div>');
	} else {
		$('.msgAuthor_'+c.message.result.from).html(PROFILES[c.message.result.from]);
	}
}
						
					
				});
				
				localStorage.setItem('PING_lbm', LASTB_msg);
			}
}).fail(function() { console.log('API ERROR'); });
}


function getComments(addr,pst,minCprc,author) {
var p = {};
p.tx = pst;
var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
// COMMENTS	
$('#comments_'+p.tx).html('Loading...');						
$.get("/api.php?comments&posttx="+p.tx, function(data) {
			if(data) {
				var CMNTS=[];
				var x=0;
				$('#comments_'+p.tx).html('');
				$.each(data, function( n, c ) {
				if(!BANNED[c.tx]) {
						x++;
						
						if(minCprc>=(c.comment.result.data.value/1000000000000000000) && c.comment.result.data.to==author) {
						
							CMNTS='<div style="font-size:14px; padding-bottom:10px; padding-top:10px" class="post"><div style="float:right; color:#ccc; float:right;">'+c.comment.result.height+'</div><div class="cmntAuthor_'+c.comment.result.from+' author"></div>'+nl2br(linkifyStr(b64DecodeUnicode(c.comment.result.payload).replace(p.tx+'>','').replace(/<\/?[^>]+(>|$)/g, "")));
														
							if(TXWALLET && TXWALLET['address']==c.comment.result.data.to) { CMNTS=CMNTS+'<br><br><a href="javascript:void(0)" onclick="if(confirm(\'Ban this comment?\')) { ban(\''+c.tx+'\') }" style="font-size:10px">Ban!</a><br><span id="banRes'+c.tx+'"></span>'; }
							
							CMNTS=CMNTS+'</div><div style="float:none; clear:both; width:100%; border-bottom:1px #f0f0f0 dashed; padding:0; font-size:1px">&nbsp;</div>';
							$('#comments_'+p.tx).html($('#comments_'+p.tx).html()+CMNTS);

// AVATAR							
if(!isset(() => PROFILES[c.comment.result.from])) {
$.get("https://minterscan.pro/profiles/"+c.comment.result.from, function(mdata) {
			if(mdata) {
				PROFILES[c.comment.result.from]=mdata;
				$('.cmntAuthor_'+c.comment.result.from).html('<div style="padding-bottom:10px;"><img src="'+PROFILES[c.comment.result.from].icons.jpg+'" style="height:32px; vertical-align:middle; margin-right:10px; margin-bottom:5px; float:left"><strong>'+PROFILES[c.comment.result.from].title+'</strong><!--br><small><i>'+PROFILES[c.comment.result.from].description+'</i><br><a href="'+PROFILES[c.comment.result.from].www+'">'+PROFILES[c.comment.result.from].www+'</a><!--br><code>'+c.comment.result.from+'</code></small--></div>');
			} else {
				PROFILES[c.comment.result.from]=c.comment.result.from;
				$('.cmntAuthor_'+c.comment.result.from).html(c.comment.result.from);
			}
}).fail(function() { 
	PROFILES[c.comment.result.from]=c.comment.result.from; 
	$('.cmntAuthor_'+c.comment.result.from).html(c.comment.result.from); 
});
} else {
	if(isset(() => PROFILES[c.comment.result.from].title)) {
		$('.cmntAuthor_'+c.comment.result.from).html('<div style="padding-bottom:10px;"><img src="'+PROFILES[c.comment.result.from].icons.jpg+'" style="height:32px; vertical-align:middle; margin-right:10px; margin-bottom:5px; float:left"><strong>'+PROFILES[c.comment.result.from].title+'</strong><!--br><small><i>'+PROFILES[c.comment.result.from].description+'</i><br><a href="'+PROFILES[c.comment.result.from].www+'">'+PROFILES[c.comment.result.from].www+'</a><!--br><code>'+c.comment.result.from+'</code></small--></div>');
	} else {
		$('.cmntAuthor_'+c.comment.result.from).html(PROFILES[c.comment.result.from]);
	}
}


						} // PRICE COMMENTS
						
					
				} // BANNED
					
				});
			}
}).fail(function() { console.log('API ERROR'); });
}


function showMessages() {
var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
$('#AUTHOR').hide(); 
$('#AUTHOR').html('');
$('#postform').hide();
$('#POSTS').hide();
$('#PROFILE').hide();
$('#MESSAGES').show();
$('#MSGTO').show();
generateKey();
}


function showProfile() {
var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
if(!TXWALLET) { $('#PROFILE').html($('#PROFILE').html()+'<a href="javascript:void(0)" onclick="$(\'#content\').hide(); $(\'#logins\').show();">Sign in</a>'); }

var addr = TXWALLET['address'];

if(!isset(() => PROFILES[addr].title)) {
$.get("https://minterscan.pro/profiles/"+addr, function(data) {
			if(data) {
				PROFILES[addr]=data;
				$('#AUTHOR').html('<div style="padding-bottom:10px;"><img src="'+PROFILES[addr].icons.jpg+'" style="height:48px; vertical-align:middle; margin-right:20px; margin-bottom:5px">'+PROFILES[addr].title+'<br><small><i>'+PROFILES[addr].description+'</i><br><a href="'+PROFILES[addr].www+'">'+PROFILES[addr].www+'</a><br><code>'+addr+'</code></small><br><br><a href="javascript:void(0)" onclick="$(\'#seed\').toggle(\'display\');">Show seed</a><div align="center"><div id="seed" class="btn addrcopy" data-clipboard-action="copy" data-clipboard-target="#seed" style="display:none; font-size:12px; padding:5px; border:1px #fff solid;">'+TXWALLET['seed']+'</div></div></div>');
			} else {
				PROFILES[addr]=addr;
				$('#AUTHOR').html(addr+'&nbsp;&nbsp;&nbsp;<a href="https://minterscan.net/faq/profile" target="_blank">🍃 Sign address</a><br><br><a href="javascript:void(0)" onclick="$(\'#seed\').toggle(\'display\');">Show seed</a><div align="center"><div id="seed" class="btn addrcopy" data-clipboard-action="copy" data-clipboard-target="#seed" style="display:none; font-size:12px; padding:5px; border:1px #fff solid;">'+TXWALLET['seed']+'</div></div>');
			}
}).fail(function() { PROFILES[addr]=addr; $('#AUTHOR').html(addr+'&nbsp;&nbsp;&nbsp;<a href="https://minterscan.net/faq/profile" target="_blank">🍃 Sign address</a><br><br><a href="javascript:void(0)" onclick="$(\'#seed\').toggle(\'display\');">Show seed</a><div align="center"><div id="seed" class="btn addrcopy" data-clipboard-action="copy" data-clipboard-target="#seed" style="display:none; font-size:12px; padding:5px; border:1px #fff solid;">'+TXWALLET['seed']+'</div></div>'); });
} else {
$('#AUTHOR').html('<div style="padding-bottom:10px;"><img src="'+PROFILES[addr].icons.jpg+'" style="height:48px; vertical-align:middle; margin-right:20px; margin-bottom:5px">'+PROFILES[addr].title+'<br><small><i>'+PROFILES[addr].description+'</i><br><a href="'+PROFILES[addr].www+'">'+PROFILES[addr].www+'</a><br><code>'+addr+'</code></small><br><br><a href="javascript:void(0)" onclick="$(\'#seed\').toggle(\'display\');">Show seed</a><div align="center"><div id="seed" class="btn addrcopy" data-clipboard-action="copy" data-clipboard-target="#seed" style="display:none; font-size:12px; padding:5px; border:1px #fff solid;">'+TXWALLET['seed']+'</div></div></div>');
}

$('#AUTHOR').show();



$('#postform').hide();
$('#messageform').hide();
$('#MSGTO').hide();
$('#POSTS').hide();
$('#MESSAGES').show();
$('#sendPGP').hide();
$('#pgpKey').show();
$('#PROFILE').show();
generateKey(1);
}


function setPage(addr,pstid) {
var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
$('#MESSAGES').hide();
$('#PROFILE').hide();
$('#POSTS').html('');
$('#POSTS').show();
if(addr=='ALL') { 
	$('#AUTHOR').hide(); 
	$('#AUTHOR').html(''); 
	$('#postform').hide(); 
	$('#POSTS').html('<h3>World</h3>');
}
if(addr=='MY') { 

if(document.location.href.replace('https://ping.mnst.club/','').indexOf('Mx')==-1) {
document.location.href="/"+TXWALLET['address'];
return false;
}

if(!TXWALLET) { $('#POSTS').html($('#POSTS').html()+'<a href="javascript:void(0)" onclick="$(\'#content\').hide(); $(\'#logins\').show();">Sign in</a>'); return false; }

addr=TXWALLET['address']; if(TXWALLET['address'] == addr) { $('#postform').show('slow'); } }
	
if(addr!='ALL') {
CURRENTUSER=addr;

if(!isset(() => PROFILES[addr].title)) {
$.get("https://minterscan.pro/profiles/"+addr, function(data) {
			if(data) {
				PROFILES[addr]=data;
				$('#AUTHOR').html('<div style="padding-bottom:10px;"><img src="'+PROFILES[addr].icons.jpg+'" style="height:48px; vertical-align:middle; margin-right:20px; margin-bottom:5px">'+PROFILES[addr].title+'<br><small><i>'+PROFILES[addr].description+'</i><br><a href="'+PROFILES[addr].www+'">'+PROFILES[addr].www+'</a><br><code>'+addr+'</code></small></div>');
			} else {
				PROFILES[addr]=addr;
				$('#AUTHOR').html(addr);
			}
}).fail(function() { PROFILES[addr]=addr; $('#AUTHOR').html(addr); });
} else {
$('#AUTHOR').html('<div style="padding-bottom:10px;"><img src="'+PROFILES[addr].icons.jpg+'" style="height:48px; vertical-align:middle; margin-right:20px; margin-bottom:5px">'+PROFILES[addr].title+'<br><small><i>'+PROFILES[addr].description+'</i><br><a href="'+PROFILES[addr].www+'">'+PROFILES[addr].www+'</a><br><code>'+addr+'</code></small></div>');
}

$('#AUTHOR').show();

}


// BANNED							
$.get("/api.php?banned&address="+addr, function(data) {
	if(data) {
		$.each(data, function( n, b ) {
			BANNED[b.commenttx]=1;
		});	
	}
});


// GET POSTS
var dopu='';
if(pstid) { dopu='&ptx='+pstid; }
$.get("/api.php?posts&address="+addr+dopu, function(data) {
			if(data) {
				var PST;
				$.each(data, function( n, p ) {
						var minCprc = (p.post.result.data.value/1000000000000000000);
						
						if(addr=='ALL') { 
							if(LASTB_posts<p.post.result.height) { LASTB_posts=p.post.result.height; }
						}
						
							PST='<div class="post"><div style="float:right; color:#ccc; font-size:14px"><img src="/block.svg" style="height:20px; vertical-align:middle; margin-right:5px;">'+p.post.result.height+'<div style="font-size:14px; padding-top:5px; color:#666">'+p.likesCOUNT+'<img src="/like.svg" style="height:20px; vertical-align:bottom; margin-left:3px;"></div></div><div style="padding:20px; border-bottom:2px #f0f0f0 solid; margin-bottom:25px;"><div class="pstauthor pstAuthor_'+p.post.result.from+'" data-author="'+p.post.result.from+'"></div><div class="clear">&nbsp;</div>'+nl2br(linkifyStr(b64DecodeUnicode(p.post.result.payload).replace('post>','').replace(/<\/?[^>]+(>|$)/g, "")))+'<div id="img_'+p.tx+'" class="picture">'+(p.img!=''?'<img src="'+p.img+'" />':'')+'</div><div style="padding-top:7px; font-size:12px"><a href="/post/'+p.tx+'" class="postlnk">https://ping.mnst.club/post/'+p.tx+'</a></div><div style="float:right; padding-top:10px; text-align:right"><span id="likeResCNT'+p.tx+'">'+p.likes+'</span><img src="/like.svg" style="height:32px; vertical-align:bottom; margin-left:10px; cursor:pointer" onClick="likepost(\''+p.tx+'\',\''+p.post.result.from+'\')"><br><small id="likeResTX'+p.tx+'" class="likeres">Price: '+formatMoney((p.post.result.data.value/1000000000000000000),4, '.', ' ')+' PING</small></div><div class="clear">&nbsp;</div><div id="comments_'+p.tx+'" style="padding:10px 20px;"><a href="javascript:void(getComments(\''+addr+'\',\''+p.tx+'\','+minCprc+',\''+p.post.result.from+'\'))"><img src="/comments.svg" style="height:32px; vertical-align:middle; margin-right:10px;">'+p.comments_count+'</a></div>';

							if(TXWALLET) { PST=PST+'<div align="left"><div style="width:90%; font-size:14px; padding-top:10px"><input type="hidden" id="WLTcomment_'+p.tx+'" value="'+p.post.result.from+'"><input type="hidden" id="PRCcomment_'+p.tx+'" value="'+minCprc+'"><div style="font-size:12px; color:#666; text-align:right" class="countdown">500</div><textarea id="TXTcomment_'+p.tx+'" style="width:100%; height:50px; padding:5px; font-size:14px" placeholder="Comment" class="mailInput" data-limit="500"></textarea><br><br><div style="float:right; font-size:12px">Min. comment price: <span id="POSTminprice_'+p.tx+'" data-minp="'+minCprc+'">'+formatMoney((p.post.result.data.value/1000000000000000000),4, '.', ' ')+'</span> PING</div><a href="javascript:void(comment(\''+p.tx+'\'))" class="btn" id="msgsendbtn'+p.tx+'">Send!</a><div style="padding:5px"><small id="betRes'+p.tx+'"></small></div></div></div>'; }
							
							PST=PST+'</div></div>';
							$('#POSTS').html($('#POSTS').html()+PST);
							
							
							
// AVATAR							
if(!isset(() => PROFILES[p.post.result.from])) {
$.get("https://minterscan.pro/profiles/"+p.post.result.from, function(mdata) {
			if(mdata) {
				PROFILES[p.post.result.from]=mdata;
				$('.pstAuthor_'+p.post.result.from).html('<img src="'+PROFILES[p.post.result.from].icons.jpg+'" style="height:36px; vertical-align:middle; margin-right:10px; margin-bottom:5px;"><strong>'+PROFILES[p.post.result.from].title+'</strong><br><code style="font-size:14px; color:#666">'+p.post.result.from+'</code>');
			} else {
				PROFILES[p.post.result.from]=p.post.result.from;
				$('.pstAuthor_'+p.post.result.from).html(p.post.result.from+'');
			}
}).fail(function() { 
	PROFILES[p.post.result.from]=p.post.result.from; 
	$('.pstAuthor_'+p.post.result.from).html(p.post.result.from+''); 
});
} else {
	if(isset(() => PROFILES[p.post.result.from].title)) {
		$('.pstAuthor_'+p.post.result.from).html('<img src="'+PROFILES[p.post.result.from].icons.jpg+'" style="height:36px; vertical-align:middle; margin-right:10px; margin-bottom:5px;"><strong>'+PROFILES[p.post.result.from].title+'</strong><br><code style="font-size:14px; color:#666"></code>');
	} else {
		$('.pstAuthor_'+p.post.result.from).html(PROFILES[p.post.result.from]+'');
	}
}							
			
			
			if(pstid) { getComments(addr,p.tx,minCprc,p.post.result.from); }		

					});
					
			}
			localStorage.setItem('PING_lbp', LASTB_posts);
			setTimeout(function() { setTXTarea(); }, 2500);
			
}).fail(function() { $('#POSTS').html('API ERROR'); });

}


if(document.location.href.replace('https://ping.mnst.club/','').indexOf('Mx')!=-1) {
	setPage(document.location.href.replace('https://ping.mnst.club/',''));
}
if(document.location.href.replace('https://ping.mnst.club/','').indexOf('post/Mt')!=-1) {
	setPage('ALL',document.location.href.replace('https://ping.mnst.club/post/',''));
} 

if(document.location.href.replace('https://ping.mnst.club/','')=='') {
	setPage('ALL');
}




function setAuth() {
	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	if(TXWALLET) {
		var cwlt = TXWALLET['address'];
		
		if(CURRENTUSER == cwlt) { $('#postform').show('slow'); }
		
		$.get("https://minterscan.pro/profiles/"+cwlt, function(data) {
			if(data) {
				$('#wallet').html('<div style="margin-bottom:10px; padding-bottom:10px; padding-left:45px; padding-top:10px">'+data.title+'</div>');
				$('#wallet').parent().css('background-image','url('+data.icons.jpg+')');
				PROFILES[cwlt]=data;
			} else {
				$('#wallet').html(cwlt+'<br>');
				PROFILES[cwlt]=cwlt;
			}
		}).fail(function() { $('#wallet').html(cwlt+'<br>'); PROFILES[cwlt]=cwlt; });
		
		$('#logoutlink').show();
		
	} else {
		$('#wallet').html('<div><a href="javascript:void(0)" onclick="$(\'#content\').hide(); $(\'#logins\').show();">Sign in</a></div>');
	}
	
	
$.get("/api.php?getKey&address="+cwlt, function(data) {
	if(data && isset(() => data.key)) {
		$('#messageform').show();
		$('#pgpKey').hide();
	}
});

}
setAuth();

function formatMoney(number, decPlaces, decSep, thouSep) {
return number.toFixed(decPlaces).replace(/\d(?=(\d{3})+\.)/g, '$& ');
}

function updateBalances(PK,isauto) {

	var TXWALLET = jQuery.parseJSON(localStorage.getItem('PING'));
	var cwlt = '';
	
	if(TXWALLET) {
		cwlt = TXWALLET['address'];
	}
	
	
	if(cwlt!='') {
	
	var LASTB_posts = localStorage.getItem('PING_lbp');
	var LASTB_msg = localStorage.getItem('PING_lbm');
	if(LASTB_posts=='undefined') { LASTB_posts=0; }
	if(LASTB_msg=='undefined') { LASTB_msg=0; }
	
	$.get("https://monsternode.net/node/address?address="+cwlt+'&lbp='+LASTB_posts+'&lbm='+LASTB_msg, function(data) {
		if(data) {
			if(!isset(() => data.result.balance.PING)) {
				data.result.balance.PING=0;
			}
			$(".balance").html(formatMoney((data.result.balance.PING/1000000000000000000),4, '.', ' '));
			
			
		}
	});
	
	$.get("/api.php?counters&address="+cwlt+"&lbp="+LASTB_posts+"&lbm="+LASTB_msg, function(data) {
		if(data) {
			if(data.cntposts>0) {
				$(".cntposts").html('+'+data.cntposts);
				$(".cntposts").show();
			} else { $(".cntposts").hide(); }
			if(data.cntmsg>0) {
				$(".cntmsg").html('+'+data.cntmsg);
				$(".cntmsg").show();
			} else { $(".cntmsg").hide(); }
		}
	});
		
	} else {
		$(".balance").html('0');
	}
	
	
}

updateBalances();

setInterval(
  function() 
  {
    updateBalances();
  }, 10000);
</script>







<div id="logins" style="display:none">

	<h2>Sign In PING</h2>
	<div class="btnsall">
	<div class="btn" onclick="setWalLGN('SEED')">Sign in with Mnemonic</div>
	<div class="btn" onclick="setWalLGN('NEW')">Create new wallet</div>
	</div>

<div style="display:none" id="SEED" class="wbl">
<h1>Sign in with Mnemonic (Seed) phrase</h1>

<form autocomplete="off" id="bySeed" style="padding-top:5px">
<input autocomplete="false" name="hidden" type="text" style="display:none;">
<textarea rows="1" class="mailInput" style="overflow: hidden; overflow-wrap: break-word; height:100px" id="seed" placeholder="Your Mnemonic (Seed) phrase"></textarea>
<div align="center" style="padding:10px; text-align:center"><div class="btn" id="btnBySeed" onclick="$('#bySeed').submit();">Sign In</div></div>
</form> 
</div>


<div style="display:none" id="NEW" class="wbl">
<h1>Create new wallet with Mnemonic</h1>
<div align="center" style="padding:10px; text-align:center">
	<div class="btn" onclick="newGenerate()" id="btnGenerate">Generate Mnemonic phrase</div>
	<div id="generateSeedAlert" style="display:none">
		<h5>Save Mnemonic!</h5>
		<code><div id="generatedSeed" style="padding-bottom:5px"></div></code>
		<div class="btn addrcopy" data-clipboard-action="copy" data-clipboard-target="#generatedSeed">Copy!</div>
		<p><small><i>Save and sign in with this Mnemonic (Seed) phrase.</i></small></p>
	</div>
</div>
</div>


	<div class="btnBack" style="display:none">
		<div class="btn" onclick="setWalLGN('BACK')">[X] Cancel</div>
	</div>


<script>

      var FINGER='BLOCKED'+Math.random();
      

$(document).ready(function() {                                                    

$("#bySeed").submit(function() {

if($('#seed').val().length<16) {
	alert('Seed is too short!');
	return false;
}

$("#btnBySeed").html('<img src="https://monsternode.net/i/loaderB.svg" height="16" />');

			var u = {};
			u['USR'] = {};
			var W = window.walletFromMnemonic($('#seed').val());
			
			u['USR']['AUTHTYPE']='SEED';
		
			u['USR']['address']=W.address;
			u['USR']['seed']=W.mnemonic;
			u['USR']['pk']=W.private;
			
          	localStorage.setItem('PING', JSON.stringify(u['USR']));
          	
          	$('#logins').hide();
          	$('#content').show('slow'); 
          	setAuth();
          	updateBalances();

		return false;
});

});





function newGenerate() {
$('#generatedSeed').html('<img src="https://monsternode.net/i/loaderB.svg" height="16" />');

			var u = {};
			u['USR'] = {};

			var W = window.generateWallet();
			u['USR']['AUTHTYPE']='GENERATENEW';
			
			u['USR']['address']=W.address;
			u['USR']['seed']=W.mnemonic;
			u['USR']['pk']=W.private;
			
			u['USR']['ADDED']='1';
			          	
          	$("#btnGenerate").hide();
          	
          	$('#generateSeedAlert').show();
          	
          	$('#generatedSeed').html(u['USR']['seed']);


}



</script>

</div>

<script language="javascript">

$(window).on("load", function() {

setTXTarea();

var clipboard = new ClipboardJS('.addrcopy');

clipboard.on('success', function(e) {
    alert('Copied!');
    setWalLGN('SEED');
    e.clearSelection();
   	return false;
});

clipboard.on('error', function(e) {
    console.error('Action:', e.action);
    console.error('Trigger:', e.trigger);
});

});

</script>		
	
</body>
</html>

