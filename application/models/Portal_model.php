<?php
class Portal_model extends CI_Model
{

    function __construct()
    {
        $this->load->database();
    }

    function get_login_msg()
    {
        $query = $this->db->get('portal');
        if ($query->result()) {
            $msg = $query->result()[0]->login_msg;
        }

        if (empty($msg)) {
            //if not in database use language string welcome_message
            $msg = $this->lang->line('gp_welcome_message');
        }

        return $msg;
    }
}