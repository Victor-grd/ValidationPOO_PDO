<?php
Class Max extends Character
{
    use Equipement;
    
    public $image;

    public function __construct($role_name, $id, $name, $type, $health, $strength, $image)
    {
        parent::__construct($role_name, $id, $name, $type, $health, $strength);
        $this->setImage($image);
        $this->addAttack();

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