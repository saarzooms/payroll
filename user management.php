<!DOCTYPE html>
<html lang="en">
<?php
$title = "User Management";
?>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title><?php if(isset($title)){ echo $title; } ?></title>
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
							<h3><?php if(isset($title)){ echo $title; } ?></h3>
						</div>
						<div class="pull-right">
						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> <?php if(isset($title)){ echo $title; } ?></button>		
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
                                              <label class="control-label">User Name</label>
                                              <input type="text" name="username" id="username" class="form-control" placeholder="Enter User Name" >

                                           </div>

										</div>
                                        <div class="col-md-3">
	                                           <div class="form-group">
                                              <label class="control-label">User Id</label>
                                              <input type="text" name="userid" id="userid" class="form-control" placeholder="Enter User Id" >

                                           </div>

										</div>
                                        <div class="col-md-3">
	                                           <div class="form-group">
                                              <label class="control-label">Password</label>
                                              <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password" >

                                           </div>

										</div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">Designation</label>
                                              <select name="designation" id="designation" class="form-control"  required>
											<option id="owner">Owner</option>
											<option id="dentry">Data entry operator</option>
											</select>
										   </div>
                                        </div>

                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label">DSC Expiredate</label>
                                              <input type="date" name="dscdate" id="dscdate" class="form-control" placeholder=""  required>
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
                           <div class="table-responsive" id="table_data1">
						   
						   				  
	<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="50%">
        <thead>
            <tr>
				<th>User Name</th>  			
				<th>User Id</th>  			
				<th>Password</th>  			
				<th>Designation</th>  			
				<th>Dsc Expire date</th>  			
				<th><center>Action</center></th>  
            </tr>
        </thead>
       <tbody>
	<tr>
				<td>Rahul Chauhan</td>
				<td>123654</td>
				<td>456456</td>
				<td>Owner</td>
				<td>21/01/2018</td>
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
		
</tr>
<tr>			
				<td>Anil Makwana</td>
				<td>123654</td>
				<td>456456</td>
				<td>Owner</td>
				<td>11/01/2018</td>
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
		
		</tr>
<tr>			
				<td>Abhi Dharajiya</td>
				<td>123654</td>
				<td>456456</td>
				<td>Owner</td>
				<td>18/01/2018</td>
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
		</tr>

</tbody>
			</table>
															
               
															
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
   <script src="app/js/demo/demo-datatable.js"></script> 
   <script src="js/progress.js"></script>   
</body>

</html>