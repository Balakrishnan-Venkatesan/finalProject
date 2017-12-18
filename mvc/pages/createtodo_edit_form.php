<div style="text-align:center">

<div class="container-fluid text-center">
    <div class="row content">
    <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    <div class="col-sm-10">
  <div class="col-sm-8 text-center"> 
  </div> 
  
<form action="index.php?page=tasks&action=save&id=<?php echo $data->id; ?>" method="post">

<!-- <div class="form-group">
    <label class="col-form-label" for="owneremail">Owner email</label>
    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="enter owner email" name="owneremail" value= "<?php echo $data->owneremail;?>" >
  </div> -->
  <div class="form-group">
    <label class="col-form-label" for="duedate">Due date</label>
    <input type="date" class="form-control" id="formGroupExampleInput2" placeholder="enter due date" name="duedate" value= "<?php echo $data->duedate;?>" >
  </div>
  <div class="form-group">
    <label class="col-form-label" for="message">Message</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter message" name="message" value= "<?php echo $data->message;?>" >
  </div>
  <div class="form-group">
    <label class="col-form-label" for="isdone">Is done</label>
    <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="enter is done?" name="isdone" value= "<?php echo $data->isdone;?>" >
  </div>
  <button type="submit" class="btn btn-primary btn-success">Update</button>
</form>
  
<!--    Owner Email: <input type="text" name="owneremail" value= "<?php echo $data->owneremail;?>" ><br>
    Due Date: <input type="text" name="duedate" value= "<?php echo $data->duedate;?>" ><br>
    Message: <input type="text" name="message" value= "<?php echo $data->message;?>" ><br>
    Is done: <input type="text" name="isdone" value= "<?php echo $data->isdone;?>" ><br>
    <input type="submit" value="Submit form"> -->

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary btn-danger">Delete</button>
</form>