<html xmlns:og="http://opengraphprotocol.org/schema/"xmlns:fb="http://www.facebook.com/2008/fbml">
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Fri, 28 Oct 2016 00:31:51 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	
    <title>PDTreatment</title>
    
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<style>
	#links{
    position:absolute;
    top:5px;
    left:5px;
    width:350px;
    height:150px;
	} 
    h1{
	position:relative;
    text-align:center;
    top:20px;
    font-size:35px;
    }
	
	#t1{
    position:relative;
	margin-left:30%;
	margin-right:30%;
    top:3%;
	margin-bottom:50px;
    margin-left:auto;
    margin-right:auto;
    border: 1px solid #000000;
	font-size: 11px;
	}
	
	#t1 th, #t1 td {
	border: 1px solid #000000;
    padding: 10px;
    }
	
	#main{
    position:relative;
    margin-left:auto;
    margin-right:auto;
    alignment-adjust:central;
    margin-top:25px;
	width: 800px;
    height:1700px;
    background-color: #ffffe6;
	}
	
	#vid{
    position:relative;
    margin-left:90px;
    top:30px;
	}
	
    table#vid td{
	margin-top:15px;
	}
	
	#intro{
	text-align:center;
	position:relative;
	top:60px;
    margin-left:5%;
	margin-right:5%;
    font-size:15px;
	}
	
	#info{
      position:relative;
      background-color: #e6ffe6;
      text-align:center;
      padding:20px;
      margin-top:30px;
	  top:20px;
	  margin-bottom:0%;
	}
	</style>
	
  </head>
  <body style="background-color: #ebebe0">
  
    <script>
    window.fbAsyncInit = function() {
    FB.init({
    appId : '312108725828618',
    status : true, // check login status
	version : 'v2.8',
    cookie : true, // enable cookies to allow the server to access the session
    xfbml : true // parse XFBML
    });
    };
    
    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
   
   function back(){
      window.location.href='http://pdtreat.x10host.com/';
   }
   function fbLogout() {
        FB.logout(function (response) {
            //Do what ever you want here when logged out like reloading the page
            window.location.reload();
			window.location.href="http://pdtreat.x10host.com/";
        });
    }

    </script>
	    <div id="links">
        <fb:login-button size = 'xlarge' length = 'long' data-auto-logout-link="true" onlogin = 'fbLoginFunction()'></fb:login-button>
		<a href="http://pdtreat.x10host.com/">Home</a>
		</div>
   
	<div id="main">
	<h1>Parkinson Desease Treatment WebPage</h1>
	
	<?php
        $dataXML = file_get_contents("http://4me302-16.site88.net/index.php?table=User&id=3");
        $obj = new SimpleXMLElement($dataXML);
        $array = json_decode(json_encode($obj), true);
        /*echo '<pre>';
        print_r($array['userID']['username']);
        echo '</pre>';*/
      ?>
       <table id="t1">
       <theader>
          <td><b>Patient's Name</b></td>
          <td><b>Email</b></td>
          <td><b>Role</b></td>
          <td><b>Lat</b></td>
          <td><b>Long</b></td>
       </theader>
      <?php
        foreach ($array as $user) {
          $username = $user['username'];
          $email = $user['email'];
          $role = $user['Role_IDrole'];
          $lat = $user['Lat'];
          $long = $user['Long'];		     
          echo "<tr>
            <td>$username</td>
            <td>$email</td>
            <td>$role</td>
            <td>$lat</td>
            <td>$long</td>
          </tr>";
		  
        }
    ?>    
    </table>
	
	<h4 id="intro">Check out these awesome videos that we uploaded especially for you. Always remember to do your daily exercises if you want to see improvements :)</h4>
	<table id="vid" cellspacing="30px;">
      <tr>
      <td>
      <iframe width="560" height="315" src="https://www.youtube.com/embed/jEY2hS9mLVg" frameborder="0" allowfullscreen></iframe>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/fBwU4ElBJxU" frameborder="0" allowfullscreen></iframe>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/x-JOu1PQpEs" frameborder="0" allowfullscreen></iframe>
	  </td>
	  </tr>
	  <tr>
	  <td>
	  <iframe width="560" height="315" src="https://www.youtube.com/embed/B1TIdGG4mE0" frameborder="0" allowfullscreen></iframe>
	  </td>
	  </tr>
	  </table>
	  
	</div>
	<br />
	  <div id="info">
	  <h4>Final Assignment for Foundations of Computational Media</h4>
	  <h4>Georgios Akritidis</h4>
	  <h4>ga222ey@student.lnu.se</h4>
	  <h4>840703-R171</h4>
	  <h4>Linnaeus University, Växjö</h4>
	  <h4>2016</h4>
	  
	  </div>
  </body>
</html>


	
	