<?php
$fio = 'Иванов Иван Петрович'; 
$piece = explode(" ", $fio); 
$piece1 = mb_strimwidth($piece[1], 0, 2, ".");
$piece2 = mb_strimwidth($piece[2], 0, 2, ".");

echo $piece[0] . ' ' . $piece1 . ' ' . $piece2 . ' '; 

	