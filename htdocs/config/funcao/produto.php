<?php 
function getProducts($pdo){
	$sql = "SELECT *  FROM produtos ";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getMostrar3Racoes($pdo){
	$sql = "select * from produtos where tipo = 'racao' order by nome desc limit 3;";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getMostrar3Remedios($pdo){
	$sql = "select * from produtos where tipo = 'Remedio' order by nome desc limit 3;";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
function getProductsByIds($pdo, $ids) {
	$sql = "SELECT * FROM produtos WHERE idproduto IN (".$ids.")";
	$stmt = $pdo->prepare($sql);
	$stmt->execute();
	return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
