<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Carte</title>
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.0/normalize.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.3.4/leaflet.css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,900i" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:wght@400;500&display=swap"
        rel="stylesheet">
        
    <link href="default.css" rel="stylesheet" type="text/css" media="all" />
    <link href="fonts.css" rel="stylesheet" type="text/css" media="all" />
    <link rel="stylesheet" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css" />
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" type="text/css">
    
    

    <link rel="stylesheet" href="leaflet.css" />
	<script src="leaflet.js"></script>

    
	
	<script src="SelectLayers.js"></script>
    
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <script src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
    
     
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/flexslider.css" rel="stylesheet" type="text/css">
        <link href="icons/css/ionicons.min.css" rel="stylesheet" type="text/css">
        <link href="icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
        
        
        <link href="rs-plugin/css/settings.css" rel="stylesheet">
        <link href="css/prettyPhoto.css" rel="stylesheet" type="text/css" />
      
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="80">


<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top before-color">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand alo" href="index.html">Géoportail-POP</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right scroll-to">
                <li><a href="index.html#home">Accueil</a></li>
                <li><a href="index.html#about">À propos</a></li>
                                     
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Cartes <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="carte0.html">Directions régionales du HCP</a></li>
                        <li><a href="carte1.html">Population par région 2004</a></li>
                        <li><a href="carte2.html">Population par région 2014</a></li>
                        <li><a href="carte12.html">Population par région</a></li>
                        <li><a href="carte3.html">Taux d'évolution de la population</a></li>
                        <li><a href="carte4.html">Trafic Routier</a></li>
                        <li><a href="carte5.html">Température moyenne annuelle</a></li>
                        <li><a href="carte6.html">TEP - Carte 3D</a></li>
                        
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">Requêtes <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="R1.php">Requête 1</a></li>
                        <li><a href="R2.php">Requête 2</a></li>
                        <li><a href="R3.php">Requête 3</a></li>
                        <li><a href="R4.php">Requête 4</a></li>
                        <li><a href="R5.php">Requête 5</a></li>
                        
                        
                    </ul>
                </li>
                <li><a href="index.html#contact">Contact</a></li>

            </ul>
        </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
</nav>

<div class="page-title">
    <div class="container text-center">
        <h3>Quelles sont les routes où la circulation est ralentie ? </h3>
        <span class="border-line"></span>
    </div>
</div><!--page title-->

<div class="container section-padding">
            <div>

     <div class="section-title">
                            <h1>Requête  <span class="alo">SQL :</span></h1> 
                            <p>

                            </p>
                           <center> <p>
                           <b> SELECT </b>gid, type, code
                           <b> FROM </b>routesrabatsale
                           <b>WHERE</b> trafic8h='ralenti';
                           
                            </p></center>

                            <h1>Resultat : </h1> 
                        </div>
<center>
        <?php
            try{
                $bdd = new PDO('pgsql:host=ec2-34-205-209-14.compute-1.amazonaws.com;port=5432;dbname=deequa1qddgreh;user=czjoetfwugowlc;password=1308e283475ecb6649532c75a186c7e05386aa1e311281666593d2a93c867abb');
                }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        

            $requete = $bdd->query("SELECT * FROM routesrabatsale WHERE trafic8h = 'ralenti'");
            ?>
            <table border="1">
            <?php
                    while($resultat = $requete->fetch())
                    {
                        ?>
                    <tr>
                       <td><?php echo $resultat['gid'];?></td>
                       <td><?php echo $resultat['type'];?></td>
                    </tr>
                    <tr>
                       <td></td>
                       <td><?php echo $resultat['code']."<br />";?></td>
                    </tr>
                    <?php
                    }
                    ?>
            </table>
            </center>
            </div><!--heading div-->
            
        </div>
<footer class="footer">
            <div class="container text-center">
                <span class="alo">Géoportail-POP</span>
                <ul class="social list-inline">
                    <li><a href="#"><i class="icon icon-social-twitter"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-facebook"></i></a></li>
                    <li><a href="#"><i class="icon icon-social-dribbble"></i></a></li>
                </ul>
                <span class="copyright">&copy; Copyright 2022. Géoportail Créé par Groupe 3, <a href="https://iav.ac.ma">IAV HASSAN II</a></span>
            </div>
        </footer>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/moderniz.min.js" type="text/javascript"></script>
        <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
        <!-- bootstrap js-->
        <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
        <script type="text/javascript" src="js/parallax.min.js"></script> 
        <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>	
        <script type="text/javascript" src="js/contact_me.js"></script> 
        <script type="text/javascript" src="js/jqBootstrapValidation.js"></script>
        <!--revolution slider scripts-->
        <script src="rs-plugin/js/jquery.themepunch.tools.min.js" type="text/javascript"></script>
        <script src="rs-plugin/js/jquery.themepunch.revolution.min.js" type="text/javascript"></script>  
        <script src="js/template.js" type="text/javascript"></script>
    </body>

</html>