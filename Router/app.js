const express = require('express');
const app = express();
const path = require('path');
const staticPath = path.join(__dirname, '../static.json'); // Remplacez 'public' par le chemin réel de votre dossier statique
app.use(express.static(staticPath));

//route js

 class Route {
    constructor(url, title, pathHtml, authorize, pathJS = "") {
      this.url = url;
      this.title = title;
      this.pathHtml = pathHtml;
      this.pathJS = pathJS;
      this.authorize = authorize;
    }
}

//allroute

const allRoutes = [
    new Route("/", "Accueil", "src/pages/home.php", []),
    new Route("/services", "Services", "services.php", []),
    new Route("/habitats", "Habitats", "habitats.php", [], "js/habitats.js"),
    new Route("/galerie", "Habitats", "galerie.php", []),
    new Route("/contact", "Contact", "contact.php", []),
    new Route("/signin", "Connexion", "auth/signin.php", ["disconnected"], "js/auth/signin.js"),
    new Route("/account", "Mon compte", "auth/account.php", ["connected"]),


  ];

  const websiteName = "Zoo d'Arcadia";


  //router

  // Création d'une route pour la page 404 (page introuvable)
const route404 = new Route("404", "Page introuvable", "src/pages/404.html",[]);



// Fonction pour récupérer la route correspondant à une URL donnée
const getRouteByUrl = (url) => {
  let currentRoute = null;
  // Parcours de toutes les routes pour trouver la correspondance
  allRoutes.forEach((element) => {
    if (element.url == url) {
      currentRoute = element;
    }
  });
  // Si aucune correspondance n'est trouvée, on retourne la route 404
  if (currentRoute != null) {
   
  
     return currentRoute;
  } else {
  
    return route404;
  }
};

/*

// Fonction pour charger le contenu de la page
const LoadContentPage = async () => {
  const path = window.location.pathname;
  // Récupération de l'URL actuelle
  const actualRoute = getRouteByUrl(path);

 
  //Vérifier les droits d'accès à la page
  const allRolesArray = actualRoute.authorize;

  if(allRolesArray.length > 0){
    if(allRolesArray.includes("disconnected")){
      if(isConnected()){
        window.location.replace("/");
      }
    }
    else{
      const roleUser = getRole();
      if(!allRolesArray.includes(roleUser)){
        window.location.replace("/");
      }
    }
  }


  // Récupération du contenu HTML de la route
  const html = await fetch(actualRoute.pathHtml).then((data) => data.text());
  // Ajout du contenu HTML à l'élément avec l'ID "main-page"
  document.getElementById("main-page").innerHTML = html;

  // Ajout du contenu JavaScript
  if (actualRoute.pathJS != "") {
    // Création d'une balise script
    var scriptTag = document.createElement("script");
    scriptTag.setAttribute("type", "text/javascript");
    scriptTag.setAttribute("src", actualRoute.pathJS);

    // Ajout de la balise script au corps du document
    document.querySelector("body").appendChild(scriptTag);
  }

  // Changement du titre de la page
  document.title = actualRoute.title + " - " + websiteName;

  //afficher et marsquer les elements en fonction du role 
  showAndHideElementsForRoles();
};
*/

// Fonction pour charger le contenu de la page
const LoadContentPage = async () => {
    const path = window.location.pathname;
    // Récupération de l'URL actuelle
    const actualRoute = getRouteByUrl(path);
  
    //Vérifier les droits d'accès à la page
    const allRolesArray = actualRoute.authorize;
  
    if (allRolesArray.length > 0) {
      if (allRolesArray.includes("disconnected")) {
        if (isConnected()) {
          window.location.replace("/");
        }
      } else {
        const roleUser = getRole();
        if (!allRolesArray.includes(roleUser)) {
          window.location.replace("/");
        }
      }
    }
  
    // Récupération du contenu HTML de la route
    const html = await fetch(actualRoute.pathHtml).then((data) => data.text());
    // Ajout du contenu HTML à l'élément avec l'ID "main-page"
    document.getElementById("main-page").innerHTML = html;
  
    // Ajout du contenu JavaScript
    if (actualRoute.pathJS !== "") {
      // Création d'une balise script
      var scriptTag = document.createElement("script");
      scriptTag.setAttribute("type", "text/javascript");
      scriptTag.setAttribute("src", actualRoute.pathJS);
  
      // Ajout de la balise script au corps du document
      document.querySelector("body").appendChild(scriptTag);
    }
  
    // Changement du titre de la page
    document.title = actualRoute.title + " - " + websiteName;
  
    //afficher et masquer les éléments en fonction du rôle
    showAndHideElementsForRoles();
  };



/*
// Fonction pour gérer les événements de routage (clic sur les liens)
const routeEvent = (event) => {
  event = event || window.event;
  event.preventDefault();
  // Mise à jour de l'URL dans l'historique du navigateur
  window.history.pushState({}, "", event.target.href);
  // Chargement du contenu de la nouvelle page
  LoadContentPage();
};

// Gestion de l'événement de retour en arrière dans l'historique du navigateur
window.onpopstate = LoadContentPage;
// Assignation de la fonction routeEvent à la propriété route de la fenêtre
window.route = routeEvent;
// Chargement du contenu de la page au chargement initial
LoadContentPage(); */

// Fonction pour gérer les événements de routage (clic sur les liens)
const routeEvent = (url) => {
    // Mise à jour de l'URL dans l'historique du navigateur (simulation)
    // Vous pouvez utiliser une bibliothèque de routage comme 'express' pour gérer les routes dans Node.js
    console.log('URL mise à jour:', url);
  
    // Chargement du contenu de la nouvelle page (simulation)
    LoadContentPage();
  };
  
  // Fonction pour charger le contenu de la page
  
  // Exemple de routage lors d'un clic sur un lien
  const handleLinkClick = (url) => {
    // Gérer l'événement de routage
    routeEvent(url);
  };
  
  // Exemple de routage lors d'un retour en arrière dans l'historique du navigateur
  const handleBackNavigation = () => {
    // Gérer l'événement de retour en arrière
    routeEvent(window.location.href);
  };
  
  // Exemple de chargement initial de la page
  const handleInitialLoad = () => {
    // Chargement du contenu de la page au chargement initial
    LoadContentPage();
  };
  
  // Appeler la fonction de chargement initial de la page
  handleInitialLoad();

//router



const port = process.env.PORT || 3000;
app.listen(port, () => {
  console.log(`Serveur en écoute sur le port ${port}`);
});