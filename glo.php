<?php
$base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();
if (isset($_SESSION['logged']) && $_SESSION['logged'] == false) {
    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Glossário</title>
    <link rel="stylesheet" href="./css/glossario.css"/>
    <?php include './html/links.php'; ?>
</head>
<body>
<section>
    <script>
        function printTermByName(term) {
            const output = searchElement('letterOutput', 'id');
            
            let search;

            searchElement('searchResult', 'id').style.display = "block";

            if (term == "") return searchElement('searchResult', 'id').style.display = "";
            for (let i = 0; i < glossario.allTerms.length; i++) {
                const termSearch = glossario.allTerms[i];
                
                if (termSearch.term.toLowerCase().startsWith(term.toLowerCase())) {
                    searchElement('term', 'id').innerHTML =termSearch.term;
                    searchElement('definition', 'id').innerHTML =termSearch.description;
                    console.log('A')
                    return;
                    break;
                }
            }

            searchElement('term', 'id').innerHTML = "Termo não encontrado";
            searchElement('definition', 'id').innerHTML = "";
        }

        function printTerms(letter) {
            const output = searchElement('letterOutput', 'id');

            glossario.printTable(output, letter);

            if (output.innerHTML == "") {
                let row = document.createElement('tr');
                let data = document.createElement('td');
                data.innerHTML = `Nenhum termo encontrado para a letra ${letter.toUpperCase()}.`
                data.colSpan = 2;
                row.append(data);
                output.append(row);
            }
        }
    </script>
        <!-- Menu com letras para filtrar, mas precisar colocar em um card e arrumar -->
        <div class="menu">
            <button onclick="printTerms('*')">Todos</button>
            <?php
            $letters = range('A', 'Z');
            foreach ($letters as $letter) {
                echo "<button onclick=\"printTerms('$letter')\">$letter</button>";
            }
            ?>
            <button onclick="printTerms('-')">-</button>
        </div>

        <!-- Container principal do glossário -->
        <div class="glossario-container">
            <h1>Glossário</h1>
            <!-- Barra de pesquisa -->
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Pesquisar termo...">
                <button onclick="printTermByName(searchElement('searchInput', 'id').value)">Buscar</button>
            </div>
            
            <!-- Card da pesquisa: PRECISA ARRUMAR, deixar mais bonitin -->
            <div id="searchResult" class="card">
                <h2 id="term"></h2>
                <p id="definition"></p>
            </div>
            
            <!-- Tabela para exibir termos filtrados por letra -->
            <table id="glossaryTable">
                <thead>
                    <tr>
                        <th>Termo</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody id="letterOutput">
                    <!-- Linhas da tabela serão geradas dinamicamente -->
                </tbody>
            </table>
        </div>
    </section>

    <script>
        const terms = {
            "A": [
                { term: "Akakakka", description: "Descrição de exemplo para Akakakka." },
                { term: "Ajajajajaja", description: "Descrição de exemplo para Ajajajajaja." },
                { term: "Ajajajajana", description: "Descrição de exemplo para Ajajajajana." }
            ],
            "B": [
                { term: "Banana", description: "Descrição de exemplo para Banana." }
            ],
            // amg tem q fazer ate a letra z
        };

        function filterGlossary(letter) {
            const output = document.getElementById("letterOutput");
            output.innerHTML = ""; // Limpa a tabela
            
            if (terms[letter]) {
                terms[letter].forEach(item => {
                    const row = document.createElement("tr");
                    const termCell = document.createElement("td");
                    const descriptionCell = document.createElement("td");
                    
                    termCell.textContent = item.term;
                    descriptionCell.textContent = item.description;
                    
                    row.appendChild(termCell);
                    row.appendChild(descriptionCell);
                    output.appendChild(row);
                });
            }
        }

        function searchGlossary() {
            const input = document.getElementById("searchInput").value.toLowerCase();
            const resultCard = document.getElementById("searchResult");
            const termDisplay = document.getElementById("term");
            const definitionDisplay = document.getElementById("definition");
            
            let found = false;
            
            // linn aq rocura em todos os termos
            for (const letter in terms) {
                terms[letter].forEach(item => {
                    if (item.term.toLowerCase() === input) {
                        termDisplay.textContent = item.term;
                        definitionDisplay.textContent = item.description;
                        resultCard.style.display = "block";
                        found = true;
                    }
                });
            }
            
            if (!found) {
                termDisplay.textContent = "Termo não encontrado";
                definitionDisplay.textContent = "";
                resultCard.style.display = "block";
            }
        }
    </script>
</body>
</html>