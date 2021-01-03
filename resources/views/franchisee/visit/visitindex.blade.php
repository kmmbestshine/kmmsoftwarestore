@extends('layouts.app')

@section('content')

    <div class="row">

    <div class="col-md-12" id="register" >
        
        <div class="card col-md-8">
            
                <h2 class="card-title">Visit Form</h2>
                <hr>

                <div class="clearfix"></div>
                
                <div class="clearfix"></div>
                @if(Session::has('success_message'))
                <div class="alert alert-success">
                    {{ Session::get('success_message') }}
                </div>
                @endif
                @if(Session::has('error_message'))
                    <div class="alert alert-danger">
                        {{ Session::get('error_message') }}
                    </div>
                @endif

                <form action="{{ url('franch/postvisit') }}" method="post" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <div class="myvisit">
                                    <div class="row">
                                        <div class="col-md-5">
                                        <div class="form-group">
                                            <label for="softwaretype">Software Type*</label>
                                            <select id="softwaretype" name="softwaretype" class="form-control" required>
                                                    <option value="">Select Software Type</option>
                                                    <option value="school">School Software</option>
                                                    <option value="hospital">Hospital Software</option>
                                                    <option value="supermarket">SuperMarket Software</option>
                                                    <option value="inventory">Inventory Software</option>
                                                    <option value="hotel">Hotel Software</option>
                                                    <option value="ecommerce">E-Commerce Software</option>
                                                    <option value="realestate">Real Estate Software</option>
                                            </select>
                                        </div>

                                        
                    <div class="form-group">
                         <label for="softwaretype">Select State: </label>
                       <select name="state" id="countySel" size="1">
                        <option value="" selected="selected">Select State</option>
                        </select>
                        
                    </div>
                    <div class="form-group">
                        <label for="taluka"> Select Taluk / Teshil:  </label>
                       <select name="taluka" id="districtSel" size="1">
                        <option value="" selected="selected">Please select District first</option>
                        </select>
                    </div>
                     <div class="form-group">
                        <label for="franchiseeid">Franchisee ID / Name:*</label>
                        <input type="text" name="franchiseeid" placeholder="Franchisee ID" id="franchiseeid" class="form-control" required>
                    </div>
                    
                    
                    <div class="form-group">
                        <label for="contactno">School / Company Contact No:*</label>
                        <input type="number" name="contactno" placeholder="Contact No" id="contactno" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="office_contactno">Office Contact No:</label>
                        <input type="number" name="office_contactno" placeholder="Office Contact No" id="office_contactno" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="text" name="email" placeholder="Email" id="email" class="form-control">
                    </div>
                   
                    <div class="form-group">
                        <label for="feedback">Feedback about our App:</label>
                        <input type="text" name="feedback" placeholder="Feed Back" id="feedback" class="form-control">
                    </div>

                                            
                        </div>
                         <div class="col-md-5">
                        <div class="form-group">
                        <label for="institutename">School/Institute/Company Name:*</label>
                        <input type="text" name="institutename" placeholder="School/Institute/Company Name:" id="institutename" class="form-control" required>
                    </div>
                                            
                                            <div class="form-group">
                                                <label>Select District:</label>
                                                 <select name="district" id="stateSel" size="1">
                                                <option value="" selected="selected">Please select State first</option>
                                                </select>
                                            </div>

                    
                    <div class="form-group">
                        <label for="hodname">Head Of Department Name:</label>
                        <input type="text" name="hodname" placeholder="HOD Name" id="hodname" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="coord_contactno">Co-Ordinator Contact No:</label>
                        <input type="number" name="coord_contactno" placeholder="Co-Ordinator Contact No" id="coord_contactno" class="form-control">
                    </div>
                     
                     <div class="form-group">
                        <label for="no_of_student">No Of Students:</label>
                        <input type="number" name="no_of_student" placeholder="Student Name" id="no_of_student" class="form-control">
                    </div>
                    
                    
                   
                    <div class="form-group">
                        <label for="no_of_staff">No Of Staffs:</label>
                        <input type="number" name="no_of_staff" placeholder="No Of Staffs" id="no_of_staff" class="form-control">
                    </div>
                        <div class="form-group">
                        <label for="address">Address:*</label>
                        <textarea name="address" placeholder="Address" id="address" class="form-control" required></textarea>
                    </div>  
                    <div class="form-group">
                        <label for="city">City:*</label>
                        <input type="text" name="city" placeholder="City" id="city" class="form-control" required>
                    </div>         
                        </div>
                    </div>
                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary float-md-right">Create Visit Form</button>
                                </div>
                </form>

            </div>
        </div>
        </div>
    </div>

</div>
<style type="text/css">
.myvisit {
  border: 5px outset green;
  background-color: lightblue;    
  
}
.card {
    margin: 0 auto;
    width: 700px;
}

.form {
    margin: 0 auto;
    width: 210px;
}
.form label {
    display: inline-block;
    text-align: right;
    float: left;
}
.form input{
    display: inline-block;
    text-align: left;
    float: right;
}

</style>

<script>
         var stateObject = {
        "Tamilnadu": {
         "Ariyalur": ["Udayarpalayam", "Ariyalur","Sendurai","Andimadam"],
        "Chengalpattu": ["Chengalpattu", "Cheyyur","Madhurantakam", "Pallavaram","Tambaram", "Thirkkalukundram","Thirupporur", "Vandalur"],
        "Chennai": ["Alandur", "Ambattur","Aminjikarai", "Ayanavaram","Egmore", "Guindy",
                    "Madhavaram", "Maduravoyal","Mambalam", "Mylapore","Perambur", "Purasawalkam","Sholinganallur", 
                    "Thiruvottiyur","Tondiarpet", "Velachery"],
        "Coimbatore": ["Anaimalai", "Annur","Coimbatore(North)", "Coimbatore(South)","Kinathukadavu", "Madukkarai",
                    "Mettupalayam", "Perur","Pollachi", "Sulur","Valparai"],
        "Cuddalore": ["Bhuvanagiri", "Chidambaram","Cuddalore", "Kattumannarkoil","Kurinjipadi", "Panruti",
                    "Srimushanam", "Titakudi","Veppur", "Vridachalam"],
        "Dharmapuri": ["Dharmapuri", "Harur","Karimangalam", "Nallampalli","Palakcode", "Pappireddipatti",
                    "Pennagaram"],
        "Dindigul ": ["Attur", "Dindigul East","Dindigul West", "Gujiliamparai","Kodaikanal", "Natham",
                    "Nilakottai", "Oddenchatram","Palani", "Vedasandur"],
        "Erode  ": ["Anthiyur", "Bhavani","Erode", "Gobichettipalayam","Kodumudi", "Modakkurichi",
                    "Nambiyur", "Perundurai","Sathyamangalam", "Thalavadi"],
        "Kallakurichi ": ["Chinnaselam", "Kallakurichi","Kalvarayan hills", "Sankarapuram","Tirukkoilur", "Ulundurpet"],
        "Kancheepuram ": ["Kancheepuram", "Kundrathur","Sriperumbudur", "Uthiramerur","Walajabad"],
        "Kanyakumari ": ["Agasteeswaram", "Kalkulam","Killiyoor", "Thiruvattar","Thovalai", "Vilavancode"],
         "Karur ": ["Aravakurichi", "Kadavur","Karur", "Krishnarayapuram","Kulithalai", "Manmangalam","Pugalur"],
        "Krishnagiri ": ["Anchetty", "Bargur","Denkanikottai", "Hosur","Krishnagiri", "Pochampalli","Shoolagiri","Uthangarai"],
        "Madurai": ["Kalligudi", "Madurai East","Madurai North", "Madurai(South)","Madurai West", "Melur",
                    "Peraiyur", "Thirupparankundram","Tirumangalam", "Usilampatti","Vadipatti"],
        "Nagapattinam  ": ["Kilvelur", "Kutthalam","Mayiladuthurai", "Nagapattinam","Sirkali", "Tharangambadi",
                    "Thirukkuvalai", "Vedaranyam"],
        "Namakkal  ": ["Kolli Hills", "Kumarapalayam","Mohanur", "Namakkal","Paramathi Velur", "Rasipuram",
                    "Sendamangalam", "Thiruchengode"],
        "Perambalur  ": ["Alathur", "Kunnam","Perambalur", "Veppanthattai"],
        "Pudukottai": ["Alangudi", "Aranthangi","Avadaiyarkoil", "Gandarvakottai","Illuppur", "Karambakudi",
                    "Kulathur", "Manamelkudi","Ponnamaravathi", "Pudukkottai","Thirumayam","Viralimalai"],
        "Ramanathapuram": ["Kadaladi", "Kamuthi","Kilakarai", "Mudukulathur","Paramakudi", "Rajasingamangalam",
                    "Ramanathapuram", "Rameswaram","Tiruvadanai"],
         "Ranipet  ": ["Arakkonam", "Arcot","Nemili", "Walajah"],
         "Salem": ["Attur", "Edapady","Gangavalli", "Kadayampatti","Mettur", "Omalur",
                    "Pethanaickenpalayam", "Salem","Salem South", "Salem West","Sangagiri","Valapady","Yercaud"],
        "Sivagangai": ["Devakottai", "Ilayankudi","Kalaiyarkoil", "Karaikudi","Manamadurai", "Sigampunari",
                    "Sivaganga", "Thiruppuvanam","Tirupathur"],
         "Tenkasi": ["Alangulam", "Kadayanallur","Sankarankovil", "Shencottai","Sivagiri", "Tenkasi",
                    "Thiruvengadam", "V.K.Pudur"],
        "Thanjavur": ["Budalur", "Kumbakonam","Orathanadu", "Papanasam","Pattukkottai", "Peravurani",
                    "Thanjavur", "Thiruvaiyaru","Thiruvidaimarudur"],
        "Theni": ["Andipatti", "Bodinayakanur","Periyakulam", "Theni","Uthamapalayam"],
        "The Nilgiris": ["Coonoor", "Gudalur","Kotagiri", "Kundah","Kundah","Udhagamandalam"],
        "Thirunelveli": ["Ambasamuthiram", "Cheranmahadevi","Manur", "Nanguneri","Palayamkottai","Radhapuram","Thisayanvilai","Tirunelveli"],
        "Thiruvallur": ["Avadi", "Gummidipoondi","Pallipattu", "Ponneri","Poonamallee","R.K. Pettai","Tiruttani","Tiruvallur","Uthukkotai"],
        "Thiruvannamalai": ["Arani", "Chengam","Chetpet", "Jamunamarathoor","Kalasapakkam","Kilpennathur","Periyakulam","Polur","Thandarampattu","Tiruvannamalai","Vandavasi","Vembakkam"],
        "Thiruvarur": ["Koothanallur", "Kudavasal","Mannargudi", "Nannilam","Needamanglam","Thiruthuraipoondi","Thiruvarur","Valangaiman"],
         "Tirupathur": ["Ambur", "Natrampalli","Tirupattur", "Vaniyambadi"],
        "Tiruppur": ["Avinashi", "Dharapuram","Kangayam", "Madathukulam","Palladam","Tiruppur North","Tiruppur South","Udumalpet","Uthukuli"],
        "Trichirappalli": ["Lalgudi", "Manachanallur","Musiri", "Srirangam","Thiruchirapalli-West","Thiruverumpur","Thottiyam","Thuraiyur","Tiruchirappalli-East"],
        "Tuticorin": ["Eral", "Ettayapuram","Kayathar", "Kovilpattai","Ottapidaram","Sathankulam","Srivaikundam","Thoothukkudi","Tiruchendur","Vilathikulam"],
         "Vellore": ["Anaicut", "Gudiyatham","Katpadi", "K V Kuppam","Pernambut","Vellore"],
         "Viluppuram": ["Gingee", "Kandachipuram","Marakkanam", "Melmalaiyanur","Thiruvennainallur","Tindivanam","Vanur","Vikkiravandi","Villupuram"],
         "Virudhunagar": ["Arupukottai", "Kariapattai","Rajapalayam", "Sathur","Sivakasi","Srivilliputhur","Tiruchuli","Vembakkottai","Virudhunagar","Watrap"],
        },
        "Pondicherry/Puducherry": {
         "Pondicherry/Puducherry": ["Bahour", "Ozhukarai","Puducherry","Villianur"],
        "Karaikkal": ["Poovam", "Thiruvettakudy","Varichikudy", "Kil Vanjiyur","Mel Vanjiyur", "Keezhaiyur","Polagam"],
        "Mahe": ["Mahe", "Pandakkal","Chalakara", "Palloor","Kallayi"],
        "Yanam": ["Yanam"],
        },
         
        }
        window.onload = function () {
        var countySel = document.getElementById("countySel"),
        stateSel = document.getElementById("stateSel"),
        districtSel = document.getElementById("districtSel");
        for (var country in stateObject) {
        countySel.options[countySel.options.length] = new Option(country, country);
        }
        countySel.onchange = function () {
        stateSel.length = 1; // remove all options bar first
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        for (var state in stateObject[this.value]) {
        stateSel.options[stateSel.options.length] = new Option(state, state);
        }
        }
        countySel.onchange(); // reset in case page is reloaded
        stateSel.onchange = function () {
        districtSel.length = 1; // remove all options bar first
        if (this.selectedIndex < 1) return; // done
        var district = stateObject[countySel.value][this.value];
        for (var i = 0; i < district.length; i++) {
        districtSel.options[districtSel.options.length] = new Option(district[i], district[i]);
        }
        }
        }
    </script>
@endsection
