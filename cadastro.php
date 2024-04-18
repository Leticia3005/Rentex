<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RENTEX</title>
</head>

<body>
    <div id="main-container" class="container principal">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Preencha seus dados:</h2>
                <form action="Pcadastro.php" method="POST" id="cadastro-form" class="center-form">
                    <div class="form-group">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" class="form-control" required pattern="[^@\s]+@aluno\.ce\.gov\.br">
                    </div>

                    <div class="form-group">
                        <label for="curso">Curso:</label><br>
                        <input type="radio" id="cursoCTB" name="curso" value="CTB">
                        <label for="cursoCTB">CTB</label><br>
                        <input type="radio" id="cursoDS" name="curso" value="DS">
                        <label for="cursoDS">DS</label><br>
                        <input type="radio" id="cursoINFO" name="curso" value="INFO">
                        <label for="cursoINFO">INFO</label><br>
                        <input type="radio" id="cursoMULT" name="curso" value="MULT">
                        <label for="cursoMULT">MULT</label><br>
                        <input type="radio" id="cursoREDES" name="curso" value="REDES">
                        <label for="cursoREDES">REDES</label><br>
                    </div>

                    <div class="form-group">
                        <label for="serie">Série:</label><br>
                        <input type="radio" id="serie1" name="serie" value="1">
                        <label for="serie1">1</label>
                        <input type="radio" id="serie2" name="serie" value="2">
                        <label for="serie2">2</label>
                        <input type="radio" id="serie3" name="serie" value="3">
                        <label for="serie3">3</label>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Cadastrar" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>