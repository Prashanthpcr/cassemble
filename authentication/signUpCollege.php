<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Sign Up College</title>
</head>

<body>

    <?php
    if (isset($_SESSION['signedIn']) && $_SESSION['signedIn'] == true) {
        header('Location: ../index.php');
    } else {
    ?>
    <!-- SIGN UP COLLEGE PAGE -->
    <?php
    }
    ?>
</body>

</html>