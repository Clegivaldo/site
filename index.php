<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facx</title>
 <link rel="icon" type="image/png" href="./public/assets/ico_logo.png" />
 <link rel="stylesheet" href=\"global.css\">
    <link rel="stylesheet" href="/styles.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <div id="container">
        <header><?php include 'menu.html'; ?></header>

        <section class="carousel-section">
            <h2>Destaques</h2>
            <div class="carousel-container">
                <!-- Estrutura básica do carrossel - Adicione suas imagens e links aqui -->
                <div class="carousel-slide">
                    <a href="#"><img src="placeholder-carousel-1.jpg" alt="Imagem 1 do Carrossel"></a>
                </div>
                <div class="carousel-slide">
                    <a href="#"><img src="placeholder-carousel-2.jpg" alt="Imagem 2 do Carrossel"></a>
                </div>
                <!-- Adicione mais slides conforme necessário -->
            </div>
        </section>

        <section class="other-images-section">
            <h2>Explore Mais</h2>
            <div class="image-links-container">
                <!-- Estrutura para outras imagens com links - Adicione suas imagens e links aqui -->
                <a href="#"><img src="placeholder-image-1.jpg" alt="Imagem Adicional 1"></a>
                <a href="#"><img src="placeholder-image-2.jpg" alt="Imagem Adicional 2"></a>
                <!-- Adicione mais imagens conforme necessário -->
            </div>

        <div id="center">
            <!-- Conteúdo principal da página -->
            <!-- Este conteúdo será mantido e estilizado pelo global.css -->

            <div class="social-icons">
                <a href="https://www.facebook.com/facx.xingu" class="icon-link"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com/facx_altamira" class="icon-link"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/@facx-faculdadedoxingu1134" class="icon-link"><i class="fab fa-youtube"></i></a>
                <a href="https://wa.me/5593991968181?text=Oi,%20estou%20entrando%20em%20contato%20pelo%20site%20" class="icon-link"><i class="fab fa-whatsapp"></i></a>
            </div>

        </div>
    </div>
    <footer>
        <?php include 'footer.html'; ?>
    </footer>


<script src="script.js"></script>
</body>

</html>