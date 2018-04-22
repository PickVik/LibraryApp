<?php

class books{
    
    function __construct($id, $title, $ISBN, $price, $year_published, $current_user) {
        $this->id = $id;
        $this->title = $title;
        $this->ISBN = $ISBN;
        $this->price = $price;
        $this->year_published = $year_published;
        $this->current_user= $current_user;
        
    }
    function get_id() {
        return $this->id;
    }

    function get_title() {
        return $this->title;
    }

    function get_ISBN() {
        return $this->ISBN;
    }

    function get_price() {
        return $this->price;
    }

    function get_year_published() {
        return $this->year_published;
    }

    function get_current_user() {
        return $this->current_user;
    }

    function set_id($id) {
        $this->id = $id;
    }

    function set_title($title) {
        $this->title = $title;
    }

