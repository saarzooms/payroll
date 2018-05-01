<?php

include('../db/connection.php');
include('../label.php');
if(isset($_REQUEST['upd']) && isset($_REQUEST['edt']) && isset($_REQUEST['date']) && isset($_REQUEST['report']) && isset($_REQUEST['cumulativeprogress']) && isset($_REQUEST['todayissue'])&& isset($_REQUEST['futureissue']) && isset($_REQUEST['tomorrowplan']) && isset($_REQUEST['progressdate'])
	&& isset($_REQUEST['activitydeployed']) && isset($_REQUEST['coreactivity']) && isset($_REQUEST['saf_inc'])
&& isset($_REQUEST['affectedperson']) && isset($_REQUEST['name']) && isset($_REQUEST['dayslost'])
&& isset($_REQUEST['photoscene']) && isset($_REQUEST['severitylevel']) && isset($_REQUEST['dateofaccident'])
&& isset($_REQUEST['reason']) && isset($_REQUEST['correctivemeasures']) && isset($_REQUEST['preventionmeasures'])
&& isset($_REQUEST['correctivedate']) && isset($_REQUEST['preventivedate']) && isset($_REQUEST['correctiveconfirmation'])
&& isset($_REQUEST['preventionconfirmation']) && isset($_REQUEST['accidentreportmade']) && isset($_REQUEST['accidentreportapprove'])
)
{
	$upd = $_REQUEST['upd'];
	$edt = $_REQUEST['edt'];
	//echo $edt;
	$date = $_REQUEST['date'];
	$report = $_REQUEST['report'];
	$cumulativeprogress = $_REQUEST['cumulativeprogress'];
	$todayissue = $_REQUEST['todayissue'];
	$futureissue = $_REQUEST['futureissue'];
	$tomorrowplan = $_REQUEST['tomorrowplan'];
	$progressdate = $_REQUEST['progressdate'];
	$activitydeployed = $_REQUEST['activitydeployed'];
	$coreactivity = $_REQUEST['coreactivity'];
	$saf_inc = $_REQUEST['saf_inc'];
	
	
	$affectedperson = $_REQUEST['affectedperson'];
	$name = $_REQUEST['name'];
	$dayslost = $_REQUEST['dayslost'];
	$photoscene = $_REQUEST['photoscene'];
	$photoscene = substr($photoscene,0,-1);
	$severitylevel = $_REQUEST['severitylevel'];
	$dateofaccident = $_REQUEST['dateofaccident'];
	$reason = $_REQUEST['reason'];
	$correctivemeasures = $_REQUEST['correctivemeasures'];
	$preventionmeasures = $_REQUEST['preventionmeasures'];
	$correctivedate = $_REQUEST['correctivedate'];
	$preventivedate = $_REQUEST['preventivedate'];
	$correctiveconfirmation = $_REQUEST['correctiveconfirmation'];
	$preventionconfirmation = $_REQUEST['preventionconfirmation'];
	$accidentreportmade = $_REQUEST['accidentreportmade'];
	$accidentreportapprove = $_REQUEST['accidentreportapprove'];
	
	try{
	if($edt == 'Add'){
		$sql = "INSERT INTO progress_report(date,report_by,cumulative_progress,today_issue,future_issue,tomorrow_plan,progress_date,activity_deployed,coreactivity_progress,safety_incidents,affected_person,name,days_lost,photo_scene,severity_level,dateof_accident,reason,corrective_measures,prevention_measures,corrective_date,preventive_date,corrective_confirmation,prevention_confirmation,accident_report_made,accident_report_approve) VALUES 		
		('$date','$report','$cumulativeprogress','$todayissue','$futureissue','$tomorrowplan','$progressdate','$activitydeployed','$coreactivity','$saf_inc','$affectedperson','$name','$dayslost','$photoscene','$severitylevel','$dateofaccident','$reason','$correctivemeasures','$preventionmeasures','$correctivedate','$preventivedate','$correctiveconfirmation','$preventionconfirmation','$accidentreportmade','$accidentreportapprove')";
		if($dbh->query($sql)){
			echo 'Data Save Successfully !!!';
		}
	}
		else{
		$sql = "UPDATE progress_report SET date='$date',report_by='$report',cumulative_progress='$cumulativeprogress',
		today_issue='$todayissue',future_issue='$futureissue',tomorrow_plan='$tomorrowplan',progress_date='$progressdate',activity_deployed='$activitydeployed',
		coreactivity_progress='$coreactivity',safety_incidents='$saf_inc',affected_person='$affectedperson'
,name='$name',days_lost='$dayslost',
		photo_scene='$photoscene',severity_level='$severitylevel',dateof_accident='$dateofaccident',reason='$reason',corrective_measures='$correctivemeasures',
		prevention_measures='$preventionmeasures',corrective_date='$correctivedate',preventive_date='$preventivedate',
				corrective_confirmation='$correctiveconfirmation',prevention_confirmation='$preventionconfirmation',accident_report_made='$accidentreportmade',accident_report_approve='$accidentreportapprove'

		WHERE id = '$upd'";
		file_put_contents('./log_'.date("j.n.Y").'.txt', $sql, FILE_APPEND);
		if($dbh->query($sql)){
			echo 'Data Update Successfully !!!';
							}
		
		}
	}
	catch (customException $e) {

 		 echo $e;
	}
}
// edit 
	
else if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		
		try{
		$sql = "SELECT * from progress_report WHERE id = '$id'";
		$result = array();
				$date='';
				$report_by='';
				$cumulative_progress='';
				$today_issue='';
				$future_issue='';
				$tomorrow_plan='';
				$progress_date='';
				$activity_deployed='';
				$coreactivity_progress='';
				$safety_incidents='';
				
				$affected_person='';
				$name='';
				$days_lost='';
				$photo_scene='';
				$severity_level='';
				$dateof_accident='';
				$reason='';
				$corrective_measures='';
				$prevention_measures='';
				$corrective_date='';
				$preventive_date='';
				$corrective_confirmation='';
				$prevention_confirmation='';
				$accident_report_made='';
				$accident_report_approve='';
				
		foreach ($dbh->query($sql) as $row2)
			{
				$date=$row2['date'];
				$report_by=$row2['report_by'];
				$cumulative_progress=$row2['cumulative_progress'];
				$today_issue=$row2['today_issue'];
				$future_issue=$row2['future_issue'];
				$tomorrow_plan=$row2['tomorrow_plan'];
				$progress_date=$row2['progress_date'];
				$activity_deployed=$row2['activity_deployed'];
				$coreactivity_progress=$row2['coreactivity_progress'];
				$safety_incidents=$row2['safety_incidents'];
				
				$affected_person=$row2['affected_person'];
				$name=$row2['name'];
				$days_lost=$row2['days_lost'];
				$photo_scene=$row2['photo_scene'];
				$severity_level=$row2['severity_level'];
				$dateof_accident=$row2['dateof_accident'];
				$reason=$row2['reason'];
				$corrective_measures=$row2['corrective_measures'];
				$prevention_measures=$row2['prevention_measures'];
				$corrective_date=$row2['corrective_date'];
				$preventive_date=$row2['preventive_date'];
				$corrective_confirmation=$row2['corrective_confirmation'];
				$prevention_confirmation=$row2['prevention_confirmation'];
				$accident_report_made=$row2['accident_report_made'];
				$accident_report_approve=$row2['accident_report_approve'];
		}
    array_push($result,$date,$report_by,$cumulative_progress,$today_issue,$future_issue,$tomorrow_plan,$progress_date,$activity_deployed,$coreactivity_progress,$safety_incidents,$affected_person,$name,$days_lost,$photo_scene,$severity_level,$dateof_accident,$reason,$corrective_measures,$prevention_measures,$corrective_date,$preventive_date,$corrective_confirmation,$prevention_confirmation,$accident_report_made,$accident_report_approve);
	echo json_encode($result);
		
		}
		catch (customException $e) {

 		 echo $e;
	}

	}

/*
//update
else if(isset($_REQUEST['upd']) && isset($_REQUEST['date']) && isset($_REQUEST['report']) && isset($_REQUEST['cumulativeprogress']) && isset($_REQUEST['todayissue'])&& isset($_REQUEST['futureissue']) && isset($_REQUEST['tomorrowplan']) && isset($_REQUEST['progressdate'])
	&& isset($_REQUEST['activitydeployed']) && isset($_REQUEST['coreactivity']) && isset($_REQUEST['saf_inc'])
&& isset($_REQUEST['affectedperson']) && isset($_REQUEST['name']) && isset($_REQUEST['dayslost'])
&& isset($_REQUEST['photoscene']) && isset($_REQUEST['severitylevel']) && isset($_REQUEST['dateofaccident'])
&& isset($_REQUEST['reason']) && isset($_REQUEST['correctivemeasures']) && isset($_REQUEST['preventionmeasures'])
&& isset($_REQUEST['correctivedate']) && isset($_REQUEST['preventivedate']) && isset($_REQUEST['correctiveconfirmation'])
&& isset($_REQUEST['preventionconfirmation']) && isset($_REQUEST['accidentreportmade']) && isset($_REQUEST['accidentreportapprove'])){
	
	
	$upd = $_REQUEST['upd'];
	$date = $_REQUEST['date'];
	$report = $_REQUEST['report'];
	$cumulativeprogress = $_REQUEST['cumulativeprogress'];
	$todayissue = $_REQUEST['todayissue'];
	$futureissue = $_REQUEST['futureissue'];
	$tomorrowplan = $_REQUEST['tomorrowplan'];
	$progressdate = $_REQUEST['progressdate'];
	$activitydeployed = $_REQUEST['activitydeployed'];
	$coreactivity = $_REQUEST['coreactivity'];
	$saf_inc = $_REQUEST['saf_inc'];
	
	
	$affectedperson = $_REQUEST['affectedperson'];
	$name = $_REQUEST['name'];
	$dayslost = $_REQUEST['dayslost'];
	$photoscene = $_REQUEST['photoscene'];
	$photoscene = substr($photoscene,0,-1);
	$severitylevel = $_REQUEST['severitylevel'];
	$dateofaccident = $_REQUEST['dateofaccident'];
	$reason = $_REQUEST['reason'];
	$correctivemeasures = $_REQUEST['correctivemeasures'];
	$preventionmeasures = $_REQUEST['preventionmeasures'];
	$correctivedate = $_REQUEST['correctivedate'];
	$preventivedate = $_REQUEST['preventivedate'];
	$correctiveconfirmation = $_REQUEST['correctiveconfirmation'];
	$preventionconfirmation = $_REQUEST['preventionconfirmation'];
	$accidentreportmade = $_REQUEST['accidentreportmade'];
	$accidentreportapprove = $_REQUEST['accidentreportapprove'];
	
		try{
		$sql = "UPDATE progress_report SET date='$date',report_by='$report',cumulative_progress='$cumulativeprogress',
		today_issue='$todayissue',future_issue='$futureissue',tomorrow_plan='$tomorrowplan',progress_date='$progressdate',activity_deployed='$activitydeployed',
		coreactivity_progress='$coreactivity',safety_incidents='$saf_inc',affected_person='$affectedperson'
,name='$name',days_lost='$dayslost',
		photo_scene='$photoscene',severity_level='$severitylevel',dateof_accident='$dateofaccident',reason='$reason',corrective_measures='$correctivemeasures',
		prevention_measures='$preventionmeasures',corrective_date='$correctivedate',preventive_date='$preventivedate',
				corrective_confirmation='$correctiveconfirmation',prevention_confirmation='$preventionconfirmation',accident_report_made='$accidentreportmade',accident_report_approve='$accidentreportapprove'

		WHERE id = '$upd'";
		file_put_contents('./log_'.date("j.n.Y").'.txt', $sql, FILE_APPEND);
		if($dbh->query($sql)){
			echo 'Data Update Successfully !!!';
							}
			}
				catch (customException $e) {

 		 echo $e;
	}
		
		
	}	
	*/
//delete photo file
 else if(isset($_REQUEST['photo_filenm']))
{
	$po_file=$_REQUEST['photo_filenm'];
	$file_to_delete = '../images/progress/'.$po_file;
	if (unlink($file_to_delete))
	{
		echo 1;	
	}
	else
	{
		echo 0;
	}
	
}	
//delete
else if(isset($_REQUEST['del'])){
$del = $_REQUEST['del'];
		try{
		$sql = "DELETE FROM progress_report WHERE id = $del" ;
		if($dbh->query($sql)){
			echo 'Data Delete Successfully';
		}
		}
		catch (customException $e) {

 		 echo $e;
	}
		
}

// load table 
else if(isset($_REQUEST['all'])){
		
	?>
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
	<table id="example" class="table table-striped table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
				<th><center>Action</center></th>  
				<th><?= $estbId ?></th>  			
				<th><?= $estaName ?></th>  			
				<th><?= $estaType ?></th>  			
				<th><?= $underEpfo ?></th>  			
				<th><?= $linNo ?></th>  			
				<th><?= $address ?></th>  			
				<th><?= $postOffice ?></th>  			
				<th><?= $dist ?></th>  			
				<th><?= $pin ?></th>  			
				<th><?= $pan ?></th>  			
				<th><?= $tan ?></th>  			
				<th><?= $pTax ?></th>  			
				<th><?= $primaryEmail ?></th>  			
				
				
            </tr>
        </thead>
       <tbody>
	<tr>
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
		
				<td></td>
				<td></td>	
				<td></td>	
				<td></td>		
				<td></td>
				<td></td>
				<td></td>			
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>
				<td></td>  			
</tr>
<tr>			
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>		
		</tr>
<tr>			
		<td><center><button class="btn_up btn btn-xs btn-danger user_edit" value="" >
			<i class="fa fa-edit"></i></button>
		<button  class=" btn btn-xs btn-danger user_delete"   value="" >
			<i class="fa fa-trash"></i></button>
		</center></td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>
			<td>-</td>		
		</tr>

</tbody>
			</table>
	<?php
			
	}	

?>
