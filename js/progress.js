$(document).ready(function() {
		$("#hide_show").hide();
		
				

		
		$(document).on('click','#new',function(){
			$("#hide_show").show();
			$("#new").hide();
			$("#close").show();
		});
		$(document).on('click','#close',function(){
			$("#hide_show").hide();
			$("#new").show();
			$("#photo_msg").html('');
			clear();
		});
	loadtable();	
	

	$(document).on("change","#saf_inc",function(e)
	{
		e.preventDefault();
		var y = $('input[name=saf_inc]:checked').val();
		if(y=='Yes')
		{
			$("#safety_incidents").show();
		}
		else
		{
			$("#safety_incidents").hide();
			    document.getElementById("affectedperson").required = false;
				document.getElementById("name").required = false;
				document.getElementById("dayslost").required = false;
				//document.getElementById("photoscene").required = false;
				document.getElementById("severitylevel").required = false;
				document.getElementById("dateofaccident").required = false;
				document.getElementById("reason").required = false;
				document.getElementById("correctivemeasures").required = false;
				document.getElementById("preventionmeasures").required = false;
				document.getElementById("correctivedate").required = false;
				document.getElementById("preventivedate").required = false;
				document.getElementById("correctiveconfirmation").required = false;
				document.getElementById("preventionconfirmation").required = false;
				document.getElementById("accidentreportmade").required = false;
				document.getElementById("accidentreportapprove").required = false;

		}
	});
		
		 $(document).on('submit', '#progress_form', function(e){	

				e.preventDefault();//prevent auto submit data
				var upd = $("#hid_id").val();
				var edt = $("#hid_up").val();
				alert(edt);
				
				var date = $("#date").val();
				var report = $("#report").val();
				var cumulativeprogress = $("#cumulativeprogress").val();
				var todayissue = $("#todayissue").val();
				var futureissue = $("#futureissue").val();
				var tomorrowplan = $("#tomorrowplan").val();
				var progressdate = $("#progressdate").val();
				var activitydeployed = $("#activitydeployed").val();
				var coreactivity = $("#coreactivity").val();
				
				if($("input[type='radio'].radioBtnClass").is(':checked')) {
				var saf_inc = $("input[type='radio'].radioBtnClass:checked").val();
				}
				
				var affectedperson = $("#affectedperson").val();
				var name = $("#name").val();
				var dayslost = $("#dayslost").val();
				var photoscene='';
				$('.photofile').each(function(){photoscene=photoscene+	$(this).val()+',';});
			//	var photoscene = $("#photoscene").val();
				var severitylevel = $("#severitylevel").val();
				var dateofaccident = $("#dateofaccident").val();
				var reason = $("#reason").val();
				var correctivemeasures = $("#correctivemeasures").val();
				var preventionmeasures = $("#preventionmeasures").val();
				var correctivedate = $("#correctivedate").val();
				var preventivedate = $("#preventivedate").val();
				var correctiveconfirmation = $("#correctiveconfirmation").val();
				var preventionconfirmation = $("#preventionconfirmation").val();
				var accidentreportmade = $("#accidentreportmade").val();
				var accidentreportapprove = $("#accidentreportapprove").val();
				
			

				
			 
				
		      	//alert(category);
				 $.ajax({
                    type:"post",
					url:"ajax/progress_report.php",
                    data:{'upd':upd,'edt':edt,'date':date,'report':report,'cumulativeprogress':cumulativeprogress,'todayissue':todayissue,'futureissue':futureissue,'tomorrowplan':tomorrowplan,'progressdate':progressdate,'activitydeployed':activitydeployed,'coreactivity':coreactivity,'saf_inc':saf_inc,'affectedperson':affectedperson,'name':name,'dayslost':dayslost,'photoscene':photoscene,'severitylevel':severitylevel,'dateofaccident':dateofaccident,'reason':reason,'correctivemeasures':correctivemeasures,'preventionmeasures':preventionmeasures,'correctivedate':correctivedate,
					'preventivedate':preventivedate,'correctiveconfirmation':correctiveconfirmation,'preventionconfirmation':preventionconfirmation,'accidentreportmade':accidentreportmade,'accidentreportapprove':accidentreportapprove},
                    success:function(data)
                    {
						//alert(data);
						$("#hid_up").val('Add');
						$().toastmessage('showSuccessToast',data);
						 $("#hide_show").hide();
						 $("#new").show();
						 $("#photo_msg").html('');
						loadtable();		
						clear();
						
                    }
                });

	});

	$('#photo_scene').ajaxfileupload({
	  //'action' : 'callAction',
	  'action' : 'ajax/progress_uploads.php',
	 // 'onStart': function() {$("#msg").html("<font color='red'><i class='fa fa-refresh fa-spin fa-3x fa-fw'></i>Please wait file is uploading.....</font>"); },
	  'onComplete' : function(response) {
		  //alert(response);
      if(response==''){
          $("#msg").html("<font color='red'>"+"Error in file upload"+"</font>");
      }else
	  {
           var fname=response.split(',');
			  
			  for(var i=0;i<fname.length;i++)
			  {
				 var html="<tr><td>"+fname[i]+"</td><td><button class='btn btn-xs btn-danger photofile' id='photo_file' value='"+fname[i]+"'><em class='fa fa-trash'></em></button></td></tr>";
				$("#photo_msg").append(html);	
			  }
		 
		   
      } 

    }
	});
	
	//delete photo file	
	$(document).on("click","#photo_file",function(e){
			e.preventDefault();
			
			
			var f_nm=$(this).val();
			var del_row=$(this).parent().parent();
			var flag=0;
			//alert(f_nm);
			
			$.ajax({
				type:'post',
				url:'ajax/progress_report.php',
				data:{'photo_filenm':f_nm},
				success:function(data)
				{
					
					//alert(data);
					if(data!='0')
					{
						del_row.remove();
					}
					
				}
			});
			
			
					
		});
	
// edit operration
 $(document).on('click', '.user_edit', function(e){
			e.preventDefault();
			$("#hide_show").show();	 
			var id = $(this).val();
			$("#hid_id").val(id);
			$("#hid_up").val('Update');
			$.ajax({
					url:"ajax/progress_report.php",
					type: 'post',
					data: {'id':id},
					success: function(data) {
						
						//alert(data);
						var json=$.parseJSON(data);
						$("#date").val(json[0]);
						$("#report").val(json[1]);
						$("#cumulativeprogress").val(json[2]);
						$("#todayissue").val(json[3]);
						$("#futureissue").val(json[4]);
						$("#tomorrowplan").val(json[5]);
						$("#progressdate").val(json[6]);
						$("#activitydeployed").val(json[7]);
						$("#coreactivity").val(json[8]);
						
						var rates = document.getElementsByName('saf_inc');
						var res= json[9];
						//alert(res);
						if(res != 'No'){
							$("input[name=saf_inc][value='Yes']").prop("checked",true);
							$("#safety_incidents").show();
							
						}
						else{
							$("input[name=saf_inc][value='No']").prop("checked",true);
							$("#safety_incidents").hide();
							
							document.getElementById("affectedperson").required = false;
							document.getElementById("name").required = false;
							document.getElementById("dayslost").required = false;
							//document.getElementById("photoscene").required = false;
							document.getElementById("severitylevel").required = false;
							document.getElementById("dateofaccident").required = false;
							document.getElementById("reason").required = false;
							document.getElementById("correctivemeasures").required = false;
							document.getElementById("preventionmeasures").required = false;
							document.getElementById("correctivedate").required = false;
							document.getElementById("preventivedate").required = false;
							document.getElementById("correctiveconfirmation").required = false;
							document.getElementById("preventionconfirmation").required = false;
							document.getElementById("accidentreportmade").required = false;
							document.getElementById("accidentreportapprove").required = false;
							
						}
						
						$("#affectedperson").val(json[10]);
						$("#name").val(json[11]);
						$("#dayslost").val(json[12]);
						var photos=json[13].split(',');
						//alert(photos);
						 for(var i=0;i<photos.length;i++)
						  {
							 var html="<tr><td>"+photos[i]+"</td><td><button class='btn btn-xs btn-danger photofile' id='photo_file' value='"+photos[i]+"'><em class='fa fa-trash'></em></button></td></tr>";
							$("#photo_msg").append(html);	
						  }
						//$("#photoscene").val(json[13]);
						$("#severitylevel").val(json[14]);
						$("#dateofaccident").val(json[15]);
						$("#reason").val(json[16]);
						$("#correctivemeasures").val(json[17]);
						$("#preventionmeasures").val(json[18]);
						$("#correctivedate").val(json[19]);
						$("#preventivedate").val(json[20]);
						$("#correctiveconfirmation").val(json[21]);
						$("#preventionconfirmation").val(json[22]);
						$("#accidentreportmade").val(json[23]);
						$("#accidentreportapprove").val(json[24]);
						
						//$('#btn_update').removeAttr("disabled");
						//$("#btn_insert").prop('disabled',true);
						  $("#new").hide();
					}
					
			   });	
													});
// update
 
/* $(document).on('click', '#btn_update', function(){	
				var upd = $("#hid_id").val();
				var edt = $("#hid_up").val();
				
			//alert(upd);
				var date = $("#date").val();
				var report = $("#report").val();
				var cumulativeprogress = $("#cumulativeprogress").val();
				var todayissue = $("#todayissue").val();
				var futureissue = $("#futureissue").val();
				var tomorrowplan = $("#tomorrowplan").val();
				var progressdate = $("#progressdate").val();
				var activitydeployed = $("#activitydeployed").val();
				var coreactivity = $("#coreactivity").val();
				
				if($("input[type='radio'].radioBtnClass").is(':checked')) {
				var saf_inc = $("input[type='radio'].radioBtnClass:checked").val();
				}
				
				var affectedperson = $("#affectedperson").val();
				var name = $("#name").val();
				var dayslost = $("#dayslost").val();
				var photoscene='';
				$('.photofile').each(function(){photoscene=photoscene+	$(this).val()+',';});
				//var photoscene = $("#photoscene").val();
				var severitylevel = $("#severitylevel").val();
				var dateofaccident = $("#dateofaccident").val();
				var reason = $("#reason").val();
				var correctivemeasures = $("#correctivemeasures").val();
				var preventionmeasures = $("#preventionmeasures").val();
				var correctivedate = $("#correctivedate").val();
				var preventivedate = $("#preventivedate").val();
				var correctiveconfirmation = $("#correctiveconfirmation").val();
				var preventionconfirmation = $("#preventionconfirmation").val();
				var accidentreportmade = $("#accidentreportmade").val();
				var accidentreportapprove = $("#accidentreportapprove").val();
				
				 $.ajax({
                    type:"post",
                   url:"ajax/progress_report.php",
                    data:{'upd':upd,'date':date,'report':report,'cumulativeprogress':cumulativeprogress,'todayissue':todayissue,'futureissue':futureissue,'tomorrowplan':tomorrowplan,'progressdate':progressdate,'activitydeployed':activitydeployed,'coreactivity':coreactivity,'saf_inc':saf_inc,'affectedperson':affectedperson,'name':name,'dayslost':dayslost,'photoscene':photoscene,'severitylevel':severitylevel,'dateofaccident':dateofaccident,'reason':reason,'correctivemeasures':correctivemeasures,'preventionmeasures':preventionmeasures,'correctivedate':correctivedate,
					'preventivedate':preventivedate,'correctiveconfirmation':correctiveconfirmation,'preventionconfirmation':preventionconfirmation,'accidentreportmade':accidentreportmade,'accidentreportapprove':accidentreportapprove},
                    success:function(data)
                    {
						$().toastmessage('showSuccessToast',data);
						loadtable();		
						clear();
						$("#hide_show").hide();
						$("#new").show();
						$('#btn_insert').removeAttr("disabled");
						$('#btn_update').prop('disabled',true);
						

                    }
                });
												
												}); */
// delete
	
	$(document).on('click', '.user_delete', function(e){	
			e.preventDefault();
			 if (confirm("Are you sure You Want To Reject ? ")) {

			var del = $(this).val();
			//alert(del);
			$.ajax({
					url:"ajax/progress_report.php",
					type: 'post',
					data: {'del':del},
					success: function(data) {
						//alert(data);
						
							//alert('data deleted successfully');
							$().toastmessage('showSuccessToast',data);
							loadtable();
						
					}
				   });
												  	
													 }
													 else{
														 	  alert("Record not deleted");

													 }
			 });
//end		 
  });

  function clear(){
	
				 $("#date").val('');
				$("#report").val('');
				$("#cumulativeprogress").val('');
				 $("#todayissue").val('');
				$("#futureissue").val('');
				 $("#tomorrowplan").val('');
				$("#progressdate").val('');
				 $("#activitydeployed").val('');
				$("#coreactivity").val('');
				
				$("#affectedperson").val('');
				$("#name").val('');
				$("#dayslost").val('');
				$("#photoscene").val('');
				$("#severitylevel").val('');
				$("#dateofaccident").val('');
				$("#reason").val('');
				$("#correctivemeasures").val('');
				$("#preventionmeasures").val('');
				$("#correctivedate").val('');
				$("#preventivedate").val('');
				$("#correctiveconfirmation").val('');
				$("#preventionconfirmation").val('');
				$("#accidentreportmade").val('');
				$("#accidentreportapprove").val('');
				
	
	
	
}
  function loadtable(){
	var all='all';
	$.ajax({
		type: "get",
		url :  "ajax/progress_report.php",
		data: {'all': all},
	
		success:function(response)
		{ 		
				//alert(response);
				$('#table_data').html(response);
		}
	});
}