<?php
    /**
     * User has successfully authenticated with Twitter. Access tokens saved to session and DB.
     */
    
    /* Load required lib files. */
    session_start();
    require_once('oauth/twitteroauth.php');
    require_once('twitter_class.php');
	
    
    if(isset($_GET['connect']) && $_GET['connect'] == 'twitter'){
    	$objTwitterApi = new TwitterLoginAPI;
    	$return = $objTwitterApi->login_twitter($_GET['connect']);
    	if($return['error']){
    		echo $return['error'];
    	}else{
    		header('location:'.$return['url']);
    		exit;
    	}
    	
    } 
    
    ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Thu, 27 Oct 2016 01:12:49 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta name="google-signin-client_id" content="54460935802-p207dkbcnnfr37ecors30tqsgnlm75lc.apps.googleusercontent.com">
    <script src="jquery.min.js"></script>
    <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
	
    <title>PDTreatment</title>
    
    <style type="text/css">
    <!--
    body {
      color:#000000;
      background-color:#FFFFFF;
      background-image:url('Background Image');
      background-repeat:no-repeat;
    }
    a  { color:#0000FF; }
    a:visited { color:#800080; }
    a:hover { color:#008000; }
    a:active { color:#FF0000; }
    -->
	#main{
    position:relative;
    left:100px;
    margin-top:0px;
    }
    
    #title{
    font-size: 45px;
	text-align: center;
    }
    
    #img1{
    position:absolute;
    left:450px;
    top:310px;
    width:400px;
    height:300px;
    }
    
    #p1{
    position:relative;
    left:250px;
	top:70px;
    width:250px;
    height:250px;
    background-color: yellow;
    font-size: 20px;
    padding:10px;
    padding-top:80px;
    text-align:center;
    box-shadow: 5px 5px gray;
    text-shadow: 1px 1px #FF0000;
    }
	
  	#f1{
	position:fixed;
	top:0px;
	left:350px;
	margin-top:0px;
	align:right;
	width:1000px;
	height:1000px;
	background-image:url('w.jpg');
	}
	
	#d1{
	position:fixed;
	align:left;
	width:300px;
	height:800px;
	}
	#fbLogout:hover{
	cursor:pointer;
	}
	.profile{
    border: 3px solid #B7B7B7;
    padding: 10px;
    margin-top: 10px;
    width: 350px;
    background-color: #F7F7F7;
    height: 160px;
    }
    .profile p{margin: 0px 0px 10px 0px;}
    .head{margin-bottom: 10px;}
    .head a{float: right;}
    .profile img{width: 100px;float: left;margin: 0px 10px 10px 0px;}
    .proDetails{float: left;}
	
	.web{
	font-family:tahoma;
	size:12px;
	top:10%;
	border:1px solid #CDCDCD;
	border-radius:10px;
	padding:10px;
	width:45%;
	margin:auto;
	height:auto;
}
h1, h2{
	margin:3px 0;
	font-size:13px;
	text-decoration:underline;
}
.tLink{
	font-family:tahoma;
	size:12px;
	padding-left:10px;
	text-align:center;
}

.talign_right{
	text-align:right;
}
.username_availability_result{
	display:block;
	width:auto;
	float:left;
	padding-left:10px;
}
.input{
	float:left;
}
.error{
	color:#FF0000;
	font-size:12px;
}
	</style>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
  <!--<iframe width="82%" height="100%" style="border:none;background-image:url('w.jpg')" id="f1" src="main.html"></iframe> -->
  
  <div id="f1">
     <div class="w3-container">
     <h1 id="title">Welcome to the Parkinson Desease Treatment WebPage</h1>
	 <img src="mjff.png" id="img1" class="w3-image" />
	 <p id="p1" class="w3-image">Here you can find a broad variety of exercises to treat PD and advices from scientists that 
		specialize with Parkinson.
		</br>
		Log in with your Facebook, Google or Twitter account.</p>
	 </div>
  </div>
  
  
  <script>	
	function statusChangeCallback(response) {
      console.log('statusChangeCallback');
      console.log(response);
	   if (response.status === 'connected'){
	   document.getElementById('status').innerHTML='You are connected';
	   testAPI();
	   window.location.href='loginredirect.php';
	   }
	   else if (response.status ==='not_authorized'){
	   document.getElementById('status').innerHTML='You are not authorized';
	   }
	   else{
	   document.getElementById('status').innerHTML='You are not logged in with Facebook';
	   document.getElementById('f1').src='main.html';
	   }
	}
  
  
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  
   window.fbAsyncInit = function() {
    FB.init({
      appId      : '312108725828618',
      xfbml      : true,
      version    : 'v2.8'
    });
    
  
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });

  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Thanks for logging in, ' + response.name + '!';
    });
  }
  
  function fbLogout() {
        FB.logout(function (response) {
            window.location.reload();
        });
    }
    </script>
    
    
    <script>
       function onSuccess(googleUser) {
            var profile = googleUser.getBasicProfile();
            gapi.client.load('plus', 'v1', function () {
                var request = gapi.client.plus.people.get({
                    'userId': 'me'
                });
                //Display the user details
                request.execute(function (resp) {
                    var profileHTML = '<div class="profile"><div class="head">Welcome '+resp.name.givenName+'! <a href="javascript:void(0);" onclick="signOut();">Sign out</a></div>';
                    profileHTML += '<img src="'+resp.image.url+'"/><div class="proDetails"><p>'+resp.displayName+'</p><p>'+resp.emails[0].value+'</p><p>'+resp.gender+'</p><p>'+resp.id+'</p><p><a href="'+resp.url+'">View Google+ Profile</a></p></div></div>';
                    $('.userContent').html(profileHTML);
                    $('#gSignIn').slideUp('slow');
                });
            });
			window.location.href='googleredirect.php';
        }
        function onFailure(error) {
            alert(error);
        }
        function renderButton() {
            gapi.signin2.render('gSignIn', {
                'scope': 'profile email',
                'width': 200,
                'height': 40,
                'longtitle': true,
                'theme': 'dark',
                'onsuccess': onSuccess,
                'onfailure': onFailure
            });
        }
        function signOut() {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
                $('.userContent').html('');
                $('#gSignIn').slideDown('slow');
            });
        }
    </script>
    
    <div id="d1">
	<table cellspacing="10">
	<tr>
	<td>
    <div id="status">
    </div>
	
	<fb:login-button data-max-rows="1" data-show-faces="false" data-auto-logout-link="true" data-size="xlarge" onclick="login()" scope="public_profile,email" onlogin="checkLoginState();">
    </fb:login-button>
    </td>
	</tr>
	<tr>
	<td>
	  <!-- HTML for render Google Sign-In button -->
      <div id="gSignIn"></div>
      <!-- HTML for displaying user details -->
      <div class="userContent"></div>
	</td>
    </tr> 
	<tr>
	<td>	
	<?php
	echo '<a href="index.php?connect=twitter"><img src="./images/lighter.png" width="200" height="40" alt="Sign in with Twitter"/></a>';
	?>
	</td>
	</tr>
    </table>
	
    </div>
	
  </body>
</html>




