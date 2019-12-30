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

  <body background="gameback4.jpg">

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
						<br>
						
					    <p><button class="btn btn-default" type="submit">Update Cart</button>
						<a class="btn btn-default" href="Cart">Go to Cart</a> </p>
						
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
					 
					 <?php 
						$con=mysqli_connect("localhost","root","","gamingplace") or die(mysqli_error());
						$query="select * from products where title='CALL OF DUTY'";
						$result=mysqli_query($con,$query) or die(mysqli_error());
						while($row=mysqli_fetch_assoc($result)){
					?>
							
							<p style="color: #123456; background-color:#0000ff; text-align:center; "><b><font color="red"><?php echo $row["title"]; ?></font></b><br><br></p>
							
							<p style="color:#cc0066;">
							<?php echo $row["description"]; ?><br><br>
							</p>
							
							
							
						
					<?php
						}		
                      ?>
					     <!--start
						 <div class="row details">
						 
						     <div class="col-md-4">
							    <img src="gameimages/UNCHARTED1.jpg"/>
							 </div>
							 
							 <div class="col-md-8">
							    <h3>UNCHARTED4</h3>
								<div class="details-price">
								    Price:$49.76
								</div>
								
								<div class="details-description">
								
								<p><h4><font color="red">Uncharted 4: </font></h4><font color="purple">A Thief's End is an action-adventure video game developed by Naughty Dog and published by Sony Computer Entertainment for PlayStation 4. It was released worldwide on May 10, 2016. Following Uncharted 3: Drake's Deception, it is the final Uncharted game to feature protagonist Nathan Drake (portrayed by Nolan North).[1] Drake, now retired from fortune hunting with his wife Elena, reunites with his estranged older brother Sam and longtime partner Sully to search for Captain Henry Avery's lost treasure.
								</font>
								</p>
								
								</div>
								
							 </div>
							 
							 
						</div>
						-->
								
					     
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
