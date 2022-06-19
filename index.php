<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head> 
	<title>My website</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Janni Web Project</title>
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="stylesheet" href="    style.css">
   <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
</head>
<body> <br> <br>
    Hello, <?php echo $user_data['user_name']; ?> <br>
    <p class="text">
        Ich will dir hier denn ganzen Quellcode von der 'Webseite' zeigen. <br>
        Dazu stelle ich dir einen <a href="https://www.github.com">GitHub</a> Link zur verfügung wo du dann den Code sehen kannst
    </p>
</body>
</html>

	<br>
</body>
</html>