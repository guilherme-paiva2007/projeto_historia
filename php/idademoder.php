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
    <title>Pré-História</title>
    <link rel="stylesheet" href="../css/periodos.css"/>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Explorando a Idade Moderna</h1>
        <p> foi um período histórico que se iniciou com o surgimento da escrita, por volta de 4.000 a.C., e terminou com o declínio do Império Romano do Ocidente, em 476 d.C.</p>
    </header>

    <main>
       <section class="informacoes-gerais">
            <h2>Introdução à Idade Antiga</h2><br>
            <p>A Idade Antiga é o período da história que abrange desde o surgimento da escrita, por volta de 3.000 a.C., até a queda do Império Romano do Ocidente, em 476 d.C. Durante essa era, desenvolveram-se grandes civilizações como a egípcia, a mesopotâmica, a grega e a romana. Essas culturas influenciaram profundamente a organização social, a política, a religião e a filosofia. A Idade Antiga foi marcada por importantes avanços na arquitetura, nas artes e no conhecimento, com a criação de sistemas jurídicos, alfabetos e obras literárias que moldaram o desenvolvimento humano.</p><br> 
            <h2>O que foi a Idade Antiga? </h2><br>

            <p>Por Idade Antiga entende-se o período da história humana que se deu com o surgimento da primeira forma de escrita até a desagregação do Império Romano do Ocidente. Esses marcos foram estipulados pelos historiadores e devem ser entendidos como momentos de referência que levaram a transformações no longo prazo e não de imediato.</p><br>
            <h2>Sobre Idade Antiga</h2><br>
            <p>Quando falamos de Antiguidade, dedicamo-nos a entender os modos de vida de diferentes civilizações, o que inclui as origens de cada grande civilização, os seus modos de vida, os avanços realizados por elas. Além disso, dedicamo-nos ao estudo das religiões desses povos, seus mitos de origens, suas leis, sua economia etc.

Esse foi o período em que as grandes cidades surgiram, mas também foi um momento de conflitos e guerras de expansão. Vamos, a seguir, conhecer um pouco de algumas das civilizações que existiram nessa parte da história.</p>
           
            
            <div class="imagens">
            <img src="../img/estelas-hititas.webp"alt="Imagem Vênus de Willendorf">
            <p class="desc_venus">Vênus de Willendorf, calcário oolítico e giz vermelho, 11 cm de altura, <br>Paleolítico (cerca de 29.500 a.C.). Conservada no Naturhistoriches Museum, Viena, Áustria.<p><br>
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
