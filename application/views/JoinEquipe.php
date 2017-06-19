
   <!DOCTYPE html>
<html>
 <link href='http://fonts.googleapis.com/css?family=Bitter' rel='stylesheet' type='text/css'>
<style type="text/css">
#joigning{
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
#joigning .inner-wrap{
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
#joigning label{
    display: block;
    font: 13px Arial, Helvetica, sans-serif;
    color: #888;
    margin-bottom: 15px;
}
#joigning input[type="text"],

#joigning input[type="password"],
#joigning textarea,
#joigning select {
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

#joigning .section {
    font: normal 20px 'Bitter', serif;
    color: #2A88AD;
    margin-bottom: 5px;
}
#joigning .section span {
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
#joigning input[type="button"], 
#joigning input[type="submit"]{
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
#joigning input[type="button"]:hover, 
#joigning input[type="submit"]:hover{
    background: #2A6881;
    -moz-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    -webkit-box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
    box-shadow: inset 0px 2px 2px 0px rgba(255, 255, 255, 0.28);
}

</style>
<body>
   
  
   <form action="<?php echo site_url('Rejoindre/index'); ?>" method="POST" id="joigning"> 
     <div class="form-style-10">
             <a href="<?php echo site_url('Liens/menu'); ?>"><img id="homeback" src='http://dwarves.iut-fbleau.fr/~mouhamad/sport/assets/homa.png' style="width:42px;float: right;position: inherit;margin-top: 22px;"/></a>
   <h1>Rejoindre une equipe 
       <span>Rappel pour rejoindre une equipe vous devez avoir un compte et le bon mot de passe d'inscription</span></h1>
    </div>
   <br>  
    <div class="section"><span>1</span>Vos Identifiants</div><br><br>
<!--      Nom:<br>
  <input type="text" name="nom" required>
    <br>
    
 Prenom:<br>
  <input type="text" name="prenom" required>
  <br> -->
 <div class="inner-wrap">
     <label>Login:<br>
       <input type="text" name="login" required></label>
  <br>
    
  <label>Mot de Passe:<br>
    <input type="password" name="mdp" required></label>
  <br>
     </div>
     
      <div class="section"><span>2</span>Equipe a rejoindre</div><br><br>
    <div class="inner-wrap">
     <label>Nom Equipe:<br><select name="nomE">
         <?php
         $conn=mysqli_connect("dwarves.iut-fbleau.fr","mouhamad","mouhamad","mouhamad");
         $query=mysqli_query($conn,"SELECT nomE from Equipe");
         foreach($query as $res){
                   echo "<option value=\"".$res['nomE']."\">".$res['nomE']."</option>";        
         }
         ?>
       </select>
    <br>
     <label>Mot de Passe d'inscription:<br>
       <input type="password" name="mdpE" required></label>
  <br>
     </div>
     <input type="submit" value="Joindre Equipe">
     
     
     </form> 
  </body>
</html>