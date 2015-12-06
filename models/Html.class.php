<?php
class Html
{
    /** @var string  */
    private $content = "";
    /** @var string  */
    private $css = "";
    /** @var string */
    private $script = "";
    /** @var string  */
    private $verticalMenu = "";

    /**
     * @param $new
     */
    public function setContent($new){
        $this->content = $new;
    }

    /**
     * @param $new
     */
    public function addContent($new){
        $this->content .= $new;
    }

    /**
     * @return string
     */
    public function getContent(){
        return $this->content;
    }

    /**
     * @param $new
     */
    public function addCss($new){
        $this->css .= $new;
    }

    /**
     * @return string
     */
    public function getCss(){
        return $this->css;
    }

    public function addScript($new){
        $this->script .= $new;
    }
    public function getScripts(){
        return $this->script;
    }
    public function addVerticalMenu($new){
        $this->verticalMenu = $new;
    }
    public function getVerticalMenu(){
        return $this->verticalMenu;
    }
}