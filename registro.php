<?php
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "clothestore");

  // 1. Crear conexión con la BBDD
  $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
  // Test if connection succeeded
  if(mysqli_connect_errno()) {
    die("La conexión con la BBDD ha fallado: " . 
         mysqli_connect_error() . 
         " (" . mysqli_connect_errno() . ")"
    );
  }
?>
<?php 
function find_user_by_username($username,  $connection) {
		
		
		$safe_username = mysqli_real_escape_string($connection, $username);
		
		$query  = "SELECT * ";
		$query .= "FROM datos_users ";
		$query .= "WHERE usuario = '$username'";
		$query .= "LIMIT 1";  //Como username es primario no lo necesito
		$user_set = mysqli_query($connection, $query);
		if (!$user_set) {
			die("Database query failed.");
		}
		
		if($user = mysqli_fetch_assoc($user_set)) {
			return $user;
		} else {
			return null;
		}
	}

function attempt_login($username, $connection) {
		$user = find_user_by_username($username, $connection);
		if ($user) {
			
			//user encontrado
			
			return $user;
    }
			
		 else {
			// user not found
			//echo "Usuario no encontrado";
			return false;
		}
	}

?>
<?php
if(isset($_POST['username'])) { 
    // check if the username has been set
	$username = $_POST["username"];
}
if(isset($_POST['nombre'])) { 
    // check if the username has been set
	$name = $_POST["nombre"];
}
if(isset($_POST['apellido'])) { 
    // check if the username has been set
	$sname = $_POST["apellido"];
}
if(isset($_POST['email'])) { 
    // check if the username has been set
	$email = $_POST["email"];
}
if(isset($_POST['password'])) { 
    // check if the username has been set
	$password = $_POST["password"];
}
if(isset($_POST['rpassword'])) { 
    // check if the username has been set
	$rpassword = $_POST["rpassword"];
}

$found_user = attempt_login($username, $connection);
$tablename ="datos_users";
if ($found_user) {
	echo'<script type="text/javascript">
    alert("Este usuario ya existe, prueba otra vez");
    window.location.href="Registro.html";
    </script>';	
}else{
	if($password===$rpassword){
		//Encriptar password
		$pass_s = password_hash($password, PASSWORD_DEFAULT);
		$query  = "INSERT INTO `$tablename` (";
		$query .= "  `usuario`, `password`,`nombre`, `apellido`, `email`";
		$query .= ") VALUES (";
		$query .= " '$username', '$pass_s', '$name', '$sname', '$email'";
		$query .= ")";

		$result = mysqli_query($connection, $query);

		if ($result) {		
			echo'<script type="text/javascript">	
			document.getElementById("user").innerHTML = $sname;
			</script>';
			header("Location: " . "Inicio.html");
		} else {
			die("Database query failed. " . mysqli_error($connection));
		}
	}
	else {
		echo'<script type="text/javascript">
		alert("Las contraseñas son diferentes, prueba otra vez");
		window.location.href="Registro.html";
		</script>';
	}
}
?>

<?php
  // 5. Close database connection
  mysqli_close($connection);
?>