<?php //Creado el 10/10/2025  Ultima edición 10/10/2025
$timeNow = new DateTime('now', new DateTimeZone('Europe/Madrid'));
?>

<h2><?php echo $timeNow->format('d-m-Y H:i:s');
$timeNow->modify('+1 month, 7 day, -2 hour, -5 minute, +2 second');
?></h2>

<h2><?php echo $timeNow->format('d-m-Y H:i:s'); ?></h2>