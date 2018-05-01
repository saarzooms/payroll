<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Comapny</title>
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
							<h3>Comapny</h3>
						</div>
						<div class="pull-right">
						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> Comapny</button>		
						
						</div>
          </div>  
            <!-- START row-->
            <div class="row">
               <div class="col-md-12">
                  <form method="post" action="#" id="progress_form">
                     <!-- START panel-->
						<div id="hide_show">
                     <div class="panel panel-default" id="loanform">
                        <div class="panel-heading">
                           <div class="panel-title"></div>
                          	  <div class="panel-body">
                                	<div class="col-md-12">
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $estbId; ?> *</label>
                                              <input type="text" name="estbId" id="estbId" class="form-control" placeholder="Enter <?= $estbId; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $estaName; ?> *</label>
                                              <input type="text" name="estaName" id="estaName" class="form-control" placeholder="Enter <?= $estaName; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $estaType; ?> *</label>
                                              <select type="text" name="estaType" id="estaType" class="form-control" placeholder="Enter <?= $estaType; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>											  <option Disabled Selected>Select</option>
											  <option value="PROPRIETORY">PROPRIETORY </option>
											  <option value="FIRMS">FIRMS</option>
											  </select>

                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $underEpfo; ?> *</label>
                                              <input type="text" name="underEpfo" id="underEpfo" class="form-control" placeholder="Enter <?= $underEpfo; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $linNo; ?> *</label>
                                              <input type="text" name="linNo" id="linNo" class="form-control" placeholder="Enter <?= $linNo; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $address; ?> *</label>
                                              <textarea type="text" name="address" id="address" class="form-control" placeholder="Enter <?= $address; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required></textarea>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $postOffice; ?> *</label>
                                              <input type="text" name="postOffice" id="postOffice" class="form-control" placeholder="Enter <?= $postOffice; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $dist; ?> *</label>
                                              <input type="text" name="dist" id="dist" class="form-control" placeholder="Enter <?= $dist; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        </div>
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $pin; ?> *</label>
                                              <input type="text" name="pin" id="pin" class="form-control" placeholder="Enter <?= $pin; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $pan; ?> *</label>
                                              <input type="text" name="pan" id="pan" class="form-control" placeholder="Enter <?= $pan; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $tan; ?> *</label>
                                              <input type="text" name="tan" id="tan" class="form-control" placeholder="Enter <?= $tan; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $pTax; ?> *</label>
                                              <input type="text" name="pTax" id="pTax" class="form-control" placeholder="Enter <?= $pTax; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $primaryEmail; ?> *</label>
                                              <input type="text" name="primaryEmail" id="primaryEmail" class="form-control" placeholder="Enter <?= $primaryEmail; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $phone; ?> *</label>
                                              <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter <?= $phone; ?> * 	 				 												"oninvalid="this.setCustomValidity('please enter reported by')" onChange="this.setCustomValidity('')" required>
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
                     </div>                  
 				</form> 
 			</div>	
							<div class="panel-footer">
                           <div class="table-responsive" id="table_data">
															
                           </div>
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
</body>

</html>