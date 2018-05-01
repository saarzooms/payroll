<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Packers Entry</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="vendor/animate.css/animate.min.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="vendor/whirl/dist/whirl.css">
   <!-- DATATABLES-->
   <link rel="stylesheet" href="vendor/datatables-colvis/css/dataTables.colVis.css">
   <link rel="stylesheet" href="vendor/datatables/media/css/dataTables.bootstrap.css">
   <link rel="stylesheet" href="vendor/dataTables.fontAwesome/index.css">
   <!-- =============== PAGE VENDOR STYLES ===============-->
   <!-- WEATHER ICONS-->
   <link rel="stylesheet" href="vendor/weather-icons/css/weather-icons.min.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="app/css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="app/css/app.css" id="maincss">
   <!-- =============== Toast Message ===============-->
   <link rel="stylesheet" href="toastmessage/css/jquery.toastmessage.css" id="maincss">
   
   <style>
   .sub_panel_heading {width:100%; height:auto; float:left; border:1px solid #cfdbe2; border-top-width:3px; padding:25px 25px 10px 25px; margin-top:15px; border-radius:4px;}
   .button_change {margin-top:26px;}
   .add_btn {float:right;}
   
   .input-sm{
	   resize:none;
   }
   </style>
</head>
<script>
</script>
<body>
   <div class="wrapper">
   <?php include('header.php');?>
   <!-- Main section-->
   <section>
    <div class="content-wrapper">
					<div class="clearfix">
						<div class="pull-left">
							<h3>Packers Entry</h3>
						</div>
						<div class="pull-right">
<!--						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> Office Staff</button>		
	-->					
						</div>
          </div>  
            <!-- START row-->
            <div class="row">
               <div class="col-md-12">
                  <form method="post" action="#" id="progress_form">
                     <!-- START panel-->
						<div id="hide_show1">
                     <div class="panel panel-default" id="loanform">
                        <div class="panel-heading">
                           <div class="panel-title"></div>
                          	  <div class="panel-body">
                                	<div class="col-md-12">
                                        <div class="col-md-12">
										<div class="col-md-4"></div>
										<div class="col-md-3">
                                    <center> 
                                           <div class="form-group">
                                              <label class="control-label">Month and Year</label>
                                              <input type="month" name="monthyear" id="monthyear" class="form-control" placeholder="Month and Year" required>
                                           </div>
                                    </center> 
                                        </div>
										      <div class="col-md-1">
                                    <center> 
                                        <button type="submit" id="btn_insert" class="btn btn-primary button_change">Search</button>													
                                       <!-- <button type="button" id="btn_update" class="btn btn-primary btn_update button_change" disabled>Update</button>	-->
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
						
										<div class="col-md-4"></div>
                     	 		</div>	
							</div>
                        </div>    
                     </div>                  
 				</form> 
				
 			</div>	
<div class="panel-footer">
                           <div class="table-responsive" id="table_data1">
										                     
          <div class="table-responsive" id="table_data1">
				
	<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="50%">
        <thead>
            <tr>
				<th>Emp No.</th>  			
				<th>Name</th>  			
				<th>UAN	</th>  			
 				<th style="width:100%;" >No. of days worked </th>  			
				<th style="width:100%;">UNIT-1</th>  			
				<th style="width:100%;">UNIT-2</th>  			
				<th style="width:100%;">UNIT-3</th>  			
				<th style="width:100%;">UNIT-4</th>  			
				<th>Rate1</th>  			
				<th>Rate2</th>  			
				<th>Rate3</th>  			
				<th>Rate4</th>  		
				<th style="width:100%;">Additional Paid Wages</th>  			
				<th>Weekly Leave</th>  			
				<th>Total</th>  			
				<th>PF</th>  			
				<th>PT</th>  			
				<th>Net Wages</th>  					
            </tr>
        </thead>
       <tbody>
				<tr>

				
				<td>1</td>
				<td>	RAM KUMAR</td>
				<td>	1111111111</td>
				<td><input type="text" id="" value="30" style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="3"  style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="21" style="width:50px;" /></td>
				<td> 	120</td>
				<td>	180</td>
				<td>	130</td>
				<td>	80</td>
				<td><input type="text" id="" value="100" style="width:50px;" /></td>
				<td>   	 6,840.00</td>
				<td> 	 1,140.00</td>
				<td> 	 7,980.00</td>
				<td> 	 798.00</td>
				<td> 	 -  </td>
				<td>  	 7,180.00</td>

				</tr>
				<tr>



				<td> 
2</td>
				<td>	Shyam Mahato</td>
				<td>	1111111112</td>
				<td><input type="text" id="" value="30" style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="3"  style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="21" style="width:50px;" /></td>
				<td> 	120</td>
				<td>	180</td>
				<td>	130</td>
				<td>	80	</td>
				<td><input type="text" id="" value="100" style="width:50px;" /></td>
				<td> 	 10,400.00</td>
				<td> 	 1,733.33 </td>
				<td>	 12,133.00 </td>
				<td>	 1,213.00 </td>
				<td>	 110.00 	</td>
				<td> 10,920.00</td>

				</tr>
				<tr>



				<td> 
3</td>
				<td>	Mathur Mahato</td>
				<td>	1111111113</td>
				<td><input type="text" id="" value="30" style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="3"  style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="21" style="width:50px;" /></td>
				<td>	120</td>
				<td>	180</td>
				<td>	130</td>
				<td>	80	</td>
				<td><input type="text" id="" value="100" style="width:50px;" /></td>
				<td> 	 11,520.00</td>
				<td> 	 1,920.00</td>
				<td> 	 13,440.00</td>
				<td> 	 1,344.00</td>
				<td> 	 110.00 	</td>
				<td> 12,100.00</td>


				</tr>
				<tr>

				
				<td> 
4	</td>
				<td>Jitendra Majhi	</td>
				<td>1111111114</td>
				<td><input type="text" id="" value="30" style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="3"  style="width:50px;" /></td>
				<td><input type="text" id="" value="23" style="width:50px;" /></td>
				<td><input type="text" id="" value="21" style="width:50px;" /></td>
				<td>120</td>
				<td>	180</td>
				<td>	130</td>
				<td>	80</td>
				<td><input type="text" id="" value="100" style="width:50px;" /></td>
				<td>   	 12,750.00</td>
				<td> 	 2,125.00 </td>
				<td>	 14,875.00 </td>
				<td>	 1,488.00</td>
				<td> 	 110.00</td>
				<td> 	 13,390.00</td>
				 

				
				</tr>
				
				
</tbody>
			</table>
															
                           </div>
                <div class="col-md-12">
                                    <center> 
                                        <button type="submit" id="btn_insert" class="btn btn-primary button_change">Save</button>													
                                       <!-- <button type="button" id="btn_update" class="btn btn-primary btn_update button_change" disabled>Update</button>	-->
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
					
					
                           </div>
                        </div>
 </section>                          
       
	

   <?php include('footer.php');?>
   </div>
   <script>
   $("#monthyear").datepicker( {
    format: "mm/yyyy",
    startView: "year", 
    minView: "year"
});

 var table = $('#example').DataTable( {
	scrollX: true,
	pageLength: 10,
	 fixedHeader: true,
        lengthChange: false,
		order: [[ 0, "asc" ]],
       // buttons: [ 'copy', 'excel', 'pdf', 'colvis' ]
    } );
    // table.buttons().container()
        // .appendTo( '#example_wrapper .col-sm-6:eq(0)' );
	
 /*  $('#example thead th').each( function () {
        var title = $(this).text();
        $(this).html( '<label>'+title+'</label><br><input type="text" placeholder="Search '+title+'" />' );
    } );  */
 
    // DataTable
    var table = $('#example').DataTable();
 
    // Apply the search
    table.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change', function () {
            if ( that.search() !== this.value ) {
                that
                    .search( this.value )
                    .draw();
            }
        } );
    } );
	
	
</script>
 
   <!-- =============== VENDOR SCRIPTS ===============-->
   <!-- MODERNIZR-->
   <script src="vendor/modernizr/modernizr.custom.js"></script>
   <!-- MATCHMEDIA POLYFILL-->
   <script src="vendor/matchMedia/matchMedia.js"></script>
   <!-- JQUERY-->
   <script src="vendor/jquery/dist/jquery.js"></script>
   <!-- BOOTSTRAP-->
   <script src="vendor/bootstrap/dist/js/bootstrap.js"></script>
   <!-- STORAGE API-->
   <script src="vendor/jQuery-Storage-API/jquery.storageapi.js"></script>
   <!-- JQUERY EASING-->
   <script src="vendor/jquery.easing/js/jquery.easing.js"></script>
   <!-- ANIMO-->
   <script src="../vendor/animo.js/animo.js"></script>
   <!-- SLIMSCROLL-->
   <script src="vendor/slimScroll/jquery.slimscroll.min.js"></script>
   <!-- SCREENFULL-->
   <script src="vendor/screenfull/dist/screenfull.js"></script>
   <!-- LOCALIZE-->
   <script src="vendor/jquery-localize-i18n/dist/jquery.localize.js"></script>
   <!-- RTL demo-->
   <script src="app/js/demo/demo-rtl.js"></script>
    <!-- =============== Toast Message ===============-->
 <script type="text/javascript" src="toastmessage/javascript/jquery.toastmessage.js"></script>
 
   <!-- =============== APP SCRIPTS ===============-->
   <script src="app/js/app.js"></script>
   <script type="text/javascript" src="app/js/AjaxFileUpload.js"></script>
<!-- DATATABLES-->
   <script src="vendor/datatables/media/js/jquery.dataTables.min.js"></script>
   <script src="vendor/datatables-colvis/js/dataTables.colVis.js"></script>
   <script src="vendor/datatables/media/js/dataTables.bootstrap.js"></script>
   <script src="vendor/datatables-buttons/js/dataTables.buttons.js"></script>
   <script src="vendor/datatables-buttons/js/buttons.bootstrap.js"></script>
   <script src="vendor/datatables-buttons/js/buttons.colVis.js"></script>
   <script src="vendor/datatables-buttons/js/buttons.flash.js"></script>
   <script src="vendor/datatables-buttons/js/buttons.html5.js"></script>
   <script src="vendor/datatables-buttons/js/buttons.print.js"></script>
   <script src="vendor/datatables-responsive/js/dataTables.responsive.js"></script>
   <script src="vendor/datatables-responsive/js/responsive.bootstrap.js"></script>
   <script src="app/js/demo/demo-datatable.js"></script> 
   <script src="js/progress.js"></script>   
</body>

</html>