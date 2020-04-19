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

<?php
if (isset($_REQUEST['advice'])) {
    $advice = $_REQUEST['advice'];
    $username = $_SESSION['username'];
    $sql = "CREATE TABLE IF NOT EXISTS useradvice (username TEXT, advice TEXT)";
    $dbh->query($sql);
    $sql = "INSERT INTO useradvice (username, advice) VALUES ('$username','$advice')";
    $dbh->query($sql);
}
?>

<h2>User Advice</h2>
<div id="content">
    <p>Here is some user submitted advice</p>
    <?php
    $sql = "select * from useradvice";
    $result = $dbh->query($sql);
    foreach ($result as $row) {
        echo "<blockquote>\n<p><em>&quot;", $row['advice'], "&quot;</em> - <strong>", $row['username'], "</strong>";
        echo "</p>\n</blockquote>\n";
    }
    ?>
</div>
<p>&nbsp;</p>
<?php include("inc_footer.php"); ?>
    </body>
</html>

