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
    <title>Idade Moderna</title>
    <link rel="stylesheet" href="./css/periodos.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
<nav class="menu-acessibilidade">
    <h5>Acessibilidade:</h5>
        <button id="aumentar-fonte">A+</button>
        <button id="diminuir-fonte">A-</button>
        <button id="alto-contraste">Contraste</button>
        <a href="home.php" class="btn-voltar">Início</a>
       
    </nav>
    <header class="idademoderna">
        <h1>Explorando a Idade Moderna</h1>
        <p>A Idade Moderna, dentro da conhecida periodização da história, estendeu-se de 1453 a 1789.</p>
    </header>

    <main>
       <section class="informacoes-gerais">
            <h2>Introdução à Idade Moderna</h2><br>
            <p>Dentro da periodização clássica utilizada na História, a Idade Moderna é um dos períodos da história humana e sucedeu a Idade Média e antecedeu a Idade Contemporânea. Cronologicamente, a Idade Moderna começou com a conquista de Constantinopla pelos otomanos em 1453 e se encerrou com a tomada da Bastilha em 1789.</p><br> 
            <h2>O que é a Idade Moderna? </h2><br>
            <p>Cronologicamente falando, a Idade Moderna é o período que se estendeu de 1453 a 1789. A visão clássica dos historiadores determinou diversos marcos que são acontecimentos de passagem, isto é, que delimitam o fim de um período e o começo de outro. No caso da Idade Moderna, esses marcos são:</p><br>
            <p><strong>→ A conquista da cidade de Constantinopla</strong> pelos otomanos no ano de 1453</p>
            <p><strong>→ A tomada da Bastilha </strong>pela população parisiense no ano de 1789.</p><br>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>

    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="./img/const.webp" alt="Imagem Constantinopla">
        </div>
        <div class="carousel-item">
            <img src="./img/bastilha.webp" alt="Imagem Bastilha">
        </div>
        <div class="carousel-item">
            <img src="./img/quedaconst.jpg" alt="Imagem Queda de Constantinopla">
        </div>
        <div class="carousel-item">
            <img src="./img/carrossel.webp" alt="Imagem Carrossel">
        </div>
    </div>

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
    </a>
</div>

            <h2>Considerações sobre o conceito de Idade Moderna</h2><br>
            <p>Uma consideração importante a respeito desses marcos é o fato de que não podemos interpretá-los de maneira definitiva. Isso significa que a conquista de Constantinopla pelos otomanos em 1453 não fez com que todas as características da Idade Média desaparecessem da Europa em 1454.</p>
            <p>Esse fato é entendido pelos historiadores<strong> como um marco que ocasionou mudanças significativas na Europa.</strong> Essas modificações podem ser percebidas no curto prazo, mas só no longo prazo que de fato as diferenças substanciais se tornaram perceptíveis. E mesmo com a mudança de período, muitas semelhanças perduraram.</p>
             <p>Jacques Le Goff cunhou o termo<strong> “longa Idade Média”,</strong> usado por ele para se referir a fragmentos do período medieval que permaneceram no longo prazo. Alguns deles, inclusive, existiram até meados do século XIX, portanto Idade Contemporânea</p>
            <p>Outra observação importante é entendermos que esses marcos são balizadores que possuem um ponto de vista eurocêntrico, portanto <strong>tiveram impacto diretamente nas sociedades europeias</strong> e ignoraram os acontecimentos da história de outras sociedades que não a europeia e ocidental.</p>
            <p>O conceito de Idade Moderna surgiu como uma necessidade de determinados intelectuais de diferenciar a época em que eles estavam inseridos do período medieval. A Idade Moderna, portanto, surgiu quando foi pensada a Idade Média. O primeiro erudito que pensou nisso foi um italiano do século XIV chamado<strong> Francesco Petrarca.</strong></p>
            <p>No século seguinte, essa ideia ganhou força, uma vez que muitos intelectuais, sobretudo na região da Itália, começaram a defender a ideia de que os valores de seu século eram diferentes dos valores existentes na Europa de séculos passados. Começava a ganhar espaço já nesse século a ideia de que a preeminência do homem tinha substituído a de Deus.</p>
            <p>O raciocínio desses intelectuais partia da ideia de que existia uma antiguidade que encarnava os ideais de arte e conhecimento deles. Essa era a <strong>Antiguidade Clássica.</strong> A partir da derrocada dos romanos, iniciou-se um novo período, que se encerrou com a cultura do século XV, entendido por eles próprios como “moderno”. O período entre essa cultura moderna e essa Antiguidade Clássica ficou conhecido como Tempo Médio. Daí veio a Idade Média, expressão utilizada pela primeira vez em 1469, por Giovanni Andrea.</p>
            <p>Os marcos estabelecidos também foram pensados por intelectuais dessa época. No caso da Idade Moderna, o historiador alemão Christopher Keller afirmou em um volume de uma enciclopédia escrita por ele e publicada em 1688 que a Idade Média tinha se encerrado com a conquista de Constantinopla em 1453.</p>
            
            <h2>Acontecimentos da Idade Moderna</h2><br>
            <p>A Idade Moderna é considerada <strong>o período de transição do modo de produção feudal para o modo de produção capitalista.</strong> Essa transição se deu pelas práticas econômicas do mercantilismo, que contribuíram para a mundialização do comércio europeu. Essa mundialização do comércio tem relação direta com o colonialismo que se estabeleceu quando os europeus chegaram à América em 1492.</p><br>
            
            <div class="imagens">
            <img src="./img/europeus.webp" alt="Imagem chegada dos europeus">
            <p class="desc_venus">A chegada dos europeus na América por meio da expedição de Colombo em 1492 é um dos marcos desse período.<p><br>
            </div>
            <p>No campo político, mudanças significativas também aconteceram. <strong>O rei se fortaleceu e as nações que surgiram se estruturaram ao redor desse monarca absoluto.</strong> É, portanto, o período do absolutismo e de reis imponentes, como Luís XIV, que se autodefinia como Rei Sol. Significativo também foi o papel de muitos intelectuais que criaram construções ideológicas para sustentar o poder dos reis.</p>
            <p>É um período também de <strong>agitação popular e da consolidação burguesa.</strong> As camadas populares, lutando por seus direitos, posicionaram-se durante a Revolução Puritana, que aconteceu na década de 1640, na Inglaterra, por exemplo. Os diggers e levellers defenderam os interesses do povo e tinham ideias republicanas e coletivistas, mas foram esmagados pelo poder burguês.</p>
            <p>A mundialização do comércio permitiu a <strong>acumulação do capital,</strong> e essa ação se fortaleceu principalmente depois que a Reforma Religiosa levou ao surgimento dos protestantes. A Igreja perdeu força, assim como a fé, que deu espaço à predominância da razão, sobretudo quando surgiram os iluministas.</p>
            <p>O desenvolvimento da ciência e a acumulação do capital permitiram o desenvolvimento da indústria na Inglaterra, local que reuniu as condições para a Revolução Industrial. Esta, por sua vez, trouxe <strong>mudanças significativas nas relações de trabalho,</strong> nas formas de produção, e resultou no surgimento do capitalismo.</p>
            <p>A passagem da Idade Moderna para a Idade Contemporânea se deu quando o Iluminismo passou da discurso intelectual e se tornou ação política. <strong>A Revolução Francesa foi a revolução burguesa e liberal por essência </strong>e marcou o início do fim do absolutismo e do Antigo Regime em toda a Europa.</p><br>
            <p></p><br>
        <section class="videos-container">
            <h2>Vídeos Educativos</h2>
            <div class="video-grid">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/AZH-k7SujXY?si=M6LVIIuibkRbEOAW"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/MRE-8r7xI5Y?si=AXKVPH0eNvG19ryj"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/renL2Zl7nIY?si=SmDWnKFLGO8VX4q1" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/k649nfXcPt8?si=In9TWGknEQkLz4oL"   title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/Y_deK6-oY1M?si=WnqvkVi6kH_FgkOm"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/fqA3uu3TDwY?si=T88Nb_J0myL3D6FI"  title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
    </main>
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
        let tamanhoFonte = 16;

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
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
