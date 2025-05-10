php
<!DOCTYPE html>
<html class="html" lang="pt-BR">
	
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facx - Eventos</title>
 <link rel="icon" type="image/png" href="./public/assets/ico_logo.png" />
 <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

	<!-- Fancybox CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!-- Fancybox JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>


    @media screen and (max-width: 768px) {
        .event-item {
            flex: 0 1 calc(50% - 10px); /* Cada item ocupa 50% da largura, menos 10px de margem */
        }
		.event-item img {
			max-width: 150px;
		}
    }
</style>
</head>

<body>
	<?php include 'menu.html'; ?>

    <!-- Janela popup PROGRAMAS-->
    <div id="popup" class="popup" onclick="closePopup()">
		<div class="popup-content" onclick="event.stopPropagation();">
		  <h2>Programas</h2>
		  <ul>
			<li><a href="public/docs/Acompanhamento_de_egressos.pdf" target="_blank">Acompanhamento de egressos</a></li>
			<li><a href="public/docs/Programa_de_acessibilidade_e_inclusao.pdf" target="_blank">Acessibilidade e Inclusão</a></li>
			<li><a href="public/docs/Apoio_a_producao_academico-cultural_e_acesso_a_eventos_de_cunho-cientifico-academico_e_culturais.pdf" target="_blank">Apoio a produção acadêmico-cultural e acesso a eventos de cunho científico-academico e culturais</a></li>
			<li><a href="public/docs/Institucional_de_defesa_dos_direitos_hum_e_inclusao_social.pdf" target="_blank">Institucional de defesa dos direitos humanos e inclusão social</a></li>
			<li><a href="public/docs/Institucional_de_comunicacao_interna_e_externa.pdf" target="_blank">Institucional de comunicação interna e externa</a></li>
			<li><a href="public/docs/Programa_institucional_de_educacao_ambiental.pdf" target="_blank">Institucional de educação ambiental</a></li>
			<li><a href="public/docs/Institucional_de_responsabilidade_social_e_sustentabilidade.pdf" target="_blank">Institucional de responsabilidade social e sustentabilidade</a></li>
			<li><a href="public/docs/Institucional_de_valorizacao_do_patrimonio_e_memorias_culturais.pdf" target="_blank">Institucional de valorização do patrimônio e memórias culturais</a></li>
			<li><a href="public/docs/Plano_de_atualizacao_e_manutencao_de_equipamentos_e_recursos_tecnologicos.pdf" target="_blank">Plano de atualização e manutenção de equipamentos e recursos tecnológicos</a></li>
			<li><a href="public/docs/Protecao_dos_direitos_da_pessoa_com_transtorno_do_espectro_autista.pdf" target="_blank">Proteção dos direitos da pessoa com transtorno do espectro autista</a></li>
		  </ul>
		  <!-- <button onclick="closePopup()">Fechar</button> -->
		</div>
	</div>

	<div id="popupegresso" class="popupegresso" onclick="closePopupEgresso()">
		<div class="popupegresso-content" onclick="event.stopPropagation();">
		  <section class="sessao5">
			<div class="formulario">
			  <h1>Egresso</h1>

			  <p>O programa de acompanhamento de egressos da FACX, existe com o objetivo de manter um vínculo contínuo com nossos ex-alunos, saber de seus sucessos e dificuldades, 
				e acompanhar os profissionais que formamos em seu ingresso no mercado de trabalho, para que assim possamos melhorar nossos cursos de graduação e pós-graduação a cada ano, 
				e direcionar nossos projetos de formação continuada às necessidades dos profissionais de cada área. Então se você é nosso ex aluno e deseja contribuir responda o questionário através do LINK.</p>

				<div class="agende">
					<a href="https://docs.google.com/forms/d/e/1FAIpQLSc3tS6lX6kQA9QWiUhVU7JQdvA2AxjBU1gSFoo6Joo62BadGA/viewform?usp=sf_link" target="_blank"><h5>Responder pesquisa</h5></a>
				</div>
			  <!-- <form id="meuFormulario" method="POST">
				 Campos do formulário
				<input type="text" name="name" placeholder="Nome" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="whatsapp" placeholder="WhatsApp" required>
				<textarea name="pergunta" placeholder="Faça sua pergunta" oninput="autoResize(this)" required></textarea>
				<input type="text" name="curso" style="display: none;" value="Egresso">
				<button type="submit">Enviar</button>
			  </form> -->
			  <!-- <div id="success-message" style="display: none;">Mensagem enviada com sucesso! Entraremos em contato em breve.</div> -->
			</div>
		  </section>
		  <!-- <button onclick="closePopup()">Fechar</button> -->
		</div>
	</div>

	<div id="popupdados" class="popupdados" onclick="closePopupdados()">
		<div class="popupdados-content" onclick="event.stopPopupdados()">
			<h3>Base de dados</h3>
			<p>
				<p>Periódico Disponibilizacao - Psiquê - (Editora Abril) – <a href="https://seer.ufrgs.br/index.php/PolisePsique/article/view/124178/84792" target="_blank" rel="noreferrer noopener">Link1</a> – <a href="https://seer.ufrgs.br/index.php/PolisePsique/article/view/117714/84795" target="_blank" rel="noreferrer noopener">Link2</a>
				<p>Visão Jurídica – Acervo - (Editora Abril) – <a href="https://brapci.inf.br/index.php/res/download/114234" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Sociologia – Acervo - (Editora Abril) – <a href="https://www.scielo.br/j/resr/a/5RpnMzDNbhKDJyn99s9prdQ/?format=pdf&amp;lang=pt" target="_blank" rel="noreferrer noopener">Link1</a> – <a href="https://www.revistasober.org/article/10.1590/1806-9479.2021.249024/pdf/resr-61-2-e249024.pdf" target="_blank" rel="noreferrer noopener">Link2</a> – <a href="https://www.revistasober.org/article/10.1590/1806-9479.2021.231181/pdf/resr-59-4-e231181.pdf" target="_blank" rel="noreferrer noopener">Link3</a> – <a href="https://www.scielo.br/j/resr/a/5RpnMzDNbhKDJyn99s9prdQ/?format=pdf&amp;lang=pt" target="_blank" rel="noreferrer noopener">Link4</a>
				<p>História em Foco - (Editora Abril) – <a href="/public/docs/historia-em-foco.pdf" target="_blank">Link</a>
				<p>Filosofia - (Editora Abril) – <a href="https://periodicos.unb.br/index.php/fmc/issue/view/2189/688" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Ensino Superior - (Editora Abril) – <a href="https://www.scielo.br/j/aval/a/NX3LyVRSTwyHcjdJ6Z56VPB/?format=pdf&amp;lang=pt" target="_blank" rel="noreferrer noopener">Link1</a> – <a href="http://•	https://www.scielo.br/j/aval/a/jYj9FHvmKGFWpDXJQ79QhsG/?format=pdf&amp;lang=pt" target="_blank" rel="noreferrer noopener">Link2</a> – <a href="https://www.scielo.br/j/aval/a/x6jDNBPZfM5gFMTxhkTkmJL/?format=pdf&amp;lang=pt" target="_blank" rel="noreferrer noopener">Link3</a>
				<p>Lingua Portuguesa - (Editora Abril) – <a href="http://www.revistalinguas.com/edicao32/edicao32.pdf" target="_blank" rel="noreferrer noopener">Link1</a> – <a href="https://saber.com.br/obras/PNLD/PNLD_2018/PortuguesContemp/1o%20Ano/PortuguesContemp_1_MP_0081P18013_PNLD_2018.pdf" target="_blank" rel="noreferrer noopener">Link2</a>
				<p>Você S/A - (Editora Abril) – <a href="https://planofp.com.br/wp-content/uploads/2020/08/voce-sa-materia.pdf" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Istoé Dinheiro - (Editora Abril) – <a href="https://www.bcb.gov.br/content/cidadaniafinanceira/documentos_cidadania/Cuidando_do_seu_dinheiro_Gestao_de_Financas_Pessoais/caderno_cidadania_financeira.pdf" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Gestão e Negócios - (Editora Abril) – <a href="https://grupogiovanoni.com/wp-content/uploads/2021/02/100-livros-que-todo-empreendedor-deveria-ler-1.pdf" target="_blank" rel="noreferrer noopener">Link1</a> – <a href="https://drive.google.com/file/d/1OKxqk0Rq2k_Vv-KcW0O3T3QiHqT2TvLa/view" target="_blank" rel="noreferrer noopener">Link2</a> – <a href="https://grupogiovanoni.com/wp-content/uploads/2021/02/100-livros-que-todo-empreendedor-deveria-ler-1.pdf" target="_blank" rel="noreferrer noopener">Link3</a>
				<p>Meu Próprio Negócio - (Editora Abril) – <a href="https://bibliotecas.sebrae.com.br/chronus/ARQUIVOS_CHRONUS/bds/bds.nsf/2330618bac123064fbdca06c65009d23/$File/7596.pdf" target="_blank" rel="noreferrer noopener">Link1</a> – <a href="https://drive.google.com/file/d/1wp51mTCZOzPOsrvDml0xhjPOSBm07EN8/view" target="_blank" rel="noreferrer noopener">Link2</a> – <a href="https://bibliotecas.sebrae.com.br/chronus/ARQUIVOS_CHRONUS/bds/bds.nsf/e9472590ec5fb00438374e22d9fe39ea/$File/7597.pdf" target="_blank" rel="noreferrer noopener">Link3</a>
				<p>Direito Público – <a href="http://www.portaldeperiodicos.idp.edu.br/direitopublico/index" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Caderno Virtual – <a href="http://www.portaldeperiodicos.idp.edu.br/cadernovirtual" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Revista Direitos Fundamentais &amp; Democracia – <a href="http://revistaeletronicardfd.unibrasil.com.br/index.php/rdfd" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Revista de Administração Pública – RAP – <a href="http://www.scielo.br/scielo.php?script=sci_serial&amp;pid=0034-7612&amp;lng=pt&amp;nrm=iso" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Cognitio-Estudos: revista eletrônica de filosofia – <a href="http://revistas.pucsp.br//cognitio" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Revista de Antropologia – <a href="http://www.revistas.usp.br/ra" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Cadernos de fenomenologia e Direito – <a href="http://emarf.trf2.jus.br/site/revistavolumes.php" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Cadernos Espinosanos (USP) – <a href="http://www.revistas.usp.br/espinosanos" target="_blank" rel="noreferrer noopener">Link</a>
				<p>RBDCIVIL – Revista Brasileira de Direito Civil – <a href="https://drive.google.com/file/d/1QENaIrXEbWAD-C-O09lTwGiK46Bp__Jj/view" target="_blank" rel="noreferrer noopener">Link</a>
				<p>Plataforma Fórum - RBDFJ – Direitos Fundamentais e Justiça – <a href="https://drive.google.com/file/d/1A8pX4Ukrj3lJpiRXzfcozmON8J1_asGQ/view" target="_blank" rel="noreferrer noopener">Link</a>
			</p>
		</div>
	</div>

	<div id="popuprevista" class="popuprevista" onclick="closePopuprevista()">
		<div class="popuprevista-content" onclick="event.stopPopuprevista()">
			<h3>Revistas</h3>
				<!-- <p><a href="public/docs/16art_2023.pdf" target="_blank">Artigo 16 - 2023 - Wania Paula da Costa</a></p>
				<p><a href="public/docs/15art_2023.pdf" target="_blank">Artigo 15 - 2023 - Wania Paula da Costa</a></p>
				<p><a href="public/docs/14art_2023.pdf" target="_blank">Artigo 14 - 2023 - Wania Paula da Costa</a></p>
				<p><a href="public/docs/13art_2023.pdf" target="_blank">Artigo 13 - 2023 - Thaliny Gonçalves da Silva & Alessandro Luiz Araújo Bentes Leal</a></p>
				<p><a href="public/docs/12art_2023.pdf" target="_blank">Artigo 12 - 2023 - Sônia Aparecida Ramos Santos</a></p>
				<p><a href="public/docs/11art_2020.pdf" target="_blank">Artigo 11 - 2020 - Sônia Aparecida Ramos Santos</a></p>
				<p><a href="public/docs/10art_2020.pdf" target="_blank">Artigo 10 - 2020 - Sônia Aparecida Ramos Santos</a></p>
				<p><a href="public/docs/09art_2020.pdf" target="_blank">Artigo 09 - 2020 - Luana Dias dos Santos Quixabeira & Jackson Mateus Porfirío</a></p>
				<p><a href="public/docs/08art_2020.pdf" target="_blank">Artigo 08 - 2020 - Andrea Maria Azevedo Lima</a></p>
				<p><a href="public/docs/07art_2020.pdf" target="_blank">Artigo 07 - 2020 - Sayonara Oliveira dos Santos</a></p>
				<p><a href="public/docs/06art_2020.pdf" target="_blank">Artigo 06 - 2020 - Sayonara Oliveira dos Santos</a></p>
				<p><a href="public/docs/05art_2020.pdf" target="_blank">Artigo 05 - 2020 - Krislaynne Carla Araújo de Souza</a></p>
				<p><a href="public/docs/04art_2020.pdf" target="_blank">Artigo 04 - 2020 - Wania Paula da Costa & Ana Carolina Perroni Lima</a></p>
				<p><a href="public/docs/03art_2019.pdf" target="_blank">Artigo 03 - 2019 - Viviany Cunha Raposo</a></p>
				<p><a href="public/docs/02art_2019.pdf" target="_blank">Artigo 02 - 2019 - Roselene Feiteiro de Melo</a></p>
				<p><a href="public/docs/01art_2019.pdf" target="_blank">Artigo 01 - 2019 - Bruno Cerutti Ribeiro do Valle</a></p> -->
				<p><a href="public/docs/Revista Volume 1 2022.pdf" target="_blank">Revista volume 1</a></p>
				<p><a href="public/docs/Volume 2 REV FACX_merged.pdf" target="_blank">Revista volume 2</a></p>
				<p><a href="public/docs/normas_para_publicação.pdf" target="_blank">Normas para publicação</a></p>
				<p><a href="public/docs/expediente.pdf" target="_blank">Expedientes</a></p>
				<p><a href="public/docs/estrutura_administrativa.pdf" target="_blank">Estrutura administrativa</a></p>
				<p><a href="public/docs/conselho_editorial_issn.pdf" target="_blank">Conselho editorial</a></p>
				<p><a href="public/docs/DOI dos Artigos Volume 1.pdf" target="_blank">DOI dos artigo volume 1</a></p>
				<p><a href="public/docs/DOI dos Artigos Volume 2.pdf" target="_blank">DOI dos artigo volume 2</a></p>
				<p><a href="public/docs/Sobre_a_REVISTA_FACX_assinado.pdf" target="_blank">Sobre a revista FACX</a></p>
		</div>
	</div>

	<section>
    <div class="intro">
        <img src="/public/assets/img (29).jpg">
    </div>
</section>

<main id="graduacao">
    <h1>Eventos FACX</h1>
</main>

<div id="events-container">
    <?php
    $years = ['2022', '2023', '2024', '2025'];
    $eventLinks = include('events_links.php');

    foreach ($years as $year) {
        echo "<div class='event-year' data-year='$year'>$year</div>";
        echo "<div class='event-list' id='events-$year' style='display: none;'>";

        $directory = "public/assets/images/$year";
        
        // Verifica se o diretório existe
        if (is_dir($directory)) {
            $events = scandir($directory);
            foreach ($events as $event) {
                if ($event != '.' && $event != '..') {
                    $eventName = pathinfo($event, PATHINFO_FILENAME);
                    $eventPath = "$directory/$event";
                    
                    // Verifica se existe um link para o evento
                    if (isset($eventLinks[$year][$eventName])) {
                        $eventLink = $eventLinks[$year][$eventName];
                        echo "<div class='event-item'>";
                        echo "<a href='$eventLink' target='_blank'>";
                        echo "<img src='$eventPath' alt='$eventName'>";
                        echo "<p>" . ucfirst(str_replace('_', ' ', $eventName)) . "</p>";
                        echo "</a>";
                        echo "</div>";
                    }
                }
            }
        } else {
            echo "<p>Nenhum evento disponível para $year.</p>";
        }
        
        echo "</div>";
    }
    ?>
</div>


<script>
document.addEventListener('DOMContentLoaded', function() {
    var eventYears = document.querySelectorAll('.event-year');
    
    eventYears.forEach(function(year) {
        year.addEventListener('click', function() {
            var year = this.getAttribute('data-year');
            var eventList = document.getElementById('events-' + year);
            var isHidden = eventList.style.display === 'none' || eventList.style.display === '';
            
            // Esconde todas as listas de eventos
            document.querySelectorAll('.event-list').forEach(function(list) {
                list.style.display = 'none';
            });
            
            // Mostra ou esconde a lista clicada
            eventList.style.display = isHidden ? 'flex' : 'none';
        });
    });
});

</script>

	<footer>
		<div class="social-icons">
		  <a href="https://www.facebook.com/facx.xingu" class="icon-link"><i class="fab fa-facebook-f"></i></a>
		  <a href="https://www.instagram.com/facx_altamira" class="icon-link"><i class="fab fa-instagram"></i></a>
		  <a href="https://www.youtube.com/@facx-faculdadedoxingu1134" class="icon-link"><i class="fab fa-youtube"></i></a>
		  <a href="https://wa.me/5593991968181?text=Oi,%20estou%20entrando%20em%20contato%20pelo%20site%20" class="icon-link"><i class="fab fa-whatsapp"></i></a>
		</div>
		<div>
		  <h3>Contato:</h3>
		  <p>(93) 99196-8181</p>
		</div>
		<div>
		  <h3>Email:</h3>
		  <p>secretaria@facx.edu.br</p>
		  <p>posgraduacao@facx.edu.br</p>
		</div>
		<div>
		  <h3>Endereço:</h3>
		  <p>Av. João Pessoa, 1290 - Catedral, Altamira - PA, 68371-040</p>
		</div>
		<div><p>Copyright&copy; FACX - Facudade de Ciências Humanas e Sociais do Xingu e Amazônia</p></div>
		
		<div class="two_footer">
			<div>
				<div>
					<h4>Quem Somos</h4>
				</div>
				<div>
					<ul>
						<li class="sub"><a href="public/docs/Edital_de_publicacao_2022.2.pdf">Vestibular 2022.2</a></li>
						<li class="sub"><a href="public/docs/Edital_ps_docente.pdf">Edital P.S. Docente</a></li>
						<li class="sub"><a href="public/docs/Edital_de_mentoria_facx_22.pdf">Mentoria</a></li>
						<li class="sub"><a href="public/docs/Edital_de_publicacao_2022.1.pdf">Edital Publicação</a></li>
					</ul>
				</div>
				<div>
					<h4>REVISTA</h4>
				</div>
				<div>
					<ul>
					<li><a href="/revistas"><span>Revistas</span></a></li>
					</ul>
				</div>
			</div>
		
			<div>
				<div>
					<h4>Conheça</h4>
				</div>
				<div>
					<ul>
						<li class="sub"><a href="public/docs/NAAP.pdf">NAAP</a></li>
						<li class="sub"><a href="public/docs/NIP_Facx.pdf">NIP</a></li>
						<li class="sub"><a href="public/docs/NUEDS.pdf">NUEDS</a></li>
						<li class="sub"><a href="public/docs/COPAC.pdf">COPAC</a></li>
					</ul>
				</div>
				<div>
					<h4>CPA | Relatórios</h4>
				</div>
		
				<div>
					<ul>
						<li class="sub-sub"><a href="public/docs/Relat_Autoavalicao_CPA_Facx_2018.pdf">Relatório 2018</a></li>
						<li><a href="public/docs/relat_cpa2019_facx.pdf"><span>Relatório 2019</span></a></li>
						<li><a href="public/docs/relat_cpa2020_facx.pdf"><span>Relatório 2020</span></a></li>
						<li class="sub-sub"><a href="public/docs/Relat_Autoavaliacao_Inst_CPA_Facx_2021_22.pdf">Relatório 2021/22</a></li>
					</ul>
				</div>
			</div>
		
			<div>
				<div>
					<h3>Ouvidoria</h3>
				</div>
		
				<div>
					<h4>+55 93 3515 0909 - 93 99196 8181</h4>
					<h4>ouvidoria@facx.edu.br</h4>
				</div>
			</div>
		</div>
	
		<div class="map-container">
			<iframe loading="lazy" src="https://maps.google.com/maps?q=Avenida%20Jo%C3%A3o%20Pessoa%20-%201290%20%7C%20Catedral%20.%20Altamira%20Par%C3%A1&#038;t=m&#038;z=18&#038;output=embed&#038;iwloc=near" title="Avenida João Pessoa - 1290 | Catedral . Altamira Pará" aria-label="Avenida João Pessoa - 1290 | Catedral . Altamira Pará"></iframe>
		</div>
	</footer>

    <!-- LightGallery JS -->
    <script>
        $(document).ready(function () {
            $('.gallery a').fancybox();
        });
    </script>

<script src="script.js"></script>
</body>
</html>