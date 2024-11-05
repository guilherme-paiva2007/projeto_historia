<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossário</title>
    <link rel="stylesheet" href="./css/glossario.css"/>
</head>
<body>
<!-- VC CONSEGUE LIN!!!! -->
<div class="glossary-container">
    <div class="section letters-section">
        <h2>Glossário</h2>
        <p>Escolha uma letra para ver as palavras correspondentes.</p>
        <div class="letters">
            <!-- Letras do alfabeto de A a Z -->
            <button data-letter="A">A</button>
            <button data-letter="B">B</button>
            <button data-letter="C">C</button>
            <button data-letter="D">D</button>
            <button data-letter="E">E</button>
            <button data-letter="F">F</button>
            <button data-letter="G">G</button>
            <button data-letter="H">H</button>
            <button data-letter="I">I</button>
            <button data-letter="J">J</button>
            <button data-letter="K">K</button>
            <button data-letter="L">L</button>
            <button data-letter="M">M</button>
            <button data-letter="N">N</button>
            <button data-letter="O">O</button>
            <button data-letter="P">P</button>
            <button data-letter="Q">Q</button>
            <button data-letter="R">R</button>
            <button data-letter="S">S</button>
            <button data-letter="T">T</button>
            <button data-letter="U">U</button>
            <button data-letter="V">V</button>
            <button data-letter="W">W</button>
            <button data-letter="X">X</button>
            <button data-letter="Y">Y</button>
            <button data-letter="Z">Z</button>
        </div>
        <ul class="words-list">
            <!-- Palavras para a letra selecionada serão adicionadas aqui -->
        </ul>
    </div>

    <div class="section search-section">
        <div class="search-bar">
            <input type="text" id="search-input" placeholder="Pesquisar...">
            <button id="search-button">🔍</button>
        </div>
        <div class="result-card">
            <h3 id="result-title"></h3>
            <p id="result-content"></p>
            <img id="result-image" src="" alt="Imagem relacionada" style="display: none;">
        </div>
    </div>
</div>

<script src="./js/glo.js"></script>
</body>
</html>
