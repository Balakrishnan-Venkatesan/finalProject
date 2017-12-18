<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FFECB3">
  <h4><a class="brand"><font color="black">TODOS</font></a></h4>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <h7><a class="nav-link" href="index.php?page=accounts&action=all"><font color="#B71C1C">All Accounts</font><span class="sr-only">(current)</span></a></h7>
      </li>
      <li class="nav-item">
        <h7><a class="nav-link" href="index.php?page=accounts&action=show"><font color="#B71C1C">My Account</font></a></h7>
      </li>
      <li class="nav-item">
        <h7><a class="nav-link" href="index.php?page=tasks&action=create"><font color="#B71C1C">Create Task</font></a></h7>
      </li>
      <li class="nav-item">
        <h7><a class="nav-link disabled" href="index.php?page=accounts&action=logout"><font color="#B71C1C">Logout</font></a></h7>
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