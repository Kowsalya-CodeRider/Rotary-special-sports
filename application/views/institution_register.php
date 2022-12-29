<!DOCTYPE html>
<html>
<head> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
         Institution
        <small>Form</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-user-md"></i> Membership:</a></li>
        <li class="active">2.2 Million</li>
      </ol>
    </section>    
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <center><h3 class="box-title">Institution details</h3></center>
            </div>           
            <div class="box-body">
            <form class="form-horizontal" action="<?php echo SITE_URL;?>Rotary/institution_insert" method="post">
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="i_name" name="i_name" placeholder="Enter the Institution name" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-6">
                  <textarea class="form-control" rows="3" id="address"  name="address" placeholder="Enter the Institution address" required></textarea>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Zip code:</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="zipcode" name="zipcode" placeholder="Enter the Zip code" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Area:</label>
                <div class="col-sm-6">
                  <textarea type="text" class="form-control" id="area" name="area" placeholder=" " required></textarea>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">State:</label>
                <div class="col-sm-6">
                  <select class="form-control select2" style="width: 100%;" name="state" id="state" required>
                    <option selected="selected"></option>
                    <option value="Tamilnadu">Tamilnadu</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar">Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Goa">Goa</option>
                    <option value="Gujarat">Gujarat</option>
                    <option value="Haryana">Haryana</option>
                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                    <option value="Jammu & Kashmir">Jammu & Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value="Meghalaya">Meghalaya</option>
                    <option value="Mizoram">Mizoram</option>
                    <option value="Nagaland">Nagaland</option>
                    <option value="Odisha">Odisha</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Telangana">Telangana</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttarakhand">Uttarakhand</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>     
                </select>
            </div>
              </div>
               <div class="form-group">
                <label class="col-md-3 control-label">City:</label>
                <div class="col-sm-6">
                  <select class="form-control select2" style="width: 100%;" name="city" required>
                    
                      <option selected="selected"></option>
                      <option value="Adoni">Adoni</option>
                      <option value="Amaravati">Amaravati</option>
                      <option value="Anantapur">Anantapur</option>
                      <option value="Chandragiri">Chandragiri</option>
                      <option value="Chittoor">Chittoor</option>
                      <option value="Dowlaiswaram">Dowlaiswaram</option>
                      <option value="Eluru">Eluru</option>
                      <option value="Guntur">Guntur</option>
                      <option value="Kadapa">Kadapa</option>
                      <option value="Kakinada">Kakinada</option>
                      <option value="Kurnool">Kurnool</option>
                      <option value="Machilipatnam">Machilipatnam</option>
                      <option value="Nagarjunakoṇḍa">Nagarjunakoṇḍa</option>
                      <option value="Rajahmundry">Rajahmundry</option>
                      <option value="Srikakulam">Srikakulam</option>
                      <option value="Tirupati">Tirupati</option>
                      <option value="Vijayawada">Vijayawada</option>
                      <option value="Visakhapatnam">Visakhapatnam</option>
                      <option value="Vizianagaram">Vizianagaram</option>
                      <option value="Yemmiganur">Yemmiganur</option>
                      <option value="Itanagar">Itanagar</option>
                      <option value="Dhuburi">Dhuburi</option>
                      <option value="Dibrugarh">Dibrugarh</option>
                      <option value="Dispur">Dispur</option>
                      <option value="Guwahati">Guwahati</option>
                      <option value="Jorhat">Jorhat</option>
                      <option value="Nagaon">Nagaon</option>
                      <option value="Sibsagar">Sibsagar</option>
                      <option value="Silchar">Silchar</option>
                      <option value="Tezpur">Tezpur</option>
                      <option value="Tinsukia">Tinsukia</option>
                          <option value="Ara">Ara</option>
    <option value="Baruni">Baruni</option>
    <option value="Begusarai">Begusarai</option>
    <option value="Bettiah">Bettiah</option>
    <option value="Bhagalpur">Bhagalpur</option>
    <option value="Bihar Sharif">Bihar Sharif</option>
    <option value="Bodh Gaya">Bodh Gaya</option>
    <option value="Buxar">Buxar</option>
    <option value="Chapra">Chapra</option>
    <option value="Darbhanga">Darbhanga</option>
    <option value="Dehri">Dehri</option>
    <option value="Dinapur Nizamat">Dinapur Nizamat</option>
    <option value="Gaya">Gaya</option>
    <option value="Hajipur">Hajipur</option>
    <option value="Jamalpur">Jamalpur</option>
    <option value="Katihar">Katihar</option>
    <option value="Madhubani">Madhubani</option>
    <option value="Motihari">Motihari</option>
    <option value="Munger">Munger</option>
    <option value="Muzaffarpur">Muzaffarpur</option>
    <option value="Patna">Patna</option>
    <option value="Purnia">Purnia</option>
    <option value="Pusa">Pusa</option>
    <option value="Saharsa">Saharsa</option>
    <option value="Samastipur">Samastipur</option>
    <option value="Sasaram">Sasaram</option>
    <option value="Sitamarhi">Sitamarhi</option>
    <option value="Siwan">Siwan</option>
    <option value="Chandigarh">Chandigarh</option>
        <option value="Ambikapur">Ambikapur</option>
    <option value="Bhilai">Bhilai</option>
    <option value="Bilaspur">Bilaspur</option>
    <option value="Dhamtari">Dhamtari</option>
    <option value="Durg">Durg</option>
    <option value="Jagdalpur">Jagdalpur</option>
    <option value="Raipur">Raipur</option>
    <option value="Rajnandgaon">Rajnandgaon</option>
        <option value="Delhi">Delhi</option>
    <option value="New Delhi">New Delhi</option>
        <option value="Madgaon">Madgaon</option>
    <option value="Panaji">Panaji</option>
        <option value="Ahmadabad">Ahmadabad</option>
    <option value="Amreli">Amreli</option>
    <option value="Bharuch">Bharuch</option>
    <option value="Bhavnagar">Bhavnagar</option>
    <option value="Bhuj">Bhuj</option>
    <option value="Dwarka">Dwarka</option>
    <option value="Gandhinagar">Gandhinagar</option>
    <option value="Godhra">Godhra</option>
    <option value="Jamnagar">Jamnagar</option>
    <option value="Junagadh">Junagadh</option>
    <option value="Kandla">Kandla</option>
    <option value="Khambhat">Khambhat</option>
    <option value="Kheda">Kheda</option>
    <option value="Mahesana">Mahesana</option>
    <option value="Morvi">Morvi</option>
    <option value="Nadiad">Nadiad</option>
    <option value="Navsari">Navsari</option>
    <option value="Okha">Okha</option>
    <option value="Palanpur">Palanpur</option>
    <option value="Patan">Patan</option>
    <option value="Porbandar">Porbandar</option>
    <option value="Rajkot">Rajkot</option>
    <option value="Surat">Surat</option>
    <option value="Surendranagar">Surendranagar</option>
    <option value="Valsad">Valsad</option>
    <option value="Veraval">Veraval</option>
        <option value="Ambala">Ambala</option>
    <option value="Bhiwani">Bhiwani</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Faridabad">Faridabad</option>
    <option value="Firozpur Jhirka">Firozpur Jhirka</option>
    <option value="Gurgaon">Gurgaon</option>
    <option value="Hansi">Hansi</option>
    <option value="Hisar">Hisar</option>
    <option value="Jind">Jind</option>
    <option value="Kaithal">Kaithal</option>
    <option value="Karnal">Karnal</option>
    <option value="Kurukshetra">Kurukshetra</option>
    <option value="Panipat">Panipat</option>
    <option value="Pehowa">Pehowa</option>
    <option value="Rewari">Rewari</option>
    <option value="Rohtak">Rohtak</option>
    <option value="Sirsa">Sirsa</option>
    <option value="Sonipat">Sonipat</option>
        <option value="Bilaspur">Bilaspur</option>
    <option value="Chamba">Chamba</option>
    <option value="Dalhousie">Dalhousie</option>
    <option value="Dharmshala">Dharmshala</option>
    <option value="Hamirpur">Hamirpur</option>
    <option value="Kangra">Kangra</option>
    <option value="Kullu">Kullu</option>
    <option value="Mandi">Mandi</option>
    <option value="Nahan">Nahan</option>
    <option value="Shimla">Shimla</option>
    <option value="Una">Una</option>
        <option value="Anantnag">Anantnag</option>
    <option value="Baramula">Baramula</option>
    <option value="Doda">Doda</option>
    <option value="Gulmarg">Gulmarg</option>
    <option value="Jammu">Jammu</option>
    <option value="Kathua">Kathua</option>
    <option value="Leh">Leh</option>
    <option value="Punch">Punch</option>
    <option value="Rajauri">Rajauri</option>
    <option value="Srinagar">Srinagar</option>
    <option value="Udhampur">Udhampur</option>
        <option value="Bokaro">Bokaro</option>
    <option value="Chaibasa">Chaibasa</option>
    <option value="Deoghar">Deoghar</option>
    <option value="Dhanbad">Dhanbad</option>
    <option value="Dumka">Dumka</option>
    <option value="Giridih">Giridih</option>
    <option value="Hazaribag">Hazaribag</option>
    <option value="Jamshedpur">Jamshedpur</option>
    <option value="Jharia">Jharia</option>
    <option value="Rajmahal">Rajmahal</option>
    <option value="Ranchi">Ranchi</option>
    <option value="Saraikela">Saraikela</option>
        <option value="Badami">Badami</option>
    <option value="Ballari">Ballari</option>
    <option value="Bangalore">Bangalore</option>
    <option value="Belgavi">Belgavi</option>
    <option value="Bhadravati">Bhadravati</option>
    <option value="Bidar">Bidar</option>
    <option value="Chikkamagaluru">Chikkamagaluru</option>
    <option value="Chitradurga">Chitradurga</option>
    <option value="Davangere">Davangere</option>
    <option value="Halebid">Halebid</option>
    <option value="Hassan">Hassan</option>
    <option value="Hubballi-Dharwa">Hubballi-Dharwa</option>
    <option value="Kalaburagi">Kalaburagi</option>
    <option value="Kolar">Kolar</option>
    <option value="Madikeri">Madikeri</option>
    <option value="Mandya">Mandya</option>
    <option value="Mangaluru">Mangaluru</option>
    <option value="Mysuru">Mysuru</option>
    <option value="Raichur">Raichur</option>
    <option value="Shivamogga">Shivamogga</option>
    <option value="Shravanabelagola">Shravanabelagola</option>
    <option value="Shrirangapattana">Shrirangapattana</option>
    <option value="Tumkuru">Tumkuru</option>
        <option value="Alappuzha">Alappuzha</option>
    <option value="Badagara">Badagara</option>
    <option value="Idukki">Idukki</option>
    <option value="Kannur">Kannur</option>
    <option value="Kochi">Kochi</option>
    <option value="Kollam">Kollam</option>
    <option value="Kottayam">Kottayam</option>
    <option value="Kozhikode">Kozhikode</option>
    <option value="Mattancheri">Mattancheri</option>
    <option value="Palakkad">Palakkad</option>
    <option value="Thalassery">Thalassery</option>
    <option value="Thiruvananthapuram">Thiruvananthapuram</option>
    <option value="Thrissur">Thrissur</option>
        <option value="Balaghat">Balaghat</option>
    <option value="Barwani">Barwani</option>
    <option value="Betul">Betul</option>
    <option value="Bharhut">Bharhut</option>
    <option value="Bhind">Bhind</option>
    <option value="Bhojpur">Bhojpur</option>
    <option value="Bhopal">Bhopal</option>
    <option value="Burhanpur">Burhanpur</option>
    <option value="Chhatarpur">Chhatarpur</option>
    <option value="Chhindwara">Chhindwara</option>
    <option value="Damoh">Damoh</option>
    <option value="Datia">Datia</option>
    <option value="Dewas">Dewas</option>
    <option value="Dhar">Dhar</option>
    <option value="Guna">Guna</option>
    <option value="Gwalior">Gwalior</option>
    <option value="Hoshangabad">Hoshangabad</option>
    <option value="Indore">Indore</option>
    <option value="Itarsi">Itarsi</option>
    <option value="Jabalpur">Jabalpur</option>
    <option value="Jhabua">Jhabua</option>
    <option value="Khajuraho">Khajuraho</option>
    <option value="Khandwa">Khandwa</option>
    <option value="Khargon">Khargon</option>
    <option value="Maheshwar">Maheshwar</option>
    <option value="Mandla">Mandla</option>
    <option value="Mandsaur">Mandsaur</option>
    <option value="Mhow">Mhow</option>
    <option value="Morena">Morena</option>
    <option value="Murwara">Murwara</option>
    <option value="Narsimhapur">Narsimhapur</option>
    <option value="Narsinghgarh">Narsinghgarh</option>
    <option value="Narwar">Narwar</option>
    <option value="Neemuch">Neemuch</option>
    <option value="Nowgong">Nowgong</option>
    <option value="Orchha">Orchha</option>
    <option value="Panna">Panna</option>
    <option value="Raisen">Raisen</option>
    <option value="Rajgarh">Rajgarh</option>
    <option value="Ratlam">Ratlam</option>
    <option value="Rewa">Rewa</option>
    <option value="Sagar">Sagar</option>
    <option value="Sarangpur">Sarangpur</option>
    <option value="Satna">Satna</option>
    <option value="Sehore">Sehore</option>
    <option value="Seoni">Seoni</option>
    <option value="Shahdol">Shahdol</option>
    <option value="Shajapur">Shajapur</option>
    <option value="Sheopur">Sheopur</option>
    <option value="Shivpuri">Shivpuri</option>
    <option value="Ujjain">Ujjain</option>
    <option value="Vidisha">Vidisha</option>
        <option value="Ahmadnagar">Ahmadnagar</option>
    <option value="Akola">Akola</option>
    <option value="Amravati">Amravati</option>
    <option value="Aurangabad">Aurangabad</option>
    <option value="Bhandara">Bhandara</option>
    <option value="Bhusawal">Bhusawal</option>
    <option value="Bid">Bid</option>
    <option value="Buldana">Buldana</option>
    <option value="Chandrapur">Chandrapur</option>
    <option value="Daulatabad">Daulatabad</option>
    <option value="Dhule">Dhule</option>
    <option value="Jalgaon">Jalgaon</option>
    <option value="Kalyan">Kalyan</option>
    <option value="Karli">Karli</option>
    <option value="Kolhapur">Kolhapur</option>
    <option value="Mahabaleshwar">Mahabaleshwar</option>
    <option value="Malegaon">Malegaon</option>
    <option value="Matheran">Matheran</option>
    <option value="Mumbai">Mumbai</option>
    <option value="Nagpur">Nagpur</option>
    <option value="Nanded">Nanded</option>
    <option value="Nashik">Nashik</option>
    <option value="Osmanabad">Osmanabad</option>
    <option value="Pandharpur">Pandharpur</option>
    <option value="Parbhani">Parbhani</option>
    <option value="Pune">Pune</option>
    <option value="Ratnagiri">Ratnagiri</option>
    <option value="Sangli">Sangli</option>
    <option value="Satara">Satara</option>
    <option value="Sevagram">Sevagram</option>
    <option value="Solapur">Solapur</option>
    <option value="Thane">Thane</option>
    <option value="Ulhasnagar">Ulhasnagar</option>
    <option value="Vasai-Virar">Vasai-Virar</option>
    <option value="Wardha">Wardha</option>
    <option value="Yavatmal">Yavatmal</option>
    <option value="Imphal">Imphal</option>
        <option value="Cherrapunji">Cherrapunji</option>
    <option value="Shillong">Shillong</option>
        <option value="Aizawl">Aizawl</option>
    <option value="Lunglei">Lunglei</option>
        <option value="Kohima">Kohima</option>
    <option value="Mon">Mon</option>
    <option value="Phek">Phek</option>
    <option value="Wokha">Wokha</option>
    <option value="Zunheboto">Zunheboto</option>
        <option value="Balangir">Balangir</option>
    <option value="Baleshwar">Baleshwar</option>
    <option value="Baripada">Baripada</option>
    <option value="Bhubaneshwar">Bhubaneshwar</option>
    <option value="Brahmapur">Brahmapur</option>
    <option value="Cuttack">Cuttack</option>
    <option value="Dhenkanal">Dhenkanal</option>
    <option value="Keonjhar">Keonjhar</option>
    <option value="Konark">Konark</option>
    <option value="Koraput">Koraput</option>
    <option value="Paradip">Paradip</option>
    <option value="Phulabani">Phulabani</option>
    <option value="Puri">Puri</option>
    <option value="Sambalpur">Sambalpur</option>
    <option value="Udayagiri">Udayagiri</option>
        <option value="Amritsar">Amritsar</option>
    <option value="Batala">Batala</option>
    <option value="Chandigarh">Chandigarh</option>
    <option value="Faridkot">Faridkot</option>
    <option value="Firozpur">Firozpur</option>
    <option value="Gurdaspur">Gurdaspur</option>
    <option value="Hoshiarpur">Hoshiarpur</option>
    <option value="Jalandhar">Jalandhar</option>
    <option value="Kapurthala">Kapurthala</option>
    <option value="Ludhiana">Ludhiana</option>
    <option value="Nabha">Nabha</option>
    <option value="Patiala">Patiala</option>
    <option value="Rupnagar">Rupnagar</option>
    <option value="Sangrur">Sangrur</option>
        <option value="Abu">Abu</option>
    <option value="Ajmer">Ajmer</option>
    <option value="Alwar">Alwar</option>
    <option value="Amer">Amer</option>
    <option value="Barmer">Barmer</option>
    <option value="Beawar">Beawar</option>
    <option value="Bharatpur">Bharatpur</option>
    <option value="Bhilwara">Bhilwara</option>
    <option value="Bikaner">Bikaner</option>
    <option value="Bundi">Bundi</option>
    <option value="Chittaurgarh">Chittaurgarh</option>
    <option value="Churu">Churu</option>
    <option value="Dhaulpur">Dhaulpur</option>
    <option value="Dungarpur">Dungarpur</option>
    <option value="Ganganagar">Ganganagar</option>
    <option value="Hanumangarh">Hanumangarh</option>
    <option value="Jaipur">Jaipur</option>
    <option value="Jaisalmer">Jaisalmer</option>
    <option value="Jalor">Jalor</option>
    <option value="Jhalawar">Jhalawar</option>
    <option value="Jhunjhunu">Jhunjhunu</option>
    <option value="Jodhpur">Jodhpur</option>
    <option value="Kishangarh">Kishangarh</option>
    <option value="Kota">Kota</option>
    <option value="Merta">Merta</option>
    <option value="Nagaur">Nagaur</option>
    <option value="Nathdwara">Nathdwara</option>
    <option value="Pali">Pali</option>
    <option value="Phalodi">Phalodi</option>
    <option value="Pushkar">Pushkar</option>
    <option value="Sawai Madhopur">Sawai Madhopur</option>
    <option value="Shahpura">Shahpura</option>
    <option value="Sikar">Sikar</option>
    <option value="Sirohi">Sirohi</option>
    <option value="Tonk">Tonk</option>
    <option value="Udaipur">Udaipur</option>
        <option value="Gangtok">Gangtok</option>
    <option value="Gyalsing">Gyalsing</option>
    <option value="Lachung">Lachung</option>
    <option value="Mangan">Mangan</option>
        <option value="Arcot">Arcot</option>
    <option value="Chengalpattu">Chengalpattu</option>
    <option value="Chennai">Chennai</option>
    <option value="Chidambaram">Chidambaram</option>
    <option value="Coimbatore">Coimbatore</option>
    <option value="Cuddalore">Cuddalore</option>
    <option value="Dharmapuri">Dharmapuri</option>
    <option value="Dindigul">Dindigul</option>
    <option value="Erode">Erode</option>
    <option value="Kanchipuram">Kanchipuram</option>
    <option value="Kanniyakumari">Kanniyakumari</option>
    <option value="Kodaikanal">Kodaikanal</option>
    <option value="Kumbakonam">Kumbakonam</option>
    <option value="Madurai">Madurai</option>
    <option value="Mamallapuram">Mamallapuram</option>
    <option value="Nagappattinam">Nagappattinam</option>
    <option value="Nagercoil">Nagercoil</option>
    <option value="Palayankottai">Palayankottai</option>
    <option value="Pudukkottai">Pudukkottai</option>
    <option value="Rajapalaiyam">Rajapalaiyam</option>
    <option value="Ramanathapuram">Ramanathapuram</option>
    <option value="Salem">Salem</option>
    <option value="Thanjavur">Thanjavur</option>
    <option value="Tiruchchirappalli">Tiruchchirappalli</option>
    <option value="Tirunelveli">Tirunelveli</option>
    <option value="Tiruppur">Tiruppur</option>
    <option value="Tuticorin">Tuticorin</option>
    <option value="Udhagamandalam">Udhagamandalam</option>
    <option value="Vellore">Vellore</option>
        <option value="Hyderabad">Hyderabad</option>
    <option value="Karimnagar">Karimnagar</option>
    <option value="Khammam">Khammam</option>
    <option value="Mahbubnagar">Mahbubnagar</option>
    <option value="Nizamabad">Nizamabad</option>
    <option value="Sangareddi">Sangareddi</option>
    <option value="Warangal">Warangal</option>
    <option value="Agartala">Agartala</option>
        <option value="Agra">Agra</option>
    <option value="Aligarh">Aligarh</option>
    <option value="Allahabad">Allahabad</option>
    <option value="Amroha">Amroha</option>
    <option value="Ayodhya">Ayodhya</option>
    <option value="Azamgarh">Azamgarh</option>
    <option value="Bahraich">Bahraich</option>
    <option value="Ballia">Ballia</option>
    <option value="Banda">Banda</option>
    <option value="Bara Banki">Bara Banki</option>
    <option value="Bareilly">Bareilly</option>
    <option value="Basti">Basti</option>
    <option value="Bijnor">Bijnor</option>
    <option value="Bithur">Bithur</option>
    <option value="Budaun">Budaun</option>
    <option value="Bulandshahr">Bulandshahr</option>
    <option value="Deoria">Deoria</option>
    <option value="Etah">Etah</option>
    <option value="Etawah">Etawah</option>
    <option value="Faizabad">Faizabad</option>
    <option value="Farrukhabad-cum-Fatehgarh">Farrukhabad-cum-Fatehgarh</option>
    <option value="Fatehpur">Fatehpur</option>
    <option value="Fatehpur Sikri">Fatehpur Sikri</option>
    <option value="Ghaziabad">Ghaziabad</option>
    <option value="Ghazipur">Ghazipur</option>
    <option value="Gonda">Gonda</option>
    <option value="Gorakhpur">Gorakhpur</option>
    <option value="Hamirpur">Hamirpur</option>
    <option value="Hardoi">Hardoi</option>
    <option value="Hathras">Hathras</option>
    <option value="Jalaun">Jalaun</option>
    <option value="Jaunpur">Jaunpur</option>
    <option value="Jhansi">Jhansi</option>
    <option value="Kannauj">Kannauj</option>
    <option value="Kanpur">Kanpur</option>
    <option value="Lakhimpur">Lakhimpur</option>
    <option value="Lalitpur">Lalitpur</option>
    <option value="Lucknow">Lucknow</option>
    <option value="Mainpuri">Mainpuri</option>
    <option value="Mathura">Mathura</option>
    <option value="Meerut">Meerut</option>
    <option value="Mirzapur-Vindhyachal">Mirzapur-Vindhyachal</option>
    <option value="Moradabad">Moradabad</option>
    <option value="Muzaffarnagar">Muzaffarnagar</option>
    <option value="Partapgarh">Partapgarh</option>
    <option value="Pilibhit">Pilibhit</option>
    <option value="Rae Bareli">Rae Bareli</option>
    <option value="Rampur">Rampur</option>
    <option value="Saharanpur">Saharanpur</option>
    <option value="Sambhal">Sambhal</option>
    <option value="Shahjahanpur">Shahjahanpur</option>
    <option value="Sitapur">Sitapur</option>
    <option value="Sultanpur">Sultanpur</option>
    <option value="Tehri">Tehri</option>
    <option value="Varanasi">Varanasi</option>
        <option value="Almora">Almora</option>
    <option value="Dehra Dun">Dehra Dun</option>
    <option value="Haridwar">Haridwar</option>
    <option value="Mussoorie">Mussoorie</option>
    <option value="Nainital">Nainital</option>
    <option value="Pithoragarh">Pithoragarh</option>
        <option value="Alipore">Alipore</option>
    <option value="Alipur Duar">Alipur Duar</option>
    <option value="Asansol">Asansol</option>
    <option value="Baharampur">Baharampur</option>
    <option value="Bally">Bally</option>
    <option value="Balurghat">Balurghat</option>
    <option value="Bankura">Bankura</option>
    <option value="Baranagar">Baranagar</option>
    <option value="Barasat">Barasat</option>
    <option value="Barrackpore">Barrackpore</option>
    <option value="Basirhat">Basirhat</option>
    <option value="Bhatpara">Bhatpara</option>
    <option value="Bishnupur">Bishnupur</option>
    <option value="Budge Budge">Budge Budge</option>
    <option value="Burdwan">Burdwan</option>
    <option value="Chandernagore">Chandernagore</option>
    <option value="Darjiling">Darjiling</option>
    <option value="Diamond Harbour">Diamond Harbour</option>
    <option value="Dum Dum">Dum Dum</option>
    <option value="Durgapur">Durgapur</option>
    <option value="Halisahar">Halisahar</option>
    <option value="Haora">Haora</option>
    <option value="Hugli">Hugli</option>
    <option value="Ingraj Bazar">Ingraj Bazar</option>
    <option value="Jalpaiguri">Jalpaiguri</option>
    <option value="Kalimpong">Kalimpong</option>
    <option value="Kamarhati">Kamarhati</option>
    <option value="Kanchrapara">Kanchrapara</option>
    <option value="Kharagpur">Kharagpur</option>
    <option value="Koch Bihar">Koch Bihar</option>
    <option value="Kolkata">Kolkata</option>
    <option value="Krishnanagar">Krishnanagar</option>
    <option value="Malda">Malda</option>
    <option value="Midnapore">Midnapore</option>
    <option value="Murshidabad">Murshidabad</option>
    <option value="Navadwip">Navadwip</option>
    <option value="Palashi">Palashi</option>
    <option value="Panihati">Panihati</option>
    <option value="Purulia">Purulia</option>
    <option value="Raiganj">Raiganj</option>
    <option value="Santipur">Santipur</option>
    <option value="Shantiniketan">Shantiniketan</option>
    <option value="Shrirampur">Shrirampur</option>
    <option value="Siliguri">Siliguri</option>
    <option value="Siuri">Siuri</option>
    <option value="Tamluk">Tamluk</option>
    <option value="Titagarh">Titagarh</option>
                </select>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Contact No:</label>
                <div class="col-sm-6">
                   <table>
                  <tr>   
                <td><div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div><input type="text" id="phoneno" maxlength="10" class="form-control name_list" name="phoneno" placeholder="Enter Mobile Number" required></div></td>
           
            <td><div class="input-group"><div class="input-group-addon">
                    <i class="fa fa-tty"></i>
                  </div><input type="text" class="form-control name_list" maxlength="13" id="landline" name="landline" placeholder="Enter Landline Number" required></div> </td>                  
          </tr>
        </table>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Registration id:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="registrationid" name="registerationid" placeholder="Enter the Institution Registration Id" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Email:</label>
                <div class="col-sm-6">
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter the Institution mail id" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Website:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="website" name="website" placeholder="Enter the Institution Website address" required>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Trustee:</label>
                <div class="col-sm-9"><br>
                  <table id="dynamic_field">
                  <tr>
                  
                <td><center><strong> Name</strong></center><br><div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user"></i>
                  </div><input type="text" class="form-control name_list" name="name[]" placeholder="Enter Trustee Name" required></div></td>
           
            <td><center><strong>Contact Number</strong></center><br><div class="input-group"><div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div><input type="text" class="form-control name_list" name="name1[]" id="T_phno" maxlength="10" placeholder="Enter Trustee contact No" required></div> </td>
                  <td><center><strong>Mail id</strong></center><br><div class="input-group"><div class="input-group-addon">
                    <i class="fa  fa-envelope"></i>
                  </div><input type="email" class="form-control name_list" name="name2[]" placeholder="Enter Trustee Mail id" required></div> </td>
                  <td><br><br><button type="button" name="add" id="add" class="btn btn-primary">Add</button></td>
          </tr>
        </table>

            </div>
              </div>


              <div class="form-group">
                <label class="col-md-3 control-label">Guardian:</label>
                <div class="col-sm-9"><br>
              <table id="dynamic_field1">
                  <tr>
                
                <td><center><strong> Name</strong></center><br><div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-user-secret"></i>
                  </div><input type="text" class="form-control name_list" name="name3[]" placeholder="Enter Guardian Name" required></div></td>
           
            <td><center><strong>Contact Number</strong></center><br><div class="input-group"><div class="input-group-addon">
                    <i class="fa fa-phone"></i>
                  </div><input type="text" class="form-control name_list" name="name4[]" id="G_phno" maxlength="10" placeholder="Enter Guardian contact No" required></div> </td>
                  <td><center><strong>Mail id</strong></center><br><div class="input-group"><div class="input-group-addon">
                    <i class="fa  fa-envelope"></i>
                  </div><input type="email" class="form-control name_list" name="name5[]" placeholder="Enter Guardian Mail id" required></div> </td>

                  <td><br><br><button type="button" name="add1" id="add1" class="btn btn-primary">Add</button></td>
          </tr>
        </table>
        </div>
              </div>

              <div class="box-footer">
                <center><button type="submit" class="btn btn-info">Submit</button></center>
              </div>
            </form>
            </div>  
          </div>
        </div>
      </div>
  </div> 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Rotary International One Rotary Center</b> 
    </div>
    <strong> <a href="https://adminlte.io">Contact:</a>.</strong> +1 866-976-8279 (toll free), 1560 Sherman Ave. Evanston, IL 60201-3698, USA
  </footer>
  <div class="control-sidebar-bg"></div>
</div>
<?php include "script.php";?>
<script>
  
 $(document).ready(function(){  
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append('<tr id="row'+i+'"><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" name="name[]" placeholder="Enter Trustee Name" class="form-control name_list" required /></div></td><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-phone"></i></div><input type="text" name="name1[]" id="T_phno" maxlength="10" placeholder="Enter Trustee Contact no" class="form-control name_list" required /></div></td><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope"></i></div><input type="email" name="name2[]" placeholder="Enter Trustee Mail id" class="form-control name_list" required /></div></td><td><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
     

 var i=1;  
      $('#add1').click(function(){  
           i++;  
           $('#dynamic_field1').append('<tr id="row'+i+'"><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-user"></i></div><input type="text" name="name3[]" placeholder="Enter Guardian Name" class="form-control name_list" required /></div></td><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-phone"></i></div><input type="text" name="name4[]" id="G_phno" maxlength="10" placeholder="Enter Guardian Contact no" class="form-control name_list" required /></div></td><td><br><div class="input-group"><div class="input-group-addon"><i class="fa fa-envelope"></i></div><input type="email" name="name5[]" placeholder="Enter Guardian Mail id" class="form-control name_list" required /></div></td><td><br><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  
    
     $(document).on('keyup', '#dynamic_field #T_phno',function () {            
            if(!($.isNumeric($(this).val())))
                 { alert("Contact number accept DIGITS only");
                   $(this).val('');
                 }
        });

          $(document).on('keyup', '#dynamic_field1 #G_phno',function () {            
            if(!($.isNumeric($(this).val())))
                 { alert("Contact number accept DIGITS only");
                   $(this).val('');
                 }
        });

           $('#phoneno').keyup(function(){
          if(isNaN(parseInt($(this).val())))
           { alert("Contact number accept DIGITS only");
             $(this).val('');
            }
        });

            $('#landline').keyup(function(){
          if(isNaN(parseInt($(this).val())))
           { alert("landline number accept DIGITS only");
             $(this).val('');
            }
        });


 });  
 </script>   
</body>
</html>