<?php include'header.php';?>
<!-- banner -->
<div class="inside-banner">
  <div class="container"> 
    <span class="pull-right"><a href="index.php">Home</a> / Register</span>
    <h2>Register</h2>
</div>
</div>
<!-- banner -->


<div class="container">
<div class="spacer">
<div class="row register">
  <form action="signup.php" method="post">
  <div class="col-lg-6 col-lg-offset-3 col-sm-6 col-sm-offset-3 col-xs-12 ">


                <input type="text" class="form-control" placeholder="Full Name" name="name">
                <input type="text" class="form-control" placeholder="Enter Email" name="email">
                <input type="password" class="form-control" placeholder="Password" name="password">
                <input type="password" class="form-control" placeholder="Confirm Password" name="conpassword">

                <textarea rows="6" class="form-control" placeholder="Address" name="address"></textarea>
      <button type="submit" class="btn btn-success" name="Submit">Register</button>
          


                
        </div>
        </form>
</div>
</div>
</div>

<?php include'footer.php';?>