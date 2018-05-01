$(document).ready(function(){
//		var sr = $('#srno').val();
	
    $(document).on("click",".add_challan_date_entry",function(e){
        e.preventDefault();
		var ttrn1 = $('#trrn').val();		
		var wagemonth1 = $('#wagemonth').val();
		var ddate1 = $('#duedate').val();
		var cdate1 = $('#challandate').val();
		var ac1 = $('#ac1').val();
		var ac2 = $('#ac2').val();
		var ac10 = $('#ac10').val();
		var ac21 = $('#ac21').val();
		var ac22 = $('#ac22').val();
		var tamount = $('#totalamount').val();
		var rdate = $('#returndate').val();
		
			   
/*	var r1 = $('table#example').find('tbody').find('tr');
		var sr = r1.length;
		var sr = sr+1;
*/
		
		//var sr = 0;
   if( (ttrn1 != "")&&(wagemonth1 != "")&&(ddate1 != "")&&(cdate1 != "")&&(ac1 != "")&&(ac2 != "")&&(ac10 != "")&&(ac21 != "")&&(ac22 != "")&&(tamount != "")&&(rdate != "")){
	   
	var sr = 1;   
 		var appendDiv="<tr class='editrow' ><td>"+sr+"</td><td>"+ttrn1+"</td><td >"+wagemonth1+"</td><td >"+ddate1+"</td><td  >"+cdate1+"</td><td  >"+ac1+"</td><td  >"+ac2+"</td><td  >"+ac10+"</td><td  >"+ac21+"</td><td  >"+ac22+"</td><td  >"+tamount+"</td><td  >"+rdate+"</td><td><button class='btn btn-danger btn-sm del_row_challan' ><i class='glyphicon glyphicon'>X</i></button></td></tr>";
		$(".challan_date_entry").append(appendDiv);	
	   
   }else{
	   alert('Please Fill All Data');
   }

    });
		//delete row from  KYC detail div
	$(document).on("click",".del_row_challan",function(e){
		e.preventDefault();
		$(this).parent().parent().remove();
	});
	
	/*-----------------------------cust/party click on edit--------------------------------------*/
	

 $(document.body).on('focusout', '.a_c' ,function(){
		
		
		
		var ac1 = $('#ac1').val();
		var ac2 = $('#ac2').val();
		var ac10 = $('#ac10').val();
		var ac21 = $('#ac21').val();
		var ac22 = $('#ac22').val();
		
		
		if(ac1 == ""){ var ac1 = 0; }
		if(ac2 == ""){ var ac2 = 0; }
		if(ac10 == ""){ var ac10 = 0; }
		if(ac21 == ""){ var ac21 = 0; }
		if(ac22 == ""){ var ac22 = 0; }
		
		var total = parseInt(ac1) + parseInt(ac2) + parseInt(ac10)  + parseInt(ac21) + parseInt(ac22);
		
		$('#totalamount').val(total);
		
 });
 
/*-----------------------------cust/party click on edit--------------------------------------*/

 
	
	
	
		});