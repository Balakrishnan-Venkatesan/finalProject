<?php include 'header.php'; ?>

<h2><center>All Accounts</h2>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);

?>

<?php include 'footer.php'; ?>