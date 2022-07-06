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
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #04AA6D;
  color: white;
}
</style>

</head>
<body>

<div class="topnav">
  <a class="active" href="welcome.php">Home</a>
  <a href="form.php">Form</a>
  <a href="Register.php">Register</a>
  <a href="#about">About</a>
</div>

</div>

</body>




    <form action="insert.php" method="post">  
  <br><br>
  <a><b><?php echo htmlspecialchars($_SESSION["username"]); ?>. Vul de Klachtenformulier in:</a>
  <br>
  <br>
  <label for="korteomschrijving">Korte Omschrijving:</label>
  <br>
  <input type="text" name="korteomschrijving" id="korteomschrijving">
  <br><br>
  <label for="langeomschrijving">Lange Omschrijving:</label>
  <br>
  <textarea name="langeomschrijving" id="langeomschrijving" rows="5" cols="40"></textarea>
  <br><br>
  <label for="categorie">Kies categorie:</label>

<select name="categorie" id="categorie">
    <option value="printer">Printer</option>
    <option value="monitor">Monitor</option>
    <option value="pc">PC</option>
    <option value="internet">Internet</option>
    <option value="overig">overig</option>
</select>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
  <br><br>
  <br><br> 
</form>