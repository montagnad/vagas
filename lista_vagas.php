<?php
    require_once 'conexao.php';
    $sql   = "select * from vagas";
    $query = $con->query($sql);
    $lista = $query->fetchAll();
 ?>
<!doctype html>
<html lang="pt_br">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Vagas de emprego</title>
  </head>
  <body>
    <div class="container">
      <h2>Vagas de emprego</h2>

      <table class="table table-striped table-bordered table-hover">
        <thead>
          <th>Vaga</th>
          <th>Setor</th>
          <th>Requisitos</th>
          <th>Ações</th>
        </thead>
        <tbody>
        <?php foreach($lista as $linha): ?>
            <tr>
              <td><?= $linha['nomeVaga']; ?></td>
              <td><?= $linha['nomeSetor']; ?></td>
              <td><?= $linha['requisitos']; ?></td>
              <td>
                <a class="btn btn-warning btn-sm" href="buscar_vaga.php?id=<?php echo $linha['id']; ?>">Editar</a>
                <a class="btn btn-danger btn-sm" href="exclui_vaga.php?id=<?php echo $linha['id']; ?>">Excluir</a>
              </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>
