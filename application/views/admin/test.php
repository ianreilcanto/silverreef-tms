<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>



<body class="colorbody">


<style>
                .colorbg { background-color: #19d3da; }
                .colorcardRed { background-color: #f05454;}
                .colorcardGreen { background-color: #16c79a;}
                .colorbody { background-color: #f6f5f5;}
</style>

<!-- stat container -->
<div class="container">

        <br>
        <div class="row">
            <div class="col-3">
                <h4>
                    <span class="badge text-light  colorcardGreen text-uppercase font-weight-light">30</span>
                </h4>
            </div>
            <div class="col-9"> 
                <div class="col text-right">
                    <h3>
                        <span class="badge text-light  colorcardGreen text-uppercase font-weight-light">My Task</span>
                    </h3>
                </div>
            </div>
        </div> 
        <br>
    <!-- start card -->
    <div class="card "  style="">
             
                    <img class="card-img-top" src="https://dummyimage.com/600x400/000/fff" alt="Card image cap"></img>
            
                    <div class="card-body text-center colorcardGreen">
                        <h5 class="card-title text-light font-weight-light">Making Coffee</h5>    
                    </div>


                    <ul class="list mt-3">
                        
                        <li class="list-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check1" >
                                    <label class="custom-control-label font-weight-normal " for="check1">
                                        Check your ground coffee bean (BOLD) which
                                        evening shift had already prepped.
                                    </label>
                            </div>
                        </li>

                        <li class="list-group">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check2" >
                                    <label class="custom-control-label font-weight-normal" for="check2">
                                        Make sure on making coffee is in standard
                                        procedure according to its product card.
                                    </label>
                            </div>
                        </li>
                        <li class="list-group">
                            <div class=" custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="check3" >
                                    <label class="custom-control-label font-weight-normal" for="check3">
                                        Make sure the equipment all clean and in good
                                        working condition.
                                    </label>
                            </div>
                        </li>
                    </ul>
            
    </div>
    <!-- end card -->
    <br>
    <div class="row">
       <div class="col text-center">
        <a class="btn colorcardGreen btn-lg text-light" href="#">
                Done
            </a>
       </div>
    </div>


</div> 
<!-- end of container -->
    









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>