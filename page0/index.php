<!doctype html>  

<?php
if( ! defined('ROOT_PATH') )	define('ROOT_PATH', dirname(__FILE__).'/..');

include_once ROOT_PATH.'/Includes/fonction.php';
include_once ROOT_PATH.'/Includes/reste.php';
include_once ROOT_PATH.'/Includes/tableau.php';

?>

<!--[if IE 7 ]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8 ]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if IE 9 ]><html lang="en" class="no-js ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en" class="no-js"><!--<![endif]-->

<head>

<?php echo headphp(); ?>

</head>
	
<body>
	<header>	
			<div id="headerWrapper">
				<div class="container">
		   			<a id="logo" href="http://www.city-access.com/" title="Home"><img src="../rw_common/images/LogoRe" width="90" height="69" alt="Site logo"/></a>
					<h1 id="title">City-Access</h1>




<!-- Barre de recherche pour retrouver un lieu ainsi que le bouton -->
	<form METHOD="POST" ACTION="index.php" > 

	<input type="text" id="recherche" name="ville" size"25"  onclick="texte.value='';" placeholder="Rechercher une ville" /> 

	<input type="submit" id="rechercher" name="lien_ok" value="Rechercher"/> 

	</from>






					<nav><ul><li><a href="../" rel="">Home</a></li><li><a href="./" rel="" id="current">Ville</a></li><li><a href="../page2/" rel="">Infos</a></li></ul></nav>
				</div><!-- end container -->
			</div><!--end headerWrapper-->	
			<nav id="navi-wrap">
				<ul id="navi">
					<ul><li><a href="../" rel="">Home</a></li><li><a href="./" rel="" id="current">Ville</a></li><li><a href="../page2/" rel="">Infos</a></li></ul>
				</ul>
			</nav><!-- /nav-wrap -->
		<div id="banner">
			<div id="extraContainer1"></div>
			<div id="freeStyle"></div>
		</div><!-- end banner-->

<div>

<?php 

echo Tableau();

?>

</div>



		<div id="bttmHeader">	
		<div class="container">
			<div class="sixteen columns over">
				<h2 id="slogan"></h2>
			</div><!-- header-inner -->
		</div><!-- end container -->	
		</div><!-- end bttmHeader -->
	</header>
	<section>
		<div class="wrapper_2">
			<div class="container">
				<div id="extraContainer2"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
			<div class="container">
				<div class="single twelve columns"  id="main" role="main">
					

<!-- Stacks v1198 --><div id='stacks_out_123_page0' class='stacks_top'><div id='stacks_in_123_page0' class=''><div id='stacks_out_135_page0' class='stacks_out'><div id='stacks_in_135_page0' class='stacks_in float_left_stack'><div class='stacks_div stacks_float_left'>
<div class='centered_image' ></div>
</div>



<center>

	<h1><?php echo $_POST["ville"] ?></h1>

<?php 



// DEBUT TRUC WIKIPEDIA

$thisville = $_POST["ville"];
echo carte_ville($thisville);

// FIN TRUC 'de psychopathe' AVEC WIKIPEDIA 


 ?>


<<<<<<< HEAD
<!--
<?php echo '<iframe style="margin: 10px"src= "http://www.panoramio.com/wapi/template/list.html?tag='.$query.'&amp;width=500&amp;height=80&amp;rows=2&amp;columns=20&amp;orientation=horizontal" frameborder="0" width="500" height="80" scrolling="yes" marginwidth="0" marginheight="0"> </iframe>'?>
-->
=======

<?php echo '<iframe style="margin: 10px"src= "http://www.panoramio.com/wapi/template/list.html?tag='.$_POST["ville"].'&amp;width=600&amp;height=120&amp;rows=1&amp;columns=8&amp;orientation=horizontal" frameborder="0" width="600" height="120" scrolling="yes" marginwidth="0" marginheight="0"> </iframe>'?>

>>>>>>> origin/master




</center>


Lorem ipsum dolor sit amet, sapien platea morbi dolor lacus nunc, nunc ullamcorper. Felis aliquet egestas vitae, nibh ante quis quis dolor sed mauris. Erat lectus sem ut lobortis, adipiscing ligula eleifend, sodales fringilla mattis dui nullam. Ac massa aliquet.</div></div><div id='stacks_out_138_page0' class='stacks_out'><div id='stacks_in_138_page0' class='stacks_in html_stack'><span id='stacks_in_139_page0'><center> ——— </center> </span></div></div><div id='stacks_out_162_page0' class='stacks_out'><div id='stacks_in_162_page0' class='stacks_in html_stack'>HERE IS THE BANNER</div></div><div id='stacks_out_170_page0' class='stacks_out'><div id='stacks_in_170_page0' class='stacks_in html_stack'><span id='stacks_in_171_page0'><center> ——— </center> </span></div></div><div id='stacks_out_146_page0' class='stacks_out'><div id='stacks_in_146_page0' class='stacks_in html_stack'>HERE IS THE SEARCH ENGINE</div></div><div id='stacks_out_154_page0' class='stacks_out'><div id='stacks_in_154_page0' class='stacks_in html_stack'>DESCRIPTIONS DES TRUCS

Lorem ipsum dolor sit amet, sapien platea morbi dolor lacus nunc, nunc ullamcorper. Felis aliquet egestas vitae, nibh ante quis quis dolor sed mauris. Erat lectus sem ut lobortis, adipiscing ligula eleifend, sodales fringilla mattis dui nullam. Ac massa aliquet.</div></div></div></div>



<!-- End of Stacks Content -->



				</div><!-- end single twelve column -->		
				<div class="sidebar four columns offset-by-one">
					<aside>
						<span id="asideTitle">Top 5 visites</span>
						Truc de la sidebar : <br /><br />

						<ol>
							<li>Place Stanislas</li>
							<li>Mus&eacutee de l'&eacutecole</li>
							<li>Mus&eacutee des Beaux Arts</li>
						</ol>

						<br />Felis aliquet egestas vitae, nibh ante quis quis dolor sed mauris. Erat lectus sem ut lobortis, adipiscing ligula eleifend, sodales fringilla mattis dui nullam. Ac massa aliquet.
						<div id="asidePlug"></div>
					</aside>
				</div><!-- sidebar four columns offset-by-one -->
			</div><!-- end container -->
		<div class="wrapper_3">
			<div class="container">
				<div id="extraContainer3"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
		<div class="clear"></div>
	</section>
	<footer>
		<div class="wrapper">
			<div class="container">
				<div id="extraContainer4"></div>
			</div><!-- end container -->
		</div><!-- end wrapper -->
		<div class="container">
				<div id="extraContainer5"></div>
				<div id="breadcrumb"></div>
				<div id="left">&copy; 2015 City-Access</div>
		</div><!-- end container -->
	</footer>		
	</body>
</html>