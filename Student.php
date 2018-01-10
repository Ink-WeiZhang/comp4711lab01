<?php
/**
 * Created by PhpStorm.
 * User: Wei
 * Date: 1/10/2018
 * Time: 11:04 AM
 */

class Student
{

    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
}