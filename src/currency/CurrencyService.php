<?php 
namespace jack\currency;

class CurrencyService{
    
    public function display($amount){
        return '$' . $amount;
    }

    public function addNewFunction(){
        echo 'add new function';
    }
}