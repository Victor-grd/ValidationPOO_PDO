<?php
abstract  class Character
{

    public $name;
    public $role;
    public $health;
    public $strength;
    
    public function __construct($role_name, $id, $name, $role, $health, $strength)
    {
        $this->setRoleName($role_name);
        $this->setId($id);
        $this->setName($name);
        $this->setrole($role);
        $this->setHealth($health);
        $this->setStrength($strength);
    }
    
    // Statics
        public static function getCharacters() {
            $connec = new PDO('mysql:dbname='.DBNAME.';charset='.CHARSET,USERNAME,PASSWORD);
            $sql = "SELECT character.id AS character_id, name, health, strength, role_id, role, image FROM `character` RIGHT JOIN role ON role_id = role.id;";
            $characters = $connec->prepare($sql);
            $characters->execute();
            $characters = $characters->fetchAll();
            return $characters;
        }

        public static function getRoles() {
            $sql = "SELECT * FROM `role`;";
            $connec = new PDO('mysql:dbname='.DBNAME.';charset='.CHARSET,USERNAME,PASSWORD);
            $role = $connec->prepare($sql);
            $role->execute();
            $role = $role->fetchAll();
            // var_dump($role);die;
            return $role;
        }

        public static function addCharacter(string $name, int $health, int $strength, int $role) {
            // var_dump($name, $role, $health, $strength);die;  
            $sql = "INSERT INTO `character` (name, health, strength, role_id) VALUES (:name, :health, :strength, :role)";
            $connec = new PDO('mysql:dbname='.DBNAME.';charset='.CHARSET,USERNAME,PASSWORD);
            $insert = $connec->prepare($sql);
            $insert->execute([
                ":name" => $name,
                ":health" => $health,
                ":strength" => $strength,
                ":role" => $role,
            ]);
        }

        public static function deleteCharacter(int $id) {
            $sql = "DELETE FROM `character` WHERE id =  :id";
            $connec = new PDO('mysql:dbname='.DBNAME.';charset='.CHARSET,USERNAME,PASSWORD);
            $delete = $connec->prepare($sql);
            $delete->execute([
                ":id" => $_POST['id'],
            ]);
        }
    // Getters
        public function getRole()
        {
            return $this->role;
        }
        public function getId()
        {
            return $this->id;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getRoleName()
        {
            return $this->role_name;
        }
        public function getHealth()
        {
            return $this->health;
        }
        public function getStrength()
        {
            return $this->strength;
        }

    // Setters
        public function setRole($role)
        {
            $this->role = $role;
        }
        public function setId($id)
        {
            $this->id = $id;
        }
        public function setName($name)
        {
            $this->name = $name;
        }
        public function setRoleName($role_name)
        {
            $this->role_name = $role_name;
        }
        public function setHealth($health)
        {
            $this->health = $health;
        }
        public function setStrength($strength)
        {
            $this->strength = $strength;
        }
    // Methodes
        public function attaque($cible)
        {
            $strength = $this->strength;
            $random = rand(0,5);
            if ($random == 0) {
                echo $this->name . " a raté son coup <br>";
            } else {
                $strength += $random;
                echo '<span>' . $this->name . ' attaque ' . $cible->name . '</span>';
                echo '<span>' . $cible->health . ' - ' . $strength . '</span>';
                $cible->health -= $strength;
                echo '<span>' . $cible->name . ' : ' . $cible->health . 'pv </span>';
            }
        }

        public function fight($cible)
        {
            $this->attaque($cible);
            echo '<hr>';
            if ($cible->health <= 0) {
                echo '<span>' . $this->name . ' a gagné </span>';
                // echo '<span class="winner"> Winner is ' . $this->name . '</span>';

                exit;
            }
            $cible->attaque($this);
            echo '<hr>';
            if ($this->health <= 0) {
                echo '<span>' . $cible->name . ' a gagné </span>';
                // echo '<span class="winner"> Winner is ' . $cible->name . '</span>';
                exit;
            } else {
                $this->fight($cible);
            }
    }
}
