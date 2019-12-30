<?php
	$profile_viewer_uid = $_COOKIE['profile_viewer_uid'];	
	echo $profile_viewer_uid;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>The Gaming Place : World Of Gaming</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
	
  </head>

  <body background="purchase.jpg">

    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
      <a class="navbar-brand" href="index.php">The Gaming Place : World Of Gaming </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto"> <!-- -->
		
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
		  
          <li class="nav-item">
            <a class="nav-link" href="register.php">Create Account</a>
          </li>
		  
		  
        </ul>
        <form class="form-inline my-2 my-lg-0">
		
		  <div class="form-group">
          <input name="username" class="form-control mr-sm-2" type="text" placeholder="Enter username" aria-label="Search">
		  </div>
		  
		  <div class="form-group">
          <input name="password" class="form-control mr-sm-2" type="password" placeholder="Enter password" aria-label="Search">
		  </div>
		  
          <button name="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Login</button>
        </form>
		
      </div>
    </nav>
		
	 <main role="main" class="container">
	 
	 <div class="CONTAINER">
	 
	    <div class="row">
		
		     <div class="col-md-4">
			 
			    <div class="cart-block">
				
				    <form action="cart/update" method="post">
					     
						<table cellpadding="6" cellspacing="1" style="width:100%" border="1">
						 
						    <tr>
							     <th> Quantity </th>
								 <th style="text-align:right">Item Price</th>
							</tr>
				             
							<tr>
							    
							     <td></td>
							     <td class="right" style="text-align:right"> $ </td>
							</tr>
							
						</table>
						
						
					</form>
				</div>
				
				<!-- LIST GROUP IN COL-MID-4 -->
				
				<div class="panel panel-default panel-list">
				
				    <div class="panel-heading panel-heading-dark" style="text-align:center;">
					
					     <h3 class="panel-title">
						 
						    <font color="#800000">Categories</font>
							
						 </h3>
					
					</div>
				
				<ul class="list-group" background="register.png">
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">Gaming Consoles</font></a></li>
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">Xbox One Games</font></a></li>
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">Play Station 4 Games</font></a></li>
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">Nintendo WII U Games</font></a></li>
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">Xbox 360 Games</font></a></li>
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">PlayStation 3 Games</font></a></li>
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">Nintendo WII Games</font></a></li>
                     <li class="list-group-item list-group-item-success"><a href="#"><font color="purple">Other Consoles Games</font></a></li>
                </ul>
				
			    </div>
				
				<br> <!-- here another box start-->
				
				<div class="panel panel-default panel-list">
				
				    <div class="panel-heading panel-heading-dark" style="text-align:center;">
					
					     <h3 class="panel-title">
						 
						    <font color="#800000">Most Popular</font>
							
						 </h3>
					
					</div>
				
				<ul class="list-group">
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">Gaming Consoles</font></a></li>
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">Xbox One Games</font></a></li>
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">Play Station 4 Games</font></a></li>
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">Nintendo WII U Games</font></a></li>
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">Xbox 360 Games</font></a></li>
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">PlayStation 3 Games</font></a></li>
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">Nintendo WII Games</font></a></li>
                     <li class="list-group-item list-group-item-danger"><a href="#"><font color="#24560E">Other Consoles Games</font></a></li>
                </ul>
				
				</div>
				
			 </div>
				
				
				<!-- 8 column div-->
				
		<div class="col-md-8">
		        
			 
			     <div class="panel panel-default">
				
				     <div class="panel-heading panel-heading-green">
				   
				      <h3 class="panel-title">The Gaming Place</h3>
					 
					 </div>
					
					 <div class="panel-body">
					 
					    <table class="table table-striped">
						
						  <tr>
						     <th>Product</th>
						     <th>Quantity</th>
						     <th>Price</th>
						  </tr>
						  
						  
						</table>
						
						 <h3>Shipping Info</h3>
						 
						     <div class="form-group">
							    <label>Address</label>
								<input type="text" class="form-control" name="address">
							 </div>
							 
							 <div class="form-group">
							    <label>Address2</label>
								<input type="text" class="form-control" name="address2">
							 </div>
							 
							 <div class="form-group">
							    <label>City</label>
								<input type="text" class="form-control" name="city">
							 </div>
							 
							 <div class="form-group">
							    <label>State</label>
								<input type="text" class="form-control" name="state">
							 </div>
							 
							 <div class="form-group">
							    <label>ZipCode</label>
								<input type="text" class="form-control" name="zipcode">
							 </div>
							 
							<p><button class="btn btn-primary" type="submit" name="submit">CheckOut</button></p>
					 
					     
					 </div>			 
			 
			    </div>
		     
		     </div>
					
		</div>
	 
	 </div>
	 
	</main>
	
	
	<!-- FOTTER -->
	
	<div class="row footer">
	     <div class="container">
		    
			 <p> The Gaming Place &copy; 2018 , All Rights Reserved </p>
			 
		 </div>
	</div>
	
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../../../assets/js/vendor/popper.min.js"></script>
    <script src="../../../../dist/js/bootstrap.min.js"></script>
  </body>
</html>
