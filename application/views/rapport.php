

<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title></title>
  <style> div.gallery {
    margin: 20px;
    border: 3px solid #ccc;
    float: left;
    width: 420px;
    margin-top:0;
}

div.gallery:hover {
    border: 3px solid #777;
    }

div.gallery img {
    width: 100%;
    height: auto;
}

div.desc {
    padding: 15px;
    text-align: center;
}</style>

</head>

<body style="background-color:lightgray;display:block;margin:auto;width:950px;font-family:'Trebuchet MS', Helvetica, sans-serif;">
          <a href="<?php echo site_url('Liens/connexion'); ?>"><img id="homeback" src='http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/homa.png' style="width:40px;float: right;position: inherit;margin-right: 115px;"/></a>

  <h1 style="text-align:center">
   Rapport de notre projet
  </h1>
  
  <p>Cette application a été réalisée dans le cadre d'un projet scolaire par Faizan Mouhamad et Valentin Desseux. 
  </p>
  <div style='height:330px;'>
  <div class="gallery">
  <a target="_blank" href="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/conn.png">
    <img src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/conn.png" alt="Trolltunga Norway" >
  </a>
  <div class="desc">Formulaire de connexion à l'application</div>
</div>

<div class="gallery">
  <a target="_blank" href="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/menu.png">
    <img src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/menu.png" alt="Forest" >
  </a>
  <div class="desc">Menu interne de l'application</div>
</div>
  </div>
  <p>
    Elle a pour objectif de gérer une équipe sportive, c'est-à-dire :
  </p>
  <ul>
    <li>des inscriptions,</li>
    <li>la composition des équipes,</li>
    <li>la désignation des entraîneurs,</li>
    <li>la mise en place d'événements.</li>
  </ul>
  <h3>
    I. Temps de réalisation de ce projet
  </h3>
    <img style="float:right;margin-top:-15px;width:230px;" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/sablier.png"/>

  <div style="width:680px">
    <p> Ce projet nous a pris pas mal de temps car il a forcé a approfondir nos connaissances entre terme de php et base de données avec la mise en place de formulaires, c'est à dire  récupérer les données rentrées et les exploiter tel que nous en avons besoin. <br>Ce projet a aussi été notre toute première utilisation d'un framework ici CodeIgniter ce qui nous a pris énormément de temps à comprendre et à être capable de l’utiliser dans le cadre de notre projet. <br>Afin de comprendre comme faire fonctionner notre site à l'aide d'un modèle MVC, nous avons passé beaucoup de temps à scruter la documentation de CodeIgniter et nous avons fini par acquérir les connaissances nécessaires à une bonne utilisation de ce framework. <br>La réalisation de ce projet nous a pris aux alentours de  2-3 semaines du fait de l'apprentissage des ressources nécessaires à celui-ci au cours des dernières semaines.
    </p>
  </div>
  <h3>
    II. Répartition des tâches du groupe
  </h3>
      <img style="float:left;width:222px;" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/team.png"/>
  <div>
    <p style="float:right;width:700px;">
      Valentin s'est occupé de tous ce qui concerne les bases de données ainsi que la création des formulaires (css compris) avec les requêtes permettant de modifier la base de données du projet.
<br>Faizan s'est quant à lui occupé de gérer la structure MVC de notre code ainsi que de permettre son fonctionnement à l'aide de la documentation du framework CodeIgniter et de nombreuses recherches annexes et aides entre camarades. Il s'est également concentré sur l'homogénéité de notre site et de sa facilité d'accès, d'utilisation.
<br>Nous nous sommes tous deux portés sur l'utilisation du serveur apache mis à notre disponibilité afin de réussir a avoir notre site accessible tout le temps, Faizan a été celui à réussir à mettre les fichiers sur notre serveur apache.
    </p>
  </div>
  <h3 style="margin-top:250px;">
    III. Particularités de notre application
  </h3>
 <ul>
    <li>créer un utilisateur,</li>
    <li>créer une équipe,</li>
    <li>rejoindre une équipe à l'aide du mot de passe d'inscription de cette dernière,</li>
    <li>désigner un entraîneur,</li>
     <li>créer des evènements (entraînements/compétitions),</li>
   <li>accéder au calendrier (ensemble des evènements),</li>
    <li>indiquer sa présence à un evènement,</li>
    <li>accéder à la liste de présence d'un evènement.</li>
  </ul>
  <h3>
    IV. Notions vues en cours et dévelopées durant le projet
  </h3>
  <table style="border: 3px solid gray;
    text-align: center;border-collapse: collapse;
    width: 90%;margin:auto'">
    <tr style="color:#696969;border: 1px solid gray;
    text-align: center;height:45px">
      <th style="width:400px; border: 1px solid gray;">Notions vues en cours</th>
    <th style="width:400px;">Notions dévelopées</th>
    </tr>
  <tr style="border: 1px solid gray;">
  <td style="border: 1px solid gray;">Php et Formulaires</td>
    <td>Utilisations de divers formulaires dont les valeurs sont récupérées via les méthodes GET et POST.</td>
  </tr>
    <tr style="border: 1px solid gray;">
  <td style="border: 1px solid gray;">Php et MySql</td>
   <td>Utilisation d’une base de données sur phpmyadmin, réalisation de requêtes avec les fonctions mysqli_connect et mysqli_query. </td>
  </tr >
    <tr style="border: 1px solid gray;">
  <td style="border: 1px solid gray;">CodeIgniter</td>
   <td>Utilisation d'un framework suivant le motif de conception php : CodeIgniter. Utilisation de la documentation et de la bibliothèque afin de faciliter le codage. </td>
  </tr>
     <tr style="border: 1px solid gray;">
  <td style="border: 1px solid gray;">Modèle MVC</td>
   <td>Application web conçue en séparant les fonctions suivant les modèles, vues et contrôleurs. Création d'urls via le maniement du routage.  </td>
  </tr>
    <tr style="border: 1px solid gray;">
  <td style="border: 1px solid gray;">Sessions</td>
   <td>Utilisation de sessions lors de la connexion et de la déconnexion.  </td>
  </tr>
  </table>
  <br>
</body>
</html>