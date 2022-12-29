<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rotary extends CI_Controller {
	
function __construct() {
parent::__construct();

// Load url helper
$this->load->helper(array('url', 'file', 'form', 'html'));
// Load model page
$this->load->model('Model');
//pagination
 $this->load->library("pagination"); 
//Template
$this->load->library('template');
}

public function index() {

 $this->load->view('login');
}

public function intro(){

	$data=$this->template->display();
	$this->load->view('intro');
}

public function dashboard(){

	$data=$this->template->display();
	$this->load->view('dashboard');
}

public function dashboard_institute(){
		
        $data["institute_list"] = $this->Model->institute_fetch_data();
        $data1["count"] = $this->db->count_all("institution");
        $data2 = $data + $data1;
        $data3=$this->template->display();
       $this->load->view("dashboard_institute", $data2);

}

public function institute(){
	
        $data["institute_list"] = $this->Model->institute_fetch_data();
        $data1=$this->template->display();
       $this->load->view("institute", $data);

}


public function trustee(){

        $data["trustee_list"] = $this->Model->trustee_fetch_data();
        $data1=$this->template->display();
       $this->load->view("trustee", $data);
}

public function guardian(){
	

        $data["guardian_list"] = $this->Model->guardian_fetch_data();
        $data1=$this->template->display();
       $this->load->view("guardian", $data);
}

public function rotarians(){

        $data["rotarian_list"] = $this->Model->rotarian_fetch_data();
        $data1=$this->template->display();
       $this->load->view("rotarians", $data);

}

public function rotractors(){
	
        $data["rotractors_list"] = $this->Model->fetch_data();
        $data1=$this->template->display();
       $this->load->view("rotractors", $data);
}

public function rotractors_register(){

	$data=$this->template->display();
	$this->load->view('rotractors_register');
}

public function participants(){

	
        $data["participants_list"] = $this->Model->kowsalya();
        $data1=$this->template->display();
       $this->load->view("participants", $data);
}

public function institution_register(){

	$data=$this->template->display();
	$this->load->view('institution_register');
}

public function trustee_register(){
	
   $data = array();
	$data["institute_list"] = $this->Model->dashboard_institute_fetch_data();
	$data1=$this->template->display();
	$this->load->view('trustee_register',$data);
}

public function guardian_register(){
    
	$data = array();
	$data["institute_list"] = $this->Model->dashboard_institute_fetch_data();
	$data1=$this->template->display();
	$this->load->view('guardian_register', $data);
}


public function participants_register(){

	$data = array();
	$data["institute_list"] = $this->Model->dashboard_institute_fetch_data();
	$data1 = array();
	$data1["disability_list"] = $this->Model->event_fetch_data();
	$data2 = array();
	$data2["events_list"] = $this->Model->fetch_events_data();
    $data3 = array();
    $data3["age_list"] = $this->Model->capture_events();

    if($_POST)

	{
		
		$a 			=	$this->input->post('disability[]');
	$disability =	implode(",", $a);
	$b 			=  	$this->input->post('events[]');
	$event 		= 	implode(",", $b);

$data = array(

						'institute' 		=> $this->input->post('institute_list'),
						'picture' 			=> $this->input->post('picture'),
						'name' 				=> $this->input->post('name'),
						'age' 				=> $this->input->post('age_category'),
						'gender' 			=> $this->input->post('gender'),
						'disability' 		=> $disability,
						'events' 			=> $event,
						'address'    		=> $this->input->post('address'),
						'special_needs' 	=> $this->input->post('special_needs'),
				);
	  
	  
	$this->Model->save_participants($data);
	redirect( SITE_URL.'Rotary/participants');
}
	
	$data5=$this->template->display();
	$data4 = $data3 + $data2 + $data1 + $data;
	$this->load->view('participants_register', $data4);

}

public function register(){

$a = $_POST['disability_id'];
$o = $_POST['age_id'];
$b = $this->Model->list_data($a);
$p = $this->Model->age_list_data($o);
$d = json_decode(json_encode($b), True);
$q = json_decode(json_encode($p), True);
for($i = 0; $i < count($q); $i++)
{
  $r = $q;
  $s = array_map('current', $r);
  $h = explode(",", $s[$i]);

  for($j = 0; $j < count($d); $j++)
  {
  	$f = $d;
  	$g = array_map('current', $d);
  	$x = implode(",",$g);
  	$t = explode(",", $x);
  	$u = array_intersect($t, $h);
  	$v = implode(",", $u);
  }
}
$w = $v;
 $l = $this->Model->listing_data($w);
 if($l == '')
{
	echo "NO EVENTS";
}
else{

   foreach($l as $row)
{
   $m = $row->id;
   $n = $row->event_name;
  echo ("<label><input type='checkbox' name='events[]' value='".$m."'>".$n."</label><br>");
}
}
}

public function participants_view(){
	
	$pid = $this->uri->segment(3);
	$row = $this->Model->view_participant($pid);
    $a = $row->disability;
    $b = $this->Model->disability($a);
	$data1["dlist"] = $b;
	$data["plist"] = $row;
	$c = $row->events;
	$d = $this->Model->events($c);
	$data2["elist"] = $d;
	$e = $row->age;
	$f = $this->Model->age($e);
	$data3["alist"] = $f;
	$g = $row->institute;
	$h = $this->Model->educational_institute($g);
	$data4["ilist"] = $h;
	$data5 = $data4 + $data3 + $data2 + $data1 + $data;
	$data6=$this->template->display();
	$this->load->view('participants_view', $data5);
}

public function participants_edit(){

	$pid = $this->uri->segment(3);
	$row = $this->Model->view_participant($pid);
	$a = $row->disability;
    $b = $this->Model->disability($a);
	$data1["dlist"] = $b;    
 	$e = $data1["dlist"];
 	if($e == "")
 	{
 		$data7["games"] = 0;
 	}
 	else
 	{
 	$f = $e[0]->events;
 	$g = $this->Model->events($f);
 	$data7["games"] = $g;
 	}

	$data["plist"] = $row;
    $c = $row->events;
	$d = $this->Model->events($c);
	$data2["elist"] = $d;
	$data3 = array();
	$data3["alist"] = $this->Model->age_data();
	$data4 = array();
	$data4["ilist"] = $this->Model->dashboard_institute_fetch_data();
	$data5 = array();
	$data5["disability_list"] = $this->Model->event_fetch_data();
	$data6 = array();
	$data6["events_list"] = $this->Model->fetch_events_data();


	if($_POST){

		$a 			=	$this->input->post('disability[]');
	    $disability =	implode(",", $a);
	    $b 			=  	$this->input->post('events[]');
	    $event 		= 	implode(",", $b);

		if(($this->input->post('picture')==''))
{
		
			$values['id'] 				= $this->input->post('id');
			$values['institute']		= $this->input->post('institute_list');
			$values['picture']  		= $this->input->post('photo');
			$values['name'] 			= $this->input->post('name');
			$values['age'] 				= $this->input->post('age_category');
			$values['gender'] 			= $this->input->post('gender');
			$values['disability'] 		= $disability;
			$values['events'] 			= $event;
			$values['address']          = $this->input->post('address');
			$values['special_needs'] 	= $this->input->post('special_needs');
	}

	

	else{

			$values['id'] 				= $this->input->post('id');
			$values['institute']		= $this->input->post('institute_list');
			$values['picture']  		= $this->input->post('picture');
			$values['name'] 			= $this->input->post('name');
			$values['age'] 				= $this->input->post('age_category');
			$values['gender'] 			= $this->input->post('gender');
			$values['disability'] 		= $disability;
			$values['events'] 			= $event;
			$values['address']          = $this->input->post('address');
			$values['special_needs'] 	= $this->input->post('special_needs');

	}		
			
			$this->Model->edit_participants($values);
			redirect( SITE_URL.'Rotary/participants');
	}
    $data8 = $data7 + $data6 + $data5 + $data4 + $data3 + $data2 + $data1 + $data;
    $data9=$this->template->display();
	$this->load->view('participants_edit', $data8);
}

public function institute_view(){

	$pid = $this->uri->segment(3);
	$row = $this->Model->view_institute($pid);
	$data["plist"] = $row;
	$rid = $this->uri->segment(3);
	$row1 = $this->Model->show_institute($rid);
	$data1["rlist"] = $row1;
	$did = $this->uri->segment(3);
	$row2 = $this->Model->visible_institute($did);
	$data2["dlist"] = $row2;
	$sid = $this->uri->segment(3);
	$row3 = $this->Model->apply_institute($sid);
	$data3["slist"] = $row3;
	$tid = $this->uri->segment(3);
	$row4 = $this->Model->get_institute($tid);
	$data4["tlist"] = $row4;
	$data5 = $data4 + $data3 + $data2 + $data1 + $data;
	$data6=$this->template->display();
	$this->load->view('institute_view', $data5);
}

public function trustee_view(){

	$pid = $this->uri->segment(3);
	$row = $this->Model->view_trustee($pid);
    $a = $row->instituteid;
	$row1 = $this->Model->view_institute($a);
	$data["plist"] = $row;
	$data1["ilist"] = $row1;
	$data2 = $data + $data1;
	$data3=$this->template->display();
	$this->load->view('trustee_view', $data2);
	
}

public function guardian_view(){
	
	$pid = $this->uri->segment(3);
	$row = $this->Model->view_guardian($pid);
	$a = $row->instituteid;
	$row1 = $this->Model->view_institute($a);
	$data["plist"] = $row;
	$data1["ilist"] = $row1;
	$data2 = $data1 + $data;
	$data3=$this->template->display();
	$this->load->view('guardian_view', $data2);
	
}

public function rotarians_register(){

	$data=$this->template->display();
	$this->load->view('rotarians_register');
	
}

public function events(){


        $data["results"] = $this->Model->events_fetch_data();
        $data1=$this->template->display();
       $this->load->view("events", $data);
}


function form_validation(){

	$data = array(

					'name' 		=> $this->input->post('name'),
					'picture' 	=> $this->input->post('picture'),
					'phno' 		=> $this->input->post('phno'),
					'gender' 	=> $this->input->post('gender'),
					'email' 	=> $this->input->post('email'),
					'password' 	=> $this->input->post('password'),
					'address' 	=> $this->input->post('address'),
				);
	
	$this->Model->save_rotarian($data);
	redirect( SITE_URL.'Rotary/rotarians');

}



function login_check(){
		
		
			$e=$this->input->post('email');
			$p=$this->input->post('password');
	
			$result = $this->Model->save_login($e,$p);
			
			if($result)

			{
				$session_data = array();

				foreach ($result as $row) 
			{
															
				$session_data = array(  
                          
                          'username'     =>     $row['email'],
                          'userpassword' =>  	$row['password'],
                          'userid'		 =>		$row['id'],
                     
                     ); 

			
			$this->session->set_userdata($session_data);
			redirect( SITE_URL.'Rotary/intro');
		
		}
			return true;

		}
			else
			{
		
		$data['error']="<center><h4 style='color:red'>Invalid login details</h4></center>";
			
			}	
		
			$data=$this->template->display();
			$this->load->view('login',@$data);

}


public function rotractors_form(){

	$data = array(

						'name' 		=> $this->input->post('name'),
						'picture' 	=> $this->input->post('picture'),
						'phno' 		=> $this->input->post('phno'),
						'gender' 	=> $this->input->post('gender'),
						'email' 	=> $this->input->post('email'),
						'password' 	=> $this->input->post('password'),
						'address' 	=> $this->input->post('address'),
				);
	  

	$this->Model->save_rotractor($data);
	redirect( SITE_URL.'Rotary/rotractors');

}

function rotractor_delete(){

	$id = $this->uri->segment(3);
	$this->Model->delete_rotractor($id);
	redirect( SITE_URL.'Rotary/rotractors');
}	

function rotarian_delete(){

	$id = $this->uri->segment(3);
	$this->Model->delete_rotarian($id);
	redirect( SITE_URL.'Rotary/rotarians');
}

public function rotarian_view(){

	$pid = $this->uri->segment(3);
	$row = $this->Model->view_rotarian($pid);
	$data["plist"] = $row;
	$rid = $this->uri->segment(3);
	$row1 = $this->Model->show_rotarian($rid);
	$data1["rlist"] = $row1;
	$did = $this->uri->segment(3);
	$row2 = $this->Model->visible_rotarian($did);
	$data2["dlist"] = $row2;
	$data3 = $data2 + $data1 + $data;
	$data4=$this->template->display();
	$this->load->view('rotarian_view', $data3);
}


 function rotractor_view(){

	$pid = $this->uri->segment(3);
	$row = $this->Model->view_rotractor($pid);
	$data["plist"] = $row;
	$rid = $this->uri->segment(3);
	$row1 = $this->Model->show_rotractor($rid);
	$data1["rlist"] = $row1;
	$did = $this->uri->segment(3);
	$row2 = $this->Model->visible_rotractor($did);
	$data2["dlist"] = $row2;
	$data3 = $data2 + $data1 + $data;
	$data4=$this->template->display();
	$this->load->view('rotractor_view', $data3);
}


 function rotarian_edit(){

	$id = $this->uri->segment(3);
	$row = $this->Model->view_rotarian($id);
	$data["plist"] = $row;

	
	if($_POST){
		
		if(empty($this->input->post('picture')))
{
			$values['picture'] = $this->input->post('photo');
			$values['id'] 		= $this->input->post('id');
			$values['name'] 	= $this->input->post('name');
			$values['phno'] 	= $this->input->post('phno');
			$values['gender'] 	= $this->input->post('gender');
			$values['email'] 	= $this->input->post('email');
			$values['password'] = $this->input->post('password');
			$values['address'] 	= $this->input->post('address');
			
}
else{
			$values['id'] 		= $this->input->post('id');
			$values['picture']  = $this->input->post('picture');
			$values['name'] 	= $this->input->post('name');
			$values['phno'] 	= $this->input->post('phno');
			$values['gender'] 	= $this->input->post('gender');
			$values['email'] 	= $this->input->post('email');
			$values['password'] = $this->input->post('password');
			$values['address'] 	= $this->input->post('address');
			
		}	
			$this->Model->edit_rotarian($values);
			redirect( SITE_URL.'Rotary/rotarians');
	}
	$data1=$this->template->display();
	$this->load->view('rotarian_edit', $data);
  }


function rotractor_edit(){

	$id = $this->uri->segment(3);
	$row = $this->Model->view_rotractor($id);
	$data["plist"] = $row;

	
	if($_POST){
		

			if(($this->input->post('picture')==''))
			{
				$values['picture'] = $this->input->post('photo');
				$values['id'] 		= $this->input->post('id');
			$values['name'] 	= $this->input->post('name');
			$values['phno'] 	= $this->input->post('phno');
			$values['gender'] 	= $this->input->post('gender');
			$values['email'] 	= $this->input->post('email');
			$values['password'] = $this->input->post('password');
			$values['address'] 	= $this->input->post('address');
			}

			else{
			$values['id'] 		= $this->input->post('id');
			$values['picture']  = $this->input->post('picture');
			$values['name'] 	= $this->input->post('name');
			$values['phno'] 	= $this->input->post('phno');
			$values['gender'] 	= $this->input->post('gender');
			$values['email'] 	= $this->input->post('email');
			$values['password'] = $this->input->post('password');
			$values['address'] 	= $this->input->post('address');
			}
			
			$this->Model->edit_rotractor($values);
			redirect( SITE_URL.'Rotary/rotractors');
	}
	$data1=$this->template->display();
	$this->load->view('rotractor_edit', $data);
  }


public function trustee_insert() 
{
 		$a = $this->input->post( 'name' );
   		$b = $this->input->post( 'name1' );
   		$c = $this->input->post( 'name2' );
   		$d = $this->input->post('institute_list');
    if ( ! empty($a) && ! empty($b) && ! empty($c) ) 
    {
        foreach ($a as $key => $value ) 
        {
            $data['name'] = $value;
            $data['email'] = $c[$key];
            $data['contactno'] = $b[$key];
            $data['instituteid'] = $d;
            $this->Model->add_trustee($data);
        }

    } 
        redirect( SITE_URL.'Rotary/trustee');


}

function trustee_delete(){

	$id = $this->uri->segment(3);
	$this->Model->delete_trustee($id);
	redirect( SITE_URL.'Rotary/trustee');
}

function trustee_edit(){

	$id = $this->uri->segment(3);
	$row = $this->Model->view_trustee($id);
	$row1 = $this->Model->dashboard_institute_fetch_data();
	$data["plist"] = $row;
	$data1["ilist"] = $row1;
	$data2 = $data + $data1;
	
	if($_POST){
		
			$values['sno'] 			= $this->input->post('sno');
			$values['name'] 		= $this->input->post('name');
			$values['contactno'] 	= $this->input->post('contactno');
			$values['email'] 		= $this->input->post('email');
			$values['instituteid']  = $this->input->post('institute_list');
			
			print_r($values);
			$this->Model->edit_trustee($values);
			redirect( SITE_URL.'Rotary/trustee');
	}
	$data3=$this->template->display();
	$this->load->view('trustee_edit', $data2);
  }



public function guardian_insert() 
{

		$a = $this->input->post( 'name' );
   		$b = $this->input->post( 'name1' );
   		$c = $this->input->post( 'name2' );
   		$d = $this->input->post('institute_list');
    if ( ! empty($a) && ! empty($b) && ! empty($c) ) 
    {
        foreach ($a as $key => $value ) 
        {
            $data['name'] = $value;
            $data['email'] = $c[$key];
            $data['contactno'] = $b[$key];
            $data['instituteid'] = $d;
            $this->Model->add_guardian($data);
        }

    } 
        redirect( SITE_URL.'Rotary/guardian');


}

function guardian_delete(){

	$id = $this->uri->segment(3);
	$this->Model->delete_guardian($id);
	redirect( SITE_URL.'Rotary/guardian');
}


function guardian_edit(){

	$id = $this->uri->segment(3);
	$row = $this->Model->view_guardian($id);
	$data["plist"] = $row;
	$row1 = $this->Model->dashboard_institute_fetch_data();
	$data1["ilist"] = $row1;
	$data2 = $data + $data1;

	
	if($_POST){
		
			$values['sno'] 			= $this->input->post('sno');
			$values['name'] 		= $this->input->post('name');
			$values['contactno'] 	= $this->input->post('contactno');
			$values['email'] 		= $this->input->post('email');
			$values['instituteid']	= $this->input->post('institute_list');
			
			
			$this->Model->edit_guardian($values);
			redirect( SITE_URL.'Rotary/guardian');
	}
	$data3=$this->template->display();
	$this->load->view('guardian_edit', $data2);
  }


public function institution_insert() 

{

$data = array(
						'i_name' 				=> $this->input->post('i_name'),
						'address' 			=> $this->input->post('address'),
						'zipcode' 			=> $this->input->post('zipcode'),
						'area'				=> $this->input->post('area'),
						'state' 			=> $this->input->post('state'),
						'city'              => $this->input->post('city'),
						'phoneno' 	        => $this->input->post('phoneno'),
						'landline' 	        => $this->input->post('landline'),
						'registrationid' 	=> $this->input->post('registerationid'),
						'email' 			=> $this->input->post('email'),
						'website' 			=> $this->input->post('website'),
				);
	
	$this->db->insert('institution',$data);
$recordId = $this->db->insert_id();


		$a = $this->input->post( 'name' );
   		$b = $this->input->post( 'name1' );
   		$c = $this->input->post( 'name2' );
   		$d = $recordId;


    if ( ! empty($a) && ! empty($b) && ! empty($c) && ! empty($d) ) 
    {
        foreach ($a as $key => $value ) 
        {
            $data1['name'] = $value;
            $data1['email'] = $c[$key];
            $data1['contactno'] = $b[$key];
            $data1['instituteid'] = $d;
            $this->Model->add_trustee($data1);
        }

    }

        	$a = $this->input->post( 'name3' );
   		$b = $this->input->post( 'name4' );
   		$c = $this->input->post( 'name5' );
   		$d = $recordId;
    if ( ! empty($a) && ! empty($b) && ! empty($c) ) 
    {
        foreach ($a as $key => $value ) 
        {
            $data2['name'] = $value;
            $data2['email'] = $c[$key];
            $data2['contactno'] = $b[$key];
            $data2['instituteid'] = $d;
            $this->Model->add_guardian($data2);
        }

    }
	redirect( SITE_URL.'Rotary/institute');

}

function institute_delete(){

	$id = $this->uri->segment(3);
	$this->Model->delete_institute($id);
	redirect( SITE_URL.'Rotary/institute');
}

function institute_edit(){

	$id = $this->uri->segment(3);
	$row = $this->Model->view_institute($id);
	$data["plist"] = $row;

	
	if($_POST){
		
			$values['sno'] 				= $this->input->post('sno');
			$values['name'] 			= $this->input->post('i_name');
			$values['address'] 			= $this->input->post('address');
			$values['zipcode'] 			= $this->input->post('zipcode');
			$values['area']				= $this->input->post('area');
			$values['state'] 			= $this->input->post('state');
			$values['city'] 			= $this->input->post('city');
			$values['phoneno'] 			= $this->input->post('phoneno');
			$values['landline'] 		= $this->input->post('landline');
			$values['registrationid'] 	= $this->input->post('registrationid');
			$values['email'] 			= $this->input->post('email');
			$values['website'] 			= $this->input->post('website');
			
	
			$this->Model->edit_institute($values);
			redirect( SITE_URL.'Rotary/institute');
	}
	$data1=$this->template->display();
	$this->load->view('institute_edit', $data);
  }

 public function assign(){
 
		$data = array();
		$data["list_assign"] = $this->Model->fetch_data_1();
		$pid = $this->uri->segment(3);

		if($_POST){

			$a = $this->input->post('rid');
					
		if(count($a) == 0)
		{

			$data['error']="<center><h4 style='color:red'>When you select Rotractors then only it assign !!!!</h4><h2 style='color:Blue'>GO BACK</h2></center>";
			$this->load->view('assign',$data);

		}
		else
		{
			$c = $this->input->post('id');
		for($i = 0; $i < count($a); $i++)
		{
		$data = array(

			'rotarian_id' => $c,
		);
		$this->db->where('id', $a[$i]);
		$this->db->update('rotractors', $data);
	
}
	

			redirect( SITE_URL.'Rotary/rotarians');
		}
	}
		$data1=$this->template->display();
		$this->load->view('assign',$data, $pid);
	
}
 
 function assign_institute(){

		$data = array();
		$data["list_assign"] = $this->Model->institute_fetch_data_1();

		
		if($_POST){

			$a = $this->input->post('rid');
			

			if(count($a) == 0)
		{

			$data['error']="<center><h4 style='color:red'>When you select Institute then only it assign  !!!!</h4><h2 style='color:Blue'>GO BACK</h2></center>";
			$this->load->view('assign_institute',$data);

		}

		else{


				$c = $this->input->post('id');
				$d = $this->input->post('did');



			for($i = 0; $i < count($a); $i++)
			{

				$data = array(

						'rotractor_id' => $c,
						'rotarian_id'  => $d,
				);
				$this->db->where('sno', $a[$i]);
				$this->db->update("institution", $data);
			}
		
			redirect( SITE_URL.'Rotary/assign');
		}

}
		$data1=$this->template->display();
		$this->load->view('assign_institute', $data);

}


function participants_delete(){

	$id = $this->uri->segment(3);
	$this->Model->delete_participant($id);
	redirect( SITE_URL.'Rotary/participants');
}

function dashboard_participant(){

	
        $data['participant_list'] = $this->Model->dashboard_events();
        $data1["elist"] = $this->Model->fetch_events_data(); 
        $data2 = $data + $data1 ;
        $data3=$this->template->display();
       $this->load->view("dashboard_participant", $data2);
}

function dashboard_events(){

        $data["results"] = $this->Model->events_fetch_data();
        $data1=$this->template->display();
       $this->load->view("dashboard_events", $data);
    
}

public function log_out()
    {
        $this->session->sess_destroy();
        redirect(SITE_URL.'Rotary/index');
    }

public function a()
{
	        
        $this->load->view('a');
}


    function uploadData()
    {
        $this->Model->uploadData();
        redirect(SITE_URL.'Rotary/a');
    }

public function participants_attendance()
{
		$id = $this->uri->segment(3);
		$data['participants_list'] = $this->Model->institute_participant($id);
		$data1=$this->template->display();
       $this->load->view("participants_attendance", $data);

}

public function attendance()
{

	$id = $_POST['attendance'];
	$attendence = $_POST['id'];

			$values['id'] 				= $id;
			$values['attendence'] 			= $attendence;

	 $this->Model->present($values);
       

}


}
?>