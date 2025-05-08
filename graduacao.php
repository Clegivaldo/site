<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facx - Graduação</title>
 <link rel="icon" type="image/png" href="./public/assets/ico_logo.png" />    <link rel="stylesheet" href="global.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <header>
 <?php include 'menu.html'; ?>
    </header>

    <main>
        <h1>Cursos de Graduação</h1>
        <p class="frase-motivacional">Descubra seu caminho para o sucesso!</p>

        <div class="cursos">
            <a href="administracao"><img src="public/assets/img1.png" alt="Administração"></a>
            <a href="contabilidade"><img src="public/assets/img4.png" alt="Contabilidade"></a>
            <a href="enfermagem"><img src="public/assets/img3.png" alt="Enfermagem"></a>
            <a href="direito"><img src="public/assets/img2.png" alt="Direito"></a>
        </div>
        
        <div class="agende">
            <a href="https://portais.qualinfonet.com.br/facx/acadweb.modulo.eventos.php">
                <button type="button">AGENDE SEU VESTIBULAR</button>
            </a>
        </div>
    </main>

    <footer>
        <!-- Conteúdo do rodapé será incluído aqui -->
 <?php include 'footer.html'; ?>
    </footer>

<script src="script.js"></script>
</body>
</html>