<?php

namespace App\Models\Formations;

class FormationClass {
    
    public function __construct(
        private int $id,
        private string $title,
        private string $price,
        private string $content1,
        private string $content2,
        private string $content3,
        private string $content4,
        private string $content5,
        private string|null $content6,
        private int $id_sector
    )
    {}

        /**
         * Get the value of id
         */ 
        public function getId()
        {
                return $this->id;
        }

        /**
         * Get the value of title
         */ 
        public function getTitle()
        {
                return $this->title;
        }

        /**
         * Get the value of price
         */ 
        public function getPrice()
        {
                return $this->price;
        }

        /**
         * Get the value of content1
         */ 
        public function getContent1()
        {
                return $this->content1;
        }

        /**
         * Get the value of content2
         */ 
        public function getContent2()
        {
                return $this->content2;
        }

        /**
         * Get the value of content3
         */ 
        public function getContent3()
        {
                return $this->content3;
        }

        /**
         * Get the value of content4
         */ 
        public function getContent4()
        {
                return $this->content4;
        }

        /**
         * Get the value of content5
         */ 
        public function getContent5()
        {
                return $this->content5;
        }

        /**
         * Get the value of content6
         */ 
        public function getContent6()
        {
                return $this->content6;
        }

        /**
         * Get the value of id_sector
         */ 
        public function getId_sector()
        {
                return $this->id_sector;
        }
}