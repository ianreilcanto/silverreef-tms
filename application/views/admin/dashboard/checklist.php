       
	 
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
        <div class="container">

            <!-- Page Heading -->
            <!-- <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1> -->

						<div class="row">
					
							<div class="col">
								
									<div class=" mb-4">
										<div class="card-header py-3 border-0 colorlightGrey">
											<h6 class="m-0 font-weight-normal text-light ">Create Checklist</h6>
										</div>
										<div class="card-body">
											<form id="manange-checklist-form">
												<div class="input-group mb-3">
													<div class="input-group-prepend">
															<label class="input-group-text colorlightGrey text-light font-weight-normal border-0" for="slct-checklist-department">Department</label>
													</div>
													<select class="custom-select border-0" id="checklist-department">
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
															<label class="input-group-text colorlightGrey text-light font-weight-normal border-0" for="checklist-station">Station</label>
													</div>
													<select class="custom-select border-0" id="checklist-station">
														<!--   --> <option value="0" selected>Select Station</option>
													</select>
												</div>

												<div class="input-group mb-3">
													<div class="input-group-prepend">
															<label class="input-group-text colorlightGrey text-light font-weight-normal border-0" for="checklist-sched-type">Schedule Type</label>
													</div>
													<select class="custom-select border-0" id="checklist-sched-type">
															<option selected>Choose...</option>
															<option value="1">Opening</option>
															<option value="2">Mid</option>
															<option value="3">Closing</option>
													</select>
												</div>		
												<div class="input-group mb-3">
													<div class="input-group-prepend">
															<label class="input-group-text colorlightGrey text-light font-weight-normal border-0" for="checklist-type">Checklist Type</label>
													</div>
													<select class="custom-select border-0" id="checklist-type">
															<option selected>Choose...</option>
															<option value="daily">Daily</option>
															<option value="weekly">Weekly</option>
															<option value="monthly">Monthly</option>
													</select>
												</div>

												<div class="form-group">
														<!-- <label for="departmentName">Station Name</label> -->

														
														<div class="input-group mb-3">
																<div class="input-group-prepend ">
																					
																		<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal">Enter Checklist Name</label>
																</div>
																
															<input type="text" class="form-control  text-light font-weight-normal border-0 " id="checklist-name" aria-describedby="deptHelp" placeholder="Enter Checklist Name">
															<small id="deptHelp" class="form-text text-muted"></small>
														</div>
														
												</div>
												<div class="form-check">
														<input type="checkbox" class="form-check-input" id="isGeneral">
														<label class="form-check-label" for="isGeneral">General</label>
												</div>
												<br>
												<button type="submit" class="btn colorcardGreen text-light font-weight-normal" id="add-checklist">
													<!-- <i class="fa fa-plus"></i> -->
													Add Checklist
												</button>

											</form>
												<br>
												<br>

															
										</div>
										
									</div>
							</div>
							
					    </div>

                     <div class="row">

					 <div class="col">
								
								<div class=" mb-4">
									<div class="card-header py-3 border-0 colorlightGrey">
										<h6 class="m-0 font-weight-normal text-light ">Task</h6>
									</div>
									<div class="card-body">
										

					<form id="manage-task-form" method="post" enctype="multipart/form-data">
														
											<div class="row text-center">
												<div class="col-12 task-container">
													<div class="input-group mb-3">
														<div class="input-group-prepend">
																<label class="input-group-text text-light colorlightGrey font-weight-normal border-0" for="checklist-task-department">Department</label>
														</div>
														<select class="custom-select border-0" id="checklist-task-department">
																<option selected>Choose...</option>
																<?php foreach ($departments as $department) { ?>
																	<option value="<?php echo $department['id'];  ?>"><?php echo $department['name'];  ?></option>
																<?php } ?>
														</select>
													</div>
													<div class="input-group mb-3" id="checklist-task-checklistName-div">
														<div class="input-group-prepend">
																<label class="input-group-text text-light colorlightGrey font-weight-normal border-0" for="checklist-task-checklistName">Checklist Name</label>
														</div>
														<select class="custom-select border-0" id="checklist-task-checklistName">
																<option value="0" selected="">Choose...</option>
														</select>
													</div>
													<div class="input-group mb-3">
														<div class="input-group-prepend">
																<label class="input-group-text text-light colorlightGrey font-weight-normal border-0" for="checklist-type">Task Type</label>
														</div>
														<select class="custom-select border-0" name="checklist-task-taskType" id="checklist-task-taskType">
																<option selected>Choose...</option>
																<option value="required">Required</option>
																<option value="recommended">Recommended</option>
														</select>
													</div>
													<div class="task-data ">
														<input type="hidden" name="image_path" id="image_path">
														<div class="form-group text-righ taskfield " style="">

															<div class="input-group mb-3">
																<div class="input-group-prepend ">
																		
																		<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal">Enter Task Name</label>
																</div>			

																	<input type="text" class="form-control border-0" id="checklist-task-name" aria-describedby="deptHelp" placeholder="Enter Task Name">

															</div>

															<div class="input-group mb-3">
																<div class="input-group-prepend ">
																		
																		<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal">How many seconds?</label>
																</div>			
																<input type="text" class="form-control border-0" id="checklist-task-sec" aria-describedby="deptHelp" placeholder="How many seconds?">
																	
															</div>

															
																
																<div class="input-group">
																	<div class="custom-file">
																		<input type="file" class="custom-file-input" name="task-file" id="task-file">
																		<label class="custom-file-label task-file-label border-0" for="task-file">Custom file upload</label>
																	</div>
																	<div class="input-group-append">
                                                                		<button class="btn btn-outline colorcardRed text-light border-0" type="button">Upload</button>
                                                        			</div>
																</div>
																<br>
																<textarea name="task_description" class="form-control" id="checklist-task-desc" rows="3" placeholder="Enter Task Description"></textarea>
																<br>
														</div>
													</div>
												</div>	
											</div> 
											<button type="submit" class="btn colorcardGreen text-light font-weight-normal" id="add-task">
												<!-- <i class="fa fa-plus"></i> -->
												Add Task
											</button>
										</form>
							

														
									</div>
									
								</div>
						</div>										

					 </div>

        </div>


		