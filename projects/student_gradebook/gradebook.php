<?php
class Gradebook {
    protected $courses = array();

    public function addCourse( $course ) {
        $this->courses[] = $course;
    }

    public function getCourses() {
        return $this->courses;
    }

    public function getAverageGrade() {
        $total = 0;
        $count = 0;
        foreach ( $this->courses as $course ) {
            $total += $course->getAverageGrade();
            $count++;
        }
        return $count > 0 ? $total / $count : 0;
    }
}
