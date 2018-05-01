<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Bidi Roller Entry</title>
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

<body>

   <div class="wrapper">
   <?php include('header.php');?>
   <!-- Main section-->
   <section>
    <div class="content-wrapper">
					<div class="clearfix">
						<div class="pull-left">
							<h3>Bidi Roller Entry</h3>
						</div>
						<div class="pull-right">
<!--						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> Bidi Roller</button>		
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
										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">Month and Year</label>
                                              <input type="month" name="monthyear" id="monthyear" class="form-control" placeholder="Month and Year" required>
                                           </div>
                                        </div>
										
										<div class="col-md-3">
										
										<div class="form-group">
															<label class="control-label">Contractor</label>
    <select type="text" name="docType" id="docType" class="form-control" placeholder="Select Contractor *" required> <option Disabled Selected>Select</option>
	 <option value="">Contractor1</option>
	 <option value="">Contractor2</option>
	 <option value="">Contractor3</option>
	 <option value="">Contractor4</option>
	 <option value="">Contractor5</option>
											  </select>
														</div>
														</div>
										<div class="col-md-4">
                                        </div>
										
										
										      <div class="col-md-2">
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
 				<th style="width:15%;">No. of days worked/UNIT worked</th>  			
				<th style="width:15%;">Leave with Pay</th>  			
				<th style="width:15%;">Wages</th>  			
				<th>Bonus</th>  			
				<th>Total</th>  			
				<th>PF</th>  			
				<th>Net Wages</th>  					
            </tr>
        </thead>	
       <tbody>
				<tr>

				
				<td>1</td>
				<td>	RAM KUMAR</td>
				<td>	1111111111</td>
				<td><input type="text" id="" value="30" style="width:50%;" /></td>
				<td><input type="text" id="" value="30" style="width:50%;" /> </td>
				<td><input type="text" id="" value="30" style="width:50%;" /></td>
				<td>   	 2,760.00 	</td>
				<td> 598.00</td>
				<td> 	 3,358.00</td>
				<td> 	 276.00</td>
				<td> 	 3,082.00</td>
				
				
				</tr><tr>
				
				
				<td> 
2</td>
				<td>	Shyam Mahato	</td>
				<td>1111111112</td>
				<td><input type="text" id="" value="30" style="width:50%;" /></td>
				<td><input type="text" id="" value="30" style="width:50%;" />  </td>
				<td><input type="text" id="" value="30" style="width:50%;" /> </td>
				<td> 	 2,520.00</td>
				<td> 	 520.00 </td>
				<td>	 3,040.00</td>
				<td> 	 252.00 	</td>
				<td> 2,788.00 </td>
				
				</tr><tr>
				
				
				<td>
3</td>
				<td>	Mathur Mahato</td>
				<td>	1111111113</td>
				<td><input type="text" id="" value="30" style="width:50%;" /></td>
				<td><input type="text" id="" value="30" style="width:50%;" /></td>
				<td><input type="text" id="" value="30" style="width:50%;" /></td>
				<td> 	 2,880.00 	</td>
				<td> 572.00 	</td>
				<td> 3,452.00</td>
				<td> 	 288.00 </td>
				<td>	 3,164.00 </td>
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
  <script>
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