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
    <title>Idade Antiga</title>
    <link rel="stylesheet" href="../css/periodos.css"/>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <header class="idadeantiga">
        <h1>Explorando a Idade Antiga</h1>
        <p>A Idade Antiga é um período da história que se estendeu de cerca de 3500 a.C., quando surgiu a escrita cuneiforme, até 476 d.C., quando houve a desagregação do Império Romano.</p>
    </header>

    <main>
       <section class="informacoes-gerais">
            <h2>Introdução à Idade Antiga</h2><br>
            <p>A Idade Antiga é um dos períodos da história estipulados pelos historiadores modernos. Esse período estendeu-se de 3500 a.C., quando surgiu a escrita cuneiforme, até o ano de 476 d.C., quando o Império Romano do Ocidente foi desagregado com o destronamento do último imperador de Roma.</p><br> 
            <h2>O que foi a Idade Antiga? </h2><br>

            <p>A Idade Antiga ou Antiguidade é um período da história que, cronologicamente, teve início por volta de 3500 a.C. Todos os períodos possuem marcos que são utilizados como balizadores de seu início e de seu término, porém é importante sempre pontuar que esses marcos são balizadores aproximativos e levam em consideração acontecimentos que indicam mudanças significativas a longo prazo.</p><br>
            <p>No caso da Idade Antiga, o marco inicial foi o surgimento da escrita cuneiforme, a primeira forma de escrita da humanidade, que foi criada pelos sumérios e foi utilizada em toda a Mesopotâmia, até por volta de 100 a.C. A tradução dessa escrita foi realizada no século XIX e permitiu ampliar consideravelmente o conhecimento sobre a Antiguidade.</p><br>
            <h2>Sobre Idade Antiga</h2><br>
            <p>A Idade Antiga estendeu-se até o ano de 476 d.C., quando houve a desagregação do Império Romano do Ocidente. Esse acontecimento marcou o fim do Império Romano na Europa Ocidental e deu início ao processo de ocupação desse continente pelos reinos germânicos. Isso permitiu a fusão entre a cultura latina e a cultura germânica e deu forma à Idade Média.</p><br>
            <p>Ao estudarmos a Idade Antiga, podemos referir-nos a qualquer civilização que existiu entre 3500 a.C. e 476 d.C., embora o desenvolvimento das civilizações não seja uniforme e cada uma tenha tido diferentes graus de sofisticação. De toda forma, o foco no estudo da Antiguidade costuma ser as civilizações orientais e as civilizações clássicas.</p><br>
            <p>Quando falamos de civilizações orientais, estamos considerando os povos mesopotâmicos, fenícios, hebreus, persas, egípcios, hititas e muitos outros. No caso das civilizações clássicas, estamos nos referindo aos gregos e aos romanos. No caso dos gregos, costumam ser incluídos os cretenses e os micênicos.</p><br>
            <p>É claro que a Antiguidade vai além disso e podem ser estudadas as civilizações da Antiguidade que existiram na Ásia, com destaque para os chineses e os indianos. No caso do continente americano, podem ser estudadas as civilizações pré-colombianas, como os olmecas, zapotecas, chavín etc.</p><br>
            <p>O continente africano também possui suas civilizações da Antiguidade, como cuxitas, os cartaginenses. Apesar de incluídos nas civilizações orientais, os egípcios também eram africanos, já que, geograficamente, o Egito está localizado na África.</p><br>
           
            
            <div class="imagens">
            <img src="../img/escritacuneiforme.png"alt="Imagem Escrita Cuneiforme">
            <p class="desc_venus">O surgimento da escrita cuneiforme, desenvolvida pelos sumérios por volta de 3500 a.C.,<br> é considerado o marco que deu início à Idade Antiga.<p><br>
            </div>

            <h2>Curiosidades</h2>
            <ul>
                <li>O estudo da Pré-História é um ofício realizado, principalmente, por arqueólogos, paleontólogos e geólogos.</li>
                <li>O estudo da vida dos seres humanos pré-históricos (e também dos animais desse período) inclui a análise de coprólitos, isto é, fezes fossilizadas.</li>
                <li>No Brasil, o principal sítio arqueológico localiza-se na Serra da Capivara, que fica no estado do Piauí.</li>
                <li>A estatueta de Vênus mais famosa é a Vênus de Willendorf, localizada na Áustria e que tem cerca de 25 mil anos.</li>
            </ul><br>

        
        <section class="card-container">
            <div class="card">
            <h2>Roma Antiga</h2>
                <p>Roma formou a civilização com o maior império, territorialmente falando, de toda a Antiguidade. A civilização romana surgiu como uma pequena cidade no Lácio, região central da Itália moderna.</p>
                <img src="../img/roma.webp" alt="Imagem do Paleolítico">
                <button class="btn-toggle" onclick="toggleInfo('paleolitico')">Saiba Mais</button>
                <div id="paleolitico" class="extra-info">
                    <p>Ao longo do tempo, os romanos foram expandindo seus territórios e formaram uma civilização extremamente complexa e sofisticada.</p>
                </div>
            </div>

            <div class="card">
                <h2>Grécia Antiga</h2>
                <p>Os gregos, juntamente aos romanos, fizeram parte das grandes civilizações clássicas. Eles ficaram famosos por realizar grandes contribuições para a humanidade em diferentes áreas do conhecimento, como filosofia, matemática e história.</p>
                <img src="../img/grecia.webp"alt="Imagem periodo Mesolítico">
                <button class="btn-toggle" onclick="toggleInfo('metais')">Saiba Mais</button>
                <div id="metais" class="extra-info">
                    <p>O povo grego foi resultado da junção de diferentes povos: eólios, jônios e dórios.</p>
                </div>
            </div>

            <div class="card">
                <h2>Mesopotâmia</h2>
                <p>A Mesopotâmia é nomeada por muitos como o berço da civilização, uma vez que parte das primeiras cidades formadas pelo homem surgiu lá. </p>
                <img src="../img/meso.jpg" alt="Imagem do Neolítico">
                <button class="btn-toggle" onclick="toggleInfo('neolitico')">Saiba Mais</button>
                <div id="neolitico" class="extra-info">
                    <p>PAs civilizações mesopotâmicas desenvolveram-se entre os rios Tigre e Eufrates, e, por isso, ficaram conhecidas como “terra entre rios”.</p>
                </div>
            </div>
            </section>

              <section class="videos-container">
            <h2>Vídeos Educativos</h2>
            <div class="video-grid">
            <iframe width="100%" height="315" src="https://www.youtube.com/embed/HU08s_nrOzw?si=Ay0_Dk5xJ5uzh__Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <iframe width="100%" height="315" src="https://www.youtube.com/embed/CEMMtJ0xMfs?si=rV0Oj_Td9YK7Ybfs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/YRu9j0yIwxw?si=5KIp692bz9U6vWUj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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

</body>
</html>
