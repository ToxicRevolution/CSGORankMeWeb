<?php 
session_start();
?>
<!DOCTYPE html>

<html>
<head>
<title>Create a nice login form using CSS3 and HTML5</title>
<link rel="stylesheet" href="css/login.css">
</head>

<body>
<?php if(isset($_GET['wrong'])){echo "<h1 style='color:red;'>{$_GET['wrong']}</h1>"; }?>
<form id="login" method="POST" action="authenticate.php">
    <h1>Log In</h1>
    <fieldset id="inputs">
        <input id="username" type="text" placeholder="Email" name="email" autofocus required>   
        <input id="password" type="password" placeholder="Password" name="password" required>
    </fieldset>
    <fieldset id="actions">
        <input type="submit" id="submit" value="Log in">
    </fieldset>
    <a href="index.php" id="back">Back to home...</a>
</form>

</body>
</html>
