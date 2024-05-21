import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "index.php", []),
    new Route("/services.php", "Services", "services.php", []),
    new Route("/habitats.php", "Habitats", "habitats.php", [], "js/habitats.js"),
    new Route("/galerie.php", "Habitats", "galerie.php", []),
    new Route("/contact.php", "Contact", "contact.php", []),
    new Route("/signin.php", "Connexion", "signin.php", ["disconnected"], "js/auth/signin.js"),
    new Route("/account.php", "Mon compte", "account.php", ["connected"]),


  ];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo d'Arcadia";

//