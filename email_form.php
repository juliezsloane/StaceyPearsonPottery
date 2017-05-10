<html>
<!DOCTYPE html>
<html lang="en">
  <head>
      <title>Stacey Pearson Rocks.</title>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Untitled Document</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" type="text/css">

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
  </head>
  <body>
  <div class="container-fluid">
      
	  <div class="row">
	    <div class="col-md-12 top">
	      <div class="logo"> 
                <a href="index.html" title="Stacey Pearson Ceramics">
              <img src="images/staceyLogo.png" alt="Stacey Pearson Ceramics">
              </a></div>
	    </div>
      </div>
    <div class="row navBar">
       <div class="col-md-12"><ul id="navBar"><li><a href="about.html">About</a></li><li><a href="https://www.etsy.com/">Shop</a></li><li><a href="contact.html">Contact</a></li></ul></div>
    </div>
    <div class="row main">

Thank you.
<br/>
<a href="index.html">HOME</a>
</div>
<?php
// The message
$name = $_POST['name']; 
$email = $_POST['email'];
$comment = $_POST['comment'];
$message = "Name: ".$name."\n"."Email: ".$email."\n"."Comment: ".$comment."\n";

// In case any of our lines are larger than 70 characters, we should use wordwrap()
$message = wordwrap($message, 70, "\r\n");

// Send
mail('juliezsloane@gmail.com', 'Stacey Rocks Message', $message);

?>



</body>
</html>