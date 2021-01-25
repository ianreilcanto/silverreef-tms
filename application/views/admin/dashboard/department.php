       <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

            <div class="row">
            	<div class="col">
            		<div class="card shadow mb-4">
            			 <div class="card-header py-3">
		                    <h6 class="m-0 font-weight-bold text-primary">Manage Department</h6>
		                </div>
		                <div class="card-body">

		                	<form>
								  <div class="form-group">
									    <label for="departmentName">Department Name</label>
									    <input type="text" class="form-control" id="departmentName" aria-describedby="deptHelp" placeholder="Enter Department Name">
									    <small id="deptHelp" class="form-text text-muted"></small>
								  </div>
								  <button type="submit" class="btn btn-primary">
								  	<i class="fa fa-plus"></i>
								  	Add
								  </button>
							</form>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

							<div class="table-responsive">
		                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                            <thead>
		                                <tr>
		                                    <th> Department Name</th>
		                                    <th width="20%">Action</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <td>F&B</td>
		                                  
		                                    <td> 
		                                    	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>
		                        			</td>
		                                </tr>
		                                <tr>
		                                    <td>House Keeping</td>
		                                     <td>
		                                     	
		                                     	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>

		                                     </td>
		                                </tr>
		               
		                            </tbody>
		                        </table>
		                    </div>
		                	
		                </div>
            		</div>
            	</div>
            </div>

            <div class="row">
         
            	<div class="col">
            		
            		<div class="card shadow mb-4">
		                <div class="card-header py-3">
		                    <h6 class="m-0 font-weight-bold text-primary">Manage Stations</h6>
		                </div>
		                <div class="card-body">

		                	<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    	<label class="input-group-text" for="deptSelect">Department</label>
								  </div>
								  <select class="custom-select" id="deptSelect">
									    <option selected>Choose...</option>
									    <option value="1">F&B</option>
									    <option value="2">HK</option>
								  </select>
							</div>

							<form>
								  <div class="form-group">
									    <label for="departmentName">Station Name</label>
									    <input type="text" class="form-control" id="departmentName" aria-describedby="deptHelp" placeholder="Enter Station Name">
									    <small id="deptHelp" class="form-text text-muted"></small>
								  </div>
								  <button type="submit" class="btn btn-primary">
								  	<i class="fa fa-plus"></i>
								  	Add
								  </button>
							</form>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

		                    <div class="table-responsive">
		                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                            <thead>
		                                <tr>
		                                    <th>Name</th>
		                                    <th width="20%">Action</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <td>BrewBox</td>
		                                  
		                                    <td> 
		                                    	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>
		                        			</td>
		                                </tr>
		                                <tr>
		                                    <td>Bungee Bar</td>
		                                     <td>
		                                     	
		                                     	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>

		                                     </td>
		                                </tr>
		                                 <tr>
		                                    <td>Scootshack</td>
		                                     <td>
		                                     	
		                                     	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>

		                                     </td>
		                                </tr>
		               
		                            </tbody>
		                        </table>
		                    </div>
		              </div>
                	</div>
            	</div>
            </div>

             <div class="row">
         
            	<div class="col">
            		
            		<div class="card shadow mb-4">
		                <div class="card-header py-3">
		                    <h6 class="m-0 font-weight-bold text-primary">Manage Positions</h6>
		                </div>
		                <div class="card-body">

		                	<div class="input-group mb-3">
								  <div class="input-group-prepend">
								    	<label class="input-group-text" for="deptSelect">Department</label>
								  </div>
								  <select class="custom-select" id="deptSelect">
									    <option selected>Choose...</option>
									    <option value="1">F&B</option>
									    <option value="2">HK</option>
								  </select>
							</div>

							<form>
								  <div class="form-group">
									    <label for="departmentName">Postion Name</label>
									    <input type="text" class="form-control" id="departmentName" aria-describedby="deptHelp" placeholder="Enter Position Name">
									    <small id="deptHelp" class="form-text text-muted"></small>
								  </div>
								  <button type="submit" class="btn btn-primary">
								  	<i class="fa fa-plus"></i>
								  	Add
								  </button>
							</form>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

		                    <div class="table-responsive">
		                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
		                            <thead>
		                                <tr>
		                                    <th>Name</th>
		                                    <th width="20%">Action</th>
		                                </tr>
		                            </thead>
		                            <tbody>
		                                <tr>
		                                    <td>F&B Supervisor</td>
		                                  
		                                    <td> 
		                                    	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>
		                        			</td>
		                                </tr>
		                                <tr>
		                                    <td>Server</td>
		                                     <td>
		                                     	
		                                     	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>

		                                     </td>
		                                </tr>
		                                 <tr>
		                                    <td>Dishwasher</td>
		                                     <td>
		                                     	
		                                     	<a href="#" class="btn btn-primary btn-sm">
		                                    		<i class="fa fa-edit"></i>
		                            			</a>
		                                    	<a href="#" class="btn btn-danger btn-sm">
		                                    		<i class="fa fa-trash"></i>
		                            			</a>

		                                     </td>
		                                </tr>
		               
		                            </tbody>
		                        </table>
		                    </div>
		              </div>
                	</div>
            	</div>
            </div>



            
        </div>
        <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->