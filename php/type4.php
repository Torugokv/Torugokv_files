<?php
/*
for($k = 0; $k < 10; $k++ ) {
    echo $k . "<br>";
}

$k = 0;

do{
    $k += 2;
    echo "<p>" . $k . "</p>"; 
}while($k < 256);

echo $k;

$k = 0;
do{
    $k ++; 
}while(false);

echo $k . "<br>";


$k = 0;
while(false){
        $k ++;
};

echo $k . "<br>";


foreach($nomes as $n) {
    echo "<p>" .  $n . "</p>";
}
*/
$nomes = array("Vincent K. Morgan", "Torugokv", "Guinho", "Tohru");

foreach($nomes as $i => $n) {
    echo "<p> O índice é: " . $i . " e o nome é: " . $n . "</p>";
}

$preco = number_format ($preco, 2, ',', '.');
?>