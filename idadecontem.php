<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == false) {
    header('Location: ../login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Idade Contemporânea</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="./css/jogo.css"/>
  <style>
    body {
        overflow:auto !important
    }
  </style>
  <link rel="stylesheet" href="./css/periodos.css"/>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="./js/home.js"></script>
  <script src="./js/prototypes.js"></script>
    <script src="./js/load.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>

<body>
 
<nav class="menu-acessibilidade">
    <h5>Acessibilidade:</h5>
        <button id="aumentar-fonte">A+</button>
        <button id="diminuir-fonte">A-</button>
        <button id="alto-contraste">Contraste</button>
        <a href="home.php" class="btn-voltar">Início</a>
    </nav>
    <header class="idadecontemporanea">
        <h1>Explorando a Idade Contemporânea</h1>
        <p>A Idade Contemporânea é o período da história da humanidade que teve início em 1789, com a Revolução Francesa, e se estende até os dias atuais.</p>
    </header>

    <main>
       <section class="informacoes-gerais">
            <h2>Introdução à Idade Contemporânea</h2><br>
            <p>A Idade Contemporânea é o período da história da humanidade iniciado em 1789 com a Revolução Francesa. Estende-se até os dias atuais e é marcada por profundas transformações políticas, sociais e tecnológicas, como a consolidação dos estados-nação, a industrialização e a globalização. Esse período destaca-se pelas revoluções constantes, avanços tecnológicos, conflitos mundiais e processos de descolonização, que redefiniram a estrutura global.</p><br> 
           
            <h2>O que foi a Idade Contemporânea? </h2><br>
            <p>A Idade Contemporânea é o período da história da humanidade iniciado em 1789 com a Revolução Francesa. Estende-se até os dias atuais e é marcada por profundas transformações políticas, sociais e tecnológicas, como a consolidação dos estados-nação, a industrialização e a globalização. Esse período destaca-se pelas revoluções constantes, avanços tecnológicos, conflitos mundiais e processos de descolonização, que redefiniram a estrutura global.</p><br>
           
            <h2>Período da Idade Contemporânea</h2><br>
            <p>A Idade Contemporânea é o período da história que se inicia no final do século XVIII, especificamente em 1789, com o advento da Revolução Francesa, e se estende até os dias atuais. Esse período é marcado por transformações políticas, sociais, econômicas e tecnológicas profundas que moldaram o mundo moderno. A Revolução Francesa, com seus ideais de liberdade, igualdade e fraternidade, serviu como um catalisador para uma série de mudanças em escala global.</p><br>
            <p>A Idade Contemporânea é caracterizada pelo surgimento e consolidação de estados-nação, a expansão do capitalismo, revoluções industriais, conflitos mundiais, a descolonização e, mais recentemente, pela globalização. Esse período testemunhou a ascensão do liberalismo, a luta pelos direitos civis e humanos, e o surgimento de ideologias políticas que moldaram as sociedades contemporâneas, como o socialismo, o comunismo e o fascismo.<p><br>
            
           <p>A Idade Contemporânea também é marcada pela intensificação da urbanização e industrialização, que transformaram a maneira como as pessoas vivem e trabalham. Além disso, o desenvolvimento de novas tecnologias e a expansão do conhecimento científico desempenharam papéis cruciais na redefinição das dinâmicas sociais e econômicas.<p><br>
           
           <h2>Principais características da Idade Contemporânea</h2>
            <div class="imagens">
            <img src="./img/revolucao-industrial.webp"alt="Imagem Vênus de Willendorf">
            <p class="desc_venus">A Revolução Industrial marcou a Idade Contemporânea.<p>
            <p class="desc_venus">Fonte: Wikipedia</p><br>
            </div>
            <p>A Idade Contemporânea é definida por uma série de características que a diferenciam dos períodos históricos anteriores. Entre as mais significativas estão:<p><br>
           <p>→ Revoluções e movimentos sociais: a Idade Contemporânea é um período de revoluções constantes, começando com a Revolução Francesa e passando por várias outras, como a Revolução Industrial, as revoluções de 1848 na Europa e as revoluções socialistas do século XX. Além disso, movimentos sociais por direitos civis, igualdade de gênero, direitos trabalhistas e independência colonial foram marcantes.<p><br>
           <p>→ Industrialização e urbanização: a revolução industrial, que começou no final do século XVIII, provocou uma mudança significativa nas economias, que passaram de agrárias e artesanais para industriais e urbanizadas. Isso levou ao crescimento das cidades e à migração em massa das áreas rurais para os centros urbanos.<p><br>
           <p>→ Tecnologia e inovação: o progresso científico e tecnológico é uma das marcas da Idade Contemporânea. Invenções como o motor a vapor, a eletricidade, o automóvel, o avião, a internet e os avanços na medicina transformaram radicalmente a vida humana.<p><br>
           <p>→ Globalização: a Idade Contemporânea viu o crescimento da interconexão global em termos de economia, cultura e política. A globalização trouxe um aumento no comércio internacional, na migração, e na troca de informações e ideias.<p><br>
           <p>→ Conflitos mundiais: esse período é também marcado por conflitos em larga escala, incluindo as duas Guerras Mundiais, a Guerra Fria e inúmeros conflitos regionais e civis. Esses conflitos tiveram impactos profundos na geopolítica mundial e na vida de milhões de pessoas.<p><br>
           <p>→ Descolonização: após a Segunda Guerra Mundial, muitos países na África, Ásia e Oriente Médio ganharam independência dos poderes coloniais europeus, o que levou à formação de novos estados-nação e a uma nova ordem mundial.<p><br>
            <h2>Brasil na Idade Contemporânea</h2>
            <div class="imagens">
            <img src="./img/getulio.webp"alt="Imagem Vênus de Willendorf">
            <p class="desc_venus">Getúlio Vargas, que na imagem está sentado ao lado de Franklin Delano Roosevelt, <br>é um dos principais nomes da história contemporânea do Brasil.<p>
            <p class="desc_venus">Fonte: Wikipedia</p><br>
            </div>
            <p>O Brasil, durante a Idade Contemporânea, passou por transformações significativas em várias áreas. A transição do Brasil Colônia para o Brasil Império, em 1822, marcou o início da inserção do país nesse período histórico. O Império, seguido pela Proclamação da República em 1889, trouxe mudanças políticas e sociais profundas.</p><br>
            <p>No início do século XX, o Brasil ainda era um país predominantemente agrário, mas com a urbanização e a industrialização, que se intensificaram a partir das décadas de 1930 e 1940, especialmente sob a liderança de Getúlio Vargas, o país começou a se transformar em uma nação industrializada. Durante a Ditadura Militar (1964-1985), o Brasil experimentou crescimento econômico, mas também sofreu repressão política, censura e violações dos direitos humanos.</p><br>
            <p>Nas últimas décadas, o Brasil tem se afirmado como uma das maiores economias do mundo, com uma sociedade cada vez mais urbana e diversificada. No entanto, o país ainda enfrenta desafios como desigualdade social, corrupção, violência e instabilidade política, características que têm influenciado a história contemporânea do Brasil.</p><br>
            
            <h2>Acontecimentos da Idade Contemporânea</h2><br>
            <div class="imagens">
            <img src="./img/liberdade.webp"alt="Imagem Liberdade, Igualidade e Fraternidade">
            <p class="desc_venus">Em português: Liberdade, Igualdade e Fraternidade foi o lema da Revolução Francesa,<br> marco historiográfico eurocêntrico da Idade Contemporânea.<p>
            <p class="desc_venus">Fonte: Brasil Escola</p><br>
            </div>
            <p>A Idade Contemporânea, iniciada no século XVIII, vem sendo composta de grandes acontecimentos que impactam, mais cedo ou mais tarde, o mundo todo. Já no século XXI, o mundo, agora em formato de aldeia global, recebe as grandes movimentações da humanidade muitas vezes de modo simultâneo, pois o distanciamento entre os territórios e as pessoas pode ser inexistente devido a invenções contemporâneas, como a internet.</p><br>
            <p>A seguir, confira cinco eventos incontornáveis do início desse período histórico:</p><br>
            
            <h2>→ Revolução Francesa</h2><br>
            <p>A Idade Contemporânea é mais uma das divisões cronológicas da história baseadas nos acontecimentos ocorridos em solo europeu. Nesse sentido, podemos até nos perguntar: por que a Revolução Francesa é mais importante que a Independência dos EUA, por exemplo, já que muitos traços eram comuns a ambos acontecimentos?</p><br>
            <p>O principal motivo é mesmo o fato de terem sido os historiadores europeus a fazerem a divisão cronológica do que eles consideravam ser a história da humanidade. Ainda assim, a Revolução Francesa, de fato, representou transformações profundas na sociedade europeia da época e teve consequências em outros continentes, como a influência nos processos de independência das colônias das Américas espanhola, portuguesa e francesa.</p><br>
           
            <h2>→ Ascensão da burguesia</h2><br>
            <p>Com os ideais de Liberdade, Igualdade e Fraternidade, basilares para a Revolução Francesa, a burguesia francesa e outros setores populares da sociedade conseguiram derrubar o poder político da aristocracia proprietária de terras, que havia consolidado seu domínio durante a Idade Média. A conquista do poder político foi a coroação de um fortalecimento econômico da burguesia, iniciado, a partir do final da Idade Média, com novas formas de produção nas cidades e no campo, além da abertura comercial no Mediterrâneo e das novas rotas marítimas no Atlântico e Pacífico.</p><br>
            <p>O regime político burguês, baseado na separação dos poderes entre o Executivo, o Legislativo e o Judiciário, expandiu-se a partir da França durante a Idade Contemporânea, alcançando quase todos os locais do planeta. A ação de Napoleão Bonaparte foi importante para essa expansão, como foi também para mostrar a força de reação que detinha ainda a aristocracia, que conseguiu deter seu poderio.</p><br>
            
            <h2>→ Consolidação do capitalismo</h2><br>
            <p>O desenvolvimento do capitalismo, ao contrário do domínio de Napoleão, não foi detido pela aristocracia. Os séculos XIX e XX foram o período áureo do capitalismo, com os imensos avanços tecnológicos. Imensas cidades foram construídas, a população cresceu exponencialmente, distâncias foram encurtadas, a ponto de o ser humano poder chegar ao espaço sideral e a pisar na Lua.</p><br>
            <p>Por outro lado, apesar de todas as riquezas e avanços, a Idade Contemporânea foi marcada pela manutenção da miséria de grande parte da população, mesmo com a criação de exorbitantes riquezas. Essa contradição gerou ainda uma série de movimentos de contestação do capitalismo liberal. As principais consequências foram as lutas sociais das classes sociais exploradas, notadamente os trabalhadores assalariados, contra a exploração capitalista. </p><br>
           
           <h2>→ Revolução Russa de 1917</h2><br>
            <p>Exemplo marcante de tentativa de superação da exploração foram as revoluções, sendo a mais conhecida a Revolução Russa de 1917, que instaurou o regime soviético. Entretanto, os desenvolvimentos subsequentes dessa revolução representaram a reprodução da exploração, mesmo que sob o manto ideológico do socialismo. Essa forma de organização social, de propriedade estatal e domínio político e social nas mãos do Partido Comunista, foi implantada em metade do território mundial.</p><br>
            <p>O século XX foi então marcado por essa divisão entre um capitalismo de base privada e uma organização social controlada pelo Estado. Houve ainda outros regimes que marcaram a Idade Contemporânea, principalmente os chamados totalitários, representados pelo fascismo e pelo nazismo.</p><br>
           
            <h2>→ Grandes Guerras Mundiais</h2><br>
            <p>Outra característica nefasta da Idade Contemporânea foram as guerras. Inúmeras delas ocorreram. As maiores e mais mortíferas foram as chamadas guerras mundiais, a Primeira Guerra Mundial, que ocorreu entre 1914 e 1918, e a Segunda Guerra Mundial, entre 1939 e 1945, resultando na morte de mais de uma centena de milhões de pessoas. A ciência utilizada para fins militares resultou ainda na criação da mais letal das armas já criadas, a bomba nuclear.</p><br>
            <p>Entretanto, a ciência possibilitou melhorias nas condições de higiene e na saúde da população, proporcionando o aumento da expectativa de vida na maior parte dos locais do planeta. A apresentação sucinta das principais características da Idade Contemporânea mostra os inúmeros aspectos contraditórios de nossa sociedade.</p><br>

            
            <h1><br>Faça download dos nossos materiais!</h1>

            <section class="cards-section">
          <div class="cards-container">
          <div class="card-item">
          <div class="card-title">Mapa Mental</div>
        <p>Baixe nosso mapa mental completo sobre o tema!</p>
        <a href="./img/idadecontemporanea.pdf" target="_blank">Download PDF</a>
        </div>
      <div class="card-item">
        <div class="card-title">Apresentação</div>
      <p>Confira a apresentação detalhada.</p>
      <a href="./img/idadecontempslide.pdf" target="_blank">Download PDF</a>
      </div>
      </div>
      </section>
            
            <section class="videos-container">
            <h2>Vídeos Educativos</h2>
            <div class="video-grid">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/KlUWB_k0Kf4?si=0PkAOHg1kWmdFKiI"   frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/eg47cCMcQr0?si=7RUIH9uWjVjRHG2Q"  frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315"src="https://www.youtube.com/embed/D25cxMBC2qk?si=esWWOQ5OsGdHJSTn" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/rmwH5MJ4hPM?si=w8rbTcsyEJVke69X"    frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/DRPM2j0YAjw?si=eLAambVsIpmWzojR"   frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315"src="https://www.youtube.com/embed/RT8dgrHMNQ4?si=qbbCpraADbJToftk"  frameborder="0" allowfullscreen></iframe>
                </div>
        </section>
        <section class="outros-periodos">
    <h2>Explore Outros Períodos</h2>
    <div class="grade-cards">
    <a href="./antiga.php">
    <div class="card">
        <div class="card__image">
        <img src="./img/idadeantiga.jpg" alt="Idade Antiga">
        </div>
        <div class="card__content">
            <p class="card__title">Idade Antiga</p>
            <p class="card__description">Conheça mais sobre a Idade Antiga e suas civilizações.</p>
        </div>
    </div>

    <a href="./idademe.php">
    <div class="card">
        <div class="card__image">
            <img src="./img/idademedia.jpg" alt="Idade Média">
        </div>
        <div class="card__content">
            <p class="card__title">Idade Média</p>
            <p class="card__description">Descubra os principais eventos da Idade Média.</p>
        </div>
    </div>

    <a href="./idademoder.php">
    <div class="card">
        <div class="card__image">
            <img src="./img/idadeemoderna.jpg" alt="Idade Moderna">
        </div>
        <div class="card__content">
            <p class="card__title">Idade Moderna</p>
            <p class="card__description">Explore as inovações da Idade Moderna.</p>
        </div>
    </div>

    <a href="./pre_historia.php">
    <div class="card">
        <div class="card__image">
        <img src="./img/fund0.webp" alt="Pré-História">
        </div>
        <div class="card__content">
            <p class="card__title">Pré-História</p>
            <p class="card__description">Pré-História: O que foi, curiosidades e períodos.</p>
        </div>
    </div>
    </div>
    </section>
      </section>
    </main>
    <script>
        function toggleInfo(id) {
            const element = document.getElementById(id);
            element.style.display = element.style.display === 'block' ? 'none' : 'block';
        }
    </script>
  <script>
        // Aumentar e diminuir fonte (exceto menu de acessibilidade)
        let tamanhoFonte = 20;

        document.getElementById('aumentar-fonte').addEventListener('click', () => {
            tamanhoFonte += 2;
            document.querySelectorAll('body *:not(.menu-acessibilidade *)').forEach(el => {
                el.style.fontSize = `${tamanhoFonte}px`;
            });
        });

        document.getElementById('diminuir-fonte').addEventListener('click', () => {
            if (tamanhoFonte > 12) {
                tamanhoFonte -= 2;
                document.querySelectorAll('body *:not(.menu-acessibilidade *)').forEach(el => {
                    el.style.fontSize = `${tamanhoFonte}px`;
                });
            }
        });

        // Alternar alto contraste
        document.getElementById('alto-contraste').addEventListener('click', () => {
            document.body.classList.toggle('alto-contraste');
        });

        // Modo leitura
        document.getElementById('modo-leitura').addEventListener('click', () => {
            document.body.classList.toggle('modo-leitura');
        });
    </script>
</body>
</html>