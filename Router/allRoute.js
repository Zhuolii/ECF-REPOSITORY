import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "/pages/home.html"),
    new Route("/services", "Services", "/pages/services.html"),
    new Route("/habitats", "Habitats", "/pages/habitats.html"),
    new Route("/galerie", "Habitats", "/pages/galerie.html"),
    new Route("/contact", "Contact", "/pages/contact.html"),
    new Route("/signin", "Connexion", "/pages/auth/signin.html"),
    new Route("/account", "Mon compte", "/pages/auth/account.html"),
    ,

];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo d'Arcadia";