$(document).ready(function(){

		//add new row in KYC detail div
		
    $(document).on("click",".add_kycdetail",function(e){
        e.preventDefault();
   
		var appendDiv="<div class='col-md-12'><div class='col-md-3'><div class='form-group'><label class='control-label'>Document Type *</label><select type='text' name='docType' id='docType' class='form-control' placeholder='Enter Document Type *' required><option Disabled Selected>Select</option><option value='Bank'>Bank </option><option value='PAN'>PAN</option><option value='Driving License'>Driving License</option><option value='Election Card'>Election Card</option><option value='Ration Card'>Ration Card</option><option value='PAN'>PAN</option></select></div></div><div class='col-md-3'><div class='form-group'><label class='control-label'>Document Number *</label><input type='text' name='docNum' id='docNum' class='docNum form-control' placeholder='Enter Document Number *'required></div></div><div class='col-md-3'><div class='form-group'><label class='control-label'> Name as Per Document *</label><input type='text' name='nameasDoc' id='nameasDoc' class='nameasDoc form-control' placeholder='Enter Document Name *' required></div></div><div class='col-md-2'><div class='form-group'><label class='control-label'>IFSC *</label><input type='text' name='ifsc' id='ifsc' class='ifsc form-control' placeholder='Enter IFSC *' required></div></div><div class='col-md-1' style='margin-top:25px;'><button type='button' class='del_kycdetail btn btn-primary' id='del_kycdetail' name='del_kycdetail'><em class='fa fa-minus'></em></button></div></div>";
		$(".kycdetail_div").append(appendDiv);	
    });
		//delete row from  KYC detail div
	$(document).on("click",".del_kycdetail",function(e){
		e.preventDefault();
		$(this).parent().parent().remove();
	});
	
	
		//add row in  family detail div
	  $(document).on("click",".add_family",function(e){
        e.preventDefault();
   
		var appendDiv='<div class="col-md-12"><div class="col-md-3"><div class="form-group">						<label class="control-label">Name *</label>	<input type="text" name="name" id="name" class="name form-control" placeholder="Enter Name *"   required></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">DOB  *</label><input type="date" name="dob" id="dob" class="form-control" placeholder="dob  *" required></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">Relation *</label><input type="text" name="relation" id="relation" class="relation form-control" placeholder="Enter Relation *"   required></div></div><div class="col-md-2"></div><div class="col-md-1" style="margin-top:25px;"><button type="button" class="dlt_nominee  btn btn-primary" id="dlt_family" name="dlt_family"><em class="fa fa-minus"></em></button></div></div>';
		$(".family_div").append(appendDiv);	
    });
		//delete row from  family detail div
	$(document).on("click",".dlt_family",function(e){
		e.preventDefault();
		$(this).parent().parent().remove();
	});
	
		//delete row from  nominee detail div
	  $(document).on("click",".add_nominee",function(e){
        e.preventDefault();
   
		var appendDiv='<div class="col-md-12"><div class="col-md-3"><div class="form-group"><label class="control-label">Name *</label><input type="text" name="name" id="name" class="name form-control" placeholder="Enter Name *"   required></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">Address 1 *</label><textarea type="text" name="address1" id="address1" class="form-control" placeholder="Enter Address 1" required></textarea></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">Address 2 *</label><textarea type="text" name="address2" id="address2" class="form-control" placeholder="Enter Address 2 *" required></textarea></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">Address 3 *</label><textarea type="text" name="address3" id="address3" class="form-control" placeholder="Enter Address 3 *" required></textarea></div></div><div class="col-md-3"><div class="form-group"> <label class="control-label">Address 4 *</label><textarea type="text" name="address4" id="address4" class="form-control" placeholder="Enter Address 4 *" required></textarea></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">DOB  *</label><input type="date" name="dob" id="dob" class="form-control" placeholder="DOB  *" required></div></div><div class="col-md-3"><div class="form-group"><label class="control-label">% of Share *</label><input type="text" name="share" id="share" class="share form-control" placeholder="Enter % of Share *"   required></div></div><div class="col-md-2"></div><div class="col-md-1" style="margin-top:25px;"><button type="button" class="dlt_nominee  btn btn-primary" id="dlt_nominee" name="dlt_nominee"><em class="fa fa-minus"></em></button></div></div>';
		$(".nomineefamily_div").append(appendDiv);	
    });
		//add new row in nominee detail div
	$(document).on("click",".dlt_nominee",function(e){
		e.preventDefault();
		$(this).parent().parent().remove();
	});
	
	
});
