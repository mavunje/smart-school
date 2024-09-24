<!-- ======= Sidebar ======= -->
<style>
    a {
        text-decoration: none
    }
</style>


<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">
        {{-- GIVING PERMISSION TO ACCESS SOME LINKS AND NOT TO ACCESS SOME LINKS --}}
        @php
            $permissionDashboard = App\Models\PermissionRoleModel::getPermission('Dashboard', Auth::user()->role_id);
            $permissionUser = App\Models\PermissionRoleModel::getPermission('User', Auth::user()->role_id);
            $permissionRole = App\Models\PermissionRoleModel::getPermission('Role', Auth::user()->role_id);
            $permissionCategory = App\Models\PermissionRoleModel::getPermission('Category', Auth::user()->role_id);
            $permissionSubcategory = App\Models\PermissionRoleModel::getPermission(
                'Sub category',
                Auth::user()->role_id,
            );
            $permissionProduct = App\Models\PermissionRoleModel::getPermission('Product', Auth::user()->role_id);
            $permissionSettings = App\Models\PermissionRoleModel::getPermission('Settings', Auth::user()->role_id);

            $permissionManageteachers = App\Models\PermissionRoleModel::getPermission(
                'Manage teachers',
                Auth::user()->role_id,
            );

            $permissionManagestudents = App\Models\PermissionRoleModel::getPermission(
                'Manage students',
                Auth::user()->role_id,
            );

            $permissionTeacher = App\Models\PermissionRoleModel::getPermission('Teacher', Auth::user()->role_id);
            $permissionStudent = App\Models\PermissionRoleModel::getPermission('Student', Auth::user()->role_id);
            $permissionParent = App\Models\PermissionRoleModel::getPermission('Parent', Auth::user()->role_id);

            $permissionAdmission = App\Models\PermissionRoleModel::getPermission('Admission', Auth::user()->role_id);
            $permissionTransport = App\Models\PermissionRoleModel::getPermission('Transport', Auth::user()->role_id);
            $permissionAccounts = App\Models\PermissionRoleModel::getPermission('Accounts', Auth::user()->role_id);
            $permissionStore = App\Models\PermissionRoleModel::getPermission('Store', Auth::user()->role_id);
            $permissionAcademics = App\Models\PermissionRoleModel::getPermission('Academics', Auth::user()->role_id);

            $permissionRights = App\Models\PermissionRoleModel::getPermission('Human rights', Auth::user()->role_id);
            $permissionGender = App\Models\PermissionRoleModel::getPermission(
                'Gender management',
                Auth::user()->role_id,
            );
            $permissionResource = App\Models\PermissionRoleModel::getPermission(
                'Human resource',
                Auth::user()->role_id,
            );
            $permissionSports = App\Models\PermissionRoleModel::getPermission('Sports', Auth::user()->role_id);
            $permissionProfile = App\Models\PermissionRoleModel::getPermission('Profile', Auth::user()->role_id);
        @endphp



        @if (!empty($permissionDashboard))
            <li class="nav-item">
                <a class="nav-link
                 @if (Request::segment(2) != 'dashboard') collapsed @endif"
                    href="{{ url('pannel/dashboard') }}">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li>
        @endif
        <!-- End Dashboard Nav -->

        @if (!empty($permissionAdmission))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'admission') collapsed @endif" data-bs-target="#forms-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-journal-text"></i><span>Admission</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('students') }}">
                            <i class="bi bi-circle"></i><span>Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('applicants') }}">
                            <i class="bi bi-circle"></i><span>Applications</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-editors.html">
                            <i class="bi bi-circle"></i><span>Interviews</span>
                        </a>
                    </li>
                    <li>
                        <a href="forms-validation.html">
                            <i class="bi bi-circle"></i><span>More Informations</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        <!-- End Forms Nav -->


        @if (!empty($permissionAcademics))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'academics') collapsed @endif" data-bs-target="#tables-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Academics</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="tables-general.html">
                            <i class="bi bi-circle"></i><span>Examinatiion Results</span>
                        </a>
                    </li>
                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Attendance</span>
                        </a>
                    </li>

                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Examinations</span>
                        </a>
                    </li>

                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>Subjects</span>
                        </a>
                    </li>

                    <li>
                        <a href="tables-data.html">
                            <i class="bi bi-circle"></i><span>TimeTables</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        @if (!empty($permissionManageteachers))
            <li class="nav-item">
                <a class="nav-link
                 @if (Request::segment(2) != 'setting') collapsed @endif"
                    href="{{ url('teacher') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Manage Teachers</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionManagestudents))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'academics') collapsed @endif" data-bs-target="#student-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Manage Students</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="student-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Add Students</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>View Students</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Examinations</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Subjects</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>TimeTables</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        {{-- PARENTS SECTION --}}

        @if (!empty($permissionParent))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'academics') collapsed @endif" data-bs-target="#parent-section"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Parents</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="parent-section" class="nav-content collapse " data-bs-parent="#parent-section">
                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Fees</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Online Courses</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Class Timetable</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Lesson Plan</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Syllabus Status</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Homework</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Online Exam</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Attendance</span>
                        </a>
                    </li>


                    <a class="nav-link @if (Request::segment(2) != 'store') collapsed @endif"
                        data-bs-target="#exam-section" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Examinations</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="exam-section" class="nav-content collapse " data-bs-parent="#exam-section">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle bi-lg"></i><span>Exam Schedule</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="bi bi-circle bi-lg"></i><span>Exam Result</span>
                            </a>
                        </li>
                    </ul>



                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>NoticeBoard</span>
                        </a>
                    </li>


                    <a class="nav-link @if (Request::segment(2) != 'store') collapsed @endif"
                        data-bs-target="#library-section" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Library</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="library-section" class="nav-content collapse " data-bs-parent="#library-section">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle bi-lg "></i><span>Books</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="bi bi-circle bi-lg"></i><span>Book Issued</span>
                            </a>
                        </li>

                    </ul>


                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Transport routes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Hostel Rooms</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif




        {{-- STUDENT SECTION --}}
        @if (!empty($permissionStudent))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'academics') collapsed @endif"
                    data-bs-target="#student-section" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Students</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="student-section" class="nav-content collapse " data-bs-parent="#student-section">
                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Fees</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Online Courses</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Class Timetable</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Lesson Plan</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Syllabus Status</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Homework</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Online Exam</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Attendance</span>
                        </a>
                    </li>


                    <a class="nav-link @if (Request::segment(2) != 'store') collapsed @endif"
                        data-bs-target="#studentexam-section" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Examinations</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="studentexam-section" class="nav-content collapse " data-bs-parent="#studentexam-section">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle bi-lg"></i><span>Exam Schedule</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="bi bi-circle bi-lg"></i><span>Exam Result</span>
                            </a>
                        </li>
                    </ul>



                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>NoticeBoard</span>
                        </a>
                    </li>


                    <a class="nav-link @if (Request::segment(2) != 'store') collapsed @endif"
                        data-bs-target="#studentlibrary-section" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-bar-chart"></i><span>Library</span><i class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="studentlibrary-section" class="nav-content collapse "
                        data-bs-parent="#studentlibrary-section">
                        <li>
                            <a href="charts-chartjs.html">
                                <i class="bi bi-circle bi-lg "></i><span>Books</span>
                            </a>
                        </li>
                        <li>
                            <a href="charts-apexcharts.html">
                                <i class="bi bi-circle bi-lg"></i><span>Book Issued</span>
                            </a>
                        </li>

                    </ul>


                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Transport routes</span>
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('admin/viewstudent') }}">
                            <i class="bi bi-circle"></i><span>Hostel Rooms</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif

        {{-- //TEACHER SECTION --}}
        @if (!empty($permissionTeacher))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'accounts') collapsed @endif" data-bs-target="#teacher-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Teacher</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="teacher-nav" class="nav-content collapse " data-bs-parent="#teacher-nav">


                    <a class="nav-link @if (Request::segment(2) != 'accounts') collapsed @endif"
                        data-bs-target="#teacherinfo-nav" data-bs-toggle="collapse" href="#">
                        <i class="bi bi-menu-button-wide"></i><span>Student information</span><i
                            class="bi bi-chevron-down ms-auto"></i>
                    </a>
                    <ul id="teacherinfo-nav" class="nav-content collapse " data-bs-parent="#teacherinfo-nav">
                        <li>
                            <a href="components-alerts.html">
                                <i class="bi bi-circle"></i><span>Student Details</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-accordion.html">
                                <i class="bi bi-circle"></i><span>Student Admission</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-badges.html">
                                <i class="bi bi-circle"></i><span>Student Categories</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-breadcrumbs.html">
                                <i class="bi bi-circle"></i><span>Student House</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-buttons.html">
                                <i class="bi bi-circle"></i><span>Stationery EXpenses</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-cards.html">
                                <i class="bi bi-circle"></i><span>Maintenance EXpenses</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-carousel.html">
                                <i class="bi bi-circle"></i><span>Bank Accounts</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-list-group.html">
                                <i class="bi bi-circle"></i><span>Contributions</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-modal.html">
                                <i class="bi bi-circle"></i><span>Other Fees</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-tabs.html">
                                <i class="bi bi-circle"></i><span>NSSF</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-pagination.html">
                                <i class="bi bi-circle"></i><span>SACCOS</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-progress.html">
                                <i class="bi bi-circle"></i><span></span>
                            </a>
                        </li>
                        <li>
                            <a href="components-spinners.html">
                                <i class="bi bi-circle"></i><span>CRDB INFOS</span>
                            </a>
                        </li>
                        <li>
                            <a href="components-tooltips.html">
                                <i class="bi bi-circle"></i><span>NMB INFOS</span>
                            </a>
                        </li>
                    </ul>


                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Student Fees</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Food Expenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-badges.html">
                            <i class="bi bi-circle"></i><span>Transport EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-breadcrumbs.html">
                            <i class="bi bi-circle"></i><span>Salary EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-buttons.html">
                            <i class="bi bi-circle"></i><span>Stationery EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-cards.html">
                            <i class="bi bi-circle"></i><span>Maintenance EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="bi bi-circle"></i><span>Bank Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-list-group.html">
                            <i class="bi bi-circle"></i><span>Contributions</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-modal.html">
                            <i class="bi bi-circle"></i><span>Other Fees</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tabs.html">
                            <i class="bi bi-circle"></i><span>NSSF</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="bi bi-circle"></i><span>SACCOS</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-progress.html">
                            <i class="bi bi-circle"></i><span></span>
                        </a>
                    </li>
                    <li>
                        <a href="components-spinners.html">
                            <i class="bi bi-circle"></i><span>CRDB INFOS</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips.html">
                            <i class="bi bi-circle"></i><span>NMB INFOS</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <!-- End Components Nav -->




        @if (!empty($permissionStore))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'store') collapsed @endif" data-bs-target="#charts-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Store management</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Food In and Out</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>Stationery In and Out</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Assets</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <!-- End Charts Nav -->

        @if (!empty($permissionTransport))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'transport') collapsed @endif" data-bs-target="#icons-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Transport Management</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('pannel/transport') }}">
                            <i class="bi bi-circle"></i><span>Buses Routes</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Fuel Usage</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Maintanence Cost</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif



        <!-- End Tables Nav -->

        @if (!empty($permissionAccounts))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'accounts') collapsed @endif"
                    data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Accounts</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="components-alerts.html">
                            <i class="bi bi-circle"></i><span>Student Fees</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-accordion.html">
                            <i class="bi bi-circle"></i><span>Food Expenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-badges.html">
                            <i class="bi bi-circle"></i><span>Transport EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-breadcrumbs.html">
                            <i class="bi bi-circle"></i><span>Salary EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-buttons.html">
                            <i class="bi bi-circle"></i><span>Stationery EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-cards.html">
                            <i class="bi bi-circle"></i><span>Maintenance EXpenses</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-carousel.html">
                            <i class="bi bi-circle"></i><span>Bank Accounts</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-list-group.html">
                            <i class="bi bi-circle"></i><span>Contributions</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-modal.html">
                            <i class="bi bi-circle"></i><span>Other Fees</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tabs.html">
                            <i class="bi bi-circle"></i><span>NSSF</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-pagination.html">
                            <i class="bi bi-circle"></i><span>SACCOS</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-progress.html">
                            <i class="bi bi-circle"></i><span></span>
                        </a>
                    </li>
                    <li>
                        <a href="components-spinners.html">
                            <i class="bi bi-circle"></i><span>CRDB INFOS</span>
                        </a>
                    </li>
                    <li>
                        <a href="components-tooltips.html">
                            <i class="bi bi-circle"></i><span>NMB INFOS</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <!-- End Components Nav -->




        @if (!empty($permissionStore))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'store') collapsed @endif" data-bs-target="#charts-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bar-chart"></i><span>Store management</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="charts-chartjs.html">
                            <i class="bi bi-circle"></i><span>Food In and Out</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-apexcharts.html">
                            <i class="bi bi-circle"></i><span>Stationery In and Out</span>
                        </a>
                    </li>
                    <li>
                        <a href="charts-echarts.html">
                            <i class="bi bi-circle"></i><span>Assets</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <!-- End Charts Nav -->

        @if (!empty($permissionTransport))
            <li class="nav-item">
                <a class="nav-link @if (Request::segment(2) != 'transport') collapsed @endif" data-bs-target="#icons-nav"
                    data-bs-toggle="collapse" href="#">
                    <i class="bi bi-gem"></i><span>Transport Management</span><i
                        class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="{{ url('pannel/transport') }}">
                            <i class="bi bi-circle"></i><span>Buses Routes</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-remix.html">
                            <i class="bi bi-circle"></i><span>Fuel Usage</span>
                        </a>
                    </li>
                    <li>
                        <a href="icons-boxicons.html">
                            <i class="bi bi-circle"></i><span>Maintanence Cost</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endif
        <!-- End Icons Nav -->

        @if (!empty($permissionProfile))
            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Profile</span>
                </a>
            </li>
        @endif
        <!-- End Profile Page Nav -->
        @if (!empty($permissionUser))
            <li class="nav-item">
                <a class="nav-link
@if (Request::segment(2) != 'user') collapsed @endif"
                    href="{{ url('pannel/user') }}">
                    <i class="bi bi-question-circle"></i>
                    <span>users</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionRole))
            <li class="nav-item">

                <a class="nav-link
         @if (Request::segment(2) != 'role') collapsed @endif"
                    href="{{ url('pannel/role') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Roles</span>
                </a>
            </li>
        @endif



        <li class="nav-item">

            <a class="nav-link
     @if (Request::segment(2) != 'role') collapsed @endif"
                href="{{ url('position') }}">
                <i class="bi bi-envelope"></i>
                <span>Positions Management</span>
            </a>
        </li>



        <li class="nav-item">

            <a class="nav-link
     @if (Request::segment(2) != 'role') collapsed @endif"
                href="{{ url('workers') }}">
                <i class="bi bi-envelope"></i>
                <span>Workers Management</span>
            </a>
        </li>






        @if (!empty($permissionCategory))
            <li class="nav-item">
                <a class="nav-link
         @if (Request::segment(2) != 'category') collapsed @endif"
                    href="{{ url('pannel/category') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Category</span>
                </a>
            </li>
        @endif



        @if (!empty($permissionSubcategory))
            <li class="nav-item">
                <a class="nav-link
         @if (Request::segment(2) != 'subcategory') collapsed @endif"
                    href="{{ url('pannel/subcategory') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Sub category</span>
                </a>
            </li>
        @endif


        @if (!empty($permissionProduct))
            <li class="nav-item">
                <a class="nav-link
         @if (Request::segment(2) != 'product') collapsed @endif"
                    href="{{ url('pannel/product') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Product</span>
                </a>
            </li>
        @endif


        @if (!empty($permissionSettings))
            <li class="nav-item">
                <a class="nav-link
         @if (Request::segment(2) != 'setting') collapsed @endif"
                    href="{{ url('pannel/Setting') }}">
                    <i class="bi bi-envelope"></i>
                    <span>Settings</span>
                </a>
            </li>
        @endif

        @if (!empty($permissionSports))
            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Sports</span>
                </a>
            </li>
        @endif
        <!-- End Register Page Nav -->

        @if (!empty($permissionResource))
            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Human Resource</span>
                </a>
            </li>
        @endif
        <!-- End Login Page Nav -->

        @if (!empty($permissionGender))
            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-error-404.html">
                    <i class="bi bi-dash-circle"></i>
                    <span>Gender management</span>
                </a>
            </li>
        @endif
        <!-- End Error 404 Page Nav -->

        @if (!empty($permissionRights))
            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-blank.html">
                    <i class="bi bi-file-earmark"></i>
                    <span>Human Rights</span>
                </a>
            </li>
        @endif

        <!-- End Blank Page Nav -->

    </ul>

</aside><!-- End Sidebar-->
