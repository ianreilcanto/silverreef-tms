<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
    	<div class="col">
    		<div class="card shadow mb-4">
    			 <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Manage Employee</h6>
                </div>
                <div class="card-body">

                	<form id="employee-form">
                		<div class="row">
                			<div class="col">
		                		<div class="form-group">
									 <!-- <label for="fname">First Name</label> -->
									 <input type="tex" class="form-control" id="fname" placeholder="First Name">
								 </div>
								 <div class="form-group">
									 <!-- <label for="mname">Middle Name</label> -->
									 <input type="tex" class="form-control" id="mname" placeholder="Middle Name">
								 </div>
								 <div class="form-group">
									 <!-- <label for="lname">Last Name</label> -->
									 <input type="tex" class="form-control" id="lname" placeholder="Last Name">
								 </div>
                                <div class="form-group">
                                     <!-- <label for="address">Address</label> -->
                                     <input autocomplete="off" type="tex" class="form-control" id="birthDate" placeholder="Birth Date">
                                 </div>
								 <div class="form-group">
									 <!-- <label for="address">Address</label> -->
									 <input type="tex" class="form-control" id="address" placeholder="Address">
								 </div>
								 <div class="form-group">
									<!-- <label for="city">City/Municipality</label> -->
									 <input type="tex" class="form-control" id="city" placeholder="City/Municipality">
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="tex" class="form-control" id="province" placeholder="Province">
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="tex" class="form-control" id="country" placeholder="Country">
								 </div>
								
								 <!-- <div class="form-group">
									 <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
								 </div> -->
                			</div>
                			<div class="col">
                                 <div class="form-group">
                                     <!-- <label for="province">Province</label> -->
                                     <input type="tex" class="form-control" id="zipcode" placeholder="ZipCode">
                                 </div>
                				 <div class="form-group">
									 <!-- <label for="lname">Last Name</label> -->
									 <input autocomplete="off" type="tex" class="form-control" id="startDate" placeholder="Start Date">
								 </div>
                				 <div class="form-group">
										<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    	<label class="input-group-text" for="employee-department">Department</label>
											  </div>
											  <select class="custom-select" id="employee-department">
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
											    	<label class="input-group-text" for="employee-dept-position">Position</label>
											  </div>
											  <select class="custom-select" id="employee-dept-position">
												    <option selected>Choose...</option>
											  </select>
										</div>
								 </div>
		                		<div class="form-group">
									 <!-- <label for="fname">First Name</label> -->
									 <input type="text" class="form-control" id="username" placeholder="Username">
								 </div>
								 <div class="form-group">
									 <!-- <label for="mname">Middle Name</label> -->
									 <input type="password" class="form-control" id="password" placeholder="Password">
								 </div>
								 <div class="form-group">
									 <!-- <label for="province">Province</label> -->
									 <input type="text" class="form-control" id="contactNumber" placeholder="Contact Number">
								 </div>
								 <div class="form-group">
									 <!-- <label for="exampleInputEmail1">Email address</label> -->
									 <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
								 </div>
                			</div>
                		</div>
					  	<button id="add-employee" type="submit" class="btn btn-primary">Add Employee</button>
					</form>         	
                </div>
    		</div>
    	</div>
    </div>

</div>
<!-- /.container-fluid -->
