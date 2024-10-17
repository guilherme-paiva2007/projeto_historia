if (typeof base_project_name !== "string") base_project_name = "";
if (typeof root_folder_link !== "string") root_folder_link = "";

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

PageTheme.loadThemes(createLink('/css/themes.json'));



let promise1 = new Promise( (resolve, reject) => { setTimeout(() => { resolve("promise1 completa") }, 1000) } );
let promise2 = new Promise( (resolve, reject) => { setTimeout(() => { resolve("promise2 completa") }, 4000) } );
let promise3 = new Promise( (resolve, reject) => {
    let counter = 0;
    let interval = setInterval(
        () => {
            if (++counter == 8) {
                clearInterval(interval);
                resolve("promise3 completa")
            } else {
                console.log(counter);
            }
        }, 1000
    )
});

Promise.all([promise1, promise2, promise3]).then(values => {
    console.log(values);
})