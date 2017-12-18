<div style="text-align:center">

<form action="index.php?page=tasks&action=create" method="post">
  <div class="form-group">
    <label class="col-form-label" for="owneremail">Owner email</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="enter owner email" name="owneremail" value= "<?php echo $data->owneremail;?>" >
  </div>
  <div class="form-group">
    <label class="col-form-label" for="duedate">Due date</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter due date" name="duedate" value= "<?php echo $data->duedate;?>" >
  </div>
  <div class="form-group">
    <label class="col-form-label" for="message">Message</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter message" name="message" value= "<?php echo $data->message;?>" >
  </div>
  <div class="form-group">
    <label class="col-form-label" for="isdone">Is done</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="enter is done?" name="isdone" value= "<?php echo $data->isdone;?>" >
  </div>
  <button type="submit" class="btn btn-primary btn-sm">Submit</button>
</form>

<!-- <form action="index.php?page=tasks&action=create" method="post">
    Owner Email: <input type="text" name="owneremail" value= "<?php echo $data->owneremail;?>" ><br>
    Due Date: <input type="text" name="duedate" value= "<?php echo $data->duedate;?>" ><br>
    Message: <input type="text" name="message" value= "<?php echo $data->message;?>" ><br>
    Is done: <input type="text" name="isdone" value= "<?php echo $data->isdone;?>" ><br>
    <input type="submit" value="Submit form">
</form> -->