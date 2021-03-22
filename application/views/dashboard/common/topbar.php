  <!-- Main Content -->
        <!-- Topbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
              <img class="navbar-brand" src="../../../assets/img/logos/silver.png" href="#" style="width:50px" />   
              <span>Silver Reef Dive Resort</span>
        </a>
        
         
            <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> -->

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                   <!--  <li class="nav-item active">
                        <a class="nav-link" href="#"><span class="sr-only">(current)</span></a>
                    </li> -->
                  <!--   <li class="nav-item">
                        <a class="nav-link active" href="#">Employees</a>
                    </li> -->
                 <!--    <li class="nav-item">
                        <a class="nav-link" href="#">Calendar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Schedules</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Checklist</a>
                    </li> -->
                </ul>

                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                   <!--  <li>
                        <a href="#" class="btn btn-success btn-circle .btn-sm" id="add_dropdown" data-toggle="modal" data-target="#add_employee">
                            <i class="fas fa-plus"></i>
                        </a>
                    </li> -->

                    <!-- Nav Item - User Information -->
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Ian Reil Canto</span>
                            <!-- <img class="img-profile rounded-circle" src=""> -->
                        </a>
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                          <!--   <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                My Profile
                            </a> -->
                            <!-- <div class="dropdown-divider"></div> -->
                            <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>
                    </li>

                </ul>


            </div>
        </nav>
        <!-- End of Topbar -->

        <!-- Modal --->
        <div class="modal fade" id="add_employee" tabindex="-1" role="dialog" aria-labelledby="add_employee" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="add_employee">Add Employee</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
                </div>
            </div>
        </div>

