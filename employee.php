<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Employee</title>
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
							<h3>Employee</h3>
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
                   
							  
							  
			
  <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#personalinfo">Personal Info</a></li>
    <li><a data-toggle="tab" href="#kycdetail">KYC Detail</a></li> 
    <li><a data-toggle="tab" href="#nomineeFamily">Nominee  Details</a></li>
    <li><a data-toggle="tab" href="#Family">Family Members Details</a></li>
	</ul>
  <div class="panel panel-default" id="loanform">
                        <div class="panel-heading">
                           <div class="panel-title"></div>
                          	  <div class="panel-body">	
 <div class="tab-content" style="border:0;">
  <div id="personalinfo" class="tab-pane fade in active">
 
                      	<div class="col-md-12">
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $empName; ?> *</label>
                                              <input type="text" name="empName" id="empName" class="form-control" placeholder="Enter <?= $empName; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $dob; ?>  *</label>
                                              <input type="date" name="dob" id="dob" class="form-control" placeholder="<?= $dob; ?>  *" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $gender; ?> *</label>
                                              <select type="text" name="gender" id="gender" class="form-control" placeholder="Enter <?= $gender; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>											  <option Disabled Selected>Select</option>
											  <option value="Female">Female</option>
											  <option value="Male">Male</option>
											  </select>

                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $fhName; ?> *</label>
                                              <input type="text" name="fhName" id="fhName" class="form-control" placeholder="Enter <?= $fhName; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $relation; ?> *</label>
                                              <input type="text" name="relation" id="relation" class="form-control" placeholder="Enter <?= $relation; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $status; ?> *</label>
                                              <input type="text" name="status" id="status" class="form-control" placeholder="Enter <?= $status; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $mobile; ?> *</label>
                                              <input type="text" name="mobile" id="mobile" class="form-control" placeholder="Enter <?= $mobile; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
										                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $qualification; ?> *</label>
                                              <input type="text" name="qualification" id="qualification" class="form-control" placeholder="Enter <?= $qualification; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>

                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $doj; ?>  *</label>
                                              <input type="date" name="doj" id="doj" class="form-control" placeholder="<?= $doj; ?>  *" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $salary; ?> *</label>
                                              <input type="text" name="salary" id="salary" class="form-control" placeholder="Enter <?= $salary; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $typeEmp; ?> *</label>
                                              <input type="text" name="typeEmp" id="typeEmp" class="form-control" placeholder="Enter <?= $typeEmp; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $address; ?> 1 *</label>
                                              <textarea type="text" name="address1" id="address1" class="form-control" placeholder="Enter <?= $address; ?> 1 * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required></textarea>
                                           </div>
                                        </div>
										</div> 
										<div class="col-md-12">										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $address; ?> 2 *</label>
                                              <textarea type="text" name="address2" id="address2" class="form-control" placeholder="Enter <?= $address; ?> 2 * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required></textarea>
                                           </div>
                                        </div>         
										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $address; ?> 3 *</label>
                                              <textarea type="text" name="address3" id="address3" class="form-control" placeholder="Enter <?= $address; ?> 3 * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required></textarea>
                                           </div>
                                        </div> 
                                        </div>
						       <div class="col-md-12">
                                    <center> 
                                       
                                        <button type="button"  id="close" class="btn btn-primary btn_cancel button_change">Cancel</button>	
                                        <input type="hidden" id="hid_id" value=""/>
										<input type="hidden" id="hid_up" value="Add"/>
                                    </center>
                                </div>
								</div>	
		
 
 </div>
  <div id="kycdetail" class="tab-pane fade">
   							<div class="kycdetail_div">
							</div>
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
  <div id="nomineeFamily" class="tab-pane fade">
  						<div class="nomineefamily_div"></div>
												<div class="col-md-12">
													<div class="col-md-3">
														<div class="form-group">
														<label class="control-label"><?= $name; ?> *</label>
														<input type="text" name="name" id="name" class="name form-control" placeholder="Enter <?= $name; ?>*"   required>
														</div>
													</div>
													<div class="col-md-3">
													<div class="form-group">
                                              <label class="control-label"><?= $address; ?> 1 *</label>
                                              <textarea type="text" name="address1" id="address1" class="form-control" placeholder="Enter <?= $address; ?> 1" required></textarea>
													</div>
													</div>
													<div class="col-md-3">
													<div class="form-group">
                                              <label class="control-label"><?= $address; ?> 2 *</label>
                                              <textarea type="text" name="address2" id="address2" class="form-control" placeholder="Enter <?= $address; ?> 2 *" required></textarea>
													</div>
													</div>
													<div class="col-md-3">
													<div class="form-group">
                                              <label class="control-label"><?= $address; ?> 3 *</label>
                                              <textarea type="text" name="address3" id="address3" class="form-control" placeholder="Enter <?= $address; ?> 3 *" required></textarea>
													</div>
													</div>
													<div class="col-md-3">
													<div class="form-group">
                                              <label class="control-label"><?= $address; ?> 4 *</label>
                                              <textarea type="text" name="address4" id="address4" class="form-control" placeholder="Enter <?= $address; ?> 4 *" required></textarea>
													</div>
													</div>
												<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $dob; ?>  *</label>
                                              <input type="date" name="dob" id="dob" class="form-control" placeholder="<?= $dob; ?>  *" required>
                                           </div>
                                        </div>
										<div class="col-md-3">
													<div class="form-group">
														<label class="control-label"><?= $share; ?> *</label>
														<input type="text" name="share" id="share" class="share form-control" placeholder="Enter <?= $share; ?>*"   required>
													</div>
													</div>
										<div class="col-md-2">
													</div>
												<div class="col-md-1" style="margin-top:25px;">
														<button type="button" class="add_nominee btn btn-primary" id="add_nominee" name="add_nominee"><em class="fa fa-plus"></em></button>
													</div>
												</div>
											



											
 </div>
   <div id="Family" class="tab-pane fade">
  						<div class="family_div"></div>
												<div class="col-md-12">
													<div class="col-md-3">
														<div class="form-group">
														<label class="control-label"><?= $name; ?> *</label>
														<input type="text" name="name" id="name" class="name form-control" placeholder="Enter <?= $name; ?>*"   required>
														</div>
													</div>
												<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $dob; ?>  *</label>
                                              <input type="date" name="dob" id="dob" class="form-control" placeholder="<?= $dob; ?>  *" required>
                                           </div>
                                        </div>
										<div class="col-md-3">
													<div class="form-group">
														<label class="control-label"><?= $relation; ?> *</label>
														<input type="text" name="relation" id="relation" class="relation form-control" placeholder="Enter <?= $relation; ?>*"   required>
													</div>
													</div>
										<div class="col-md-2">
													</div>
												<div class="col-md-1" style="margin-top:25px;">
														<button type="button" class="add_family btn btn-primary" id="add_family" name="add_family"><em class="fa fa-plus"></em></button>
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
					  
							  
        					</div>
                        </div>    
                     </div>                  
 				</form> 
 			</div>	
 </section>                          
                            
 
	

   <?php include('footer.php');?>
   </div>
   
<script>
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



   <script src="js/js/employee_js.js"></script>   
</body>

</html>