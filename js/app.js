// Masquer/afficher mot de passe
document.addEventListener("DOMContentLoaded", function() {
// Selectionner les balises liées a cette action et stockons les dans une variable/boite
let ChampPasswordLogin = document.querySelector("#password");
let BoutonOeil = document.querySelector(".password-btn");

// creer une fonction qui va declencher l'action du click plus tard
function AfficherMotDePasse() {
    if(ChampPasswordLogin.type === "password") {
        ChampPasswordLogin.type = "text";
    } else {
        ChampPasswordLogin.type = "password";
    }
}

BoutonOeil.addEventListener("click", AfficherMotDePasse);

})

// Avertissement de suppression
document.addEventListener("DomContentLoaded", function() {
    let BoutonSupprimer = document.querySelector(".btn-supprimer");

    function SupprimerEleve(event) {
        let ConfirmerSuppression = confirm("Voulez-vous supprimer réellement cet élève?");

        if(!ConfirmerSuppression) {
            event.preventDefault();
        }
    }
    
   BoutonSupprimer.forEach(function(TousLesBoutons) {
    TousLesBoutons.addEventListener("click", SupprimerEleve);
   })
})
