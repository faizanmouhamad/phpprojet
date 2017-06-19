

<!DOCTYPE html>
<html>
 <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
#textarea{
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
#textarea .inner-wrap{
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
#textarea label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
#textarea input[type="text"],

#textarea input[type="password"],
#textarea textarea,
#textarea select {
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

#textarea .section {
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
#textarea .section span {
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
#textarea input[type="button"], 
#textarea input[type="submit"]{
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
#textarea input[type="button"]:hover, 
#textarea input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}

</style>
<body>
 
  <form action="<?php echo site_url('Equipe/index'); ?>" method="POST" id="textarea"> 
     <div class="form-style-10">
             <a href="<?php echo site_url('Liens/menu'); ?>"><img id="homeback" src='http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/homa.png' style="width:42px;float: right;position: inherit;margin-top: 22px;"/></a>
   <h1>Creation d'une Equipe 
       <span>Rappel pour creer une equipe vous devez avoir un compte</span></h1>
    </div>
   <br><br>    
    <div class="section"><span>1</span>Vos Identifiants</div><br><br>
<!--      Nom:<br>
  <input type="text" name="nom" required>
    <br>
    
 Prenom:<br>
  <input type="text" name="prenom" required>
  <br> -->
 <div class="inner-wrap">
     <label>Login:<br>
       <input type="text" name="login" placeholder="Login" required></label>
   
  <br>
    
  <label>Mot de Passe:<br>
    <input type="password" name="mdp" placeholder="Mot de passe" required></label>
    </div>
  <br><br>
    
    <div class="section"><span>2</span>Equipe a creer</div><br><br>
    <div class="inner-wrap">
    <label>Nom Equipe:<br>
      <input type="text" name="nomE" placeholder="Nom de l'équipe" required></label>
    <br>
     <label>Mot de Passe d'inscription:<br>
       <input type="password" name="mdpE" placeholder="Mot de passe de l'équipe" required></label>
  <br>
    <label>Sport:<br>
      <input type="text" name="sports" placeholder="Sport" required></label>
  <br>
    <label>Ville:<br>
      <input type="text" name="ville" placeholder="Ville" required></label>
  <br>
<!--     Description:<br>
  <input type="text" name="description" required>
  <br> -->
    <label>Description:<br>
    <textarea rows="4" cols="50" name="comment" form="textarea">
      Enter text here...</textarea><br></label>
<!--      Mixite:<br>
  <input type="text" name="mixite" required> -->
     <label>Mixite:<br>
    <input type="radio" name="mixite" value="H" checked> Male<br>
  <input type="radio" name="mixite" value="F"> Female<br>
       <input type="radio" name="mixite" value="M"> Mixt<br><br></label>
  <br><br>
    </div>
    
    
 <div class="button-section">   
  <input type="submit" value="Creer Equipe">
    </div>
</form>  
  
  <br><br>
  </body>
</html>
