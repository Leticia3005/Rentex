<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rentex</title>
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

  <div class="container" id="container">
      <div class="form-container criar-conta">
        <form action="index.html">
          <h1>Crie sua conta</h1>
          <input type="email" placeholder="Digite o seu e-mail">
          <input type="password" placeholder="Digite a sua senha">
          <input type="name" placeholder="Digite seu nome">
          <button>Criar conta</button>
        </form>
      </div>

      <div class="form-container acessar-conta">
        <form action="#">
          <h1>Acesse sua conta</h1>
          <input type="email" placeholder="Digite o seu e-mail">
          <input type="password" placeholder="Digite a sua senha">
          <a href="#">Esqueceu sua senha?</a>
          <button>Entrar</button>
        </form>
      </div>

    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-painel toggle-left">
          <h1>Bem vindo de volta!</h1>
          <p>Entre na sua conta pessoal.</p>
          <button class="hidden" id="login">Entrar</button>
        </div>

        <div class="toggle-painel toggle-right">
          <h1>Olá!</h1>
          <p>Registre sua conta.</p>
          <button class="hidden" id="register">Registrar</button>
        </div>
      </div>
    </div>
</div>

<script src="./javascript/login.js"></script>
</body>
</html>