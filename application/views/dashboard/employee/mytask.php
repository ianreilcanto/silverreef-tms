<style type="text/css">
    .colorbg { background-color: #19d3da; }
    .colorcardRed { background-color: #f05454;}
    .colorcardGreen { background-color: #16c79a;}
    .colorbody { background-color: #f6f5f5;}
    .colorGrey { background-color: #6c7b95;}

</style>

<div class="container">

         <br>
            <div class="row">
                <div class="col text-center">
                    <h1>My Accomplished Task </h1>
                </div>
            </div>
        <br>
        <?php foreach ($tasks as $task) {
            $cardColor = $task['task_type'] == 'required' ? 'success' : 'success';

            $hasImage = $task['img_path'] ? true : false; 
        ?>
        <?php //echo($cardColor); ?> 
        <div class="row colorcardGreen rounded mt-2" >

          <div class="col-6 mt-2">
              <span class="badge badge-light p-1"><?php echo $task['schedule_type']; ?></span>
          </div>

          <div class="col-6 text-right mt-2 ">

                    <a class="btn btn-light btn-sm" data-toggle="modal" data-target="#imageModal<?php echo($task['id']) ?>" style="display: <?php echo $hasImage ? '' : 'none'; ?>"> 
                            <i class="fa fa-eye" aria-hidden="true"></i> <span></span>
                    </a> 
                    <a class="btn btn-light btn-sm" data-toggle="modal" data-target="#upload<?php echo($task['id']) ?>" style="display:  <?php echo $hasImage ? 'none' : ''; ?>" > 
                        <i class="fa fa-upload" aria-hidden="true"></i> <span></span>
                    </a> 
                      
          </div> 
          <div class="col-12">
              <a class="text-light" data-toggle="collapse" href="#task<?php echo($task['id']); ?>" role="button" aria-expanded="false" aria-controls="task<?php echo($task['id']); ?>"> 
                  <h5><?php echo $task['task_name']; ?>(Sec)</h5>
              </a>
          </div>
          <div class="col-12 collapse bg-light pt-2" id="task<?php echo($task['id']); ?>">
                  <?php echo $task['task_desc']; ?>
          </div>
      </div>

      <div class="col-auto">
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
                
                <form class="upload-emplyeeTask-image" method="post" enctype="multipart/form-data">
                    <div class="custom-file">
                       
                            <input type="hidden" id="task_id" value="<?php echo($task['id']) ?>" >
                            <input type="file" class="custom-file-input employee-upload-image" name="reportImage<?php echo($task['id']) ?>" id="reportImage<?php echo($task['id']) ?>">
                            <label for="logo" class="custom-file-label text-truncate employee-upload-label">Choose file...</label>
                       
                    </div>


                  </div>
                  <div class="modal-footer">
                        <div class="alert alert-danger report-image-alert" role="alert" style="display: none;">
                            <strong>Image is Outdated</strong>
                        </div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary mytask-upload">Upload</button>
                  </div>
                </form>
                </div>
              </div>
          </div>
    </div>

    <div class="modal fade" id="imageModal<?php echo($task['id']) ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div style="margin-top:20%" class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="../../assets/img<?php echo $task['img_path']; ?>" alt="" style="width:100%">
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
