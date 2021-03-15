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
            <div class="col text-center" style="margin-top:15%">

                <h1 class="text-secondary font-weight-normals">
                    Serving A Guest
                </h1>          
            </div>
        
            <div class="col text-center" style="margin-top:15%"> 
                     <h1 id="currentTime" class="text-secondary font-weight-normal">
                       
                    </h1>
            </div>
       
    
            <!-- Button trigger modal -->
             <div class="col text-center" style="margin-top:15%"> 
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



<!-- start script -->
<script>

function display_ct() {
        var x = new Date()
        var ampm = x.getHours( ) >= 12 ? ' PM' : ' AM';
            hours = x.getHours( ) % 12;
            hours = hours ? hours : 12;
            hours=hours.toString().length==1? 0+hours.toString() : hours;

        var minutes=x.getMinutes().toString()
            minutes=minutes.length==1 ? 0+minutes : minutes;

        var seconds=x.getSeconds().toString()
            seconds=seconds.length==1 ? 0+seconds : seconds;

        //var month=(x.getMonth() +1).toString();
        //month=month.length==1 ? 0+month : month;  

        var dt=x.getDate().toString();
            dt=dt.length==1 ? 0+dt : dt;

        //var x1= dt + "/" + x.getFullYear(); 
        var x1 =  hours + ":" +  minutes + ":" +  seconds + " " + ampm;
            document.getElementById('currentTime').innerHTML = x1;
            display_time();
                        }   

 function display_time(){

            var refresh=1000; // Refresh rate in milli seconds
            mytime=setTimeout('display_ct()',refresh)

                        }

            // current time display
            display_time()

</script>
<!-- end script -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>