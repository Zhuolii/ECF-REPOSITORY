// recupere  l'email et le mot de passe de la page de connexion
const mailInput = document.getElementById("EmailInput");
const passwordInput = document.getElementById("PasswordInput");

// recupere le bouton de connexion

const btnConnexion = document.getElementById("btnConnexion");

//ajoute un eventlistener pour verifier les infos de connexion lorsque le bouton est clické 

btnConnexion.addEventListener("click", checkCredentials);

function checkCredentials (){
    // apperler API pour verifier les credentials en bdd : mail et mdp à changer 
    if(mailInput.value == "test@mail.fr" && passwordInput.value == "123"){
        alert("connexion reussie");

        // on simule un token , il faudra recuperer le vrai token
        const token = "fzerkfjebrfbehrfbjhebrjhfbejhrbfjerf";
        //placer le token en cookie
        setToken(token);
        // gerer le role de l'utilisateur 
        setCookie(RoleCookieName, "admin", 7)
        
        //on redigige vers la page d'acceuil en modifiant l'url
        window.location.replace("/");
    }
    else{
        mailInput.classList.add("is-invalid");
        passwordInput.classList.add("is-invalid");
   
    }
}