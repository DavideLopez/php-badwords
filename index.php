<?php

$title = 'Oxymandias';
$poetry = '«Incontrai un viandante di una terra dell/antichità,
Che diceva: “Due enormi gambe di pietra stroncate
Stanno imponenti nel deserto… Nella sabbia, non lungi di là,
Mezzo viso sprofondato e sfranto, e la sua fronte,
E le rugose labbra, e il sogghigno di fredda autorità,
Tramandano che lo scultore di ben conoscere quelle passioni rivelava,
Che ancor sopravvivono, stampate senza vita su queste pietre,
Alla mano che le plasmava, e al sentimento che le alimentava:
E sul piedistallo, queste parole cesellate:
«Il mio nome è Ozymandias, re di tutti i re,
Ammirate, Voi Potenti, la mia opera e disperate!»
Nulla d/altro rimane. Intorno alle rovine
Di quel rudere colossale, spoglie e sterminate,
Le piatte sabbie solitarie si estendono oltre confine”';

$lenght = strlen($poetry);
$word = $_GET['word'];
$newText = str_replace($word, 'Oxymandias', $title);
$netTitle = 'Oxymandias - Re dei Re';

?>



<h1><?= $title ?> </h1>
<p><?= $poetry ?> </p>
<p>il testo contiene <?php echo $lenght; ?> caratteri</p>

<h1> <?= $newTitle ?> </h1>
<p> <?= $newText ?> </p>