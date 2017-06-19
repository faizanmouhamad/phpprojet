
<html >
<head>
  <meta charset="UTF-8">
  <title>Application Web</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<style>
  body {
  background: #e9e9e9;
  color: #666666;
  font-family: 'RobotoDraft', 'Roboto', sans-serif;
  font-size: 14px;
    
}

/* Pen Title */
.pen-title {
  padding: 50px 0;
  text-align: center;
  letter-spacing: 2px;
}
.pen-title h1 {
  margin: 0 0 20px;
  font-size: 48px;
  font-weight: 300;
}
.pen-title span {
  font-size: 12px;
}
.pen-title span .fa {
  color: #33b5e5;
}
.pen-title span a {
  color: #33b5e5;
  font-weight: 600;
  text-decoration: none;
}

/* Form Module */
.form-module {
  position: relative;
  background: #ffffff;
  max-width: 320px;
  width: 100%;
  border-top: 5px solid #33b5e5;
  box-shadow: 0 0 3px rgba(0, 0, 0, 0.1);
  margin: 0 auto;
}
.form-module .toggle {
  position: absolute;
  top: -0;
  right: -0;
  background: #33b5e5;
  width: 30px;
  height: 30px;
  margin: -5px 0 0;
  color: #ffffff;
  font-size: 12px;
  line-height: 30px;
  text-align: center;
}
.form-module .toggle .tooltip {
  position: absolute;
  top: 5px;
  right: -65px;
  display: block;
  background: rgba(0, 0, 0, 0.6);
  width: auto;
  padding: 5px;
  font-size: 10px;
  line-height: 1;
  text-transform: uppercase;
}
.form-module .toggle .tooltip:before {
  content: '';
  position: absolute;
  top: 5px;
  left: -5px;
  display: block;
  border-top: 5px solid transparent;
  border-bottom: 5px solid transparent;
  border-right: 5px solid rgba(0, 0, 0, 0.6);
}
.form-module .form {
  display: none;
  padding: 40px;
}
.form-module .form:nth-child(2) {
  display: block;
}
.form-module h2 {
  margin: 0 0 20px;
  color: #33b5e5;
  font-size: 18px;
  font-weight: 400;
  line-height: 1;
}
.form-module input {
  outline: none;
  display: block;
  width: 100%;
  border: 1px solid #d9d9d9;
  margin: 0 0 20px;
  padding: 10px 15px;
  box-sizing: border-box;
  font-weight: 400;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
.form-module input:focus {
  border: 1px solid #33b5e5;
  color: #333333;
}
.form-module button {
  cursor: pointer;
  background: #33b5e5;
  width: 100%;
  border: 0;
  padding: 10px 15px;
  color: #ffffff;
  -webkit-transition: 0.3s ease;
  transition: 0.3s ease;
}
.form-module button:hover {
  background: #178ab4;
}
.form-module .cta {
  background: #f2f2f2;
  width: 100%;
  padding: 15px 40px;
  box-sizing: border-box;
  color: #666666;
  font-size: 12px;
  text-align: center;
}
.form-module .cta a {
  color: #333333;
  text-decoration: none;
}
  footer {
  background-color:#e9e9e9;
  height:50px;
	margin: 0 auto;
	margin-top:100px;
  text-align:center;
  border-top: 1px solid #D0D0D0;  
}

footer p {
  color:#47495D;
  font-family:"Trebuchet MS", Helvetica, sans-serif;
  font-size:13px;
  margin-top:10px;
}
  </style>

  
</head>

<body>
  
<div class="pen-title">
  <h1>Application de gestion d'équipe</h1><span>Designed by <a> Faizan Mouhamad &amp; Valentin Desseux</a></span>
  </div>
<div class="module form-module">
  <div class="toggle">
  </div>
  <div class="form">
    <h2>Connectez-vous :</h2>
    <form method="post" action="<?php echo site_url('Identification/index'); ?>">
      <input name="logina" type="text" placeholder="Login" required/>
      <input name="mdpa" type="password" placeholder="Mot de Passe" required/>
      <input type="submit" name="Connexion" value="Se connecter"/>
    </form>
  </div>
  
  <div class="cta"><a>Pas encore inscrit ? <a href=<?php echo base_url()."Inscription/index/"?>>Cliquez ici</a></a></div>
</div>
<footer>
  <p class="footer">
    © 2017  — Application réalisée dans le cadre d'un projet web lors de la 1ère année de DUT Informatique. <a style="text-decoration:none;color:black" href=<?php echo base_url()."Liens/rapport/"?>>Cliquez ici</a> pour accéder à notre rapport !
  </p>

</footer>
</body>
</html>
