<?php
include("includes/init.php");
$title = 'Coffee Types';
$navTitle = "Coffee Types";
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
    <section>
      <h2> All About Coffee Types </h2>
      <p> How many types of coffee do you know? Many people enjoy drinking coffee, but oftentimes do not know as much about what they are drinking and what other types of coffee there are. Learn about some of the popular coffee types so that the next time you get coffee, you know your options!
      </p>
    </section>

    <section>
      <table id="typesTable">
      <tr>
        <!-- Espresso -->
        <td>
          <figure>
            <!-- Image source: https://javagrill.com/menu-item/espresso/ -->
            <img class="coffeeImgStyle" src="images/espresso.jpg" alt="Espresso">
            <figcaption>
              <cite>image source: <a href="https://javagrill.com/menu-item/espresso/">https://javagrill.com/menu-item/espresso/</a></cite>
            </figcaption>
          </figure>
        </td>
        <td>
          <h3> Espresso </h3>
          <!-- Information source: https://freshpresso.net/types-of-coffee/-->
          <p> Espresso is pure coffee in liquid form. Espresso is made by forcing a very small amount of very hot water through finely ground coffee beans. The result is a rich concentration of coffee in liquid form.
          </p>
          <cite>source: <a href="https://freshpresso.net/types-of-coffee/">https://freshpresso.net/types-of-coffee/</a></cite>
        </td>
      </tr>

      <tr>
        <!-- Americano -->
        <td>
          <figure>
            <!-- Image source: https://delhilivelondon.com/product/135-americano/ -->
            <img class="coffeeImgStyle" src="images/americano.jpg" alt="Americano">
            <figcaption>
              <cite>image source: <a href="https://delhilivelondon.com/product/135-americano/">https://delhilivelondon.com/product/135-americano/</a></cite>
            </figcaption>
          </figure>
        </td>
        <td>
          <h3> Americano </h3>
          <!-- Information source: https://www.canstarblue.co.nz/food-drink/coffee-shop-chains/coffee-types-explained/-->
          <p> You can make this type of coffee quite simply by adding hot water to a shot of espresso coffee. It has been said that American soldiers during the Second World War would make this type of coffee to make their beverages last longer. It was then (apparently) adopted by American baristas after the war.
          </p>
          <cite>source: <a href="https://www.canstarblue.co.nz/food-drink/coffee-shop-chains/coffee-types-explained/">https://www.canstarblue.co.nz/food-drink/coffee-shop-chains/coffee-types-explained/</a></cite>
        </td>
      </tr>

      <tr>
        <!-- Cafe Latte -->
        <td>
          <figure>
            <!-- Image source: http://jgcoffees.com/beverage-recipes.html -->
            <img class="coffeeImgStyle" src="images/cafelatte.jpg" alt="Cafe Latte">
            <figcaption>
              <cite>image source: <a href="http://jgcoffees.com/beverage-recipes.html">http://jgcoffees.com/beverage-recipes.html</a></cite>
            </figcaption>
          </figure>
        </td>
        <td>
          <h3> Cafe Latte </h3>
          <!-- Information source: https://freshpresso.net/types-of-coffee/-->
          <p> Caffe Latte is Italian for milk coffee. It is a composition of an espresso shot and steamed milk in a 1:3 ratio. Just like cappuccino, Caffe latte also features milk foam at the top.Caffe Latte is popular among people who love the mild flavours of coffee.
          </p>
          <cite>source: <a href="https://freshpresso.net/types-of-coffee/">https://freshpresso.net/types-of-coffee/</a></cite>
        </td>
      </tr>

      <tr>
        <!-- Cappuccino -->
        <td>
          <figure>
            <!-- Image source: https://www.hamiltonbeach.com/cappuccino -->
            <img class="coffeeImgStyle" src="images/cappuccino.jpg" alt="Americano">
            <figcaption>
              <cite>image source: <a href="https://www.hamiltonbeach.com/cappuccino">https://www.hamiltonbeach.com/cappuccino</a></cite>
            </figcaption>
          </figure>
        </td>
        <td>
          <h3> Cappuccino </h3>
          <!-- Information source: https://www.canstarblue.co.nz/food-drink/coffee-shop-chains/coffee-types-explained/-->
          <p> Possibly the most popular type of coffee in the world, a cappuccino consists of three layers (kind of like a cake). The first is a shot of espresso, then a shot of steamed milk, and finally the barista adds a layer of frothed, foamy milk. This final layer can also be topped with chocolate shavings or powder. Traditionally, Italians would consume this type of coffee at breakfast.
          </p>
          <cite>source: <a href="https://www.canstarblue.co.nz/food-drink/coffee-shop-chains/coffee-types-explained/">https://www.canstarblue.co.nz/food-drink/coffee-shop-chains/coffee-types-explained/</a></cite>
        </td>
      </tr>
      </table>
    </section>

      <section id="go_take_quiz">
        <p> Now that you know all about coffee, go take the quiz and test your knowledge! </p>
        <a class="page_link" href="coffeeTypesQuiz.php">Take the Quiz</a>
      </section>
    </article>
  </div>

  <?php include("includes/footer.php"); ?>
</body>
</html>
