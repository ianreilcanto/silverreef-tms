

<style>
                .colorbg { background-color: #19d3da; }
                .colorcardRed { background-color: #f05454;}
                .colorcardGreen { background-color: #16c79a;}
                .colorbody { background-color: #f6f5f5;}
                .colorBlue { background-color: #01a9b4;}
				.colorGrey { background-color: #6c7b95;}

                

</style>




<div class="container ">
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
			<div class="col-12 text-center text-light "> <h5> <span class="badge colorGrey font-weight-medium"> Name: <?php echo $name; ?></span></h5> </div>
			<div class="col-12 text-center text-light"> <h5><span class="badge colorGrey font-weight-medium"> Position:  <?php echo $position; ?></span> </h5> </div>

		</div>
		
	<div class="row">
		<div class="col text-center mt-3">
			
			<a class="btn colorGrey text-light font-weight-light employee-btn mt-3 p-3" href="/dashboard/checklist"> 
		       <i class="fa fa-th-list"></i>
		       <br>
		       <span>Daily Checklist</span>
		    </a>

		    <a class="btn colorBlue text-light font-weight-light employee-btn mt-3 p-3" href="/dashboard/weeklyChecklist"> 
		       <i class="fa fa-file-alt"></i>
		       <br>
		       <span>Weekly Checklist</span>
		    </a> 
	
			<a class="btn employee-btn mt-3 p-3 colorcardGreen text-light font-weight-light " href="/dashboard/mytask"> 
		       <i class="fa fa-tasks"></i>
		       <br>
		       <span>My Tasks</span>
		    </a>


		  
		  	<!--   
		  		<a class="btn bg-gradient-warning text-light employee-btn mt-3 p-3" href="#"> 
			       <i class="fa fa-file-alt"></i>
			       <br>
			       <span>Request</span> 
		    	</a> 
 			-->
	
			 <a class="btn colorcardRed text-light font-weight-light employee-btn mt-3 p-3" href="/auth/logout"> 
		       <i class="fa fa-power-off"></i>
		       <br>
		       <span>Logout</span>
		    </a> 
			
		</div>
	</div>

</div>


		<!-- <div class="col">
			<div class="col text-left"><?php echo $name; ?></div>
			<div class="col text-left"><?php echo $position; ?></div>
		</div> -->