
<?php
class Currency
{
    public $url="https://api.trendyol.com/sapigw/brands/by-name?name={brand-name}";

    public function fgc(){
     $data=file_get_contents($this->url);
     return $data;
    }
}
$currency= new Currency();
echo $currency->fgc();
 
