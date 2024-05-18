const RoleCookieName ="role";
const signoutBtn = document.getElementById("signout-btn");
const tokenCookieName = "accesstoken";

//gestionnaire de role

function getRole(){
    return getCookie(RoleCookieName);
}
// deconnecté
//connecté
  //admin
  //veterinaire
  //employé
//connecté
// data-show
function showAndHideElementsForRoles(){
    const userConnected = isConnected();
    const role = getRole();

    let allElementsToShow = document.querySelectorAll('[data-show]');


    allElementsToShow.forEach(element =>{
        switch(element.dataset.show){
            case "disconnected" :
                if(userConnected){
                    element.classList.add("d-none")
                }
                break;
            case "connected" :
                if(!userConnected){
                    element.classList.add("d-none")
                }
                break;
            case "admin" :
                if(!userConnected || role != "admin"){
                    element.classList.add("d-none")
                }
                break;
            case "veterinaire" :
                if(!userConnected || role != "veterinaire"){
                    element.classList.add("d-none")
                }
                break;
            case "employe" :
                if(!userConnected || role != "employe"){
                    element.classList.add("d-none")
                }
                break;
        }
    })
}
// data-show
//Méthodes pour les cookies

function setCookie(name,value,days) {
    var expires = "";
    if (days) {
        var date = new Date();
        date.setTime(date.getTime() + (days*24*60*60*1000));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
}

function getCookie(name) {
    var nameEQ = name + "=";
    var ca = document.cookie.split(';');
    for(var i=0;i < ca.length;i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') c = c.substring(1,c.length);
        if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
    }
    return null;
}

function eraseCookie(name) {   
    document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
}

//Gestion de la connexion



function setToken(token){
    setCookie(tokenCookieName, token, 7);
}

function getToken(){
    return getCookie(tokenCookieName);
}

//Savoir si on est connecté

function isConnected(){
    if(getToken() == null || getToken == undefined){
        return false;
    }
    else{
        return true;
    }
}

if(isConnected()){
    alert("je suis connecté");
}
else{
    alert("je ne suis pas connecté");
}

// Déconnexion

signoutBtn.addEventListener("click", signOut);

//effacer le cookie
function signOut(){
eraseCookie(tokenCookieName);
//effacer le role 
eraseCookie(RoleCookieName);
// actualiser la page
window.location.reload();
}
// Déconnexion