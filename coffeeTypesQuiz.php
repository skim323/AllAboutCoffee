<?php
include("includes/init.php");
$title = 'Coffee Types Quiz';
$navTitle = "Coffee Types Quiz";
$name_error_show_hide = "form_error hidden";
$question_error_show_hide = "form_error hidden";
$name = "";
$q1 = "";
$q2 = "";
$q3 = "";
$favCoffee = "";
$q1_amer_checked = "";
$q1_cl_checked = "";
$q1_esp_checked = "";
$q2_cl_checked = "";
$q2_amer_checked = "";
$q2_cap_checked = "";
$q3_esp_checked = "";
$q3_cap_checked = "";
$q3_cl_checked = "";


if (isset($_POST['submit'])) {
  $valid_quiz = true;

  // Name is required.
  $name = trim($_POST['name']);
  if ($name == "" || $name == '') {
    $valid_quiz = false;
    $name_error_show_hide = "form_error";
  }

  //Answers are required.
  if (isset($_POST['q1'])) {
    $q1 = $_POST['q1'];
  }
  if ($q1 == "" || $q1 == '') {
    $valid_quiz = false;
    $question_error_show_hide = "form_error";
  }
  if (isset($_POST['q2'])) {
    $q2 = $_POST['q2'];
  }
  if ($q2 == "" || $q2 == '') {
    $valid_quiz = false;
    $question_error_show_hide = "form_error";
  }
  if (isset($_POST['q3'])) {
    $q3 = $_POST['q3'];
  }
  if ($q3 == "" || $q3 == '') {
    $valid_quiz = false;
    $question_error_show_hide = "form_error";
  }


  // Favorite coffee is required.
  $favCoffee = trim($_POST['favCoffee']);
  if ($favCoffee == "" || $favCoffee == '') {
    $valid_quiz = false;
    $question_error_show_hide = "form_error";
  }

  //make answers sticky
  //q1
  if ($q1 == "Americano") {
    $q1_amer_checked = "checked";
  }
  if ($q1 == "Cafe Latte") {
    $q1_cl_checked = "checked";
  }
  if ($q1 == "Espresso") {
    $q1_esp_checked = "checked";
  }
  //q2
  if ($q2 == "Cafe Latte") {
    $q2_cl_checked = "checked";
  }
  if ($q2 == "Americano") {
    $q2_amer_checked = "checked";
  }
  if ($q2 == "Cappuccino") {
    $q2_cap_checked = "checked";
  }
  //q2
  if ($q3 == "Espresso") {
    $q3_esp_checked = "checked";
  }
  if ($q3 == "Cappuccino") {
    $q3_cap_checked = "checked";
  }
  if ($q3 == "Cafe Latte") {
    $q3_cl_checked = "checked";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="styles/all.css">

    <title><?php echo $title ?> - All About Coffee</title>
</head>

<body>
    <?php include("includes/header.php"); ?>

    <div class="more_padding">
        <?php
        if (isset($valid_quiz) && $valid_quiz) { ?>
        <section>
            <h2><?php echo htmlspecialchars($name); ?>'s Answers</h2>
            <p>Q1: Which coffee has milk in it?</p>
            <p> <?php echo $q1; ?></p>
            <p>Q2: Which coffee was originally made by soldiers?</p>
            <p> <?php echo $q2; ?></p>
            <p>Q3: Which of the following can have chocolate in it?</p>
            <p> <?php echo $q3; ?></p>
            <p>Q4: What's your favorite coffee?</p>
            <p> <?php echo htmlspecialchars($favCoffee); ?></p>
        </section>
        <?php

      } else { ?>
        <section>
            <h2> Take the Quiz! </h2>
            <p> Coffee fan? Regular coffee drinker? Just read the "Coffee Types" page? Take this coffee types quiz to test your knowledge! Good luck and have fun! </p>
        </section>

        <section>
            <form action="coffeeTypesQuiz.php" method="post">

                <fieldset id="quiz">
                    <h3>Coffee Types Quiz</h3>
                    <p class=<?php echo $name_error_show_hide; ?>>Please provide a name to submit your quiz!</p>
                    <p>
                        <label for="name">What's your name?</label>
                        <input type="text" name="name" value=<?php echo $name ?>>
                    </p>
                    <p class=<?php echo $question_error_show_hide; ?>>Please answer all questions to submit your quiz!</p>
                    <p>
                        <label for="q1">Q1: Which coffee has milk in it? </label> <br>
                        <input type="radio" name="q1" value="Americano" <?php echo $q1_amer_checked ?>>Americano<br>
                        <input type="radio" name="q1" value="Cafe Latte" <?php echo $q1_cl_checked ?>>Cafe Latte<br>
                        <input type="radio" name="q1" value="Espresso" <?php echo $q1_esp_checked ?>>Espresso<br>
                    </p>
                    <p>
                        <label for="q2">Q2: Which coffee was originally made by soldiers? </label> <br>
                        <input type="radio" name="q2" value="Americano" <?php echo $q2_amer_checked ?>>Americano<br>
                        <input type="radio" name="q2" value="Cappuccino" <?php echo $q2_cap_checked ?>>Cappuccino<br>
                        <input type="radio" name="q2" value="Cafe Latte" <?php echo $q2_cl_checked ?>>Cafe Latte<br>
                    </p>
                    <p>
                        <label for="q3">Q3: Which of the following can have chocolate in it?</label> <br>
                        <input type="radio" name="q3" value="Espresso" <?php echo $q3_esp_checked ?>>Espresso<br>
                        <input type="radio" name="q3" value="Cafe Latte" <?php echo $q3_cl_checked ?>>Cafe Latte<br>
                        <input type="radio" name="q3" value="Cappuccino" <?php echo $q3_cap_checked ?>>Cappuccino<br>
                    </p>
                    <p>
                        <label for="fav_coffee">Q4: What's your favorite coffee?</label>
                        <input type="text" name="favCoffee" value=<?php echo $favCoffee ?>>
                    </p>

                    <input type="submit" name="submit" value="Submit">
                </fieldset>
            </form>
            <?php

          } ?>
        </section>
    </div>

    <?php include("includes/footer.php"); ?>
</body>

</html> 
