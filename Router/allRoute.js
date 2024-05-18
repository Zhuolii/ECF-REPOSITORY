import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "src/pages/home.php", []),
    new Route("src/pages/services.php", "Services", "src/pages/services.php", []),
    new Route("src/pages/habitats.php", "Habitats", "src/pages/habitats.php", [], "js/habitats.js"),
    new Route("src/pages/galerie.php", "Habitats", "src/pages/galerie.php", []),
    new Route("src/pages/contact.php", "Contact", "src/pages/contact.php", []),
    new Route("src/pages/auth/signin.php", "Connexion", "src/pages/auth/signin.php", ["disconnected"], "js/auth/signin.js"),
    new Route("src/pages/auth/account.php", "Mon compte", "src/pages/auth/account.php", ["connected"]),
  ];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo d'Arcadia";

//