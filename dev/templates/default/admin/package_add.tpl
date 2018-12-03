{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Package Add</h2>	  
	    	{if isset($package_add)}
		  	<div class="success" id="msg-flash">
		  		{$package_add}
		  	</div>
		  	<br/>
		  	{/if}  	
	    	<form class="" id="myform" method="post" action="">
				<fieldset>
				    <p>
						<label for="title">Package ID*:</label>
						<input type="text" id="pid" name="pid" class="required">
					</p>					
					<p>
						<label for="title">Package Name*:</label>
						<input type="text" id="name" name="name" class="required">
					</p>
					<p>
						<label for="txt_description">Price*:</label>
						<input type="text" id="price" name="price" class="required">
					</p>
					<p>
                      <label for="txt_description">Intervel Type*:</label>
                          <select id='selIntr' name='selIntr' > 
 				{$PushSelecVal}
                          
                        </select><select id='totMon' name='totMon' > 
                            {$TotMnt}
                             </select>
                           
					</p>

                                  <p>
 			 

				 	
					<p>
						<label for="image">Group Type:</label>
						<label for="group_type_1" style="font-weight:normal;">
							<input type="radio" id="group_type_1" name="group_type" value="1" checked="checked">
							Group Class
						</label>
						<label for="group_type_2" style="font-weight:normal;">
							<input type="radio" id="group_type_2" name="group_type" value="2">
							Private Class
						</label>
                                                <label for="group_type_3" style="font-weight:normal;">
							<input type="radio" id="group_type_3" name="group_type" value="3">
							Booking Studio
						</label>
						
						   <label for="group_type_4" style="font-weight:normal;">
							<input type="radio" id="group_type_4" name="group_type" value="4">
							Promotion Package
						   </label>
						

						</label>
					</p>				
					<p>
						<input class="submit" type="submit" value="Submit"> &nbsp;<span id='ldimg' style='display:none;'><image src='../images/loadingImg.gif'></span>
					</p>
					<p>
						<a href="package.php">Back to package list</a>
					</p>
				</fieldset>
			</form>
			</div>	   
  	</div>
	</div>
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/cmxform.css">
	<script src="../js/jquery-validation/lib/jquery.js"></script>
	<script src="../js/jquery-validation/dist/jquery.validate.min.js"></script>
	<script src="../js/jquery-validation/dist/additional-methods.js"></script>
	<script>
	$(document).ready(function() {
$('#totMon').val("");
$ /* 
package_add.php
var options = $("#sel_dept");
				options.empty();
				options.append($("<option />").val("0").text("--Select--"));
				$.each(data, function() {
				options.append($("<option />").val(this.dept_id).text(this.deptname));
				});
*/

$("#selIntr").change(function() {
	var options = $("#totMon"); 
	var getVal=$('#selIntr').val();
	options.empty();     
	options.append($("<option />").val("").text("---No of Month---"));
	if(getVal==2)
	{
		options.append($("<option />").val("1").text("1"));
		$("#totMon").val(1);

	}
        else if(getVal==1)
        {
          for(var i=2; i<=12; i++)
          {
             options.append($("<option />").val(i).text(i));
          }

        }
});
			 
$("#myform").validate({
    
        
        rules: {
            pid: "required",
            name:"required",
            price:{
                required: true,
                number: true,
            },
            selIntr:"required",
            totMon:{
                required: true,
                
            },

            
            
        },
        
        
        messages: {
            pid: "Enter Package ID",
            name:"Please enter Package Name",
            price:{

            	 required: "Enter Package Price",
                 number:"Please enter Digit only",
            	},
            selIntr:"Select Intervel ",
            totMon:{

            	 required: "Select Total Number of Month",
                  
            	},  
            
             
            
        },
        
        submitHandler: function(form) {
        	$('#ldimg').show();
           $.ajax({
	            	type: "POST",
	                url: "pakAddAjax.php",
	                data: $( "#myform" ).serialize()+"&mode=planAdd",
	                success:function(data){

  
	                	$('#ldimg').hide();
	                	var SpData=data.split("#$#");
	                	if(SpData[0]==1)
	                	{
                              alert(SpData[1]);
                             $("#pid,#name,#price,#selIntr,#totMon").val("");
                             
	                	}
	                	else if(SpData[0]==2)
	                	{
                             alert(SpData[1]);
                             
	                	}
	                	else
	                	{

                          alert("Please try later")
	                	}
		             
	      		}
	        });
        

        }
    });

 



		});


	</script>
{include file="admin/footer.tpl"}
