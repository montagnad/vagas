<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Formulário de usuários</title>
  </head>
  <body>
    <div class="container">
      <h2>Formulário de usuários</h2>

      <?php if(isset($registro)) $acao = "insere_usuario.php?id=".$registro['id'];
            else $acao = "insere_usuario.php"; ?>

      <form class="form" action="<?php echo $acao; ?>" method="post">
        <div class="form-group">
          <label for="">Usuário</label>
          <input class="form-control" type="text" name="nomeUsuario"
              value="<?php if(isset($registro)) echo $registro['nomeUsuario']; ?>" required>
        </div>
        <div class="form-group">
          <label for="">Senha</label>
          <input class="form-control" type="password" name="senha"
              value="" required>
        </div>
        <div class="form-group">
          <label for="">Permissão</label>
          <input class="form-control" type="text" name="permissao"
              value="<?php if(isset($registro)) echo $registro['permissao']; ?>" required>
        </div>
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </form>
    </div>
  </body>
</html>
