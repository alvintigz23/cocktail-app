<?php
namespace App\Resources;

interface CocktailInterface {

    /**
     * Search function of the resource
     *
     * @param [string] $value
     * @return array
     */
    public function search($value) : array;

}