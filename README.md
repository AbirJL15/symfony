Il s'agit d'une application web simple développée avec Symfony, permettant d'afficher une page d'accueil et une liste de produits électroniques. 

** Fonctionnalités principales: **
- Page d'accueil : Présente une introduction au site avec un message de bienvenue.
- Liste des produits : Affiche une liste de produits électroniques générée dynamiquement depuis un contrôleur.
- Détails d'un produit : Permet d'afficher les détails spécifiques d'un produit via une route dédiée.


 ** Architecture du projet: **
Organisation des dossiers principaux :
- src/ : Contient le code PHP de l'application.
       Controller/ : Le contrôleur définissant la logique des routes.
- templates/ : Fichiers TWIG pour les vues.
il contient:
    - base.html.twig : Template de base pour l'application.
     - site/ : folder contenant des templates spécifiques (page d'accueil, liste de produits).
      -partials/ : Sous-templates comme le pied de page.
       
- public/ : Contient les fichiers accessibles publiquement (CSS).
css/ : Fichier CSS pour le style du site. (style.css)
- config/ : Configuration du projet Symfony.


** Organisation des pages principales : **
- Page d'accueil (route /) :

Affiche un message de bienvenue.
Lien vers la liste des produits.
- Liste des produits (route /products) :

Affiche une liste de produits dynamiquement générée.
Message si aucun produit n'est disponible.
- Détails d'un produit (route /product/{id}) :

Affiche les informations détaillées pour un produit spécifique.
