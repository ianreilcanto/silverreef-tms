<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <title>Document</title>
</head>



<body class="colorbody">


<style>
                .colorbg { background-color: #19d3da; }
                .colorcardRed { background-color: #f05454;}
                .colorcardGreen { background-color: #16c79a;}
                .colorbody { background-color: #f6f5f5;}
                .colorBlue { background-color: #01a9b4;}
                .colorGrey { background-color: #6c7b95;}
                .colorlightGrey { background-color: #797a7e;}
                .colorbody { background-color: #e4e4e4;}

				#birthDate,#startDate{
					background: #fff;
					padding: 0 10px;
					border-bottom: 0px !important;
				}

</style>

<!-- stat container -->
<div class="container">
                        
                        <div class="col text-center mt-5">
                              <h3> <span class="badge colorlightGrey text-light font-weight-normal">Registration</span></h3> 

							  <div class="alert alert-success employee-added" role="alert" style="display:none">
								<h4 class="alert-heading"></h4>
								<p>Employee has been added</p>
							  </div>

							  <!-- <div class="alert alert-danger" role="alert">
								<h4 class="alert-heading"></h4>
								<p>There is an Error on adding the employee</p>
							  </div> -->
                        </div>
                        
                    <form id="employee-form" class="mt-5">
                		<div class="row">
                			<div class="col">
		                		<div class="form-group">
									 <!-- <label for="fname">First Name</label> -->
									 <input type="text" class="form-control border-0" id="fname" placeholder="First Name" required>
								 </div>
								 <div class="form-group">
									 <!-- <label for="mname">Middle Name</label> -->
									 <input type="text" class="form-control border-0" id="mname" placeholder="Middle Name" required>
								 </div>
								 <div class="form-group">
									 <!-- <label for="lname">Last Name</label> -->
									 <input type="text" class="form-control border-0" id="lname" placeholder="Last Name" required>
								 </div>
                                <div class="form-group">
                                     <!-- <label for="address">Address</label> -->
                                     <div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                                         <input autocomplete="off" type="tex" class="form-control border-0" id="birthDate" placeholder="Birth Date" required>
                                         <span class="input-group-append" role="right-icon">
                                             <button class="btn colorcardRed border-left-0" type="button">
                                                <i class="fa fa-calendar text-light"></i>
                                            </button>
                                        </span>
                                    </div>
                                 </div>
								 <div class="form-group">
									 <!-- <label for="address">Address</label> -->
									 <input type="text" class="form-control border-0" id="address" placeholder="Address" required>
								 </div>
								 <div class="form-group">
									<!-- <label for="city">City/Municipality</label> -->
									 <input type="text" class="form-control border-0" id="city" placeholder="City/Municipality" required> 
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="text" class="form-control border-0" id="province" placeholder="Province" required>
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="text" class="form-control border-0" id="country" placeholder="Country" required>
								 </div>
								
								 <!-- <div class="form-group">
									 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								 </div> -->
                			</div>
                			<div class="col">
                                 <div class="form-group">
                                     <!-- <label for="province">Province</label> -->
                                     <input type="text" class="form-control border-0" id="zipcode" placeholder="ZipCode" required>
                                 </div>
                				 <div class="form-group">
									 <!-- <label for="lname">Last Name</label> -->
									     <div role="wrapper" class="gj-datepicker gj-datepicker-bootstrap gj-unselectable input-group">
                                                <input autocomplete="off" type="tex" class="form-control" id="startDate" placeholder="Start Date" required>
                                                 <span class="input-group-append" role="right-icon">
                                                    <button class="btn colorcardRed border-left-0" type="button">
                                                         <i class="fa fa-calendar text-light"></i>
                                                    </button>
                                                </span>
                                         </div>
								 </div>
                				 <div class="form-group">
										<div class="input-group mb-3">
											  <div class="input-group-prepend ">
											    	<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="employee-department">Department</label>
											  </div>
											  <select class="custom-select border-0" id="employee-department">
												    <option value="0" selected="">Select</option>
													<?php foreach ($departments as $department) { ?>
														<!-- <option value="1">F&B</option> -->
														<option value="<?php echo $department['id'];  ?>"><?php echo $department['name'];  ?></option>

													<?php } ?>
                                               </select>
										</div>
								 </div>
								 <div class="form-group" id="employee-dept-position-div" style="display: none;">
										<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    	<label class="input-group-text border-0 " for="employee-dept-position">Position</label>
											  </div>
											  <select class="custom-select" id="employee-dept-position">
												    <options selected="">Select</option>
											  </select>
										</div>
								 </div>
		                		<div class="form-group">
									 <!-- <label for="fname">First Name</label> -->
									 <input type="text" class="form-control border-0 " id="username" placeholder="Username">
								 </div>
								 <div class="form-group">
									 <!-- <label for="mname">Middle Name</label> -->
									 <input type="password" class="form-control border-0 " id="password" placeholder="Password">
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="text" class="form-control border-0 " id="contactNumber" placeholder="Contact Number">
								 </div>
								 <div class="form-group">
									 <!-- <label for="exampleInputEmail1">Email address</label> -->
									 <input type="email" class="form-control border-0 " id="email" aria-describedby="emailHelp" placeholder="Enter email">
								 </div>
                			</div>
                		</div>
                        <div class="col text-center">
                             <button id="add-employee" type="submit" class="btn colorcardGreen text-light font-weight-normal ">Register</button>
                        </div>
					  	
					</form>         	
                  
</div>
<!-- end of container -->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>

<script>
	$('#startDate').datepicker();
	$('#birthDate').datepicker();

	$('#add-employee').click(function(e){
	e.preventDefault();

	var formValues = $("#employee-form");

	$employee = employeeFieldValidator(formValues);

	  $.ajax({
        url: "/employee/add",
        type: "post",
        data: $employee ,
        success: function (response) {

			if(response > 0){
				$(".employee-added").show();

				var millisecondsToWait = 2000;
				setTimeout(function() {
					$(".employee-added").hide();
        			location.reload();

				}, millisecondsToWait);
			}

        },
        error: function(jqXHR, textStatus, errorThrown) {
           console.log(textStatus, errorThrown);
        }
    });


});


function employeeFieldValidator(formvalues){


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




</script>


</body>

</html>