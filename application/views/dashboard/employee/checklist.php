



<style>     
    .colorbg { background-color: #19d3da; }
    .colorcardRed { background-color: #f05454;}
    .colorcardGreen { background-color: #16c79a;}
    .colorbody { background-color: #f6f5f5;}
    .colorBlue { background-color: #01a9b4;}
    .colorGrey { background-color: #6c7b95;}
    .colorlightGrey { background-color: #797a7e;}
    .colorlightBlue { background-color: #5e73c7;}

</style>

<div class="container">
   
    <div class="row mt-2">
        <div class="col text-center">
            <h1>Checklist</h1>
        </div>
    </div>
<!-- 
    <div class="row">
        <div class="col text-center">
        <img class="rounded " src="../../../assets/img/logos/brewbox.png" href="#" style="width:30%" />   
        </div>
    </div> -->
    
    <div class="row">
        <div class="col text-center">
        <img class="rounded " src="../../../assets/img/logos/bungee.png" href="#" style="width:30%" />   
        </div>
    </div>

    <!-- <div class="row">
        <div class="col text-center">
        <img class="rounded " src="../../../assets/img/logos/scoot.png" href="#" style="width:30%" />   
        </div>
    </div> -->
    <?php if(isset($default_station)){ ?>
    <input type="hidden" name="default_station" value="<?php echo $default_station; ?>" id="default_station">
    <?php } ?>
    <div class="row mt-3">
        <div class="col" style=" display : <?php echo  $hasStations ? "block" : "none"; ?>">
           <div class="input-group">
                  <div class="input-group-prepend">
                        <label class="input-group-text border-0 colorlightGrey text-light" for="slc-employee-station">Type</label>
                  </div>
                  <select class="custom-select border-0" id="slc-employee-station">

                        <?php foreach ($stations as $station) { ?>
                                <!-- <option value="1">F&B</option> -->
                                <option value="<?php echo $station['id'];  ?>"><?php echo $station['name'];  ?></option>

                        <?php } ?>
                  </select>
            </div>
        </div>
    </div>

    <?php foreach ($checklists as $checklist) { 

        //$typeTime = $checklist['type'].' ( '.$checklist['start'].' - '.$checklist['end'].' )';
        $typeTime = $checklist['type'];

    ?>
        <?php foreach ($checklist['tasks'] as $task) {

            $cardColor = $task['task_type'] == 'required' ? 'success' : 'success';

            if(!in_array($task['id'], $accomplished_task)){

        ?>

             <div class="row station_switch station<?php echo($checklist['station_id']); ?> colorcardGreen rounded mt-2 py-1" style=" display : <?php echo  $hasStations ? "block" : "none"; ?>">

                 <div class="row px-2">
                      <div class="col-6 mt-2">
                          <span class="badge badge-light p-1"><?php echo $typeTime; ?></span>
                      </div>

                      <div class="col-6 text-right mt-2 ">

                            <div class="btn-group">
                                <a class="btn btn-light btn-sm " data-toggle="modal" data-target="#imageModal<?php echo($task['id']); ?>"> 
                                        <i class="fa fa-eye" aria-hidden="true"></i> <span></span>
                                </a> 
                                <a class="btn btn-dark btn-sm colorlightGrey border-0" href="/dashboard/task/<?php echo($task['id']) ?>"> 
                                    <i class="fa fa-tasks" ></i> <span>Get Task</span>
                                </a> 
                            </div>
                                  
                      </div> 
                 </div>
                  <div class="col-12">
                      <a class="text-light" data-toggle="collapse" href="#task<?php echo($task['id']); ?>" role="button" aria-expanded="false" aria-controls="task<?php echo($task['id']); ?>"> 
                          <h5><?php echo $task['name'].'( '.$task['sec'].' sec )'; ?></h5>
                      </a>
                  </div>
                  <div class="col-12 collapse bg-light pt-2" id="task<?php echo($task['id']); ?>">
                          <?php echo $task['description']; ?>
                  </div>
             </div>

             <!-- modal -->
            <div class="modal fade" id="imageModal<?php echo($task['id']); ?>" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                <div style="margin-top:20%" class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="../../assets/img/<?php echo $task['img_path']; ?>" alt="" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>

        <?php 
                } 
            }
        ?>

    <?php } ?>

	<div class="row">
		<div class="col text-center mt-3">
			<a href="/dashboard/" class="btn btn-secondary btn-circle btn-lg">
                <i class="fas fa-arrow-left"></i>
            </a>
		</div>
	</div>
</div>













