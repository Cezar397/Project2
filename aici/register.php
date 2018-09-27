<!DOCTYPE HTML>
<html>
	<head>
		<link rel="stylesheet" href="styles.css">
	</head>

	<body>
		<nav>
            <ul id="bara1">
                <li id="buton"> <a href="index.php"> Acasa </a> </li>
                <li id="buton"> <a href="produse.php"> Produse </a> </li>
                <li id="buton"> <a href="despre.php"> Despre </a> </li>
                <li id="buton"> <a href="contact.php"> Contact </a> </li>
                <li id="buton"> <div>
                        <input type="text" name="search" placeholder="Cauta" style="width: 500px; height: 25px; padding: 1px 10px; margin: 9px; border-radius: 0.5vw;">
                    </div>
                <li id="buton" style="float: right; padding-right: 20px;"> <a href="register.php" style="background-color: #001a33"> Register </a> </li>
                <li id="buton" style="float: right;"> <a href="login.php"> Login </a> </li>
                <li id="buton" style="float: right;"> <a href="profil.php"> Profil </a> </li>
            </ul>
        </nav>



		
			<form action="includes/register.php" method="POST">
				<div class="register_container">
				
					<label for="name"> <b> Nume: </b> </label>
					<input id="register_input" type="text" name="user_name" placeholder="Introduceti numele" required>

					<label for="email"> <b> Email: </b> </label>
					<input id="register_input" type="email" name="user_email" placeholder="Introduceti email-ul" required>

					<label for="password"> <b> Parola: </b> </label>
					<input id="register_input" type="password" name="user_password" placeholder="Introduceti parola" required>

					<p>Apasand "Inscrie-te" accepti <a href=" ">Conditiile de utilizare</a> </p>
					<button type="submit" name="submit"> Accept </button>
				</div>
			</form>
	</body>
</html>