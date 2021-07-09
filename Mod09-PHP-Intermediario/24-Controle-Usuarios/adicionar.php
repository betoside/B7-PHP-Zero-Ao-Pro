<title>Adicionar User, Mod 9, Control users</title>
<link rel="stylesheet" href="style.css">

<a href="index.php">< Home</a>

<br>
<br>

<form action="adicionar_action.php" method="POST">
    <label for="nome">Nome</label>
    <br>
    <input type="text" name="nome" placeholder="Nome" required>
    <br><br>

    <label for="email">E-mail</label>
    <br>
    <input type="email" name="email" placeholder="E-mail" required>
    <br><br>

    <label for="senha">Senha</label>
    <br>
    <input type="password" name="senha" placeholder="Senha" required>
    <br><br>
    <button>Adicionar</button>
</form>