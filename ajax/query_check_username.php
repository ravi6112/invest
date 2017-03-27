<?php
include '../conf/config.php';
include '../functions/opendb.php';
//Include The Database Connection File 

$user_name=$_GET["user_name"];

$sql="SELECT * FROM admins WHERE user_name = '$user_name'";
$result = mysqli_query($sql,$conn);
$num=mysqli_num_rows($result);
if ($num==1){
	echo '&nbsp;&nbsp;<img width="15" height="15" alt="" src="./img/close.png" /> &nbsp; Username is Existing	
      <input type="hidden" value="yes" name="key2" />';
   
}else {
	echo "&nbsp;&nbsp;<img width='15' height='15' alt=''src='./img/open.gif' /> &nbsp;Username is available
     <input type='hidden'' value='no' name='key2' />";

}
?>