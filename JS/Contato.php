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

 <h6> Contato </h6>

    

<?php
    include ('cabecalho.html');
?>

<br>

<hr>        
  
 
  

<!-- Menu Principal FIM -->


<h2 class="container-fluid">Nossos Canais de Atendimento ao Cliente</h2>
<br><br>


    <table border="0" width="100%" cellpadding="20" >
        <tr> 
            <td align="center" width="33%">
            <img src="../img/Contato/sac.JPG" width="auto" height="60px">  
            <h3> SAC  </h3> 
            <p>  Telefone: (11) 2222-2222 <p>
            </td>
            
            
            <td align="center" width="33%">
                <img src="../img/Contato/televendas.JPG" width="auto" height="60px"> 
            <h3> Televendas </h3> 
            <p>  Telefone: (11) 2222-2222 <p>

            </td>

            <td  align="center" width="33%">
                <img src="../img/Contato/whatsapp.JPG" width="auto" height="60px"> 
            <h3> Whatssapp </h3> 
            <p>  Telefone: (11) 9999-9999 <p>

            </td>

        </tr>

    </table>
    <br>   <br>

    <div class="container_formularios">
        <h3> Entre em contato conosco pelo formulário abaixo:</h3>
        <br>

        <form method="" action = "">
            <div class="form-group col-md-4">
            <label for="input">Nome Completo</label>
            <input type="text" class="form-control" name="nome_contato_cliente" placeholder="Nome Completo">
            </div>

            <div class="form-group col-md-4">
            <label for="input">Telefone</label>
            <input type="number" class="form-control" name="telefone_contato" placeholder="Telefone">
            </div>

            <div class="form-group col-md-4">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email"><br>

            <div class="form-group col-md-13">
            <label for="Mensagem">Mensagem</label>
            <textarea class="form-control" id="mensagem_contato" rows="4" placeholder="Atenção> Este formulário não tem banco de dados ativo, para envio e confirmação de dados pedimos que utiize o formulário de pedidos na aba Pedidos"></textarea>
            </div>

            <button type="button" class="btn btn-success">Enviar</button>

        </form>
    </div>

            
    <br><br><br><br><br>

    <?php
         include ('footer_simple.html');
    ?>

 <script src="scripts.js"></script>  

</body>
