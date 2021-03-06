<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <!-- <i class="fas fa-code"></i> -->
            <img src="/assets/img/logos/silver.png" width="50" height="50" alt="">
        </div>
        <div class="sidebar-brand-text mx-3 font-weight-normal">SRDR</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider">

        <li class="nav-item">
        <a class="nav-link" href="/admin">
            <i class="fas fa-fw fa-home"></i>
            <span>Dashboard</span></a>
        </li>


        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#emplyeeMenu"
                aria-expanded="true" aria-controls="emplyeeMenu">
                <i class="fas fa-fw fa-address-book"></i>
                <span>Employee</span>
            </a>
            <div id="emplyeeMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Employee Management:</h6>
                    <a class="collapse-item" href="/admin/employee">Manage</a>
                </div>
            </div>
        </li>

         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#checklistMenu"
                aria-expanded="true" aria-controls="checklistMenu">
                <i class="fas fa-fw fa-check-square"></i>
                <span>Checklist</span>
            </a>
            <div id="checklistMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Checklist Management:</h6>
                    <a class="collapse-item" href="/admin/checklist">Manage</a>
                    <a class="collapse-item" href="/admin/editChecklist">View and Update</a>
                </div>
            </div>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#addLearning"
                aria-expanded="true" aria-controls="addLearning">
                <i class="fas fa-fw fa-check-square"></i>
                <span>Learning</span>
            </a>
            <div id="addLearning" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Learning Management:</h6>
                    <a class="collapse-item" href="/admin/addLearning">Add</a>
                    <a class="collapse-item" href="/admin/updateLearning">Update</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#reportMenu"
                aria-expanded="true" aria-controls="reportMenu">
                <i class="fas fa-fw fa-check-square"></i>
                <span>Reports</span>
            </a>
            <div id="reportMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Reports:</h6>
                    <a class="collapse-item" href="/admin/reportDaily">Daily Report</a>
                    <a class="collapse-item" href="/admin/reportWeekly">Weekly Report</a>
                    <a class="collapse-item" href="/admin/reportMonthly">Monthly Report</a>
                </div>
            </div>
        </li>

 
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->