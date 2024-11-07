if (typeof base_project_name !== "string") base_project_name = "";
if (typeof root_folder_link !== "string") root_folder_link = "";

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

PageTheme.loadThemes(createLink('./css/themes.json'));
PageTheme.posLoad(() => {
    PageTheme.applyTheme('light');
    PageTheme.applyColor('blue');
});

// let promise1 = new Promise( (resolve, reject) => { setTimeout(() => { resolve("promise1 completa") }, 1000) } );
// let promise2 = new Promise( (resolve, reject) => { setTimeout(() => { resolve("promise2 completa") }, 4000) } );
// let promise3 = new Promise( (resolve, reject) => {
//     let counter = 0;
//     let interval = setInterval(
//         () => {
//             if (++counter == 8) {
//                 clearInterval(interval);
//                 resolve("promise3 completa")
//             } else {
//                 console.log(counter);
//             }
//         }, 1000
//     )
// });

// Promise.all([promise1, promise2, promise3]).then(values => {
//     console.log(values);
// })

const localSt = new StorageControl("cronicas_tempo", "local");
localSt.load();

const sessionSt = new StorageControl("cronicas_tempo", "session");
sessionSt.load();

// Carrossels
const carousels = {}

if (searchElement('periodos_carrossel', 'id')) {
    carousels.periodos = new Carousel(searchElement('periodos_carrossel', 'id'), { sectionClass: "periodo_carrossel" });
}

// Glossário
Glossary.setURL('./php/getGlossario.php');

const glossario = new Glossary();

glossario.editTerm = function editTerm(id, term, description) {
    if (typeof id !== "string") return console.log(2);
    if (typeof term !== "string") return console.log(3);
    if (typeof description !== "string") return console.log(4);

    let sufix = ["action=edit", `id=${encodeURI(Number(id))}`]

    if (term !== "") sufix.push(`term=${encodeURI(term)}`);
    if (description !== "") sufix.push(`description=${encodeURI(description)}`);

    fetch('./php/editGlossario.php?' + sufix.join('&')).then(resp => resp.text()).then(text => console.log(text));
}

glossario.addTerm = function addTerm(term, description) {
    if (typeof term !== "string" || term == "") return console.log(2);
    if (typeof description !== "string" || description == "") return console.log(3);

    let sufix = `action=add&term=${encodeURI(term)}&description=${encodeURI(description)}`;

    fetch('./php/editGlossario.php?' + sufix).then(resp => resp.text()).then(text => console.log(text));
}

glossario.removeTerm = function removeTerm(id) {
    if (typeof id !== "string") return console.log(2);

    let sufix = `action=remove&id=${encodeURI(Number(id))}`;

    fetch('./php/editGlossario.php?' + sufix).then(resp => resp.text()).then(text => console.log(text));
}