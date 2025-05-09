<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Facx - Graduação em Direito</title>
 <link rel="icon" type="image/png" href="./public/assets/ico_logo.png"/>
  <!-- Add icon library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
  <?php include 'menu.html'; ?>


  <section>
    <div class="intro">
      <img src="public/assets/img2.png"/>
      <div class="texto_direito">
        <h3>GRADUAÇÃO EM DIREITO</h3>
        <p>O curso de Direito oferece uma formação com o compromisso de ofertar educação 100% presencial com modernas práticas pedagógicas e um um corpo docente composto por Especialistas, Mestres, Doutores.  Tendo uma extensa visão do mundo jurídico à medida da realidade nacional e necessidades locais.</p>
        <p>O curso de Direito da FACX conta com o Núcleo de Práticas Jurídicas, responsável de articular ensino, pesquisa e extensão, a partir da interdisciplinaridade. Isso porque o estudante se encontra diante da possibilidade de estudar casos reais e propor soluções, desenvolvendo peças processuais a partir de diferentes situações.</p>
        <div class="button"><a href="https://portais.qualinfonet.com.br/facx/acadweb.modulo.eventos.php">AGENDE SEU VESTIBULAR</a></div>
      </div>
    </div>
  </section>

  <div class="duvida">
      <h2>Ainda está em dúvida pelo curso de Direito da FACX?</h2>
  </div>

  <section class="sessao2">
      <div class="direito_mercado">
          <h3>MERCADO DE TRABALHO NO DIREITO</h3>
          <p>O mercado de trabalho para o profissional formado no curso de Direito possui um grande campo de atuação.
          Existem duas opções de carreira para o profissional formado no curso de Direito: a carreira jurídica ou a advocacia, podendo trabalhar com direito civil, arbitragem internacional, direito administrativo e direito criminal. Também pode atuar na advocacia pública, no Ministério Público e em delegacias policiais.</p><br>
          <span>"Não é estritamente necessário que você passe pela prova da OAB (Ordem dos Advogados do Brasil), a não ser que queira atuar como advogado"</span>
      </div>
      <img src="public/assets/advogado.png"/>
  </section>

  <section class="sessao3">
      <div>
          <h3>Como funciona o curso de Direito da FACX</h3>
          <p>Nos anos iniciais do curso de Direito são ministradas matérias com conteúdo essencialmente teórico, como Sociologia, Economia e Teoria do Estado. Nos anos seguintes, as matérias passam a ser mais específicas do curso, como Direito Civil, Direito Penal, Direito Comercial entre outras.
          O curso oferece ainda eventos e aulas práticas, nas quais o estudante exercita habilidades de argumentação, características fundamentais para exercer a profissão</p><br>
          <span>Quanto tempo dura o curso de Direito?</span>
          <p>O curso de Direito tem duração de 10 semestres (5 anos)</p>
          <div class="button"><a href="public/docs/Direito.pdf" target="_blank">Matriz curricular</a></div>
      </div>
  </section>

  <div class="motivos">
      <h2>Por que cursar Direito na FACX?</h2>
  </div>

  <section class="sessao4">
      <div class="M1">
        <div>
          <h3>AULAS PRESENCIAIS</h3>
        </div>
        <div>
          <p>A FACX é a única Faculdade com aulas 100% presenciais de toda a região do Xingu, ou seja, tem aula todos os dias com um professor e toda uma equipe de suporte em tempo real a sua disposição. Ideal para quem não abre mão de um aprendizado personalizado.</p>
        </div>
      </div>
  
      <div class="M2">
        <div>
          <h3>MERCADO DE TRABALHO</h3>
        </div>
        <div>
          <p>O Direito conta com uma área de atuação bastante ampla. Sendo assim, o estudante pode optar por atuar em causas cíveis, ambientais, penais, empresariais, trabalhistas entre outras. Outra boa vantagem é que o profissional que deseja seguir pela Advocacia pode atuar como um profissional liberal, ou seja, trabalhando por conta própria com seu próprio escritório.</p>
        </div>
      </div>
  
      <div class="M3">
        <div>
          <h3>CARREIRAS JURÍDICAS</h3>
        </div>
        <div>
          <p>O profissional formado em Direito também pode atuar em diversas carreiras como Juiz de Direito, Defensor Público, Advogado, Promotor, Analista, Delegado ou Procurador. Com isso, o profissional na área não fica preso em apenas uma área de atuação e nem em uma única carreira.</p>
        </div>
      </div>
  
      <div class="M4">
        <div>
          <h3>CARREIRA ACADÊMICA</h3>
        </div>
        <div>
          <p>A docência é mais uma opção para a pessoa formada em Direito. O profissional, após alguns anos de atuação no mercado de trabalho, pode investir na sala de aula, que conta com bastante espaço tanto em instituições públicas quanto privadas. É importante destacar que, na maioria das vezes, o docente precisa ter uma pós-graduação para poder dar aula.</p>
        </div>
      </div>
  </section>

  <section class="sessao5">
    <div>
      <img src="public/assets/direito60.png" alt="desconto">
    </div>
    <div class="formulario">
      <h1>Tem dúvidas? Faça uma pergunta</h1>
      <form id="meuFormulario" method="POST">
        <!-- Campos do formulário -->
        <input type="text" name="name" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="text" name="whatsapp" placeholder="WhatsApp" required>
        <textarea name="pergunta" placeholder="Faça sua pergunta" oninput="autoResize(this)" required></textarea>
        <input type="text" name="curso" style="display: none;" value="DIREITO">
        <button type="submit">Enviar</button>
      </form>
      <div id="success-message" style="display: none;">Mensagem enviada com sucesso!<br>Entraremos em contato em breve.</div>
    </div>
  </section>

    <div>

  <?php include 'footer.html'; ?>

<script src="script.js"></script>
</body>
</html>