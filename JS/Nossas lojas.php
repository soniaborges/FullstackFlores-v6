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

 <h6> Nossas Lojas </h6> 
    
<?php
    include ('cabecalho.html');
?>

<br>

<hr>        
  

<!-- Menu Principal FIM -->

<h2 class="container-fluid">Nossas Lojas</h2>
<br><br>

<div class="container">
    <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Cidade</th>
            <th scope="col">Endereço</th>
            <th scope="col">Bairro</th>
            <th scope="col">Telefone</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">São Paulo</th>
            <td>Rua das Amélias, 35</td>
            <td>Jargim Aeroporto</td>
            <td>Telefone: (11) 5555-5555</td>
            </tr>
            <tr>
            <th scope="row">Campinas</th>
            <td>Avenida Rio Grande, 1875</td>
            <td>Bairro Jardim</td>
            <td>Telefone: (19) 7777-7777</td>
            </tr>
            <tr>
            <th scope="row">São Caetano do Sul</th>
            <td>Av Goiás, 1965</td>
            <td>the Bird</td>
            <td>Telefone: (11) 4444-4444 </td>
            </tr>
        </tbody>
    </table>
</div>




   
<br><br><br><br><br>

<?php
    include ('footer_simple.html');
?>

<script src="scripts.js"></script>  

</body>

