<?php
class mainmodel extends CI_model
{
	public function encpswd($pass)
	{
		return password_hash($pass, PASSWORD_BCRYPT);
	}
	//Insert Registered Details
	public function inreg($a,$b)
	{
		$this->db->insert("login",$b);
		$loginid=$this->db->insert_id();
		$a['loginid']=$loginid;
	   $this->db->insert("register",$a);
	}
	
public function view()
	{
		$this->db->select('*');
		$this->db->join('login','login.id=reg.loginid','inner');
		$qry=$this->db->get("register");
        return $qry;
	}
	
   public function select($email,$pass)
	{
		$this->db->select('password');
		$this->db->from("login");
		$this->db->where("email",$email);
		$qry=$this->db->get()->row('password');
		return $this->verifypass($pass,$qry);
	}
	public function verifypass($pass)
	   {
         return password_hash($pass, PASSWORD_BCRYPT);
          
        }
	public function getuserid($email)
	{
		$this->db->select('id');
		$this->db->from("login");
		$this->db->where("email",$email);
		return $this->db->get()->row('id');
	}
	public function getuser($id)
	{
		$this->db->select('*');
		$this->db->from("login");
		$this->db->where("id",$id);
		return $this->db->get()->row();
	}

	//insert Airport Details
	public function airportmodel($a)
	{
		$this->db->insert("airport",$a);
	}
	public function flightdetails($a)
	{
		$this->db->insert("flightdetails",$a);
	}



	//notification


	//fetch data from flight table to notification adding form

	public function dataselect()
		{
			$this->db->select('*');
			$qry=$this->db->get("flightdetails");
			return $qry;

		}

	//insert notification by admin

	public function notification($n)
		{
		$this->db->insert("notification",$n);
			
		}

	//delete
	public function deletedate($d)
	{
		$this->db->where('depdate<',$d);
		$this->db->delete("flightdetails");
	}

	public function aviewflight()
	{
		$this->db->select('*');
		$qry=$this->db->get("flightdetails");
		return $qry;
	}
	public function uviewflight($dep,$arr,$depdate)
	{
		$this->db->select('*');
		$this->db->where("departure",$dep);
		$this->db->where("arrival",$arr);
		$this->db->where("depdate",$depdate);
		
		$qry=$this->db->get("flightdetails");
		return $qry;
	}

	public function viewflight($id)
	{
		$this->db->select('*');
		$this->db->where("id",$id);
		$qry=$this->db->get("flightdetails");
		return $qry;
	}
	public function updateflight($a,$id)
		{
		$this->db->select('*');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->update("flightdetails",$a);
		return $qry;
	}
}



?>
