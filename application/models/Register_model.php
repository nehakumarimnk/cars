<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Register_model extends CI_Model
{

    function createUser($formArray)
    {
        $this->db->insert('users', $formArray); //insert into register(name.email, value(?,?));
    }

}
