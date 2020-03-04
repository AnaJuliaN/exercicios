<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <script type="text/javascript" src="exercicio1.js"></script>
        <title>Exercício</title>
    </head>
    <body>
        <form name="e1">
        <p>
			<label>Nome completo</label>
			<input type="text" name="nome"/>

        <p>    
            <label>E-mail</label>
			<input type="email" name="email"/>
        </p>

        <p>    
            <label>Sexo</label>
			<input type="text" name="sexo"/>
        </p>

        <p>
            <label>Data de nascimento:</label>
            <input type="date" name="data"/>
        </p>

        <p>
			<input type="button" value="Enviar" onclick="validou(document.e1.nome.value, document.e1.email.value, document.e1.sexo.value, document.e1.data.value);" />
        </p>
        </form>
    </div>
    </body>
</html>
