<?php
$this->load->helper('url');
?>
<div class="banner-1">
<div class="container">
    <div class="header-1">
        <div class="logo1">
          <a href="<?php echo base_url('index.php');?>"><img src="<?php echo base_url(); ?>assests/images/lite.png" height="0" width="300" class="img-responsive" alt="" /></a>
        </div>
        <div class="head-nav">
            <span class="menu"> </span>
              <ul class="cl-effect-16">
                <li>
                  <a href="<?php echo base_url('index.php');?>" data-hover="HOME">HOME
                  </a>
                </li>
                <li>
                  <a href="<?php  echo base_url('index.php/about/view');?>" data-hover="ABOUT">ABOUT</a>
                </li>
                <li class="active"><a href="<?php echo base_url('index.php/rentals/view');?>" data-hover="RENTALS">RENTALS</a></li>
                <li><a href="<?php echo base_url('index.php/destination/view');?>" data-hover="DESTINATIONS">DESTINATIONS</a></li>
                <li><a href="<?php  echo base_url('index.php/contacts/view');?>" data-hover="CONTACTS">CONTACTS</a></li>
                  <div class="clearfix"> </div>
              </ul>
        </div>
            <div class="clearfix"> </div>
          <!-- script-for-nav -->
          <script>
            $( "span.menu" ).click(function() {
              $( ".head-nav ul" ).slideToggle(300, function() {
              // Animation complete.
              });
            });
          </script>
        <!-- script-for-nav -->
      </div>
      </div>
  </div>
<div class="container" style="margin-top: 5%; margin-bottom: 5%;">
<div class="stepwizard">
    <div class="stepwizard-row setup-panel">
        <div class="stepwizard-step">
            <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
            <p>Step 1</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
            <p>Step 2</p>
        </div>
        <div class="stepwizard-step">
            <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
            <p>Step 3</p>
        </div>
    <div class="stepwizard-step">
            <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
            <p>Step 4</p>
        </div>
    <div class="stepwizard-step">
            <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
            <p>Step 5</p>
        </div>
    </div>
</div>
<form role="form">
    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Choose your location: </h3>
                <div class="form-group">
                    <label class="control-label">From: </label>
           <select name="departing"  maxlength="50" required="required" class="form-control">
            <option value="default" disabled selected>Departing From</option>
            <option value="manila">Manila</option>
            <option value="lucena">Lucena</option>
            <option value="ilocos">Ilocos</option>
            <option value="pampanga">Pampanga</option>
          </select>
                </div>
                <div class="form-group">
                    <label class="control-label">To: </label>
          <select name="arriving"  maxlength="50" required="required" class="form-control">
            <option value="default" disabled selected>Arriving At</option>
            <option value="manila">Manila</option>
            <option value="lucena">Lucena</option>
            <option value="ilocos">Ilocos</option>
            <option value="pampanga">Pampanga</option>
          </select>
                </div>
        <div class="form-group">
                    <label class="control-label">Time: </label>
          <select name="time"  maxlength="50" required="required" class="form-control">
            <option value="default" disabled selected >Time</option>
            <option value="8AM" >8:00AM</option>
            <option value="1030AM" >10:30AM</option>
            <option value="1PM">1:00PM</option>
            <option value="3PM">3:00PM</option>
          </select>
                </div>
        <div class="form-group">
                    <label class="control-label">Ticket: </label>
          <select name="ticket"  maxlength="50" required="required" class="form-control">
            <option value="default" disabled selected >Ticket Type</option>
            <option value="oneway" >One Way</option>
            <option value="roundtrip" >Round Trip</option>
          </select>
                </div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Payment Method</h3>
          <div class="payment">
              <button class="button btn-1 btn-1c">Cash</button>
              <p> OR </p>
              <button class="button btn-1 btn-1c nextBtn">Card</button>
          </div>
            </div>
        </div>
    </div>
  </div>
    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
         <div class="container">
          <div class="row">
          <!-- You can make it whatever width you want. I'm making it full width
          on <= small devices and 4/12 page width on >= medium devices -->
            <div class="col-xs-12 col-md-4">
            <!-- CREDIT CARD FORM STARTS HERE -->
              <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                  <div class="row display-tr" >
                  <h3 class="panel-title display-td" >Payment Details</h3>
                    <div class="display-td" >                            
                      <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                    </div>
                  </div>                    
                </div>
              <div class="panel-body">
              <form role="form" id="payment-form">
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="cardNumber">CARD NUMBER</label>
                        <div class="input-group">
                          <input type="tel" class="form-control" name="cardNumber" placeholder="Valid Card Number" autocomplete="cc-number" required autofocus />
                          <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                        </div>
                    </div>                            
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-7 col-md-7">
                    <div class="form-group">
                      <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                      <input type="tel" class="form-control" name="cardExpiry" placeholder="MM / YY"autocomplete="cc-exp" required />
                    </div>
                  </div>
                  <div class="col-xs-5 col-md-5 pull-right">
                    <div class="form-group">
                      <label for="cardCVC">CV CODE</label>
                      <input type="tel" class="form-control" name="cardCVC" placeholder="CVC" autocomplete="cc-csc" required/>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <div class="form-group">
                      <label for="couponCode">COUPON CODE</label>
                      <input type="text" class="form-control" name="couponCode" />
                    </div>
                  </div>                        
                </div>
                <div class="row">
                  <div class="col-xs-12">
                    <button class="btn btn-success btn-lg btn-block" type="submit">Start Subscription</button>
                  </div>
                </div>
                <div class="row" style="display:none;">
                  <div class="col-xs-12">
                    <p class="payment-errors"></p>
                  </div>
                </div>
              </form>
            </div>
          </div>            
          <!-- CREDIT CARD FORM ENDS HERE -->
          </div>            
          </div>
        </div>
              <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>
        </div>
    </div>
  <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 4</h3>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button">Next</button>
            </div>
        </div>
    </div>
  <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 5</h3>
                <button class="btn btn-success btn-lg pull-right" type="submit">Finish!</button>
            </div>
        </div>
    </div>
</form>
</div>