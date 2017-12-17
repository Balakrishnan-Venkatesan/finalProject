<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <h4><a class="brand" href="#"><font color="black">TODOS</font></a></h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php?page=accounts&action=all"><font color="#DC143C">All Accounts</font><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=accounts&action=show"><font color="#DC143C">My Account</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php?page=tasks&action=create"><font color="#DC143C">Create Task</font></a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="index.php?page=accounts&action=logout"><font color="#DC143C">Logout</font></a>
      </li>
    </ul>
  </div>
</nav>

<?php
//this is how you print something
  echo '<br><center>List of tasks created';

  if ($data == false) {
    echo '<p> no tasks found </p>';
  } else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
  }   

?>