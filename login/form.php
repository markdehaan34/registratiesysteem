<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Datum: <br><input type="text" name="name">
  <br><br>
  Korte Omschrijving: <br><input type="text" name="website">
  <br><br>
  Lange Omschrijving: <br><textarea name="comment" rows="5" cols="40"></textarea>
  <br><br>
  <input type="submit" name="submit" value="Submit"> 
  <br><br>
  <br><br> 
</form>