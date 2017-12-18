<form action="index.php?page=accounts&action=login" method="POST">
  
  
  <div class="container-fluid text-center">
    <div style="text-align:center">
    <div class="row content">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="col-sm-8">
    <div class="col-sm-8 text-center"> 
  </div>  
  
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Email address</b></label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1"><b>Password</b></label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
  </div>
  
  <button type="submit" class="btn btn-primary btn-sm">Login</button>
</form>
  
  <div class="form-group">
    <small id="register" class="form-text text-muted"><br>New user? Register below</small>
  </div>

<h2><a href="index.php?page=accounts&action=register">Register</a></h2>