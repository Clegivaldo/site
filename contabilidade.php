<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facx - Graduação em Contabilidade</title>
    <link rel="icon" type="image/png" href="./public/assets/ico_logo.png" />
    <link rel="stylesheet" href="/global.css">
    <!-- Add icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>

<body>
<?php include 'menu.html'; ?>

    <main>
        <section class="sessao1">
            O objetivo principal da contabilidade é garantir as informações econômicas para governos, fornecedores, bancos, investidores, funcionários e sindicatos. São informações que envolvem contas a pagar e a receber, patrimônio, etc. e, a partir delas, é possível gerar demonstrações contábeis, tais como Balanço Patrimonial, Demonstração do Resultado do Exercício, Demonstração de Lucros ou Prejuízos Acumulados e Demonstração de Origens e Aplicação de Recursos.</p>
          <div class="button"><a href="https://portais.qualinfonet.com.br/facx/acadweb.modulo.eventos.php">AGENDE SEU VESTIBULAR</a></div>
        </div>
      </div>
    </section>

    <div class="duvida">
        <h2>Ainda está em dúvida pelo curso de Contabilidade da FACX?</h2>
    </div>

    <section class="sessao2">
        <div class="contabilidade_mercado">
          <h3>MERCADO DE TRABALHO NA CONTABILIDADE</h3>
          <p>O mercado de trabalho na contabilidade está em alta. Segundo o Instituto de Pesquisa Econômica Aplicada (Ipea), a área registra uma das maiores taxas de empregabilidade do Brasil, com 93,8% de profissionais empregados.</p>
          <p>Atualmente o mercado concentra mais de 300 mil contadores ativos e outros milhares em formação, segundo o Conselho Federal de Contabilidade (CFC).</p>
          <p>Embora a concorrência seja alta, a demanda por contadores qualificados também é. Por isso, não faltam oportunidades para os bons profissionais que queiram fazer carreira na área.  .
          Outra informação importante para um mercado tão favorável é a obrigatoriedade e importância dos serviços de contabilidade para qualquer negócio.
          Sim, por lei cada novo empreendimento no país deve contratar os serviços de um contador</p>
        </div>
        <img src="public/assets/contador.jpg"/>
    </section>

    <section class="sessao3">
        <div>
            <span>Quanto tempo dura o curso de Contabilidade?</span>
            <p>O curso de Contabilidade tem duração de 10 semestres (5 anos)</p>
            <div class="button"><a href="public/docs/Contabilidade.pdf" target="_blank">Matriz curricular</a></div>
        </div>
    </section>

    <div class="motivos">
        <h2>Por que cursar Contabilidade na FACX?</h2>
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
            <p>Os Contabilistas podem trabalhar em empresas públicas, privadas, startups ou até mesmo como consultores autônomos.</p>
          </div>
        </div>
    
        <div class="M3">
          <div>
            <h3>CARREIRA ACADÊMICA</h3>
          </div>
          <div>
            <p>A docência é mais uma opção para a pessoa formada em contabilidade. O profissional, após alguns anos de atuação no mercado de trabalho, pode investir na sala de aula, que conta com bastante espaço tanto em instituições públicas quanto privadas. É importante destacar que, na maioria das vezes, o docente precisa ter uma pós-graduação para poder dar aula.</p>
          </div>
        </div>
    
      </section>

      <section class="sessao5">
      <div>
        <img src="public/assets/contabilidade60.png" alt="desconto">
      </div>
        <h1>Tem dúvidas? Faça uma pergunta</h1>
        <form id="meuFormulario" method="POST">
          <!-- Campos do formulário -->
          <input type="text" name="name" placeholder="Nome" required>
          <input type="email" name="email" placeholder="Email" required>
          <input type="text" name="whatsapp" placeholder="WhatsApp" required>
          <textarea name="pergunta" placeholder="Faça sua pergunta" oninput="autoResize(this)" required></textarea>
          <input type="text" name="curso" style="display: none;" value="CONTABILIDADE">
          <button type="submit">Enviar</button>
        </form>
        <div id="success-message" style="display: none;">Mensagem enviada com sucesso!<br>Entraremos em contato em breve.</div>
      </div>
      </section>

    </main>

<?php include 'footer.html'; ?>

</body>
</html>