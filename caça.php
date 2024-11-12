<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Jogo de Caça-Palavras Interativo</title>
<style>
    body {
        font-family: Arial, sans-serif;
        text-align: center;
    }
    .wordSearch {
        display: inline-block;
        margin-top: 20px;
        user-select: none; /* Evita a seleção de texto ao arrastar */
    }
    .wordSearch table {
        border-collapse: collapse;
        margin: auto;
    }
    .wordSearch td {
        width: 30px;
        height: 30px;
        border: 1px solid #000;
        text-align: center;
        cursor: pointer;
    }
    .highlight {
        background-color: #eca6e1;
    }
    .found {
        background-color: lightgreen;
    }
    .words {
        margin-top: 20px;
    }
    .word {
        display: inline-block;
        margin: 5px;
        cursor: pointer;
    }
    .found-word {
        text-decoration: line-through;
        color: green;
    }
</style>
</head>
<body>
    <h1>Jogo de Caça-Palavras Interativo</h1>

    <div class="wordSearch" id="wordSearch">
        <table id="puzzleGrid">
            <!-- O grid será gerado pelo JavaScript -->
        </table>
    </div>

    <div class="words" id="wordsList">
        <!-- Lista de palavras será gerada pelo JavaScript -->
    </div>

    <script>
        const gridSize = 16;
        const validWords = ["DECORATIVOS", "RELIGIOSOS", "LÚDICOS", "ARTEPOPULAR", "TRADICIONAL", "ADORNOS", "INDÍGENA", "QUILOMBOLA", "SUVENIRES"];
        let grid = Array.from({length: gridSize}, () => Array(gridSize).fill(''));

        // Função para preencher células vazias com letras aleatórias
        function fillEmptyCells() {
            for (let row = 0; row < gridSize; row++) {
                for (let col = 0; col < gridSize; col++) {
                    if (grid[row][col] === '') {
                        grid[row][col] = String.fromCharCode(Math.floor(Math.random() * 26) + 65); // Gera uma letra aleatória entre A-Z
                    }
                }
            }
        }

        // Função para desenhar a grade do caça-palavras
        function drawGrid() {
            const table = document.getElementById('puzzleGrid');
            grid.forEach((row, rowIndex) => {
                const tr = document.createElement('tr');
                row.forEach((cell, cellIndex) => {
                    const td = document.createElement('td');
                    td.textContent = cell;
                    td.dataset.row = rowIndex;
                    td.dataset.col = cellIndex;
                    tr.appendChild(td);
                });
                table.appendChild(tr);
            });
        }

        // Função para misturar aleatoriamente as palavras
        function shuffleWords() {
            validWords.forEach(word => {
                let placed = false;
                while (!placed) {
                    const vertical = Math.random() < 0.5;
                    const rowStart = Math.floor(Math.random() * gridSize);
                    const colStart = Math.floor(Math.random() * gridSize);
                    const stepR = vertical ? 1 : 0;
                    const stepC = vertical ? 0 : 1;
                    let fits = true;

                    for (let i = 0; i < word.length; i++) {
                        const r = rowStart + i * stepR;
                        const c = colStart + i * stepC;
                        if (r >= gridSize || c >= gridSize || (grid[r][c] !== '' && grid[r][c] !== word[i])) {
                            fits = false;
                            break;
                        }
                    }

                    if (fits) {
                        for (let i = 0; i < word.length; i++) {
                            const r = rowStart + i * stepR;
                            const c = colStart + i * stepC;
                            grid[r][c] = word[i];
                        }
                        placed = true;
                    }
                }
            });
        }

        // Função para exibir as palavras para serem encontradas
        function displayWords() {
            const wordsDiv = document.getElementById('wordsList');
            validWords.forEach((word, index) => {
                const wordElement = document.createElement('p');
                wordElement.textContent = word;
                wordElement.id = `word${index}`;
                wordElement.className = 'word';
                wordsDiv.appendChild(wordElement);
            });
        }

        // Funções para manipular seleção de palavras
        let selectedCells = [];

        function handleCellSelection() {
            document.querySelectorAll('#puzzleGrid td').forEach(cell => {
                cell.addEventListener('mousedown', () => {
                    selectedCells = [cell];
                    cell.classList.add('highlight');
                });
                cell.addEventListener('mouseenter', () => {
                    if (selectedCells.length > 0 && !selectedCells.includes(cell)) {
                        selectedCells.push(cell);
                        cell.classList.add('highlight');
                    }
                });
            });

            document.addEventListener('mouseup', () => {
                checkWord();
                selectedCells.forEach(cell => cell.classList.remove('highlight'));
                selectedCells = [];
            });
        }

        // Função para verificar se a palavra selecionada é válida
        function checkWord() {
            const word = selectedCells.map(cell => cell.textContent).join('');
            validWords.forEach(validWord => {
                if (validWord === word) {
                    selectedCells.forEach(cell => cell.classList.add('found'));
                    document.getElementById(`word${validWords.indexOf(validWord)}`).classList.add('found-word');
                }
            });
        }

        shuffleWords();
        fillEmptyCells();
        drawGrid();
        displayWords();
        handleCellSelection();
    </script>
</body>
</html>