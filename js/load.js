if (typeof base_project_name !== "string") base_project_name = "";
if (typeof root_folder_link !== "string") root_folder_link = "";

if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href);
}

PageTheme.loadThemes(createLink('/css/themes.json'));