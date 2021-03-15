<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>Document</title>


        <style type="text/css">
            .colorbg { background-color: #19d3da; }
            .colorcardRed { background-color: #f05454;}
            .colorcardGreen { background-color: #16c79a;}
            .colorbody { background-color: #f6f5f5;}
            .colorGrey { background-color: #6c7b95;}

        </style>

</head>

<body>
    
<!-- start container -->
<div class="container">

        
            <div class="col text-center" style="margin-top:30%"> 
                     <h1>
                       
                     <span class="text-secondary text-lg font-weight-normal">1:00:00 PM</span>
                    </h1>
            </div>
       
    
            <!-- Button trigger modal -->
             <div class="col text-center" style="margin-top:30%"> 
                     <button type="button" class="btn colorcardGreen text-light font-weight-normal border-0" data-toggle="modal" data-target="#end">End</button>
             </div>


             <!-- modal -->
                <div class="modal fade" id="end" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div style="margin-top:20%" class="modal-dialog " role="document">
                            <div class="modal-content">
                                    <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                    </div>
                                        <div class="modal-body ">
                                            <div class="col">
                                                <h4 >
                                                    <span class="text-secondary text-lg font-weight-normal" >  
                                                        OS Total:
                                                    </span>
                                                </h4>
                                              
                                            </div>
                                            <div class="col">
                                                <h4>
                                                    <span class="text-secondary text-lg font-weight-normal" >  
                                                        OS Number:
                                                    </span>
                                                </h4>
                                                
                                            </div>
                                                
                                        </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn colorcardGreen text-light font-weight-normal border-0" data-dismiss="modal">Close</button>
                                        
                                    </div>
                            </div>
                       </div>
                </div>
                <!-- end modal -->










</div>
<!-- end container -->
















    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>