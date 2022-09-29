<?php

namespace App\Models\Planning;

class PlanningClass {

    public function __construct(
        private int $id_planning,
        private int $d1,
        private int $d2,
        private int $d3,
        private string $month,
        private int $year,
        private string $schedule,
        private int $id_place
    )
    {}


        /**
         * Get the value of id_planning
         */ 
        public function getId_planning()
        {
                return $this->id_planning;
        }

        /**
         * Get the value of d1
         */ 
        public function getD1()
        {
                return $this->d1;
        }

        /**
         * Get the value of d2
         */ 
        public function getD2()
        {
                return $this->d2;
        }

        /**
         * Get the value of d3
         */ 
        public function getD3()
        {
                return $this->d3;
        }

        /**
         * Get the value of month
         */ 
        public function getMonth()
        {
                return $this->month;
        }

        /**
         * Get the value of year
         */ 
        public function getYear()
        {
                return $this->year;
        }

        /**
         * Get the value of schedule
         */ 
        public function getSchedule()
        {
                return $this->schedule;
        }

        /**
         * Get the value of id_place
         */ 
        public function getId_place()
        {
                return $this->id_place;
        }
}