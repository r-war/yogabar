{include file="admin/header.tpl"}

<body class="innerbg">
  {include file="admin/nav.tpl"}
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->

      <div class="white-bg" style="width:100%">
        <h2>Events Registration/Subscription List for {$catNameVal}</h2>
        <span style="float:right;"><a href="report_events.php" id="Add">Back</a></span>
        <br />
        <div class="table-responsive">
          <table id="package_list" class="display table" cellspacing="0" width="100%">
            <thead>
              <tr>
                <th>No</th>
                <th>Events. Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Emergency Person</th>
                <th>Emergency Phone</th>
                <th>Emergency relation</th>
                <th>Injury</th>
                <th>Injury Description</th>
                <th>How long do Yoga (days)</th>
                <th>YTT</th>
                <!--  <th>Price</th> -->
                <th>Reg Dt. </th>


              </tr>
            </thead>


            <tbody> {assign var=Row value=0}
              {assign var=UnChKRow value=0}
              {foreach $getAllSubunSubList as $keys=>$package}

              <tr>
                <td>{$Row+1}</td>
                <td>{$package['name']}</td>
                <td>{$package['user_name']} {$package['surname']}</td>
                <td>{$package['email']}</td>
                <td>{$package['phone']}</td>
                <td>{$package['name_emergency']}</td>
                <td>{$package['name_emr_phone']}</td>
                <td>{$package['emr_relation']}</td>
                <td>{$package['injury']}</td>
                <td>{$package['injury_des']}</td>
                <td>{$package['yoga']}</td>
                <td>{$package['ytt']}</td>
                <!-- <td>
                        {if {$package['price']}==0}
                         Free
                         {else}
                         {$package['price']}
                        {/if}
                        
                        </td>  -->
                <td>{$package['created_at']}</td>






              </tr>
              {assign var=Row value=$Row+1}


              {/foreach}


        </div>
      </div>
  </div>
  <link href="../css/dataTables.bootstrap.min.css" rel="stylesheet">
  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/jquery.dataTables.js"></script>
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.4.1/css/buttons.dataTables.min.css">

  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
  <script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>


  <!-- <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.13/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.0.3/css/buttons.dataTables.min.css">

  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.13/js/jquery.dataTables.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.9/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.0.3/js/dataTables.buttons.min.js"></script> -->
  <script type="text/javascript" charset="utf8" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/buttons/1.0.3/js/buttons.html5.min.js"></script>




  <script type="text/javascript">
    $(document).ready(function () {
      //$('#package_list').DataTable();
      var docWidth = document.documentElement.offsetWidth;

      [].forEach.call(
        document.querySelectorAll('*'),
        function(el) {
          if (el.offsetWidth > docWidth) {
            console.log(el);
          }
        }
      );


      $('#package_list').DataTable({
        dom: 'Bfrtip',
        buttons: [
          'excel'
        ]
      });



      $("#package_list").on("click", ".btncls", function () {



        var Selval = $(this).attr('lang');


        var r = confirm("Are you want to UnSubscribed this package? ");
        if (r == true) {


          if (Selval > 0) {
            $('#ldimg').show();
            $.ajax({
              type: "POST",
              url: "subscrib_admin_ajax.php",
              data: $("#frmsub").serialize() + "&mode=delsub&ids=" + Selval,
              dataType: 'HTML',
              success: function (data) {

                //alert(data);
                $('#ldimg').hide();
                var Spldata = data.split('#$#');
                //alert(data)
                if (Spldata[0] == 0) {
                  alert("Session out");
                  //location.href="logout.php";
                }
                else if (Spldata[0] == 1) {
                  alert(Spldata[1]);
                  //location.href="user_pack.php";

                }
                else if (Spldata[0] == 2) {
                  alert(Spldata[1]);
                  $('#sbtn_' + Selval).attr('lang', '');
                  $('#sbtn_' + Selval).html("");
                  $('#sbtn_' + Selval).html("<font color='green'>UnSubscribred</font>")

                  // location.href="user_pack.php";

                }

              }
            });

          }
          else {

            alert("Invalid details")
          }



        }






      });


      $("#package_list").on("click", ".subbtncls", function () {



        var UnSelval = $(this).attr('lang');

        if (UnSelval > 0) {
          $('#ldimg').show();
          $.ajax({
            type: "POST",
            url: "subscrib_admin_ajax.php",
            data: $("#frmsub").serialize() + "&mode=misssub&ids=" + UnSelval,
            dataType: 'HTML',
            success: function (data) {
              $('#ldimg').hide();
              var Spldata = data.split('#$#');
              //alert(data)
              if (Spldata[0] == 0) {
                alert("Session out");
                location.href = "logout.php";
              }
              else if (Spldata[0] == 1) {
                alert(Spldata[1]);
                location.href = "report.php";

              }
              else if (Spldata[0] == 2) {
                $("#sbtn_" + UnSelval).removeClass("subbtncls").addClass("btncls");
                $("#sbtn_" + UnSelval).html("UnSubscribe");

                //alert(Spldata[1]); 
                //location.href="user_pack.php";

              }

            }
          });

        }
        else {

          alert("Invalid details")
        }





      });


      /* $( ".actdeact" ).on( "click", function() { 
           var ids=$(this).attr('lang') ;
      
      
      $.ajax({
                      type: "POST",
                        url: "pakAddAjax.php",
                        data: $( "#myform" ).serialize()+"&id="+ids+"&mode=planActDeact",
                        success:function(data){
                          
                                   if(data)
                                   {
                                      alert("Changes made successfully");
      
                                   }
                                   else
                                   {
                                      alert("Try again");
                                   }
      
                                  location.href="package.php";
                       
                  }
                });
      
      
      }); */


    });
  </script>
  {include file="admin/footer.tpl"}