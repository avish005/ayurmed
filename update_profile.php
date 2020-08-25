<?php
require('connection.inc.php');
require('functions.inc.php');
if(!isset($_SESSION['USER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}
$name = get_safe_value($con,$_POST['name']);
$mobile = get_safe_value($con,$_POST['mobile']);
$uid=$_SESSION['USER_ID'];
mysqli_query($con,"update users set name='$name', mobile = '$mobile' where id='$uid'");
$_SESSION['USER_NAME']=$name;
$_SESSION['USER_MOBILE']=$mobile;
echo "Profile updated";
?>