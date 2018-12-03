{include file="header.tpl"}

<body class="innerbg">
    {include file="nav.tpl" }
    <style type="text/css">
    	.reg_grey_block {
		    background-color: #d9d9d9;
		    margin:10px 0px;
		    padding:10px 0px;
		}
    </style>
    <div class="bg"></div>
    <div class="container">
        <form id="reg" method="post" name="reg" action="workshop_checkout.php">
            <input type='hidden' name="hidid" id="hidid" value="{$events.id}">
            <input type='hidden' name="hideveprice" id="hideveprice" value="{$events.price}">
            <div class="divider_row" style="padding-bottom:0px;width:100%; float:left;margin-bottom: 5px;">
                <div class="col-md-12 col-sm-12 col-xs-12 p_rm">
                    <div class="bg_reg"></div>
                    <h4 class="text-left">Registration</h4>
                    <!--   <p>{$events.name} at {$events.event_date}</p> -->
                </div>
            </div>
            <!--   <img src="./images/yoga_reg.png" class="img-responsive"/> -->
            <div class="reg_grey_block">
                <h2 class="text-center">
                	{$events.description}
                    <!-- Cultural yoga retreat
          <br/>In Jogjakarata<br/> 26 - 29 May'18 -->
                </h2>
                <div class="row" style="background-color: #FFF;margin: 5px 5px 0px 5px; padding: 20px 5px">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname">First name </label>
                                    <input type="text" class="form-control" id="fname" name='fname' placeholder="First name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="sname">Surname </label>
                                    <input type="text" class="form-control" id="sname" name='sname' placeholder="Surname">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="cemail">Email </label>
                                    <input type="text" class="form-control" id="cemail" name='cemail' placeholder="Email Address">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Mobile Phone </label>
                                    <input type="text" class="form-control" id="phone" name='phone' placeholder="Mobile Phone">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <h4 class="col-md-12">Contact For Emergency</h4>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="emgPerson">name </label>
                                <input type="text" class="form-control" id="emgPerson" name='emgPerson' placeholder="Name">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="ephone">Mobile Phone </label>
                                <input type="text" class="form-control" id="ephone" name='ephone' placeholder="Mobile Phone">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="relation">Relation </label>
                                <input type="text" class="form-control" id="relation" name='relation' placeholder="Relation">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="injury">Any injury/Surgery withn 1 year </label>
                                <label class="radio-inline">
                                    <input type="radio" value="Yes" id="injury" name='injury'>
                                    Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="No" id="injury" name='injury'>
                                    No
                                </label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">If yes, please indicate the injury/illment </label>
                                <textarea rows="2" class="form-control" name="injury_des"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="phone">How Long you've been praticing yoga </label>
                                <input type="text" name="yoga" onkeypress="return alphaNum(event);" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="YTT">Have you ever take YTT (200/300/500 hour) </label>
                                <label class="radio-inline">
                                    <input type="radio" value="Yes" id="ytt" name='ytt'>
                                    Yes
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" value="No" id="ytt" name='ytt'>
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="text-center">
                        <input tabindex="3" type="submit" class="submit" value="Click to Registration" class="btn btn-default">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="soical-media visible-sm visible-xs">
        {include file="social.tpl"}
    </div>

    <div class="web_soical-media">
        {include file="social.tpl"}
    </div>



    <!-- <script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/cmxform.css">
<script src="js/jquery-validation/lib/jquery.js"></script>
<script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
<script src="js/jquery-validation/dist/additional-methods.js"></script> -->

    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/cmxform.css">
  <script src="js/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="js/jquery-validation/dist/additional-methods.js"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
 
    <script type="text/javascript">
        $('.submit').click(function(){
            validateForm();   
        });
        function validateForm() {
            var validator = $("#reg").validate({
                rules: {
                    fname: "required",
                    //Salutation:"required",
                    surname: "required",
                    cemail: { required: true, email: true },
                    phone: "required",

                    //emgPerson:"required",
                    // ephone:"required",
                },
                messages: {
                    fname: "Enter the name",
                    surname: "Enter surname",
                    cemail: "Enter valid email",
                    phone: "Enter phone number",
                },
            });
            if (validator.form()) {

                $.ajax({
                    type: "POST",
                    url: "event_regWorkshopAjax.php",
                    data: $("#reg").serialize() + "&eveType=1",
                    success: function (data) {
                        alert("Your registration added successfully");
                        $('#Salutation,#fname,#surname,#nirc,#passno,#ExpirDt,#cemail,#phone,#emgPerson,#ephone,#dob').val("");
                        //$('#trm').attr('checked', false);
                        //redirect( '/web/package_checkout.php', 'post');


                    }
                });


            }

        }

        function alphaNum(evt) {
            var theEvent = evt || window.event;
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
            if (key.length == 0) return;
            var regex = /^[a-z0-9]+$/i;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }       
    </script>
    {include file="footer.tpl"}