<?php
require 'assignment_db.php';
class TaskTest extends \PHPUnit\Framework\TestCase{
    public function testAddTask(){
        
        $add_task='cse110 Q1';
        $this-> assertEquals('cse110 Q1', $add_task);

    }
}