<style type="text/css">
    .invalid-feedback {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 85%;
  color: #dc3545;
}

.invalid-tooltip {
  position: absolute;
  top: 100%;
  z-index: 5;
  display: none;
  max-width: 100%;
  padding: 0.25rem 0.5rem;
  margin-top: .1rem;
  font-size: 0.875rem;
  line-height: 1.5;
  color: #fff;
  background-color: rgba(220, 53, 69, 0.9);
  border-radius: 0.25rem;
}

.was-validated :invalid ~ .invalid-feedback,
.was-validated :invalid ~ .invalid-tooltip,
.is-invalid ~ .invalid-feedback,
.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .form-control:invalid, .form-control.is-invalid {
  border-color: #dc3545;
  padding-right: calc(1.5em + 0.75rem);
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right calc(0.375em + 0.1875rem) center;
  background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .form-control:invalid:focus, .form-control.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated textarea.form-control:invalid, textarea.form-control.is-invalid {
  padding-right: calc(1.5em + 0.75rem);
  background-position: top calc(0.375em + 0.1875rem) right calc(0.375em + 0.1875rem);
}

.was-validated .custom-select:invalid, .custom-select.is-invalid {
  border-color: #dc3545;
  padding-right: calc(0.75em + 2.3125rem);
  background: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='4' height='5' viewBox='0 0 4 5'%3e%3cpath fill='%23343a40' d='M2 0L0 2h4zm0 5L0 3h4z'/%3e%3c/svg%3e") no-repeat right 0.75rem center/8px 10px, url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' fill='none' stroke='%23dc3545' viewBox='0 0 12 12'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e") #fff no-repeat center right 1.75rem/calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
}

.was-validated .custom-select:invalid:focus, .custom-select.is-invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .form-check-input:invalid ~ .form-check-label, .form-check-input.is-invalid ~ .form-check-label {
  color: #dc3545;
}

.was-validated .form-check-input:invalid ~ .invalid-feedback,
.was-validated .form-check-input:invalid ~ .invalid-tooltip, .form-check-input.is-invalid ~ .invalid-feedback,
.form-check-input.is-invalid ~ .invalid-tooltip {
  display: block;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label, .custom-control-input.is-invalid ~ .custom-control-label {
  color: #dc3545;
}

.was-validated .custom-control-input:invalid ~ .custom-control-label::before, .custom-control-input.is-invalid ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-control-input:invalid:checked ~ .custom-control-label::before, .custom-control-input.is-invalid:checked ~ .custom-control-label::before {
  border-color: #e4606d;
  background-color: #e4606d;
}

.was-validated .custom-control-input:invalid:focus ~ .custom-control-label::before, .custom-control-input.is-invalid:focus ~ .custom-control-label::before {
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}

.was-validated .custom-control-input:invalid:focus:not(:checked) ~ .custom-control-label::before, .custom-control-input.is-invalid:focus:not(:checked) ~ .custom-control-label::before {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid ~ .custom-file-label, .custom-file-input.is-invalid ~ .custom-file-label {
  border-color: #dc3545;
}

.was-validated .custom-file-input:invalid:focus ~ .custom-file-label, .custom-file-input.is-invalid:focus ~ .custom-file-label {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.2rem rgba(220, 53, 69, 0.25);
}
</style>
<?php require APPROOT .'/view/include/header.php';?>
<!-- start of hero -->
    <section class="hero hero-slider-wrapper hero-style-1 hero-style-2">
        <div class="hero-slider">
            <div class="slide">
                <img src="<?php echo URLROOT;?>/image/air/5.jpg" alt class="slider-bg">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-9 slide-caption">
                            <h2><span>Track your Shipment here</span> <span>with Your Tracking Number.</span></h2>
                            <div class="btns">
                                <div class="btn-style"><a href="#">Contact us now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end of hero slider -->
	<!-- start track-section -->   
    <section class="track-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="track">
                        <h3>Enter Your Email and Track Your Cargo/Shipment</h3>
                        <div class="tracking-form">
                            <div class="row">
                            <form method="POST" action="<?php echo URLROOT;?>/pages/track">
                                <div class="form-group col-lg-12 col-md-12 col-sm-12" style="opacity: 0.7;">
                                    <input type="text" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : ''; ?>" value="" name="email" required = "required" placeholder="Email">
                                    <span class="invalid-feedback"><?php echo $data['email_err'];?></span>
                                </div>
                                <div class="form-group col-lg-12 col-md-12 col-sm-12" style="opacity: 0.7;">
                                    <input type="text" class="form-control <?php echo (!empty($data['track_err'])) ? 'is-invalid' : ''; ?>" value="" name="track" required="required" placeholder="Tracking_Number">
                                    <span class="invalid-feedback"><?php echo $data['track_err'];?></span>
                                </div>

                                <div class="col-lg-3 col-md-4 col-sm-6">
                                    <button type="submit">Track Your Cargo</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end container -->
    </section>
    <!-- end track-section -->

    <!-- map section -->
    	<section class="map-section">
    		<div class="container">
    			<div class="row">
    				<div class="col-lg-12">
    					<div class=" col-lg-12 mapouter">
                            <div class="gmap_canvas">
                            <iframe id="gmap_canvas" src="https://maps.google.com/maps?q=<?php echo $data['shipment']->current_location;?>&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                            </div>
                        </div>
    				</div>
    			</div>
    		</div>
    	</section>
    <!-- end map -->
    <div class="container">
        <div class="row">
        <?php if(isset($_POST['track']) && isset($_POST['email'])):?>
            <div class="table-responsive" style="margin-top: 2px;">
                    <table class="table table-bordered table-condensed table-hover">
                        <tr style="font-family: 'Roboto';"> 
                            <th>Sender</th>
                            <th>Receiver</th>
                            <th>Receiver_email</th>
                            <th>Quantity</th>
                            <th>Nature</th>
                            <th>Destination</th>
                            <th>Current_location</th>
                            <th>Status</th>
                            <th>Departure</th>
                            <th>Arrival</th>
                        </tr>
                        <tr>     
                            <td><?php echo $data['shipment']->sender;?></td>
                            <td><?php echo $data['shipment']->receiver;?></td>
                            <td><?php echo $data['shipment']->email;?></td>
                            <td><?php echo $data['shipment']->qgoods;?></td>
                            <td><?php echo $data['shipment']->nature_of_goods;?></td>
                            <td><?php echo $data['shipment']->destination;?></td>
                            <td><?php echo $data['shipment']->current_location;?></td>
                            <td><?php echo $data['shipment']->status;?></td>
                            <td><?php echo $data['shipment']->ddate;?></td>
                            <td><?php echo $data['shipment']->adate;?></td>
                        </tr>
                        </table>
                    </div>
        <?php else:?>
            <div><?php flash('message');?></div>
    <?php endif;?>
        </div>
    </div>
<?php require APPROOT .'/view/include/footer.php';?>
                    