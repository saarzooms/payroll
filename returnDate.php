<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <title>Packing Wages</title>
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
							<h3>Packing Wages</h3>
						</div>
						<div class="pull-right">
						<button type="button" class="btn btn-primary" id="new"><em class="fa fa-plus"></em> Packing Wages</button>		
						
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
										<div class="col-md-3"></div>
										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $sdate; ?>  *</label>
                                              <input type="date" name="sdate" id="sdate" class="form-control" placeholder="<?= $sdate; ?>  *" required>
                                           </div>
                                        </div>
										<div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $edate; ?>  *</label>
                                              <input type="date" name="edate" id="edate" class="form-control" placeholder="<?= $edate; ?>  *" required>
                                           </div>
                                        </div>
										<div class="col-md-3"></div>
                                        </div>										
                                        <div class="col-md-12">
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $rate; ?> 1 </label>
                                              <input type="text" name="rate1" id="rate1" class="form-control" placeholder="Enter <?= $rate; ?>1" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $rate; ?> 2 </label>
                                              <input type="text" name="rate2" id="rate2" class="form-control" placeholder="Enter <?= $rate; ?>2" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $rate; ?> 3 </label>
                                              <input type="text" name="rate3" id="rate3" class="form-control" placeholder="Enter <?= $rate; ?>3" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $rate; ?> 4 </label>
                                              <input type="text" name="rate4" id="rate4" class="form-control" placeholder="Enter <?= $rate; ?>4" required>
                                           </div>
                                        </div>
                                        <div class="col-md-3">
                                           <div class="form-group">
                                              <label class="control-label"><?= $bonus; ?> *</label>
                                              <input type="text" name="bonus" id="bonus" class="form-control" placeholder="Enter <?= $bonus; ?>" required>	
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
										                     
          <div class="table-responsive" id="table_data1">
						  
	<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="50%">
        <thead>
            <tr>
				<th><center>Action</center></th>  
				<th><?= $sdate ?></th>  			
				<th><?= $edate ?></th>  			
				<th><?= $rate ?>1</th>  			
				<th><?= $rate ?>2</th>  			
				<th><?= $rate ?>3</th>  			
				<th><?= $rate ?>4</th>  			
				<th><?= $bonus ?></th>  			
				
				
            </tr>
        </thead>
       <tbody>
	<tr>
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
		
				<td>11/01/2014</td>
				<td>12/02/2018</td>	
				<td>10</td>	
				<td>5</td>		
				<td>6</td>
				<td>8</td>
				<td>11000</td>			
</tr>
<tr>			
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
				<td>21/01/2015</td>
				<td>12/02/2017</td>	
				<td>5</td>	
				<td>7</td>		
				<td>8</td>
				<td>9</td>
				<td>21000</td>			
		</tr>
<tr>			
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
				<td>30/01/2015</td>
				<td>21/02/2017</td>	
				<td>5</td>	
				<td>9</td>		
				<td>8</td>
				<td>10</td>
				<td>18000</td>			
		</tr>

</tbody>
			</table>
															
                           </div>
                
					
                           </div>
                        </div>
 </section>                          
       
	

   <?php include('footer.php');?>
   </div>
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
  <!-- <script src="app/js/demo/demo-datatable.js"></script> -->
</body>

</html>