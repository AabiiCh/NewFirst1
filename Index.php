<!DOCTYPE html>
<html>
<head>
	<title> Home </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div id="div_main">
	<header> 
    
       <h1> Razaq Medican Company </h1>
   
	</header>
	<nav> 
      
      <ul>
      	<li> <a href="" class="active"> Home </a> </li>
      	<li> <a href=""> Category </a> </li>
      	<li> <a href="company.html"> Companies </a> </li>
      </ul>
 
	</nav>
	<section>
	<center><h2>All Medicines</h2></center>
	<?php
     mysql_connect('localhost' , 'root' , '') or die("Serwar not found");
     mysql_select_db('medicine_db') or die("Serwar not found");
     $products = mysql_query('SELECT * FROM product');


     while ($product = mysql_fetch_assoc($products)) { ?>


		
		<div class="medican">
		<h3 align="center"> <?php echo $product['pro_name'] ?></h3>
          <img height="150px" width="190px" src="images/<?php echo $product['pro_img']; ?>" >
          <center>
          <a href="detail.php">Details</a>
           </center>
		</div>

	<?php } ?>

	</section>
	<footer>
	<center><h3>Copyright All right Reserved</h3></center>
		
	</footer>



</div>

</body>
</html>
