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
                                                <h3> <span class="badge colorlightGrey text-light font-weight-normal">Parent Checklist</span></h3> 
                                        </div>
                                           

                            <!-- start form -->
                            <form id="checklist-edit" class="mt-5 mb-5" action="/action_page.php">


                            <!-- start row -->
                            <div class="row mt-5">
                                
                                <div class="col">

                                            <!-- start for the department div-->
                                                <div class="form-group">
                                                        <div class="input-group mb-3">
                                                                <div class="input-group-prepend ">
                                                                        <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="employee-department">Department</label>
                                                                </div>
                                                                <select class="custom-select border-0" id="employee-department">
                                                                        <option value="0" selected="">Select</option>
                                        
                                                                                <option value="1">FO</option>

                                                                                <option value="2">F&amp;B</option>

                                                                                <option value="3">Landscaping</option>

                                                                </select>
                                                        </div>
                                                </div>
                                            <!-- end for the department div-->

                                            <!-- start this will show if department has station -->
                                        <div class="input-group mb-3" id="checklist-station-div" style="display:none">
                                            <div class="input-group-prepend">
                                                    <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="checklist-station">Station</label>
                                            </div>
                                            <select class="custom-select border-0" id="checklist-station">
                                            
                                            <option value="0">Choose...</option><option value="1"> Bungee Bar </option><option value="2"> BrewBox </option><option value="3"> Scootshack </option><option value="4"> Working Personel </option></select>
                                        </div>
                                            <!-- end this will show if department has station -->
                                        
                                        <!-- start checklist -->
                                        <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                                <label class="input-group-text  border-0  colorlightGrey text-light font-weight-normal" for="checklist-type">Checklist Type</label>
                                        </div>
                                        <select class="custom-select border-0" id="checklist-type">
                                                <option selected="">Choose...</option>
                                                <option value="daily">Daily</option>
                                                <option value="weekly">Weekly</option>
                                                <option value="monthly">Monthly</option>
                                        </select>
                                        </div>
                                        <!-- end checklist -->

                                        <!-- start schedule type -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                    <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal" for="checklist-sched-type">Schedule Type</label>
                                            </div>
                                            <select class="custom-select border-0" id="checklist-sched-type">
                                                    <option selected="">Choose...</option>
                                                    <option value="1">Opening</option>
                                                    <option value="2">Mid</option>
                                                    <option value="3">Closing</option>
                                            </select>
                                        </div>
                                        <!-- end schedule type -->
                                            
                                                <div class="input-group mb-3">
                                                    <div class="input-group-prepend ">
                                                                 <label class="input-group-text border-0  colorlightGrey text-light font-weight-normal">Checklist Name</label>
                                                    </div>
                                                            <input type="text" class="form-control border-0" id="title" placeholder="Checklist Name">
                                                </div>
                                                <div class="form-check mb-3">
                                                    <input type="checkbox" class="form-check-input" id="isGeneral">
                                                    <label class="form-check-label" for="isGeneral">General</label>
								            	</div>

                                                

                                                <div class="row">
                                                <div class="col-4 text-left mt-3">
                                                    <a class="btn colorlightGrey text-light font-weight-norma px-4" href="/admin/addTask">Back</a>
                                                </div>
                                                <div class="col-4 text-center mt-3">
                                                    <button id="add-task" type="submit" class="btn colorcardGreen text-light font-weight-normal px-4">Update</button>
                                                </div>
                                                <div class="col-4 text-left mt-3">
                                                    
                                                </div>
                                            </div>
                                            
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

        </body>
</html>