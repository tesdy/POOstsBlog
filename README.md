# POOstsBlog

<em>Application réalisée dans le cadre de ma certification pour l'obtention du titre de développeur logiciels avec l'AFPA.</em> 

Ce projet reprend mes acquis de :<br> 
- Ma formation réalisé en 2015 avec l'AFPA de Caen Ifs.<br>
- Mon apprentissage en Autodidacte depuis cette formation.<br>
- Mon expérience de 2 ans sur le poste de développeur TMA (renommé Professionnal Service) avec la société Determine. 
<hr>
Le projet a pour but de mettre en place un <strong><em>système de post d'articles</em></strong> ayant pour thème la Bande dessinée et ses dérivés (cette idée est reprise du thème proposé au cours de la formation dont je n'avais pu fournir un travail convaincant).<br>

<h2>Architecture du projet</h2>

Il est construit avec le pattern <strong>MVC</strong> (Modèle-Vue-Contrôleur) avec la construction d'un cadre de travail réutilisable.<br>

<h3>Modèle</h3>
<p>Partie qui contient les données ainsi que de la logique en rapport avec les données.</p>
Il scindé en 2 parties : 
<ul>
  <li><em>app/Entity</em> : gère nos Objets.
  <li><em>app/Table</em> : gère le CRUD.
</ul>
<h3>Vue</h3>
<p>Partie qui contient les éléments visuels, ainsi que la logique nécessaire afin d'afficher les données provenant du modèle.</p>
<ul>
  <li><em>app/Views</em> => Spécifique à chaque application.</li>
</ul>
On trouvera malgré tout dans le core des méthodes de construction de formulaires, réutilisables pour de futures applications. (fichiers Form.php & BootstrapForm.php dans core/HTML/) 

<h3>Controlleur</h3> 
<p>Partie qui gère la dynamique de l’application. Fait le lien entre l’utilisateur et le reste de l’application.<br>
<em>Le chef d'orchestre</em></p>
Dans ce projet on trouvera 2 controlleurs : 
<ul>
  <li><em>Le controlleur général</em> du 'framework' : dossier core/Controller
  <li><em>Le controlleur spécifique</em> de l'application : dossier app/Controller
</ul>
<em>On trouve donc une partie 'core' réutilisable pour tout type de projet.</em>


<h3>Intégration coté client</h3>
<strong>Langages</strong> : HTML, CSS et Javascript (JQuery).<br>
Le site se voulant Responsive design : 
- Solution trouvée avec le <strong>Framework Bootstrap de Twitter</strong> (dernière version : 4.1) 
Ce choix permet l'implémentation de : 
<ul>
  <li>Dropdowns 
  <li>Caroussel 
  <li>Parallax 
</ul>
avec Jquery 

<h3>Développement</h3>
Langage coté serveur : 
<ul>
  <li><strong>PHP</strong> sur sa version 7 a naturellement été choisi comme langage de programmation pour produire les pages        Web dynamiques.</li>
  <li><strong>Apache2</strong> comme serveur web / HTTP. Le paradigme de programmation choisi est naturellement celui orienté        objet.</li>
  <li><strong>Mysql</strong> est utilisé dans ce projet, mais le 'core' de cette application est construit afin de pouvoir          etre utilisé avec d'autres SGBD (core/Table).</li>
  <li>SGBD (Système de Gestion de Base de Données).</li>
</ul>

<h3>Outils complémentaires</h3>
<p>Pour la réalisation de ce projet et pour sa présentation, différents outils ont été utilisés.
<ul>
  <li>Cahier des charges réalisé avec Word.<br>
  <li>Présentation visuelle avec PowerPoint</li>
  <li>Cacoo by nulab (en ligne) pour réaliser la maquette du site.<br>
  <li>Développement réalisé sur le système Linux Ubuntu 18.04.<br>
  <li>GitHub comme service de gestion de versions (https://github.com/tesdy/POOstsBlog.git).<br> 
  <li>PhpStorm 2018.2.4 comme editeur de code.</li>
  <li>PhpMyadmin et l'outil Database de l'IDE PHPStorm pour l'affichage de la BDD.</li>
  <li>Dia 0.97 comme éditeur de diagrammes structurels (representation graphique du système via des diagrammes UML).</li>
  <li>Pour les tests : Google Chrome et Firefox.</li> 
  <em>L'application devrait être mise en ligne le jour de la soutenance (solution gratuite).</em>
</ul>






