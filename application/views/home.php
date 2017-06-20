
<html>
  <head>
    <style>
    body {
display:block;
margin: auto;
padding: 0;
background: #DCDCDC;
width:1205px;
}
      .fra {
margin-left: 30px;
border: 2px solid transparent;
width: 180px;
height: 180px;
text-align: center;
padding-top: 15px;
border-radius: 18px;
}
.fra1 {
padding-top: 15px;
margin-right: 25px;
border: 2px solid transparent;
float: right;
width: 180px;
height: 180px;
text-align: center;
border-radius: 18px;
}
.fra2 {
width: 185px;
height: 185px;
text-align: center;
border: 2px solid transparent;
margin: auto;
display: block;
border-radius: 18px;
margin-bottom:20px;
}
      #fra0{
        margin:auto;
        display:block;
        width:80px;
      }
       #fraa0{
        margin:auto;
        display:block;
        width:80px;
         margin-top:19px;
      }
      .fra3{
        width: 185px;
height: 185px;
text-align: center;
border: 2px solid transparent;
border-radius: 18px;
margin-bottom:20px;
        margin-left:-500px;
        margin-top:-165px;
      }
      .fra4{
        width: 185px;
height: 185px;
text-align: center;
border: 2px solid transparent;
border-radius: 18px;
        margin-left:910px;
        margin-top:-170px;
      }
#fra,#fra1,#fra2,#fra3,#fra4 {
margin: auto;
display: block;
width: 150px;
}
      .fra5{
        width: 185px;
height: 185px;
text-align: center;
border: 2px solid transparent;
border-radius: 18px;
        margin-top:-170px;
      }
#fra,#fra1,#fra2,#fra3,#fra4 {
margin: auto;
display: block;
width: 150px;
}
#fra:hover,#fra1:hover,#fra2:hover,#fra3:hover,#fra4:hover, #fra0:hover, #fraa0:hover {
transform: scale(1.15);
}
.sip {
border: 1px solid transparent;
width: 1075px;
  margin:auto;
  display:block;
  margin-left:35px;
}
    </style>
  </head>
  <body>
     <a href="<?php echo site_url('Liens/deconnexion'); ?>"><img id="homeback" src='http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/logout.png' style="width:45px;float: right;margin-top: 23px;margin-right:65px;"/></a>
    <h1 style="text-align:center;border:2px solid transparent; height:75px;padding-top:22px;margin-top:20px">
Vous pouvez désormais utiliser les fonctionnalités de l'app !</h1>
    <div class="sip">
         <div class="fra1">
            <a href="<?php echo site_url('Liens/calendrier'); ?>"><img id="fra" alt="description"  src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/Calendar.png"/></a>
            <p id="k">
Accéder au calendrier            </p>
         </div>
         <div class="fra">
            <a href="<?php echo site_url('Liens/coach'); ?>"><img id="fra1" alt="description" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/DesignerCoach.png"/></a>
            <p id="k1">
Désigner un entraîneur
            </p>
         </div>
         <br/> 
         <div class="fra2">
            <a href="<?php echo site_url('Liens/team'); ?>"><img id="fra2" alt="description" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/CreerEquipe.png"/></a>
            <p id="k2">
               Créer une équipe
            </p>
         </div>
      <div class="fra5">
            <a href="<?php echo site_url('Liens/list_presence'); ?>"><img id="fraa0" alt="description" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/bluelist.png"/></a>
            <p id="k1">
Afficher la liste des présents            </p>
         </div>
       <div class="fra4">
            <a href="<?php echo site_url('Liens/presence'); ?>"><img id="fra0" alt="description" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/present.png"/></a>
            <p id="k1">
Indiquer sa présence
            </p>
         </div>
     
         <div class="fra1">
            <a href="<?php echo site_url('Liens/join'); ?>"><img id="fra3" alt="description" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/JoinGroup.png"/></a>
            <p id="k3">
               Rejoindre une équipe
            </p>
         </div>
         <div class="fra">
            <a href="<?php echo site_url('Liens/event'); ?>"><img id="fra4" alt="description" src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/CreerEvent.png"/></a>
            <p id="k4">
               Créer un évènement
            </p>
         </div>
      </div>
  </body>
</html>