<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=devide-width, initial-scale=1">
    <title>Pagina Principal</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/estilo.css">
  
</head>
    </head>


<body>
    
 <!-- Menu Principal INICIO -->

 <h6> Cadastrar Pedidos </h6>
   
    
    <?php
         include ('cabecalho.html');
    ?>
    
    <br>

    <hr>            
  
    
         

   <div class="container_formularios">
        <h3> Cadastrar Pedidos </h3>
        <br>
  
        <form method="POST" action = cadastrar_pedidos.php>
            <div class="form-group col-md-4">
            <label for="input">Nome Completo</label>
            <input type="text" class="form-control" name="nome_cliente">
            </div>

            <div class="form-group col-md-4">
            <label for="input">Endereço</label>
            <input type="text" class="form-control" name="endereco">
            </div>

            <div class="form-group col-md-4">
            <label for="input">Telefone</label>
            <input type="number" class="form-control" name="telefone">
            </div>

            <div class="form-group col-md-4">
            <label for="input">Nome do Produto</label>
            <input type="text" class="form-control" name="nome_produto">
            </div>

            <div class="form-group col-md-4">
            <label for="input">Valor Unitário</label>
            <input type="number" class="form-control" name="valor_unitario">
            </div>

            <div class="form-group col-md-4">
            <label for="input">Quantidade</label>
            <input type="text" class="form-control" name="quantidade">
            </div>

            <div class="form-group col-md-4">
            <label for="input">Valor Total</label>
            <input type="text" class="form-control" name="valor_total">
            </div>

            <button type="submit" class="btn btn-primary" name="enviar">Enviar Pedido</button>
        </form>

    </div>


    <br><br><br><br><br>

    <?php
        include ('footer.html');
    ?>

    <script src="scripts.js"></script>  

  
  

</body>
