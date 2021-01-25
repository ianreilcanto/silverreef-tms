<div class="container">

         <br>
            <div class="row">
                <div class="col text-center">
                    <h1>My Task</h1>
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
                                <a data-toggle="collapse" href="#task<?php echo($task['id']); ?>" role="button" aria-expanded="false" aria-controls="task<?php echo($task['id']); ?>"><?php echo $task['name']; ?></a>
                            </div>
                            <div class="row no-gutters align-items-center">
                                <div class="col">
                                    <div class="collapse" id="task<?php echo($task['id']); ?>">
                                          <div class="card card-body">
                                                <?php echo $task['description']; ?>
                                          </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                               <div style="color:red" id="countdown"></div>
                            <!-- <i class="fas fa-clipboard-list fa-2x text-gray-300"></i> -->
                        </div>
                    </div>
                </div>
            </div>  
        </div>

        <script type="text/javascript">

            let templateButton = `<a class="btn btn-<?php echo($cardColor); ?>" href="#"><i class="fa fa-tasks"></i> <span>Done Task</span></a>`;
            
            var timeleft = <?php echo $task['sec']; ?>;
            var downloadTimer = setInterval(function(){
              if(timeleft <= 0){
                clearInterval(downloadTimer);
                document.getElementById("countdown").innerHTML = templateButton

                $('.back').show();

              } else {
                document.getElementById("countdown").innerHTML = timeleft + " seconds";
              }
              timeleft -= 1;
              console.log('asd');
            }, 1000);

        </script>

        </div>
          <?php } ?>

    <div class="row">
        <div class="col text-center mt-3 back" style="display: none">
            <a href="/dashboard/" class="btn btn-secondary btn-circle btn-lg">
                                        <i class="fas fa-arrow-left"></i>
                                    </a>
        </div>
    </div>
</div>

