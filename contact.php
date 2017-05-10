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
        
    <div>
   <?php include 'topEdge.php';?>
   </div>
    <div class="row main">
      
<div class="title">Send me a message!</div>





 <div id="contactForm">
      <form name="contactform" method="post" action="email_form.php" >
        Name:<br>
  	<input type="text" name="name" value=""><br/>
  	    Email:<br>
  	<input type="text" name="email" value=""><br/>
  		Message:<br>
  	<textarea name="message" form="contactform"></textarea>
  	<br/>
      <input type="submit" value="Submit">   

 			</form>

</div>
 <div>
   <?php include 'bottomEdge.php';?>
   </div>

		</div>
           <div class="row navBar footer">
       <div class="col-md-12"><ul id="navBar"><li  id="liFirst"><a href="index.php">Home</a></li><li><a href="products.php">Products</a></li><li><a href="http://www.etsy.com">Shop</a></li><li><a href="contact.php">Contact</a></li></ul></div>
</div>
	</div>

</body>
</html>




