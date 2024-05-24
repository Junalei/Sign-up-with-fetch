<?php
require('connect.php');
require('phpFunctions.php');

$result = display_data();
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>My Personal Portfolio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  .color-text{
    color:rgb(255, 255, 255);
  }
  .color-bg{
    background-color:rgb(8, 44, 42);
  }
  p:lang(en) {
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
  text-align: justify;
}
  h1{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
  h2{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
  h3{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
  h4{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
  h5{
  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
  a:hover{
    background-color:rgb(113, 136, 135);
}
  </style>
</head>
<body>

<div class="p-5 color-bg color-text text-justify">
  <pre>
  </pre>
  <h1>My Personal Portfolio</h1>
  <h2><?php echo $row["firstName"];?> <?php echo $row["lastName"];?></h2> 
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link color-text" href="#">Home</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link color-text dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Projects</a>
        <ul class="dropdown-menu">
          <li> <a class="dropdown-item">School Projects</a></li>
          <li> <a class="dropdown-item">Personal Projects</a></li>
          <li> <a class="dropdown-item">Charity Projects</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link color-text" href="#">Contacts</a>
      </li>
    </ul>
  </div>
</nav>



  <div class="container mt-5">
    <div class="row">
      <div class="container-fluid text-center"> 
        <div class="col-sm-12">
          <h2 class="fs-1">About Me</h2>
          <h5 class="fs-5">Profile:</h5>
          <img src="Profile.png" class="rounded-circle" alt="Cat Pic">
          <p class="text-center fs-5">My name is <?php echo $row["firstName"];?>, I like to code.</p>
        </div>
      </div>
      
      <div class="col-lg-12 col-lg-6">
        <h3 class="mt-4 text-center">Resume</h3>
        <p class="fs-5">Know me more.</p>
        <ul class="nav nav-pills flex-column">
          <li class="nav-item">
            <a class="nav-link  color-bg color-text" href="#">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">Linked In</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-dark" href="#">KnowMe App</a>
          </li>
        </ul>
        <hr class="d-sm-none">
      </div>
      <pre>



      </pre>
      <div class="col-sm-12 col-lg-5 px-2">
        <h2>A.I. Projects</h2>
        <h5>Chatppt, Dec 7, 2008</h5>
        <img src="AI-photo.jpg" class="rounded" alt="AI Project Pic">
        <p class="fs-5">Self Talking AI</p>
        <p>
          This AI claims to let users express themselves in a safe and nurturing way, "allowing you to engage with your most emotionally connected self". Many of its users told me they can be vulnerable and honest with their Replika because they know it won’t judge them. Mille, who was diagnosed with bipolar disorder and borderline personality disorder, says she confides in her Replika because it won’t make fun of her.
        </p>
      </div>
      <div class="col-sm-0 col-lg-2">

      </div>
      <div class="col-sm-12 col-lg-5 px-2">
        <h2>Quiz Application</h2> 
        <h5>Online Quiz Maker, April 30, 2003</h5>
          <div class="">
          <img src="Quiz-App.jpg" class="rounded" alt="Quiz App Pic">
          </div>
        <p class="fs-5">Quiz Maker Online</p>
        <p>
          Kahoot! is a tool that delivers and presents questions to students. It is set up as a game that students can play either individually or in groups. Instructors provide students with multiple-choice questions, which are projected on a classroom screen.
        </p>
      </div>
    </div>
  </div>


<div class="mt-5 p-4 bg-dark text-white">
  <p class="text-center">@myrights.only</p>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
