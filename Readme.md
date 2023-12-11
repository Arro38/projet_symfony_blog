# LadyLaFé Blog

Ce projet est un blog développé avec Symfony 7. Il permet aux utilisateurs de publier des articles et de les commenter.

## Installation

1. Clonez ce dépôt sur votre machine locale.
2. Assurez-vous d'avoir PHP et Composer installés.
3. Exécutez la commande `composer install` pour installer les dépendances.
4. Configurez votre base de données dans le fichier `.env`.
5. Exécutez les migrations avec la commande `php bin/console doctrine:migrations:migrate`.
6. Lancez le serveur de développement avec la commande `symfony serve`.

## Fonctionnalités

- Affichage de la liste des articles triées par leur date de mis à jour (du plus récent au plus ancien).
- Création, édition et suppression d'articles.
- Système de commentaires pour chaque article.
- Gestion des droits en fonction du propriétaire de l'article/commentaire.

## Contribuer

Les contributions sont les bienvenues! Si vous souhaitez contribuer à ce projet, veuillez suivre les étapes suivantes :

1. Fork ce dépôt.
2. Créez une branche pour votre fonctionnalité (`git checkout -b nouvelle-fonctionnalite`).
3. Faites vos modifications et commit (`git commit -m "Ajout d'une nouvelle fonctionnalité"`).
4. Push vers la branche (`git push origin nouvelle-fonctionnalite`).
5. Ouvrez une pull request.

## Licence

Ce projet est sous licence MIT. Veuillez consulter le fichier [LICENSE](./LICENSE) pour plus d'informations.

## Contact

Si vous avez des questions ou des suggestions, n'hésitez pas à nous contacter à contact@formaterz.fr.
