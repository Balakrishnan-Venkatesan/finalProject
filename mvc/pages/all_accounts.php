<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Welcome to TODOS creator</title>
    <meta name="description" content="Welcome to TODOS creator">
    <meta name="author" content="SitePoint">
    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>
<h1><center>All Accounts</h1>

<?php
//this is how you print something

print utility\htmlTable::genarateTableFromMultiArray($data);

?>

<script src="js/scripts.js"></script>
</body>
</html>