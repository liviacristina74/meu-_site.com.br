<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Jardim de flores</title>
  <meta name="description" content="Floricultura - jardim de flores.">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      background: #ff95dcff;
      color: #111;
    }
    header {
      background: #f39ed6ff;
      border-bottom: 1px solid #fffeffff;
      padding: 15px;
      text-align: center;
    }
    .flores {
      display: flex;
      flex-wrap: wrap; /* Permite quebrar linha se faltar espaço */
      gap: 20px; /* Espaçamento entre os cards */
      justify-content: center; /* Centraliza os cards */
      margin: 30px auto;
      max-width: 1200px;
    }
    .card {
      background: #f7bfdcff;
      border: 1px solid #ccc;
      border-radius: 12px;
      width: 250px;
      padding: 15px;
      text-align: center;
      box-shadow: 2px 2px 8px rgba(238, 106, 179, 0.1);
    }
    .card img {
      width: 100%;
      height: 230px;
      object-fit: cover;
      border-radius: 10px;
    }
    footer {
      background: #f39ed6ff;
      border-top: 1px solid #fffefeff;
      text-align: center;
      padding: 10px;
      margin-top: 20px;
    }
  </style>
</head>
<body>
  <header>
    <h1 style="display:inline; margin-left:10px; color: #d51595ff;">
      Floricultura - <span style="color: #de2ea3ff;">Jardim das flores</span>
    </h1>
  </header>

  <h2 style="text-align:center;">Flores</h2>
 
  <!-- Container flex -->
  <section class="flores">
    <div class="card">
      <img src="100rosas.jpg" alt="Rosas">
      <h3>Rosas</h3>
      <p>R$ 8,00</p>
    </div>
    <div class="card">
      <img src="tulipa.avif" alt="Tulipas">
      <h3>Tulipas</h3>
      <p>R$ 10,00</p>
    </div>
    <div class="card">
      <img src="1-girassol.jpg" alt="Girassol">
      <h3>Girassol</h3>
      <p>R$ 9,00</p>
    </div>
  </section>
<section style="background: #ffb6d9;
                 border: 2px solid #070707ff;
                 border-radius: 12px;
                 width: 300px;
                 padding: 30px;
                 text-align: center;
                 box-shadow: 2px 2px 8px rgba(0,0,0,0.2);
                 display: flex;
                  justify-content: center;
                   align-items: center;
                    height: 10vh;
                     margin: 0;">

      <h1>Verifique ao lado se você foi aprovado ou reprovado</h1>

  <a href="nota.html">Verifique sua nota</a>
  </section>

  <footer>
    <h4>Jardim de Flores</h4>
    <p>Telefone: xxxxx-xxxx</p>                
    <small>&copy; 2025 Floricultura Jardim das flores — Todos os direitos reservados</small>
  </footer>
</body>
</html>

