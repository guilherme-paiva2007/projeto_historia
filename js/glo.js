const wordsDatabase = {
    A: ["Abolicionismo", "Absolutismo", "Anarquistas"],
    B: ["Bandeirantes", "Barroco"],
    C: ["Colonialismo", "Conservadorismo"],
    // Continue para as demais letras
};

document.addEventListener("DOMContentLoaded", () => {
    const letters = document.querySelectorAll(".letters button");
    const wordsList = document.querySelector(".words-list");
    const searchButton = document.getElementById("search-button");
    const searchInput = document.getElementById("search-input");
    const resultTitle = document.getElementById("result-title");
    const resultContent = document.getElementById("result-content");
    const resultImage = document.getElementById("result-image");

    letters.forEach(button => {
        button.addEventListener("click", () => {
            const letter = button.getAttribute("data-letter");
            displayWords(letter);
        });
    });

    searchButton.addEventListener("click", () => {
        const query = searchInput.value.trim();
        if (query) {
            performSearch(query);
        }
    });

    function displayWords(letter) {
        wordsList.innerHTML = "";
        if (wordsDatabase[letter]) {
            wordsDatabase[letter].forEach(word => {
                const li = document.createElement("li");
                li.textContent = word;
                wordsList.appendChild(li);
            });
        }
    }

    function performSearch(query) {
        // Aqui você pode buscar o termo no banco de dados ou exibir conteúdo simulado
        resultTitle.textContent = query;
        resultContent.textContent = "Conteúdo para " + query;
        resultImage.src = "https://via.placeholder.com/150";
        resultImage.style.display = "block";
    }
});
