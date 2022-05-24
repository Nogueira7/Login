<?php
session_start();

if(!$_SESSION['id']){
    header('location:login.php');
}

?>

<h1>Welcome <?php echo ucfirst($_SESSION['first_name']); ?></h1>
<h2>User Information::</h2>
<?php
echo "First name: ";
echo ucfirst($_SESSION['first_name']);
echo "<br>";
echo "Last name: ";
echo ucfirst($_SESSION['last_name']);
echo "<br>";
echo "Email: ";
echo ucfirst($_SESSION['email']);
echo "<br>";
echo "<br>";
?>
<a href="logout.php?logout=true">Logout</a>
<br>
<a href="Edit.php?logout=true">Edit</a>
