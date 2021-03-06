<!DOCTYPE html>
	<html>
	<head>
		<title>La Casa de Papel</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-4.5.2-dist/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>

	<body>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      		<a class="navbar-brand" href="#">La Casa De Papel</a>
      		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        		<span class="navbar-toggler-icon"></span>
      		</button>

        	<div class="navbar-collapse collapse w-100 order-3 dual-collapse2" id="navbarSupportedContent">
         		<ul class="navbar-nav ml-auto">
            		<li class="nav-item active">
              			<a class="nav-link" href="#presentation_serie">Présentation<span class="sr-only">(current)</span></a>
           			</li>
            		<li class="nav-item">
              			<a class="nav-link" href="#lieux_tournage">Lieux de tournage</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="#resumes">Résumés</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="#presentation_persos">Personnages</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="#forum">Forum</a>
            		</li>
            		<li class="nav-item">
              			<a class="nav-link" href="#contact">Contact</a>
            		</li>
          		</ul>
          		<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#info">
			    	A Propos
				</button>
	      		<div class="modal fade" id="info" tabindex="-1" aria-labelledby="A Propos" aria-hidden="true">
				    <div class="modal-dialog">
				    	<div class="modal-content bg-dark">
				      		<div class="modal-header">
				        		<h5 class="modal-title" id="info">A Propos de ce site web</h5>
				        		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          			<span aria-hidden="true">&times;</span>
				        		</button>
				      		</div>
				      		<div class="modal-body">
				        		<p>Ce site a été crée par Jérémy TREMBLAY, Groupe G7 de l'IUT d'Aubière, dans le Puy de Dôme, dans le cadre d'un travail de documents et Interfaces. Bootstrap a été utilisé pour réaliser ce site web.</p>
				      		</div>
				      		<div class="modal-footer">
				        		<button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
				      		</div>
				    	</div>
				  	</div>
				</div>
	        </div>
    	</nav>


    	<main id="contenu_page">

    		<section id="presentation_serie">
				<div id="carouselAccueil" class="carousel slide carousel-fade" data-ride="carousel">
		      		<ol class="carousel-indicators">
				       	<li data-target="#carouselAccueil" data-slide-to="0" class="active"></li>
				        <li data-target="#carouselAccueil" data-slide-to="1"></li>
				        <li data-target="#carouselAccueil" data-slide-to="2"></li>
		      		</ol>

			     	<div class="carousel-inner">
			     		<div class="carousel-content">
			          		<h1>Présentation de la série</h1>
			          	</div>
			        	<div class="carousel-item active">
			          		<img src="images/accueil_1.jpg" class="d-block w-100" alt="première image de présentation">
			          		<div class="carousel-caption d-none d-md-block">
			            		<p>Retour sur cette série mythique.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/accueil_2.jpg" class="d-block w-100" alt="seconde image de présentation">
			          		<div class="carousel-caption d-none d-md-block">
			            		<p>Captivants, exaltants. Les personnages sont le succès de cette série.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/accueil_3.jpg" class="d-block w-100" alt="image d'action">
			          		<div class="carousel-caption d-none d-md-block">
			            		<p>Suspence, action, amour, une fois commencé, impossible de décrocher !</p>
			          		</div>
			        	</div>
			      	</div>
			    </div>
			</section>

			<br /><br /><br />

			<section id="lieux_tournage">
				<h1>Les lieux de tournages de la série</h1>
				<p class="description_titre">Parce que les lieux ou a été tournée cette série, c'est ce qui fait son charme !</p>
				<div class="card-deck">
					<div class="row">
						<div class="col-lg-4 col-md-6 test">
							<div class="card text-white bg-success border-white text-left mb-3">
		    					<img src="images/lieux/el_gasco.jpg" class="card-img-top" alt="La maison, le domaine El Gasco">
								<div class="card-body">
		  							<h5 class="card-title">La maison, le domaine El Gasco</h5>
		  							<p class="card-text">Avant de commencer le casse, le professeur et ses élèves ont vécus dans une maison. L’objectif ? Que le Professeur explique son plan et les prépare ! Cette maison existe belle et bien et se situe dans la ville de Tolède au Sud-Ouest de Madrid.</p>
								</div>
								<div class="card-footer">
		  							<small class="text-muted"><a href="https://www.google.com/maps/place/Calle+Tijuana,+6,+28250+Torrelodones,+Madrid/@40.5702835,-3.9556407,17z/data=!3m1!4b1!4m5!3m4!1s0xd417629723940f9:0xdbb4b71698229e77!8m2!3d40.5702794!4d-3.953452">Voir le lieu sur Google Maps</a></small>
								</div>
		  					</div>
		  				</div>
  						<div class="col-lg-4 col-md-6 test">
  							<div class="card text-white bg-secondary border-white text-center mb-3">
		    					<img src="images/lieux/fabrique_nationale.jpeg" class="card-img-top" alt="Fabrique Nationale">
								<div class="card-body">
		  							<h5 class="card-title">La Fabrique Nationale de la Monnaie et du Timbre</h5>
		  							<p class="card-text">C'est le lieu principal de l’intrigue dans La Casa de Papel durant la saison 1 ! Il s’agit effectivement de la vraie fabrique de la monnaie et du timbre d’Espagne. Cependant sa façade n’est pas celle que l’on voit dans la série…</p>
								</div>
								<div class="card-footer">
		  							<small class="text-muted"><a href="https://www.google.com/maps/@40.4231211,-3.6708557,3a,75y,188.73h,113.79t/data=!3m6!1e1!3m4!1sAKee9bCP-DlskfhNSlZJUQ!2e0!7i16384!8i8192">Voir le lieu sur Google Maps</a></small>
								</div>
		  					</div>
		  				</div>
		  				<div class="col-lg-4 col-md-12 test">
	  						<div class="card text-white bg-info text-right border-white mb-3">
		    					<img src="images/lieux/conseil_scientifique.jpg" class="card-img-top" alt="Conseil Supérieur de Recherches Scientifiques">
								<div class="card-body">
		  							<h5 class="card-title">Conseil Supérieur de Recherches Scientifiques</h5>
		  							<p class="card-text">La façade de la fabrique nationale est en réalité celle du Conseil Supérieur de Recherches Scientifiques. La fabrique est trop proche de la route et il n’aurait pas été possible de bloquer la circulation lors du tournage. Alors que le Conseil lui détient un grand espace devant son entrée !</p>
								</div>
								<div class="card-footer">
		  							<small class="text-muted"><a href="https://www.google.com/maps/place/CSIC/@40.4410961,-3.6860208,17z/data=!4m8!1m2!2m1!1sConsejo+Superior+de+Investigaciones+Cient%C3%ADficas!3m4!1s0xd4228e92bbb46f9:0xe642b5253f0fecf9!8m2!3d40.4411076!4d-3.6861518">Voir le lieu sur Google Maps</a></small>
								</div>
	  						</div>
  						</div>
  					</div>
  				</div>
			</section>

			<br /><br /><br />

			<section id="resumes">
				<h1>Résumés des saisons</h1>
				<p class="description_titre">Des résumés remplis de spoilers ! Attention !</p>
				<div class="container-fluid">
				    <div class="row">
				    	<div class="col-lg-4 col-md-6 resume_saison"><span class="texte_saison">Saison 1</span>
				    		<p>Un homme mystérieux, surnommé le Professeur, planifie le meilleur braquage jamais organisé. Pour exécuter son plan, il recrute les meilleurs malfaiteurs du pays : Tokyo, Nairobi, Rio, Moscou, Berlin, Denver, Helsinki et Oslo. Le but est d'infiltrer la Fabrique nationale de la monnaie et du timbre afin d'imprimer 2,4 milliards d'euros et sans verser une goutte de sang. Ils seront en charge de soixante-sept otages dont Alison Parker, la fille de l'ambassadeur du Royaume-Uni. A coup de négociations avec la polices, stratagèmes, le Professeur fera tout pour dissimuler l'identité des braqueurs et les protéger.</p>
				    	</div>
				    	<div class="col-lg-4 col-md-6 resume_saison"><span class="texte_saison">Saison 2</span>
				    		<p>La saison 1 se poursuit toujours dans la Fabrique Nationale. Tokyo est capturée. Moscou décède après s'être pris une balle alors qu'il ouvre les portes du bâtiment national pour le retour de Tokyo. Arturo planifie une évasion et donne un coup de pied de biche dans le crâne d'Oslo. Son frère, Helsinki, préfère mettre fin à ses souffrances. Monica rejoint le groupe des braqueurs car elle tombe amoureuse de Denver. Ils arrivent finalement à s'enfuir en creusant un tunnel. Berlin reste à la fin pour laisser le temps aux autres de sortir, mais malheureusement, il y laissera la vie.</p>
				    	</div>
				    	<div class="col-lg-4 col-md-6 resume_saison"><span class="texte_saison">Saison 3</span>
				    		<p>Deux ans après le coup de la fabrique de monnaie, la bande se reforme, avec cette fois de nouvelles têtes, pour sauver Rio qui a été capturé et torturé par les autorités. Le procédé du professeur sera le même : un nouveau braquage. Cette fois, c’est la Banque Nationale d’Espagne qui est visée. Le mode opératoire restera le même que dans les saisons précédentes.
							Aux opérations du côté des autorités espagnoles, se trouvent à présent le colonel Tamayo et la très imprévisible Alicia.</p>
						</div>
						<div class="col-lg-12 col-md-6 resume_saison"><span class="texte_saison">Saison 4</span>
				    		<p>Le Professeur et Lisbonne ont été séparé dans la forêt, cette dernière semblant avoir été exécutée par la police.
							Cette exécution n’a pas eu lieu, mais était destinée à destabiliser. Car si le Professeur et Raquel avaient la police aux trousses à la fin de la saison 3, nos amis en combinaison rouge n’étaient guère mieux lotis à Madrid. 
							Gandia (un protecteur du gouverneur), se libera et tua Nairobi d'une balle dans la tête. Tokyo sera capturée par lui, mais les braqueurs réussiront à neutraliser Gandia. Le Profeseur sauvera Raquel. A la fin de la saison, ils sont en position de victoire, après avoir lancé des preuves accablantes concernant la torture qu'a subit Rio, seulement, Alicia se trouve dans le hangar du Professeur et est munie d'un pistolet.</p>
						</div>
				  	</div>
				</div>
			</section>

			<br /><br /><br />

	    	<section id="presentation_persos">
	    		<h1 id="titre_cache">Les Personnages</h1>
				<div id="carouselPersonnages" class="carousel slide" data-ride="carousel">
		      		<ol class="carousel-indicators">
				       	<li data-target="#carouselPersonnages" data-slide-to="0" class="active"></li>
				        <li data-target="#carouselPersonnages" data-slide-to="1"></li>
				        <li data-target="#carouselPersonnages" data-slide-to="2"></li>
				        <li data-target="#carouselPersonnages" data-slide-to="3"></li>
				        <li data-target="#carouselPersonnages" data-slide-to="4"></li>
				        <li data-target="#carouselPersonnages" data-slide-to="5"></li>
				        <li data-target="#carouselPersonnages" data-slide-to="6"></li>
				        <li data-target="#carouselPersonnages" data-slide-to="7"></li>
		      		</ol>

			     	<div class="carousel-inner">
			     		<div class="carousel-content">
			          		<h1>Les Personnages</h1>
			          		<p class="description_titre">Si cette série est aussi réussie, c'est grâce à ses personnages !</p>
			          	</div>
			        	<div class="carousel-item active">
			          		<img src="images/personnages/Le_Professeur.jpeg" class="d-block w-100" alt="Le Professeur">
			     
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Le Professeur</h5>
			            		<p>Le cerveau de la bande. C'est celui qui a travaillé sur le plan du casse, et il se met parfois dans des situations compliquées pour sauver les braqueurs.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/personnages/Raquel_Murillo.jpeg" class="d-block w-100" alt="Raquel Murillo">
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Raquel Murillo / Lisbonne</h5>
			            		<p>A l'origine policière, elle tombe amoureuse du Professeur et quitte son poste pour les rejoindre en tant que braqueuse.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/personnages/Berlin.jpeg" class="d-block w-100" alt="Berlin">
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Berlin</h5>
			            		<p>Il s'agit du demi-frère du Professeur. Il restera dans la banque jusqu'à la mort, afin de permettre à ses acolytes de s'échapper.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/personnages/Rio.jpeg" class="d-block w-100" alt="Rio">
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Rio</h5>
			            		<p>Jeune homme vif, et petit ami de Tokyo, il se fera torturé par la police lors de la saison 3, ce qui déclenchera un mouvement de rébellion contre les forces de l'ordre.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/personnages/Tokyo.jpeg" class="d-block w-100" alt="Tokyo">
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Tokyo</h5>
			            		<p>La narratrice de l'hstoire. Elle a pris beaucoup de risques, s'est faite attrapée par la police puis a réussie à s'échapper avec l'aide du Professeur.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/personnages/Monica.jpeg" class="d-block w-100" alt="Monica">
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Monica / Stockholm</h5>
			            		<p>A l'origine otage dans la fabrique Nationale de la Monnaie et du Timbre, elle tombe amoureuse de Denver, un braqueur. Elle se joint ensuite au groupe.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/personnages/Alison_Parker.jpeg" class="d-block w-100" alt="Alison Parker">
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Alison Parker</h5>
			            		<p>Fille de l'embassadeur Britannique d'Espagne, harcelée par ses camarades. Les braqueurs la relâcheront et l'aideront à prendre confiance en elle.</p>
			          		</div>
			        	</div>
			        	<div class="carousel-item">
			          		<img src="images/personnages/Angel_Rubio.jpeg" class="d-block w-100" alt="Angel Rubio">
			          		<div class="carousel-caption d-none d-md-block">
			          			<h5>Angel Rubio</h5>
			            		<p>Second bras du commissaire Prieto, et secrètement amoureux de Raquel. Il aura un accident de voiture alors même qu'il connaît l'identité du Professeur dans la saison 1.</p>
			          		</div>
			        	</div>
			      	</div>
			      	<a class="carousel-control-prev" href="#carouselPersonnages" role="button" data-slide="prev">
    					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
    					<span class="sr-only">Previous</span>
  					</a>
  					<a class="carousel-control-next" href="#carouselPersonnages" role="button" data-slide="next">
    					<span class="carousel-control-next-icon" aria-hidden="true"></span>
    					<span class="sr-only">Next</span>
  					</a>
			    </div>
			</section>

			<br /><br /><br />

			<section id="forum">
				<h1>Forum</h1>
				<p class="description_titre">Un endroit convivial ou échanger sur la série !</p>
				<ul class="list-unstyled">
					<li class="media">
					    <img src="images/forum/pdp1.jpg" class="align-self-start mr-3 img_forum" alt="Photo de Profil">
					  	<div class="media-body">
					    	<h5 class="mt-0 mb-1">Adrien a écrit :</h5>
					    	<p>Cette série est vraiment incroyable ! On m'en avait parlé mais je pensais que les gens en faisait beaucoup trop, mais pas du tout ! Il y a tout le temps du suspence, on se demande si les braqueurs vont s'en sortir... et on prend leur défense alors qu'ils font tout de même un acte qui n'est pas moralement acceptable ! Vraiment une bonne série, je vous la conseille.</p>

					    	<div class="media mt-3">
					        	<img src="images/forum/pdp4.jpg" class="align-self-start mr-3 img_forum" alt="Photo de Profil">
					      		<div class="media-body">
					        		<h5 class="mt-0">Anonyme a écrit :</h5>
					        		<p>J'ai eu la même sensation en la regardant ! Les acteurs jouent très bien ! Vivement la saison 5 !!!</p>
					     		</div>
					    	</div>

					    	<div class="media mt-3">
					        	<img src="images/forum/pdp3.jpg" class="align-self-start mr-3 img_forum" alt="Photo de Profil">
					      		<div class="media-body">
					        		<h5 class="mt-0">Isabelle a écrit :</h5>
					        		<p>J'ai pris un abonnement pour regarder la série avec mon fils et mon mari et je ne regrette pas du tout !!!! Au top !!!</p>
					     		</div>
					    	</div>
					    </div>
					</li>
				  	<li class="media">
					    <img src="images/forum/pdp2.jpg" class="align-self-start mr-3 img_forum" alt="Photo de Profil">
					    <div class="media-body">
					    	<h5 class="mt-0 mb-1">Matthieu a écrit :</h5>
					    	<p>Superbe série, le scénario est incroyable ! 
					    	<br />On s'attache vraiment aux personnages. Et on déteste profondément la police ! Je recommande.</p>
					    </div>
					</li>
					<li class="media">
					    <img src="images/forum/pdp4.jpg" class="align-self-start mr-3 img_forum" alt="Photo de Profil">
					    <div class="media-body">
					    	<h5 class="mt-0 mb-1">Anonyme a écrit :</h5>
					    	<p>Très bonne série dans l'ensemble même si je ne supporte pas Tokyo avec sa voix. Très divertissant et assez longue (4 saisons) !</p>
					    </div>
					</li>
				</ul>
			</section>

			<br /><br /><br />

			<section id="reponse_form">
				<?php
					if (isset($_POST['valider'])) 
					{
						$test = 0;

						if (empty($_POST['nom']) || empty($_POST['mail']) || ! filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) || empty($_POST['message']))
						{
							echo '<div class="alert alert-danger" role="alert">';
							echo '<h4 class="alert-heading">Une erreur est survenue</h4>';
							echo '<p class="mb-0">Ils sembleraient que certaines informations soient manquantes ou non valides :</p><br />';

							if (empty($_POST['nom']))
							{
								echo 'Veuillez renseigner votre nom.<br />';
								$test = 1;
							}
								
							if (empty($_POST['mail']))
							{
								echo 'Veuillez renseigner votre adresse mail.<br />';
								$test = 1;
							}

							else
							{
								$mail = $_POST['mail'];
								if (! filter_var($mail, FILTER_VALIDATE_EMAIL))
								{
									echo 'Adresse mail non valide.<br />';
									$test = 1;
								}
							}

							if (empty($_POST['message']))
							{
								echo 'Veuillez nous donner la raison de votre contact dans la zone de texte.<br />';
								$test = 1;
							}

							echo '<hr /><p class="mb-0">Veuillez réessayer.</p></div>';

						}
						if ($test != 1)
						{
							echo '<div class="alert alert-success" role="alert">';
							echo '<h4 class="alert-heading">Merci de votre réponse !</h4>';
							echo '<p class="mb-0">Votre demande a bien été prise en compte et sera traitée dans les meilleurs délais.</p>';

							echo 'Nom : ' . $_POST['nom'] . '<br />';
							echo 'Adresse mail : ' . $_POST['mail'] . '<br />';

							if (empty($_POST['telephone']))
								echo 'Pas de numéro de téléphone envoyé.<br />';
							else 
								echo 'Téléphone : ' . $_POST['telephone'] . '<br />';

							echo'Type de demande : ' . $_POST['bug'] . '<br />';
							echo 'Première visite : ' . $_POST['visite'] . '<br />';
							echo 'Descriptif de la demande : ' . $_POST['message'];

							echo '<hr /><p class="mb-0">Nous vous remercions.</p></div>';
						}

					echo '<br /><br /><br />';

					}

				?>
			</section>

			<section id="contact">
				<form name="formulaire_contact" action="#reponse_form" method="post">
					<div class="container">

						<div class="row">
							<div class="col-sm">
								<h1 class="titre_marge">Contactez nous</h1>
							</div>
						</div>
						<div class="row">
							<div class="col-sm">
								<p class="description_titre">Une question, une demande ? C'est l'endroit pour le faire !</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm">
								<label for="nom">Nom : </label><br />
								<input class="form-control" name="nom" id="nom" type="text" placeholder="Dupond" required><br />
							</div>

							<br />

							<div class="col-sm">
								<label for="telephone">Téléphone (facultatif) : </label>
								<input class="form-control" size="12" type="tel" name="telephone" id="telephone" placeholder="00-00-00-00-00" />
								<br/>
							</div>
						</div>

						<div class="row">
							<div class="col-sm">
								<div class="form-group">
								    <label for="mail">Adresse mail</label>
								    <input type="email" class="form-control" name="mail" id="mail" aria-describedby="emailHelp" placeholder="nom@exemple.com" required>
								    <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre e-mail avec qui que ce soit.</small>
								</div>
							</div>

							<br />

							<div class="col-sm">	
								<label for="bug">De quelle demande s'agit-il ?</label>
								<br /><select name="bug" id="bug" size="1" class="form-control">
									<option value="Bug" selected>Bug</option>
									<option value="Amélioration">Amélioration</option>
									<option value="Autre demande">Autre demande</option>
								</select>
							</div>
						</div>
					
						<div class="row">
							<div class="col-sm">

								<label>Est-ce votre première visite sur ce site ? </label>
								<div class="form-check">
								    <input class="form-check-input" type="radio" name="visite" id="visite1" value="oui" checked>
								    <label class="form-check-label" for="visite1" checked="checked">Oui</label>
								</div>

								<div class="form-check">
								  <input class="form-check-input" type="radio" name="visite" id="visite2" value="non">
								  <label class="form-check-label" for="visite2">Non</label>
								</div>
							</div>
						</div>

						<br />

						<div class="row">
							<div class="col-sm">

								<div class="form-group">
									<label for="message">Pourquoi nous contactez vous ?</label>
									<textarea class="form-control" id="message" rows="3" name="message" placeholder="Décrivez-nous votre demande ici." required></textarea>
									</div>
							</div>
						</div>
					</div>

					<div id="bouton_validation">
						<input class="btn btn-danger" type="reset" value="Effacer" />
						<button class="btn btn-primary" type="submit" name="valider">Valider</button>
					</div>
				</form>
				<br />

			</section>
		</main>

		<footer>
			Site réalisé avec Bootstrap.
			<br />TREMBLAY Jérémy
			<br />Groupe G7
		</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    <script src="scroll-animate.js"></script>

	</body>
</html>