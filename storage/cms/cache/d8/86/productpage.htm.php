<?php 
class Cms5dfab2fe218b4866626256_6e82e12e1daf08e4c40ea4e250fca7afClass extends Cms\Classes\PageCode
{
public function onEnd()
{
    $this->page->title = $this->components['ProductPage']->get()->name; 
}
}
