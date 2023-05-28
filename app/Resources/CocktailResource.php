<?php

namespace App\Resources;
use App\Resources\CocktailInterface;

/**
 * Cocktail api
 * documentation : https://www.thecocktaildb.com/api.php
 */
class CocktailResource implements CocktailInterface {

    private $url;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->url = 'https://www.thecocktaildb.com/api/json/v1/1/search.php';
    }

    /**
     * Searches the cocktail DB
     * search by name if string length is greater than 1 or
     * search by first letter if string length is equal to 1
     *
     * @param string $value
     * @return array
     */
    public function search($value) : array
    {
        $searchKey = (strlen($value) > 1) ? 's' : 'f';
        $result =  $this->query(http_build_query([$searchKey => $value]));
        
        return [
          'success' => ($result != false) ? true: false, 
          'message' => ($result != false) ? '': 'Error retrieving API data.', 
          'data' => ($result != false) ? json_decode($result, true)['drinks']: [], 
        ];
    }

    /**
     * Build api query
     * 
     * @return mixed string | boolean
     */
    private function query($params = '') : string | bool
    {
        $endpoint = $this->url . (($params) ? '?' . $params : '');
        
        $curl = curl_init($endpoint);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        $response = curl_exec($curl);
        curl_close($curl);
        
        return $response;
    }
}