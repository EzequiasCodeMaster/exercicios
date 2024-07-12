<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usu = $_POST['usu'];
    $sen = $_POST['sen'];
    echo "Usuário: " . htmlspecialchars($usu) . "<br>";
    echo "Senha: " . htmlspecialchars($sen) . "<br>";
} else {
    echo "Nenhum dado recebido.";
}
?>


dasdasdasdsadasdassa
