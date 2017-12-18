<div style="text-align:center">

<form>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput">Example label</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
  </div>
  <div class="form-group">
    <label class="col-form-label" for="formGroupExampleInput2">Another label</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
  </div>
</form>

<form action="index.php?page=tasks&action=create" method="post">
    Owner Email: <input type="text" name="owneremail" value= "<?php echo $data->owneremail;?>" ><br>
    Due Date: <input type="text" name="duedate" value= "<?php echo $data->duedate;?>" ><br>
    Message: <input type="text" name="message" value= "<?php echo $data->message;?>" ><br>
    Is done: <input type="text" name="isdone" value= "<?php echo $data->isdone;?>" ><br>
    <input type="submit" value="Submit form">
</form>