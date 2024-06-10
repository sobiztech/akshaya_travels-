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
                        <h2>Airline Ticket Reservation Form</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Contact-->
<div class="bg-image-landing bg-white section" id="Application">
	<div class="container px-5 px-md-0">
		<div class="row text-center justify-content-center">
			<div class="col-lg-8">
				<h3 class="header-family">விண்ணப்பதாரர் விவரங்கள்</h3>
				<p class="text-default sub-text">எங்கள் குழு உங்களை விரைவாக தொடர்புகொள்ளும்.</p>
			</div>
		</div>
		<div class="d-flex justify-content-center align-items-center">
			<div class="col-lg-12 col-md-12">
				<div class="card">
					<div class="card-body">
						<form class="needs-validation" name="contact-form" novalidate>
							<!-- Child Information -->
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
							</div>
							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="childGender">பாலினம்<i style="color: red;"> *</i></label>
									<select class="form-control" id="childGender" name="childGender" required>
										<option value="" disabled selected>தேர்வு செய்யவும்...</option>
										<option value="ஆண்">ஆண்</option>
										<option value="பெண்">பெண்</option>
									</select>
									<div class="invalid-feedback">குழந்தையின் பாலினத்தைத் தேர்ந்தெடுக்கவும்.</div>
								</div>
								<div class="col-md-4 mb-3">
									<label for="parentEmail">மின்னஞ்சல்</label>
									<input type="email" class="form-control" id="parentEmail" name="parentEmail">
								</div>
								<div class="col-md-4 mb-3">
									<label for="parentPhone">தொலைபேசி எண்<i style="color: red;"> *</i></label>
									<input type="tel" class="form-control" id="parentPhone" name="parentPhone" required>
									<div class="invalid-feedback">தொலைபேசி எண்ணை வழங்கவும்.</div>
								</div>
							</div>

							<div class="form-row">
								<div class="col-md-4 mb-3">
									<label for="parentCountry">நாடு</label>
									<input type="text" class="form-control" id="parentCountry" name="parentCountry" value="இலங்கை" readonly>
								</div>
								<div class="col-md-4 mb-3">
									<label for="parentDistrict">மாவட்டம்</label>
									<input type="text" class="form-control" id="parentDistrict" name="parentDistrict" value="யாழ்ப்பாணம்" readonly>
								</div>
								<div class="col-md-4 mb-3 form-group">
									<label for="livingArea">வாழும் பகுதி<i style="color: red;"> *</i></label>
									<select class="form-control select2-style1" name="livingArea" id="livingArea" required>
										<option value="" disabled selected>தேர்வு செய்யவும்...</option>
										<option value="வட்டுக்கோட்டை">வட்டுக்கோட்டை</option>
										<option value="அராலி">அராலி</option>
										<option value="சங்கானை">சங்கானை</option>
										<option value="சுழிபுரம்">சுழிபுரம்</option>
										<option value="மூளாய்">மூளாய்</option>
									</select>
									<div class="invalid-feedback">வாழும் பகுதியை தேர்ந்தெடுக்கவும்.</div>
								</div>
							</div>

							<div class="form-row">
								<label class="ckbox">
									<input type="checkbox" id="agreeTerms" name="agreeTerms" required>
									<span class="text-13">நான் விதிகள் மற்றும் நிபந்தனைகளை ஒப்புக்கொள்கிறேன்<i style="color: red;"> *</i></span>
									<div class="invalid-feedback">சமர்ப்பிக்கும் முன் நீங்கள் ஒப்புக்கொள்ள வேண்டும்.</div>
								</label>
							</div>
							<input class="btn btn-primary" type="submit" value="விண்ணப்பத்தை சமர்ப்பிக்கவும்">
							<!-- <button class="btn btn-primary" type="submit">விண்ணப்பத்தை சமர்ப்பிக்கவும்</button> -->
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- <div class="row">
			<div class="card mt-3 mb-0">
				<div class="card-body text-dark px-0 pb-0">
					<div class="statistics-info">
						<div class="col-xl-12 col-12">
							<div class="row">
								<div class="col-xl-6 col-md-12 col-sm-12">
									<div class="services-statistics">
										<div class="row">
											<div class="col-6">
												<div class="card p-0">
													<div class="card-body p-0">
														<div class="row">
															<div class="col-xl-3 col-md-3 col-sm-3">
																<div class="counter-icon border border-primary text-primary">
																	<i class="fe fe-map-pin"></i>
																</div>
															</div>
															<div class="col-xl-9 col-md-9 px-0 mb-1 col-sm-9">
																<h5 class="mb-1 fw-semibold">பிரதான கிளை</h5>
																<p class="fs-13 text-muted">வட்டுக்கோட்டை-மூளாய் வீதி, மூளாய், இலங்கை
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="card p-0">
													<div class="card-body p-0">
														<div class="row">
															<div class="col-xl-3 col-md-3 col-sm-3">
																<div class="counter-icon border border-primary text-primary">
																	<i class="fe fe-headphones"></i>
																</div>
															</div>
															<div class="col-xl-6 col-md-9 px-0 mb-1 col-sm-9">
																<h5 class="mb-1 fw-semibold">தொலைபேசி</h5>
																<p class="mb-0 fs-13 text-muted">021-2224528
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="card p-0">
													<div class="card-body p-0">
														<div class="row">
															<div class="col-xl-3 col-md-3 col-sm-3">
																<div class="counter-icon border border-primary text-primary">
																	<i class="fe fe-mail"></i>
																</div>
															</div>
															<div class="col-xl-6 col-md-9 px-0 mb-1 col-sm-9">
																<h5 class="mb-1 fw-semibold">மின்னஞ்சல்</h5>
																<p class="mb-0 fs-13 text-muted">vaddupreschool@gmail.com
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-6">
												<div class="card p-0">
													<div class="card-body p-0">
														<div class="row">
															<div class="col-xl-3 col-md-3 col-sm-3">
																<div class="counter-icon border border-primary text-primary">
																	<i class="fe fe-airplay"></i>
																</div>
															</div>
															<div class="col-xl-6 col-md-9 px-0 mb-1 col-sm-9">
																<h5 class="mb-1 fw-semibold">வேலை நேரம்</h5>
																<p class="mb-0 fs-13 text-muted">திங்கள் - வெள்ளி: 9am
																	- 6pm</p>
																<p class="fs-13 text-muted">சனி - ஞாயிறு: விடுமுறை
																</p>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-xl-6 col-md-12 col-sm-12">
									<div class="">
										<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15729.238065742084!2d79.9356223698399!3d9.7398277807206!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afe52e98d542dcb%3A0x8bad045e1da0295f!2sJaffna%20College!5e0!3m2!1sen!2slk!4v1717053484301!5m2!1sen!2slk" width="600" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->
	</div>
</div>
<!--Contact close-->

@endsection

@section('modal')
<!-- modal -->
@endsection

@section('scripts')
<!-- scripts -->
@endsection