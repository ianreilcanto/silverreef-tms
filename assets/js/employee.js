

$("#employee-department").on("change",function(){
	$data = {};
	let val = $(this).val();

	$data['deptId'] = val;

	$.ajax({
        url: "/department/getPosition",
        type: "post",
        data: $data ,
        success: function (response) {

        	$position = JSON.parse(response);

        	if($position.length > 0){

        		$('#employee-dept-position-div').show();
        		
        		$('#employee-dept-position').children().remove();

        		$optionTemplate = `<option value='0'>Choose...</option>`;

        		for (var i = 0; i < $position.length; i++) {
        			
        			$optionTemplate += `<option value='${ $position[i].id }'> ${ $position[i].name } </option>`;
        				
        		}

        		$('#employee-dept-position').append($optionTemplate);

        	}else{
        		$('#employee-dept-position-div').hide();
        		$('#employee-dept-position option[value=0]').attr('selected','selected');
        	}


        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


});


$('#add-employee').click(function(e){
	e.preventDefault();

	var formValues = $("#employee-form");

	$employee = employeeFieldValidator(formValues);


	console.log('employee',$employee);

	   
	  $.ajax({
        url: "/employee/add",
        type: "post",
        data: $employee ,
        success: function (response) {

				// let taskForm = $('.task-data').children();
				// 	taskForm.find('#checklist-task-name').val("");
				// 	taskForm.find('#checklist-task-minute').val("");
				// 	task_description.value = "";

        	location.reload();

           // You will get response from your PHP page (what you echo or print)
        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


});


function employeeFieldValidator(formvalues){

	// $fname = formvalues.find("#fname").val();
	// $mname = formvalues.find("#mname").val();
	// $lname = formvalues.find("#lname").val();
	// $birthDate = formvalues.find("#birthDate").val();
	// $address = formvalues.find("#address").val();
	// $city = formvalues.find("#city").val();
	// $province = formvalues.find("#province").val();
	// $country = formvalues.find("#country").val();
	// $zipcode = formvalues.find("#zipcode").val();
	// $startDate = formvalues.find("#startDate").val();
	// $department = formvalues.find("#employee-department").val();
	// $position = formvalues.find("#employee-dept-position").val();

	// $username = formvalues.find("#username").val();
	// $mname = formvalues.find("#password").val();
	// $email = formvalues.find("#email").val();
	// $contactNumber = formvalues.find("#contactNumber").val();


	employee = {

		info : {

			fname : formvalues.find("#fname").val(),
			mname : formvalues.find("#mname").val(),
			lname : formvalues.find("#lname").val(),
			birthDate : formvalues.find("#birthDate").val(),
			address : formvalues.find("#address").val(),
			city : formvalues.find("#city").val(),
			province : formvalues.find("#province").val(),
			country : formvalues.find("#country").val(),
			zipcode : formvalues.find("#zipcode").val(),
			startDate : formvalues.find("#startDate").val(),
			department : formvalues.find("#employee-department").val(),
			position : formvalues.find("#employee-dept-position").val(),

		},
		credentials : {

			username : formvalues.find("#username").val(),
			password : formvalues.find("#password").val(),
			email : formvalues.find("#email").val(),
			contactNumber : formvalues.find("#contactNumber").val(),

		}



	}


	return employee;



}
























