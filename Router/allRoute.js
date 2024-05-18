import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "src/pages/home.php", []),
    /*new Route("/services", "Services", "src/pages/services.php", []),
    new Route("/habitats", "Habitats", "src/pages/habitats.php", [], "js/habitats.js"),
    new Route("/galerie", "Habitats", "src/pages/galerie.php", []),
    new Route("/contact", "Contact", "src/pages/contact.php", []),
    new Route("/signin", "Connexion", "src/pages/auth/signin.php", ["disconnected"], "js/auth/signin.js"),
    new Route("/account", "Mon compte", "src/pages/auth/account.php", ["connected"]),*/
    new Route("/services", "Services", "src/pages/home.php", []),

  ];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo d'Arcadia";

//