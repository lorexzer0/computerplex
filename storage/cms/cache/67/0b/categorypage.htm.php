<?php 
class Cms5dfab33b2d8b9026327193_58a7819273a24c63f9cf411c2ea22bdfClass extends Cms\Classes\PageCode
{
public function onEnd()
{
   $this->page->title = $this->components['CategoryPage']->get()->name;
}
}
