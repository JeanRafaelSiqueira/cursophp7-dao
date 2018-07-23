<?php   //Represents a connection between PHP and a database server. Também permite transação

//tipo do banco, nome do banco e local do banco, usuario e senha
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", ""); 

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($results as $row) {   //linha por linha 
	
	foreach ($row as $key => $value) { // coluna por coluna 
		
		echo "<strong>".$key.":</strong>". $value."<br>"; // escreve em negrito o nome da variavel e normamente o valor depois pula inha 

	}

	echo "=====================================================================<br>";

}

 ?>