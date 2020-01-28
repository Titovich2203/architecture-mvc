<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
    class User
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
         * @ORM\Column(type="string") 
         */
        private $prenom;
        /** 
         * @ORM\Column(type="string") 
         */
        private $email;
        /** 
         * @ORM\Column(type="string") 
         */
        private $password;
        // ...
        /**
         * One user has many lieux. This is the inverse side.
         * @ORM\OneToMany(targetEntity="Lieu", mappedBy="user")
         */
        private $lieux;
        /**
         * Many Users have Many Roles.
         * @ORM\ManyToMany(targetEntity="Roles", inversedBy="users")
         * @ORM\JoinTable(name="users_roles")
         */
        private $roles;

        public function __contruct()
        {
            $this->lieux = new ArrayCollection();
            $this->roles = new ArrayCollection();
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
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getEmail()
        {
            return $this->email;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getPassword()
        {
            return $this->password;
        }

        public function setLieux($lieux)
        {
            $this->lieux = $lieux;
        }

        public function getLieux()
        {
            return $this->lieux;
        }

        public function setRoles($roles)
        {
            $this->roles = $roles;
        }

        public function getRoles()
        {
            return $this->roles;
        }
    }
    
?>