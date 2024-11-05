<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <?php include './html/links.php' ?>
    </head>
    <body>
        <section>
            <input type="text" id="letterinput" maxlength="1">
            <table>
                <thead>
                    <tr>
                        <th style="padding-right: 2rem">Termo</th>
                        <th>Descrição</th>
                    </tr>
                </thead>
                <tbody id="letteroutput"></tbody>
            </table>
            <script>
                searchElement('letterinput', 'id').addEventListener('input', function(event) {
                    const output = searchElement('letteroutput', 'id');
                    output.innerHTML = "";

                    if (this.value == "") return;

                    const search = new Glossary.Search(this.value, 'letter');

                    search.fetch.then(terms => {
                        if (search.get.length == 0) {
                            let row = document.createElement('tr');
                            let line =document.createElement('td');
                            line.colSpan = 2;
                            line.innerHTML = "Nenhum item encontrado";
                            row.append(line);
                            output.append(row);
                        } else {
                            search.get.forEach(termObj => {
                                let row =document.createElement('tr');
                                let dataTerm =document.createElement('td');
                                dataTerm.style.paddingRight = "2rem";
                                let dataDesc =document.createElement('td');

                                dataTerm.appendChild(document.createTextNode(termObj.term));
                                dataDesc.appendChild(document.createTextNode(termObj.description));

                                row.append(dataTerm, dataDesc);
                                output.append(row);
                            });
                        }
                    });
                });
            </script>
        </section>
    </body>
</html>