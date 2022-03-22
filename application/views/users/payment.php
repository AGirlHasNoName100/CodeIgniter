<style>
    span
{
    font-weight:bold;
}

.san{
    height: 26px;
    width: 250px;
    border: 1px solid #9E9E9E;
    padding: 5px;
    border-radius: 5px;
    margin: 10px;

}
</style>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<div class="container">
    <br><br>
    <div class="row justify-content-left">
        <div class="col-xs-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4><strong style="color: blue;"><u>STEPS TO MAKE PAYMENT</u></strong></h4>
                    <p id="steps">
                        <b>1.Input your valid MPESA registered ID number.<br>
                            2.Input your valid corresponding Phone number<br>
                            3.Open your SIM ToolKit on your mobile phone and select MPESA.<br>
                            4.Select Lipa Na MPESA and input MotherGoose MPESA Paybill No.: 123456
                            ,Account Number: 0755678833 and Amount:Ksh 2000<br>
                            5.Complete MPESA transaction and input MPESA code received in the form to the side.<br>
                            6.Finish Payment
                          <br>
                          <bold style="color: red;">  NB: Payment is to reserve an interview.</bold><br>
                          <label style="color: red;">Required fields are marked *</label>
                        </b>
                    </p>
                </div>
            </div>
        </div>
        <br><br>

        <div class="container justify-content-right">
            <div class="col-xs-12 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Payment Details
                        </h3>
                    </div>
                    
                    <form role="form" method="POST" action="<?php echo base_url(); ?>users/payment">
                    <div class="form-group">
                    <input type="hidden" class="form-control"  value="<?php echo $user_details[0]->emp_id;?>"  name="id"/>
                    </div>
                    <div class="form-group">
                    <input type="hidden" class="form-control"  value="<?php echo $user_details[0]->customer_id;?>"  name="code"/>
                    </div>
                        <div class="form-group">
                            <label for="idNumber">
                                TRANSACTION ID NUMBER</label><label style="color: red;">*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="cardNumber" placeholder="Valid ID Number" required autofocus name="natid" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="PhoneNumber">
                                TRANSACTION PHONE NUMBER</label><label style="color: red;">*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="txtPhone" placeholder="eg. 07*********" required autofocus name="phone" />
                                <span id="spnPhoneStatus"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mpesacode">
                                MPESA CODE</label><label style="color: red;">*</label>
                            <div class="input-group">
                                <input type="text" class="form-control" id="code" placeholder="eg. OBB0ZGHJN9" autofocus name="mpesacode" required />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="date">
                                DATE OF TRANSACTION</label><label style="color: red;">*</label>
                            <div class="input-group">
                                <input type="date" class="form-control" id="date" placeholder="eg. 24/04/2020" required autofocus name="date" />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Finish</button>
                    </form>
                </div>
            </div>
            <br />
        </div>
    </div> 
    </div>
    <script type='text/javascript'>//<![CDATA[
$(window).load(function(){
$(document).ready(function() {
    $('#txtPhone').blur(function(e) {
        if (validatePhone('txtPhone')) {
            $('#spnPhoneStatus').html('Valid Mobil Number');
            $('#spnPhoneStatus').css('color', 'green');
        }
        else {
            $('#spnPhoneStatus').html('Invalid Mobile Number');
            $('#spnPhoneStatus').css('color', 'red');
        }
    });
});

function validatePhone(txtPhone) {
    var a = document.getElementById(txtPhone).value;
    var filter = /[1-9]{1}[0-9]{9}/;
    if (filter.test(a)) {
        return true;
    }
    else {
        return false;
    }
}
});//]]> 

</script>
    <script>  var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
 if(dd<10){
        dd='0'+dd
    } 
    if(mm<10){
        mm='0'+mm
    } 

today = yyyy+'-'+mm+'-'+dd;
  document.getElementById("date").setAttribute("max", today);</script>
  <?php
  
  ?>