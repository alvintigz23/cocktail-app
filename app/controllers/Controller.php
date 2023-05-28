<?php 

namespace App\Controllers;

class Controller {

    
    /**
     * Compiles the template
     *
     * @param [string] $bodyTemplate
     * 
     * @return view
     */
    public function view($bodyTemplate, $vars = []) {
        require_once('app/views/template.php');
    }
}