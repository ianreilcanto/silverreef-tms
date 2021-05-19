

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
                              <h3> <span class="badge colorlightGrey text-light font-weight-normal">Checklist</span></h3> 
                        </div>

            <form id="checklist-edit" class="mt-5 mb-5" action="/action_page.php">


                        <!-- start row -->
                		<div class="row mt-5">
                			
                			<div class="col">

                                        <!-- start for the department div-->
                                            <div class="form-group">
                                                    <div class="input-group mb-3">
                                                            <div class="input-group-prepend ">
                                                                    <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="employee-department">Department</label>
                                                            </div>
                                                            <select class="custom-select border-0" id="employee-department">
                                                                    <option value="0" selected="">Select</option>
                                      
                                                                            <option value="1">FO</option>
            
                                                                            <option value="2">F&amp;B</option>
      
                                                                            <option value="3">Landscaping</option>

                                                            </select>
                                                    </div>
                                            </div>
                                         <!-- end for the department div-->

										<!-- start this will show if department has station -->
								 	<div class="input-group mb-3" id="checklist-station-div" style="display:none">
										<div class="input-group-prepend">
												<label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="checklist-station">Station</label>
										</div>
										<select class="custom-select border-0" id="checklist-station">
										
										<option value="0">Choose...</option><option value="1"> Bungee Bar </option><option value="2"> BrewBox </option><option value="3"> Scootshack </option><option value="4"> Working Personel </option></select>
									</div>
                                        <!-- end this will show if department has station -->
									
                                    <!-- start checklist -->
                                    <div class="input-group mb-3">
									  <div class="input-group-prepend">
									    	<label class="input-group-text  border-0  colorlightGrey text-light font-weight-normal" for="checklist-type">Checklist Type</label>
									  </div>
									  <select class="custom-select border-0" id="checklist-type">
										    <option selected="">Choose...</option>
										    <option value="daily">Daily</option>
										    <option value="weekly">Weekly</option>
										    <option value="monthly">Monthly</option>
									  </select>
								    </div>
                                    <!-- end checklist -->

                                    <!-- start schedule type -->
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                                <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="checklist-sched-type">Schedule Type</label>
                                        </div>
                                        <select class="custom-select border-0" id="checklist-sched-type">
                                                <option selected="">Choose...</option>
                                                <option value="1">Opening</option>
                                                <option value="2">Mid</option>
                                                <option value="3">Closing</option>
                                        </select>
								    </div>
                                    <!-- end schedule type -->
                                        
                                    <div class="row">
                                        
                                        
                                        <div class="col text-center mt-3">
                                            <button id="add-employee" type="submit" class="btn colorcardGreen text-light font-weight-normal ">Generate</button>
                                        </div>

                                    </div>
                                    


                            </div> 
                	    </div> 	

            </form>


                            <table id="example" class="table">
                                <thead class="thead-light">
                                    <tr>
                                    <th scope="col">Number</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">View</th>
                                    <th scope="col">Edit</th>
                                    </tr>
                                </thead>
                            <tbody>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Making Coffees
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Making Coffees
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Making Coffees
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Clean yourself
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Making Coffees
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Clean yourself
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Clean yourself
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Clean yourself
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Clean yourself
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Making Coffees
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                <tr>
                                <th scope="row">1</th>
                                <td>
                                        <a class="text-info font-weight-normal">
                                            <h6 class="text-left">
                                            Clean Yourself
                                            </h6> 
                                        </a>   

                                </td>
                                <td>
                                        <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                                <span class="">
                                                    <i class="fa fa-eye" aria-hidden="true"></i> 
                                                </span>
                                                                                                                
                                        </a> 
                                </td>
                                <td>
                                        <a class="btn colorcardRed text-light btn-sm " href="/admin/addTask"> 
                                            <span class="">
                                                <i class="bi bi-pencil-square" aria-hidden="true" ></i>
                                            </span>                                                                     
                                        </a> 
                                    </td>
                                </tr>
                                
                                
                            </tbody>
                            </table>
           
                                <!-- start modal -->
                            <div class="modal fade" id="view1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title text-secondary font-weight-normal" id="exampleModalLongTitle">View Task</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    
                                                    <div class="modal-body">
                                                            <div class="card" style="">
                                                                    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap">
                                                            
                                                                    <div class="card-body">
                                                                        
                                                                        <p class="card-text text-secondary font-weight-normal">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                                    
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                   
                                                        
                                                    <div class="col 8">   
                                                    <div class="input-group mb-3" id="upload-div" style="">
											<div class="custom-file ">
												<input type="file" class="custom-file-input colorlightGrey " id="upload">
												<label class="custom-file-label  " for="upload">Choose file</label>
											</div>
											<div class="input-group-append">
												<button class="btn btn-outline colorcardGreen text-light border-0 py-1" type="button">Upload</button>
                                                <button type="button" class="btn colorcardRed  text-light font-weight-normal" data-dismiss="modal">Close</button>
											</div>
    								</div>
                                                    </div>
                                                        
                                                    </div>
                                        </div>
                                </div>
                            </div>
                                <!-- end modal -->

	</div>
<!-- end of container -->
    
