<html>
<head>
    <html lang="pt-br">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Formulário</title>
<script
 src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"> </script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

  <script type="text/javascript">
    $("#data").mask("00/00/0000");
    $("#telefone").mask("(00) 0000-0000");
    $("#telcom").mask("(00) 0000-0000");
    $("#celular").mask("(00) 00000-0000");
</script>
</head>
<body>
<form name="formulario" method="post" action="cadastro.php">
            <p class="formulario1">
                data: <input type="text" name="data" id="data" size="30" placeholder="00/00/0000" required="requered" maxlength="30"><br>
                telefone : <input type="text" name="telefone" id="telefone" size="30" placeholder="(00) 0000-0000" required="requered" maxlength="30"><br>
                Tel Comer: <input type="text" name="telcom"  id="telcom" size="30" placeholder=""(00) 0000-0000"" required="requered" maxlength="30" ><br>
                Celular : <input type="text" name="celular" id="celular" placeholder=""(00) 00000-0000""  required="requered" maxlength="30"><br>
            </p>
            <p class="salvar">
                <input type="submit" value="Cadastrar">
            </p>
        </form>
        </div>
    </body>
</html>