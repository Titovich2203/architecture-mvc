<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="roles")
 */
    class Roles
    {
        /** 
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         */
        private $id;
        /** 
         * @ORM\Column(type="string") 
         */
        private $nom;
        /**
         * Many Roles have Many Users.
         * @ORM\ManyToMany(targetEntity="User", mappedBy="roles")
         */
        private $users;

        public function __contruct()
        {
            $this->users = new ArrayCollection();
        }
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function getNom()
        {
            return $this->nom;
        }
        public function setUsers($users)
        {
            $this->users = $users;
        }

        public function getUsers()
        {
            return $this->users;
        }

    }
    
?>