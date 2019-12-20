<?php 
class Cms5dfd55bc77177902111012_246f66d2a863b4750ab55c5e57d9b702Class extends Cms\Classes\PageCode
{
public function onEnd(){
    $cart = $this->Cart->get();
    if(count($cart) == 0){
        return Redirect::to('/');
    }
}
}
