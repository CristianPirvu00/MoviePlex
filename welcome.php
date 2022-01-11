<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylewel.css">
    <title>Welcome - MoviePlex</title>
    
</head>
<body>
    <?php echo "<h1>Welcome, " . $_SESSION['username'] . "</h1>"; ?>
    <button onclick="window.location.href='logout.php';">Logout</button>
    <button onclick="window.location.href='index.html';">Continue to Website</button>
</body>
</html>