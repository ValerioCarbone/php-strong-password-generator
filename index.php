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
$pw_length = isset($_GET['pw_length']) ? $_GET['pw_length'] : null;
$pw_source = 'abcdefghijklmnopqrstuvzywxABCDEFGHIJKLMNOPQRSTUVZYWX@#-.:_;!"£$%&/()=?^><';
$source_length = strlen($pw_source);
$char_array = [];
if ($pw_length) {
    function pw_generator($pw_length, $source_length, $pw_source, &$char_array)
    {
        for ($i = 0; $i < $pw_length; $i++) {
            $current_char = random_int('0', $source_length);
            array_push($char_array, $pw_source[$current_char]);
            var_dump($char_array);
        }
        return $char_array;
    }
    var_dump($char_array);
}

?>

</html>