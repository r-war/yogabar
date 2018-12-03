{include file="admin/header.tpl"}
<body class="innerbg">
	{include file="admin/nav.tpl"}
	<div class="container-fluid">
	  <!-- Main component for a primary marketing message or call to action -->
	  <div class="col-md-3"></div>
	  <div class="col-md-9 ">  	
	    <div id="animation" class="white-bg-admin">
	    	<h2>Events Registration/Subscription List</h2>
	    	<!--<span style="float:right;"><a href="package_add.php" id="Add">Add</a></span> -->
	    	<br />
	    	<div class="table-responsive">
                   <form action='event_sub.php' name='reFrm' method='post' id='reFrm' >
				  <table id="package_list"  class="display table" cellspacing="0" width="80%">
                                  <tr> <td>From date </td> <td> <p><input type="text" autocomplete="off" id="frmDt" name='frmDt' /></p> </td> </tr>             

 <tr> <td>To date </td> <td> <p><input type="text"  id="toDt" autocomplete="off" name='toDt' /></p> </td> </tr>  
 <tr><td>Event type </td> <td><select id='catType' name='catType'> <option value="1" >Workshop</option><option value="2" >Retreat</option> </select> </td> </tr>               
  <tr> <td align='center' colspan='2'> <button type="submit" id='subBtn' class='subbtncls'   
                         > Get Report</button>   </td> </tr>
			          <table>
</form>
				</div> 
			</div>	   
  	</div>
	</div> 
	<link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
	<!--<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/jquery.dataTables.js"></script> -->

      <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
    
    
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
   
    <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>

 
	<script src="../js/jquery-validation/dist/jquery.validate.min.js"></script>

	<script type="text/javascript">
		$(document).ready(function() {

 $( "#frmDt" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd-mm-yy',
     showOn: "button",
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                 
      onSelect: function(selected) {
          $("#toDt").datepicker("option","minDate", selected)
        }
    });

$( "#toDt" ).datepicker({
      changeMonth: true, 
      changeYear: true  ,
      dateFormat: 'dd-mm-yy',
showOn: "button",
                buttonImage: "http://jqueryui.com/resources/demos/datepicker/images/calendar.gif",
                 
    });
	     


 

 $("#subBtn").click(function(event) {  
                  
 

var frmv=$('#frmDt').val() ;
var tov=$('#toDt').val() ;
if( frmv !=""  && tov !="" )
{
  $('#reFrm').submit();
}
else
{ event.preventDefault();
 alert("From and to date are not empty");

}

 

 

    });

//

		});
	</script>
{include file="admin/footer.tpl"}
