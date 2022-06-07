<!DOCTYPE html >
<html>
    <head>
        <title>
            Aula Dio - PHP
        </title>
        <meta content="charset utf-8" charset="UTF-8" />
        <meta name="viewport" content="viewport=width-device=width, initial-scale=1"/>
        <meta name="author" content=""/>
        <meta name="description" content=""/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" >

    </head>
    <body class="container">
        <h3 class="txt-center" style="text-align:center;">Formulario para inscrição de competidores</h3>
        <form action="script.php" method="POST">
            <p for="formFile" > Nome completo:<input class="form-control" type="text" name="nome" required> </p>
            <p for="formFile"> Idade:<input class="form-control" type="text" name="idade" required> </p>
            <p><input type="submit" value="Enviar"> </p>
        </form>
<?php
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" ></script>

</body>
</html>