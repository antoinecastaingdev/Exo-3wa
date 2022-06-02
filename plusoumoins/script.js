let nbrSecret = Math.floor(Math.random() * 100);

let input = document.getElementById('number-guessed');
const button = document.getElementById('btn-result');
let resultParagraph = document.getElementById('result-paragraph');


button.addEventListener('click', () => {

    if (input.value > nbrSecret) {
        resultParagraph.textContent = "C'est moins ! Réessayez.";
    } else if (input.value < nbrSecret) {
        resultParagraph.textContent = "C'est plus ! Réessayez.";
    } else if (+input.value === nbrSecret) {
        resultParagraph.textContent = `GG c'était ${nbrSecret}`;
    }
}
)
