<div class="container">

         <br>
            <div class="row">
                <div class="col text-center">
                    <h1>My Accomplished Task </h1>
                </div>
            </div>
        <br>
        <?php foreach ($tasks as $task) {
            $cardColor = $task['task_type'] == 'required' ? 'danger' : 'success';
        ?>
    <div class="row">
        <div class="col mt-2">
            <div class="card border-left-<?php echo($cardColor); ?> shadow h-100 py-2">
                <div class="card-body">
                 <!--    <h6><strong>Opening : (6:00 -9:30 AM) </strong></h6> -->
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-md font-weight-bold text-<?php echo($cardColor); ?> mb-1">
                                <a data-toggle="collapse" href="#task<?php echo($task['id']); ?>" role="button" aria-expanded="false" aria-controls="task<?php echo($task['id']); ?>"><?php echo $task['task_name']; ?></a>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="collapse" id="task<?php echo($task['id']); ?>">
                                          <div class="card card-body">
                                                <?php echo $task['task_desc']; ?>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                              <a class="btn btn-<?php echo($cardColor); ?>" href="#" data-toggle="modal" data-target="#upload<?php echo($task['id']) ?>" ><i class="fa fa-upload"></i> <span>Upload</span></a>
                           <!-- Modal -->
                                <div class="modal fade" id="upload<?php echo($task['id']) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Upload ( <?php echo($task['task_name']) ?> ) Image Report</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">

                                        <div class="custom-file">
                                           <input id="logo" type="file" class="custom-file-input" id="reportImage<?php echo($task['id']) ?>">
                                           <label for="logo" class="custom-file-label text-truncate">Choose file...</label>
                                        </div>


                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Upload</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                        <!-- end of modal -->
                    </div>
                </div>
            </div>  
        </div>
    </div>
          <?php } ?>

    <div class="row">
        <div class="col text-center mt-3 back">
            <a href="/dashboard/" class="btn btn-secondary btn-circle btn-lg">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
        </div>
    </div>
</div>



<script type="text/javascript">
    
</script>