<?php
require 'course_db.php';
class CourseTest extends \PHPUnit\Framework\TestCase{
    public function testAddcourse(){
        
        $add_course='cse110';
        $this-> assertEquals('cse110', $add_course);

    }
}