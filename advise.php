<?php include("dbconnect.php"); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Sample Advice</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include("inc_header.php");
include("inc_nav.php"); ?>
<h2>Write your own advice here for others to see!</h2>
<?php
if (isset($_SESSION['username'])) {
    ?>
    <div id="content">
        <form action="advice.php" method="get">
                <p>Advice</p>
                <textarea name="advice" id="advice" rows="10" cols="30" required></textarea>
            <p>
                <input type="submit" name="submit" id="submit" value="Advise">
            </p>
        </form>
    </div>
    <?php
}
else {
    echo "<h3>Please login first.</h3>";
}
?>
<?php include("inc_footer.php"); ?>
</body>
</html>
