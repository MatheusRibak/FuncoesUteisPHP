<?php

//Neste Arquivo você vai encontrar todas as formatações criadas neste repositório.

//Formatar um Número em Real
function formataReal($valor) {
  return "R$ " . number_format($valor, 2, ",", ".");
}

//Formatar Data Americana em Data Brasileira

function formataDataAmericanaEmBrasileira($dataAmericana) {
  return date('d/m/Y',  strtotime($dataAmericana));
}

?>
