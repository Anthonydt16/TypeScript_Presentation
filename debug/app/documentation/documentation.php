<?php
namespace Controller;
use Controller\Documentation\Card;
use Kernel\Security\Vulnerability\Xss;
use Kernel\Security\Vulnerability\Csrf;
use Kernel\Security\Validation;
use Kernel\Io\Render;



/**
 * Controleur du composant Documentation.
 * 
 * @author chris
 * @version 1.0
 * @package Controller
 * @category Component controller
 */
class Documentation extends Render {

    /**
     * Point d'entrée du controleur.
     * 
     * @access public
     * @return void
     */
    function __construct() {
        $this->view([

        ]);
    }

}

?>