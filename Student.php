<?php
/**
 * Created by PhpStorm.
 * User: Wei
 * Date: 1/10/2018
 * Time: 11:04 AM
 */

/**
 * Class Student is a class which represents a bcit student.
 */
class Student
{

    /**
     * Student constructor.
     */
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /**
     * @param $which type of email
     * @param $address address of email
     */
    function add_email($which,$address) {
        $this->emails[$which] = $address;
    }

    /**
     * @param $grade grade score
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /**
     * @return float|int average score
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /**
     * @return string string to return
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}