       <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
         
            	<div class="col">
            		
            		<div class="card shadow mb-4">
		                <div class="card-header py-3">
		                    <h6 class="m-0 font-weight-bold text-primary">Create Checklist</h6>
		                </div>
		                <div class="card-body">
							<form id="manange-checklist-form">
								<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    	<label class="input-group-text" for="slct-checklist-department">Department</label>
									  </div>
									  <select class="custom-select" id="checklist-department">
										    <option selected>Choose...</option>

										    <?php foreach ($departments as $department) { ?>
										    		<!-- <option value="1">F&B</option> -->
										    		<option value="<?php echo $department['id'];  ?>"><?php echo $department['name'];  ?></option>

										    <?php } ?>
									  </select>
								</div>

								<!-- this will show if department has station -->
								<div class="input-group mb-3" id="checklist-station-div">
									  <div class="input-group-prepend">
									    	<label class="input-group-text" for="checklist-station">Station</label>
									  </div>
									  <select class="custom-select" id="checklist-station">
										  <!--   --> <option value="0" selected>Select Station</option>
									  </select>
								</div>

								<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    	<label class="input-group-text" for="checklist-sched-type">Schedule Type</label>
									  </div>
									  <select class="custom-select" id="checklist-sched-type">
										    <option selected>Choose...</option>
										    <option value="1">Opening</option>
										    <option value="1">Mid</option>
										    <option value="2">Closing</option>
									  </select>
								</div>		
								<div class="input-group mb-3">
									  <div class="input-group-prepend">
									    	<label class="input-group-text" for="checklist-type">Checklist Type</label>
									  </div>
									  <select class="custom-select" id="checklist-type">
										    <option selected>Choose...</option>
										    <option value="daily">Daily</option>
										    <option value="weekly">Weekly</option>
										    <option value="monthly">Monthly</option>
									  </select>
								</div>

								  <div class="form-group">
									    <!-- <label for="departmentName">Station Name</label> -->
									    <input type="text" class="form-control" id="checklist-name" aria-describedby="deptHelp" placeholder="Enter Checklist Name">
									    <small id="deptHelp" class="form-text text-muted"></small>
								  </div>

								 <button type="submit" class="btn btn-primary" id="add-checklist">
								  	<i class="fa fa-plus"></i>
								  	Add Checklist
								  </button>
								  <br>
								  <br>
								  <h4>Task</h4>
								
								<div class="row text-center">
									<div class="col-12 task-container">
										<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    	<label class="input-group-text" for="checklist-task-department">Department</label>
											  </div>
											  <select class="custom-select" id="checklist-task-department">
												    <option selected>Choose...</option>
												     <?php foreach ($departments as $department) { ?>
										    			<option value="<?php echo $department['id'];  ?>"><?php echo $department['name'];  ?></option>
										    		<?php } ?>
											  </select>
										</div>
										<div class="input-group mb-3" id="checklist-task-checklistName-div">
											  <div class="input-group-prepend">
											    	<label class="input-group-text" for="checklist-task-checklistName">Checklist Name</label>
											  </div>
											  <select class="custom-select" id="checklist-task-checklistName">
												    <option value="0" selected="">Choose...</option><!-- 
												    <option value="daily">Daily</option>
												    <option value="weekly">Weekly</option>sa
												    <option value="monthly">Monthly</option> -->
											  </select>
										</div>
										<div class="input-group mb-3">
											  <div class="input-group-prepend">
											    	<label class="input-group-text" for="checklist-type">Task Type</label>
											  </div>
											  <select class="custom-select" id="checklist-task-taskType">
												    <option selected>Choose...</option>
												    <option value="required">Required</option>
												    <option value="recommended">Recommended</option>
											  </select>
										</div>
										<div class="task-data">
											<div class="form-group text-righ taskfield" style="background: #6d8ce8; padding: 10px">
												 	<input type="text" class="form-control" id="checklist-task-name" aria-describedby="deptHelp" placeholder="Enter Task Name">
									                <br>
									                <input type="text" class="form-control" id="checklist-task-sec" aria-describedby="deptHelp" placeholder="How many seconds?">
									                <br>
												  	<textarea name="task_description" class="form-control" id="checklist-task-desc" rows="3" placeholder="Enter Task Description"></textarea>
												  	<br>
											 </div>
										</div>
									</div>	
									<!-- <div class="col-12">
										 <a href="#" class="btn btn-success btn-circle"  id="add-task-field">
	                                        <i class="fa fa-plus"></i>
	                                    </a>
	                                     <a href="#" class="btn btn-danger btn-circle"  id="remove-task-field">
	                                        <i class="fa fa-minus"></i>
	                                    </a>
									</div> -->
								</div> 
								  <button type="submit" class="btn btn-primary" id="add-task">
								  	<i class="fa fa-plus"></i>
								  	Add Task
								  </button>
							</form>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
							<!-- 
		                    <div class="table-responsive">
		                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                            <thead>
		                                <tr>
		                                    <th>Checklist Name</th>
		                                    <th width="20%">Action</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                            	 <tr>
		                                    <td>F&B Schedule 1 Opening Checklist</td>
		                                     <td>
		                                     	
		                                     	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                            			<a href="#" class="btn btn-success btn-sm">
		                                    		<i class="fa fa-eye"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>

		                                     </td>
		                                </tr>
		                                 <tr>
		                                    <td>F&B Schedule 2 Closing Checklist</td>
		                                     <td>
		                                     	
		                                     	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                            			<a href="#" class="btn btn-success btn-sm">
		                                    		<i class="fa fa-eye"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>

		                                     </td>
		                                </tr>
		               
		                            </tbody>
		                        </table>
		                    </div> -->
		              </div>
                	</div>
            	</div>
            </div>

             <div class="row">
         
            	<div class="col">		
            	
		        </div>
             </div>

            	</div>
            </div>  
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->