<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Sat, 29 Oct 2016 23:10:41 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta name="google-signin-client_id" content="54460935802-p207dkbcnnfr37ecors30tqsgnlm75lc.apps.googleusercontent.com">
    <script src="https://www.google.com/jsapi"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script type="text/javascript" src="jquery-2.1.1.js"></script>

    <title>PDTreatment</title>
    
    <style type="text/css">
    <!--
    body {
      color:#000000;
      background-color:#FFFFFF;
      background-image:url('Background Image');
      background-repeat:no-repeat;
	  z-index:-1;
    }
    a  { color:#0000FF; }
    a:visited { color:#800080; }
    a:hover { color:#008000; }
    a:active { color:#FF0000; }
    -->
	
	h1{
	font-size: 45px;
	text-align: center;
	}
	.profile{
    border: 0px solid #B7B7B7;
    padding: 0px;
    margin-top: 0px;
    width: 1px;
    background-color: #F7F7F7;
    height: 1px;
    }
    .profile p{margin: 0px 0px 10px 0px;}
    .head{margin-bottom: 10px;}
    .head a{float: right;}
    .profile img{width: 100px;float: left;margin: 0px 10px 10px 0px;}
    .proDetails{float: left;}
	
	#gSignIn{
	visibility:hidden;
	}
	
	#main{
    position:relative;
    margin-left:30%;
	margin-right:30%;
    margin-left:auto;
    margin-right:auto;
    z-index: -1;
	width: 900px;
    height:500px;
    background-color: #ffffe6;
	}
	
	h1{   
    position:relative; 
    text-align:center;
    font-size:35px;
	top:30px;
    }
	
	#table1{
	 position:relative;
	 margin-left:30%;
  	 margin-right:30%;
     margin-left:auto;
     margin-right:auto;
  	 top:70px;
	}
	
	.first{
    position:relative;
	text-align:center;
	font-size:16px;
	}
	
    #t1{
    position:relative;
	margin-left:30%;
	margin-right:30%;
    top:50px;
    margin-left:auto;
    margin-right:auto;
    border: 1px solid #000000;	
    font-size: 11px;
	}
	
	#t1 th, #t1 td {
	border: 1px solid #000000;
    padding: 5px;
	text-align:center;
	}
	
	#t2{
	   position:relative;
	   margin-left:30%;
    	margin-right:30%;
        margin-left:auto;
        margin-right:auto;
	   border: 1px solid #000000;
	   font-size: 11px;
	}
	
	#t2 th, #t2 td {
	border: 1px solid #000000;
    padding: 5px;
    text-align:center;
	}
	
	#other{
	  position:relative;
      margin-left:30%;
  	  margin-right:30%;
      margin-left:auto;
      margin-right:auto;
	  width:900px;
	  height:150px;
	  margin-bottom:20px;
	  top:20px;
	  font-size:14px;
	  background-color:#ffe6cc;
	}
	
	#gvis{
	position:relative;
    top:20px;
	left:10%;  	
    margin-left:auto;
    margin-right:auto;
	}
	
	#graphs{
	   position:relative;
	   top:100px;
	   margin-left:auto;
       margin-right:auto;
       margin-right:31%;
       margin-left:31%;	
	   width: 700px;
	   height: 350px;
	   bottom:20px;
	}
	
	#info{
      position:relative;
      background-color: #e6ffe6;
      text-align:center;
      padding:20px;
	  top:30px;
	  margin-bottom:0%;
	}
    </style>
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
  </head>
  <body style="background-color: #ebebe0">
  <script src="jquery.min.js"></script>
  <script src="https://apis.google.com/js/client:platform.js?onload=renderButton" async defer></script>
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
        }
        function onFailure(error) {
            alert(error);
        }
        function renderButton() {
            gapi.signin2.render('gSignIn', {
                'scope': 'profile email',
                'width': 1,
                'height': 1,
                'longtitle': true,
                'theme': 'dark',
				'visibility': 'hidden',
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
  
      <a href="http://pdtreat.x10host.com" style="font-size:20px;" onclick="signOut()">Sign out</a>	
      <!-- HTML for render Google Sign-In button -->
      <div id="gSignIn"></div>
      <!-- HTML for displaying user details -->
	  <div class="profile">
	  <div class="head"></div>	
	  <div class="proDetails"></div>  
	  </div>
      <div class="userContent"></div> 
	  
	  
		<div id="main">	
		<h1>Parkinson Desease Treatment WebPage</h1>  
		
	<?php
        $dataXML = file_get_contents("http://4me302-16.site88.net/index.php?table=User&id=2");
        $obj = new SimpleXMLElement($dataXML);
        $array = json_decode(json_encode($obj), true);
        /*echo '<pre>';
        print_r($array['userID']['username']);
        echo '</pre>';*/
      ?>
       <table id="t1">
       <theader>
          <td>Researcher's Name</td>
          <td>Email</td>
          <td>Role</td>
          <td>Organization</td>
       </theader>
      <?php
        foreach ($array as $user) {
          $username = $user['username'];
          $email = $user['email'];
          $role = $user['Role_IDrole'];
          $org = $user['Organization'];
          echo "<tr>
            <td>$username</td>
            <td>$email</td>
            <td>$role</td>
            <td>$org</td>
          </tr>";
        }
    ?>
	</table>      
	   
	  <div id="table1">
	       
      <?php 
	    $dataXML2 = file_get_contents("http://4me302-16.site88.net/getFilterData.php?parameter=User_IDmed&value=1");
        $obj2 = new SimpleXMLElement($dataXML2);
        $array2 = json_decode(json_encode($obj2), true);
      ?>  
	  
	  <h2 class="first"><u>Report of patients activity</u></h2>
	  
      <table id="t2">
       <theader>
          <td>Therapy ID</td>
		  <td>UserIdMedicine</td>
		  <td>Patient ID</td>          
          <td>Medicine ID</td>
          <td>Therapy list</td>
		  <td>Test ID</td>
		  <td>Date</td>
		  <td>Data Url</td>
       </theader>
  	    <?php

          foreach ($array2['test_sessionID'] as $EData) {

      		  $therapyID = $EData['therapyID'];
      		  $userIDmed = $EData['User_IDmed'];
      		  $patientID = $EData['User_IDpatient'];		  
      		  $medicineID = $EData['medicineID'];
      		  $therapyListID = $EData['therapy_listID'];
      		  $testID = $EData['testID'];
      		  $date = $EData['test_datetime'];
      		  $dataUrl = $EData['DataURL'];

      		  echo "<tr>
      		      <td>$therapyID</td>
      			  <td>$userIDmed</td>
      			  <td>$patientID</td>			  
      			  <td>$medicineID</td>
      			  <td>$therapyListID</td>
      			  <td>$testID</td>
      			  <td>$date</td>
      			  <td>$dataUrl</td>
      			  </tr>";
  		    }
  	   ?>	
	   </table>
	   </div> <!-- end of table1 div -->
	   
	   </div> <!-- end of main div -->   
	   
	  <div id="other">
	  
	  <div id="gvis">
	  
	  <h3>Graphs</h3>
	  <ul>
	  <li>
	  <a href="graph4/index.html">Data Visualization for Test Session 1</a>
	  </li>
	  <li>
	  <a href="graph5/index.html">Data Visualization for Test Session 2</a>
	  </li>
	  <li>
	  <a href="graph6/index.html">Data Visualization for Test Session 3</a>
	  </li>
	  </ul>
	    
	  </div> <!-- end of gvis -->
	  
	  </div> <!-- end of other -->
	  
	  
	  <div id="info">
	  <h4>Final Assignment for Foundations of Computational Media</h4>
	  <h4>Georgios Akritidis</h4>
	  <h4>ga222ey@student.lnu.se</h4>
	  <h4>840703-R171</h4>
	  <h4>Linnaeus University, Växjö</h4>
	  <h4>2016</h4>
	  
	  </div>
	   
	  
	
	
	
    <!--  
    <div id="graphs"></div>
	
	
	
    <?php
        
    ?>
	  <script>

      $().ready( function(){
            prepareData();
      });

      function prepareData() {
        getDataFromServer(function(data) {

            //the data has the int values in string so we convert them in int
            for (var i = 0; i < data.length; i ++) {
              for (var j = 0; j < data[i].length; j++) {
                if ($.isNumeric(data[i][j])) {
                  data[i][j] = parseFloat(data[i][j]);
                }
              }
            }

            googleVisualisation(data);
        });
          
      }

      function getDataFromServer(callback) {
          $.ajax({ type: "POST", url: 'server.php', data: { type: 'visualizeData'}})
           .done(function(response) {
              callback($.parseJSON(response));
          });
      }


      function googleVisualisation(myData) {

        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {

          var data = google.visualization.arrayToDataTable(myData);


        var options = {
          title: 'Test Session No1',
          hAxis: {title: 'X', minValue: 0, maxValue: 15},
          vAxis: {title: 'Y', minValue: 0, maxValue: 15},
          legend: 'none'
        };

        var chart = new google.visualization.ScatterChart(document.getElementById('graphs'));

        chart.draw(data, options);
        // Load the Visualization API and the corechart package.
        }
    }


    </script>
    <script src="http://code.jquery.com/jquery.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
	-->
	
  </body>
</html>