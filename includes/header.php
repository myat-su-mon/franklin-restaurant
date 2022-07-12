<?php
    $companyName = "Franklin's Fine Dining";
    include('includes/arrays.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./styles.css" rel="stylesheet">
    <title><?php echo TITLE; ?></title>
</head>
<body id="final-example">
    <div class="wrapper">
        <div id="banner">
            <a href="/" title="Return to Home">
                <img src="img/banner.png" alt="Franklin's Fine Dinning">
            </a>
        </div>
        <div id="nav">
            <ul>
                <?php include('includes/nav.php'); ?>
            </ul>
        </div>
        <div class="content">