<a href="index.php?page=tasks&action=create">Create task<br><br></a>
<a href="index.php?page=accounts&action=all">All Accounts<br><br></a>
<a href="index.php?page=accounts&action=show">Your Account<br><br></a>

<?php
//this is how you print something
  echo 'List of tasks created';

  if ($data == false) {
    echo '<p> no tasks found </p>';
  } else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
  }   

?>

<a href="index.php?page=accounts&action=logout"><br>Logout<br><br></a>