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
    <title>Idade Média</title>
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
        <a href="home2.php" class="btn-voltar">Início</a>
    </nav>
     
    <header class="idademedia">
        <h1>Explorando a Idade Média</h1>
        <p> Idade Média (476 a 1453) ficou marcada pelo feudalismo, pela influência da Igreja, e pelas Cruzadas e Inquisição. Encerrou-se com a crise do século XIV e a expansão marítima.</p>
    </header>

    <main>
       <section class="informacoes-gerais">
            <h2>Introdução à Idade Média</h2><br>
            <p>Idade Média é o nome do período da história localizado entre os anos 476 e 1453. A nomeação “Idade Média” é utilizada pelos historiadores dentro de uma periodização que engloba quatro idades: Antiga, Média, Moderna e Contemporânea. Quando nos referimos à Idade Média, geralmente referimo-nos a assuntos relacionados, direta ou indiretamente, com a Europa.</p><br> 
            <p>A Idade Média iniciou-se com a desagregação do Império Romano do Ocidente, no século V. Isso deu início a um processo de mescla da cultura latina, oriunda dos romanos, e da cultura germânica, oriunda dos povos que invadiram e instalaram-se nas terras que pertenciam a Roma, na Europa Ocidental. </p><br>
            <p>Desse período destacam-se o processo de ruralização que a Europa viveu entre os séculos V e X; o fortalecimento da Igreja Católica; a estruturação do sistema feudal, não apenas economicamente mas também política e socialmente. A partir do século XI, o renascimento urbano e comercial abre caminho para a crise do século XIV, que determina o fim da Idade Média. </p><br>

            <h2>Sobre Idade Média</h2><br>
            <p>Quando falamos de Antiguidade, dedicamo-nos a entender os modos de vida de diferentes civilizações, o que inclui as origens de cada grande civilização, os seus modos de vida, os avanços realizados por elas. Além disso, dedicamo-nos ao estudo das religiões desses povos, seus mitos de origens, suas leis, sua economia etc.
Esse foi o período em que as grandes cidades surgiram, mas também foi um momento de conflitos e guerras de expansão. Vamos, a seguir, conhecer um pouco de algumas das civilizações que existiram nessa parte da história.</p><br>
            <p>Como mencionado, a Idade Média é assim chamada dentro de uma periodização, estipulada pelos historiadores, que a determina entre os anos de 476 e 1453. O que estipula o início da Idade Média é a destituição de Rômulo Augusto do trono romano, em 476, e o que estipula seu fim é a conquista de Constantinopla pelos otomanos, em 1453.</p><br>
            <h2>Quando começou e quando terminou a Idade Média? </h2><br>

            <p>Por Idade Antiga entende-se o período da história humana que se deu com o <strong>surgimento da primeira forma de escrita até a desagregação do Império Romano do Ocidente.</strong> Esses marcos foram estipulados pelos historiadores e devem ser entendidos como momentos de referência que levaram a transformações no longo prazo e não de imediato.</p><br>
            <p>A Idade Média é dividida pelos historiadores em <strong>duas grandes fases</strong>, que são:</p><br>
            <p><strong>→ Alta Idade Média</strong>: século V ao século X;</p><br>
            <p><strong>→ Baixa Idade Média</strong>: século XI ao século XV.</p><br>
            <p>Durante a Alta Idade Média, a Europa passava pelas transformações derivadas da desagregação do Império Romano e o feudalismo estava em formação. A Baixa Idade Média foi o período auge do feudalismo e no qual a Europa começou a sofrer transformações oriundas do renascimento urbano e comercial.</p><br>
            
            <h2>Feudalismo</h2><br>
            <p>O feudalismo é o termo que usamos para toda organização social, política, cultural, ideológica e econômica que existiu na Europa durante a Idade Média. Esse conceito explica a estruturação da sociedade da Europa Ocidental, e a organização que ele representa existiu, na sua forma clássica, entre os séculos XI e XIII, aproximadamente.</p><br>
            <p>Do século V ao século X, o feudalismo estava em processo de estruturação, uma vez que as relações políticas características da vassalagem estavam em formação, o poder da Igreja Católica estabelecia-se aos poucos, e a ruralização e feudalização da Europa desenvolviam-se.</p><br>
            <p>Do século XI ao século XIII, o feudalismo estava no seu auge, sobretudo nas regiões que hoje correspondem à Alemanha, à França, e ao norte da Itália e da Inglaterra. A partir do século XIV, o sistema feudal entra em decadência, uma vez que a Europa urbanizava-se e o comércio ganhava importância.</p><br>
            <div class="imagens">
            <img src="./img/feudalismo.webp" alt="Imagem Feudalismo">
            <p class="desc_venus">No feudalismo, os castelos eram um importante centro de poder, pois neles viviam os senhores feudais.<p>
            <p class="desc_venus">Fonte: Brasil Escola</p><br>
          </div>

            <p>No aspecto econômico, podemos dizer que o feudalismo era um sistema baseado na produção agrícola e na exploração servil dos camponeses. Com o fim do Império Romano, a Europa Ocidental ruralizou-se e as pessoas empobrecidas passaram a estabelecer-se nas cercanias de grandes propriedades rurais, à procura de comida e proteção. Dessa situação criou-se a relação de dependência entre o senhor feudal e o camponês.</p><br>
            <p>O senhor feudal, dono das terras, permitia que o camponês ficasse nelas, desde que este cultivasse-as e entregasse parte do que tinha sido produzido àquele. O camponês era sujeito a uma série de tributos a serem pagos aos senhores feudais, tais como a corveia, a talha e a banalidade. O senhor feudal, por sua vez, tinha como obrigação proteger aqueles instalados em sua propriedade.</p><br>
            <p>No âmbito religioso, a Igreja Católica era dona de grande influência, uma vez que seu poder chegava a atingir decisões do poder secular. A Igreja também elaborava a construção ideológica que justificava as desigualdades do mundo feudal. Na visão estipulada por ela, e abraçada pela nobreza, os servos cumpriam seu papel por uma designação divina.</p><br>
            <div class="imagens">
            <img src="./img/nobres.webp" alt="Imagem suserania e vassalagem">
            <p class="desc_venus">A relação de suserania e vassalagem existente entre reis e nobres medievais era uma das principais formas de organização política na Idade Média.<p>
            <p class="desc_venus">Fonte: Brasil Escola</p><br>
            </div>

            <p>A sociedade feudal era<strong> estamental</strong>, isto é, dividida em classes com funções muito bem definidas, e na qual a ascensão social era bastante difícil. Nela existiam três grandes classes sociais:</p><br>
            <p><strong>→ Nobreza (bellatores):</strong> classe privilegiada, detentora de terras, que tinha como função, dentro da ideologia medieval, proteger a sociedade;</p><br>
            <p><strong>→ Clero (oratores): </strong>membros da Igreja Católica que cumpriam funções religiosas. Também era uma classe privilegiada, uma vez que a Igreja detinha riqueza, poder e terras; </p><br>
            <p><strong>→ Camponeses (laboratores):</strong> grupo empobrecido que sustentava a sociedade feudal por meio de seu trabalho e dos altos impostos que pagava.</p><br>
            <p>No aspecto político, a vassalagem era uma das grandes manifestações do feudalismo. Essa estrutura surgiu por volta do século VIII e estabelecia as relações de poder entre rei e nobres de cada reino. </p>
            <p>Por meio da vassalagem, o rei (suserano) e os nobres (vassalos) realizam um acordo estabelecendo laços de fidelidade entre si. Os vassalos recebiam um feudo (terra) e tinham como obrigação auxiliar o seu suserano na execução da justiça, na administração do reino e na guerra, se necessário.</p><br>

            <h2>Principais Acontecimentos</h2><br>
            <p>A Idade Média foi muito longa e, logicamente, impactada por diferentes acontecimentos importantes para a história humana. A Idade Média, em si, é fruto do fim do Império Romano do Ocidente, após o qual uma série de reinos germânicos estabeleceu-se na Europa Ocidental.</p><br>
            <p>O caso mais simbólico foi o dos francos, povo germânico que se estabeleceu na Gália e formou um reino governado, primeiro, pelos merovíngios e, depois, pelos carolíngios. Estes foram a primeira grande dinastia a governar um reino na Europa, e, por meio de Carlos Magno, seu principal rei, formaram um império com um território bastante vasto.</p><br>
            <p>O surgimento do islamismo no século VII marcou um rompimento do Ocidente com o Oriente, sobretudo quando os muçulmanos conquistaram a Península Ibérica. O avanço muçulmano na Europa só foi interrompido por Carlos Martel, em 732. Séculos depois, a Igreja Católica encontrou na guerra contra os muçulmanos uma forma de estender sua riqueza até o Oriente.</p><br>
            <div class="imagens">
            <img src="./img/inquisicao.webp" alt="Imagem Inquisição">
            <p class="desc_venus">A Inquisição foi um dos eventos mais importantes da Idade Média.<br> Nela, todos aqueles que não seguiam a doutrina da Igreja eram perseguidos e mortos.<p>
            <p class="desc_venus">Fonte: Brasil Escola</p><br>
            </div>
            <p>As Cruzadas ocorreram do século XI ao século XII e mobilizaram tropas cristãs contra os muçulmanos, na Palestina e no norte da África. Ao todo foram nove cruzadas, sendo a primeira delas convocada pelo Papa Urbano II, em 1095. A nona Cruzada foi encerrada em 1272, e o objetivo inicial dos cristãos (conquistar Jerusalém) não foi alcançado.</p><br>
            <p>Outros destaques que podem ser feitos sobre a Idade Média são o Império Bizantino e o estabelecimento da Inquisição. Assuntos também relevantes são a cultura e a ciência medievais, geralmente pouco estudadas.</p><br>
         
             <h2>Fim da Idade Média</h2>
            <p>O fim da Idade Média tem relação com o renascimento urbano e comercial que a Europa experimentou a partir do século XI. Novas técnicas agrícolas permitiram o aumento da produção de víveres, gerando um excedente que pôde ser comercializado. O aumento na produção de alimentos garantiu um aumento populacional, mas também do comércio e, consequentemente, da circulação de moeda.</p><br>
            <p>Com o aumento populacional, o número de pessoas mudando-se para as cidades aumentou e a quantidade de comerciantes ao redor delas também. O século XIII intensifica esse processo de êxodo rural, pois as produções agrícolas ruins fizeram com que muitos buscassem sobreviver nas cidades.</p><br>
            <div class="imagens">
            <img src="./img/peste.jpg" alt="Imagem Peste Negra">
            <p class="desc_venus">A Peste Negra causou a morte de cerca de 1/3 da população europeia ao longo do século XIV.<p>
            <p class="desc_venus">Fonte: Acadmedmg</p><br>
            </div>
            <p>O século XIV é quando os historiadores estipulam a fronteira final da Idade Média. Trata-se de um século de crise, caracterizado por guerras que causaram destruição e geraram mais fome, e isso resultou na Peste. O século XIV é marcado pela famosa Peste Negra (surto de peste bubônica responsável pela morte de 1/3 da população europeia ao longo desse período.)</p><br>
            <p>A fome gerou grandes revoltas de camponeses, sobretudo a partir do século XIII, e o crescimento urbano colocou fim no isolamento feudal. Revoltas também aconteceram nas grandes cidades, principalmente pela falta de empregos. Novas estruturas de poder começaram a surgir, a organização política dos reinos modificou-se e, assim, surgiram os Estados nacionais.</p><br>
            <p>O enfraquecimento do feudalismo e o fortalecimento do comércio resultaram no mercantilismo. Quando Constantinopla cai e o comércio com o Oriente fecha-se, a Europa volta-se para o Oeste. A exploração do Oceano Atlântico abriu novas fronteiras e consolidou o fim da Idade Média.</p><br>
            <p></p><br>

            <h1><br>Faça download dos nossos materiais!</h1>

            <section class="cards-section">
            <div class="cards-container">
            <div class="card-item">
            <div class="card-title">Mapa Mental</div>
            <p>Baixe nosso mapa mental completo sobre o tema!</p>
           <a href="./img/idademedia.pdf" target="_blank">Download PDF</a>
          </div>
          <div class="card-item">
         <div class="card-title">Apresentação</div>
         <p>Confira a apresentação detalhada.</p>
          <a href="./img/idademediaslide.pdf" target="_blank">Download PDF</a>
       </div>
      </div>
      </section>

              <section class="videos-container">
            <h2>Vídeos Educativos</h2>
            <div class="video-grid">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/xYRsIQT-Qmc?si=x9TGQsguabkUzTGO" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/HihjI7ceC6E?si=s0kSHoJT-QMvAHsH"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/N6YxYbdvkNg?si=-VUvEArDH9sZNxGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Q4E3vPl-KkY?si=dWkK38YWWox_Ebrk"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/YbR1bxtGnMo?si=lgOF22PpgD_b3G4F"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/CTIs_RSPr84?si=ST8heCGCSApT8obc"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            </div>
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

    <a href="./idadecontem.php">
    <div class="card">
        <div class="card__image">
            <img src="./img/quedabastilhaaa.jpg" alt="Idade Contemporânea">
        </div>
        <div class="card__content">
            <p class="card__title">Idade Contemporânea</p>
            <p class="card__description">Saiba mais sobre a história recente na Idade Contemporânea.</p>
        </div>
    </div>
    </div>
    </section>
            </section>
        </section>
        </section>
        <button id="topButton" type="button">
    <svg viewBox="0 0 384 512" class="svgIcon">
        <path
          d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2V448c0 17.7 14.3 32 32 32s32-14.3 32-32V141.2L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z"
        ></path>
    </svg>
    </button> 
    </main>

    <script>
        // bt voltar
   document.getElementById('topButton').addEventListener('click', function(event) {
    event.preventDefault(); 
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

</script>

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
