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
						<h2>Airline Ticket Service Reservation Form</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="bg-image-landing bg-white section" id="Application">
	<div class="container px-5 px-md-0">
		<div class="d-flex justify-content-center align-items-center">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-body">
						<form class="needs-validation" name="contact-form" novalidate>
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
									<label for="destination">Gender<i style="color: red;"> *</i></label>
									<select class="form-control" id="destination" name="destination" required>
										<option value="" disabled selected>Select...</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									<div class="invalid-feedback">Provide the Gender.</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 mb-3 form-group">
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
								<div class="col-md-4 mb-3">
									<label for="email">Email</label>
									<input type="email" class="form-control" id="email" name="email">
								</div>
								<div class="col-md-4 mb-3">
									<label for="phone">Phone Number<i style="color: red;"> *</i></label>
									<input type="tel" class="form-control" id="phone" name="phone" required>
									<div class="invalid-feedback">Provide the phone number.</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 mb-3 form-group">
									<label for="destination">Destination<i style="color: red;"> *</i></label>
									<select class="form-control select2-style1" name="destination" id="destination" required>
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
									<div class="invalid-feedback">Provide the Destination.</div>
								</div>
								<div class="col-md-4 mb-3 form-group">
									<label for="depature">Depature<i style="color: red;"> *</i></label>
									<select class="form-control select2-style1" name="depature" id="depature" required>
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
									<div class="invalid-feedback">Provide the Depature.</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="type">Type<i style="color: red;"> *</i></label>
									<select class="form-control" id="type" name="type" required>
										<option value="" disabled selected>Select...</option>
										<option value="One way">One way</option>
										<option value="Return">Return</option>
									</select>
									<div class="invalid-feedback">Provide the Type.</div>
								</div>
							</div>
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="travellers">Travellers<i style="color: red;"> *</i></label>
									<select class="form-control" id="travellers" name="travellers" required>
										<option value="" disabled selected>Select...</option>
										<option value="1">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
										<option value="7">7</option>
										<option value="8">8</option>
									</select>
									<div class="invalid-feedback">Provide the Travellers Count.</div>
								</div>
								<div class="col-md-8 mb-3">
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