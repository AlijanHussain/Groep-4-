<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mbo soccer</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="javascript/java.js" defer></script>   
</head>
<body>
    <header>
        <?php include 'header.php'; ?>
    </header>


    <h2 class="register-heading">Inloggen</h2>

    <form action="inloggen.php" method="post" class="register-form">
        <label for="username">Username:</label>
        <input type="text" class="form-username" id="username" name="username" required ><br>

        <label for="password">Password:</label>
        <input type="password" class="form-password" id="password" name="password" required><br>

        <input type="submit" name="Inloggen" value="Inloggen" class="button-register">
    </form>

    
</body>
</html>