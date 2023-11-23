<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pw Generator</title>
</head>

<body>
    <form action="" method="GET">
        <label for="pw-length">Length of the password</label>
        <input type="number" name="pw_length" id="pw-length">
        <input type="submit" value="Submit">
    </form>
</body>

<?php
include './funcionts.php';

$pw_length = isset($_GET['pw_length']) ? $_GET['pw_length'] : null;


if ($pw_length != null) {
    $password = pw_generator($pw_length)
?>
    <p>Your password is:"<?php echo $password ?>" </p>

<?php } ?>

</html>