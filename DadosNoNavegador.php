<?php 
print "Usando print para exibir na tela <br/>";

$data = "20 de agosto de 2020";
$salario = 850.00;
$cargo = "Estagiario";
$teste = "AAAAA";

echo "Arquivo criado em $data <br/>";
printf("Salàrio mínimo: R$ %.2f por mês  <br/>", $salario); //%.2f - adiciona o valor de salario no print
$texto = sprintf("%s recebe R$ %.2f por mês", $cargo, $salario*2); //%s - adiciona o valor da string no print
echo $texto;
?>