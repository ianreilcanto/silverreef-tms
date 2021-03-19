<!-- Footer -->
<footer class="sticky-footer bg-light footer">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; SOS.NET <?= date('Y'); ?>-22.Exclusive Program For Silver Reef Dive Resort</span>
            
              
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper  -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="<?= base_url('auth/logout'); ?>">Logout</a>
            </div>
        </div>
    </div>
</div>




<!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

<!-- <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script> -->

<script src="<?= base_url('assets/'); ?>js/dashboard/checklist.js"></script>

        <script>
            $("#isDone").click(function(){
                console.log('');
               if(this.checked){
                    $('.back').show();
               }else
               {
                    $('.back').hide();
               }
            });

            $('.upload-emplyeeTask-image').on('submit',function(e) {

                e.preventDefault();
             
                   var formvalues = $(this);



                 $uploadData = imageUploadValidator(formvalues);
                 //var file_data =  $('#reportImage'+$uploadData.id).prop('files')[0];  
                 var file_data =  $('#reportImage'+$uploadData.id).prop('files')[0];  

              
                 var form_data = new FormData(this);    

             
                 form_data.append('uploadData', JSON.stringify($uploadData));

             
                 $.ajax({
                     url: '/EmployeeTask/upload_emplyee_task_image', // point to server-side PHP script 
                   //  dataType: 'text',  // what to expect back from the PHP script, if anything
                     type: 'post',  
                     data:  form_data,  
                     processData:false,
                     contentType:false,
                     cache:false,
                     async:false,       
                     success: function(php_script_response){
                        
                        if(php_script_response = 'success')
                            location.reload();

                     }
                  });
             
             
             });

             $('.employee-upload-image').on('change',function(e){
                //get the file name
                var nowDate = new Date().toDateString();
               var file = e.target.files[0];
               var imageDate = new Date(file.lastModified).toDateString();

               if(imageDate != nowDate){
                    $('.report-image-alert').show();
                    $('.mytask-upload').prop('disabled', true);
               }else{
                    $('.report-image-alert').hide();
                    $('.mytask-upload').prop('disabled', false);
               }
                //check date 
                //replace the "Choose a file" label
                $(this).next('.employee-upload-label').html(file.name);
            })


             function imageUploadValidator(formvalues){

                let upload = { 

                    id : formvalues.find("#task_id").val()
                }


                return upload;


             }


        </script>

</div>
</body>

</html>