import Route from "./route.js";

//Définir ici vos routes
export const allRoutes = [
    new Route("/", "Accueil", "pages/home.php", []),
    new Route("/services", "Services", "pages/services.php", []),
    new Route("/habitats", "Habitats", "pages/habitats.php", [], "js/habitats.js"),
    new Route("/galerie", "Habitats", "pages/galerie.php", []),
    new Route("/contact", "Contact", "pages/contact.php", []),
    new Route("/signin", "Connexion", "pages/auth/signin.php", ["disconnected"], "js/auth/signin.js"),
    new Route("/account", "Mon compte", "pages/auth/account.php", ["connected"]),
  ];

//Le titre s'affiche comme ceci : Route.titre - websitename
export const websiteName = "Zoo d'Arcadia";

//