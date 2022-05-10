<!DOCTYPE html>
<html>

	<head>
		<title>Bienvenue  sur Chatroom - Sin up, Log in, Chat </title>
		<link rel="stylesheet" type="text/css" href="css/index.css">
	</head>

<body>
	<header>
		<a href=""><b>Chatroom</b></a>
		<nav>
		<a href=""><i class="fa fa-home"></i>Home</a>
		<a href="signin.php" title="Sign in"><button class="btn-sign-in" value="Sign in"><i class="fa fa-sign-out"></i>Sign in</button></a>
		<a href="signup.php" title="Sign up"><button class="btn-sign-up" value="Sign up"><i class="fa fa-registered"></i>Sign up</button></a>
		</nav>
    </header>

<!-- JS NAVBAR -->

	<div id="container">
		<div class="image-display">
			<p style="text-align:justify; margin-top:25%;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nihil recusandae rem dolor aut, sed saepe culpa tenetur ipsam laudantium quod voluptatem. Asperiores assumenda est id. Enim consequatur voluptatum tempora illum aspernatur iste incidunt iusto itaque, excepturi, est aperiam quo nemo vitae veritatis consectetur! Hic, animi? Provident dolorum fugiat itaque maiores commodi velit quisquam officia perspiciatis est? Nemo nobis temporibus fugiat omnis ratione iusto vitae! Quaerat ipsam, rem adipisci totam, nemo veniam excepturi quam illum laborum voluptatem consectetur, quasi possimus. Nisi, repudiandae expedita ad laboriosam labore odio sunt obcaecati. Deleniti maxime recusandae praesentium exercitationem architecto voluptas nesciunt molestias eum velit?</p>
				<!-- <img src="image/wold.jpg" class="img-style" /> -->
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