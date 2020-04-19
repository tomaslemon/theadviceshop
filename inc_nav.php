<nav>
  <ul>
    <li <?php if ($name == "index") echo 'class="current"'; ?>><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
    <li <?php if ($name == "advisors") echo 'class="current"'; ?>><a href="advisors.php"><span class="glyphicon glyphicon-star"></span> Advisors</a></li>
    <li <?php if ($name == "samples") echo 'class="current"'; ?>><a href="samples.php"><span class="glyphicon glyphicon-comment"></span> Sample Advice</a></li>
    <li <?php if ($name == "subscribe") echo 'class="current"'; ?>><a href="subscribe.php"><span class="glyphicon glyphicon-shopping-cart"></span> Subscribe Now</a></li>
  </ul>
    <ul>
        <?php if (!empty($_SESSION['username'])) {
            echo "<li "; if ($name == "index") echo 'class="current"'; echo ">";
            echo "<a href=\"advise.php\"><span class=\"glyphicon glyphicon-pencil\"></span> Submit Advice</a></li>";
            echo "<li "; if ($name == "index") echo 'class="current"'; echo ">";
            echo "<a href=\"advice.php\"><span class=\"glyphicon glyphicon-pencil\"></span> User Advice </a></li>";

        } ?>
    </ul>
</nav>
