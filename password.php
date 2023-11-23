<?php session_start();
if ($_SESSION['password']) {
?>
    <h4>Your password is:</h4>
    <h2><?php echo $_SESSION['password'] ?></h2>

<?php session_unset();
} else {
    header('Location: ./index.php');
} ?>