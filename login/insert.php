<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;}
    else{
$id = $_SESSION["id"];
    }

?>
<!DOCTYPE html>
<html>
 
<head>
    <title>Insert Page page</title>
</head>
 
<body>
        <?php
 
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "demo");
         
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }
         
        // Taking all 5 values from the form data(input)
        $langeomschrijving =  $_POST['langeomschrijving'];
        $korteomschrijving = $_POST['korteomschrijving'];
        $categorie = $_POST['categorie'];
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO usermelding (korteomschrijving, langeomschrijving, id, categorie) VALUES ('$korteomschrijving', '$langeomschrijving', '$id',
        '$categorie')";
         
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$id \n$korteomschrijving \n$langeomschrijving \n$categorie");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }
         
        // Close connection
        mysqli_close($conn);
        ?>
</body>
 
</html>