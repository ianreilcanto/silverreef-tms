<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>Reports</title>
</head>



<body class="colorbody">


<style>
                .colorbg { background-color: #19d3da; }
                .colorcardRed { background-color: #f05454;}
                .colorcardGreen { background-color: #16c79a;}
                .colorbody { background-color: #f6f5f5;}
                .colorBlue { background-color: #01a9b4;}
                .colorGrey { background-color: #6c7b95;}
                .colorbody { background-color: #e4e4e4;}
                .colorlightGrey { background-color: #797a7e;}
</style>

<!-- stat container -->
<div class="container">


            <div class="col text-center" style="margin-top:10%">

                        <h3 class="text-secondary font-weight-normal">
                            Reports
                        </h3>          
            </div>

            
            <div class="input-group mt-5">
                    <div class="input-group-prepend">
                        <label class="input-group-text border-0 colorlightGrey text-light font-weight-normal" for="departmentID">Department</label>
                    </div>
                <select class="custom-select border-0" id="departmentID">
                    <option selected>Select</option>
                    <option value="1">FO</option>
                    <option value="2">F&B</option>
                    <option value="3">Landscaping</option>
                </select>
            </div>

             
            <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text border-0 colorlightGrey text-light font-weight-normal" for="departmentID">Station</label>
                    </div>
                <select class="custom-select border-0" id="departmentID">
                    <option selected>Select</option>
                    <option value="1">Bungee Bar</option>
                    <option value="2">BrewBox</option>
                    <option value="3">Scootshack</option>
                    <option value="4">Working Personel</option>
                    
                </select>
            </div>

            <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text border-0 colorlightGrey text-light font-weight-normal" for="departmentID">Schedule Type</label>
                    </div>
                <select class="custom-select border-0" id="departmentID">
                    <option selected>Select</option>
                    <option value="1">Opening</option>
                    <option value="2">Mid</option>
                    <option value="3">Closing</option>
                   
                    
                </select>
            </div>

            <div class="input-group mt-3">
                    <div class="input-group-prepend">
                        <label class="input-group-text border-0 colorlightGrey text-light font-weight-normal" for="departmentID">Checklist Type</label>
                    </div>
                <select class="custom-select border-0" id="departmentID">
                    <option selected>Select</option>
                    <option value="1">Daily</option>
                    <option value="2">Weekly</option>
                    <option value="3">Monthly</option>
                   
                    
                </select>
            </div>

                        
                        
                <div class="row">
                        <div class="col 8">
                            <div class="progress mt-3">
                                    <div class="progress-bar colorcardGreen" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    25%
                                    </div>
                            </div>
                        </div>
                        <div class="col 4 text-center mt-2 text-secondary font-weight-normal">
                            12/12
                        </div>
                </div>
                       
                
            <div class="row mt-4">


                    <div class="col 4">
                        <h5 class="text-center text-secondary font-weight-normal">
                           Task
                        </h5>  
                    </div>
                    <div class="col 4 ">
                        <h5 class="text-center text-secondary font-weight-normal">
                            Accomplisher
                        </h5>
                    </div>
                    <div class="col 4">
                        <h5 class="text-center text-secondary font-weight-normal">
                            View
                        </h5>
                    </div>
            </div>


<!-- loop here -->
            <div class="row">

                     <div class="col 4">
                         <a class="text-info font-weight-normal" data-toggle="collapse" href="#collapseExample1" role="button" aria-expanded="false" aria-controls="collapseExample">
                               <h6 class="text-center">
                               Making Coffees
                               </h6> 
                        </a>   
                    
                    </div>
                    
                    <div class="col 4">
                        <h6 class="text-center text-secondary font-weight-normal mt-1">
                            Ian
                        </h6>
                      
                    </div>
                    
                    <div class="col 4 text-center">
                        
                           
                                <a class="btn colorcardGreen text-light btn-sm " data-toggle="modal" data-target="#view1"> 
                                    <span class="">
                                        <i class="fa fa-eye" aria-hidden="true"></i> 
                                    </span>
                                        
                                </a> 
                        
                    </div>

                    
            </div>
            <div class="col 12 px-0 py-2">

                    <div class="collapse" id="collapseExample1">
                        <div class="card card-body text-secondary font-weight-normal">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                        </div>
                    </div>
            </div>
           

                 
       


               
                <!-- Modal -->
                <div class="modal fade" id="view1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-secondary font-weight-normal" id="exampleModalLongTitle">View Task</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            
                                           <div class="modal-body">
                                                    <div class="card" style="">
                                                            <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap">
                                                    
                                                            <div class="card-body">
                                                                
                                                                <p class="card-text text-secondary font-weight-normal">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                            
                                                            </div>
                                                    </div>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn colorcardGreen text-light font-weight-normal" data-dismiss="modal">Close</button>
                                                
                                            </div>
                                </div>
                        </div>
                </div>
    
<!-- end loop -->


<!-- this is a test -->

</div>
<!-- end of container -->
    



  
  


 



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>