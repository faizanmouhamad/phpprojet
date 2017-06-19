
<html>

<head>
  <title>Application Web</title>
  <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
.form-style-10{
    width:450px;
    padding:30px;
    margin:40px auto;
    background: #FFF;
    border-radius: 10px;
    -webkit-border-radius:10px;
    -moz-border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -moz-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
    -webkit-box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.13);
}
.form-style-10 .inner-wrap{
    padding: 30px;
    background: #F8F8F8;
    border-radius: 6px;
    margin-bottom: 15px;
}
.form-style-10 h1{
    background: #2A88AD;
    padding: 20px 30px 15px 30px;
    margin: -30px -30px 30px -30px;
    border-radius: 10px 10px 0 0;
    -webkit-border-radius: 10px 10px 0 0;
    -moz-border-radius: 10px 10px 0 0;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
}
.form-style-10 h1 > span{
    display: block;
    margin-top: 2px;
    font: 13px Arial, Helvetica, sans-serif;
}
.form-style-10 label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
.form-style-10 input[type="text"],
.form-style-10 input[type="date"],
.form-style-10 input[type="datetime"],
.form-style-10 input[type="email"],
.form-style-10 input[type="number"],
.form-style-10 input[type="search"],
.form-style-10 input[type="time"],
.form-style-10 input[type="url"],
.form-style-10 input[type="password"],
.form-style-10 textarea,
.form-style-10 select {
    display: block;
    box-sizing: border-box;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    width: 100%;
    padding: 8px;
    border-radius: 6px;
    -webkit-border-radius:6px;
    -moz-border-radius:6px;
    border: 2px solid #fff;
    box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -moz-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
    -webkit-box-shadow: inset 0px 1px 1px rgba(0, 0, 0, 0.33);
}

.form-style-10 .section{
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
.form-style-10 .section span {
    background: #2A88AD;
    padding: 5px 10px 5px 10px;
    position: absolute;
    border-radius: 50%;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    border: 4px solid #fff;
    font-size: 14px;
    margin-left: -45px;
    color: #fff;
    margin-top: -3px;
}
.form-style-10 input[type="button"],
.form-style-10 input[type="submit"]{
    background: #2A88AD;
    padding: 8px 20px 8px 20px;
    border-radius: 5px;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    color: #fff;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.12);
    font: normal 30px 'Bitter', serif;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.17);
    border: 1px solid #257C9E;
    font-size: 15px;
}
.form-style-10 input[type="button"]:hover,
.form-style-10 input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}
.form-style-10 .privacy-policy{
    float: right;
    width: 250px;
    font: 12px Arial, Helvetica, sans-serif;
    color: #4D4D4D;
    margin-top: 10px;
    text-align: right;
}
</style>
</head>

<body>
  <div class="form-style-10">
          <a href="<?php echo site_url('Liens/connexion'); ?>"><img id="homeback" src='http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/homa.png' style="width:40px;float: right;position: inherit;"/></a>

<h1 style="text-align:center">Formulaire d'inscription à l'application<span>Inscris-toi afin de profiter des divers fonctionnalités de notre application.</span></h1>
<!-- <form action="application/models/action.php" method="POST"> -->
    <form method="post">
    <div class="section"><span>1</span>Nom &amp; Prénom</div>
    <div class="inner-wrap">
        <label>Nom <input type="text" name="nom" required/></label>
        <label>Prénom <input type="text" name="prenom" required></input></label>
    </div>

    <div class="section"><span>2</span>Login &amp; Email</div>
    <div class="inner-wrap">
        <label>Login <input type="text" name="login" required/></label>
        <label>Email <input type="email" name="mail" required/></label>
    </div>

    <div class="section"><span>3</span>Mot de Passe</div>
        <div class="inner-wrap">
        <label>Mot de Passe <input type="password" name="mdp" required/></label>
        <label>Confirmez le mot de passe <input type="password" name="mdp1" required /></label>
    </div>
     <div class="section"><span>4</span>Avatar</div>
        <div class="inner-wrap">
               
           
          
          <table style="width:400px;">
            <tr>
<td> <input type="radio" name="photo" value="athle" id="image1" required/> <label for="image1" ><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/athle.png"  />
</label></td>
<td>  <input type="radio" name="photo" value="baseball" id="image1" required/> <label for="image1"><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/baseball.png"  />
</label></td>
              <td><input type="radio" name="photo" value="boxe" id="image1"required/> <label for="image1"><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/boxe.png"  />
</label></td>
              <td><input type="radio" name="photo" value="foot" id="image1"required/> <label for="image1"><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/foot.png"  />
</label></td>
</tr>
            <tr>
<td> <input type="radio" name="photo" value="hockey" id="image1"required/> <label for="image1"><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/hockey.png"  />
</label></td>
<td>  <input type="radio" name="photo" value="moto" id="image1"required /> <label for="image1"><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/moto.png"  />
</label></td>
              <td><input type="radio" name="photo" value="natation" id="image1"required/> <label for="image1"><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/natation.png"  />
</label></td>
              <td><input type="radio" name="photo" value="velo" id="image1"required/> <label for="image1"><img style="width:80px;"src="http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/avatar/velo.png"  />
</label></td>
</tr>
          </table>
    </div>
   <div class="button-section">
     <input type="submit" name="Inscription" value="S'inscrire"/>
    
    </div> 
</form>
</div>
  
</body>

</html>