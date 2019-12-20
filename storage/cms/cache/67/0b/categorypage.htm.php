<?php 
class Cms5dfd4b516784e067179306_9b9f90c4968c8e03d01a85894d5f6e5aClass extends Cms\Classes\PageCode
{
public function onEnd()
{
   $this->page->title = $this->components['CategoryPage']->get()->name;
}
}
