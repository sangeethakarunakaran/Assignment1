
<?php  
 include('conn.php');

if (isset($_POST['username']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$user = $_POST['username'];
$pass = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `login` WHERE username='$user' and password='$pass'";
 
$result = mysqli_query($connect, $query) or die(mysqli_error($connect));
$count = mysqli_num_rows($result);

if ($count == 1){

echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";

}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
echo "Invalid Login Credentials";
}
}
?>