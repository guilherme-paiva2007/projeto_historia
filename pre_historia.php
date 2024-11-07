<?php
session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == false) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pré-História</title>
    <link rel="stylesheet" href="./css/periodos.css">
    <?php include './html/links.php'; ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <header class="prehistoria">
        <h1>Explorando a Pré-História</h1>
        <p>Pré-História foi o primeiro período da história da humanidade. Conheça os principais períodos e suas características.</p>
    </header>

    <main>
       <section class="informacoes-gerais">
                <a href="./home.php">Início</a>
            <h2>Introdução à Pré-História</h2><br>
            <p>A Pré-História é como conhecemos <strong> o período que acompanha a evolução humana </strong>a partir do momento que os hominídeos começaram a usar ferramentas de pedra. Encerrou-se com o surgimento da escrita, que aconteceu entre 3.500 a.C. e 3.000 a.C.
            A Pré-História é, basicamente, dividida entre <strong>Paleolítico, Mesolítico (período intermediário) e Neolítico. </strong> Nesses períodos, acompanhamos o desenvolvimento dos hominídeos com a elaboração de novas ferramentas, além do surgimento do homo sapiens sapiens, há cerca de 300 mil anos.</p><br> 
            <h2>O que foi a Pré-História? </h2><br>

            <p>A Pré-História <strong>é o período da história humana que antecede a invenção da escrita, marcando o início das civilizações e o desenvolvimento de diversas culturas ao redor do mundo.</strong> Esse extenso período abrange milhões de anos e é caracterizado por uma série de avanços tecnológicos e sociais, como o uso de ferramentas, a domesticação de animais e plantas, e o surgimento das primeiras formas de organização social. A ausência de documentos escritos dificulta o estudo desse período, que depende principalmente de evidências arqueológicas, como fósseis, artefatos e pinturas rupestres.</p><br>
            <h2>Arte na Pré-História</h2><br>
            <p>O estudo da Pré-História também <strong>inclui a análise das formas de arte que foram realizadas nesse período.</strong> Os especialistas ainda não têm certeza dos motivos pelos quais os homens pré-históricos fizeram tais registros, mas sugerem que eles poderiam ser apenas um registro da “arte pela arte”, bem como poderiam ser um registro que realizasse uma conexão do homem com a natureza em um plano espiritual.
            A principal forma de arte desse período são as pinturas rupestres, que eram realizadas nas paredes das cavernas. </p>
            <p>Essas pinturas remontam a 40 mil anos atrás e representavam grupos de animais ou o ser humano em meio a atividades cotidianas. Eram usados materiais como <strong>terra, carvão, sangue, entre outros, </strong> nessas pinturas.
            No período pré-histórico, também eram realizadas esculturas pequenas. As mais famosas são as<strong> estatuetas de Vênus, isto é, pequenas estátuas de mulheres com formas corporais voluptuosas.</strong> A mais famosa dessas estatuetas é a <strong>Vênus de Willendorf</strong>, que foi localizada na Áustria e remonta a 25 mil anos atrás. Por fim, vale destacar as construções megalíticas, que eram basicamente grandes construções feitas em pedra. Os especialistas não sabem ao certo a razão pela qual esses monumentos eram construídos. O monumento megalítico mais conhecido é o de Stonehenge, localizado na Inglaterra.</p>
            
            <div class="imagens">
            <img src="./img/venus.webp"alt="Imagem Vênus de Willendorf">
            <p class="desc_venus">Vênus de Willendorf, calcário oolítico e giz vermelho, 11 cm de altura, <br>Paleolítico (cerca de 29.500 a.C.). Conservada no Naturhistoriches Museum, Viena, Áustria.<p><br>
            </div>

            <h2>Curiosidades da Pré-História</h2><br>
            <ul>
                <li>O estudo da Pré-História é um ofício realizado, principalmente, por arqueólogos, paleontólogos e geólogos.</li>
                <li>O estudo da vida dos seres humanos pré-históricos (e também dos animais desse período) inclui a análise de coprólitos, isto é, fezes fossilizadas.</li>
                <li>No Brasil, o principal sítio arqueológico localiza-se na Serra da Capivara, que fica no estado do Piauí.</li>
                <li>A estatueta de Vênus mais famosa é a Vênus de Willendorf, localizada na Áustria e que tem cerca de 25 mil anos.</li>
            </ul><br>
            
            <h2>Sociedade da Pré-História</h2><br>
            <p>As sociedades pré-históricas eram geralmente organizadas em pequenos grupos familiares ou tribos, com uma estrutura social baseada na cooperação e divisão de tarefas. As funções sociais eram divididas por gênero e idade, com os homens geralmente responsáveis pela caça e proteção do grupo, enquanto as mulheres cuidavam da coleta de alimentos e dos filhos. Com a sedentarização no Neolítico, a estrutura social tornou-se mais complexa, com a emergência de líderes, a construção de moradias permanentes e o desenvolvimento de rituais e práticas religiosas.</p><br>

            <h2>Economia da Pré-História</h2><br>
            <p>A economia da Pré-História variou conforme o período e a região. Durante o Paleolítico, a economia era baseada na caça, pesca e coleta de frutos e raízes. Essa economia de subsistência exigia uma vida nômade, pois os recursos naturais não eram suficientes para sustentar grandes populações por longos períodos. No Neolítico, a Revolução Agrícola transformou radicalmente a economia, com o cultivo de plantas como trigo e cevada e a domesticação de animais como ovelhas, cabras e gado. Essa mudança permitiu a formação de comunidades sedentárias, o armazenamento de excedentes alimentares e o surgimento do comércio.</p><br>

            <h2>Pré-História no Brasil</h2><br>
            <div class="imagens">
            <img src="./img/peixepre.webp"alt="Imagem Vênus de Willendorf">
            <p class="desc_venus">Zoólito em forma de peixe localizado no Sambaqui de Santa Catarina, uma evidência da Pré-História no Brasil.<p><br>
            </div>
            
            <p>A Pré-História no Brasil é um campo de estudo relativamente recente, mas tem revelado importantes achados sobre os primeiros habitantes do território brasileiro. Evidências arqueológicas, como os fósseis de Luzia, encontrados na gruta de Lagoa Santa, em Minas Gerais, sugerem que os primeiros habitantes do Brasil chegaram há pelo menos 12.000 anos. Esses grupos eram caçadores-coletores e desenvolveram ferramentas de pedra semelhantes às encontradas em outras partes do mundo. Sítios arqueológicos como o Parque Nacional da Serra da Capivara, no Piauí, com suas pinturas rupestres, e o sambaqui de Santa Catarina, um grande depósito de conchas, ossos e artefatos, fornecem informações valiosas sobre a vida e a cultura dos povos pré-históricos brasileiros.</p><br>

            <h2>Divisão da Pré-História</h2><br>
            <p>A Pré-História é um <strong>período de tempo consideravelmente extenso e sua nomenclatura teve origem no século XIX. </strong>Nessa última época, os estudiosos das ciências humanas tinham uma visão de que só era possível existir História, enquanto ciência, caso houvesse escrita. E como esse século acompanha o desenvolvimento humano em um momento que não havia escrita, tal momento foi nomeado de Pré-História, isto é, foi considerado um período anterior à existência da História humana.
            A Pré-História concentra um período que vai de 3 milhões de anos AP a 6500 anos AP (ou 3500 a.C.).<strong> Os períodos da Pré-História são os seguintes:</strong></p>

        <section class="card-container">
            <div class="cards">
            <h2>Paleolítico</h2>
                <p>Foi nesse período que o ser humano desenvolveu o domínio do fogo, além de ter o nomadismo como uma das principais características do período.</p>
                <img src="./img/paleolitico.jpg" alt="Imagem do Paleolítico">
                <button class="btn-toggle" onclick="toggleInfo('paleolitico')">Saiba Mais</button>
                <div id="paleolitico" class="extra-info">
                    <p>O Período Paleolítico ou Idade da Pedra Lascada é o primeiro período da Pré-História e, junto ao Neolítico compõem a chamada "Idade da Pedra".
                    O período recebe esse nome uma vez que a pedra era a principal matéria-prima utilizada na confecção de ferramentas.</p>
                </div>
            </div>

            <div class="cards">
                <h2>Mesolítico</h2>
                <p>O Mesolítico é uma fase intermediária entre o Paleolítico e o Neolítico que aconteceu em determinadas partes do mundo. Aconteceu na Europa e em partes da Ásia e estendeu-se, aproximadamente, entre 13.000 a.C. e 9.000 a.C.</p>
                <img src="./img/mesolitico.jpg"alt="Imagem periodo Mesolítico">
                <button class="btn-toggle" onclick="toggleInfo('metais')">Saiba Mais</button>
                <div id="metais" class="extra-info">
                    <p>Esse período marcou a decadência dos agrupamentos humanos que viviam exclusivamente da caça em detrimento daqueles que eram caçadores e coletores. Ficou marcado também pela produção de cerâmica e da técnica para produção de tecidos. Considera-se o fim desse período o momento em que a agricultura foi desenvolvida.</p>
                </div>
            </div>

            <div class="cards">
                <h2>Neolítico</h2>
                <p>O Neolítico, também conhecido como Idade da Pedra Polida, foi o período da Pré-História em que ocorreu a chamada Revolução Agrícola.</p>
                <img src="./img/neolitico.jpg" alt="Imagem do Neolítico">
                <button class="btn-toggle" onclick="toggleInfo('neolitico')">Saiba Mais</button>
                <div id="neolitico" class="extra-info">
                    <p>Pode-se dizer que o marco da passagem do Paleolítico para o Neolítico foi a Revolução Agrícola, que trouxe, entre outras mudanças, o sedentarismo e o uso do metal para a humanidade. Não é possível estipular o fim exato desse período, pois alguns de seus fatores permaneceram até tempos mais recentes.</p>
                </div>
            </div>
            </section>

              <section class="videos-container">
            <h2>Vídeos Educativos</h2>
            <div class="video-grid">
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/jcb6VrYNxYc?si=PDwlzqNzy20tfniu"  frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/nDsr0Ge47nE?si=r_M4Zo59lllK6Q8h" frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315"src="https://www.youtube.com/embed/3wZLUWHWzUE?si=vsL--HKojjlu8fHk" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/Ce2cfR-g508?si=976Bum-4IyFpNw5r"   frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/IAzZ9HXA2xw?si=l1yO8HebMHcFqC1L"    frameborder="0" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/ym5aER-r2tI?si=R8DIQK5F9MmeDeDu"    frameborder="0" allowfullscreen></iframe>
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
    
    <script>
    function toggleInfo(id, button) {
        const extraInfo = document.getElementById(id);

        const isVisible = extraInfo.style.display === 'block';
        extraInfo.style.display = isVisible ? 'none' : 'block';

        if (!isVisible) {
            extraInfo.parentNode.appendChild(button); 
        }
    }
</script>
</body>
</html>
