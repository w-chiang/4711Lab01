<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author William
 */
class Student {
    #Student constructor
    function __construct(){
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    #appends an email address and its type to the $emails array
    function add_email($which, $address) { 
        $this->emails[$which] = $address;
    }
    
    #appends a grade to the $grades array
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    #computes the average of all grades in the $grades array
    function average() {
        $total = 0;
        foreach( $this->grades as $value){
            $total += $value;
        }
        return $total/count($this->grades);
    }
    
    #puts together and prints the Student's record
    function toString() {
        $result = $this->first_name .''. $this->surname;
        $result .='('.$this->average().")\n";
        foreach($this->emails as $which=>$what) {
            $result .=$which .':'. $what. "\n";
        }
        $result .="\n";
        return '<pre>'.$result.'</pre>';
    }
}
