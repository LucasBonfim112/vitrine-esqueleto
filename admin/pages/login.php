<?php
if ($_POST) {
    $login = $_POST["login"] ?? null;
    $senha = $_POST["senha"] ?? null;

    $sql = "select  id, name login, senha 
            from usuario
            where login = :login AND ativo = 'S' limit 1";

    $consulta  = $pdo->prepare($sql);
    $consulta->bindParam(":login", $login);
    $consulta->execute();

    $dados = $consulta->fetch(PDO::FETCH_OBJ);



    var_dump($dados);
    // die;

    // if ((empty($login) or empty($senha))) {
    // }
}

?>

<div class="login">
    <h1 class="text-center">Efetuar Login</h1>
    <form action="" method="POST">
        <label for="login">Login: </label>
        <input type="text" name="login" id="login" class="form-control" required placeholder="Por Favor preencha esta campo">

        <br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" class="form-control" required placeholder="Por Favor preencha esta campo">

        <br>

        <button type="submit" class="btn btn-success w-100">Efetuar Login</button>

    </form>
</div>

<?php
// $login =  $_POST["login"];
// $senha = $_POST["senha"];

// print_r($login);
// echo "<br>";
// print_r($senha);

?>