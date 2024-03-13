<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Estudo PHPWord</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body >
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <div class="container min-vh-100 d-flex justify-content-center align-items-center">
    <form action="/processar_formulario.php" method="post" autocomplete="off" class="border border-3 rounded-2 p-4">

    <div class="d-flex gap-2">
    <div class="mb-3">
        <label for="Nome" class="form-label">Nome</label>
        <input type="text" id="Nome" class="form-control" name="Nome_Funcionario" required>
      </div>
      <div class="mb-3">
        <label for="CPF" class="form-label">CPF</label>
        <input type="text" id="CPF" class="form-control" name="CPF_Funcionario" required>
      </div>
      <div class="mb-3">
        <label for="Data" class="form-label">Data de Nascimento</label>
        <input type="text" id="Data" class="form-control date" name="Idade_Funcionario" required>
      </div>
    </div>

    <div class="d-flex gap-2">
    <div class="mb-3">
        <label for="RG" class="form-label">RG</label>
        <input type="text" id="RG" class="form-control" name="RG_Funcionario" required>
      </div>
      <div class="mb-3">
        <label for="Contato" class="form-label">Contato</label>
        <input type="text" id="Contato" class="form-control" name="Contato_Funcionario" required>
      </div>
      <div class="mb-3">
        <label for="CEP" class="form-label">CEP</label>
        <input type="text" id="CEP" class="form-control" name="CEP_Funcionario" required>
      </div>
    </div>

    <div class="d-flex gap-2 justify-content-center">
      <div class="mb-3">
       
        <input type="radio" id="Cargo_UM" class="form-check-input" name="Cargo_Funcionario" value="Atendente" required>
        <label for="Cargo_UM" class="form-check-label">Atendente</label>

        <input type="radio" id="Cargo_dois" class="form-check-input" name="Cargo_Funcionario" value="Atendente de Bilheteria" required>
        <label for="Cargo_dois" class="form-check-label">Atendente de Bilheteria</label>
      </div>
    </div>

    <div class="d-flex gap-2 jus">
    <div class="mb-3">
        <label for="Data_Admissao" class="form-label">Data de Admissão</label>
        <input type="text" id="Data_Admissao" class="form-control date" name="Data_Admissao" required>
      </div>
      <div class="mb-3">
        <label for="Numero_End" class="form-label">Número do Endereço</label>
        <input type="number" id="Numero_End" class="form-control" name="Numero_End" required>
      </div>
    </div>

    <div class="d-flex justify-content-center">
       <button type="submit" class="btn btn-primary">Enviar</button>
    </div>
    
      <div class="mb-3">
      <?php
        if($_SERVER['REQUEST_METHOD'] == "GET" && $_GET['doc'] == 'salvo'){
          echo "<p class='pt-4 text-success fw-bold text-center'>Documento salvo com sucesso!</p>";
        }
      ?>
      </div>
    </form>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>

  <script type="text/javascript">
    $(document).ready(function(){ 
      $('#CPF').mask('000.000.000-00');
      $('#RG').mask('00.000.000-0');
      $('#CEP').mask('00000-000');
      $('#Contato').mask('(00) 00000-0000')
      $('.date').mask('00/00/0000')
    });
  </script>



  
</body>

</html>