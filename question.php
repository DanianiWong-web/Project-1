<?php 
error_reporting(0);
$conn = mysqli_connect("localhost","root","acecreative") or die ("not connected");
mysqli_select_db($conn,"s_database") or die ("no db found");

if(isset($_POST['submit'])){
	
	$sName = $_POST['name'];
	$sEmail = $_POST['email'];
	$sMajor = $_POST['q1'];
	$sProject = $_POST['q2'];
	$sOtherP = $_POST['Other'];
	$sTime = $_POST['q3'];
	$sDay = $_POST['q4'];
	$sLanguage =implode(',', $_POST['q5']);
	$sSkill = implode(',', $_POST['q6']);
	$sGroup = $_POST['q7'];
	
	

	$s = "select * from students where email = '$sEmail'";
	
	$result = mysqli_query($conn,$s);
	
	$num = mysqli_num_rows($result);
	if($num == 1){ 
		echo"<h3> You have already filled out the Questionnaire </h3>";
	}else{ 
	
	$query = "insert into students (Name,email,Major,Project_Type,Other_Project,Available_Time,Available_Days,Language,Skills,Interest) values ('$sName','$sEmail','$sMajor','$sProject','$sOtherP','$sTime','$sDay','$sLanguage','$sSkill','$sGroup')";
	$query_run = mysqli_query($conn,$query);
	echo "<h3> You have successfully filled out the Questionnaire </h3>";
	}  
	
	
	
	mysqli_close($conn);
	
	
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <title>Questionnaire 2.0</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
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
      body {
    background-color: #EBC8B2;
}
    </style>
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

<!-- Header of Page -->
<div class="header">  
  <h1><center>CIS 4935 - IT Senior Project</center></h1>
  <center><img src="https://usflearn.instructure.com/courses/1495122/files/94997932/preview" alt="usf" class="center" height="500" width="600"></center>
  <h2><center>Please fill out this questionnaire</center></h2>
</div>
  <form action = "question.php" method="post">
<!-- Questionnaire -->    
<div class="questions">
  
<div class="question1">
<section style="" class="body current" id="wizard-p-0" role="tabpanel" aria-labelledby="wizard-h-0" aria-hidden="false">
  <div class="wrapper_row" style="">
    <div class="row js_error_placement_parent step_1">
      <div class="m_header_step" data-step="1">
        <p class="js_error_placement quizz_question ">What is your name?</p>
        <input type="text"  name="name" required>
      </div>

      <div class="form_fields select_row">
        <div class="form_input">
        </div>
      </div>
    </div>
  </div>
</section>
</div>

  
  
  
<div class="question2">
<section style="" class="body current" id="wizard-p-0" role="tabpanel" aria-labelledby="wizard-h-0" aria-hidden="false">
  <div class="wrapper_row" style="">
    <div class="row js_error_placement_parent step_1">
      <div class="m_header_step" data-step="1">
       <p class="js_error_placement quizz_question ">What is your USF E-mail?</p>
        <input type="text" placeholder="@usf.edu" name="email" required>
      </div>

      <div class="form_fields select_row">
        <div class="form_input">
        </div>
    </div><!-- - class=row -->
  </div><!-- - class=wrapper_row -->
  </div>
</section>
</div>
  
  
  
  
<div class="question3">
    <p>What is your major?</p>
    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
    <!-- The value is which answer the choice corresponds to. -->
    <label><input type="radio" name="q1" value="Information Technology" required>
      Information Technology
    </label><br />
    <label><input type="radio" name="q1" value="Cybersecurity">
      Cybersecurity
    </label><br />
    <label><input type="radio" name="q1" value="Computer Science">
      Computer Science
    </label><br />
    <label><input type="radio" name="q1" value="Computer Engineering">
      Computer Engineering
    </label><br />
    <label><input type="radio" name="q1" value="Other">
      Other
    </label><br />
  </div>

  
  
  
<div class="question4">
    <p>What project are you interested in?</p>
    <!-- Here are the choices for the second question. Notice how each input tag has the same name (q2), but a different name than the previous question. -->
    <label><input type="radio" name="q2" value="Build a robust financial accounting system" required>
      Build a robust financial accounting system
    </label><br />
    <label><input type="radio" name="q2" value="Develop a student matching system for this course">
      Develop a "student matching" system for this course
    </label><br />
    <label><input type="radio" name="q2" value="Mesh network sensor array">
      Mesh network sensor array.
    </label><br />
    <label><input type="radio" name="q2" value="Build a thoroughly redundant network">
      Build a thoroughly redundant network
    </label><br />
    <label><input type="radio" name="q2" value="Status reporting system for CIS4935">
      Status reporting system for CIS4935
    </label><br />
    <label><input type="radio" name="q2" value="Build a smart building">
      Build a "smart" building
    </label><br />
    <label><input type="radio" name="q2" value="Build a basic secure Electronic Medical Record system">
      Build a basic secure Electronic Medical Record system
    </label><br />
    <label><input type="radio" name="q2" value="Build an application on top of a foundation of highly redundant databases">
      Build an application on top of a foundation of highly redundant databases
    </label><br />
    <label><input type="radio" name="q2" value="Virtual Reality (or otherwise interesting video) Game">
      Virtual Reality (or otherwise interesting video) Game
    </label><br />
    <label><input type="radio" name="q2" value="Help the Right Whales">
      Help the Right Whales
    </label><br />
    <label><input type="radio" name="q2" value="Other">
      Other
    </label><br />


  
  
<section style="" class="body current" id="wizard-p-0" role="tabpanel" aria-labelledby="wizard-h-0" aria-hidden="false">
  <div class="wrapper_row" style="">
    <div class="row js_error_placement_parent step_1">
      <div class="m_header_step" data-step="1">
        <p class="js_error_placement quizz_question ">If other, what project do you have in mind?</p>
        <span class="not_mandatory"></span>
      </div>

      <div class="form_fields select_row">
        <div class="form_input">
          <span><input type="text" name="Other" ></span>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

  
  
  
<div class="question5">
    <p>When are you mainly available?</p>
    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
    <!-- The value is which answer the choice corresponds to. -->
    <label><input type="radio" name="q3" value="Mornings and Days" required>
      Mornings and Days
    </label><br />
    <label><input type="radio" name="q3" value="Evening and Nights">
      Evening and Nights
    </label><br />
    <label><input type="radio" name="q3" value="Both">
      Both
    </label><br />
  </div>
  
  
  
  
  <div class="question6">
    <p>What days are you mainly available?</p>
    <!-- Here are the choices for the first question. Each input tag must have the same name. For this question, the name is q1. -->
    <!-- The value is which answer the choice corresponds to. -->
    <label><input type="radio" name="q4" value="Weekdays" required>
      Weekdays
    </label><br />
    <label><input type="radio" name="q4" value=" Weekends">
      Weekends
    </label><br />
    <label><input type="radio" name="q4" value="Both">
      Both
    </label><br />
  </div>
  
  
  
  
<div class="question7" data-toggle="buttons">
  <p>What languages are you strongest in?</p>
  <label><input type="checkbox" name="q5[]" value="C++" >
  C++</label><br />
  <label><input type="checkbox" name="q5[]" value="C#">
  C#</label><br />
  <label><input type="checkbox" name="q5[]" value="Java">
  Java</label><br />
  <label><input type="checkbox" name="q5[]" value="HTML / CSS">
  HTML / CSS</label><br />
  <label><input type="checkbox" name="q5[]" value="PHP">
  PHP</label><br />
  <label><input type="checkbox" name="q5[]" value="Python">
  Python</label><br />
  <label><input type="checkbox" name="q5[]" value="SQL">
  SQL</label><br />
  <label><input type="checkbox" name="q5[]" value="JavaScript">
  JavaScript</label><br />
</div>

  
  
  
<div class="question8" data-toggle="buttons">
  <p>What are your skills?</p>
  <label><input type="checkbox" name="q6[]" value="Leadership">
  Leadership</label><br />
  <label><input type="checkbox" name="q6[]" value="Coding / Development">
  Coding / Development</label><br />
  <label><input type="checkbox" name="q6[]" value="Planning / Time management">
  Planning / Time management</label><br />
  <label><input type="checkbox" name="q6[]" value="Teamwork / People skills">
  Teamwork / People skills</label><br />
  <label><input type="checkbox" name="q6[]" value="Hardware">
  Hardware</label><br />
  <label><input type="checkbox" name="q6[]" value="Problem solving / creativity">
  Problem solving / creativity</label><br />
  <label><input type="checkbox" name="q6[]" value="Adaptability">
  Adaptability</label><br />
</div>

  
		  
		  <div>
			  <br>
			  <button type="submit" name ="submit">Submit</button> 
			  <br>
			  <br>
		  </div>
		  
      </div>
    </div>
  </div>
</section>

  
  
</div>
  
	</div>
  </form>
  
  </body>
</html>