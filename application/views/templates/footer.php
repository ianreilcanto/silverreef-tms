
</div>
<!-- End of Content Wrapper -->


<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Silver Reef Dive Resort <?= date('Y'); ?></span>
        </div>
    </div>
</footer>
<!-- End of Footer -->
</div>
<!-- End of Page Wrapper -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-file-upload/4.0.11/jquery.uploadfile.min.js" integrity="sha512-uwNlWrX8+f31dKuSezJIHdwlROJWNkP6URRf+FSWkxSgrGRuiAreWzJLA2IpyRH9lN2H67IP5H4CxBcAshYGNw==" crossorigin="anonymous"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<script src="//cdn.ckeditor.com/4.15.1/basic/ckeditor.js"></script>


<!-- new script added Paul John  -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="<?= base_url('assets/'); ?>js/scripts.js"></script>
<script src="<?= base_url('assets/'); ?>js/employee.js"></script>
<script src="<?= base_url('assets/'); ?>js/checklist.js"></script>
<script src="<?= base_url('assets/'); ?>js/task.js"></script>

<script type="text/javascript" src="https://cdn.datatables.net/v/bs4-4.1.1/dt-1.10.24/datatables.min.js"></script>


<script>

    // start show and hide script added Paul John
$(function(){

$("#employee-department").on("change",function(){

    $selectValue = $(this).val();

    if($selectValue ==2)
        $("#checklist-station-div").show();
    else
        $("#checklist-station-div").hide();

});
});

$(function(){


$("#learning").on("change",function(){

$selectType = $(this).val();	

if($selectType ==1){
    $("#videolink-div").show();
    $("#upload-div").hide();
    $("#price-div").hide();
}else if($selectType==2){
    $("#upload-div").show();
    $("#videolink-div").hide();
    $("#price-div").hide();
}else if($selectType==3){
    $("#price-div").show();
    $("#videolink-div").hide();
    $("#upload-div").hide();
}else{
    $("#videolink-div").hide();
    $("#upload-div").hide();
    $("#price-div").hide();
}

});

});

$(document).ready(function() {
    $('#example').DataTable();
} );

// end show and hide script added Paul John
</script>

</body>

</html>