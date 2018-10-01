# POOstsBlog

<em>Application réalisée dans le cadre de ma certification pour l'obtention du titre de développeur logiciels avec l'AFPA.</em> 

Ce projet reprend mes acquis de :<br> 
- Ma formation réalisé en 2015 avec l'AFPA de Caen Ifs.<br>
- Mon apprentissage en Autodidacte depuis cette formation.<br>
- Mon expérience de 2 ans sur le poste de développeur TMA (renommé Professionnal Service) avec la société Determine. 
<hr>
Le projet a pour but de mettre en place un <strong><em>système de post d'articles</em></strong> ayant pour thème la Bande dessinée et ses dérivés (cette idée est reprise du thème proposé au cours de la formation dont je n'avais pu fournir un travail convaincant).<br>

<h2>Architecture du projet</h2>

Il est construit avec le pattern <strong>MVC</strong> Modèle-Vue-Contrôleur avec la mise en place d'un cadre de travail réutilisable.<br>

<h3>Le Modèle</h3>
Il scindé en 2 parties : 
- <em>app/Entity</em> : gère nos Objets.
- <em>app/Table</em> : gère le CRUD.

<h3>La Vue</h3>
- <em>app/Views</em> => appartient à l'application.

<h3>Les Controlleurs</h3> 
- <em>Le controlleur général</em> du 'framework' : dossier core/Controller
- <em>Le controlleur spécifique</em> de l'application : dossier app/Controller

<em>On trouve donc une partie 'core' réutilisable pour tout type de projet et le reste de l'application qui est "particulier" 
à ce projet.</em>

Intégration coté client :<br>
<strong>Langages</strong> : HTML, Css et Javascript.<br>
Le site se voulant Responsive design : 
Solution trouvée avec le <strong>Framework Bootstrap de Twitter</strong> (dernière version : 4.1) 
Ce choix permet l'implémentation de : 
- Dropdowns 
- Caroussel 
- Parallax 
avec Jquery 

Développement : 
Langage coté serveur : 
<ul>
<li><strong>PHP</strong> sur sa version 7 a naturellement été choisi comme langage de programmation pour produire les pages Web dynamiques.</li>
<li><strong>Apache2</strong> comme serveur web / HTTP. Le paradigme de programmation choisi est naturellement celui orienté objet.</li>
<li><strong>Mysql</strong> est utilisé dans ce projet, mais le 'core' de cette application est construit afin de pouvoir etre utilisé avec d'autres (core/Table).</li>
<li>SGBD (Système de Gestion de Base de Données).</li>
</ul>

Outils complémentaires :
<ul>
<li>Cahier des charges réalisé avec Word.<br>
<li>Cacoo by nulab (en ligne) pour réaliser la maquette du site.<br>
<li>Développement réalisé sur le système Linux Ubuntu 18.04.<br>
<li>GitHub comme service de gestion de versions (https://github.com/tesdy/POOstsBlog.git).<br> 
<li>PhpStorm 2018.2.4 comme editeur de code.</li>
<li>PhpMyadmin et l'outil Database de l'IDE PHPStorm pour l'affichage de la BDD.</li>
<li>Dia 0.97 comme éditeur de diagrammes structurels (representation graphique du système via des diagrammes UML).</li>
<li>Pour les tests : Google Chrome et Firefox.</li> 
L'application devrait être mise en ligne le jour de la soutenance (solution gratuite).
</ul>






