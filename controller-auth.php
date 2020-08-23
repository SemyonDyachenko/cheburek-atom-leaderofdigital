
<?php
if(!empty($_POST['class'])&&$_POST['class']=='customers'){
	$login1 = mysqli_query(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek'), 'SELECT login FROM customers WHERE login = "'.$_POST['username'].'"') or die(mysqli_error(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek')));
	$login = mysqli_fetch_assoc($login1);
	if(!empty($login) && $login['login'] == $_POST['username']){
	    $password1 = mysqli_query(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek'), 'SELECT password FROM customers WHERE login = "'.$_POST['username'].'"') or die(mysqli_error(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek')));
	    $password = mysqli_fetch_assoc($password1);
	    if($_POST['password']==$password['password']){
	        $log = $login['login'];
	        $pass = $password['password'];
	        setcookie('login',$log,time() + 31536000);
	        setcookie('password',$pass,time() + 31536000);
	        setcookie('customers',1,time() + 31536000);
	        $message = 1;
	        echo $message;
	    }
	}
}
if(!empty($_POST['class'])&&$_POST['class']=='teams'){
	$name1 = mysqli_query(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek'), 'SELECT name FROM teams WHERE name = "'.$_POST['username'].'"') or die(mysqli_error(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek')));
	$name = mysqli_fetch_assoc($name1);
	if(!empty($name) && $name['name'] == $_POST['username']){
	    $password1 = mysqli_query(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek'), 'SELECT password FROM teams WHERE name = "'.$_POST['username'].'"') or die(mysqli_error(mysqli_connect('localhost','u787959094_cheburek','u787959094_chebureK','u787959094_cheburek')));
	    $password = mysqli_fetch_assoc($password1);
	    if($_POST['password']==$password['password']){
	        $log = $name['name'];
	        $pass = $password['password'];
	        setcookie('login',$log,time() + 31536000);
	        setcookie('password',$pass,time() + 31536000);
	        setcookie('teams',1,time() + 31536000);
	        $message = 1;
	        echo $message;
	    }
	}
}


	?>