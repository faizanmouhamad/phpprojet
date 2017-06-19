
<?php
header( "refresh:5; url=http://dwarves.iut-fbleau.fr/~mouhamad/sport/index.php/Liens/menu" );
?>


<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8"/>
    <title></title>

</head>

<body style="background-color:lightgray">
<script type="text/javascript">

 (function () {
  var timeLeft = 5,cinterval;

  var timeDec = function (){
  timeLeft--;
  document.getElementById('countdown').innerHTML = timeLeft;
  if(timeLeft === 0){
  clearInterval(cinterval);
    }
};

cinterval = setInterval(timeDec, 1000);
})();

</script>
 <p style="font-size:26px;text-align:center">Votre authentification est un succès.</p> <p style="font-size:26px;text-align:center">
  Vous allez être redirigé vers la page d'accueil dans <span id="countdown">5</span> secondes.</p>
<img style="display:block;margin:auto" src='http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/online.ico'/>

</body>
</html>