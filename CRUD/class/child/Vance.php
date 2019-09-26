<?php
Class Vance extends Character
{
    public $image;

    public function __construct($role_name, $id, $name, $type, $health, $strength, $image)
    {
        parent::__construct($role_name, $id, $name, $type, $health, $strength);
        $this->setImage($image);
    }

    // Getters
        public function getImage()
        {
            return $this->image;
        }
        
    //Setters
        public function setImage($image)
        {
            $this->image = $image;
        }
}
?>