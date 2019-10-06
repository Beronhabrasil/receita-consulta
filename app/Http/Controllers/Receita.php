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
   $cnpj = 18387246000123 ;    
   $client = new \GuzzleHttp\Client();
   $response = $client->request('GET', 'https://www.receitaws.com.br/v1/cnpj/'.$cnpj);
   return $response;
   }
   public function getResult(){
   $sortout = $this->api();
   $getitfuck =  json_decode($sortout->getBody(), true);
        foreach ($getitfuck['atividade_principal'] as $key => $value) {
         echo  $key[0] ."  atividade ===>".$value['text'];
         echo '<br>';
         echo  $key[0] ."  codigo ===>".$value['code']."<br>";
        }
        echo "situacao &nbsp;&nbsp;". $getitfuck['situacao']."<br>";
        echo "bairro &nbsp;&nbsp;". $getitfuck['bairro']."<br>";
        echo "logradouro&nbsp;&nbsp;". $getitfuck['logradouro']."<br>";
        echo "numero &nbsp;&nbsp;".$getitfuck['numero']."<br>";
        echo "cep &nbsp;&nbsp;".$getitfuck['cep']."<br>";
        echo "natureza_juridica  &nbsp;&nbsp;".$getitfuck['natureza_juridica']."<br>";
        echo "fantasia &nbsp;&nbsp;".$getitfuck['fantasia']."<br>";
        echo "cnpj &nbsp;&nbsp;".$getitfuck['cnpj']."<br>";
        echo "ultima_atualizacao &nbsp;&nbsp;".$getitfuck['ultima_atualizacao']."<br>";
        echo "tipo &nbsp;&nbsp;".$getitfuck['tipo']."<br>";
    }
 
}
