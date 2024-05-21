# Zoo d'Arcadia

Ceci est un site vitrine pour le zoo Arcadia.

Le projet vise à développer un site web/mobile pour le Zoo d'Arcadia. L'application offrira aux visiteurs des pages de présentation détaillées du zoo, leur permettant de découvrir les différents services et animaux du zoo. Un système de connexion sera mis en place pour les administrateurs, les employés et le vétérinaire, leur donnant accès à des fonctionnalités de gestion (CRUD) reliées à une base de données. Les visiteurs, quant à eux, pourront laisser des avis et des commentaires sur leur expérience.

## Table des matières
- [Installation](#installation)
- [Utilisation](#utilisation)
- [Contribution](#contribution)
- [Licence](#licence)

## Installation/ prérequis
Installer l'editeur Visual studio code sur https://code.visualstudio.com/
Ensuite, ajouter les extensions : 
- php live server dans le menu extensions (ctrl+shift+x)
- Github pull requests pour contrôler la version du code et gerer le projet
- html css support  et javascript code snippet pour ameliorer la lisibilité du code (optionnel)
- live Sass compiler pour gérer le contenu css

Sur l'appareil : 

-installer node.js https://nodejs.org/en
-installer node package manager pour pouvoir ensuite rajouter les framework bootstrap et composer avec 
les commandes "npm install bootstrap" et "npm install composer-cli" en ouvrant le terminal de l'appareil et en selectionnant le dossier actuel avec la commande( cd "nom_du_chemin_du_dossier_actuel")

-si le dossier ECF_REPOSITORY a été importé en totalité, nodejs bootstrap et composer devrait deja etre présent dans le dossier

## Utilisation
Les principales foncionalités du site pour le moment : 

Ouvrir la page index.php avec VSCODE . Apres avoir rajouté l'extension live server , faire click droit dans un espace libre à coté du code, clicker sur "PHP SERVER : Serve Project" une page devrait s'ouvrir sur un navigateur

Une fois à la page d'acceuil, sur le haut de la page vous trouverez la barre de navigation avec les differentes pages :
-acceuil
-services
-habitats
-galerie
-contact
-connexion / deconnexion

## Connexion

Compte administrateur : 
 Email : jose@admin.arcadia
 Mot de Passe : cC8Jd2b4

Pour l'instant il n'y a pas encore de base de donnée de créée vous trouverez les id de l'admin sur /js/auth/signin.js ligne 15