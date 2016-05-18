
Red Line Project
================
http://hubseries.ddns.net

A Symfony project started on April 1(:-), 2016.
Developpeurs web : Manu et Alexandra.

### [Cahier des charges](./cahier_des_charges.pdf)


### [Manuel d'utilisation](./doc-utilisateur.md)


## Installation et testes:

**Nécessite Symfony2 et Composer.**

`$ Git clone http://github.com/celkae/fil_rouge.git`

`$ cd fil_rouge`

`$ composer Install`

`$ app/console server:run`

Un test unitaire est disponible dans *src/FilRougeBundle/Util/Test.php*.
Il consiste à Tester des valeurs negatives entrées sur les methodes de n'importe quelle entité.

`$ php bin/phpunit tests/FilRougeBundle/Util/Test.php`

Des **DataFixtures** peuvent être installer facilement.

`$ php app/console doctrine:fixtures:load`

### Mise en production

Pour mettre votre projet Symfony en production, pensez à donner les bons droits utilisateur aux dossier cache et logs

`$ sudo chmod -R 777 app/cache/`

`$ sudo chmod -R 777 app/logs/`

`$ sudo chmod -R 775 ../fil_rouge`

`$ sudo chown -R www-data:www-data ../fil_rouge`

Puis lancer les commandes suivantes:

`$ php app/console cache:clear`

`$ php app/console cache:clear --env=prod --no-debug`

`$ php app/console assets:install web`

`$ php app/console assetic:dump --env=prod --no-debug`

Et enfin paramétrer votre serveur web.

## Fonctionnalités mises en place

* Proposer des séries (soumis à modération)
* Modifier une série (soumis à modération)
* Voir la liste des séries
* Voir le détail d’une série avec ses épisodes
* Voir le détail d’un épisode
* Critiquer une série (note plus commentaire)
* Noter une critique (j’aime, j’aime pas)
* Communiquer avec les autres utilisateurs grâce à ​ un ​ outil adapté (système de message personne)
* Suivre des séries
* Classement des séries, par ordre de popularité.  
* Voir leur "Wall"
* Indiquer s’il a vu l’épisode d’une série
* S’inscrire sur le site
* Effectuer une recherche relative aux séries, épisodes et acteurs via un formulaire de recherche  
* Système de Moderation
* Vote unique
* Paginator
* Tradiction
* ...

## To do:

* Bonus:
  * Voir des recommandations de séries en fonction des goûts de l’utilisateur.
  * Partager des contenus (séries et épisodes) sur les autres réseaux sociaux (type Facebook, Twitter…)
  * Les utilisateurs peuvent s’enregistrer grâce à leur compte Facebook / Google / Twitter
  * Utiliser l’API ​ thetvdb ​ afin d’alimenter la base de données (dans la limite des contraintes d’utilisation).
  * Être récompensé en tant que fan actif.
  * Recevoir des notifications sur les séries qu’ils suivent (avant une diffusion)
  * Voir un planning de diffusion des séries
  * page news
