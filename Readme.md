# README - Projet Blog Symfony 7 avec Bootstrap 5

## Introduction
Ce projet est un blog développé avec Symfony 7, intégrant Bootstrap 5 pour le design. Il permet aux utilisateurs de lire des articles et des commentaires de manière anonyme. Les utilisateurs enregistrés peuvent créer, éditer et supprimer leurs propres commentaires et articles.

## Fonctionnalités
- **Lecture anonyme** : Les visiteurs peuvent lire tous les articles et commentaires sans se connecter.
- **Gestion des articles** : Les utilisateurs peuvent créer, éditer et supprimer leurs articles.
- **Gestion des commentaires** : Les utilisateurs peuvent ajouter, éditer et supprimer leurs commentaires sur les articles.

## Installation
1. Assurez-vous d'avoir PHP 8.2 et Composer installés.
2. Clonez le dépôt du projet.
3. Exécutez `composer install` pour installer les dépendances Symfony.
4. Configurez votre base de données dans `.env`.
5. Exécutez `php bin/console doctrine:migrations:migrate` pour créer les tables nécessaires.

## Démarrage du projet
- Utilisez `symfony server:start` pour démarrer le serveur de développement.
- Accédez à `http://localhost:8000` pour visualiser l'application.

## Structure de la page d'accueil
- **Liste des articles** : Affiche les articles avec les commentaires correspondants.
- **Fonctionnalité d'édition de commentaire** : Permet aux utilisateurs de modifier leurs commentaires directement sur la page.

## Technologies utilisées
- **Symfony 7** : Pour le backend et la logique métier.
- **Bootstrap 5** : Pour le design responsive et moderne.
- **Twig** : Pour le templating.

## Contribution
Les contributions sont encouragées. Veuillez suivre les normes de codage de Symfony et soumettre des pull requests pour toute proposition de modification ou d'amélioration.

## Licence
Ce projet est la propriété exclusive de son auteur et ne peut être réutilisé, copié, modifié ou distribué sans autorisation préalable. Tous les droits sont réservés.

## Contact
Pour toute question ou demande d'assistance, veuillez contacter le développeur du projet.
