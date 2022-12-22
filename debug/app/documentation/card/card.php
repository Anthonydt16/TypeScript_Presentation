<?php
namespace Controller\Documentation;
use Kernel\Security\Vulnerability\Xss;
use Kernel\Security\Vulnerability\Csrf;
use Kernel\Security\Validation;
use Kernel\Io\Render;



/**
 * Controleur du composant Card.
 * 
 * @author chris
 * @version 1.0
 * @package Controller\Documentation
 * @category Component controller
 */
class Card extends Render {

    /**
     * Point d'entrée du controleur.
     * 
     * @access public
     * @return void
     */
    function __construct($title, $texte, $list) {
        $this->view([
            'title' => $title,
            'texte' => $texte,
            'list' => $list
        ]);
    }

}

?>