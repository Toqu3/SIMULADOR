<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class M_Home extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    /*
     * REGISTRO
     */
    public function getByEmail($email) {
        $this->db->where('estado', '1');
        $this->db->where('email', $email);
        $query = $this->db->get('Usuario');
        return $query->result();
    }

    /*
     * LOGIN
     */
    public function signIn($email) {
        $sql = "
				SELECT 	*
				FROM Usuario
				WHERE email = '".$email."' AND (estado = '1' or estado= '2' )
		";
        $query = $this->db->query($sql);
        return $query->result();
    }


}