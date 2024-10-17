<?php
    $base_project_name = '/projeto_historia';
    $root_folder = $_SERVER['DOCUMENT_ROOT'] . $base_project_name;
    $root_folder_link = $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] . $base_project_name;
    include $root_folder . '/php/functions.php';
    include $root_folder . '/php/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include './html/links.php' ?>
    <script defer>
        setTimeout(() => {
            PageTheme.posLoad(() => {
                PageTheme.applyTheme('dark');
            
                let buttonsRow = searchElement('.row.buttons', 'query');
            
                PageTheme.ColorList.forEach(color => {
                    if (color.name.isIn(['base', 'reverse', 'grey'])) return;
                    let newElement = document.createElement('div');
                    
                    newElement.addEventListener('mouseenter', () => {
                        PageTheme.applyColor(color.name);
                    })
            
                    newElement.addEventListener('mouseleave', () => {
                        HTML.classList.remove(color.name + "Main");
                    })
            
                    newElement.style.backgroundColor = `var(--${color.name}_lightTheme)`
            
                    buttonsRow.append(newElement);
                })
            });
        }, 200)
    </script>
</head>
<style>
    * {
        transition: 0.3s;
    }

    html {
        background-color: var(--reverse);
    }

    body {
        height: 100vh;
        margin: 0;
        overflow-y: hidden;
        background-color: var(--baseFilter3);
    }

    header {
        padding: 4rem;
        width: 100%;
        box-sizing: border-box;
        background-color: var(--main);
    }

    main {
        height: calc(100vh - 8rem);
        background-color: var(--mainFilter2);
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        gap: 4rem;
        width: 100%;
    }
    .row {
        display: flex;
        gap: 2rem;
    }
    .row div {
        width: 8rem;
        height: 8rem;
        box-sizing: border-box;
        border: 4px solid var(--baseFilter1);
    }
    .row.buttons div {
        width: 4rem;
        height: 4rem;
        box-sizing: border-box;
        border: 4px solid var(--baseFilter1);
    }
</style>
<body>
    <header></header>
    <main>
        <section class="row buttons"></section>
        <section class="row">
            <div style="background-color:var(--main)"></div>
            <div style="background-color:var(--mainVar1)"></div>
            <div style="background-color:var(--mainVar2)"></div>
            <div style="background-color:var(--mainVar3)"></div>
            <div style="background-color:var(--mainVar4)"></div>
        </section>
    </main>
</body>
</html>