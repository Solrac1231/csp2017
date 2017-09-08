<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Contact Form</title>
</head>
<style>

/* Nav bar*/
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
    top: 0;
    width: 100%;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active), .dropdown:hover .dropbtn {
    background-color: #008CBA;
}

li.dropdown {
    display: inline-block;
    color: white;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: white;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #f1f1f1;
    color: white;
}

.dropdown:hover .dropdown-content {
    display: block;
}

.active {
    background-color: #008CBA;
}

.active:hover{
    background-color: #008CBA;
    color: black;
}

/*Background and text*/
body, html {
    height: 100%;
    margin: 0;
}

.hero-image {
  background-image: url("images/background4.png");
  height: 150%;
  background-position: center;
  background-repeat: repeat-x;
  background-size: cover;
  background-attachment: fixed;
  position: relative;
}

.hero-text {
  text-align: center;
  position: absolute;
  top: 10%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: black;
}

/* Style the labels*/
label {
    display:block;
    margin-top:20px;
    letter-spacing:2px;
    text-align: left;
}

/* Centre the page */
.body {
    display:block;
    margin:0 auto;
    width:576px;
    height:210px;
}

/* Centre the form within the page */
form {
    margin:0 auto;
    width:459px;
    height:150px;
}

/* Style the text boxes */
input, textarea {
    width:439px;
    height:27px;
    background:#efefef;
    border:1px solid #dedede;
    padding:10px;
    margin-top:3px;
    font-size:0.9em;
    color:#3a3a3a;
    -moz-border-radius:5px;
    -webkit-border-radius:5px;
    border-radius:5px;
}

/*Style the message area*/
textarea {
	height:150px;
}

input:focus, textarea:focus {
    border:1px solid #97d6eb;
}

/*Style the button*/
#submit {
    background-color: #008CBA;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    text-align: center;
    width:127px;
    height:38px;
    margin-top:20px;
}

#submit:hover {
    background-color: #333;
    text-align: center;
    color: white;
}

.sub-text {
  text-align: center;
  position: relative;
  color: black;
}

</style>
<body>
    
    <ul>
<li><a href="index.html">Home</a></li>
  <li><a href="aboutme.html">About</a></li>
    <li class="dropdown">
    <a href="portfolio.html" class="dropbtn">Portfolio</a>
    <div class="dropdown-content">
      <a href="portfolio.html">Assignment</a>
      <a href="portfolio.html">Assignment</a>
      <a href="portfolio.html">Assignment</a>
      <li style="float:right"><a class="active" href="index.php">Contact</a></li>
    </div>
  </li>
</ul>

<div class="hero-image">
<h1 class="hero-text" style="font-size:50px">Need To Reach Carlos Henriquez?</h1>

    <header class="body">
    </header>

    <section class="body">
        
<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $from = 'From: Contact Form'; 
    $to = 'chase.henriquez@gmail.com'; 
    $subject = 'Hello';

    $body = "From: $name\n E-Mail: $email\n Message:\n $message";
    
    if ($_POST['submit']) {
    if ($name != '' && $email != '') {				 
    if (mail ($to, $subject, $body, $from)) { 
	    echo '<p text-align:center;">Your message has been sent!</p>';
	} else { 
	    echo '<p style="color:#ff0000;text-align:center;">Something went wrong, go back and try again!</p>'; 
	    } 
    } else {
        echo '<p style="color:#ff0000;text-align:center;">You need to fill in all required fields!</p>';
    }
}
?>

    <form method="post" action="index.php">
        
    <label>Name*</label>
    <input name="name" placeholder="Type Here">
            
    <label>Email*</label>
    <input name="email" type="email" placeholder="Type Here">
            
    <label>Message*</label>
    <textarea name="message" placeholder="Type Here"></textarea>
            
    <input id="submit" name="submit" type="submit" value="Submit">
        
    </form>
  </section>
</div>

<div class="sub-text">
  <p style="font-size:11px">Copyright 1999-2017 by Carlos Industries. All Rights Reserved.</p>
  <p style="font-size:11px">Powered by <a href="https://github.com/" target="_blank">Github Inc.</a></p>
</div>
</body>
</html>