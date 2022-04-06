<?php
require 'classes/InformacoesDB.php';
require 'classes/CalculaIMC.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    
    <meta charset="UTF-8">
    <title>Calculo de IMC</title>
</head>
<body>

<div class="container" >


    <div class="row">

        <div class="col-12 col-md-3" style="border: 1px solid rgb(0, 243, 53);">

            <form action="" method="POST">

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Nome</label>
                    <input class="form-control" id="nome" name="nome" >
                </div>
                
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Altura</label>
                    <input class="form-control" id="altura" name="altura" >
                </div>

              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Peso</label>
                <input class="form-control" id="peso" placeholder="000.00" name="peso"></input>
              </div>

              <div class=" d-flex justify-content-center ">
                <button class="btn btn-success block mb-3 border border-3 rounded-pill" type="button" id="calcular" onclick="SendData();">Calcular</button>
              </div>
              </form>
        </div>
        
        <div class="col-12 col-md-1">
        </div>

        <div class="col-12 col-md-8">
            <table class="table table-striped" id="tabela">
                <thead>
                    <tr>
                      <th scope="col">Classificação</th>
                      <th scope="col">Seu IMC</th>
                      <th scope="col">O que pode acontecer</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                    </tr>
              </table>

        </div>
        
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="script/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script></body>
</html>

