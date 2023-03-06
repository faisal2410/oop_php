<?php
    class Job {
        private $id;
        private $title;
        private $location;
        private $description;
        private $requirements;

        public function __construct($id, $title, $location, $description, $requirements) {
            $this->id = $id;
            $this->title = $title;
            $this->location = $location;
            $this->description = $description;
            $this->requirements = $requirements;
        }

        public function getId() {
            return $this->id;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getLocation() {
            return $this->location;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getRequirements() {
            return $this->requirements;
        }

        public static function getAllJobs() {
            $jobs = array(
                new Job(1, 'Software Developer', 'San Francisco, CA', 'Develop software', 'Bachelor\'s degree in Computer Science'),
                new Job(2, 'Web Designer', 'Los Angeles, CA', 'Design websites', 'Bachelor\'s degree in Graphic Design'),
                new Job(3, 'Sales Manager', 'New York, NY', 'Manage sales team', 'Bachelor\'s degree in Business Administration')
            );
            return $jobs;
        }

        public static function getJobById($id) {
            $jobs = self::getAllJobs();
            foreach ($jobs as $job) {
                if ($job->getId() == $id) {
                    return $job;
                }
            }
            return null;
        }
    }

