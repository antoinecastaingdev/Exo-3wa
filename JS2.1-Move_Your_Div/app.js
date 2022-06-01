/* Exercice - Move Your Div

Déplacer une div sur quatre points cardinaux quand on clique un bouton.  
Quand la div revient à son point d'origine, un modal s'affiche.  
Le modal disparait lorsqu'on recommence le cycle.  
Un deuxième bouton doit servir à masquer le modal.

*/

const buttonMove = document.querySelector('#moveDiv');
const buttonHide = document.querySelector('#hideModal');
const redDiv = document.querySelector('.red')

buttonHide.addEventListener('click', () => {
    redDiv.classList.add('modal');
})