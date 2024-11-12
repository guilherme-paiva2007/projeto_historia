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
                    return;
                    break;
                }
            }

            searchElement('term', 'id').innerHTML = "Termo não encontrado";
            searchElement('definition', 'id').innerHTML = "";
        }

        let editSVG =document.createElement('img');
        let removeSVG =document.createElement('img');
        editSVG.src = "./img/pencil.svg";
        removeSVG.src = "./img/x-symbol.svg";
        editSVG.style.width = "1rem"
        removeSVG.style.width = "1rem"

        function printTerms(letter) {
            <?php
            if ($_SESSION['type'] !== "admin") {
                echo "const admin = false";
            } else {
                echo "const admin = true";
            }
            ?>

            let editOBJ = {event(termObj) { location.href = `./update.php?id=${encodeURI(termObj.id)}&term=${encodeURI(termObj.term)}&description=${encodeURI(termObj.description)}` }, content: editSVG.outerHTML}
            let removeOBJ = {event(termObj) { location.href = `./delete.php?id=${encodeURI(termObj.id)}&term=${encodeURI(termObj.term)}&description=${encodeURI(termObj.description)}` }, content: removeSVG.outerHTML};

            if (typeof admin == "undefined" || admin == false) {
                editOBJ = {};
                removeOBJ = {};
            }

            const output = searchElement('letterOutput', 'id');

            glossario.printTable(output, letter, () => {}, editOBJ, removeOBJ);

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
        <div class="menu" style='border-radius:30px; background-color:black; '>
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
            <a id="voltar" style=" width:25px ;" href="./home.php">Início</a>
            <h1>Glossário</h1>
            <!-- Barra de pesquisa -->
            <div class="search-bar">
                <input type="text" id="searchInput" placeholder="Pesquisar termo..." oninput="printTermByName(this.value)">
                <!-- <button onclick="printTermByName(searchElement('searchInput', 'id').value)">Buscar</button> -->
                <?php
                if (isset($_SESSION['type']) && $_SESSION['type'] == "admin") {
                    echo "<button onclick='location.href=\"insert.php\"'><img src=\"./img/plus.svg\" style=\"height: 1rem; filter: invert(100%)\"></button>";
                }
                ?>
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
</body>
</html>