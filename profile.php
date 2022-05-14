
<!DOCTYPE html>
<html>

	<head>
		<title>Bienvenue à Chatroom - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css/profile.css">
	</head>

<body>
<?php include ('session.php');?>
<header>
		<a href="#"><b>Chatroom</b></a>
		<nav>
		<!-- <li><a href="timeline.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li> -->
		<a href="home.php"><i class="fa fa-home"></i>Home</a>
		<a href="profile.php"title="Home"class="btn-sign-in" value="Sign in"><i class="fa fa-sign-out"></i>Profile</a>
		<a href="photos.php" title="Settings"class="btn-sign-up" value="Sign up"><i class="fa fa-registered"></i>Photos</a>
		<a href="logout.php" title="Log out" class="btn-sign-up" value="Sign up"><i class="fa fa-registered"></i>Log out</a>

		<!-- FOLLOW  || DO NOT INCLUDE-->
		<a class="Follow" href="https://github.com/Billy3Joe" target="blank_"></a>
		</nav>
    </header>

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">
				<a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"><button>Update Picture</button></a>
				
				</div>

				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		
		
		<div id="right-nav">
			<h1>Personal Info</h1>
			<hr />
			<br />
			<?php
			include('includes/database.php');

			$result=mysqli_query($con,"SELECT * FROM user where user_id='$id' ");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['firstname']."</b>";
				echo "</div> ";
				echo "<hr /> ";		
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['lastname']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['birthday']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['gender']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['number']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";	
				echo "</div> ";
				echo "<br /> ";		
				echo " <div class='edit-info'>";
				echo " <a href ='edit_profile.php?user_id=$id'><button>Edit Profile</button></a>";
				echo "</div> ";
				echo "<br /> ";	
				echo "<br /> ";	
			}
			?>
			<a href ='publications_personnelles.php'><button style="margin-right: 9px;">Mes publication</button></a>
			
		</div>

	
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
