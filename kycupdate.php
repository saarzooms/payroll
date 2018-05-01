<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>KYC Update</title>
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
							<h3>KYC Update</h3>
						</div>
						<div class="pull-right">
<!--						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> KYC Update</button>		
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
													<div class="col-md-4">
														<div class="form-group">
															<label class="control-label"><?= $empName;?> *</label>
    <select type="text" name="docType" id="docType" class="form-control" placeholder="Enter <?= $empName; ?> *" required> <option Disabled Selected>Select</option>
	 <option value="">employee1</option>
	 <option value="">employee2</option>
	 <option value="">employee3</option>
	 <option value="">employee4</option>
	 <option value="">employee5</option>
											  </select>
														</div>
													
													</div>
													<div class="col-md-4"></div>
													
												
</div>	

	<div class="kycdetail_div"></div>
	<div class="col-md-12">
												<div class="col-md-3">
														<div class="form-group">
															<label class="control-label"><?= $docType;?> *</label>
    <select type="text" name="docType" id="docType" class="form-control" placeholder="Enter <?= $docType; ?> *" required> <option Disabled Selected>Select</option>
	 <option value="Bank">Bank </option>
	 <option value="PAN">PAN</option>
	 <option value="Driving License">Driving License</option>
	 <option value="Election Card">Election Card</option>
	 <option value="Ration Card">Ration Card</option>
	 <option value="PAN">PAN</option>
	 <option value="National Population Register">National Population Register </option>
	 <option value="Aadhar Card">Aadhar Card</option>
											  </select>
														</div>
													</div>
													<div class="col-md-3">
													<div class="form-group">
														<label class="control-label"><?= $docNum; ?> *</label>
														<input type="text" name="docNum" id="docNum" class="docNum form-control" placeholder="Enter <?= $docNum; ?>*"   required>
													</div>
													</div>
													<div class="col-md-3">
													<div class="form-group">
														<label class="control-label"><?= $nameasDoc; ?> *</label>
														<input type="text" name="nameasDoc" id="nameasDoc" class="nameasDoc form-control" placeholder="Enter <?= $nameasDoc; ?>*"   required>
													</div>
													</div>
													<div class="col-md-2">
													<div class="form-group">
														<label class="control-label"><?= $ifsc; ?> *</label>
														<input type="text" name="ifsc" id="ifsc" class="ifsc form-control" placeholder="Enter <?= $ifsc; ?>*"   required>
													</div>
													</div>
												<div class="col-md-1" style="margin-top:25px;">
														<button type="button" class="add_kycdetail btn btn-primary" id="add_kycdetail" name="add_kycdetail"><em class="fa fa-plus"></em></button>
													</div>
												</div>
												</div>
												
											
											 <div class="col-md-12">
                                    <center> 
                                        <button type="submit" id="btn_insert" class="btn btn-primary button_change">Save</button>													
                                       <!-- <button type="button" id="btn_update" class="btn btn-primary btn_update button_change" disabled>Update</button>	-->
                                        <button type="button"  id="close" class="btn btn-primary btn_cancel button_change">Cancel</button>	
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
		
							  
                  			</div>
                        </div>    
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
  <!-- <script src="app/js/demo/demo-datatable.js"></script> -->
   
   
   
   
      <script src="js/js/employee_js.js"></script>   

</body>

</html>




					  
															
   