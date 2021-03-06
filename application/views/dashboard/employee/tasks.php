<div class="container">

        <style type="text/css">
            .colorbg { background-color: #19d3da; }
            .colorcardRed { background-color: #f05454;}
            .colorcardGreen { background-color: #16c79a;}
            .colorbody { background-color: #f6f5f5;}

        </style>

         <!-- <br>
            <div class="row">
                <div class="col text-center">
                    <h1>My Task</h1>
                </div>
            </div>
        <br> -->
        <?php foreach ($tasks as $task) {
            $cardColor = $task['task_type'] == 'required' ? 'colorcardRed' : 'colorcardGreen';
        ?>
        

        <br>
        <div class="row">
            <div class="col-12 text-center">
                <h1>
                <span class="text-uppercase font-weight-light">My Task</span>
                </h1>
            </div>
            <div class="col-12 text-center"> 
                    <h3>
                       
                        <span class="badge text-light  <?php echo $cardColor; ?>  btn-circle btn-lg font-weight-lg" id="countdown" >0</span>
                    </h3>
            </div>
        </div> 
        <br>

        <div class="card ">
             
            <img class="card-img-top" src="../../assets/img/<?php echo $task['img_path']; ?>" alt="Card image cap"></img>
    
            <div class="card-body text-center <?php echo $cardColor; ?>">
                <h5 class="card-title text-light font-weight-light"><?php echo $task['name']; ?></h5>    
            </div>


            <div class="card card-body">
                <?php echo $task['description']; ?>

                <div class="col-12 text-center">
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn <?php echo $cardColor; ?>">
                            <input type="checkbox" name="isDone" id="isDone" autocomplete="off">
                        </label>
                    </div>
                </div>

            </div>
    
        </div>
        <br>
        <div class="row back" style="display:none">
            <div class="col text-center">
             <a class="btn colorcardGreen btn-lg text-light" href="/dashboard/">
                     Done
                 </a>
            </div>
         </div>

        <script type="text/javascript">

            // let templateButton = `<a class="btn btn-<?php echo($cardColor); ?>" href="#"><i class="fa fa-tasks"></i> <span>Done Task</span></a>`;
            
            var timeleft = <?php echo $task['sec']; ?>;
            var downloadTimer = setInterval(function(){
              if(timeleft <= 0){
                document.getElementById("countdown").innerHTML = timeleft + "";
                clearInterval(downloadTimer);
                // document.getElementById("countdown").innerHTML = templateButton
                document.getElementById("isDone").checked = true;
                $('.back').show();

              } else {
                document.getElementById("countdown").innerHTML = timeleft + "";
              }
              timeleft -= 1;
              console.log('asd');
            }, 1000);

        </script>

      
          <?php } ?>

</div>

