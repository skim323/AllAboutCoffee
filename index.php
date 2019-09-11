<?php
// DO NOT REMOVE!
include("includes/init.php");
// DO NOT REMOVE!
$title = 'All About Coffee';
$navTitle = "Home";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="stylesheet" href="styles/all.css">

  <title>All About Coffee</title>
</head>

<body>
  <?php include("includes/header.php"); ?>

  <div class="more_padding">
    <h2 class="center"> How Much Coffee Do You Drink? </h2>
    <div class="row">
    <section class="column">
      <p class="before_button"> New to drinking coffee? </p>
      <a class="page_link" href="coffeeTypes.php"> Learn About Coffee Types </a>
    </section>
    <section class="column">
      <p class="before_button"> Coffee fan? </p>
      <a class="page_link" href="coffeeTypesQuiz.php"> Take the Quiz </a>
    </section>
  </div>
</div>

  <?php include("includes/footer.php"); ?>
</body>
</html>
