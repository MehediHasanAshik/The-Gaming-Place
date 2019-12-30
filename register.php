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
  
  <?php 
  
	if(isset($_POST["submit"])){
		
		$first_name=$_POST["first_name"];
		$last_name=$_POST["last_name"];
		$email=$_POST["email"];
		$userName=$_POST["userName"];
		$password=$_POST["password"];
		$confirm_password=$_POST["confirm_password"];
		
		$con=mysqli_connect("localhost","root","","gamingplace") or die(mysqli_error());
		$query="insert into users(first_name,last_name,email,userName,password) value('$first_name','$last_name','$email','$userName','$password')";
		$result=mysqli_query($con,$query) or die(mysqli_error($con));
		if($result==true){
			echo '<script language="javascript">';
			echo 'alert("Account Created Succesfully")';
			echo '</script>';
		}else{
			echo '<script language="javascript">';
			echo 'alert("Data not inserted")';
			echo '</script>';
		}
	}
   ?>
  
  

  <body background = "register.png">

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
				
				<ul class="list-group" >
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
				   
				      <h3 class="panel-title">The Gaming Place : World Of Gaming</h3>
					 
					 </div>
					
					 <div class="panel-body">
					 
					    <form action="register.php" method="POST">
						 
						    <!-- START OF DIV-->
						    <div class="form-group" style="margin-top:30px;">
							    <label style="color: #f80b03;">First Name*</label>
								<input type="text" class="form-control" name="first_name" placeholder="Enter Your First Name">
							</div>
							<!-- END OF DIV-->
							
							
							<!-- START OF DIV-->
						    <div class="form-group">
							    <label style="color: #f80b03;">Last Name*</label>
								<input type="text" class="form-control" name="last_name" placeholder="Enter Your Last Name">
							</div>
							<!-- END OF DIV-->
							
							
							<!-- START OF DIV-->
						    <div class="form-group">
							    <label style="color: #f80b03;">Email Address*</label>
								<input type="email" class="form-control" name="email" placeholder="Enter Your Email Address">
							</div>
							<!-- END OF DIV-->
							
							
							<!-- START OF DIV-->
						    <div class="form-group">
							    <label style="color: #f80b03;">Choose UserName*</label>
								<input type="text" class="form-control" name="userName" placeholder="Create a UserName">
							</div>
							<!-- END OF DIV-->
							
							
							<!-- START OF DIV-->
						    <div class="form-group">
							    <label style="color: #f80b03;">Password*</label>
								<input type="password" class="form-control" name="password" placeholder="Enter a new Password">
							</div>
							<!-- END OF DIV-->
							
							
							<!-- START OF DIV-->
						    <div class="form-group" >
							    <label style="color: #f80b03;">Confirm Password*</label>
								<input type="password" class="form-control" name="confirm_password" placeholder="Confirm Your Password">
							</div>
							<!-- END OF DIV-->
							
							
							<!-- <button type="submit" class="btn btn-primary">Register</button> -->
							<input style="color: blue;" type="submit" value="Register" name="submit"/>
							
						</form>
					
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
