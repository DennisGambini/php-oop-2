<?php
trait Image {
    protected $image;

    function setImage($_image){
        $this->image = $_image;
    }
    function getImage() { 
        return $this->image;
    }
}


?>