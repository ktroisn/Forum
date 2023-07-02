<?php
    namespace Model\Entities;

    use App\Entity;

    final class Message extends Entity{

        private $id;
        private $messagetext;
        private $publication_date;
        private $user;
        private $topic;
       

        public function __construct($data){         
            $this->hydrate($data);        
        }
 
        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of username
         */ 
        public function getMessageText()
        {
                return $this->messagetext;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */ 
        public function setMessageText($messagetext)
        {
                $this->messagetext = $messagetext;

                return $this;
        }

        /**
         * Get the value of password
         */ 
        public function getPublication()
        {
                return $this->publication_date;
        }

        /**
         * Set the value of password
         *
         * @return  self
         */ 
        public function setPublication($publication_date)
        {
                $this->publication_date = $publication_date;

                return $this;
        }

        /**
         * Get the value of registration
         */ 
        public function getUser()
        {
                return $this->user;
        }

        /**
         * Set the value of registration
         *
         * @return  self
         */ 
        public function setUser($user)
        {
                $this->user = $user;

                return $this;
        }

        /**
         * Get the value of role
         */ 
        public function getTopic()
        {
                return $this->topic;
        }

        /**
         * Set the value of role
         *
         * @return  self
         */ 
        public function setTopic($topic)
        {
                $this->topic = $topic;

                return $this;
        }


    }
