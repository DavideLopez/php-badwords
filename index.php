<?php
$title = 'Ozymandias - il Re dei Re';
$text = '«Il mio nome è Ozymandias, re di tutti i re,
Ammirate, Voi Potenti, la mia opera e disperate!»';


$length = strlen($text);

$w = $_GET['word'];
$new_text = str_replace('Ozymandias', '***', $text);
?>

<h1><?= $title ?></h1>
<p><?php echo $text; ?></p>
<p>Il testo contiene <?php echo $length; ?> caratteri.</p>

<p><?php echo $new_text; ?></p>
