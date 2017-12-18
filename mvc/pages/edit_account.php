<h4><p style="text-align:center"><br>My Account</p></h4>
<h6><p style="text-align:center">Email: <?php echo $data->email; ?></p></h6>
<h6><p style="text-align:center">First Name: <?php echo $data->fname; ?></p></h6>
<h6><p style="text-align:center">Last Name: <?php echo $data->lname; ?></p></h6>


<?php
//this is how you print something  $data contains the record that was selected on the table.
print(utility\htmlTable::generateTableFromOneRecord($data));
//print_r($data);
?>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">
  
  <div class="container-fluid text-center">
    <div class="row content">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="col-sm-10">
  <div class="col-sm-8 text-center"> 
  </div>
  
  <div class="form-group">
    <label class="col-form-label" for="fname">First name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="enter first name" name="fname" value="<?php echo $data->fname; ?>"s>
  </div>
  <div class="form-group">
    <label class="col-form-label" for="lname">Last name</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter last name" name="lname" value="<?php echo $data->lname; ?>">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="email">Email</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter email" name="email" value="<?php echo $data->email; ?>">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="phone">Phone</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter phone number" name="phone" value="<?php echo $data->phone; ?>">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="birthday">Birthday</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter birthday" name="birthday" value="<?php echo $data->birthday; ?>">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="gender">Gender</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter gender" name="gender" value="<?php echo $data->gender; ?>">
  </div>
  <button type="submit" class="btn btn-primary btn-success">Update</button>
</form>

<!--    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    Email: <input type="text" name="email" value="<?php echo $data->email; ?>"><br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="Submit form">
</form> -->

<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary btn-danger">Delete</button>
</form>