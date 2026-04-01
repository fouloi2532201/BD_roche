function Validation()
{
    let email = document.querySelector("#email").value;
    let mdp = document.querySelector("#mdp").value;
     
    if (validateEmail(email) == true && verificationmdp(mdp) == true)
    {
        window.location.href ="catalogue.html";
    }
}
function validateEmail(email){
    var emailReg = new RegExp(/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))/i);
    return emailReg.test(email);
}
function verificationmdp(mdp)
{
    if (mdp.length >= 8)
        return true;
    return false;
}
function ChangePage()
{
    window.location.href ="connexion.html";
}