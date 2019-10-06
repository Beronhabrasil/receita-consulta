<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Http\Controllers;

/**
 * Description of Receita
 *
 * @author jonny
 */
class Receita {
 
  private  function api(){
   $cnpj = 27865757000102;    
   $client = new \GuzzleHttp\Client();
   $response = $client->request('GET', 'https://www.receitaws.com.br/v1/cnpj/'.$cnpj);
   return $response;
   }
   public function getResult(){
   $sortout = $this->api();
   $getitfuck =  json_decode($sortout->getBody(), true);
   dd($getitfuck);
   }
 
}
