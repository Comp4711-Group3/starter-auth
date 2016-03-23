<?php
/**
 * Created by PhpStorm.
 * User: Kevin
 * Date: 3/23/2016
 * Time: 11:13 AM
 */

class Users extends MY_Model{
    public function __construct() {
        parent::__construct('users', 'id');
    }
}