<?php 
namespace jack\currency;

class CurrencyService(){
    
    public function display($amount){
        return '$' + . $amount;
    }
}