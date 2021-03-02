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

// 	//insert Airport Details
// 	public function airportmodel($a)
// 	{
// 		$this->db->insert("airport",$a);
// 	}
// 	//insert Airport Details
// public function airportmodel($a)
// {
// $this->db->insert("airport",$a);
// }

public function search($state)
{
$this->db->select('*');
$this->db->where("state",$state);
$qry=$this->db->get("airport");
return $qry;
}
//User view
public function reguser1()
{
$this->db->select('*');
$this->db->join('login','login.id=register.loginid','inner');
$qry=$this->db->get("register");
return $qry;
}
//User profile updation
public function regupdateform($id)

{
$this->db->select('*');
$qry=$this->db->join("login",'login.id=register.loginid','inner');
$qry=$this->db->where("register.loginid",$id);
$qry=$this->db->get("register");
return $qry;
}
public function regupdateform1($a,$b,$id)
{
        $this->db->select('*');
        $qry=$this->db->where("loginid",$id);
        $qry=$this->db->join('register','login.id=register.loginid','inner');
        $qry=$this->db->update("register",$a);
        $qry=$this->db->where("login.id",$id);
        $qry=$this->db->update("login",$b);
        return $qry;


}
//airprt details view
public function airportdetails1()
{

$this->db->select('*');
$qry=$this->db->get("airport");
return $qry;

}
//airport delete
public function deleteairport($id)
{
$this->db->select('*');
$this->db->where('id',$id);
$this->db->delete("airport");
}

//airport update
public function airportupdateform($id)

{
$this->db->select('*');
$this->db->where("id",$id);
$qry=$this->db->get("airport");
return $qry;
}
public function airportupdateform1 ($a,$id)
{
        $this->db->select('*');
        $this->db->where("id",$id);
        $qry=$this->db->update("airport",$a);
        return $qry;


}

//kripa

//insert flight details

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
public function deleteflight($id)
{
$this->db->where('id',$id);
$this->db->delete("flightdetails");
}

//book ticket select details of flight and user

public function bookflightdetails($id)
{
		$this->db->select('*');
		$qry=$this->db->where("id",$id);
		$qry=$this->db->get("flightdetails");
		return $qry;
}
public function bookuserdetails($sid)
{
		$this->db->select('*');
		$qry=$this->db->where("loginid",$sid);
		$this->db->join('login','login.id=register.loginid','inner');
		$qry=$this->db->get("register");
		return $qry;
}
public function bookinginsert($a)
{
	$this->db->insert("ticketbooking",$a);

}
public function updatefirst($fid)
{
	$this->db->set('afirst','afirst-1',FALSE);
	$this->db->where('id',$fid);
	$this->db->update('flightdetails');
}

public function updateeconomic($fid)
{
	$this->db->set('aeconomic','aeconomic-1',FALSE);
	$this->db->where('id',$fid);
	$this->db->update('flightdetails');
}

public function updatebuisness($fid)
{
	$this->db->set('abuisness','abuisness-1',FALSE);
	$this->db->where('id',$fid);
	$this->db->update('flightdetails');
}
//view booking by admin
public function viewbooking()
{
	$this->db->select('*');
		$this->db->join('flightdetails','ticketbooking.flightid=flightdetails.id','inner');
		$this->db->join('register','ticketbooking.userid=register.id','inner');
		$qry=$this->db->get("ticketbooking");
		return $qry;


}

//view booking by user
public function viewbookinguser($sid)
{
	$this->db->select('*');
	$this->db->where('loginid',$sid);
		$this->db->join('flightdetails','ticketbooking.flightid=flightdetails.id','inner');
		$this->db->join('register','ticketbooking.userid=register.loginid','inner');
		$qry=$this->db->get("ticketbooking");
		return $qry;


}
public function viewnotif()
{
	$this->db->select('*');
		$this->db->join('flightdetails','notification.fid=flightdetails.id','inner');
		$qry=$this->db->get("notification");
		return $qry;


}
public function statusupdate($id)
{
	$this->db->set('status','1');
	$this->db->where('id',$id);
	$this->db->update('flightdetails');
}
//view notification
public function notifview2()
	{
		$this->db->select('*');
		$this->db->join('flightdetails','flightdetails.id=notification.fid','inner');
		$qry=$this->db->get("notification");
		return $qry;
	}
	//delete notification
public function deletenotif($id)
{
$this->db->select('*');
$this->db->where('id',$id);
$this->db->delete("notification");
}

//ticket 

//view ticket by user 
public function viewbookingusert($sid)
{
	$this->db->select('*');
	$this->db->where('loginid',$sid);
		$this->db->join('flightdetails','ticketbooking.flightid=flightdetails.id','inner');
		$this->db->join('register','ticketbooking.userid=register.loginid','inner');
		$qry=$this->db->get("ticketbooking");
		return $qry;


}

public function ticketgenerate($sid,$id)
{
	$this->db->select('*');
	$this->db->where('loginid',$sid);
	$this->db->where('bid',$id);

		$this->db->join('flightdetails','ticketbooking.flightid=flightdetails.id','inner');
		$this->db->join('register','ticketbooking.userid=register.loginid','inner');
		$qry=$this->db->get("ticketbooking");
		return $qry;


}
//insert Airport Details
	public function airportmodel($a)
	{
		$this->db->insert("airport",$a);
	}



}

	
?>
