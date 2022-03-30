<?php
require 'classes/InformacoesDB.php'
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <meta charset="UTF-8">
    <title>Calculo de IMC</title>
</head>
<body>

<div class="container" >


    <div class="row">

        <div class="col-12 col-md-3" style="border: 1px solid rgb(0, 243, 53);">

            <form action="" method="POST">
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder= "Nome" name="ny">
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Sexo</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione</option>
                    <option value="1">M</option>
                    <option value="2">F</option>
                  </select>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Idade</label>
                <input type="number" class="form-control" id="exampleFormControlTextarea1"></input>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Altura</label>
                <input class="form-control" id="exampleFormControlTextarea1"></input>
              </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Peso</label>
                <input class="form-control" id="exampleFormControlTextarea1" placeholder="000.00"></input>
              </div>

              <div class=" d-flex justify-content-center ">
                <button class="btn btn-success block mb-3 border border-3 rounded-pill" type="submit">Calcular</button>
              </div>
              </form>
        </div>

        <div class="col-12 col-md-1">
        </div>

        <div class="col-12 col-md-8">
            <?php
                $informacoesdb = new InformacoesDB();
                var_dump($informacoesdb->getById(1));
                var_dump($_POST);
            ?>
            <table class="table table-striped">
                <thead>
                    <tr>
                      <th scope="col">Nome</th>
                      <th scope="col">Classificação</th>
                      <th scope="col">IMC</th>
                      <th scope="col">O que pode acontecer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><?php echo $calculaImc['nome']?></td>
                      <td>Peso normal</td>
                      <td>18,5 a 24,9 kg/m2</td>
                      <td>Menor risco de doenças cardíacas e vasculares</td>
                    </tr>
              </table>
        </div>
        
    </div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

