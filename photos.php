<!DOCTYPE html>
<html>

	<head>
		<title>Bienvenue à Chatroom - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css/photos.css">
	</head>

<body>
<?php include ('session.php');?>

	<div id="header">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Biobook"><b>Chatroom</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="timeline.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php" title="Home"><label>Home</label></a></li>
				<li><a href="profile.php" title="Profile"><label>Profile</label></a></li>
				<li><a href="photos.php" title="Settings"><label class="active">Photos</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
			</ul>
		</div>
	</div>

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
				</div>
				
				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		
<?php
	include("includes/database.php");
			$query=mySQLi_query($con,"SELECT * from user where user_id='$id' order by user_id DESC");
			while($row=mySQLi_fetch_array($query)){
				$id = $row['user_id'];
?>

		<div id="left-nav1">

			<h2>Personal Info</h2>
			<table>
				<tr>
					<td><label>Username</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['number']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
				<tr>
					<td><label>Image</label></td>
					<td width="20"></td>
					<td><img src="<?php echo $row['profile_picture']; ?>"></td>
				</tr>
			</table>
<?php
}
?>
		</div>		
				
		</div>
		
		<div id="right-nav">

			<h1>Your Photos</h1>
	    <div>
			<form method="post" action="add_photo.php" enctype="multipart/form-data">
				<input type="file" name="image">
				<button class="btn-submit-photo" name="Submit" value="Log out">Add Photos</button>
			</form>
	<hr />
	</div>
	

<?php
	include("includes/database.php");
			$query=mySQLi_query($con,"SELECT * from photos where user_id='$id' ");
			while($row=mySQLi_fetch_array($query)){
				$id = $row['photo_id'];
?>

		<div class="photo-select">
			<center>
				<img src="<?php echo $row['location']; ?>">
				<hr>
				<a href="delete_photos.php<?php echo '?id='.$id; ?>" class="btn-delete-photos">Delete</a>
			</center>
		</div>
		
<?php
}
?>
		</div>

		
	</div>
	<style>	
			
           /* CSS CHANGE THEME */
		  
				/*===== GOOGLE FONTS =====*/

				@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap");

					/*========== Variables  theme noir ==========*/

					body.dark-theme {
					--title-color: #F1F3F2;
					--text-color: #C7D1CC;
					--body-color: #1D2521;
					--container-color: #27302C;
					--color: var(--text-color);
				}


				/*========== Button Dark/Light ==========*/

				.change-theme {
					position: absolute;
					right: 9rem;
					top: 1.8rem;
					color: var(--text-color);
					font-size: 1rem;
					cursor: pointer;
				}


				html {
					scroll-behavior: smooth;
					position: relative;
				}

				body {
					
					font-family: 'Poppins', sans-serif;
					background-color: var(--body-color);
					color: var(--text-color);
				}	
			</style>

			<!-- JAVASCRIPT CHANGE THEME -->

			<script>

			// <!-- JAVASCRIPT CHANGE THEME -->
			let utilisateur = document.querySelector('.session');
				let profUt = document.querySelector('.profilUtilisateur');
				let theme = document.querySelector('.theme');
				let body = document.querySelector('.body');
				let fr = document.querySelector('.fr');
				let topbar = document.querySelector('.topbar');
				let topbar_logo = document.querySelector('.topbar-logo');
				/*==================== changement de la couleurs du themes de fond ====================*/
				const themeButton = document.getElementById('theme-button')
				const darkTheme = 'dark-theme'
				const iconTheme = 'bx-sun'

				// Sujet précédemment sélectionné (si l'utilisateur l'a sélectionné)
				const selectedTheme = localStorage.getItem('selected-theme')
				const selectedIcon = localStorage.getItem('selected-icon')


				// enregistrer le themes choisis par l'utilisateur meme si la page est réinitialisé
				const getCurrentTheme = () => document.body.classList.contains(darkTheme) ? 'dark' : 'light'
				const getCurrentIcon = () => themeButton.classList.contains(iconTheme) ? 'bx-moon' : 'bx-sun'


				if (selectedTheme) {
					// Si la validation est remplie, on demande quel était le problème pour savoir si on a activé ou désactivé le dark
					document.body.classList[selectedTheme === 'dark' ? 'add' : 'remove'](darkTheme)
					themeButton.classList[selectedIcon === 'bx-moon' ? 'add' : 'remove'](iconTheme)
				}

				// Activer/désactiver le thème manuellement avec le bouton
				themeButton.addEventListener('click', () => {
					// Ajouter ou supprimer l'icônes du themes sombres
					document.body.classList.toggle(darkTheme)
					themeButton.classList.toggle(iconTheme)

					//  ont enregistre le themes et l'icone choisis par l'utilisateur meme si la page est réinitialisé
					localStorage.setItem('selected-theme', getCurrentTheme())
					localStorage.setItem('selected-icon', getCurrentIcon())

				})

			</script>
</body>

</html>