<?php

$nome = "Roberto";
$professor = "Professor";

#comando que coloca na tela de qualquer forma
//echo $nome;
#print tem a capacidade de retornar alguma mensagem
//print $nome;

?>

<?php include_once 'topo.php';?>

		<div id="content">
			<h1>Seja bem-vindo <?php echo $nome; ?>!</h1>
			<h1>Seja bem-vindo <?=$professor?>!</h1>
		</div>

<?php include_once 'footer.php';?>

