<?php

class Model extends CI_Model {

    public function save_rotarian($data)
    {    	
    		$this->db->insert('rotarians', $data);
    }

  public function save_rotractor($data)
    {
    	
    		$this->db->insert('rotractors', $data);
    	
    }

public function save_login($e,$p)
    {
    	$this->db->select("*");
    	$this->db->from("login");
    	$this->db->where('email', $e);
    	$this->db->where('password', $p);
    	$query = $this->db->get();
    	return $query->result_array();
    	
    }


public function fetch_data() {
 		
        $query = $this->db->get("rotractors"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }


function fetch_data_1(){
	
	$this->db->from("rotractors");
	$query = $this->db->get();
	return $query->result_array();
}



function event_fetch_data(){

	$this->db->select("*");
	$this->db->from("disability");
	$query = $this->db->get();
	return $query->result_array();

}


public function rotarian_fetch_data() {
 		
        $query = $this->db->get("rotarians"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }

function delete_rotractor($id){
	$this->db->where('id', $id);
	$this->db->delete("rotractors");
}

function delete_rotarian($id){
	$this->db->where('id', $id);
	$this->db->delete("rotarians");
}


function view_rotarian($id){

	$this->db->where('id', $id);
	$this->db->from("rotarians");
	$query = $this->db->get();
	return $query->row();
}

function view_rotractor($id){
	$this->db->where('id', $id);
	$query = $this->db->get("rotractors");
	return $query->row();
}


function edit_participants($values){

	$data = array(

			'institute' 	  => $values['institute'],
			'picture'   	  => $values['picture'],
			'name'   		  => $values['name'],
			'age'    		  => $values['age'],
			'gender'   		  => $values['gender'],
			'disability'   	  => $values['disability'],
			'events'  		  => $values['events'],
			'special_needs'   => $values['special_needs'],
			'address'		  => $values['address'],
	);
	$this->db->where('id', $values['id']);
	$this->db->update('participants', $data);
	

	return $this->db->affected_rows();
}

 function edit_rotarian($values){

	$data = array(
			'name'   	=> $values['name'],
			'picture'   => $values['picture'],
			'phno'    	=> $values['phno'],
			'gender'   	=> $values['gender'],
			'email'   	=> $values['email'],
			'password'  => $values['password'],
			'address'   => $values['address']
	);
	$this->db->where('id', $values['id']);
	$this->db->update('rotarians', $data);
	

	return $this->db->affected_rows();
}


 function edit_rotractor($values){

	$data = array(
			'name'   	=> $values['name'],
			'picture'   => $values['picture'],
			'phno'    	=> $values['phno'],
			'gender'   	=> $values['gender'],
			'email'   	=> $values['email'],
			'password'  => $values['password'],
			'address'   => $values['address']
	);
	$this->db->where('id', $values['id']);
	$this->db->update('rotractors', $data);
	

	return $this->db->affected_rows();
}



public function trustee_fetch_data() {
 	
        $query = $this->db->get("trustee"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }


function view_trustee($id){
	$this->db->where('sno', $id);
	$query = $this->db->get("trustee");
	return $query->row();
}

function delete_trustee($id){
	$this->db->where('sno', $id);
	$this->db->delete("trustee");
}

 function edit_trustee($values){

	$data = array(
			'name'   	    => $values['name'],
			'contactno'    	=> $values['contactno'],
			'email'   	    => $values['email'],
			'instituteid'   => $values['instituteid'],
	);
	$this->db->where('sno', $values['sno']);
	$this->db->update('trustee', $data);
	

	return $this->db->affected_rows();
}



public function guardian_fetch_data() {
 		
        $query = $this->db->get("gaurdian"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }

function view_guardian($id){
	$this->db->where('sno', $id);
	$query = $this->db->get("gaurdian");
	return $query->row();
}

function delete_guardian($id){
	$this->db->where('sno', $id);
	$this->db->delete("gaurdian");
}

function edit_guardian($values){

	$data = array(
			'name'   		=> $values['name'],
			'contactno'    	=> $values['contactno'],
			'email'   		=> $values['email'],
			'instituteid'	=> $values['instituteid'],
	);
	$this->db->where('sno', $values['sno']);
	$this->db->update('gaurdian', $data);
	

	return $this->db->affected_rows();
}

function insert_institution($data)
  {
  	
  	$this->db->insert('institution', $data);
  }


public function institute_fetch_data() {
 		
        $query = $this->db->get("institution"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }


function institute_fetch_data_1(){
	$this->db->select("*");
	$this->db->from("institution");
	$query = $this->db->get();
	return $query->result_array();
}

function delete_institute($id){
	$this->db->where('sno', $id);
	$this->db->delete("institution");
}

function view_institute($id){
	$this->db->where('sno', $id);
	$query = $this->db->get("institution");
	return $query->row();
}


function edit_institute($values){

	$data = array(

			'name'   			=> $values['name'],
			'address'			=> $values['address'],
			'zipcode'			=> $values['zipcode'],
			'area'				=> $values['area'],
			'state'				=> $values['state'],
			'city'				=> $values['city'],
			'phoneno'    		=> $values['phoneno'],
			'landline'			=> $values['landline'],
			'registrationid'	=> $values['registrationid'],
			'email'   			=> $values['email'],
			'website'			=> $values['website'],
	);
	$this->db->where('sno', $values['sno']);
	$this->db->update('institution', $data);
	

	return $this->db->affected_rows();
}

function add_trustee($data)
{
   if ( ! empty($data))
   {
      $this->db->insert('trustee', $data);
   }
}

function add_guardian($data)
{
   if ( ! empty($data))
   {
      $this->db->insert('gaurdian', $data);
   }
}
function show_rotractor($id)
{
 
   $this->db->from("rotractors");
   $this->db->join("rotarians", 'rotarians.id = rotractors.rotarian_id');
   $this->db->where("rotractors.id",$id);
   $query = $this->db->get();
	return $query->row();
	
}

function show_institute($id)
{
 
   $this->db->from("institution");
   $this->db->join("rotractors", 'rotractors.id = institution.rotractor_id');
   $this->db->where("institution.sno",$id);
   $query = $this->db->get();
	return $query->row();
	
}

function visible_institute($id)
{
 
   $this->db->from("institution");
   $this->db->join("rotarians", 'rotarians.id = institution.rotarian_id');
   $this->db->where("institution.sno",$id);
   $query = $this->db->get();
	return $query->row();
	
}

function apply_institute($id)
{
 
   $this->db->from("institution");
   $this->db->join("trustee", 'trustee.instituteid = institution.sno');
   $this->db->where("institution.sno",$id);
    $query = $this->db->get();
	if($query->num_rows() > 0)
        return $query->result();
	
	
}

function get_institute($id)
{
 
   $this->db->from("institution");
   $this->db->join("gaurdian", 'gaurdian.instituteid = institution.sno');
   $this->db->where("institution.sno",$id);
   $query = $this->db->get();
	if($query->num_rows() > 0)
        return $query->result();
	
	
}

function show_rotarian($id)
{
 
   $this->db->from("rotarians");
   $this->db->join("rotractors", 'rotractors.rotarian_id = rotarians.id');
   $this->db->where("rotarians.id",$id);
   $query = $this->db->get();
	if($query->num_rows() > 0)
        return $query->result();
	
}

function visible_rotarian($id)
{
 
   $this->db->from("rotarians");
   $this->db->join("institution", 'institution.rotarian_id = rotarians.id');
   $this->db->where("rotarians.id",$id);
   $query = $this->db->get();
	if($query->num_rows() > 0)
        return $query->result();
	
}

function visible_rotractor($id)
{
 
   $this->db->from("rotractors");
   $this->db->join("institution", 'institution.rotractor_id = rotractors.id');
   $this->db->where("rotractors.id",$id);
   $query = $this->db->get();
	if($query->num_rows() > 0)
        return $query->result();
	
}

public function save_participants($data)
    {
    	
    		$this->db->insert('participants', $data);
    	
    }

public function view_participant($id)
{
	$this->db->where('id', $id);
	$query = $this->db->get("participants");
	return $query->row();

}

function delete_participant($id){
	
	$this->db->where('id', $id);
	$this->db->delete("participants");
}



function fetch_events_data(){
	
	$this->db->select("*");
	$this->db->from("events");
	$query = $this->db->get();
	return $query->result_array();
}

function dashboard_institute_fetch_data(){
	
	$this->db->select("*");
	$this->db->from("institution");
	$query = $this->db->get();
	return $query->result_array();
}

function age_data(){
	
	$this->db->select("*");
	$this->db->from("age");
	$query = $this->db->get();
	return $query->result_array();
}


   public function events_fetch_data() {
 		
        $query = $this->db->get("events"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }



   public function participants_fetch_data() {
 		
        $query = $this->db->get("participants"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }

   public function dashboard_events() {
 		
 		$this->db->join("institution", 'institution.sno = participants.institute');
        $query = $this->db->get("participants"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }





public function kowsalya() {
    
    $this->db->join("institution", 'institution.sno = participants.institute');
        $query = $this->db->get("participants"); 
       if ($query->num_rows() > 0) {
           foreach ($query->result() as $row) {
               $data[] = $row;
           }
           return $data;
       }
       return false; 
   }






 public function list_data($disability_id) {
    
    $this->db->select('events');
    $this->db->from("disability");
    $a = explode(",", $disability_id);
    $this->db->where_in("id",$a);
    $query = $this->db->get();
    if($query->num_rows() > 0)
    	return $query->result();
}   

public function age_list_data($age_id) {
    
    $this->db->select('event_id');
    $this->db->from("age");
    $a = explode(",", $age_id);
    $this->db->where_in("id",$a);
    $query = $this->db->get();
    if($query->num_rows() > 0)
    	return $query->result();
}   

public function listing_data($id) {
    
    $this->db->select('*');
    $this->db->from("events");
    $a = explode(",", $id);
    $this->db->where_in("id",$a);
    $query = $this->db->get();
    if($query->num_rows() > 0)
    	return $query->result();
}

public function capture_events(){
	
	$this->db->select("*");
	$this->db->from("age");
	$query = $this->db->get();
	return $query->result_array();
}

public function attendance(){
	
	$this->db->select("*");
	$this->db->from("participants");
	$query = $this->db->get();
	return $query->result_array();
}

public function disability($id)
{
	$this->db->select('*');
	$this->db->from('disability');
	$a = explode(",",$id);
	$this->db->where_in('id',$a);
	$query = $this->db->get();
	if($query->num_rows() > 0)
		return $query->result();

}  

public function events($id)
{
	$this->db->select('*');
	$this->db->from('events');
	$a = explode(",",$id);
	$this->db->where_in('id',$a);
	$query = $this->db->get();
	if($query->num_rows() > 0)
		return $query->result();

}   

public function age($id)
{
	$this->db->where('id', $id);
	$query = $this->db->get("age");
	return $query->row();

} 

public function educational_institute($id)
{
	$this->db->where('sno', $id);
	$query = $this->db->get("institution");
	return $query->row();

} 

    function uploadData()
    {
        $count=0;
        $fp = fopen($_FILES['userfile']['tmp_name'],'r') or die("can't open file");
        while($csv_line = fgetcsv($fp,1024))
        {
            $count++;
            if($count == 1)
            {
                continue;
            }
           	
            for($i = 0, $j = count($csv_line); $i < $j; $i++)
            {
                $insert_csv = array();
          
                $insert_csv['picture'] = $csv_line[2];
                $insert_csv['institute'] = $csv_line[3];
                $insert_csv['name'] = $csv_line[4];
                $insert_csv['age'] = $csv_line[5];
                $insert_csv['gender'] = $csv_line[6];
                $insert_csv['disability'] = $csv_line[7];
                $insert_csv['events'] = $csv_line[8];
                $insert_csv['address'] = $csv_line[9];
                $insert_csv['special_needs'] = $csv_line[10];
        
              
                

            }
            $i++;
            $data = array(
            
            
                'picture' => $insert_csv['picture'],
                'institute'=>$insert_csv['institute'],
                'name'=>$insert_csv['name'],
                'age'=>$insert_csv['age'],
                'gender'=>$insert_csv['gender'],
                'disability'=>$insert_csv['disability'],
                'events'=>$insert_csv['events'],
                'address'=>$insert_csv['address'],
                'special_needs'=>$insert_csv['special_needs'],
    
              
            );
            
            $this->db->where('institute', $data['institute']);
            $this->db->where('name', $data['name']);
            $data['crane_features']=$this->db->update('participants', $data);

        }
        fclose($fp) or die("can't close file");
        $data['success']="success";
        return $data;
    }

function institute_participant($id)
{

 $this->db->where('institute', $id);
 $query = $this->db->get('participants');
	if($query->num_rows() > 0)
		return $query->result();


}


  function present($values)
 {
 	$a = explode(",",$values['id']);
 	$data = array(

     'attendence' => $values['attendence'],
 	);

 	$this->db->where_in("id", $a);
 	$this->db->update("participants", $data);
    $query = $this->db->get();
	if($query->num_rows() > 0)
		return $query->result();

}




}

?>

