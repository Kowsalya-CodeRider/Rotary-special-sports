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
        <li><a href="#"><i class="fa fa-user-md"></i> Notable Past president:</a></li>
        <li class="active">Luther H. Hodges (1967–68)</li>
      </ol>
    </section>    
      <div class="row">
        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <center><h3 class="box-title">Institution details</h3></center>
            </div>           
            <div class="box-body">
            <form class="form-horizontal" method="POST" action="<?php echo SITE_URL;?>Rotary/institute_edit">
              <div class="form-group">
                <div class="col-sm-7">
                <input type="hidden" class="form-control" id="sno" name="sno" value="<?php echo $plist->sno;?>" >
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Name:</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" id="name" name="i_name" value="<?php echo $plist->i_name;?>" >
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Address:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" rows="3" id="address"  name="address" value="<?php echo $plist->address;?>">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Zipcode:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="zipcode"  name="zipcode" value="<?php echo $plist->zipcode;?>">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Area:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="area"  name="area" value="<?php echo $plist->area;?>">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">State:</label>
                <div class="col-sm-6">
                  <select class="form-control select2" style="width: 100%;" name="state">
                    <option value="Tamilnadu" <?php if($plist->state =='Tamilnadu' ) { echo "Selected"; } ?>>Tamilnadu</option>
                    <option value="Andhra Pradesh" <?php if($plist->state =='Andhra Pradesh' ) { echo "Selected"; } ?> >Andhra Pradesh</option>
                    <option value="Arunachal Pradesh" <?php if($plist->state =='Arunachal Pradesh' ) { echo "Selected"; } ?>>Arunachal Pradesh</option>
                    <option value="Assam" <?php if($plist->state =='Assam' ) { echo "Selected"; } ?>>Assam</option>
                    <option value="Bihar" <?php if($plist->state =='Bihar' ) { echo "Selected"; } ?>>Bihar</option>
                    <option value="Chhattisgarh" <?php if($plist->state =='Chhattisgarh' ) { echo "Selected"; } ?> >Chhattisgarh</option>
                    <option value="Goa" <?php if($plist->state =='Goa' ) { echo "Selected"; } ?>>Goa</option>
                    <option value="Gujarat" <?php if($plist->state =='Gujarat' ) { echo "Selected"; } ?>>Gujarat</option>
                    <option value="Haryana" <?php if($plist->state =='Haryana' ) { echo "Selected"; } ?>>Haryana</option>
                    <option value="Himachal Pradesh" <?php if($plist->state =='Himachal Pradesh' ) { echo "Selected"; } ?>>Himachal Pradesh</option>
                    <option value="Jammu & Kashmir" <?php if($plist->state =='Jammu & Kashmir' ) { echo "Selected"; } ?>>Jammu & Kashmir</option>
                    <option value="Jharkhand" <?php if($plist->state =='Jharkhand' ) { echo "Selected"; } ?>>Jharkhand</option>
                    <option value="Karnataka" <?php if($plist->state =='Karnataka' ) { echo "Selected"; } ?>>Karnataka</option>
                    <option value="Kerala" <?php if($plist->state =='Kerala' ) { echo "Selected"; } ?>>Kerala</option>
                    <option value="Madhya Pradesh" <?php if($plist->state =='Madhya Pradesh' ) { echo "Selected"; } ?>>Madhya Pradesh</option>
                    <option value="Maharashtra" <?php if($plist->state =='Maharashtra' ) { echo "Selected"; } ?>>Maharashtra</option>
                    <option value="Manipur" <?php if($plist->state =='Manipur' ) { echo "Selected"; } ?>>Manipur</option>
                    <option value="Meghalaya" <?php if($plist->state =='Meghalaya' ) { echo "Selected"; } ?>>Meghalaya</option>
                    <option value="Mizoram" <?php if($plist->state =='Mizoram' ) { echo "Selected"; } ?>>Mizoram</option>
                    <option value="Nagaland" <?php if($plist->state =='Nagaland' ) { echo "Selected"; } ?>>Nagaland</option>
                    <option value="Odisha" <?php if($plist->state =='Odisha' ) { echo "Selected"; } ?>>Odisha</option>
                    <option value="Punjab" <?php if($plist->state =='Punjab' ) { echo "Selected"; } ?>>Punjab</option>
                    <option value="Rajasthan" <?php if($plist->state =='Rajasthan' ) { echo "Selected"; } ?>>Rajasthan</option>
                    <option value="Sikkim" <?php if($plist->state =='Sikkim' ) { echo "Selected"; } ?>>Sikkim</option>
                    <option value="Telangana" <?php if($plist->state =='Telangana' ) { echo "Selected"; } ?>>Telangana</option>
                    <option value="Tripura" <?php if($plist->state =='Tripura' ) { echo "Selected"; } ?>>Tripura</option>
                    <option value="Uttarakhand" <?php if($plist->state =='Uttarakhand' ) { echo "Selected"; } ?>>Uttarakhand</option>
                    <option value="Uttar Pradesh" <?php if($plist->state =='Uttar Pradesh' ) { echo "Selected"; } ?>>Uttar Pradesh</option>
                    <option value="West Bengal" <?php if($plist->state =='West Bengal' ) { echo "Selected"; } ?>>West Bengal</option>    
                </select>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">City:</label>
                <div class="col-sm-6">
                  <select class="form-control select2" style="width: 100%;" name="city" required>

                      <option value="Adoni" <?php if($plist->city =='Adoni' ) { echo "Selected"; } ?>>Adoni</option>
                      <option value="Amaravati" <?php if($plist->city =='Amaravati' ) { echo "Selected"; } ?>>Amaravati</option>
                      <option value="Anantapur" <?php if($plist->city =='Anantapur' ) { echo "Selected"; } ?>>Anantapur</option>
                      <option value="Chandragiri" <?php if($plist->city =='Chandragiri' ) { echo "Selected"; } ?>>Chandragiri</option>
                      <option value="Chittoor" <?php if($plist->city =='Chittoor' ) { echo "Selected"; } ?>>Chittoor</option>
                      <option value="Dowlaiswaram" <?php if($plist->city =='Dowlaiswaram' ) { echo "Selected"; } ?>>Dowlaiswaram</option>
                      <option value="Eluru" <?php if($plist->city =='Eluru' ) { echo "Selected"; } ?>>Eluru</option>
                      <option value="Guntur" <?php if($plist->city =='Guntur' ) { echo "Selected"; } ?>>Guntur</option>
                      <option value="Kadapa" <?php if($plist->city =='Kadapa' ) { echo "Selected"; } ?>>Kadapa</option>
                      <option value="Kakinada" <?php if($plist->city =='Kakinada' ) { echo "Selected"; } ?>>Kakinada</option>
                      <option value="Kurnool" <?php if($plist->city =='Kurnool' ) { echo "Selected"; } ?>>Kurnool</option>
                      <option value="Machilipatnam" <?php if($plist->city =='Machilipatnam' ) { echo "Selected"; } ?>>Machilipatnam</option>
                      <option value="Nagarjunakoṇḍa" <?php if($plist->city =='Nagarjunakoṇḍa' ) { echo "Selected"; } ?>>Nagarjunakoṇḍa</option>
                      <option value="Rajahmundry" <?php if($plist->city =='Rajahmundry' ) { echo "Selected"; } ?>>Rajahmundry</option>
                      <option value="Srikakulam" <?php if($plist->city =='Srikakulam' ) { echo "Selected"; } ?>>Srikakulam</option>
                      <option value="Tirupati" <?php if($plist->city =='Tirupati' ) { echo "Selected"; } ?>>Tirupati</option>
                      <option value="Vijayawada" <?php if($plist->city =='Vijayawada' ) { echo "Selected"; } ?>>Vijayawada</option>
                      <option value="Visakhapatnam" <?php if($plist->city =='Visakhapatnam' ) { echo "Selected"; } ?>>Visakhapatnam</option>
                      <option value="Vizianagaram" <?php if($plist->city =='Vizianagaram' ) { echo "Selected"; } ?>>Vizianagaram</option>
                      <option value="Yemmiganur" <?php if($plist->city =='Yemmiganur' ) { echo "Selected"; } ?>>Yemmiganur</option>
                      <option value="Itanagar" <?php if($plist->city =='Itanagar' ) { echo "Selected"; } ?>>Itanagar</option>
                      <option value="Dhuburi" <?php if($plist->city =='Dhuburi' ) { echo "Selected"; } ?>>Dhuburi</option>
                      <option value="Dibrugarh" <?php if($plist->city =='Dibrugarh' ) { echo "Selected"; } ?>>Dibrugarh</option>
                      <option value="Dispur" <?php if($plist->city =='Dispur' ) { echo "Selected"; } ?>>Dispur</option>
                      <option value="Guwahati" <?php if($plist->city =='Guwahati' ) { echo "Selected"; } ?>>Guwahati</option>
                      <option value="Jorhat" <?php if($plist->city =='Jorhat' ) { echo "Selected"; } ?>>Jorhat</option>
                      <option value="Nagaon" <?php if($plist->city =='Nagaon' ) { echo "Selected"; } ?>>Nagaon</option>
                      <option value="Sibsagar" <?php if($plist->city =='Sibsagar' ) { echo "Selected"; } ?>>Sibsagar</option>
                      <option value="Silchar" <?php if($plist->city =='Silchar' ) { echo "Selected"; } ?>>Silchar</option>
                      <option value="Tezpur" <?php if($plist->city =='Tezpur' ) { echo "Selected"; } ?>>Tezpur</option>
                      <option value="Tinsukia" <?php if($plist->city =='Tinsukia' ) { echo "Selected"; } ?>>Tinsukia</option>
                          <option value="Ara" <?php if($plist->city =='Ara' ) { echo "Selected"; } ?>>Ara</option>
    <option value="Baruni" <?php if($plist->city =='Baruni' ) { echo "Selected"; } ?>>Baruni</option>
    <option value="Begusarai" <?php if($plist->city =='Begusarai' ) { echo "Selected"; } ?>>Begusarai</option>
    <option value="Bettiah" <?php if($plist->city =='Bettiah' ) { echo "Selected"; } ?>>Bettiah</option>
    <option value="Bhagalpur" <?php if($plist->city =='Bhagalpur' ) { echo "Selected"; } ?>>Bhagalpur</option>
    <option value="Bihar Sharif" <?php if($plist->city =='Bihar Sharif' ) { echo "Selected"; } ?>>Bihar Sharif</option>
    <option value="Bodh Gaya" <?php if($plist->city =='Bodh Gaya' ) { echo "Selected"; } ?>>Bodh Gaya</option>
    <option value="Buxar" <?php if($plist->city =='Buxar' ) { echo "Selected"; } ?>>Buxar</option>
    <option value="Chapra" <?php if($plist->city =='Chapra' ) { echo "Selected"; } ?>>Chapra</option>
    <option value="Darbhanga" <?php if($plist->city =='Darbhanga' ) { echo "Selected"; } ?>>Darbhanga</option>
    <option value="Dehri" <?php if($plist->city =='Dehri' ) { echo "Selected"; } ?>>Dehri</option>
    <option value="Dinapur Nizamat" <?php if($plist->city =='Dinapur Nizamat' ) { echo "Selected"; } ?>>Dinapur Nizamat</option>
    <option value="Gaya" <?php if($plist->city =='Gaya' ) { echo "Selected"; } ?>>Gaya</option>
    <option value="Hajipur" <?php if($plist->city =='Hajipur' ) { echo "Selected"; } ?>>Hajipur</option>
    <option value="Jamalpur" <?php if($plist->city =='Jamalpur' ) { echo "Selected"; } ?>>Jamalpur</option>
    <option value="Katihar" <?php if($plist->city =='Katihar' ) { echo "Selected"; } ?>>Katihar</option>
    <option value="Madhubani" <?php if($plist->city =='Madhubani' ) { echo "Selected"; } ?>>Madhubani</option>
    <option value="Motihari" <?php if($plist->city =='Motihari' ) { echo "Selected"; } ?>>Motihari</option>
    <option value="Munger" <?php if($plist->city =='Munger' ) { echo "Selected"; } ?>>Munger</option>
    <option value="Muzaffarpur" <?php if($plist->city =='Muzaffarpur' ) { echo "Selected"; } ?>>Muzaffarpur</option>
    <option value="Patna" <?php if($plist->city =='Patna' ) { echo "Selected"; } ?>>Patna</option>
    <option value="Purnia" <?php if($plist->city =='Purnia' ) { echo "Selected"; } ?>>Purnia</option>
    <option value="Pusa" <?php if($plist->city =='Pusa' ) { echo "Selected"; } ?>>Pusa</option>
    <option value="Saharsa" <?php if($plist->city =='Saharsa' ) { echo "Selected"; } ?>>Saharsa</option>
    <option value="Samastipur" <?php if($plist->city =='Samastipur' ) { echo "Selected"; } ?>>Samastipur</option>
    <option value="Sasaram" <?php if($plist->city =='Sasaram' ) { echo "Selected"; } ?>>Sasaram</option>
    <option value="Sitamarhi" <?php if($plist->city =='Sitamarhi' ) { echo "Selected"; } ?>>Sitamarhi</option>
    <option value="Siwan" <?php if($plist->city =='Siwan' ) { echo "Selected"; } ?>>Siwan</option>
    <option value="Chandigarh" <?php if($plist->city =='Chandigarh' ) { echo "Selected"; } ?>>Chandigarh</option>
        <option value="Ambikapur" <?php if($plist->city =='Ambikapur' ) { echo "Selected"; } ?>>Ambikapur</option>
    <option value="Bhilai" <?php if($plist->city =='Bhilai' ) { echo "Selected"; } ?>>Bhilai</option>
    <option value="Bilaspur" <?php if($plist->city =='Bilaspur' ) { echo "Selected"; } ?>>Bilaspur</option>
    <option value="Dhamtari" <?php if($plist->city =='Dhamtari' ) { echo "Selected"; } ?>>Dhamtari</option>
    <option value="Durg" <?php if($plist->city =='Durg' ) { echo "Selected"; } ?>>Durg</option>
    <option value="Jagdalpur" <?php if($plist->city =='Jagdalpur' ) { echo "Selected"; } ?>>Jagdalpur</option>
    <option value="Raipur" <?php if($plist->city =='Raipur' ) { echo "Selected"; } ?>>Raipur</option>
    <option value="Rajnandgaon" <?php if($plist->city =='Rajnandgaon' ) { echo "Selected"; } ?>>Rajnandgaon</option>
        <option value="Delhi" <?php if($plist->city =='Delhi' ) { echo "Selected"; } ?>>Delhi</option>
    <option value="New Delhi" <?php if($plist->city =='New Delhi' ) { echo "Selected"; } ?>>New Delhi</option>
        <option value="Madgaon" <?php if($plist->city =='Madgaon' ) { echo "Selected"; } ?>>Madgaon</option>
    <option value="Panaji" <?php if($plist->city =='Panaji' ) { echo "Selected"; } ?>>Panaji</option>
        <option value="Ahmadabad" <?php if($plist->city =='Ahmadabad' ) { echo "Selected"; } ?>>Ahmadabad</option>
    <option value="Amreli" <?php if($plist->city =='Amreli' ) { echo "Selected"; } ?>>Amreli</option>
    <option value="Bharuch" <?php if($plist->city =='Bharuch' ) { echo "Selected"; } ?>>Bharuch</option>
    <option value="Bhavnagar" <?php if($plist->city =='Bhavnagar' ) { echo "Selected"; } ?>>Bhavnagar</option>
    <option value="Bhuj" <?php if($plist->city =='Bhuj' ) { echo "Selected"; } ?>>Bhuj</option>
    <option value="Dwarka" <?php if($plist->city =='Dwarka' ) { echo "Selected"; } ?>>Dwarka</option>
    <option value="Gandhinagar" <?php if($plist->city =='Gandhinagar' ) { echo "Selected"; } ?>>Gandhinagar</option>
    <option value="Godhra" <?php if($plist->city =='Godhra' ) { echo "Selected"; } ?>>Godhra</option>
    <option value="Jamnagar" <?php if($plist->city =='Jamnagar' ) { echo "Selected"; } ?>>Jamnagar</option>
    <option value="Junagadh" <?php if($plist->city =='Junagadh' ) { echo "Selected"; } ?>>Junagadh</option>
    <option value="Kandla" <?php if($plist->city =='Kandla' ) { echo "Selected"; } ?>>Kandla</option>
    <option value="Khambhat" <?php if($plist->city =='Khambhat' ) { echo "Selected"; } ?>>Khambhat</option>
    <option value="Kheda" <?php if($plist->city =='Kheda' ) { echo "Selected"; } ?>>Kheda</option>
    <option value="Mahesana" <?php if($plist->city =='Mahesana' ) { echo "Selected"; } ?>>Mahesana</option>
    <option value="Morvi" <?php if($plist->city =='Morvi' ) { echo "Selected"; } ?>>Morvi</option>
    <option value="Nadiad" <?php if($plist->city =='Nadiad' ) { echo "Selected"; } ?>>Nadiad</option>
    <option value="Navsari" <?php if($plist->city =='Navsari' ) { echo "Selected"; } ?>>Navsari</option>
    <option value="Okha" <?php if($plist->city =='Okha' ) { echo "Selected"; } ?>>Okha</option>
    <option value="Palanpur" <?php if($plist->city =='Palanpur' ) { echo "Selected"; } ?>>Palanpur</option>
    <option value="Patan" <?php if($plist->city =='Patan' ) { echo "Selected"; } ?>>Patan</option>
    <option value="Porbandar" <?php if($plist->city =='Porbandar' ) { echo "Selected"; } ?>>Porbandar</option>
    <option value="Rajkot" <?php if($plist->city =='Rajkot' ) { echo "Selected"; } ?>>Rajkot</option>
    <option value="Surat" <?php if($plist->city =='Surat' ) { echo "Selected"; } ?>>Surat</option>
    <option value="Surendranagar" <?php if($plist->city =='Surendranagar' ) { echo "Selected"; } ?>>Surendranagar</option>
    <option value="Valsad" <?php if($plist->city =='Valsad' ) { echo "Selected"; } ?>>Valsad</option>
    <option value="Veraval" <?php if($plist->city =='Veraval' ) { echo "Selected"; } ?>>Veraval</option>
        <option value="Ambala" <?php if($plist->city =='Ambala' ) { echo "Selected"; } ?>>Ambala</option>
    <option value="Bhiwani" <?php if($plist->city =='Bhiwani' ) { echo "Selected"; } ?>>Bhiwani</option>
    <option value="Chandigarh" <?php if($plist->city =='Chandigarh' ) { echo "Selected"; } ?>>Chandigarh</option>
    <option value="Faridabad" <?php if($plist->city =='Faridabad' ) { echo "Selected"; } ?>>Faridabad</option>
    <option value="Firozpur Jhirka" <?php if($plist->city =='Firozpur Jhirka' ) { echo "Selected"; } ?>>Firozpur Jhirka</option>
    <option value="Gurgaon" <?php if($plist->city =='Gurgaon' ) { echo "Selected"; } ?>>Gurgaon</option>
    <option value="Hansi" <?php if($plist->city =='Hansi' ) { echo "Selected"; } ?>>Hansi</option>
    <option value="Hisar" <?php if($plist->city =='Hisar' ) { echo "Selected"; } ?>>Hisar</option>
    <option value="Jind" <?php if($plist->city =='Jind' ) { echo "Selected"; } ?>>Jind</option>
    <option value="Kaithal" <?php if($plist->city =='Kaithal' ) { echo "Selected"; } ?>>Kaithal</option>
    <option value="Karnal" <?php if($plist->city =='Karnal' ) { echo "Selected"; } ?>>Karnal</option>
    <option value="Kurukshetra" <?php if($plist->city =='Kurukshetra' ) { echo "Selected"; } ?>>Kurukshetra</option>
    <option value="Panipat" <?php if($plist->city =='Panipat' ) { echo "Selected"; } ?>>Panipat</option>
    <option value="Pehowa" <?php if($plist->city =='Pehowa' ) { echo "Selected"; } ?>>Pehowa</option>
    <option value="Rewari" <?php if($plist->city =='Rewari' ) { echo "Selected"; } ?>>Rewari</option>
    <option value="Rohtak" <?php if($plist->city =='Rohtak' ) { echo "Selected"; } ?>>Rohtak</option>
    <option value="Sirsa" <?php if($plist->city =='Sirsa' ) { echo "Selected"; } ?>>Sirsa</option>
    <option value="Sonipat" <?php if($plist->city =='Sonipat' ) { echo "Selected"; } ?>>Sonipat</option>
        <option value="Bilaspur" <?php if($plist->city =='Bilaspur' ) { echo "Selected"; } ?>>Bilaspur</option>
    <option value="Chamba" <?php if($plist->city =='Chamba' ) { echo "Selected"; } ?>>Chamba</option>
    <option value="Dalhousie" <?php if($plist->city =='Dalhousie' ) { echo "Selected"; } ?>>Dalhousie</option>
    <option value="Dharmshala" <?php if($plist->city =='Dharmshala' ) { echo "Selected"; } ?>>Dharmshala</option>
    <option value="Hamirpur" <?php if($plist->city =='Hamirpur' ) { echo "Selected"; } ?>>Hamirpur</option>
    <option value="Kangra" <?php if($plist->city =='Kangra' ) { echo "Selected"; } ?>>Kangra</option>
    <option value="Kullu" <?php if($plist->city =='Kullu' ) { echo "Selected"; } ?>>Kullu</option>
    <option value="Mandi" <?php if($plist->city =='Mandi' ) { echo "Selected"; } ?>>Mandi</option>
    <option value="Nahan" <?php if($plist->city =='Nahan' ) { echo "Selected"; } ?>>Nahan</option>
    <option value="Shimla" <?php if($plist->city =='Shimla' ) { echo "Selected"; } ?>>Shimla</option>
    <option value="Una" <?php if($plist->city =='Una' ) { echo "Selected"; } ?>>Una</option>
        <option value="Anantnag" <?php if($plist->city =='Anantnag' ) { echo "Selected"; } ?>>Anantnag</option>
    <option value="Baramula" <?php if($plist->city =='Baramula' ) { echo "Selected"; } ?>>Baramula</option>
    <option value="Doda" <?php if($plist->city =='Doda' ) { echo "Selected"; } ?>>Doda</option>
    <option value="Gulmarg" <?php if($plist->city =='Gulmarg' ) { echo "Selected"; } ?>>Gulmarg</option>
    <option value="Jammu" <?php if($plist->city =='Jammu' ) { echo "Selected"; } ?>>Jammu</option>
    <option value="Kathua" <?php if($plist->city =='Kathua' ) { echo "Selected"; } ?>>Kathua</option>
    <option value="Leh" <?php if($plist->city =='Leh' ) { echo "Selected"; } ?>>Leh</option>
    <option value="Punch" <?php if($plist->city =='Punch' ) { echo "Selected"; } ?>>Punch</option>
    <option value="Rajauri" <?php if($plist->city =='Rajauri' ) { echo "Selected"; } ?>>Rajauri</option>
    <option value="Srinagar" <?php if($plist->city =='Srinagar' ) { echo "Selected"; } ?>>Srinagar</option>
    <option value="Udhampur" <?php if($plist->city =='Udhampur' ) { echo "Selected"; } ?>>Udhampur</option>
        <option value="Bokaro" <?php if($plist->city =='Bokaro' ) { echo "Selected"; } ?>>Bokaro</option>
    <option value="Chaibasa" <?php if($plist->city =='Chaibasa' ) { echo "Selected"; } ?>>Chaibasa</option>
    <option value="Deoghar" <?php if($plist->city =='Deoghar' ) { echo "Selected"; } ?>>Deoghar</option>
    <option value="Dhanbad" <?php if($plist->city =='Dhanbad' ) { echo "Selected"; } ?>>Dhanbad</option>
    <option value="Dumka" <?php if($plist->city =='Dumka' ) { echo "Selected"; } ?>>Dumka</option>
    <option value="Giridih" <?php if($plist->city =='Giridih' ) { echo "Selected"; } ?>>Giridih</option>
    <option value="Hazaribag" <?php if($plist->city =='Hazaribag' ) { echo "Selected"; } ?>>Hazaribag</option>
    <option value="Jamshedpur" <?php if($plist->city =='Jamshedpur' ) { echo "Selected"; } ?>>Jamshedpur</option>
    <option value="Jharia" <?php if($plist->city =='Jharia' ) { echo "Selected"; } ?>>Jharia</option>
    <option value="Rajmahal" <?php if($plist->city =='Rajmahal' ) { echo "Selected"; } ?>>Rajmahal</option>
    <option value="Ranchi" <?php if($plist->city =='Ranchi' ) { echo "Selected"; } ?>>Ranchi</option>
    <option value="Saraikela" <?php if($plist->city =='Saraikela' ) { echo "Selected"; } ?>>Saraikela</option>
        <option value="Badami" <?php if($plist->city =='Badami' ) { echo "Selected"; } ?>>Badami</option>
    <option value="Ballari" <?php if($plist->city =='Ballari' ) { echo "Selected"; } ?>>Ballari</option>
    <option value="Bangalore" <?php if($plist->city =='Bangalore' ) { echo "Selected"; } ?>>Bangalore</option>
    <option value="Belgavi" <?php if($plist->city =='Belgavi' ) { echo "Selected"; } ?>>Belgavi</option>
    <option value="Bhadravati" <?php if($plist->city =='Bhadravati' ) { echo "Selected"; } ?>>Bhadravati</option>
    <option value="Bidar" <?php if($plist->city =='Bidar' ) { echo "Selected"; } ?>>Bidar</option>
    <option value="Chikkamagaluru" <?php if($plist->city =='Chikkamagaluru' ) { echo "Selected"; } ?>>Chikkamagaluru</option>
    <option value="Chitradurga" <?php if($plist->city =='Chitradurga' ) { echo "Selected"; } ?>>Chitradurga</option>
    <option value="Davangere" <?php if($plist->city =='Davangere' ) { echo "Selected"; } ?>>Davangere</option>
    <option value="Halebid" <?php if($plist->city =='Halebid' ) { echo "Selected"; } ?>>Halebid</option>
    <option value="Hassan" <?php if($plist->city =='Hassan' ) { echo "Selected"; } ?>>Hassan</option>
    <option value="Hubballi-Dharwa" <?php if($plist->city =='Hubballi-Dharwa' ) { echo "Selected"; } ?>>Hubballi-Dharwa</option>
    <option value="Kalaburagi" <?php if($plist->city =='Kalaburagi' ) { echo "Selected"; } ?>>Kalaburagi</option>
    <option value="Kolar" <?php if($plist->city =='Kolar' ) { echo "Selected"; } ?>>Kolar</option>
    <option value="Madikeri" <?php if($plist->city =='Madikeri' ) { echo "Selected"; } ?>>Madikeri</option>
    <option value="Mandya" <?php if($plist->city =='Mandya' ) { echo "Selected"; } ?>>Mandya</option>
    <option value="Mangaluru" <?php if($plist->city =='Mangaluru' ) { echo "Selected"; } ?>>Mangaluru</option>
    <option value="Mysuru" <?php if($plist->city =='Mysuru' ) { echo "Selected"; } ?>>Mysuru</option>
    <option value="Raichur" <?php if($plist->city =='Raichur' ) { echo "Selected"; } ?>>Raichur</option>
    <option value="Shivamogga" <?php if($plist->city =='Shivamogga' ) { echo "Selected"; } ?>>Shivamogga</option>
    <option value="Shravanabelagola" <?php if($plist->city =='Shravanabelagola' ) { echo "Selected"; } ?>>Shravanabelagola</option>
    <option value="Shrirangapattana" <?php if($plist->city =='Shrirangapattana' ) { echo "Selected"; } ?>>Shrirangapattana</option>
    <option value="Tumkuru" <?php if($plist->city =='Tumkuru' ) { echo "Selected"; } ?>>Tumkuru</option>
        <option value="Alappuzha" <?php if($plist->city =='Alappuzha' ) { echo "Selected"; } ?>>Alappuzha</option>
    <option value="Badagara" <?php if($plist->city =='Badagara' ) { echo "Selected"; } ?>>Badagara</option>
    <option value="Idukki" <?php if($plist->city =='Idukki' ) { echo "Selected"; } ?>>Idukki</option>
    <option value="Kannur" <?php if($plist->city =='Kannur' ) { echo "Selected"; } ?>>Kannur</option>
    <option value="Kochi" <?php if($plist->city =='Kochi' ) { echo "Selected"; } ?>>Kochi</option>
    <option value="Kollam" <?php if($plist->city =='Kollam' ) { echo "Selected"; } ?>>Kollam</option>
    <option value="Kottayam" <?php if($plist->city =='Kottayam' ) { echo "Selected"; } ?>>Kottayam</option>
    <option value="Kozhikode" <?php if($plist->city =='Kozhikode' ) { echo "Selected"; } ?>>Kozhikode</option>
    <option value="Mattancheri" <?php if($plist->city =='Mattancheri' ) { echo "Selected"; } ?>>Mattancheri</option>
    <option value="Palakkad" <?php if($plist->city =='Palakkad' ) { echo "Selected"; } ?>>Palakkad</option>
    <option value="Thalassery" <?php if($plist->city =='Thalassery' ) { echo "Selected"; } ?>>Thalassery</option>
    <option value="Thiruvananthapuram" <?php if($plist->city =='Thiruvananthapuram' ) { echo "Selected"; } ?>>Thiruvananthapuram</option>
    <option value="Thrissur" <?php if($plist->city =='Thrissur' ) { echo "Selected"; } ?>>Thrissur</option>
        <option value="Balaghat" <?php if($plist->city =='Balaghat' ) { echo "Selected"; } ?>>Balaghat</option>
    <option value="Barwani" <?php if($plist->city =='Barwani' ) { echo "Selected"; } ?>>Barwani</option>
    <option value="Betul" <?php if($plist->city =='Betul' ) { echo "Selected"; } ?>>Betul</option>
    <option value="Bharhut" <?php if($plist->city =='Bharhut' ) { echo "Selected"; } ?>>Bharhut</option>
    <option value="Bhind" <?php if($plist->city =='Bhind' ) { echo "Selected"; } ?>>Bhind</option>
    <option value="Bhojpur" <?php if($plist->city =='Bhojpur' ) { echo "Selected"; } ?>>Bhojpur</option>
    <option value="Bhopal" <?php if($plist->city =='Bhopal' ) { echo "Selected"; } ?>>Bhopal</option>
    <option value="Burhanpur" <?php if($plist->city =='Burhanpur' ) { echo "Selected"; } ?>>Burhanpur</option>
    <option value="Chhatarpur" <?php if($plist->city =='Chhatarpur' ) { echo "Selected"; } ?>>Chhatarpur</option>
    <option value="Chhindwara" <?php if($plist->city =='Chhindwara' ) { echo "Selected"; } ?>>Chhindwara</option>
    <option value="Damoh" <?php if($plist->city =='Damoh' ) { echo "Selected"; } ?>>Damoh</option>
    <option value="Datia" <?php if($plist->city =='Datia' ) { echo "Selected"; } ?>>Datia</option>
    <option value="Dewas" <?php if($plist->city =='Dewas' ) { echo "Selected"; } ?>>Dewas</option>
    <option value="Dhar" <?php if($plist->city =='Dhar' ) { echo "Selected"; } ?>>Dhar</option>
    <option value="Guna" <?php if($plist->city =='Guna' ) { echo "Selected"; } ?>>Guna</option>
    <option value="Gwalior" <?php if($plist->city =='Gwalior' ) { echo "Selected"; } ?>>Gwalior</option>
    <option value="Hoshangabad" <?php if($plist->city =='Hoshangabad' ) { echo "Selected"; } ?>>Hoshangabad</option>
    <option value="Indore" <?php if($plist->city =='Indore' ) { echo "Selected"; } ?>>Indore</option>
    <option value="Itarsi" <?php if($plist->city =='Itarsi' ) { echo "Selected"; } ?>>Itarsi</option>
    <option value="Jabalpur" <?php if($plist->city =='Jabalpur' ) { echo "Selected"; } ?>>Jabalpur</option>
    <option value="Jhabua" <?php if($plist->city =='Jhabua' ) { echo "Selected"; } ?>>Jhabua</option>
    <option value="Khajuraho" <?php if($plist->city =='Khajuraho' ) { echo "Selected"; } ?>>Khajuraho</option>
    <option value="Khandwa" <?php if($plist->city =='Khandwa' ) { echo "Selected"; } ?>>Khandwa</option>
    <option value="Khargon" <?php if($plist->city =='Khargon' ) { echo "Selected"; } ?>>Khargon</option>
    <option value="Maheshwar" <?php if($plist->city =='Maheshwar' ) { echo "Selected"; } ?>>Maheshwar</option>
    <option value="Mandla" <?php if($plist->city =='Mandla' ) { echo "Selected"; } ?>>Mandla</option>
    <option value="Mandsaur" <?php if($plist->city =='Mandsaur' ) { echo "Selected"; } ?>>Mandsaur</option>
    <option value="Mhow" <?php if($plist->city =='Mhow' ) { echo "Selected"; } ?>>Mhow</option>
    <option value="Morena" <?php if($plist->city =='Morena' ) { echo "Selected"; } ?>>Morena</option>
    <option value="Murwara" <?php if($plist->city =='Murwara' ) { echo "Selected"; } ?>>Murwara</option>
    <option value="Narsimhapur" <?php if($plist->city =='Narsimhapur' ) { echo "Selected"; } ?>>Narsimhapur</option>
    <option value="Narsinghgarh" <?php if($plist->city =='Narsinghgarh' ) { echo "Selected"; } ?>>Narsinghgarh</option>
    <option value="Narwar" <?php if($plist->city =='Narwar' ) { echo "Selected"; } ?>>Narwar</option>
    <option value="Neemuch" <?php if($plist->city =='Neemuch' ) { echo "Selected"; } ?>>Neemuch</option>
    <option value="Nowgong" <?php if($plist->city =='Nowgong' ) { echo "Selected"; } ?>>Nowgong</option>
    <option value="Orchha" <?php if($plist->city =='Orchha' ) { echo "Selected"; } ?>>Orchha</option>
    <option value="Panna" <?php if($plist->city =='Panna' ) { echo "Selected"; } ?>>Panna</option>
    <option value="Raisen" <?php if($plist->city =='Raisen' ) { echo "Selected"; } ?>>Raisen</option>
    <option value="Rajgarh" <?php if($plist->city =='Rajgarh' ) { echo "Selected"; } ?>>Rajgarh</option>
    <option value="Ratlam" <?php if($plist->city =='Ratlam' ) { echo "Selected"; } ?>>Ratlam</option>
    <option value="Rewa" <?php if($plist->city =='Rewa' ) { echo "Selected"; } ?>>Rewa</option>
    <option value="Sagar" <?php if($plist->city =='Sagar' ) { echo "Selected"; } ?>>Sagar</option>
    <option value="Sarangpur" <?php if($plist->city =='Sarangpur' ) { echo "Selected"; } ?>>Sarangpur</option>
    <option value="Satna" <?php if($plist->city =='Satna' ) { echo "Selected"; } ?>>Satna</option>
    <option value="Sehore" <?php if($plist->city =='Sehore' ) { echo "Selected"; } ?>>Sehore</option>
    <option value="Seoni" <?php if($plist->city =='Seoni' ) { echo "Selected"; } ?>>Seoni</option>
    <option value="Shahdol" <?php if($plist->city =='Shahdol' ) { echo "Selected"; } ?>>Shahdol</option>
    <option value="Shajapur" <?php if($plist->city =='Shajapur' ) { echo "Selected"; } ?>>Shajapur</option>
    <option value="Sheopur" <?php if($plist->city =='Sheopur' ) { echo "Selected"; } ?>>Sheopur</option>
    <option value="Shivpuri" <?php if($plist->city =='Shivpuri' ) { echo "Selected"; } ?>>Shivpuri</option>
    <option value="Ujjain" <?php if($plist->city =='Ujjain' ) { echo "Selected"; } ?>>Ujjain</option>
    <option value="Vidisha" <?php if($plist->city =='Vidisha' ) { echo "Selected"; } ?>>Vidisha</option>
        <option value="Ahmadnagar" <?php if($plist->city =='Ahmadnagar' ) { echo "Selected"; } ?>>Ahmadnagar</option>
    <option value="Akola" <?php if($plist->city =='Akola' ) { echo "Selected"; } ?>>Akola</option>
    <option value="Amravati" <?php if($plist->city =='Amravati' ) { echo "Selected"; } ?>>Amravati</option>
    <option value="Aurangabad" <?php if($plist->city =='Aurangabad' ) { echo "Selected"; } ?>>Aurangabad</option>
    <option value="Bhandara" <?php if($plist->city =='Bhandara' ) { echo "Selected"; } ?>>Bhandara</option>
    <option value="Bhusawal" <?php if($plist->city =='Bhusawal' ) { echo "Selected"; } ?>>Bhusawal</option>
    <option value="Bid" <?php if($plist->city =='Bid' ) { echo "Selected"; } ?>>Bid</option>
    <option value="Buldana" <?php if($plist->city =='Buldana' ) { echo "Selected"; } ?>>Buldana</option>
    <option value="Chandrapur" <?php if($plist->city =='Chandrapur' ) { echo "Selected"; } ?>>Chandrapur</option>
    <option value="Daulatabad" <?php if($plist->city =='Daulatabad' ) { echo "Selected"; } ?>>Daulatabad</option>
    <option value="Dhule" <?php if($plist->city =='Dhule' ) { echo "Selected"; } ?>>Dhule</option>
    <option value="Jalgaon" <?php if($plist->city =='Jalgaon' ) { echo "Selected"; } ?>>Jalgaon</option>
    <option value="Kalyan" <?php if($plist->city =='Kalyan' ) { echo "Selected"; } ?>>Kalyan</option>
    <option value="Karli" <?php if($plist->city =='Karli' ) { echo "Selected"; } ?>>Karli</option>
    <option value="Kolhapur" <?php if($plist->city =='Kolhapur' ) { echo "Selected"; } ?>>Kolhapur</option>
    <option value="Mahabaleshwar" <?php if($plist->city =='Mahabaleshwar' ) { echo "Selected"; } ?>>Mahabaleshwar</option>
    <option value="Malegaon" <?php if($plist->city =='Malegaon' ) { echo "Selected"; } ?>>Malegaon</option>
    <option value="Matheran" <?php if($plist->city =='Matheran' ) { echo "Selected"; } ?>>Matheran</option>
    <option value="Mumbai" <?php if($plist->city =='Mumbai' ) { echo "Selected"; } ?>>Mumbai</option>
    <option value="Nagpur" <?php if($plist->city =='Nagpur' ) { echo "Selected"; } ?>>Nagpur</option>
    <option value="Nanded" <?php if($plist->city =='Nanded' ) { echo "Selected"; } ?>>Nanded</option>
    <option value="Nashik" <?php if($plist->city =='Nashik' ) { echo "Selected"; } ?>>Nashik</option>
    <option value="Osmanabad" <?php if($plist->city =='Osmanabad' ) { echo "Selected"; } ?>>Osmanabad</option>
    <option value="Pandharpur" <?php if($plist->city =='Pandharpur' ) { echo "Selected"; } ?>>Pandharpur</option>
    <option value="Parbhani" <?php if($plist->city =='Parbhani' ) { echo "Selected"; } ?>>Parbhani</option>
    <option value="Pune" <?php if($plist->city =='Pune' ) { echo "Selected"; } ?>>Pune</option>
    <option value="Ratnagiri" <?php if($plist->city =='Ratnagiri' ) { echo "Selected"; } ?>>Ratnagiri</option>
    <option value="Sangli" <?php if($plist->city =='Sangli' ) { echo "Selected"; } ?>>Sangli</option>
    <option value="Satara" <?php if($plist->city =='Satara' ) { echo "Selected"; } ?>>Satara</option>
    <option value="Sevagram" <?php if($plist->city =='Sevagram' ) { echo "Selected"; } ?>>Sevagram</option>
    <option value="Solapur" <?php if($plist->city =='Solapur' ) { echo "Selected"; } ?>>Solapur</option>
    <option value="Thane" <?php if($plist->city =='Thane' ) { echo "Selected"; } ?>>Thane</option>
    <option value="Ulhasnagar" <?php if($plist->city =='Ulhasnagar' ) { echo "Selected"; } ?>>Ulhasnagar</option>
    <option value="Vasai-Virar" <?php if($plist->city =='Vasai-Virar' ) { echo "Selected"; } ?>>Vasai-Virar</option>
    <option value="Wardha" <?php if($plist->city =='Wardha' ) { echo "Selected"; } ?>>Wardha</option>
    <option value="Yavatmal" <?php if($plist->city =='Yavatmal' ) { echo "Selected"; } ?>>Yavatmal</option>
    <option value="Imphal" <?php if($plist->city =='Imphal' ) { echo "Selected"; } ?>>Imphal</option>
        <option value="Cherrapunji" <?php if($plist->city =='Cherrapunji' ) { echo "Selected"; } ?>>Cherrapunji</option>
    <option value="Shillong" <?php if($plist->city =='Shillong' ) { echo "Selected"; } ?>>Shillong</option>
        <option value="Aizawl" <?php if($plist->city =='Aizawl' ) { echo "Selected"; } ?>>Aizawl</option>
    <option value="Lunglei" <?php if($plist->city =='Lunglei' ) { echo "Selected"; } ?>>Lunglei</option>
        <option value="Kohima" <?php if($plist->city =='Kohima' ) { echo "Selected"; } ?>>Kohima</option>
    <option value="Mon" <?php if($plist->city =='Mon' ) { echo "Selected"; } ?>>Mon</option>
    <option value="Phek" <?php if($plist->city =='Phek' ) { echo "Selected"; } ?>>Phek</option>
    <option value="Wokha" <?php if($plist->city =='Wokha' ) { echo "Selected"; } ?>>Wokha</option>
    <option value="Zunheboto" <?php if($plist->city =='Zunheboto' ) { echo "Selected"; } ?>>Zunheboto</option>
        <option value="Balangir" <?php if($plist->city =='Balangir' ) { echo "Selected"; } ?>>Balangir</option>
    <option value="Baleshwar" <?php if($plist->city =='Baleshwar' ) { echo "Selected"; } ?>>Baleshwar</option>
    <option value="Baripada" <?php if($plist->city =='Baripada' ) { echo "Selected"; } ?>>Baripada</option>
    <option value="Bhubaneshwar" <?php if($plist->city =='Bhubaneshwar' ) { echo "Selected"; } ?>>Bhubaneshwar</option>
    <option value="Brahmapur" <?php if($plist->city =='Brahmapur' ) { echo "Selected"; } ?>>Brahmapur</option>
    <option value="Cuttack" <?php if($plist->city =='Cuttack' ) { echo "Selected"; } ?>>Cuttack</option>
    <option value="Dhenkanal" <?php if($plist->city =='Dhenkanal' ) { echo "Selected"; } ?>>Dhenkanal</option>
    <option value="Keonjhar" <?php if($plist->city =='Keonjhar' ) { echo "Selected"; } ?>>Keonjhar</option>
    <option value="Konark" <?php if($plist->city =='Konark' ) { echo "Selected"; } ?>>Konark</option>
    <option value="Koraput" <?php if($plist->city =='Koraput' ) { echo "Selected"; } ?>>Koraput</option>
    <option value="Paradip" <?php if($plist->city =='Paradip' ) { echo "Selected"; } ?>>Paradip</option>
    <option value="Phulabani" <?php if($plist->city =='Phulabani' ) { echo "Selected"; } ?>>Phulabani</option>
    <option value="Puri" <?php if($plist->city =='Puri' ) { echo "Selected"; } ?>>Puri</option>
    <option value="Sambalpur" <?php if($plist->city =='Sambalpur' ) { echo "Selected"; } ?>>Sambalpur</option>
    <option value="Udayagiri" <?php if($plist->city =='Udayagiri' ) { echo "Selected"; } ?>>Udayagiri</option>
        <option value="Amritsar" <?php if($plist->city =='Amritsar' ) { echo "Selected"; } ?>>Amritsar</option>
    <option value="Batala" <?php if($plist->city =='Batala' ) { echo "Selected"; } ?>>Batala</option>
    <option value="Chandigarh" <?php if($plist->city =='Chandigarh' ) { echo "Selected"; } ?>>Chandigarh</option>
    <option value="Faridkot" <?php if($plist->city =='Faridkot' ) { echo "Selected"; } ?>>Faridkot</option>
    <option value="Firozpur" <?php if($plist->city =='Firozpur' ) { echo "Selected"; } ?>>Firozpur</option>
    <option value="Gurdaspur" <?php if($plist->city =='Gurdaspur' ) { echo "Selected"; } ?>>Gurdaspur</option>
    <option value="Hoshiarpur" <?php if($plist->city =='Hoshiarpur' ) { echo "Selected"; } ?>>Hoshiarpur</option>
    <option value="Jalandhar" <?php if($plist->city =='Jalandhar' ) { echo "Selected"; } ?>>Jalandhar</option>
    <option value="Kapurthala" <?php if($plist->city =='Kapurthala' ) { echo "Selected"; } ?>>Kapurthala</option>
    <option value="Ludhiana" <?php if($plist->city =='Ludhiana' ) { echo "Selected"; } ?>>Ludhiana</option>
    <option value="Nabha" <?php if($plist->city =='Nabha' ) { echo "Selected"; } ?>>Nabha</option>
    <option value="Patiala" <?php if($plist->city =='Patiala' ) { echo "Selected"; } ?>>Patiala</option>
    <option value="Rupnagar" <?php if($plist->city =='Rupnagar' ) { echo "Selected"; } ?>>Rupnagar</option>
    <option value="Sangrur" <?php if($plist->city =='Sangrur' ) { echo "Selected"; } ?>>Sangrur</option>
        <option value="Abu" <?php if($plist->city =='Abu' ) { echo "Selected"; } ?>>Abu</option>
    <option value="Ajmer" <?php if($plist->city =='Ajmer' ) { echo "Selected"; } ?>>Ajmer</option>
    <option value="Alwar" <?php if($plist->city =='Alwar' ) { echo "Selected"; } ?>>Alwar</option>
    <option value="Amer" <?php if($plist->city =='Amer' ) { echo "Selected"; } ?>>Amer</option>
    <option value="Barmer" <?php if($plist->city =='Barmer' ) { echo "Selected"; } ?>>Barmer</option>
    <option value="Beawar" <?php if($plist->city =='Beawar' ) { echo "Selected"; } ?>>Beawar</option>
    <option value="Bharatpur" <?php if($plist->city =='Bharatpur' ) { echo "Selected"; } ?>>Bharatpur</option>
    <option value="Bhilwara" <?php if($plist->city =='Bhilwara' ) { echo "Selected"; } ?>>Bhilwara</option>
    <option value="Bikaner" <?php if($plist->city =='Bikaner' ) { echo "Selected"; } ?>>Bikaner</option>
    <option value="Bundi" <?php if($plist->city =='Bundi' ) { echo "Selected"; } ?>>Bundi</option>
    <option value="Chittaurgarh" <?php if($plist->city =='Chittaurgarh' ) { echo "Selected"; } ?>>Chittaurgarh</option>
    <option value="Churu" <?php if($plist->city =='Churu' ) { echo "Selected"; } ?>>Churu</option>
    <option value="Dhaulpur" <?php if($plist->city =='Dhaulpur' ) { echo "Selected"; } ?>>Dhaulpur</option>
    <option value="Dungarpur" <?php if($plist->city =='Dungarpur' ) { echo "Selected"; } ?>>Dungarpur</option>
    <option value="Ganganagar" <?php if($plist->city =='Ganganagar' ) { echo "Selected"; } ?>>Ganganagar</option>
    <option value="Hanumangarh" <?php if($plist->city =='Hanumangarh' ) { echo "Selected"; } ?>>Hanumangarh</option>
    <option value="Jaipur" <?php if($plist->city =='Jaipur' ) { echo "Selected"; } ?>>Jaipur</option>
    <option value="Jaisalmer" <?php if($plist->city =='Jaisalmer' ) { echo "Selected"; } ?>>Jaisalmer</option>
    <option value="Jalor" <?php if($plist->city =='Jalor' ) { echo "Selected"; } ?>>Jalor</option>
    <option value="Jhalawar" <?php if($plist->city =='Jhalawar' ) { echo "Selected"; } ?>>Jhalawar</option>
    <option value="Jhunjhunu" <?php if($plist->city =='Jhunjhunu' ) { echo "Selected"; } ?>>Jhunjhunu</option>
    <option value="Jodhpur" <?php if($plist->city =='Jodhpur' ) { echo "Selected"; } ?>>Jodhpur</option>
    <option value="Kishangarh" <?php if($plist->city =='Kishangarh' ) { echo "Selected"; } ?>>Kishangarh</option>
    <option value="Kota" <?php if($plist->city =='Kota' ) { echo "Selected"; } ?>>Kota</option>
    <option value="Merta" <?php if($plist->city =='Merta' ) { echo "Selected"; } ?>>Merta</option>
    <option value="Nagaur" <?php if($plist->city =='Nagaur' ) { echo "Selected"; } ?>>Nagaur</option>
    <option value="Nathdwara" <?php if($plist->city =='Nathdwara' ) { echo "Selected"; } ?>>Nathdwara</option>
    <option value="Pali" <?php if($plist->city =='Pali' ) { echo "Selected"; } ?>>Pali</option>
    <option value="Phalodi" <?php if($plist->city =='Phalodi' ) { echo "Selected"; } ?>>Phalodi</option>
    <option value="Pushkar" <?php if($plist->city =='Pushkar' ) { echo "Selected"; } ?>>Pushkar</option>
    <option value="Sawai Madhopur" <?php if($plist->city =='Sawai Madhopur' ) { echo "Selected"; } ?>>Sawai Madhopur</option>
    <option value="Shahpura" <?php if($plist->city =='Shahpura' ) { echo "Selected"; } ?>>Shahpura</option>
    <option value="Sikar" <?php if($plist->city =='Sikar' ) { echo "Selected"; } ?>>Sikar</option>
    <option value="Sirohi" <?php if($plist->city =='Sirohi' ) { echo "Selected"; } ?>>Sirohi</option>
    <option value="Tonk" <?php if($plist->city =='Tonk' ) { echo "Selected"; } ?>>Tonk</option>
    <option value="Udaipur" <?php if($plist->city =='Udaipur' ) { echo "Selected"; } ?>>Udaipur</option>
        <option value="Gangtok" <?php if($plist->city =='Gangtok' ) { echo "Selected"; } ?>>Gangtok</option>
    <option value="Gyalsing" <?php if($plist->city =='Gyalsing' ) { echo "Selected"; } ?>>Gyalsing</option>
    <option value="Lachung" <?php if($plist->city =='Lachung' ) { echo "Selected"; } ?>>Lachung</option>
    <option value="Mangan" <?php if($plist->city =='Mangan' ) { echo "Selected"; } ?>>Mangan</option>
        <option value="Arcot" <?php if($plist->city =='Arcot' ) { echo "Selected"; } ?>>Arcot</option>
    <option value="Chengalpattu" <?php if($plist->city =='Chengalpattu' ) { echo "Selected"; } ?>>Chengalpattu</option>
    <option value="Chennai" <?php if($plist->city =='Chennai' ) { echo "Selected"; } ?>>Chennai</option>
    <option value="Chidambaram" <?php if($plist->city =='Chidambaram' ) { echo "Selected"; } ?>>Chidambaram</option>
    <option value="Coimbatore" <?php if($plist->city =='Coimbatore' ) { echo "Selected"; } ?>>Coimbatore</option>
    <option value="Cuddalore" <?php if($plist->city =='Cuddalore' ) { echo "Selected"; } ?>>Cuddalore</option>
    <option value="Dharmapuri" <?php if($plist->city =='Dharmapuri' ) { echo "Selected"; } ?>>Dharmapuri</option>
    <option value="Dindigul" <?php if($plist->city =='Dindigul' ) { echo "Selected"; } ?>>Dindigul</option>
    <option value="Erode" <?php if($plist->city =='Erode' ) { echo "Selected"; } ?>>Erode</option>
    <option value="Kanchipuram" <?php if($plist->city =='Kanchipuram' ) { echo "Selected"; } ?>>Kanchipuram</option>
    <option value="Kanniyakumari" <?php if($plist->city =='Kanniyakumari' ) { echo "Selected"; } ?>>Kanniyakumari</option>
    <option value="Kodaikanal" <?php if($plist->city =='Kodaikanal' ) { echo "Selected"; } ?>>Kodaikanal</option>
    <option value="Kumbakonam" <?php if($plist->city =='Kumbakonam' ) { echo "Selected"; } ?>>Kumbakonam</option>
    <option value="Madurai" <?php if($plist->city =='Madurai' ) { echo "Selected"; } ?>>Madurai</option>
    <option value="Mamallapuram" <?php if($plist->city =='Mamallapuram' ) { echo "Selected"; } ?>>Mamallapuram</option>
    <option value="Nagappattinam" <?php if($plist->city =='Nagappattinam' ) { echo "Selected"; } ?>>Nagappattinam</option>
    <option value="Nagercoil" <?php if($plist->city =='Nagercoil' ) { echo "Selected"; } ?>>Nagercoil</option>
    <option value="Palayankottai" <?php if($plist->city =='Palayankottai' ) { echo "Selected"; } ?>>Palayankottai</option>
    <option value="Pudukkottai" <?php if($plist->city =='Pudukkottai' ) { echo "Selected"; } ?>>Pudukkottai</option>
    <option value="Rajapalaiyam" <?php if($plist->city =='Rajapalaiyam' ) { echo "Selected"; } ?>>Rajapalaiyam</option>
    <option value="Ramanathapuram" <?php if($plist->city =='Ramanathapuram' ) { echo "Selected"; } ?>>Ramanathapuram</option>
    <option value="Salem" <?php if($plist->city =='Salem' ) { echo "Selected"; } ?>>Salem</option>
    <option value="Thanjavur" <?php if($plist->city =='Thanjavur' ) { echo "Selected"; } ?>>Thanjavur</option>
    <option value="Tiruchchirappalli" <?php if($plist->city =='Tiruchchirappalli' ) { echo "Selected"; } ?>>Tiruchchirappalli</option>
    <option value="Tirunelveli" <?php if($plist->city =='Tirunelveli' ) { echo "Selected"; } ?>>Tirunelveli</option>
    <option value="Tiruppur" <?php if($plist->city =='Tiruppur' ) { echo "Selected"; } ?>>Tiruppur</option>
    <option value="Tuticorin" <?php if($plist->city =='Tuticorin' ) { echo "Selected"; } ?>>Tuticorin</option>
    <option value="Udhagamandalam" <?php if($plist->city =='Udhagamandalam' ) { echo "Selected"; } ?>>Udhagamandalam</option>
    <option value="Vellore" <?php if($plist->city =='Vellore' ) { echo "Selected"; } ?>>Vellore</option>
        <option value="Hyderabad" <?php if($plist->city =='Hyderabad' ) { echo "Selected"; } ?>>Hyderabad</option>
    <option value="Karimnagar" <?php if($plist->city =='Karimnagar' ) { echo "Selected"; } ?>>Karimnagar</option>
    <option value="Khammam" <?php if($plist->city =='Khammam' ) { echo "Selected"; } ?>>Khammam</option>
    <option value="Mahbubnagar" <?php if($plist->city =='Mahbubnagar' ) { echo "Selected"; } ?>>Mahbubnagar</option>
    <option value="Nizamabad" <?php if($plist->city =='Nizamabad' ) { echo "Selected"; } ?>>Nizamabad</option>
    <option value="Sangareddi" <?php if($plist->city =='Sangareddi' ) { echo "Selected"; } ?>>Sangareddi</option>
    <option value="Warangal" <?php if($plist->city =='Warangal' ) { echo "Selected"; } ?>>Warangal</option>
    <option value="Agartala" <?php if($plist->city =='Agartala' ) { echo "Selected"; } ?>>Agartala</option>
        <option value="Agra" <?php if($plist->city =='Agra' ) { echo "Selected"; } ?>>Agra</option>
    <option value="Aligarh" <?php if($plist->city =='Aligarh' ) { echo "Selected"; } ?>>Aligarh</option>
    <option value="Allahabad" <?php if($plist->city =='Allahabad' ) { echo "Selected"; } ?>>Allahabad</option>
    <option value="Amroha" <?php if($plist->city =='Amroha' ) { echo "Selected"; } ?>>Amroha</option>
    <option value="Ayodhya" <?php if($plist->city =='Ayodhya' ) { echo "Selected"; } ?>>Ayodhya</option>
    <option value="Azamgarh" <?php if($plist->city =='Azamgarh' ) { echo "Selected"; } ?>>Azamgarh</option>
    <option value="Bahraich" <?php if($plist->city =='Bahraich' ) { echo "Selected"; } ?>>Bahraich</option>
    <option value="Ballia" <?php if($plist->city =='Ballia' ) { echo "Selected"; } ?>>Ballia</option>
    <option value="Banda" <?php if($plist->city =='Banda' ) { echo "Selected"; } ?>>Banda</option>
    <option value="Bara Banki" <?php if($plist->city =='Bara Banki' ) { echo "Selected"; } ?>>Bara Banki</option>
    <option value="Bareilly" <?php if($plist->city =='Bareilly' ) { echo "Selected"; } ?>>Bareilly</option>
    <option value="Basti" <?php if($plist->city =='Basti' ) { echo "Selected"; } ?>>Basti</option>
    <option value="Bijnor" <?php if($plist->city =='Bijnor' ) { echo "Selected"; } ?>>Bijnor</option>
    <option value="Bithur" <?php if($plist->city =='Bithur' ) { echo "Selected"; } ?>>Bithur</option>
    <option value="Budaun" <?php if($plist->city =='Budaun' ) { echo "Selected"; } ?>>Budaun</option>
    <option value="Bulandshahr" <?php if($plist->city =='Bulandshahr' ) { echo "Selected"; } ?>>Bulandshahr</option>
    <option value="Deoria" <?php if($plist->city =='Deoria' ) { echo "Selected"; } ?>>Deoria</option>
    <option value="Etah" <?php if($plist->city =='Etah' ) { echo "Selected"; } ?>>Etah</option>
    <option value="Etawah" <?php if($plist->city =='Etawah' ) { echo "Selected"; } ?>>Etawah</option>
    <option value="Faizabad" <?php if($plist->city =='Faizabad' ) { echo "Selected"; } ?>>Faizabad</option>
    <option value="Farrukhabad-cum-Fatehgarh" <?php if($plist->city =='Farrukhabad-cum-Fatehgarh' ) { echo "Selected"; } ?>>Farrukhabad-cum-Fatehgarh</option>
    <option value="Fatehpur" <?php if($plist->city =='Fatehpur' ) { echo "Selected"; } ?>>Fatehpur</option>
    <option value="Fatehpur Sikri" <?php if($plist->city =='Fatehpur Sikri' ) { echo "Selected"; } ?>>Fatehpur Sikri</option>
    <option value="Ghaziabad" <?php if($plist->city =='Ghaziabad' ) { echo "Selected"; } ?>>Ghaziabad</option>
    <option value="Ghazipur" <?php if($plist->city =='Ghazipur' ) { echo "Selected"; } ?>>Ghazipur</option>
    <option value="Gonda" <?php if($plist->city =='Gonda' ) { echo "Selected"; } ?>>Gonda</option>
    <option value="Gorakhpur" <?php if($plist->city =='Gorakhpur' ) { echo "Selected"; } ?>>Gorakhpur</option>
    <option value="Hamirpur" <?php if($plist->city =='Hamirpur' ) { echo "Selected"; } ?>>Hamirpur</option>
    <option value="Hardoi" <?php if($plist->city =='Hardoi' ) { echo "Selected"; } ?>>Hardoi</option>
    <option value="Hathras" <?php if($plist->city =='Hathras' ) { echo "Selected"; } ?>>Hathras</option>
    <option value="Jalaun" <?php if($plist->city =='Jalaun' ) { echo "Selected"; } ?>>Jalaun</option>
    <option value="Jaunpur" <?php if($plist->city =='Jaunpur' ) { echo "Selected"; } ?>>Jaunpur</option>
    <option value="Jhansi" <?php if($plist->city =='Jhansi' ) { echo "Selected"; } ?>>Jhansi</option>
    <option value="Kannauj" <?php if($plist->city =='Kannauj' ) { echo "Selected"; } ?>>Kannauj</option>
    <option value="Kanpur" <?php if($plist->city =='Kanpur' ) { echo "Selected"; } ?>>Kanpur</option>
    <option value="Lakhimpur" <?php if($plist->city =='Lakhimpur' ) { echo "Selected"; } ?>>Lakhimpur</option>
    <option value="Lalitpur" <?php if($plist->city =='Lalitpur' ) { echo "Selected"; } ?>>Lalitpur</option>
    <option value="Lucknow" <?php if($plist->city =='Lucknow' ) { echo "Selected"; } ?>>Lucknow</option>
    <option value="Mainpuri" <?php if($plist->city =='Mainpuri' ) { echo "Selected"; } ?>>Mainpuri</option>
    <option value="Mathura" <?php if($plist->city =='Mathura' ) { echo "Selected"; } ?>>Mathura</option>
    <option value="Meerut" <?php if($plist->city =='Meerut' ) { echo "Selected"; } ?>>Meerut</option>
    <option value="Mirzapur-Vindhyachal" <?php if($plist->city =='Mirzapur-Vindhyachal' ) { echo "Selected"; } ?>>Mirzapur-Vindhyachal</option>
    <option value="Moradabad" <?php if($plist->city =='Moradabad' ) { echo "Selected"; } ?>>Moradabad</option>
    <option value="Muzaffarnagar" <?php if($plist->city =='Muzaffarnagar' ) { echo "Selected"; } ?>>Muzaffarnagar</option>
    <option value="Partapgarh" <?php if($plist->city =='Partapgarh' ) { echo "Selected"; } ?>>Partapgarh</option>
    <option value="Pilibhit" <?php if($plist->city =='Pilibhit' ) { echo "Selected"; } ?>>Pilibhit</option>
    <option value="Rae Bareli" <?php if($plist->city =='Rae Bareli' ) { echo "Selected"; } ?>>Rae Bareli</option>
    <option value="Rampur" <?php if($plist->city =='Rampur' ) { echo "Selected"; } ?>>Rampur</option>
    <option value="Saharanpur" <?php if($plist->city =='Saharanpur' ) { echo "Selected"; } ?>>Saharanpur</option>
    <option value="Sambhal" <?php if($plist->city =='Sambhal' ) { echo "Selected"; } ?>>Sambhal</option>
    <option value="Shahjahanpur" <?php if($plist->city =='Shahjahanpur' ) { echo "Selected"; } ?>>Shahjahanpur</option>
    <option value="Sitapur" <?php if($plist->city =='Sitapur' ) { echo "Selected"; } ?>>Sitapur</option>
    <option value="Sultanpur" <?php if($plist->city =='Sultanpur' ) { echo "Selected"; } ?>>Sultanpur</option>
    <option value="Tehri" <?php if($plist->city =='Tehri' ) { echo "Selected"; } ?>>Tehri</option>
    <option value="Varanasi" <?php if($plist->city =='Varanasi' ) { echo "Selected"; } ?>>Varanasi</option>
        <option value="Almora" <?php if($plist->city =='Almora' ) { echo "Selected"; } ?>>Almora</option>
    <option value="Dehra Dun" <?php if($plist->city =='Dehra Dun' ) { echo "Selected"; } ?>>Dehra Dun</option>
    <option value="Haridwar" <?php if($plist->city =='Haridwar' ) { echo "Selected"; } ?>>Haridwar</option>
    <option value="Mussoorie" <?php if($plist->city =='Mussoorie' ) { echo "Selected"; } ?>>Mussoorie</option>
    <option value="Nainital" <?php if($plist->city =='Nainital' ) { echo "Selected"; } ?>>Nainital</option>
    <option value="Pithoragarh" <?php if($plist->city =='Pithoragarh' ) { echo "Selected"; } ?>>Pithoragarh</option>
        <option value="Alipore" <?php if($plist->city =='Alipore' ) { echo "Selected"; } ?>>Alipore</option>
    <option value="Alipur Duar" <?php if($plist->city =='Alipur Duar' ) { echo "Selected"; } ?>>Alipur Duar</option>
    <option value="Asansol" <?php if($plist->city =='Asansol' ) { echo "Selected"; } ?>>Asansol</option>
    <option value="Baharampur" <?php if($plist->city =='Baharampur' ) { echo "Selected"; } ?>>Baharampur</option>
    <option value="Bally" <?php if($plist->city =='Bally' ) { echo "Selected"; } ?>>Bally</option>
    <option value="Balurghat" <?php if($plist->city =='Balurghat' ) { echo "Selected"; } ?>>Balurghat</option>
    <option value="Bankura" <?php if($plist->city =='Bankura' ) { echo "Selected"; } ?>>Bankura</option>
    <option value="Baranagar" <?php if($plist->city =='Baranagar' ) { echo "Selected"; } ?>>Baranagar</option>
    <option value="Barasat" <?php if($plist->city =='Barasat' ) { echo "Selected"; } ?>>Barasat</option>
    <option value="Barrackpore" <?php if($plist->city =='Barrackpore' ) { echo "Selected"; } ?>>Barrackpore</option>
    <option value="Basirhat" <?php if($plist->city =='Basirhat' ) { echo "Selected"; } ?>>Basirhat</option>
    <option value="Bhatpara" <?php if($plist->city =='Bhatpara' ) { echo "Selected"; } ?>>Bhatpara</option>
    <option value="Bishnupur" <?php if($plist->city =='Bishnupur' ) { echo "Selected"; } ?>>Bishnupur</option>
    <option value="Budge Budge" <?php if($plist->city =='Budge Budge' ) { echo "Selected"; } ?>>Budge Budge</option>
    <option value="Burdwan" <?php if($plist->city =='Burdwan' ) { echo "Selected"; } ?>>Burdwan</option>
    <option value="Chandernagore" <?php if($plist->city =='Chandernagore' ) { echo "Selected"; } ?>>Chandernagore</option>
    <option value="Darjiling" <?php if($plist->city =='Darjiling' ) { echo "Selected"; } ?>>Darjiling</option>
    <option value="Diamond Harbour" <?php if($plist->city =='Diamond Harbour' ) { echo "Selected"; } ?>>Diamond Harbour</option>
    <option value="Dum Dum" <?php if($plist->city =='Dum Dum' ) { echo "Selected"; } ?>>Dum Dum</option>
    <option value="Durgapur" <?php if($plist->city =='Durgapur' ) { echo "Selected"; } ?>>Durgapur</option>
    <option value="Halisahar" <?php if($plist->city =='Halisahar' ) { echo "Selected"; } ?>>Halisahar</option>
    <option value="Haora" <?php if($plist->city =='Haora' ) { echo "Selected"; } ?>>Haora</option>
    <option value="Hugli" <?php if($plist->city =='Hugli' ) { echo "Selected"; } ?>>Hugli</option>
    <option value="Ingraj Bazar" <?php if($plist->city =='Ingraj Bazar' ) { echo "Selected"; } ?>>Ingraj Bazar</option>
    <option value="Jalpaiguri" <?php if($plist->city =='Jalpaiguri' ) { echo "Selected"; } ?>>Jalpaiguri</option>
    <option value="Kalimpong" <?php if($plist->city =='Kalimpong' ) { echo "Selected"; } ?>>Kalimpong</option>
    <option value="Kamarhati" <?php if($plist->city =='Kamarhati' ) { echo "Selected"; } ?>>Kamarhati</option>
    <option value="Kanchrapara" <?php if($plist->city =='Kanchrapara' ) { echo "Selected"; } ?>>Kanchrapara</option>
    <option value="Kharagpur" <?php if($plist->city =='Kharagpur' ) { echo "Selected"; } ?>>Kharagpur</option>
    <option value="Koch Bihar" <?php if($plist->city =='Koch Bihar' ) { echo "Selected"; } ?>>Koch Bihar</option>
    <option value="Kolkata" <?php if($plist->city =='Kolkata' ) { echo "Selected"; } ?>>Kolkata</option>
    <option value="Krishnanagar" <?php if($plist->city =='Krishnanagar' ) { echo "Selected"; } ?>>Krishnanagar</option>
    <option value="Malda" <?php if($plist->city =='Malda' ) { echo "Selected"; } ?>>Malda</option>
    <option value="Midnapore" <?php if($plist->city =='Midnapore' ) { echo "Selected"; } ?>>Midnapore</option>
    <option value="Murshidabad" <?php if($plist->city =='Murshidabad' ) { echo "Selected"; } ?>>Murshidabad</option>
    <option value="Navadwip" <?php if($plist->city =='Navadwip' ) { echo "Selected"; } ?>>Navadwip</option>
    <option value="Palashi" <?php if($plist->city =='Palashi' ) { echo "Selected"; } ?>>Palashi</option>
    <option value="Panihati" <?php if($plist->city =='Panihati' ) { echo "Selected"; } ?>>Panihati</option>
    <option value="Purulia" <?php if($plist->city =='Purulia' ) { echo "Selected"; } ?>>Purulia</option>
    <option value="Raiganj" <?php if($plist->city =='Raiganj' ) { echo "Selected"; } ?>>Raiganj</option>
    <option value="Santipur" <?php if($plist->city =='Santipur' ) { echo "Selected"; } ?>>Santipur</option>
    <option value="Shantiniketan" <?php if($plist->city =='Shantiniketan' ) { echo "Selected"; } ?>>Shantiniketan</option>
    <option value="Shrirampur" <?php if($plist->city =='Shrirampur' ) { echo "Selected"; } ?>>Shrirampur</option>
    <option value="Siliguri" <?php if($plist->city =='Siliguri' ) { echo "Selected"; } ?>>Siliguri</option>
    <option value="Siuri" <?php if($plist->city =='Siuri' ) { echo "Selected"; } ?>>Siuri</option>
    <option value="Tamluk" <?php if($plist->city =='Tamluk' ) { echo "Selected"; } ?>>Tamluk</option>
    <option value="Titagarh" <?php if($plist->city =='Titagarh' ) { echo "Selected"; } ?>>Titagarh</option>
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
                  </div><input type="text" class="form-control name_list" name="phoneno" value="<?php echo $plist->phoneno;?>" ></div></td>
           
            <td><div class="input-group"><div class="input-group-addon">
                    <i class="fa fa-tty"></i>
                  </div><input type="text" class="form-control name_list" name="landline" value="<?php echo $plist->landline;?>"></div> </td>                  
          </tr>
        </table>
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Registeration id:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="registrationid" name="registrationid" value="<?php echo $plist->registrationid;?>">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Email:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="email" name="email" value="<?php echo $plist->email;?>">
            </div>
              </div>
              <div class="form-group">
                <label class="col-md-3 control-label">Website:</label>
                <div class="col-sm-6">
                  <input type="text" class="form-control" id="website" name="website" value="<?php echo $plist->website;?>">
            </div>
              </div>
              <div class="box-footer">
                <center><button type="submit" class="btn btn-danger">Update</button></center>
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
</body>
</html>
<?php include "script.php";?>