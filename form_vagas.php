<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Formulário de cidades</title>
  </head>
  <body>
    <div class="container">
      <h2>Manutenção de vagas de emprego</h2>

      <?php if(isset($registro)) $acao = "insere_vaga.php?id=".$registro['id'];
            else $acao = "insere_vaga.php"; ?>

      <form class="form" action="<?php echo $acao; ?>" method="post">
        <div class="form-group">
          <label for="">Vaga</label>
          <input class="form-control" type="text" name="vaga"
              value="<?php if(isset($registro)) echo $registro['nomeVaga']; ?>" required>
        </div>
        <div class="form-group">
          <label for="">Setor</label>
          <input class="form-control" type="text" name="setor"
              value="<?php if(isset($registro)) echo $registro['nomeSetor']; ?>" required>
        </div>
        <div class="form-group">
          <label for="">Requisitos</label>
          <input class="form-control" type="text" name="requisitos"
              value="<?php if(isset($registro)) echo $registro['requisitos']; ?>" required>
        </div>
        <button type="submit" class="btn btn-default">Cadastrar</button>
      </form>
    </div>
  </body>
</html>
