let email = false, motsPasse = false;
function btn_Connexion(){
    valideFormat();
    return motsPasse;
}
function btn_Commence(){
    window.location.href = "connexion.php";
}

function valideFormat(){
    if(validationMotsPasse(document.querySelector('#Mots_de_passe').value) == true) {
        motsPasse = true
    }
    else
        motsPasse = false;
    /*if(validationEmail(document.querySelector('#email').value) == true) {
        email=true;
    }
    else
        email=false*/
    return;
}
function validationMotsPasse(chaine){
    return /^[a-zA-Z1-9]{8}/.test(chaine);
}
/*
function validationEmail(chaine){
    return /^[a-zA-Z1-9]+\@[a-zA-Z1-9]+\.com)$/.test(chaine);
}*/