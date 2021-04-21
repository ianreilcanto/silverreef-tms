<!DOCTYPE html>
<html lang="en">
        
        <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
        
        <title>Document</title>

        </head>

        <body class="colorbody">

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
                                                <h3> <span class="badge colorlightGrey text-light font-weight-normal">Task</span></h3> 
                                        </div>
                                            <div class="row">
                                                    <div class="col mb-3 ">
                                                        <a class="btn btn-sm border-0 font-weight-normal text-light colorcardRed" href="/admin/editParent">Edit Parent Checklist</a>
                                                    </div>   
                                                    <div class="col mb-3 ">
                                                        <!-- <a class="btn btn-sm border-0 font-weight-normal text-light colorcardGreen">Edit Parent</a> -->
                                                    </div>
                                            </div>
                                        

                        <!-- start form -->
                        <form id="task-form" class="" action="/action_page.php">

                                            
                                    

                                             
                                           <!-- start col for the title -->
                                   
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend">
                                                                        <label class="input-group-text border-0 colorlightGrey text-light font-weight-normal" for="checklist-type">Task Type</label>
                                                        </div>
                                                        <select class="custom-select border-0" name="checklist-task-taskType" id="checklist-task-taskType">
                                                                <option selected="">Choose...</option>
                                                                <option value="required">Required</option>
                                                                <option value="recommended">Recommended</option>
                                                        </select>
                                                </div>  
                                                <!-- end col div title -->
                                                <div class="input-group mb-3">
                                                        <div class="input-group-prepend ">
                                                                <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal">Title</label>
                                                        </div>
                                                                <input type="text" class="form-control border-0" id="title" placeholder="Enter Task Name" >
                                                </div>

                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend ">
                                                                 <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal">Time</label>
                                                    </div>
                                                            <input type="text" class="form-control border-0" id="title" placeholder="How many seconds?" >
                                                </div>

                                                    <div class="input-group mb-3" id="upload-div" style="">
                                                        <div class="custom-file ">
                                                                <input type="file" class="custom-file-input colorlightGrey " id="upload">
                                                                <label class="custom-file-label border-0  " for="upload">Choose file</label>
                                                        </div>
                                                        <div class="input-group-append">
                                                                <button class="btn btn-outline colorcardRed text-light border-0" type="button">Upload</button>
                                                        </div>
                                                    </div>

                                                    <div class="form-check mb-3">
                                                        <input type="checkbox" class="form-check-input" id="isRepairable">
                                                        <label class="form-check-label" for="isRepairable">Repairable</label>
								                	</div>
                                                    
                                                    <div class="input-group mt-3">
                                                            <div class="input-group-prepend">
                                                                    <span class="input-group"></span>
                                                            </div>
                                                                    <textarea class="form-control border-0 rounded" rows="6"  aria-label="With textarea" placeholder="Description" ></textarea>
                                                    </div>  
							
                                            <div class="row">
                                                <div class="col-4 text-left mt-3">
                                                    <a class="btn colorlightGrey text-light font-weight-norma px-4" href="/admin/editChecklist">Back</a>
                                                </div>
                                                <div class="col-4 text-center mt-3">
                                                    <button id="add-task" type="submit" class="btn colorcardGreen text-light font-weight-normal px-4">Update</button>
                                                </div>
                                                <div class="col-4 text-left mt-3">
                                                    
                                                </div>
                                            </div>
                                        
                        
                        </form>
                        <!-- end form -->
                </div>         
                <!-- end of container -->
        

                <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
                <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

               
                <script>

                        

                        $(function(){

                                $("#employee-department").on("change",function(){

                                        $selectValue = $(this).val();

                                        if($selectValue ==2)
                                                $("#checklist-station-div").show();
                                        else
                                                $("#checklist-station-div").hide();

                                });
                        });



                </script>



<!-- changes commit 123-->



        </body>
</html>