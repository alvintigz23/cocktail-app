<?php 

namespace App\Controllers;
use App\Resources\CocktailResource;


class HomeController extends Controller{

    
    /**
     * Index
     * Will default to margarita search if no search parameters are sent
     *
     * @return string
     */
    public function index() 
    {
        $search = isset($_GET['search'])? $_GET['search']: 'margarita';
        $cocktailResource = new CocktailResource();
        $cocktails = $cocktailResource->search($search);
        return $this->view('cocktailsList', $cocktails);
    }
}