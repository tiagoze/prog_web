<style>
    body{
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(45deg, cyan, green);
        }
        div{
            background-color: rgba(0,0,0,0.5);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            color: white;
        }
        input{
            border: none;
            outline: none;
        }
</style>


<div>
<h1>FAÇA SEU CADASTRO </h1>
<h3>Preencha as lacunas com seus dados.<h3>
<form action="envia.php" method="post">
<label>nome:</label>
<input type="text" name="nome"><br>
<label>idade:</label>
<input type="text" name="idade"><br>
<label>email:</label>
<input type="text" name="email"><br>
<br>
<input type="submit" value="ENVIAR">
</form>
</div>
