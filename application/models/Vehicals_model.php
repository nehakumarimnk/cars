<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');
class Vehicals_model extends CI_Model
{

    function createVehicals($formArray)
    {
        $this->db->insert('new_vehicals', $formArray); //insert into register(name.email, value(?,?));
    }

    function getAllVehicals()
    {
        // $this->db->order_by('v_name');
        return $this->db->get('new_vehicals')->result_array(); //select from userlogin;
    }

    function updateVehical($cid, $formArray)
    {
        $this->db->where('id', $cid);
        $this->db->update('new_vehicals', $formArray); //update users set name= ? where user_id =?;
    }

    function deleteVehical($cid)
    {
        $this->db->where('id', $cid); // Jisko delete krna hai, where ek query hai sql ka.. where check krta hai (here, id)
        $this->db->delete('new_vehicals'); //delete from userlogin table  where user_id;

    }

    public function getUserVehicals()
    {


        $this->db->select('new_vehicals.id AS cid');
        $this->db->select('new_vehicals.*');
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->join('new_vehicals', 'users.id = new_vehicals.user_id');
        $query =  $this->db->get()->result_array();
        return $query;
    }

    public function getSelectedVehicals($cid)
    {


        $this->db->select('new_vehicals.id AS cid');
        $this->db->select('new_vehicals.*');
        $this->db->select('users.*');
        $this->db->from('users');
        $this->db->join('new_vehicals', 'users.id = new_vehicals.user_id');
        $this->db->where('new_vehicals.id', $cid);
        $query =  $this->db->get()->result_array();
        return $query;
    }

    public function getMyAgencyVehicals($AgencyId)
    {


        // $this->db->get('new_vehicals')->result_array(); //select from userlogin;
        $this->db->where('user_id', $AgencyId);
        $query =  $this->db->get('new_vehicals')->result_array();
        return $query;
    }



    function createbookings($formArray)
    {
        $this->db->insert('bookings', $formArray); //insert into register(name.email, value(?,?));
    }

    public function getAgencyBookedVehicals($AgencyId)
    {


        $this->db->select('bookings.id AS ab_id');
        $this->db->select('bookings.*');
        $this->db->select('new_vehicals.*');
        $this->db->select('users.*');
        $this->db->from('bookings');
        $this->db->join('new_vehicals', 'bookings.car_id = new_vehicals.id');
        // $this->db->join('users', 'users.id = bookings.agency_id');
        $this->db->join('users', 'users.id = bookings.customer_id');

        $this->db->where('bookings.agency_id', $AgencyId);
        $query =  $this->db->get()->result_array();
        return $query;
    }

    public function getCustomersBookedVehicals($UserId)
    {


        $this->db->select('bookings.id AS bid');
        $this->db->select('bookings.*');
        $this->db->select('users.*');
        $this->db->select('new_vehicals.*');
        $this->db->from('users');
        // $this->db->join('bookings', 'users.id = bookings.customer_id');
        $this->db->join('bookings', 'users.id = bookings.agency_id');
        $this->db->join('new_vehicals', 'new_vehicals.user_id = bookings.agency_id');
        $this->db->where('bookings.customer_id', $UserId);
        $query =  $this->db->get()->result_array();
        return $query;
    }

}
