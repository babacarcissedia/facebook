<!DOCTYPE html>
<html>
<head>
	<title>BCD | facebook connect</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/app.css">
</head>
<body>
	<div class="top_bar">
		<div class="left">
			<span class="brand">facebook</span>
		</div>
		<div class="right">
			<div class="form_inline">
				<form action='login.php' method="POST">
					<div class="fields">
						<label class="field_label">Adresse e-mail ou mobile</label>
						<input class="field_input" type="text" name="login"></input>
					</div>
					<div class="fields">
						<label class="field_label">Mot de passe</label>
						<input class="field_input" type="password" name="password"></input>
					</div>
					<button class="btn_submit" type="submit">Connexion</button>
				</form>
			</div>
			<a href="forgot.php" class="forgot">Informations de compte oubliées ?</a>
		</div>
	</div>

	<div class="register">
		<div class="thanks">
			<img src="img/thanks.png">
			<h2>Merci d'être passé !</h2>
			<h3>Nous espérons vous revoir <br>bientôt. </h3>
		</div>
		<div class="register_frame">
			<div class="register_form">
				<h1>Inscription</h1>
				<h3>C'est gratuit (et ça le restera toujours)</h3>
				<form action="register.php" method="POST">
					<div class="names">
						<input class="register_input" type="text" name="first_name" placeholder="Prénom"></input>
						<span class="sep"></span>
						<input class="register_input" type="text" name="last_name" placeholder="Nom de famille"></input>
					</div>
					<input class="register_input" type="text" name="mail" placeholder="Numéro de mobile ou e-mail"></input>
					<input class="register_input" type="text" name="mail_confirm" placeholder="Confirmer numéro de mobile ou e-mail"></input>
					<input class="register_input" type="text" name="password" placeholder="Nouveau mot de passe"></input>
					<label class="register_label">Date de naissance</label>
					<select class="register_select" name="day">
						<option selected>Jour</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30">30</option>
						<option value="31">31</option>
					</select>
					<select class="register_select" name="month">
						<option>Mois</option>
						<option value="1">Jan</option>
						<option value="2">Feb</option>
						<option value="3">Mar</option>
						<option value="4">Avr</option>
						<option value="5">Mai</option>
						<option value="6">Juin</option>
						<option value="7">Juil</option>
						<option value="8">Août</option>
						<option value="9">Sep</option>
						<option value="10">Oct</option>
						<option value="11">Nov</option>
						<option value="12">Déc</option>
					</select>
					<select class="register_select" name="year">
						<option>Année</option>
						<?php for($i=2016; $i>= 1905; $i--): ?>
						<option value="<?= $i ?>"><?= $i ?></option>
						<?php endfor; ?>
					</select>
					<a href="why_birth.php" class="why_birth">Pourquoi indiquer ma date de naissance ?</a>
					<div class="genre">
						<label class="register_label">
							<input type="radio" name="sexe" value="F">
							Femme
						</label>
						<label class="register_label">
							<input type="radio" name="sexe" value="M">
							Homme
						</label>
					</div>
					<div class="eula">
						En cliquant sur Inscription, vous acceptez nos <a href="#">Conditions</a> et indiquez que vous avez lu notre <a href="#">Politique d’utilisation des données</a>, y compris notre <a href="#">Utilisation des cookies</a>.
					</div>
					<button type="submit">Inscription</button>
					<a href="#"><span style="font-size: 13px">Créer une Page</span></a> pour une célébrité, un groupe ou une entreprise.
				</form>
			</div>
		</div>
	</div>

	<div class="footer">
	    <span class="muted">Français (France)</span> <a href="#">English (US)</a>  <a href="#">Italiano</a> <a href="#">Español (España)</a> <a href="#">العربية</a> <a href="#">Português (Portugal)</a> <a href="#">Deutsch</a> <a href="#">हिन्दी</a> <a href="#">中文(简体)</a> <a href="#">日本語</a> <a href="#" class="more">…</a>
	    <hr>
	    <div class="ft-container">
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Inscription</a></div>
	    		<div class="ft-label"><a href="#">Jeu</a></div>
	    		<div class="ft-label"><a href="#">Conditions d'utisations</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Connexion</a></div>
	    		<div class="ft-label"><a href="#">Célébrité</a></div>
	    		<div class="ft-label"><a href="#">Aide</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Messenger</a></div>
	    		<div class="ft-label"><a href="#">Groupes</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Facebook Lite</a></div>
	    		<div class="ft-label"><a href="#">A propos</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Mobile</a></div>
	    		<div class="ft-label"><a href="#">Créer une publicité</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Retrouver des amis</a></div>
	    		<div class="ft-label"><a href="#">Créer une page</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Badges</a></div>
	    		<div class="ft-label"><a href="#">Développeurs</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Personnes</a></div>
	    		<div class="ft-label"><a href="#">Emplois</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Pages</a></div>
	    		<div class="ft-label"><a href="#">Confidentialité</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Lieux</a></div>
	    		<div class="ft-label"><a href="#">Cookies</a></div>
	    	</div>
	    	<div class="ft-1">
	    		<div class="ft-label"><a href="#">Jeux</a></div>
	    		<div class="ft-label"><a href="#">Choisir sa pub</a></div>
	    	</div>
	    </div>
	    <div class="copy muted">Facebook © 2016</div>
	</div>

</body>
</html>