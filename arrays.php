<!-- REVISÃO PHP - FACULDADE - 3º SEMESTRE  -->

<?php

$vet = array(1, 2, "fusca", "kombi");
$lista_carros = array("fusca" => 5000, "kombi" => 10000, "Marea" => 2000);


$lista_carrros["fusca"] = 6000;


echo "<h2>Vetor 1 </h2>";
foreach ($vet as $valor) {
    echo $valor . "<br>";
};

echo "<h2>Vetor 1 - Outro For </h2>";
for ($i = 0; $i < count($vet); $i++) :
    echo $vet[$i] . "<br>";
endfor;

echo "<h2>Lista de Carros</h2>";
foreach ($lista_carros as $chave => $valor) {
    echo "$chave - $valor <br>";
}

?>