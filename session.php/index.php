<!DOCTYPE html>
<html lang="en">
<head>
    <title>Shoping Cart</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/bootstrap.js"></script>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        
        *{margin:0px;
        padding:0px;}

        body{font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        color:black;
        }

        img{width:300px;
            margin-top:50px;
        height:300px;
        border:1px solid black;
   }
  
   .sec1{
    float:right;
    margin-right:200px;
   

}
   .sec2{float:left;
    margin-left:200px;
}

nav{
	width: 100%;
	height: 75px;
	background-color:black;
	line-height: 75px;
	padding:0px 100px;
	position:fixed;
	z-index: 1;
}
nav .logo{
	font-size: 30px;
	
	letter-spacing: 1.5px; 
}
nav .logo p{
	float: left;
	color:white;
	text-transform: uppercase;
}
nav ul{
	float: right;
}
nav ul li{
	display: inline-block;
	list-style: none;
}
nav ul li a{
	color:white;
	text-decoration: none;
	font-size: 18px;
	text-transform: uppercase;
	padding:0px 32px;
}
nav ul li a:hover{
	color:lightgreen;
}
nav ul li .active{
	color:lightgreen;
}
.image img{
	width: 100%;
	height: 0px auto;
	opacity: 0.80;
}


    </style>

</head>
<body>
    <html>

    <nav>
		<div class="logo">
			<p>BUYIT</p>
		</div>
		<ul>
			<li><a href="" class="active">home</a></li>
			<li><a href="">about us</a></li>
			<li><a href="">services</a></li>
			<li><a href="viewCart.php">view cart</a></li>
            <li><a href="">contact</a></li>
			
		</ul>
	</nav>
	
<br><br><br><br><br>
      
            <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product added to Cart.
                    
                </div>
            <?php
                }
            ?>

<br><br><br><br><br>
<h1 style="text-align:center" style="font-size:large" >Products</h1>
      <div class="sec1"><img src="bag1.jpg" >
      <h1>Price:2000</h1>
      <form action="addCart.php" method="post">
        <input type="hidden" name="name" value="bag">
        <input type="hidden" name="price" value="2000">
        <input type="text" name="qty" placeholder="Quantity" class="form-control">
        <br>
        <input type="submit" class="btn btn-md btn-success btn-colour-success" value="Add to Cart">
    </form>
    </div>

    <div class="sec2"><img src="bag2.jpg" >
        <h1>Price:2000</h1>
        <form action="addCart.php" method="post">
          <input type="hidden" name="name" value="bag">
          <input type="hidden" name="price" value="2000">
          <input type="text" name="qty" placeholder="Quantity" class="form-control">
          <br>
        <input type="submit" class="btn btn-md btn-success btn-colour-success" value="Add to Cart">
      </form>
</div>


<div class="sec2"><img src="bag3.jpg" >
    <h1>Price:2000</h1>
    <form action="addCart.php" method="post">
      <input type="hidden" name="name" value="bag">
      <input type="hidden" name="price" value="2000">
      <input type="text" name="qty" placeholder="Quantity" class="form-control">
      <br>
        <input type="submit" class="btn btn-md btn-success btn-colour-success" value="Add to Cart">
  </form>
</div>



<div class="sec1"><img src="bag4.jpg" >
    <h1>Price:2000</h1>
    <form action="addCart.php" method="post">
      <input type="hidden" name="name" value="bag">
      <input type="hidden" name="price" value="2000">
      <input type="text" name="qty" placeholder="Quantity" class="form-control">
      <br>
        <input type="submit" class="btn btn-md btn-success btn-colour-success" value="Add to Cart">
  </form>
</div>


<div class="sec2"><img src="bag5.jpg" >
    <h1>Price:2000</h1>
    <form action="addCart.php" method="post">
      <input type="hidden" name="name" value="bag">
      <input type="hidden" name="price" value="2000">
      <input type="text" name="qty" placeholder="Quantity" class="form-control">
      <br>
        <input type="submit" class="btn btn-md btn-success btn-colour-success" value="Add to Cart">
  </form>
</div>



<div class="sec1"><img src="bag6.jpg" >
    <h1>Price:2000</h1>
    <form action="addCart.php" method="post">
      <input type="hidden" name="name" value="bag">
      <input type="hidden" name="price" value="2000">
      <input type="text" name="qty" placeholder="Quantity" class="form-control">
      <br>
        <input type="submit" class="btn btn-md btn-success btn-colour-success" value="Add to Cart">
  </form>
</div>



            </body>
            </html>