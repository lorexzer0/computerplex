<?php 
class Cms5df9730976dda249130839_fdb4e5fa52a2f17df729e3180501f53dClass extends Cms\Classes\PageCode
{
public function onEnd()
{
   $this->page->title = $this->components['CategoryPage']->get()->name;
}
}
