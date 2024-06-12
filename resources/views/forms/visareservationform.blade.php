@extends('layouts.app')

@section('styles')
<!-- styles -->
@endsection

@section('content')

<div class="row bg-info-gradient">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body p-4 text-white">
				<div class="statistics-info">
					<div class="card-body p-4 text-center">
						<h2>Visa Service Reservation Form</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bg-image-landing section">
	<div class="container px-5 px-md-0">
		<div class="d-flex justify-content-center align-items-center">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-body">
						<form class="needs-validation text-white" name="contact-formVisa" novalidate>
							@csrf
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="firstName">First Name<i style="color: red;"> *</i></label>
									<input type="text" class="form-control" id="firstName" name="firstName" required>
									<div class="invalid-feedback">Provide the first name.</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="lastName">Last Name<i style="color: red;"> *</i></label>
									<input type="text" class="form-control" id="lastName" name="lastName" required>
									<div class="invalid-feedback">Provide the last name.</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="nic">NIC / Passport Number<i style="color: red;"> *</i></label>
									<input type="text" class="form-control" id="nic" name="nic" required>
									<div class="invalid-feedback">Provide the NIC or Passport Number.</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="gender">Gender<i style="color: red;"> *</i></label>
									<select class="form-control" id="gender" name="gender" required>
										<option value="" disabled selected>Select...</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<div class="invalid-feedback">Provide the Gender.</div>
								</div>
								<div class="col-md-6 mb-3 form-group">
									<label for="nationality">Nationality<i style="color: red;"> *</i></label>
									<select class="form-control select2-style1" name="nationality" id="nationality" required>
										<option value="" disabled selected>Select One...</option>
										<option value="afghan">Afghan</option>
										<option value="albanian">Albanian</option>
										<option value="algerian">Algerian</option>
										<option value="american">American</option>
										<option value="andorran">Andorran</option>
										<option value="angolan">Angolan</option>
										<option value="antiguans">Antiguans</option>
										<option value="argentinean">Argentinean</option>
										<option value="armenian">Armenian</option>
										<option value="australian">Australian</option>
										<option value="austrian">Austrian</option>
										<option value="azerbaijani">Azerbaijani</option>
										<option value="bahamian">Bahamian</option>
										<option value="bahraini">Bahraini</option>
										<option value="bangladeshi">Bangladeshi</option>
										<option value="barbadian">Barbadian</option>
										<option value="barbudans">Barbudans</option>
										<option value="batswana">Batswana</option>
										<option value="belarusian">Belarusian</option>
										<option value="belgian">Belgian</option>
										<option value="belizean">Belizean</option>
										<option value="beninese">Beninese</option>
										<option value="bhutanese">Bhutanese</option>
										<option value="bolivian">Bolivian</option>
										<option value="bosnian">Bosnian</option>
										<option value="brazilian">Brazilian</option>
										<option value="british">British</option>
										<option value="bruneian">Bruneian</option>
										<option value="bulgarian">Bulgarian</option>
										<option value="burkinabe">Burkinabe</option>
										<option value="burmese">Burmese</option>
										<option value="burundian">Burundian</option>
										<option value="cambodian">Cambodian</option>
										<option value="cameroonian">Cameroonian</option>
										<option value="canadian">Canadian</option>
										<option value="cape verdean">Cape Verdean</option>
										<option value="central african">Central African</option>
										<option value="chadian">Chadian</option>
										<option value="chilean">Chilean</option>
										<option value="chinese">Chinese</option>
										<option value="colombian">Colombian</option>
										<option value="comoran">Comoran</option>
										<option value="congolese">Congolese</option>
										<option value="costa rican">Costa Rican</option>
										<option value="croatian">Croatian</option>
										<option value="cuban">Cuban</option>
										<option value="cypriot">Cypriot</option>
										<option value="czech">Czech</option>
										<option value="danish">Danish</option>
										<option value="djibouti">Djibouti</option>
										<option value="dominican">Dominican</option>
										<option value="dutch">Dutch</option>
										<option value="east timorese">East Timorese</option>
										<option value="ecuadorean">Ecuadorean</option>
										<option value="egyptian">Egyptian</option>
										<option value="emirian">Emirian</option>
										<option value="equatorial guinean">Equatorial Guinean</option>
										<option value="eritrean">Eritrean</option>
										<option value="estonian">Estonian</option>
										<option value="ethiopian">Ethiopian</option>
										<option value="fijian">Fijian</option>
										<option value="filipino">Filipino</option>
										<option value="finnish">Finnish</option>
										<option value="french">French</option>
										<option value="gabonese">Gabonese</option>
										<option value="gambian">Gambian</option>
										<option value="georgian">Georgian</option>
										<option value="german">German</option>
										<option value="ghanaian">Ghanaian</option>
										<option value="greek">Greek</option>
										<option value="grenadian">Grenadian</option>
										<option value="guatemalan">Guatemalan</option>
										<option value="guinea-bissauan">Guinea-Bissauan</option>
										<option value="guinean">Guinean</option>
										<option value="guyanese">Guyanese</option>
										<option value="haitian">Haitian</option>
										<option value="herzegovinian">Herzegovinian</option>
										<option value="honduran">Honduran</option>
										<option value="hungarian">Hungarian</option>
										<option value="icelander">Icelander</option>
										<option value="indian">Indian</option>
										<option value="indonesian">Indonesian</option>
										<option value="iranian">Iranian</option>
										<option value="iraqi">Iraqi</option>
										<option value="irish">Irish</option>
										<option value="israeli">Israeli</option>
										<option value="italian">Italian</option>
										<option value="ivorian">Ivorian</option>
										<option value="jamaican">Jamaican</option>
										<option value="japanese">Japanese</option>
										<option value="jordanian">Jordanian</option>
										<option value="kazakhstani">Kazakhstani</option>
										<option value="kenyan">Kenyan</option>
										<option value="kittian and nevisian">Kittian and Nevisian</option>
										<option value="kuwaiti">Kuwaiti</option>
										<option value="kyrgyz">Kyrgyz</option>
										<option value="laotian">Laotian</option>
										<option value="latvian">Latvian</option>
										<option value="lebanese">Lebanese</option>
										<option value="liberian">Liberian</option>
										<option value="libyan">Libyan</option>
										<option value="liechtensteiner">Liechtensteiner</option>
										<option value="lithuanian">Lithuanian</option>
										<option value="luxembourger">Luxembourger</option>
										<option value="macedonian">Macedonian</option>
										<option value="malagasy">Malagasy</option>
										<option value="malawian">Malawian</option>
										<option value="malaysian">Malaysian</option>
										<option value="maldivan">Maldivan</option>
										<option value="malian">Malian</option>
										<option value="maltese">Maltese</option>
										<option value="marshallese">Marshallese</option>
										<option value="mauritanian">Mauritanian</option>
										<option value="mauritian">Mauritian</option>
										<option value="mexican">Mexican</option>
										<option value="micronesian">Micronesian</option>
										<option value="moldovan">Moldovan</option>
										<option value="monacan">Monacan</option>
										<option value="mongolian">Mongolian</option>
										<option value="moroccan">Moroccan</option>
										<option value="mosotho">Mosotho</option>
										<option value="motswana">Motswana</option>
										<option value="mozambican">Mozambican</option>
										<option value="namibian">Namibian</option>
										<option value="nauruan">Nauruan</option>
										<option value="nepalese">Nepalese</option>
										<option value="new zealander">New Zealander</option>
										<option value="ni-vanuatu">Ni-Vanuatu</option>
										<option value="nicaraguan">Nicaraguan</option>
										<option value="nigerien">Nigerien</option>
										<option value="north korean">North Korean</option>
										<option value="northern irish">Northern Irish</option>
										<option value="norwegian">Norwegian</option>
										<option value="omani">Omani</option>
										<option value="pakistani">Pakistani</option>
										<option value="palauan">Palauan</option>
										<option value="panamanian">Panamanian</option>
										<option value="papua new guinean">Papua New Guinean</option>
										<option value="paraguayan">Paraguayan</option>
										<option value="peruvian">Peruvian</option>
										<option value="polish">Polish</option>
										<option value="portuguese">Portuguese</option>
										<option value="qatari">Qatari</option>
										<option value="romanian">Romanian</option>
										<option value="russian">Russian</option>
										<option value="rwandan">Rwandan</option>
										<option value="saint lucian">Saint Lucian</option>
										<option value="salvadoran">Salvadoran</option>
										<option value="samoan">Samoan</option>
										<option value="san marinese">San Marinese</option>
										<option value="sao tomean">Sao Tomean</option>
										<option value="saudi">Saudi</option>
										<option value="scottish">Scottish</option>
										<option value="senegalese">Senegalese</option>
										<option value="serbian">Serbian</option>
										<option value="seychellois">Seychellois</option>
										<option value="sierra leonean">Sierra Leonean</option>
										<option value="singaporean">Singaporean</option>
										<option value="slovakian">Slovakian</option>
										<option value="slovenian">Slovenian</option>
										<option value="solomon islander">Solomon Islander</option>
										<option value="somali">Somali</option>
										<option value="south african">South African</option>
										<option value="south korean">South Korean</option>
										<option value="spanish">Spanish</option>
										<option value="sri lankan">Sri Lankan</option>
										<option value="sudanese">Sudanese</option>
										<option value="surinamer">Surinamer</option>
										<option value="swazi">Swazi</option>
										<option value="swedish">Swedish</option>
										<option value="swiss">Swiss</option>
										<option value="syrian">Syrian</option>
										<option value="taiwanese">Taiwanese</option>
										<option value="tajik">Tajik</option>
										<option value="tanzanian">Tanzanian</option>
										<option value="thai">Thai</option>
										<option value="togolese">Togolese</option>
										<option value="tongan">Tongan</option>
										<option value="trinidadian or tobagonian">Trinidadian or Tobagonian</option>
										<option value="tunisian">Tunisian</option>
										<option value="turkish">Turkish</option>
										<option value="tuvaluan">Tuvaluan</option>
										<option value="ugandan">Ugandan</option>
										<option value="ukrainian">Ukrainian</option>
										<option value="uruguayan">Uruguayan</option>
										<option value="uzbekistani">Uzbekistani</option>
										<option value="venezuelan">Venezuelan</option>
										<option value="vietnamese">Vietnamese</option>
										<option value="welsh">Welsh</option>
										<option value="yemenite">Yemenite</option>
										<option value="zambian">Zambian</option>
										<option value="zimbabwean">Zimbabwean</option>
									</select>
									<div class="invalid-feedback">Provide the country.</div>
								</div>

							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email">
								</div>
								<div class="col-md-6 mb-3">
									<label for="phone">Phone Number<i style="color: red;"> *</i></label>
									<input type="tel" class="form-control" id="phone" name="phone" required>
									<div class="invalid-feedback">Provide the phone number.</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-6 mb-3 form-group">
									<label for="expextedCountry">Expected Country<i style="color: red;"> *</i></label>
									<select class="form-control select2-style1" name="expextedCountry" id="expextedCountry" required>
										<option value="" disabled selected>Select One...</option>
										<option value="afghanistan">Afghanistan</option>
										<option value="albania">Albania</option>
										<option value="algeria">Algeria</option>
										<option value="andorra">Andorra</option>
										<option value="angola">Angola</option>
										<option value="antigua_and_barbuda">Antigua and Barbuda</option>
										<option value="argentina">Argentina</option>
										<option value="armenia">Armenia</option>
										<option value="australia">Australia</option>
										<option value="austria">Austria</option>
										<option value="azerbaijan">Azerbaijan</option>
										<option value="bahamas">Bahamas</option>
										<option value="bahrain">Bahrain</option>
										<option value="bangladesh">Bangladesh</option>
										<option value="barbados">Barbados</option>
										<option value="belarus">Belarus</option>
										<option value="belgium">Belgium</option>
										<option value="belize">Belize</option>
										<option value="benin">Benin</option>
										<option value="bhutan">Bhutan</option>
										<option value="bolivia">Bolivia</option>
										<option value="bosnia_and_herzegovina">Bosnia and Herzegovina</option>
										<option value="botswana">Botswana</option>
										<option value="brazil">Brazil</option>
										<option value="brunei">Brunei</option>
										<option value="bulgaria">Bulgaria</option>
										<option value="burkina_faso">Burkina Faso</option>
										<option value="burundi">Burundi</option>
										<option value="cabo_verde">Cabo Verde</option>
										<option value="cambodia">Cambodia</option>
										<option value="cameroon">Cameroon</option>
										<option value="canada">Canada</option>
										<option value="central_african_republic">Central African Republic</option>
										<option value="chad">Chad</option>
										<option value="chile">Chile</option>
										<option value="china">China</option>
										<option value="colombia">Colombia</option>
										<option value="comoros">Comoros</option>
										<option value="congo">Congo</option>
										<option value="costa_rica">Costa Rica</option>
										<option value="croatia">Croatia</option>
										<option value="cuba">Cuba</option>
										<option value="cyprus">Cyprus</option>
										<option value="czech_republic">Czech Republic</option>
										<option value="denmark">Denmark</option>
										<option value="djibouti">Djibouti</option>
										<option value="dominica">Dominica</option>
										<option value="dominican_republic">Dominican Republic</option>
										<option value="ecuador">Ecuador</option>
										<option value="egypt">Egypt</option>
										<option value="el_salvador">El Salvador</option>
										<option value="equatorial_guinea">Equatorial Guinea</option>
										<option value="eritrea">Eritrea</option>
										<option value="estonia">Estonia</option>
										<option value="eswatini">Eswatini</option>
										<option value="ethiopia">Ethiopia</option>
										<option value="fiji">Fiji</option>
										<option value="finland">Finland</option>
										<option value="france">France</option>
										<option value="gabon">Gabon</option>
										<option value="gambia">Gambia</option>
										<option value="georgia">Georgia</option>
										<option value="germany">Germany</option>
										<option value="ghana">Ghana</option>
										<option value="greece">Greece</option>
										<option value="grenada">Grenada</option>
										<option value="guatemala">Guatemala</option>
										<option value="guinea">Guinea</option>
										<option value="guinea-bissau">Guinea-Bissau</option>
										<option value="guyana">Guyana</option>
										<option value="haiti">Haiti</option>
										<option value="honduras">Honduras</option>
										<option value="hungary">Hungary</option>
										<option value="iceland">Iceland</option>
										<option value="india">India</option>
										<option value="indonesia">Indonesia</option>
										<option value="iran">Iran</option>
										<option value="iraq">Iraq</option>
										<option value="ireland">Ireland</option>
										<option value="israel">Israel</option>
										<option value="italy">Italy</option>
										<option value="ivory_coast">Ivory Coast</option>
										<option value="jamaica">Jamaica</option>
										<option value="japan">Japan</option>
										<option value="jordan">Jordan</option>
										<option value="kazakhstan">Kazakhstan</option>
										<option value="kenya">Kenya</option>
										<option value="kiribati">Kiribati</option>
										<option value="kuwait">Kuwait</option>
										<option value="kyrgyzstan">Kyrgyzstan</option>
										<option value="laos">Laos</option>
										<option value="latvia">Latvia</option>
										<option value="lebanon">Lebanon</option>
										<option value="lesotho">Lesotho</option>
										<option value="liberia">Liberia</option>
										<option value="libya">Libya</option>
										<option value="liechtenstein">Liechtenstein</option>
										<option value="lithuania">Lithuania</option>
										<option value="luxembourg">Luxembourg</option>
										<option value="madagascar">Madagascar</option>
										<option value="malawi">Malawi</option>
										<option value="malaysia">Malaysia</option>
										<option value="maldives">Maldives</option>
										<option value="mali">Mali</option>
										<option value="malta">Malta</option>
										<option value="marshall_islands">Marshall Islands</option>
										<option value="mauritania">Mauritania</option>
										<option value="mauritius">Mauritius</option>
										<option value="mexico">Mexico</option>
										<option value="micronesia">Micronesia</option>
										<option value="moldova">Moldova</option>
										<option value="monaco">Monaco</option>
										<option value="mongolia">Mongolia</option>
										<option value="montenegro">Montenegro</option>
										<option value="morocco">Morocco</option>
										<option value="mozambique">Mozambique</option>
										<option value="myanmar">Myanmar</option>
										<option value="namibia">Namibia</option>
										<option value="nauru">Nauru</option>
										<option value="nepal">Nepal</option>
										<option value="netherlands">Netherlands</option>
										<option value="new_zealand">New Zealand</option>
										<option value="nicaragua">Nicaragua</option>
										<option value="niger">Niger</option>
										<option value="nigeria">Nigeria</option>
										<option value="north_korea">North Korea</option>
										<option value="north_macedonia">North Macedonia</option>
										<option value="norway">Norway</option>
										<option value="oman">Oman</option>
										<option value="pakistan">Pakistan</option>
										<option value="palau">Palau</option>
										<option value="panama">Panama</option>
										<option value="papua_new_guinea">Papua New Guinea</option>
										<option value="paraguay">Paraguay</option>
										<option value="peru">Peru</option>
										<option value="philippines">Philippines</option>
										<option value="poland">Poland</option>
										<option value="portugal">Portugal</option>
										<option value="qatar">Qatar</option>
										<option value="romania">Romania</option>
										<option value="russia">Russia</option>
										<option value="rwanda">Rwanda</option>
										<option value="saint_kitts_and_nevis">Saint Kitts and Nevis</option>
										<option value="saint_lucia">Saint Lucia</option>
										<option value="saint_vincent_and_the_grenadines">Saint Vincent and the Grenadines</option>
										<option value="samoa">Samoa</option>
										<option value="san_marino">San Marino</option>
										<option value="sao_tome_and_principe">Sao Tome and Principe</option>
										<option value="saudi_arabia">Saudi Arabia</option>
										<option value="senegal">Senegal</option>
										<option value="serbia">Serbia</option>
										<option value="seychelles">Seychelles</option>
										<option value="sierra_leone">Sierra Leone</option>
										<option value="singapore">Singapore</option>
										<option value="slovakia">Slovakia</option>
										<option value="slovenia">Slovenia</option>
										<option value="solomon_islands">Solomon Islands</option>
										<option value="somalia">Somalia</option>
										<option value="south_africa">South Africa</option>
										<option value="south_korea">South Korea</option>
										<option value="south_sudan">South Sudan</option>
										<option value="spain">Spain</option>
										<option value="sri_lanka">Sri Lanka</option>
										<option value="sudan">Sudan</option>
										<option value="suriname">Suriname</option>
										<option value="sweden">Sweden</option>
										<option value="switzerland">Switzerland</option>
										<option value="syria">Syria</option>
										<option value="taiwan">Taiwan</option>
										<option value="tajikistan">Tajikistan</option>
										<option value="tanzania">Tanzania</option>
										<option value="thailand">Thailand</option>
										<option value="togo">Togo</option>
										<option value="tonga">Tonga</option>
										<option value="trinidad_and_tobago">Trinidad and Tobago</option>
										<option value="tunisia">Tunisia</option>
										<option value="turkey">Turkey</option>
										<option value="turkmenistan">Turkmenistan</option>
										<option value="tuvalu">Tuvalu</option>
										<option value="uganda">Uganda</option>
										<option value="ukraine">Ukraine</option>
										<option value="united_arab_emirates">United Arab Emirates</option>
										<option value="united_kingdom">United Kingdom</option>
										<option value="united_states">United States</option>
										<option value="uruguay">Uruguay</option>
										<option value="uzbekistan">Uzbekistan</option>
										<option value="vanuatu">Vanuatu</option>
										<option value="venezuela">Venezuela</option>
										<option value="vietnam">Vietnam</option>
										<option value="yemen">Yemen</option>
										<option value="zambia">Zambia</option>
										<option value="zimbabwe">Zimbabwe</option>
									</select>
									<div class="invalid-feedback">Provide the Expected Country.</div>
								</div>
								<div class="col-md-6 mb-3">
									<label for="visaType">Visa Type<i style="color: red;"> *</i></label>
									<select class="form-control" id="visaType" name="visaType" required>
										<option value="" disabled selected>Select...</option>
										<option value="Tourist/Visitor Visa">Tourist/Visitor Visa</option>
										<option value="Student Visa">Student Visa</option>
										<option value="Visa Extension">Visa Extension</option>
									</select>
									<div class="invalid-feedback">Provide the Visa Type.</div>
								</div>
							</div>

							<!-- Tourist/Visitor Visa Fields -->
							<div id="touristFields" class="card-section" style="display: none;">
								<h4>Tourist/Visitor Visa</h4>
								<div class="row">
									<div class="col-md-4 mb-3">
										<label class="ckbox">
											<input type="checkbox" id="pastVisit" name="pastVisit">
											<span class="text-13">Have you been to any other country before this?</span>
										</label>
									</div>
									<div class="col-md-4 mb-3">
										<label for="daysOfStay">How many months are you going to stay there?<i style="color: red;"> *</i></label>
										<input type="number" class="form-control" id="daysOfStay" name="daysOfStay">
										<div class="invalid-feedback">Provide the Days of Stay.</div>
									</div>
									<div class="col-md-4 mb-3">
										<label for="purposeOfVisit">Purpose of Visit</label>
										<input type="text" class="form-control" id="purposeOfVisit" name="purposeOfVisit">
									</div>
								</div>
							</div>

							<!-- Student Visa Fields -->
							<div id="studentFields" class="card-section" style="display: none;">
								<h4>Student Visa</h4>
								<div class="form-row">
									<div class="col-md-3 mb-3">
										<label for="olResults">O/L Qualification<i style="color: red;"> *</i></label>
										<input type="text" class="form-control" id="olResults" name="olResults">
										<div class="invalid-feedback">Provide the O/L Qualification.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="alResults">A/L Qualification<i style="color: red;"> *</i></label>
										<input type="text" class="form-control" id="alResults" name="alResults">
										<div class="invalid-feedback">Provide the A/L Qualification.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="higerStudies">Higher Studies Qualification<i style="color: red;"> *</i></label>
										<input type="text" class="form-control" id="higerStudies" name="higerStudies">
										<div class="invalid-feedback">Provide the Higher Studies Qualification.</div>
									</div>
									<div class="col-md-3 mb-3">
										<label for="applyType">Applying For<i style="color: red;"> *</i></label>
										<select class="form-control" id="applyType" name="applyType">
											<option value="" disabled selected>Select...</option>
											<option value="degree">Degree</option>
											<option value="master">Master</option>
											<option value="phd">PhD</option>
										</select>
										<div class="invalid-feedback">Provide the Apply Type.</div>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-12 mb-3">
									<label for="address">Address</label>
									<input type="text" class="form-control" id="address" name="address">
								</div>
							</div>
							<div class="form-row">
								<label class="ckbox">
									<input type="checkbox" id="agreeTerms" name="agreeTerms" required>
									<span class="text-13">I agree to the terms and conditions<i style="color: red;"> *</i></span>
									<div class="invalid-feedback">You must agree before submitting.</div>
								</label>
							</div>
							<input class="btn btn-primary" type="submit" value="Submit the application">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection