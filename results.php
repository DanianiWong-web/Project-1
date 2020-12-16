<?
$conn = mysqli_connect("localhost","root","acecreative") or die ("not connected");
mysqli_select_db($conn,"s_database") or die ("no db found");
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style> 
	/*set border to the form*/ 

	form { 
		border: 3px solid #f1f1f1; 
	} 
	/*assign full width inputs*/ 

	input[type=text], 
	input[type=password] { 
		width: 100%; 
		padding: 12px 20px; 
		margin: 8px 0; 
		display: inline-block; 
		border: 1px solid #ccc; 
		box-sizing: border-box; 
	} 
	/*set a style for the buttons*/ 

	img.center {
		display: block;
 		margin-left: auto;
  		margin-right: auto;
 		width: 50%;
		}
		/*center the image*/
	button { 
		background-color: #4CAF50; 
		color: white; 
		padding: 14px 20px; 
		margin: 8px 0; 
		border: none; 
		cursor: pointer; 
		width: 100%; 
	} 
	/* set a hover effect for the button*/ 

	button:hover { 
		opacity: 0.8; 
	} 
	/*set extra style for the cancel button*/ 

	.cancelbtn { 
		width: auto; 
		padding: 10px 18px; 
		background-color: #f44336; 
	} 
	/*centre the display image inside the container*/ 

	.imgcontainer { 
		text-align: center; 
		margin: 24px 0 12px 0; 
	} 
	/*set image properties*/ 

	img.avatar { 
		width: 40%; 
		border-radius: 50%; 
	} 
	/*set padding to the container*/ 

	.container { 
		padding: 16px; 
	} 
	/*set the forgot password text*/ 

	span.psw { 
		float: right; 
		padding-top: 16px; 
	} 
	/*set styles for span and cancel button on small screens*/ 

	@media screen and (max-width: 300px) { 
		span.psw { 
			display: block; 
			float: none; 
		} 
		.cancelbtn { 
			width: 100%; 
		} 
	} 
		


/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
	background-color: #EBC8B2;
}

/* Header/logo Title */
.header {
  text-align: center;
  color: black;
}

      
.questions {
  width: 600px;
  margin: 0 auto;
  background: white;
  padding: 10px 15px;
  border-radius: 10px;
  font-weight: bold

      }


/* Sticky navbar - toggles between relative and fixed, depending on the scroll position. It is positioned relative until a given offset position is met in the viewport - then it "sticks" in place (like position:fixed). The sticky value is not supported in IE or Edge 15 and earlier versions. However, for these versions the navbar will inherit default position */

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: #005221;
}

/* Active/current link */
.navbar a.active {
  background-color: #666;
  color: white;
}

/* Column container */

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
}

/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
		
</style> 
<title>Results - Student Matching</title>
</head>
<body>
	
	<!-- Navigation Bar -->
<div class="navbar" >
  <nav class="navbar navbar-inverse">
    <div class="container-fluid" >
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">CIS 4935 Senior Project</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="homepage.php">Home</a></li>
          <li><a href="results.php">Results</a></li>
          <li><a href="https://www.youtube.com/channel/UCFhzPrAeyjbPFuYDmYX2p0Q">YouTube Channel</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Other
            <span class="caret"></span></a>
              <ul class="dropdown-menu">
		          <li><a href="https://usflearn.instructure.com/courses/1495122/assignments/syllabus">Syllabus</a></li>
                  <li><a href="https://usflearn.instructure.com/courses/1495122/pages/project-suggestions?module_item_id=16761347">Project Ideas</a></li>
		          <li><a href="https://usflearn.instructure.com/courses/1495122">Contact Professor</a></li>        
		        </ul>
		     </li>
            
        </ul>
        <ul class="nav navbar-nav navbar-right">
			 <img src="https://i.ya-webdesign.com/images/university-of-south-florida-logo-png-8.png" alt="" width="50"/>
        </ul>
      </div>
    </div>
  </nav>
</div>
</style> 
<title>Results - Student Matching</title>
</head>
<h1><center>CIS 4935 - IT Senior Project</center></h1>
<h2><center>Results</center></h2>
<br>
	<img src="https://usflearn.instructure.com/courses/1495122/files/94997932/preview" alt="usf" class="center" height="500" width="600">
<br>
<h3><center>You are not obligated to pair with the individuals that were matched with you. Below you will find their name and email. Reach out, get to know them, and start planning. Here are your student matching results: </center></h3 >
<br>
<br>
<br>
<h3><center>Sorry there are no results here yet, check back in a couple hours when more students take the student matching questionnaire!</center></h3>
<body>

</body>
</html>