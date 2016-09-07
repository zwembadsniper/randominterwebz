<?php
$url = $_POST['name'];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "redirect";

if ($_POST['pass'] == "yourpass") {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO links (link)
    VALUES ('$url')";
    $conn->exec($sql);
    echo "<center><h1>Url $url added to the database</h1></center>";
    echo "<center><h2>redirecting....</h2></center>";
    }
else {
    echo "<center><h1>wrong password!</h1></center>";
}
    
?>

<html>
    <script>
    setTimeout(openUrl, 2000);
    function openUrl(){
    location.href = "/insertlink.php";
    }
    </script>
</html>