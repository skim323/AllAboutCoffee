<header>
  <h1> <?php echo $title ?> </h1>

  <?php
  $navItems = [["index.php", "Home"], ["about.php", "About"], ["coffeeTypes.php", "Coffee Types"], ["coffeeTypesQuiz.php", "Coffee Types Quiz"]]
  ?>

  <nav id="navbar">
    <ul>
      <?php
      foreach ($navItems as $item) {
        echo ("<li");
        if ($item[1] == $navTitle) {
          echo (" class = current_page");
        }
        echo ("><a href=" . $item[0] . ">" . $item[1] . "</a></li>");
      }
      ?>
    </ul>
  </nav>
</header>
