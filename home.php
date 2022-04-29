<?php include('function_time.php')?>

<!DOCTYPE html>
<html>

	<head>
		<title>Bienvenue à Chatroom - Sign up, Log in, Post </title>
		 <!--========== BOX ICONS ==========-->

		 <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
         <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>

<body class="dark">
<?php include ('session.php');?>

	<div id="header"  style="position:sticky; top:0;">
		<div class="head-view">
			<ul>
				<li><a href="home.php" title="Chatroom"><b>Chatroom</b></a></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li><a href="timeline.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li>
				<li><a href="home.php" title="Home"><label class="active">Home</label></a></li>
				<li><a href="profile.php" title="Home"><label>Profile</label></a></li>
				<li><a href="photos.php" title="Settings"><label>Photos</label></a></li>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li>
				<li><i style="background:#333; " class='bx bx-moon change-theme' id="theme-button"></i></li>
		
				<!-- FOLLOW  || DO NOT INCLUDE-->
				<li><a class="Follow" href="https://github.com/Billy3Joe" target="blank_"></a></li>	
				
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
		</div>
		
		
		
    <div id="right-nav">
			<h1>Update Status</h1>
	     <div>
			<form method="post" action="post.php" enctype="multipart/form-data">
				<textarea placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
				<input type="file" name="image">
				<button class="btn-share" name="Submit" value="Log out">Share</button>
			</form>
	    </div>
	</div>


			<style>
	      /*  FOLLOW || DO NOT INCLUDE*/
			.Follow {	
				
				background:url("upload/Billy.jpg")no-repeat center / contain;
				width: 50px;
				height: 50px;
				bottom: 9px;
				right: 20px;
				display:block;
				position:fixed;
				border-radius:50%;
				z-index:999;
				-webkit-animation:  rotation 10s infinite linear;
						animation:  rotation 10s infinite linear;
				}

				@-webkit-keyframes rotation {
						from {
								-webkit-transform: rotate(0deg);
						}
						to {
								-webkit-transform: rotate(359deg);
						}
				}
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

				
			<h1 style="text-align: center;">SUGGESTIONS</h1>
			<?php
				
					$query=mySQLi_query($con,"SELECT * from user ORDER BY RAND()");
					while($row=mySQLi_fetch_array($query)){
		
			?>
					
				      <div style="display: flex;">
					      <a href="updatephoto.php" title="Change Profile Picture"><img src="<?php echo $row['profile_picture'] ?>"></a>
			<?php
						  echo $row['firstname']." <br> ".$row['lastname'];
								
					  echo'</div>';
					}
			?>
		
		</div>
        
<?php
}
?>
	
<?php
	include("includes/database.php");
	        $query=mySQLi_query($con,"SELECT * from post LEFT JOIN user on user.user_id = post.user_id order by  RAND()");
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
			<img src="<?php echo $profile_picture ?>">
			<b><?php echo $posted_by ?></b>
			<strong><?php echo $time = time_stamp($time); ?></strong>
			</div>
		<br />
			<div class="post-content">
				<div class="delete-post">
				<a href="delete_post.php<?php echo '?id='.$post_id; ?>" title="Delete your post"><button class="btn-delete">X</button></a>
				</div>
			<p><?php echo $row['content']; ?></p>
		<center>
			<img src="<?php echo $location ?>">
		</center>
		</div>

		<?php
			include("includes/database.php");
					$comment=mySQLi_query($con,"SELECT * from comments where post_id='$post_id' order by post_id DESC");
					while($row=mySQLi_fetch_array($comment)){
					$comment_id=$row['comment_id'];
					$content_comment=$row['content_comment'];
						$time=$row['created'];	
					$post_id=$row['post_id'];
					$user=$_SESSION['id'];
					
		?>			
					<div class="comment-display"<?php echo $comment_id ?>>
							<div class="delete-post">
							<a href="delete_comment.php<?php echo '?id='.$comment_id; ?>" title="Delete your comment"><button class="btn-delete">X</button></a>
							</div>
						<div class="user-comment-name"><img src="<?php echo $row['image']; ?>">&nbsp;&nbsp;&nbsp;<?php echo $row['name']; ?><b class="time-comment"><?php echo $time = time_stamp($time); ?></b></div>
						<div class="comment"><?php echo $row['content_comment']; ?></div>
					
					</div>
					<br />

		<?php
		}
		?>
			

		 <form  method="POST" action="comment.php">			
			<div class="comment-area">
	
				<?php $image=mysqli_query($con,"select * from user where user_id='$id'");
					while($row=mysqli_fetch_array($image)){
					

					?>
				<img src="<?php echo $row['profile_picture']; ?>" width="50" height="50">
				<?php } ?>
	
				<input type="text" name="content_comment" placeholder="Write a comment..." class="comment-text">
				<input type="hidden" name="post_id" value="<?php echo $post_id ?>">
				<input type="hidden" name="user_id" value="<?php echo $firstname . ' ' . $lastname  ?>">
				<input type="hidden" name="image" value="<?php echo $profile_picture  ?>">
				<input type="submit" name="post_comment" value="Enter" class="btn-comment">
			
			</div>
		</form>

			
		</div>
	<?php
	}
	?>
	
		
	</div>
</body>

</html>