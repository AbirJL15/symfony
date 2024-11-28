Il s'agit d'une application web simple développée avec Symfony, permettant d'afficher une page d'accueil et une liste de produits électroniques. 

Fonctionnalités principales:
- Page d'accueil : Présente une introduction au site avec un message de bienvenue.
- Liste des produits : Affiche une liste de produits électroniques générée dynamiquement depuis un contrôleur.
- Détails d'un produit : Permet d'afficher les détails spécifiques d'un produit via une route dédiée.


 Architecture du projet:
Organisation des dossiers principaux :
- src/ : Contient le code PHP de l'application.
Controller/ : Les contrôleurs définissant la logique des routes.
templates/ : Fichiers TWIG pour les vues.
base.html.twig : Template de base pour l'application.
site/ : Templates spécifiques (page d'accueil, liste de produits, etc.).
partials/ : Sous-templates comme le pied de page.
public/ : Contient les fichiers accessibles publiquement (CSS, images, JS).
css/ : Fichier CSS pour le style du site.
config/ : Configuration du projet Symfony.
