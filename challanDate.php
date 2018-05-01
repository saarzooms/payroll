<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Challan Date Entry</title>
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
		 <input type="hidden" id="srno" value="0" />
   <div class="wrapper">
   <?php include('header.php');?>
   <!-- Main section-->
   <section>
    <div class="content-wrapper">
					<div class="clearfix">
						<div class="pull-left">
							<h3>Challan Date Entry</h3>
						</div>
						<div class="pull-right">
<!--						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> Employee</button>		
	-->					
						</div>
          </div>  
            <!-- START row-->
            <div class="row">
                 
                     <!-- START panel-->
						<div id="hide_show1">
                   
							  
							  
			
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
                                              <label class="control-label">TRRN</label>
                                              <input type="text" name="trrn" id="trrn" class="form-control" placeholder="TRRN  *" required>
                                           </div>
                                        </div>
										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">Wage Month </label>
                                              <input type="month" name="wagemonth" id="wagemonth" class="form-control" placeholder="" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">Due Date</label>
                                              <input type="date" name="duedate" id="duedate" class="form-control" placeholder="" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">Challan Date</label>
                                              <input type="date" name="challandate" id="challandate" class="form-control" placeholder="" required>
                                           </div>
                                        </div>
                                        </div>										
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">A/C 1 </label>
                                              <input type="text" name="ac1" id="ac1" class="form-control a_c" placeholder="Enter A/C 1" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">A/C 2 </label>
                                              <input type="text" name="ac2" id="ac2" class="form-control a_c" placeholder="Enter A/C 2" required>
											  
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">A/C 10 </label>
                                              <input type="text" name="ac10" id="ac10" class="form-control a_c" placeholder="Enter A/C 10" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">A/C 21 </label>
                                              <input type="text" name="ac21" id="ac21" class="form-control a_c" placeholder="Enter A/C 21" required>
                                           </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">A/C 22 </label>
                                              <input type="text" name="ac22" id="ac22" class="form-control a_c" placeholder="Enter A/C 22" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">Total Amount </label>
                                              <input type="text" name="totalamount" id="totalamount" class="form-control" placeholder="Enter Total Amount" disabled >
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">Return Date</label>
                                              <input type="date" name="returndate" id="returndate" class="form-control" placeholder="" required>	
											  </div>
                                        </div>
                                        </div>
                     	       <div class="col-md-12">
                                    <center> 
                                        <button type="submit" id="btn_insert" class="btn btn-primary button_change add_challan_date_entry">Add</button>													
                                       <!-- <button type="button" id="btn_update" class="btn btn-primary btn_update button_change" disabled>Update</button>	-->
\                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
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
				<th><center>S No.</center></th>
				<th>	TRRN</th>  			
				<th>	Wage Month</th>  			
				<th>	Due Date</th>  			
				<th>	Challan Date</th>  			
				<th>	A/C 1</th>  			
				<th>	A/C 2</th>  			
				<th>	A/C 10</th>  			
				<th>	A/C 21</th>  			
				<th>	A/C 22</th>  			
				<th>	Total Amount</th>  			
				<th>	Return Date</th>  			
				<th>Remove</th>  			
				</tr>
        </thead>
       <tbody class="challan_date_entry">
</tbody>
			</table>
															
                           </div>
                <div class="col-md-12">
                                    <center> 
                                        <button type="submit" id="btn_insert" class="btn btn-primary button_change ">Save</button>													
                                        <button type="button"  id="close" class="btn btn-primary btn_cancel button_change">Cancel</button>	
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
					
                           </div>
                        </div>
 </section>                          
       
	                   </div>                  
 				</form> 
 			</div>	
 </section>                          
                            
 
	

   <?php include('footer.php');?>
   </div>
   
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
   <script src="js/js/challandate_js.js"></script>   
</body>

</html>