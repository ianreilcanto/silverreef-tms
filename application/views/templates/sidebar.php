<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-code"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SRDR</div>
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
                    <a class="collapse-item" href="/admin/employeeSchedule">Employee Schedules</a>
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
                    <a class="collapse-item" href="#">View Checklist</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#departmentMenu"
                aria-expanded="true" aria-controls="departmentMenu">
                <i class="fas fa-fw fa-building"></i>
                <span>Department</span>
            </a>
            <div id="departmentMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Department Management:</h6>
                    <a class="collapse-item" href="/admin/department">Manage</a>
                </div>
            </div>
        </li>

         <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#scheduleMenu"
                aria-expanded="true" aria-controls="scheduleMenu">
                <i class="fas fa-fw fa-calendar-check"></i>
                <span>Schedules</span>
            </a>
            <div id="scheduleMenu" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Schedule Management:</h6>
                   <!--  <a class="collapse-item" href="#">Schedule Type</a> -->
                    <a class="collapse-item" href="/admin/schedule">Manage</a>
                </div>
            </div>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
 
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url('auth/logout'); ?>">
                <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

</ul>
<!-- End of Sidebar -->