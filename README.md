# POOstsBlog

Application réalisée dans le cadre de ma certification pour l'obtention du titre de développeur logiciels avec l'AFPA. 

Ce projet reprend mes acquis de :<br> 
Ma formation réalisé en 2015 avec l'AFPA de Caen Ifs.<br>
Mon apprentissage en Autodidacte depuis cette formation.<br>
Mon expérience de 2 ans sur le poste de développeur TMA (renommé Professionnal Service) avec la société Determine. 

Elle met en place un systéme de post d'articles ayant pour thème la Bande dessinée et ses dérivés (cette idée est
reprise du thème proposé au cours de la formation dont je n'avais pu fournir un travail convaincant).<br>

<p>Elle est construite sur une architecture se voulant MVC Modèle-Vue-Contrôleur avec la mise en place d'un cadre de travail 
réutilisable.<br>
Modèle (spécifique) : [dossiers app/Entity & app/Table] => appartient à l'application.<br>
Le Modèle est scindé en 2 parties : 
- app/Entity : gère nos Objets.
- app/Table : gère le CRUD.
Vue (spécifique): dossier app/Views => appartient à l'application.
Les Controlleurs (Global & Spécifique) : 
- Le controlleur général (du 'framework') : dossier core/Controller
- Le controlleur spécifique de l'application : dossier app/Controller
On trouve donc une partie 'core' réutilisable pour tout type de projet et le reste de l'application qui est "particulier" 
à ce projet.
<p>

Intégration coté client : 
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






