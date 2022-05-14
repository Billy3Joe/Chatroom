<?php include('function_time.php')?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <title>Mes publications Personnelles</title>
    <link rel="stylesheet" type="text/css" href="css/home.css">
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
    
    <div style="margin-right: 350px;">
        <?php
            include("includes/database.php");
                $id = $_SESSION['id'];
                $query=mySQLi_query($con,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id WHERE user.user_id =$id ORDER BY post_id DESC");
                // $query=mySQLi_query($con,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by post_id DESC");
                while($row=mySQLi_fetch_array($query)){
                    $posted_by = $row['firstname']." ".$row['lastname'];
                    $location = $row['post_image'];
                    $profile_picture = $row['profile_picture'];
                    $content=$row['content']; 
                    $post_id = $row['post_id'];
                    $time=$row['created'];	
        ?>
            <div id="right-nav1">
                <div class="profile-pics">
                    <!-- <img src="<?php echo $profile_picture ?>"> -->
                   
                </div>
                 <br/>
                <div class="post-content">
                   
                    <center>           
                        <img src="<?php echo $location ?>" height="550px" width="550px">

                        <div style="display: flex; flex-direction:column;">
                            <b style="text-transform: uppercase;"><?php echo $posted_by ?></b>
                            <strong><?php echo $time = time_stamp($time); ?></strong>
                        </div>
                        <p><?php echo $row['content']; ?></p>
                                               
                        <div class="delete-post">
                           <a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post"><button class="btn-delete" style="width:120px; padding:5px; font-size:20px; border-radius:20px;">Delete post</button></a>
                        </div>
                    </center>
               </div>
            </div>
        <?php
        }
        ?>
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