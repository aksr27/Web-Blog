<?php
class Signup_model extends CI_model{
 
	public function register_user($user){
	 
	$this->db->insert('signup', $user);
	 
	}

	public function email_check($email){
 
	$this->db->select('*');
	$this->db->from('signup');
	$this->db->where('email',$email);
	$query=$this->db->get();

	if($query->num_rows()>0){
	return false;
	}
	else{
		return true;
		} 
	}
 
}
?>