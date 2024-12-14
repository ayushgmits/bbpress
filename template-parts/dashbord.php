<?php
/**
* Template Name: Members Dashbord
*
*/

get_header();
?>

<div class="content-inner container-fluid pb-0" id="page_layout">
    <div class="row">
        <div class="col-lg-8">
            <div class="row">
                <h4 class="mb-5">Analytics Overview</h4>
                <div class="col-lg-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">862k</h2>
                            <h5>Users</h5>
                            <small>10% Decrease last week</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">4.1M</h2>
                            <h5>Sessions</h5>
                            <small>24% Decrease last week</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">143k</h2>
                            <h5>Visit Duration</h5>
                            <small>10% change</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="card text-center">
                        <div class="card-body">
                            <h2 class="mb-3">32%</h2>
                            <h5>Bounce Rate</h5>
                            <small>10% change</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4>Audience Metrics</h4>
                            </div>
                            <div class="d-flex flex-wrap">
                                <div class="me-3">
                                    <p class="mb-0"><svg class="text-primary" width="10" height="10" viewBox="0 0 10 10"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="currentColor" />
                                        </svg> Avg.Session</p>
                                </div>
                                <div class="me-3">
                                    <p class="mb-0"><svg class="text-secondary" width="10" height="10"
                                            viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="currentColor" />
                                        </svg> Conversion Rate</p>
                                </div>
                                <div class="">
                                    <p class="mb-0"><svg class="text-info" width="10" height="10" viewBox="0 0 10 10"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="5" cy="5" r="5" fill="currentColor" />
                                        </svg> Avg. Session Durations</p>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="analytics-chart-01" class="analytics-chart-01"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4>Live Users</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray" id="dropdownMenuButton34" data-bs-toggle="dropdown"
                                    aria-expanded="false"><svg width="22" height="5" viewBox="0 0 22 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton34"
                                    style="">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="analytics-chart-02" class="analytics-chart-02"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="flex-wrap card-header d-flex justify-content-between align-items-center">
                            <div class="header-title">
                                <h4>Sessions By Countries</h4>
                            </div>
                            <div class="dropdown">
                                <a href="#" class="text-gray" id="dropdownMenuButton30" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <svg width="22" height="5" viewBox="0 0 22 5" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M19.6788 5C20.9595 5 22 3.96222 22 2.68866C22 1.41318 20.9595 0.373465 19.6788 0.373465C18.3981 0.373465 17.3576 1.41318 17.3576 2.68866C17.3576 3.96222 18.3981 5 19.6788 5ZM11.0005 5C12.2812 5 13.3217 3.96222 13.3217 2.68866C13.3217 1.41318 12.2812 0.373465 11.0005 0.373465C9.71976 0.373465 8.67929 1.41318 8.67929 2.68866C8.67929 3.96222 9.71976 5 11.0005 5ZM4.64239 2.68866C4.64239 3.96222 3.60192 5 2.3212 5C1.04047 5 0 3.96222 0 2.68866C0 1.41318 1.04047 0.373465 2.3212 0.373465C3.60192 0.373465 4.64239 1.41318 4.64239 2.68866Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton30"
                                    style="">
                                    <li><a class="dropdown-item" href="#">This Week</a></li>
                                    <li><a class="dropdown-item" href="#">This Month</a></li>
                                    <li><a class="dropdown-item" href="#">This Year</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div id="analytics-chart-03" class="analytics-chart-03"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12">
            <div class="card mb-4">
                <div class="card-header d-flex align-items-center justify-content-between gap-3 flex-wrap">
                    <div class="header-title">
                        <h4 class="card-title">Reservation List</h4>
                    </div>
                    <button class="btn btn-primary">Make Reservation</button>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-between flex-column flex-sm-row gap-3 data-table-action-custom">
                        <div class="d-flex align-items-center gap-3">
                            <select id="action">
                                <option value="noaction">No action</option>
                                <option value="delete">Delete</option>
                            </select>
                            <button class="btn btn-primary">Apply</button>
                        </div>
                        <div class="d-flex align-items-center gap-3">
                            <select id="filter">
                                <option value="noaction">All</option>
                                <option value="delete">Delete</option>
                            </select>
                            <div class="input-group search-group">
                                <span class="input-group-text">
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M11.5594 10.9403L8.82121 8.20269C9.61485 7.24988 10.0106 6.02777 9.92614 4.79059C9.84167 3.55342 9.28349 2.39644 8.36771 1.56033C7.45193 0.724225 6.24906 0.273363 5.00933 0.301538C3.7696 0.329713 2.58845 0.834756 1.7116 1.7116C0.834756 2.58845 0.329713 3.7696 0.301538 5.00933C0.273363 6.24906 0.724225 7.45193 1.56033 8.36771C2.39644 9.28349 3.55342 9.84167 4.79059 9.92614C6.02777 10.0106 7.24988 9.61485 8.20269 8.82121L10.9403 11.5594C10.981 11.6001 11.0293 11.6323 11.0824 11.6543C11.1355 11.6763 11.1924 11.6876 11.2499 11.6876C11.3074 11.6876 11.3643 11.6763 11.4174 11.6543C11.4705 11.6323 11.5188 11.6001 11.5594 11.5594C11.6001 11.5188 11.6323 11.4705 11.6543 11.4174C11.6763 11.3643 11.6876 11.3074 11.6876 11.2499C11.6876 11.1924 11.6763 11.1355 11.6543 11.0824C11.6323 11.0293 11.6001 10.981 11.5594 10.9403ZM1.18738 5.12488C1.18738 4.34612 1.41831 3.58484 1.85097 2.93732C2.28363 2.2898 2.89858 1.78513 3.61806 1.48711C4.33755 1.18908 5.12925 1.11111 5.89305 1.26304C6.65685 1.41497 7.35844 1.78998 7.90911 2.34065C8.45978 2.89132 8.83479 3.59291 8.98672 4.35671C9.13865 5.12051 9.06068 5.91221 8.76266 6.6317C8.46464 7.35118 7.95996 7.96613 7.31244 8.39879C6.66492 8.83145 5.90364 9.06238 5.12488 9.06238C4.08095 9.06122 3.0801 8.64601 2.34193 7.90784C1.60375 7.16966 1.18854 6.16882 1.18738 5.12488Z"
                                            fill="currentColor" />
                                    </svg>
                                </span>
                                <input type="text" class="form-control" placeholder="Search here...">
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive rounded">
                        <table id="user-list-table" class="table" role="grid" data-toggle="data-table">
                            <thead>
                                <tr class="ligth">
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Room Number</th>
                                    <th>Room Type</th>
                                    <th>Check in</th>
                                    <th>Check Out</th>
                                    <th>Payment Status</th>
                                    <th style="min-width: 100px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#123</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrnik-0">
                                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/01.png"
                                                    class="avatar-40 rounded-circle" alt="user">
                                            </div>
                                            <h6 class="mb-0">Courtney Henry</h6>
                                        </div>
                                    </td>
                                    <td>courntney@gmail.com</td>
                                    <td>0330A</td>
                                    <td>One Bedroom</td>
                                    <td>22/10/2024</td>
                                    <td>26/10/2024</td>
                                    <td>
                                        <span class="btn btn-warning-subtle pointer-event-none">Pending</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-sm btn-icon btn-info-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="view" href="#">
                                                <svg width="14" height="14" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.10791 6.03573C9.10791 7.19973 8.16391 8.14307 6.99991 8.14307C5.83591 8.14307 4.89258 7.19973 4.89258 6.03573C4.89258 4.87107 5.83591 3.92773 6.99991 3.92773C8.16391 3.92773 9.10791 4.87107 9.10791 6.03573Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.99883 10.9035C9.5375 10.9035 11.8595 9.07815 13.1668 6.03548C11.8595 2.99281 9.5375 1.16748 6.99883 1.16748H7.0015C4.46283 1.16748 2.14083 2.99281 0.833496 6.03548C2.14083 9.07815 4.46283 10.9035 7.0015 10.9035H6.99883Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#123</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrnik-0">
                                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/03.png"
                                                    class="avatar-40 rounded-circle" alt="user">
                                            </div>
                                            <h6 class="mb-0">Jennifer Brown</h6>
                                        </div>
                                    </td>
                                    <td>Jennifer@gmail.com</td>
                                    <td>0330A</td>
                                    <td>One Bedroom</td>
                                    <td>22/10/2024</td>
                                    <td>26/10/2024</td>
                                    <td>
                                        <span class="btn btn-success-subtle pointer-event-none">Paid</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-sm btn-icon btn-info-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="view" href="#">
                                                <svg width="14" height="14" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.10791 6.03573C9.10791 7.19973 8.16391 8.14307 6.99991 8.14307C5.83591 8.14307 4.89258 7.19973 4.89258 6.03573C4.89258 4.87107 5.83591 3.92773 6.99991 3.92773C8.16391 3.92773 9.10791 4.87107 9.10791 6.03573Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.99883 10.9035C9.5375 10.9035 11.8595 9.07815 13.1668 6.03548C11.8595 2.99281 9.5375 1.16748 6.99883 1.16748H7.0015C4.46283 1.16748 2.14083 2.99281 0.833496 6.03548C2.14083 9.07815 4.46283 10.9035 7.0015 10.9035H6.99883Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-success-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="add" href="#">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.2539 0.399902C15.0247 0.399902 14.603 0.443688 13.9875 0.529656C13.372 0.615943 12.9741 0.699455 12.7947 0.778484C12.6147 0.85751 12.2895 1.13176 11.8198 1.59811C11.3497 2.06618 10.6678 2.92992 9.77621 4.1888C8.88321 5.44907 8.05044 6.77938 7.2762 8.18083C6.50163 9.5828 5.77876 11.0383 5.10789 12.5471C4.48722 11.4846 3.92633 10.7641 3.4225 10.3851C2.91993 10.0047 2.49596 9.81496 2.15124 9.81496C1.88202 9.81496 1.54476 9.95849 1.1379 10.2443C0.731558 10.5309 0.52832 10.8114 0.52832 11.0881C0.52832 11.2884 0.71478 11.5852 1.0877 11.9776C1.82629 12.7579 2.48007 13.5855 3.04585 14.4615C3.39145 14.9854 3.62126 15.3069 3.73584 15.4241C3.84978 15.5402 4.19696 15.5999 4.77759 15.5999C5.58526 15.5999 6.06498 15.4963 6.21758 15.288C6.3688 15.0874 6.64861 14.4895 7.05675 13.4927C8.0652 10.997 9.31905 8.61376 10.8178 6.34463C12.3178 4.07646 13.6916 2.36053 14.9424 1.19807C15.1915 0.977228 15.3413 0.834139 15.3939 0.768033C15.4452 0.701715 15.4713 0.634969 15.4713 0.565446C15.4712 0.455771 15.3986 0.399902 15.2539 0.399902Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#123</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrnik-0">
                                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/04.png"
                                                    class="avatar-40 rounded-circle" alt="user">
                                            </div>
                                            <h6 class="mb-0">Eliana Williams</h6>
                                        </div>
                                    </td>
                                    <td>eliana@gmail.com</td>
                                    <td>0330A</td>
                                    <td>One Bedroom</td>
                                    <td>22/10/2024</td>
                                    <td>26/10/2024</td>
                                    <td>
                                        <span class="btn btn-warning-subtle pointer-event-none">Pending</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-sm btn-icon btn-info-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="view" href="#">
                                                <svg width="14" height="14" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.10791 6.03573C9.10791 7.19973 8.16391 8.14307 6.99991 8.14307C5.83591 8.14307 4.89258 7.19973 4.89258 6.03573C4.89258 4.87107 5.83591 3.92773 6.99991 3.92773C8.16391 3.92773 9.10791 4.87107 9.10791 6.03573Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.99883 10.9035C9.5375 10.9035 11.8595 9.07815 13.1668 6.03548C11.8595 2.99281 9.5375 1.16748 6.99883 1.16748H7.0015C4.46283 1.16748 2.14083 2.99281 0.833496 6.03548C2.14083 9.07815 4.46283 10.9035 7.0015 10.9035H6.99883Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#123</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrnik-0">
                                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/02.png"
                                                    class="avatar-40 rounded-circle" alt="user">
                                            </div>
                                            <h6 class="mb-0">Smith Jonas</h6>
                                        </div>
                                    </td>
                                    <td>smith@gmail.com</td>
                                    <td>0330A</td>
                                    <td>One Bedroom</td>
                                    <td>22/10/2024</td>
                                    <td>26/10/2024</td>
                                    <td>
                                        <span class="btn btn-success-subtle pointer-event-none">Paid</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-sm btn-icon btn-info-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="view" href="#">
                                                <svg width="14" height="14" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.10791 6.03573C9.10791 7.19973 8.16391 8.14307 6.99991 8.14307C5.83591 8.14307 4.89258 7.19973 4.89258 6.03573C4.89258 4.87107 5.83591 3.92773 6.99991 3.92773C8.16391 3.92773 9.10791 4.87107 9.10791 6.03573Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.99883 10.9035C9.5375 10.9035 11.8595 9.07815 13.1668 6.03548C11.8595 2.99281 9.5375 1.16748 6.99883 1.16748H7.0015C4.46283 1.16748 2.14083 2.99281 0.833496 6.03548C2.14083 9.07815 4.46283 10.9035 7.0015 10.9035H6.99883Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-success-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="add" href="#">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.2539 0.399902C15.0247 0.399902 14.603 0.443688 13.9875 0.529656C13.372 0.615943 12.9741 0.699455 12.7947 0.778484C12.6147 0.85751 12.2895 1.13176 11.8198 1.59811C11.3497 2.06618 10.6678 2.92992 9.77621 4.1888C8.88321 5.44907 8.05044 6.77938 7.2762 8.18083C6.50163 9.5828 5.77876 11.0383 5.10789 12.5471C4.48722 11.4846 3.92633 10.7641 3.4225 10.3851C2.91993 10.0047 2.49596 9.81496 2.15124 9.81496C1.88202 9.81496 1.54476 9.95849 1.1379 10.2443C0.731558 10.5309 0.52832 10.8114 0.52832 11.0881C0.52832 11.2884 0.71478 11.5852 1.0877 11.9776C1.82629 12.7579 2.48007 13.5855 3.04585 14.4615C3.39145 14.9854 3.62126 15.3069 3.73584 15.4241C3.84978 15.5402 4.19696 15.5999 4.77759 15.5999C5.58526 15.5999 6.06498 15.4963 6.21758 15.288C6.3688 15.0874 6.64861 14.4895 7.05675 13.4927C8.0652 10.997 9.31905 8.61376 10.8178 6.34463C12.3178 4.07646 13.6916 2.36053 14.9424 1.19807C15.1915 0.977228 15.3413 0.834139 15.3939 0.768033C15.4452 0.701715 15.4713 0.634969 15.4713 0.565446C15.4712 0.455771 15.3986 0.399902 15.2539 0.399902Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#123</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrnik-0">
                                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/06.png"
                                                    class="avatar-40 rounded-circle" alt="user">
                                            </div>
                                            <h6 class="mb-0">Sarah Collins</h6>
                                        </div>
                                    </td>
                                    <td>sarahcollins@gmail.com</td>
                                    <td>0330A</td>
                                    <td>One Bedroom</td>
                                    <td>22/10/2024</td>
                                    <td>26/10/2024</td>
                                    <td>
                                        <span class="btn btn-success-subtle pointer-event-none">Paid</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-sm btn-icon btn-info-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="view" href="#">
                                                <svg width="14" height="14" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.10791 6.03573C9.10791 7.19973 8.16391 8.14307 6.99991 8.14307C5.83591 8.14307 4.89258 7.19973 4.89258 6.03573C4.89258 4.87107 5.83591 3.92773 6.99991 3.92773C8.16391 3.92773 9.10791 4.87107 9.10791 6.03573Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.99883 10.9035C9.5375 10.9035 11.8595 9.07815 13.1668 6.03548C11.8595 2.99281 9.5375 1.16748 6.99883 1.16748H7.0015C4.46283 1.16748 2.14083 2.99281 0.833496 6.03548C2.14083 9.07815 4.46283 10.9035 7.0015 10.9035H6.99883Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                            <a class="btn btn-sm btn-icon btn-success-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="add" href="#">
                                                <svg width="14" height="14" viewBox="0 0 16 16" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M15.2539 0.399902C15.0247 0.399902 14.603 0.443688 13.9875 0.529656C13.372 0.615943 12.9741 0.699455 12.7947 0.778484C12.6147 0.85751 12.2895 1.13176 11.8198 1.59811C11.3497 2.06618 10.6678 2.92992 9.77621 4.1888C8.88321 5.44907 8.05044 6.77938 7.2762 8.18083C6.50163 9.5828 5.77876 11.0383 5.10789 12.5471C4.48722 11.4846 3.92633 10.7641 3.4225 10.3851C2.91993 10.0047 2.49596 9.81496 2.15124 9.81496C1.88202 9.81496 1.54476 9.95849 1.1379 10.2443C0.731558 10.5309 0.52832 10.8114 0.52832 11.0881C0.52832 11.2884 0.71478 11.5852 1.0877 11.9776C1.82629 12.7579 2.48007 13.5855 3.04585 14.4615C3.39145 14.9854 3.62126 15.3069 3.73584 15.4241C3.84978 15.5402 4.19696 15.5999 4.77759 15.5999C5.58526 15.5999 6.06498 15.4963 6.21758 15.288C6.3688 15.0874 6.64861 14.4895 7.05675 13.4927C8.0652 10.997 9.31905 8.61376 10.8178 6.34463C12.3178 4.07646 13.6916 2.36053 14.9424 1.19807C15.1915 0.977228 15.3413 0.834139 15.3939 0.768033C15.4452 0.701715 15.4713 0.634969 15.4713 0.565446C15.4712 0.455771 15.3986 0.399902 15.2539 0.399902Z"
                                                        fill="currentColor" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#123</td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="flex-shrnik-0">
                                                <img src="<?php echo MD_PATH; ?>/assets/images/avatars/13.png"
                                                    class="avatar-40 rounded-circle" alt="user">
                                            </div>
                                            <h6 class="mb-0">Michael Turner</h6>
                                        </div>
                                    </td>
                                    <td>michaelturner@gmail.com</td>
                                    <td>0330A</td>
                                    <td>One Bedroom</td>
                                    <td>22/10/2024</td>
                                    <td>26/10/2024</td>
                                    <td>
                                        <span class="btn btn-success-subtle pointer-event-none">Paid</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-3">
                                            <a class="btn btn-sm btn-icon btn-info-subtle rounded"
                                                data-bs-toggle="tooltip" data-placement="top" title=""
                                                data-bs-original-title="view" href="#">
                                                <svg width="14" height="14" viewBox="0 0 14 12" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M9.10791 6.03573C9.10791 7.19973 8.16391 8.14307 6.99991 8.14307C5.83591 8.14307 4.89258 7.19973 4.89258 6.03573C4.89258 4.87107 5.83591 3.92773 6.99991 3.92773C8.16391 3.92773 9.10791 4.87107 9.10791 6.03573Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                                        d="M6.99883 10.9035C9.5375 10.9035 11.8595 9.07815 13.1668 6.03548C11.8595 2.99281 9.5375 1.16748 6.99883 1.16748H7.0015C4.46283 1.16748 2.14083 2.99281 0.833496 6.03548C2.14083 9.07815 4.46283 10.9035 7.0015 10.9035H6.99883Z"
                                                        stroke="currentColor" stroke-width="1.2" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                </svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>