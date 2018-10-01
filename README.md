# POOstsBlog

Application réalisée dans le cadre de ma certification pour l'obtention du titre de développeur logiciels avec l'AFPA. 

Ce projet reprend mes acquis de :<br> 
- Ma formation réalisé en 2015 avec l'AFPA de Caen Ifs.<br>
- Mon apprentissage en Autodidacte depuis cette formation.<br>
- Mon expérience de 2 ans sur le poste de développeur TMA (renommé Professionnal Service) avec la société Determine. 
<hr>
Elle met en place un <strong><em>système de post d'articles</em></strong> ayant pour thème la Bande dessinée et ses dérivés (cette idée est
reprise du thème proposé au cours de la formation dont je n'avais pu fournir un travail convaincant).<br>

Elle est construite sur une architecture se voulant <strong>MVC</strong> Modèle-Vue-Contrôleur avec la mise en place d'un cadre de travail réutilisable.<br>
<strong>Le Modèle</strong> (spécifique) : [dossiers app/Entity & app/Table] => appartient à l'application.

Le Modèle est scindé en 2 parties : 
- <em>app/Entity</em> : gère nos Objets.
- <em>app/Table</em> : gère le CRUD.

<strong>La Vue</strong> (spécifique): <br>
- <em>app/Views</em> => appartient à l'application.

<strong>Les Controlleurs</strong> (Global & Spécifique) : 
- <em>Le controlleur général</em> (du 'framework') : dossier core/Controller
- <em>Le controlleur spécifique</em> de l'application : dossier app/Controller

<em>On trouve donc une partie 'core' réutilisable pour tout type de projet et le reste de l'application qui est "particulier" 
à ce projet.</em>

<u>Intégration coté client :</u>
Langages : HTML, Css et Javascript
Le site se voulant Responsive design : 
Solution trouvée avec le Framework Bootstrap de Twitter (dernière version : 4.1) 
Ce choix permet l'implémentation de : 
- Dropdowns 
- Caroussel 
- Parallax 
avec Jquery 

Développement : 
Langage coté serveur : 
- PHP sur sa version 7 a naturellement été choisi comme langage de programmation pour produire les pages Web dynamiques.
Apache2 comme serveur web / HTTP. Le paradigme de programmation choisi est naturellement celui orienté objet.

- Mysql est utilisé dans ce projet, mais le 'core' de cette application est construit afin de pouvoir etre utilisé avec d'autres 

- SGBD (Système de Gestion de Base de Données).

Outils complémentaires : 
Cahier des charges réalisé avec Word.
Cacoo by nulab (en ligne) pour réaliser la maquette du site.
Développement réalisé sur le système Linux Ubuntu 18.04.
GitHub comme service de gestion de versions (https://github.com/tesdy/POOstsBlog.git). 
PhpStorm 2018.2.4 comme editeur de code.
PhpMyadmin et l'outil Database de l'IDE PHPStorm pour l'affichage de la BDD.
Dia 0.97 comme éditeur de diagrammes structurels (representation graphique du système via des diagrammes UML).
Pour les tests : Google Chrome et Firefox 
L'application devrait être mise en ligne le jour de la soutenance (solution gratuite)






