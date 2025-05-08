<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="global.css">

        <style>
            .body {
                background-image: url('https://static.qualinfo.net.br/_acadweb.imagens/logo/bg_body_qualinfo_diploma_digital.jpg');
                background-attachment: fixed;
                background-position: center;
                -webkit-filter: blur(7px);
                -moz-filter: blur(7px);
                -o-filter: blur(7px);
                -ms-filter: blur(7px);
                filter: blur(7px);
                position: absolute;
                width: 100%;
                height: 100%;
                z-index: -1;
            }
        </style>
 <title>Diploma Digital</title>

 </head>
    <body>
 <header>
 <?php include 'menu.html'; ?>
 </header>
        <div class="body"></div>

        <iframe
            id="assinamos_iframe"
            src="https://facx.assinamos.com.br/iframe/diploma/" 
            width="100%"
            height="550px"
            title="Consulta Diploma">
        </iframe>

        <footer>
 <?php include 'footer.html'; ?>
        </footer>

        <script>
            const queryString = window.location.search;
            const urlParams = new URLSearchParams(queryString);

            if (urlParams.has('cod')) {
                const codValidacao = urlParams.get('cod');
                const iframe = document.getElementById('assinamos_iframe');
                iframe.src = iframe.src + codValidacao;
            }
        </script>
 <script src="script.js"></script>
    </body>
</html>