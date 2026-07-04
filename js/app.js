document.addEventListener("DOMContentLoaded", function () {
    alert("bien")

    let champPasswordLogin = document.querySelector("#password");
    let boutonOeil = document.querySelector(".password-btn");

    function AfficherMotDePasse() {

        if (champPasswordLogin.type === "password") {
            champPasswordLogin.type = "text";
        } else {
            champPasswordLogin.type = "password";
        }

    }

    boutonOeil.addEventListener("click", AfficherMotDePasse);

});