<?php
class Currency
{
    public $url="https://jsonplaceholder.typicode.com/posts";

    public function fgc(){
     $data=file_get_contents($this->url);
     return $data;
    }
}
$currency= new Currency();
echo $currency->fgc();