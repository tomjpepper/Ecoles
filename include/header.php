
 <header>
            <div class="container_12">
                <div class="wrapper p3">
                    <div class="grid_12">
                     <div class="wrapper border-bot">
                            <h1><a href="index.php">L'Actu<strong>.com</strong></a></h1>
                            <nav>
                                <ul class="menu">
                                    

                                    <?php 
                                        if (isset($_SESSION['Nom'])) {
                                         echo '<p>Bonjour '.$_SESSION['Prenom'].' '.$_SESSION['Nom'].'</p>'; 
                                    ?>
                                    <li><a class="active" href="index.php">Accueil</a></li>
									<li><a href="about.php">Qui sommes nous ?</a></li>
                                    <li><a href="profile.php">Profil</a></li>
                                    <li><a href="contacts.php">Contacts</a></li>
                                    <li><a href="deco.php">Déconnexion</a></li>
                                    <?php
                                         } else {
                                    ?>
                                    <li><a class="active" href="index.php">Accueil</a></li>
                                    <li><a href="about.php">Qui sommes nous ?</a></li>
                                    <li><a href="contacts.php">Contacts</a></li>
                                    <li><a href="connexion.php">Connexion</a></li>
                                    <li><a href="incription.php">Inscrivez-vous</a></li>
                                    <?php
                                     } 
                
                                     ?>
                                    
                                </ul>
                            </nav>
                        </div>