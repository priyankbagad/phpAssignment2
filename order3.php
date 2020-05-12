<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Confirmation Page</title>
    <link href="order.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // collect value of input field
    $color = $_GET['color'];
    }

    $_SESSION["color"] = $color;
?>

<div class="pageContainer">
<div class="centerText">
<?php
if ($_SESSION["color"] == "Blue" && $_SESSION["model"] == "mustang"){
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} elseif ($_SESSION["color"] == "Blue" && $_SESSION["model"] == "subaru") {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} elseif ($_SESSION["color"] == "Blue" && $_SESSION["model"] == "corvette") {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} elseif ($_SESSION["color"] == "Red" && $_SESSION["model"] == "mustang") {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} elseif ($_SESSION["color"] == "Red" && $_SESSION["model"] == "subaru") {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} elseif ($_SESSION["color"] == "Red" && $_SESSION["model"] == "corvette") {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} elseif ($_SESSION["color"] == "Yellow" && $_SESSION["model"] == "mustang") {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} elseif ($_SESSION["color"] == "Yellow" && $_SESSION["model"] == "corvette") {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
} else {
    echo " Congratulations you have ordered  ". $_SESSION["color"].$_SESSION["model"].".";
    echo "<br><br><br>";
    echo "<img src='https://yorktown.cbe.wwu.edu/sandvig/mis314/assignments/a04/images/{$_SESSION["model"]}{$color}.jpg' />";
}

?>
</div>
</div>
</body>
</html