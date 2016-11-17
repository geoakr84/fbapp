<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="generator" content="CoffeeCup HTML Editor (www.coffeecup.com)">
    <meta name="dcterms.created" content="Mon, 31 Oct 2016 23:00:18 GMT">
    <meta name="description" content="">
    <meta name="keywords" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="text/javascript" src="http://www.google.com/jsapi">
    </script>
	
	<script type="text/javascript">
      google.load("feeds", "1") //Load Google Ajax Feed API (version 1)
    </script>
    <title>PDTreatment</title>
	
	<style>
	#main{
    position:relative;
    margin-left:30%;
	margin-right:30%;
    margin-left:auto;
    margin-right:auto;
    z-index: -1;
	width: 900px;
    height:700px;
    background-color: #ffffe6;
	}
	
	#table1{
	 position:relative;
	 margin-left:30%;
  	 margin-right:30%;
     margin-left:auto;
     margin-right:auto;
  	 top:70px;
	}
	
	#table2{
	 position:relative;
	 margin-left:30%;
  	 margin-right:30%;
     margin-left:auto;
     margin-right:auto;
  	 top:80px;
	}
	
	h1{   
    position:relative; 
    text-align:center;
    font-size:35px;
	top:30px;
    }
	
	.first{
    position:relative;
	text-align:center;
	font-size:16px;
	}
	
	.second{
    position:relative;
	font-size:16px;
	text-align:center;
	}
	
	a:hover { 
	color:#008000; 
    cursor:pointer;
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
	
	#graph{
	   position:relative;
	   top:800px; 
	}
	
	#note{
	  position:relative;
	  width:500px;
	  margin-left:auto;
      margin-right:auto;
      margin-right:22%;
      margin-left:22%;	
	  border: 1px solid #000000;	
	}	
	
	#note th, #note td{
	border: 1px solid #000000;
    padding: 5px;
	text-align:center;
	
	}
	#links{
	 position:absolute;
     width:320px;
	 top:0px;
	 left:0px;
	 padding:0px;
	}
	
	#other{
	  position:relative;
      margin-left:30%;
  	  margin-right:30%;
      margin-left:auto;
      margin-right:auto;
	  width:900px;
	  margin-bottom:100px;
	  top:30px;
	  font-size:14px;
	}
	
	#gvis{
	position:relative;
    margin-bottom:50px;
	left:5%;  	
    margin-left:auto;
    margin-right:auto;
	}
	
	#feeddiv{
	  position:relative;
	  left:5%;  	
      margin-left:auto;
      margin-right:auto;
	}
	
	#map {
      position:relative;
      left:5%;
      top:20px;
      height: 450px;
      width: 90%;
	  margin-bottom:20px;
    }	
	
	#info{
      position:relative;
      background-color: #e6ffe6;
      text-align:center;
      padding:20px;
      margin-top:10px;
	  margin-bottom:0%;
	}
	</style>
	
    <!--[if IE]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body style="background-color: #ebebe0">
  <script>
    var windowObjectReference;
    var strWindowFeatures = "menubar=yes,location=yes,resizable=yes,scrollbars=yes,status=yes,width=800px,height=600px";
    
    function openRequestedPopup() {
      windowObjectReference = window.open("https://twitter.com/logout", "Twitter_WindowName", strWindowFeatures);
	 }  
	function goHome(){
	  window.location.href="http://pdtreat.x10host.com/";
	 }
    
	
    </script>
  <div id="links">
  <a onclick="openRequestedPopup()" style="font-size:20px;" target="_blank"><u>Logout</u></a>
  <a onclick="goHome()" style="font-size:20px;" target="_self"><u>Home</u></a>
  </div>
  
	
        <div id="main">
		<h1>Parkinson Desease Treatment WebPage</h1>
	
	<?php
        $dataXML = file_get_contents("http://4me302-16.site88.net/getData.php?table=User&id=1");
        $obj = new SimpleXMLElement($dataXML);
        $array = json_decode(json_encode($obj), true);
        /*echo '<pre>';
        print_r($array['userID']['username']);
        echo '</pre>';*/
      ?>
       <table id="t1">
       <theader>
          <td style="font-weight: bold;">Physician's Name</td>
          <td style="font-weight: bold;">Email</td>
          <td style="font-weight: bold;">Role</td>
          <td style="font-weight: bold;">Organization</td>
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
          <td style="font-weight: bold;">Therapy ID</td>
		  <td style="font-weight: bold;">UserIdMedicine</td>
		  <td style="font-weight: bold;">Patient ID</td>          
          <td style="font-weight: bold;">Medicine ID</td>
          <td style="font-weight: bold;">Therapy list</td>
		  <td style="font-weight: bold;">Test ID</td>
		  <td style="font-weight: bold;">Date</td>
		  <td style="font-weight: bold;">Data Url</td>
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
	   </div> <!--end of table1 div -->
	   
	   
	   <div id="table2">
	   <h2 class="second"><u>Notes on Sessions</u></h2>
	   <?php
	    $dataXML3 = file_get_contents("http://4me302-16.site88.net/getData.php?table=Note");
        $obj3 = new SimpleXMLElement($dataXML3);
        $array3 = json_decode(json_encode($obj3), true);
		echo '<pre>';
        print_r($array['noteID']['note']);
        echo '</pre>';
		?>
	   <table id="note">
	   <theader>
	   <td style="font-weight: bold;">Test session ID</td>
	   <td style="font-weight: bold;">Note</td>
	   <td style="font-weight: bold;">Comment by user ID</td>
	   </theader>
	   
	   <?php
	   foreach ($array3['noteID'] as $Note) {
	   $testsession = $Note['Test_Session_IDtest_session'];
	   $note = $Note['note'];
	   $comment = $Note['User_IDmed'];
	   
	   echo "<tr>
	        <td>$testsession</td>
			<td>$note</td>
			<td>$comment</td>";
	   }
	   ?>
	  </table>
	  
	  </div>  <!--end of table2 div -->
	  
	  </div> <!-- end of main -->
	  
	  <div id="other">
	  
	  <div id="gvis">
	  
	  <h4>Graphs</h4>
	  
	  <a href="graph/index.html">Data Visualization for Test Session 1</a>
	  <br />	
	  <a href="graph1/index.html">Data Visualization for Test Session 2</a>
	  <br />	
	  <a href="graph2/index.html">Data Visualization for Test Session 3</a>
	  <br />	  
	  </div> <!-- end of gvis -->
	  
	  
	  
	  <div id="feeddiv"></div>
	  <br />
	  
	  
	  <h3 style="position:relative;left:5%;top:30px;bottom:20px;">The location of my patients</h3>
	  <div id="map"></div>
	   </div> <!-- end of other -->
	  
	  <div id="info">
	  <h4>Final Assignment for Foundations of Computational Media</h4>
	  <h4>Georgios Akritidis</h4>
	  <h4>ga222ey@student.lnu.se</h4>
	  <h4>840703-R171</h4>
	  <h4>Linnaeus University, Växjö</h4>
	  <h4>2016</h4>
	  
	  </div>

	 
	  
	  

          <script type="text/javascript">
          
          var feedcontainer=document.getElementById("feeddiv")
          var feedurl="http://www.news-medical.net/tag/feed/Parkinsons-Disease.aspx"
          var feedlimit=10
          var rssoutput="<b>Latest Medical News:</b><br /><ul>"
          
          function rssfeedsetup(){
          var feedpointer=new google.feeds.Feed(feedurl) //Google Feed API method
          feedpointer.setNumEntries(feedlimit) //Google Feed API method
          feedpointer.load(displayfeed) //Google Feed API method
          }
          
          function displayfeed(result){
          if (!result.error){
          var thefeeds=result.feed.entries
          for (var i=0; i<thefeeds.length; i++)
          rssoutput+="<li><a href='" + thefeeds[i].link + "'>" + thefeeds[i].title +"</a></li>"
          rssoutput+="</ul>"
          feedcontainer.innerHTML=rssoutput
          }
          else
          alert("Error fetching feeds!")
          }
          
          window.onload=function(){
          rssfeedsetup()
          }
          
          </script>
		  
		  <script>

      function initMap() {

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 5,
          center: {lat: 56.787476, lng: 14.772970}
        });

        // Create an array of alphabetical characters used to label the markers.
        var labels = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        // Add some markers to the map.
        // Note: The code uses the JavaScript Array.prototype.map() method to
        // create an array of markers based on a given "locations" array.
        // The map() method here has nothing to do with the Google Maps API.
        var markers = locations.map(function(location, i) {
          return new google.maps.Marker({
            position: location,
            label: labels[i % labels.length]
          });
        });

        // Add a marker clusterer to manage the markers.
        var markerCluster = new MarkerClusterer(map, markers,
            {imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'});
      }
      var locations = [
        {lat: 59.6567, lng: 16.6709},
        {lat: 57.3365, lng: 12.5164}
      ]
    </script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>

		  
		  
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAYItdODIQe1I76y77g3UHRFMmh0zWKoFY&callback=initMap">
          </script>

	 
  </body>
</html>