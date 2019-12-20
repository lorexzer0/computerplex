<?php 
class Cms5dfd5ca35113c561304214_46d3d446179f8410116115af38c9f4b0Class extends Cms\Classes\PageCode
{
public function onEnd()
{
    $this->page->title = $this->components['blogPost']->post->title; 
}
}
