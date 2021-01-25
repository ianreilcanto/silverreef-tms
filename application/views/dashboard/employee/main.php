<div class="container">
	<br>
	<div class="row">
		<div class="col text-center">
			<a href="#" class="btn btn-primary btn-circle btn-lg" style="padding: 30px">
                    <?php echo $department; ?>
            </a>
			
		</div>
	</div>
	<br>
	<div class="row">
		<div class="col-4">
			<div class="col text-left">
				<div class="h5 mb-0 font-weight-bold text-gray-800">Name:</div>
			</div>
			<div class="col-4 text-left">
					<div class="h5 mb-0 font-weight-bold text-gray-800">Position:</div>
			</div>
		</div>
		<div class="col text-center">
			<div class="col text-left"><?php echo $name; ?></div>
			<div class="col text-left"><?php echo $position; ?></div>
		</div>
	</div>

	<div class="row">
		<div class="col text-center mt-5">
			
			 <a class="btn bg-gradient-secondary text-light employee-btn mt-3 p-3" href="/dashboard/checklist"> 
		       <i class="fa fa-th-list"></i>
		       <br>
		       <span>Checklist</span>
		    </a> 

	
			<a class="btn employee-btn mt-3 p-3 bg-gradient-success text-light " href="/dashboard/mytask"> 
		       <i class="fa fa-tasks"></i>
		       <br>
		       <span>My Tasks</span>
		    </a>


		    <a class="btn bg-gradient-info text-light employee-btn mt-3 p-3" href="#"> 
		       <i class="fa fa-file-alt"></i>
		       <br>
		       <span>Report</span>
		    </a> 

		    <a class="btn bg-gradient-warning text-light employee-btn mt-3 p-3" href="#"> 
		       <i class="fa fa-file-alt"></i>
		       <br>
		       <span>My Schedules</span>
		    </a> 

	
			 <a class="btn bg-gradient-danger text-light employee-btn mt-3 p-3" href="/auth/logout"> 
		       <i class="fa fa-power-off"></i>
		       <br>
		       <span>Logout</span>
		    </a> 
			
		</div>
	</div>

</div>