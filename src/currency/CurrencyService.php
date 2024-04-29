<?php 
namespace jack\currency;

class CurrencyService{
    
    public function display($amount){
        return '$' . $amount;
    }

    public function addNewFunction(){
        echo 'add new function';
    }

    //加点东西，能不能项目中composer update得到呢。其实改后，需要再发次tag，这样才合理。
}