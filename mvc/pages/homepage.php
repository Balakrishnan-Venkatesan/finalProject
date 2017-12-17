<?php include 'header.php'; ?>

<h1><div style="text-align:center">

    <?php

    //this how to print some data;
    echo "CREATE TODOS SITE";

    ?> </h1>

    <form action="index.php?page=accounts&action=login" method="POST">

      <div class="container"><div style="text-align:center">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
      </div>
     </form>

<h1><div style="text-align:center"><a href="index.php?page=accounts&action=register">Register</a></h1>

<?php include 'footer.php'; ?>