
<div class="container">
	<h1>Login</h1>

    <?php if($login == 1): ?>
		<script type="text/javascript">window.location.href="./";</script>
    <?php endif ?>
    <?php if($login == 2): ?>
        <div class="alert alert-danger">
            Usuário e/ou Senha errados!
        </div>
    <?php endif ?>
            
	<form method="POST" action="<?=BASE_URL;?>">
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="email" name="email" id="email" class="form-control" />
		</div>
		<div class="form-group">
			<label for="senha">Senha:</label>
			<input type="password" name="senha" id="senha" class="form-control" />
		</div>
		<input type="submit" value="Fazer Login" class="btn btn-default" />
	</form>

</div>