<?php
	session_start();

	include "koneksi.php";

	if (isset($_POST['submit']))
	{
		$username = htmlspecialchars($_POST['username']);
		$password = md5($_POST['password']);

		//cek query
		$sql = "SELECT * FROM tb_user WHERE username='$username' AND password='$password'";
		$result = $conn->query($sql);

		if($result->num_rows>0){
			//echo "Login Berhasil";
			$_SESSION['islogin'] = true;
			header("location:main_page.php");
		}else{
			$_SESSION['alert'] = "Username atau Password Salah ";    
			header("location:index.php");
		}

		//if ($user=='admin' && $pass=='admin'){
		//	echo "Login Success!";
		//} else {
		//	$_SESSION['alert'] = "Invalid Username or Password";
		//	header("location:index.php");
		//}
	//}
	//echo "Connected successfully";
}
?>
