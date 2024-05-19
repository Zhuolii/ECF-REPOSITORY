import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "src/pages/home.php", []),
    new Route("/services", "Services", "services.php", []),
    new Route("/habitats", "Habitats", "habitats.php", [], "js/habitats.js"),
    new Route("/galerie", "Habitats", "galerie.php", []),
    new Route("/contact", "Contact", "contact.php", []),
    new Route("/signin", "Connexion", "auth/signin.php", ["disconnected"], "js/auth/signin.js"),
    new Route("/account", "Mon compte", "auth/account.php", ["connected"]),


  ];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo d'Arcadia";

//