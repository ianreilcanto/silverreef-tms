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
                .colorBlue { background-color: #01a9b4;}
                .colorGrey { background-color: #6c7b95;}
                .colorbody { background-color: #e4e4e4;}
                .colorlightGrey { background-color: #797a7e;}
</style>

<!-- stat container -->
<div class="container">


    <div class="input-group mb-3 mt-5">
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

    <div class="input-group mb-3 mt-4">
        <div class="input-group-prepend">
            <label class="input-group-text border-0 colorlightGrey text-light font-weight-normal" for="employeeID">Employee</label>
        </div>
        <select class="custom-select border-0" id="employeeID">
            <option selected>Select</option>
            <option value="1">Paul John</option>
            <option value="2">Ian</option>
            <option value="3">James</option>
        </select>
    </div>

   
    <div class="form-group">
        <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
             <input type="text" class="form-control datetimepicker-input border-0" data-target="#datetimepicker1" />
          <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                <div class="input-group-text colorcardRed border-0"> <i class="fa fa-calendar text-light "></i>
                </div>
          </div>
        </div>
    </div>

    <div class="input-group">
            <div class="custom-file ">
                <input type="file" class="custom-file-input colorlightGrey " id="upload">
                <label class="custom-file-label border-0  " for="upload">Choose file</label>
            </div>
            <div class="input-group-append">
                <button class="btn btn-outline colorcardRed text-light border-0" type="button">Upload</button>
            </div>
    </div>


    <div class="input-group mt-3">
            <div class="input-group-prepend">
                <span class="input-group"></span>
            </div>
                <textarea class="form-control border-0" rows="6"  aria-label="With textarea"></textarea>
    </div>
        
    <div class="col mt-3 text-center">

              <button type="button" class="btn colorcardGreen  text-light font-weight-normal">Create</button>

    </div>
    

  

</div>
<!-- end of container -->
    



  
  


 



<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>