
						<div class="form-inquiry1" id="inquiry_step1">
							<div class="row">
								<div class="col-lg-12 text-center">
									<a href="javascript:formback('inquiry');" class="btn btn-mini btn-warning pull-right">
										Back
									</a>
									<h4 class="text-capitalize">
										Inquire about <?echo ucfirst($info['domain'])?>
									</h4>
									<p class="blck-p">
										Enter a correct email, your email and inquiry will be deemed private but you will receive a response from our team as soon as we receive your inquiry.
									</p>
									<br>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<form class="" onsubmit="return false;"> 
										<div class="step text-center">
											<h4>Step 1: <i class="fa fa-file-alt"></i> Submit Your Inquiry</h4>
											<p>If you have questions, feel free to contact us.</p>
										</div>
										<div class="step text-center">
											<h4>Step 2: <i class="fa fa-tasks"></i>We Will Contact You Shortly</h4>
											<p>You will receive an email addressing your concern.</p>
										</div>
										<p></p>
										<div class="group-form">
											<input type="text" class="form-control input-lg" id="inquiry_initialemail" placeholder="Enter e-mail address">
										</div>
										<span class="pull-left requiredFieldError" id="inquiry_warning1"></span> 
										<button type="submit" id="inquiry_btn_1" class="btn btn-primary  pull-right">
											Apply Today
											<i class="fa fa-circle-arrow-right"></i>
										</button>
										<input type="hidden" id="inquiry_domain" value="<?=$info['domain']?>"> 
									</form>
								</div>
							</div>
						</div>
						<div class="form-inquiry2 hideIt" id="inquiry_step2">
							<div class="row">
								<div class="col-lg-12 text-center">
									<a href="javascript:formback('inquiry');" class="btn btn-mini btn-warning pull-right">
										Back
									</a>
									<h4 class="text-capitalize">
										Inquire about <?echo ucfirst($info['domain'])?>
									</h4>
									<p class="blck-p">
										Enter a correct email, your email and inquiry will be deemed private but you will receive a response from our team as soon as we receive your inquiry.
									</p>
									<br>
								</div>
							</div>
							<form class="" onsubmit="return false;"> 
								<div class="row">
									<div class="col-lg-6">
										<div class="group-form">
												<label>
													First Name
													<span class="text-error">*</span>
												</label>
											<input class="form-control input-lg" type="text" id="inquiry_firstname" >
										</div>
									</div>
									<div class="col-lg-6">
										<div class="group-form">
											<label>
												Last Name
												<span class="text-error">*</span>
											</label>
											<input class="form-control input-lg" type="text" id="inquiry_lastname">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="group-form">
												<label>
													Email
													<span class="text-error">*</span>
												</label>
											<input class="form-control input-lg" type="text" id="inquiry_email">
										</div>
									</div>
									<div class="col-lg-6">
										<div class="group-form">
											<label>
												Contact Number
												<span class="text-error">*</span>
											</label>
											<input class="form-control input-lg" type="text" id="inquiry_contact">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="group-form">
											<label>
												Country
												<span class="text-error">*</span>
											</label>
											<select class="form-control input-lg" id="inquiry_country"> 
												<option value=""></option>
												<?php for($ci=0;$ci<sizeof($countriesarray);$ci++){ ?>											
													<option value="<?=$countriesarray[$ci]['country_id']?>"><?=$countriesarray[$ci]['name']?></option>
												<?}?>
											</select> 
										</div>
									</div>
									<div class="col-lg-6">
										<div class="group-form">
											<label>
												City
												<span class="text-error">*</span>
											</label>
											<input class="form-control input-lg" type="text" id="inquiry_city">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-6">
										<div class="group-form">
												<label>
													Password
													<span class="text-error">*</span>
												</label>
											<input class="form-control input-lg" type="password" id="inquiry_password" >
										</div>
									</div>
									<div class="col-lg-6">
										<div class="group-form">
											<label>
												Confirm Password
												<span class="text-error">*</span>
											</label>
											<input class="form-control input-lg" type="password" id="inquiry_password2">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-lg-12">
										<div class="group-form">
											<label>
												Message
												<span class="text-error">*</span>
											</label>
											<textarea class="form-control" rows="3" id="inquiry_message"></textarea>
										</div>
									</div>
								</div>
								<div class="row">									
									<div class="col-lg-9  text-left">
										<div class="requiredFieldError" id="inquiry_warning2"></div> 
									</div>
									<div class="col-lg-3  text-right">
										<button type="submit" class="btn btn-primary " id="inquiry_btn_2">Next <i class="fa fa-circle-arrow-right"></i></button>
									</div>
								</div>
							</form>
						</div>
						<div class="form-inquiry3 hideIt" id="inquiry_final">
							<div class="row">
								<div class="col-lg-12 text-center">
									<a href="javascript:formback('inquiry');" class="btn btn-mini btn-warning pull-right">
										Back
									</a>
									<h4 class="text-capitalize">
										Inquire about <?echo ucfirst($info['domain'])?>
									</h4>
									<h3 class="blck-p text-error">
										Thank you for contacting us.
									</h3>
									<p>
										You are now minutes away to joining <?echo ucfirst($info['domain'])?> team.
									</p>
									<br>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<p class="thnk-p">
										<b>1.</b>
										Click the link in the
										<span class="text-info">Verification email</span>
										that we have just sent you. If you still haven't received it, please check your spam inbox.
									</p>
									<p class="thnk-p">
										<b>2.</b>
										Your verification link will redirect you to our
										<a href="http://www.contrib.com" target="_blank">Marketpalce hub</a>
										where you can login and check out your application status.
									</p>
									<p class="thnk-p">
										<b>3.</b>
										You can now take part in actually building out an asset by sending proposals, partnering with brands, joining teams.
									</p>
									<br>
									<div id="viewcontriblink">Thank You!</div>
								</div>
							</div>
						</div>
					
						<script src="/js/serviceforms/service_inquiry.js"></script>