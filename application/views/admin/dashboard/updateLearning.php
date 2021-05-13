
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

<!-- stat container -->
	<div class="container">
                        
                     	 <div class="col text-center mt-5">
                              <h3><span class="badge colorlightGrey text-light font-weight-normal">Learning Management</span></h3> 
                        </div>
                        
                <form id="employee-form" class="mt-5" action="/action_page.php">

                		<div class="row">
                			
                				<div class="col">

									<div class="form-group">
											<div class="input-group mb-3">
												<div class="input-group-prepend ">
																	
														<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal">Title</label>
												</div>
														<input type="text" class="form-control border-0" id="title" placeholder="Enter Task" >
											</div>
									</div>	
									<div class="form-group">
											<div class="input-group mb-3">
													<div class="input-group-prepend ">
															<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="learning">Type</label>
													</div>
													<select class="custom-select border-0" id="learning" >
															<option value="0" selected="">Select</option>

																														
																	<option value="1">Learning</option>
																	<option value="2">Card</option>
																	<option value="3">Merchandise</option>

													</select>
											</div>
								 	</div>

									<div class="form-group" id="videolink-div" style="display:none">
											<div class="input-group mb-3">
												<div class="input-group-prepend ">
																	
														<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="videolink">Video Link</label>
												</div>
														<input type="text" class="form-control border-0" id="videolink" placeholder="Link">
											</div>
									</div>	

									<div class="form-group" id="price-div" style="display:none">
											<div class="input-group mb-3">
												<div class="input-group-prepend ">
																	
														<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="videolink">Price</label>
												</div>
														<input type="text" class="form-control border-0" id="price" placeholder="Price" >
											</div>
									</div>	

									<div class="input-group mb-3" id="upload-div" style="display:none">
											<div class="custom-file ">
												<input type="file" class="custom-file-input colorlightGrey " id="upload">
												<label class="custom-file-label border-0  " for="upload">Choose file</label>
											</div>
											<div class="input-group-append">
												<button class="btn btn-outline colorcardRed text-light border-0" type="button">Upload</button>
											</div>
    								</div>

									<div class="form-group">
											<div class="input-group mb-3">
													<div class="input-group-prepend ">
															<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="employee-department">Department</label>
													</div>
													<select class="custom-select border-0" id="employee-department">
															<option value="0" selected="">Select</option>

																														<!-- <option value="1">F&B</option> -->
																	<option value="1">FO</option>

																														<!-- <option value="1">F&B</option> -->
																	<option value="2">F&amp;B</option>

																														<!-- <option value="1">F&B</option> -->
																	<option value="3">Landscaping</option>

													</select>
											</div>
								 	</div>

									<div class="form-check mb-3">
									    <input type="checkbox" class="form-check-input" id="isGeneral">
									    <label class="form-check-label" for="isGeneral">General</label>
								  	</div>
										<!-- this will show if department has station -->
								 	<div class="input-group mb-3" id="checklist-station-div" style="display:none">
										<div class="input-group-prepend">
												<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="checklist-station">Station</label>
										</div>
										<select class="custom-select border-0" id="checklist-station">
											<!--   --> 
										<option value="0">Choose...</option><option value="1"> Bungee Bar </option><option value="2"> BrewBox </option><option value="3"> Scootshack </option><option value="4"> Working Personel </option></select>
									</div>
									<div class="input-group mt-3">
											<div class="input-group-prepend">
												<span class="input-group"></span>
											</div>
												<textarea class="form-control border-0 rounded" rows="3"  aria-label="With textarea" placeholder="Question?" ></textarea>
    								</div>
									<div class="input-group mt-3">
											<div class="input-group-prepend">
												<span class="input-group"></span>
											</div>
												<textarea class="form-control border-0 rounded" rows="3"  aria-label="With textarea" placeholder="Answer:" ></textarea>
    								</div>
									<div class="input-group mt-3">
											<div class="input-group-prepend">
												<span class="input-group"></span>
											</div>
												<textarea class="form-control border-0 rounded" rows="6"  aria-label="With textarea" placeholder="Description" ></textarea>
    								</div>
                				</div>
                		 </div>	
						            <div class="row">
                                
                                        <div class="col text-center mt-3">
                                            <button id="add-employee" type="submit" class="btn colorcardGreen text-light font-weight-normal px-4">Update</button>
                                            
                                        </div>

                                        
                                    </div>
                </form>         	 
                  
	</div>
<!-- end of container -->
    




