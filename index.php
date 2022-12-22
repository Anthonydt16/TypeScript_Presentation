<!-- Initialisation du noyau. -->
<?php

require_once(__DIR__ . '/.kernel/init.php');

use Controller\Navbar;
use Kernel\Url\Router;
use Kernel\Html\Doctype;
?>



<!-- Ouvre le document HTML et l'en-tête. -->
<?= Doctype::open() ?>

	<!-- Routage vers le point d'entrée. -->
	<body>
    <link href="debug/lib/less/prism.css" rel="stylesheet" />
        <?php new NavBar ?>
		<?php Router::app(); ?>
    <script src="debug/lib/js/prism.js"></script>
	</body>
	
<!-- Ferme la document HTML et fais le rendu. -->
<?= Doctype::close() ?>



<!-- Extinction du noyau. -->
<?php require_once(__DIR__ . '/.kernel/quit.php');?>