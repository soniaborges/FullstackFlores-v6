<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "projetodbrecodeprosonia";

    //criando a conexao
    $conn = mysqli_connect($servername, $username, $password, $database );

    //verificando a conexao
    if(!$conn){
        die ("Conexão não efetuada pelo motivo:" .mysqli_connect_error());
    }
?>

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


 <h6> Nossos Produtos </h6>


<?php
    include ('cabecalho.html');
?>

<br>

<hr>        
  

<!-- Menu Produtos -->


   
    <!-- Categorias -->

    <div class="container-geral">

        <div class="container-categoria">
            <h3> Categorias </h3>
            <ul>
                <li class="categoria" onclick="mostrartodos()" > <b>Todas  (14)</b> </li>
                <li class="categoria" onclick="mudarestado('Buquets')"> Buquet de Flores (4)  </li>
                <li class="categoria" onclick="mudarestado('Vasos')"> Flores no Vaso (3) </li>
                <li class="categoria" onclick="mudarestado('Orquideas')"> Orquídeas (4) </li> 
                <li class="categoria" onclick="mudarestado('Cestas')"> Cestas de Café (3)  </li>
            </ul> 
        </div>

        <div class = "container-produtos">
            <?php

                $sql  = "select * from produtos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0){
                while($rows =  $result->fetch_assoc()){
            
            ?>

            <div class = "produtos " id= "<?php echo $rows ["categoria"];?>">
                <div class = "imagem "><img src = "<?php echo $rows ["imagem"];?>" width="120px" 
                onclick="exibir_detalhes_produto(this)"></div>
                <br>
                <div class = "descricao"><?php echo $rows ["descricao"]; ?></div>
                <hr>
                <div class = "precoinicial"> <strike> R$ <?php echo $rows ["preco"];?> </strike> </div>
                <div class = "preco"> R$ <?php echo $rows ["preco_final"];?> </div>           
            </div> 

            <?php

            }
            //
            } else {
            echo "Nenhum produto cadastrado";
            }
            ?>
        </div>

    </div>
    



<br><br><br><br><br>

<?php
    include ('footer.html');
?>

<script src="scripts.js"></script>  

</body>

