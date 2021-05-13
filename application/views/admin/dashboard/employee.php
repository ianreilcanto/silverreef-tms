
<style>
                .colorbg { background-color: #19d3da; }
                .colorcardRed { background-color: #f05454;}
                .colorcardGreen { background-color: #16c79a;}
                .colorbody { background-color: #f6f5f5;}
                .colorBlue { background-color: #01a9b4;}
                .colorGrey { background-color: #6c7b95;}
                .colorlightGrey { background-color: #797a7e;}
                .colorbody { background-color: #e4e4e4;}
</style>

<!-- Begin Page Content -->



<div class="container ">

    <!-- Page Heading -->
    <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

    <div class="row">
    	<div class="col">
    		<div class="  mb-4 border-0">
    			 <div class="card-header py-3 border-0 colorlightGrey">
                    <h6 class="m-0 font-weight-normal text-light">Manage Employee</h6>
                </div>
                <div class="card-body border-0">

                	<form id="employee-form ">
                		<div class="row">
                			<div class="col">
		                		<div class="form-group">
									 <!-- <label for="fname">First Name</label> -->
									 <input type="tex" class="form-control border-0" id="fname" placeholder="First Name">
								 </div>
								 <div class="form-group">
									 <!-- <label for="mname">Middle Name</label> -->
									 <input type="tex" class="form-control border-0" id="mname" placeholder="Middle Name">
								 </div>
								 <div class="form-group">
									 <!-- <label for="lname">Last Name</label> -->
									 <input type="tex" class="form-control border-0" id="lname" placeholder="Last Name">
								 </div>
                                <div class="form-group ">
                                     <!-- <label for="address">Address</label> -->
                                     <input autocomplete="off" type="tex" class="form-control border-0" id="birthDate" placeholder="Birth Date">
                                 </div>
								 <div class="form-group">
									 <!-- <label for="address">Address</label> -->
									 <input type="tex" class="form-control border-0" id="address" placeholder="Address">
								 </div>
								 <div class="form-group">
									<!-- <label for="city">City/Municipality</label> -->
									 <input type="tex" class="form-control border-0" id="city" placeholder="City/Municipality">
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="tex" class="form-control border-0" id="province" placeholder="Province">
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="tex" class="form-control border-0" id="country" placeholder="Country">
								 </div>
								
								 <!-- <div class="form-group">
									 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								 </div> -->
                			</div>
                			<div class="col">
                                 <div class="form-group">
                                     <!-- <label for="province">Province</label> -->
                                     <input type="tex" class="form-control border-0" id="zipcode" placeholder="ZipCode">
                                 </div>
                				 <div class="form-group">
									 <!-- <label for="lname">Last Name</label> -->
									 <input autocomplete="off" type="tex" class="form-control  border-0" id="startDate" placeholder="Start Date">
								 </div>
                				 <div class="form-group">
										<div class="input-group mb-3 ">
											  <div class="input-group-prepend " >
											    	<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="employee-department">Department</label>
											  </div>
											  <select class="custom-select border-0" id="employee-department">
												    <option value="0" selected>Choose...</option>

                                                    <?php foreach ($departments as $department) { ?>
                                                            <!-- <option value="1">F&B</option> -->
                                                            <option value="<?php echo $department['id'];  ?>"><?php echo $department['name'];  ?></option>

                                                    <?php } ?>
											  </select>
										</div>
								 </div>
								 <div class="form-group" id="employee-dept-position-div">
										<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    	<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="employee-dept-position">Position</label>
											  </div>
											  <select class="custom-select border-0" id="employee-dept-position">
												    <option selected>Choose...</option>
											  </select>
										</div>
								 </div>
		                		<div class="form-group">
									 <!-- <label for="fname">First Name</label> -->
									 <input type="text" class="form-control border-0" id="username" placeholder="Username">
								 </div>
								 <div class="form-group">
									 <!-- <label for="mname">Middle Name</label> -->
									 <input type="password" class="form-control border-0" id="password" placeholder="Password">
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="text" class="form-control border-0" id="contactNumber" placeholder="Contact Number">
								 </div>
								 <div class="form-group">
									 <!-- <label for="exampleInputEmail1">Email address</label> -->
									 <input type="email" class="form-control border-0" id="email" aria-describedby="emailHelp" placeholder="Enter email">
								 </div>
                			</div>
                		</div>
					  	<button id="add-employee" type="submit" class="btn colorcardGreen text-light border-0">Add Employee</button>
					</form>         	
                </div>
    		</div>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->
