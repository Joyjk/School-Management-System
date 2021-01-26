<?php

    require 'adminHeadNav.php';

    require 'Control/studentidajaxctlr.php';


        $id = "";
        $firstName = "";
        $lastName = "";
        $gender = "";
        
        $fathername = "";
        $mothername = "";
        $email = "";
        $fphnV = "";
        $mphnV = "";
        $country = "";
        $birthid = "";
        $pass = "";
    
        $errName="";
        $errID ="";
        $errGender = "";
        $errPass="";
        $errFirstName="";
        $errLastname = "";
        $errFatherName = "";
        $errMotherName = "";
        $errEmail = "";
        $errFatherphn = "";
        $errMotherphn = "";
        $errCountry = "";
        $errBirthID = "";


        $hasErr=false;


    if(isset($_POST["regstudent"]))
    {
        
        if(empty($_POST["sid"]))
        {
        $errID .= "ID Required <br>";
        $hasErr=true;
        }
        else
        {
            $id = $_POST["sid"];
        }
     
        if(empty($_POST["firstname"]))
        {
        $errFirstName .= "First Name Required <br>";
        $hasErr=true;
        }
        else
        {
         $firstName=$_POST["firstname"];
        }
        if(empty($_POST["lastname"]))
        {
        $errLastname .= "Last Name Required <br>";
        $hasErr=true;
        }
        else
        {
         $lastName=$_POST["lastname"];
        }
       
        if(empty($_POST["gender"]))
        {
        $errGender .= "Gender Required <br>";
        $hasErr=true;
        }
        else
        {
            $gender = $_POST["gender"];
        }
        if(empty($_POST["fathername"]))
        {
        $errFatherName .= "Father Name Required <br>";
        $hasErr=true;
        }
        else
        {
            $fathername = $_POST["fathername"];
        }
        if(empty($_POST["mothername"]))
        {
        $errMotherName  .= "Mother Name Required <br>";
        $hasErr=true;
        }
        else
        {
            $mothername = $_POST["mothername"];
        }
        if(empty($_POST["email"]))
        {
        $errEmail  .= "email Required <br>";
        $hasErr=true;
        }
        else
        {
            $email = $_POST["email"];
        }

        if(empty($_POST["fatherphn"]))
        {
        $errFatherphn  .= "Father phone Required <br>";
        $hasErr=true;
        }
        else
        {
            $fphnV = $_POST["fatherphn"];
        }
        if(empty($_POST["motherphn"]))
        {
        $errMotherphn  .= "Mother phone Required <br>";
        $hasErr=true;
        }
        else
        {
            $mphnV = $_POST["motherphn"];
        }
        if(empty($_POST["country"]))
        {
        $errCountry  .= "Country Required <br>";
        $hasErr=true;
        }
        else
        {
            $country = $_POST["country"];
        }

        if(empty($_POST["birthno"]))
        {
        $errBirthID  .= "Birth ID no Required <br>";
        $hasErr=true;
        }
        else
        {
            $birthid = $_POST["birthno"];
        }

        if(empty($_POST["cpass"]))
        {
        $errPass  .= "Password Required <br>";
        $hasErr=true;
        }
        else
        {
            $pass = $_POST["cpass"];
        }
       
         if(!$hasErr)
        {
         //$pass = md5($pass);
         $name = $_POST["firstname"]." ".$_POST["lastname"];
         $fphn = $_POST["fatherphnext"].$_POST["fatherphn"];
         $mphn = $_POST["motherphnext"].$_POST["motherphn"];
 

         $query = "INSERT INTO student (s_id, Name, Gender, Father_Name, Mother_Name, email, f_phone, m_phone, country, birth_id, password)
                 VALUES ('$id', '$name', '$gender', '$fathername','$mothername','$email', '$fphn', '$mphn', '$country','$birthid','$pass' )";

                 execute($query);
        }



  


    }


?>
           <!---################-Main  #########################---->

          <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
             
            <h3>Hello</h3>

            
            <!---DJFHSDJFHSDKJ-->


            <div class="card bg-light fl-right">
                <article class="card-body mx-auto" style="max-width: 400px;">
                    <h4 class="card-title mt-3 text-center">Student Registration</h4>
                   
            <form method="POST" onsubmit="return validateStudent()"> 

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="sid" class="form-control" onfocusout = "uniqueID()" id="sid" placeholder="Unique ID" type="text">
                    
                </div>
                <span style="float: right; margin-bottom:2%" id="errsid"></span>
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="firstname" class="form-control" id="firstname" placeholder="First name" type="text">
                </div> <!-- form-group// -->
        
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="lastname" id="lastname" class="form-control" placeholder="Last Name" type="text">
                </div>

                <div class="form-group input-group">
                <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select" name="gender" id="gender">
                        <option value="Male" selected="" >Male</option>
                        <option value="Female">Female</option>
                        
                    </select>
                    
                </div>


        
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="fathername" id="fathername" class="form-control" placeholder="Father name" type="text">
                </div>
        
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                     </div>
                    <input name="mothername" id="mothername"  class="form-control" placeholder="Mother name" type="text">
                </div>
        
        
        
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                     </div>
                    <input name="email" id ="email" class="form-control" placeholder="Email address" type="email">
                </div> <!-- form-group// -->

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select" name="fatherphnext" id="fatherphnext" style="max-width: 120px;">
                        <option value="+88" selected="">+88</option>
                        <option value="+972">+972</option>
                        <option value="+198">+198</option>
                        <option value="+701">+701</option>
                    </select>
                    <input name="fatherphn" id="fatherphn" class="form-control" placeholder="Father's Number" type="text">
                </div> <!-- form-group// -->
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>
                    <select class="custom-select" name="motherphnext" id="motherphnext" style="max-width: 120px;">
                        <option value="+88" selected="">+88</option>
                        <option value="+972">+972</option>
                        <option value="+198">+198</option>
                        <option value="+701">+701</option>
                    </select>
                    <input name="motherphn" id="motherphn" class="form-control" placeholder="Mothers's Number" type="text">
                </div> <!-- form-group// -->
        
                
        
        
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-flag"></i> </span>
                    </div>
                    <select class="form-control" name="country" id="country">
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antartica">Antarctica</option>
                        <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh" selected="">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Bouvet Island">Bouvet Island</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                        <option value="Brunei Darussalam">Brunei Darussalam</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Islands">Cocos (Keeling) Islands</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Congo">Congo, the Democratic Republic of the</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cota D'Ivoire">Cote d'Ivoire</option>
                        <option value="Croatia">Croatia (Hrvatska)</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="France Metropolitan">France, Metropolitan</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Territories">French Southern Territories</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guinea-Bissau">Guinea-Bissau</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
                        <option value="Holy See">Holy See (Vatican City State)</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran (Islamic Republic of)</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Democratic People's Republic of Korea">Korea, Democratic People's Republic of</option>
                        <option value="Korea">Korea, Republic of</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Lao">Lao People's Democratic Republic</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Micronesia">Micronesia, Federated States of</option>
                        <option value="Moldova">Moldova, Republic of</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Namibia">Namibia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Netherlands Antilles">Netherlands Antilles</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau">Palau</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Pitcairn">Pitcairn</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russian Federation</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
                        <option value="Saint LUCIA">Saint LUCIA</option>
                        <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
                        <option value="Samoa">Samoa</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia (Slovak Republic)</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
                        <option value="Span">Spain</option>
                        <option value="SriLanka">Sri Lanka</option>
                        <option value="St. Helena">St. Helena</option>
                        <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syrian Arab Republic</option>
                        <option value="Taiwan">Taiwan, Province of China</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania, United Republic of</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks and Caicos">Turks and Caicos Islands</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Viet Nam</option>
                        <option value="Virgin Islands (British)">Virgin Islands (British)</option>
                        <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
                        <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
                        <option value="Western Sahara">Western Sahara</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                        
                    </select>
                </div>
        
        
        
        
        
        
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-id-card" aria-hidden="true"></i> </span>
                    </div>
                    <input class="form-control" name="birthno" id="birthno" placeholder="Birth Certificate Number" type="text">
                </div>
        
        
        
        
                
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="cpass" id="cpass" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input class="form-control" name="rpass" id="rpass" placeholder="Repeat password" type="password">
                </div> <!-- form-group// -->                                      
                <div class="form-group">
                    <button type="submit" name="regstudent" class="btn btn-primary btn-block"> Create Account  </button>
                </div> <!-- form-group// -->      
                
            </form>
           
        
        
        
        
        </article>
        </div> <!-- card.// -->
        
    </main>  <!--################# Main End #############---->

    <script src="jsMy/studentRegistation_validation.js"></script>

    <?php
        require 'adminfooter.php';
    ?>