

<style>
                
                .colorlightGrey { background-color: #797a7e;}
</style>




<div class="container">
    <br>
    <div class="row">
        <div class="col text-center">
            <h1>Weekly Checklist</h1>
        </div>
    </div>
    <br>
    <?php if(isset($default_station)){ ?>
        <input type="hidden" name="default_station" value="<?php echo $default_station; ?>" id="default_station">
    <?php } ?>
    <div class="row">
        <div class="col" style=" display : <?php echo  $hasStations ? "block" : "none"; ?>">
           <div class="input-group mb-3">
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

    <?php 
    // echo "<pre>";
    // print_r($checklists); 
    ?>

    <?php foreach ($checklists as $checklist) { 

        $typeTime = $checklist['type'].' ( '.$checklist['start'].' - '.$checklist['end'].' )';

    ?>
        <?php foreach ($checklist['tasks'] as $task) {

            $cardColor = $task['task_type'] == 'required' ? 'danger' : 'success';

            if(!in_array($task['id'], $accomplished_task)){

        ?>

                <div id="" class="row station_switch station<?php echo($checklist['station_id']); ?>" style=" display : <?php echo  $hasStations ? "block" : "none"; ?>">
                <div class="col mt-2">
                    <div class="card border-left-<?php echo($cardColor); ?> shadow h-100 py-2">
                        <div class="card-body">
                            <h5><strong><?php echo $checklist['name']; ?></strong></h5>
                            <h6><strong><?php echo $typeTime; ?></strong></h6>
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-md font-weight-bold text-<?php echo($cardColor); ?> mb-1">
                                        <a data-toggle="collapse" href="#task<?php echo($task['id']); ?>" role="button" aria-expanded="false" aria-controls="task<?php echo($task['id']); ?>"><?php echo $task['name'].'( '.$task['sec'].' sec )'; ?></a>
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col">
                                            <div class="collapse" id="task<?php echo($task['id']); ?>">
                                                  <div class="card card-body">
                                                        <img style="width: 100%" src="../../assets/img/<?php echo $task['img_path']; ?>">  
                                                        <?php echo $task['description']; ?>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                     <a class="btn btn-<?php echo($cardColor); ?>" href="/dashboard/task/<?php echo($task['id']) ?>"> 
                                       <i class="fa fa-tasks"></i> <span>Get Task</span>
                                    </a> 
                                    <!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
                                </div>
                            </div>
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













