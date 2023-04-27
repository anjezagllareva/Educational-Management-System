<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Student</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/admin/img/favicon.ico')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/admin/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/admin/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/admin/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets/admin/css/style.css')}} " rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                <h3 class="text-primary">Student</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Student</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/student/admin')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="{{ url('/student/exams')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-pen me-2"></i>Exams</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ url('/student/1stYear')}}" class="dropdown-item">1st Year</a>
                            <a href="{{ url('/student/2ndYear')}}" class="dropdown-item">2nd Year</a>
                            <a href="{{ url('/student/3rdYear')}}" class="dropdown-item">3rd Year</a>
                        </div>
                    </div>
                    <a href="{{ url('/student/schedule')}}" class="nav-item nav-link active"><i class="fas fa-calendar-alt me-2"></i>Schedule</a>
                    <a href="{{ url('/student/transcripts')}}" class="nav-item nav-link"><i class="fas fa-list-ol me-2"></i>Transcripts</a>
                    <a href="{{ url('/student/subjects')}}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Subjects</a>
                    <a href="{{ url('/student/calendar')}}" class="nav-item nav-link"><i class="fas fa-calendar-week me-2"></i>Calendar</a>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Student send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Student send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Student send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all message</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Student</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ url('/index') }}"class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <div class="container">
    <div class="w-95 w-md-75 w-lg-60 w-xl-55 mx-auto mb-6 text-center">
        <h2 class="display-18 display-md-16 display-lg-14 mb-0">Schedule</h2>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="schedule-table">
                <table class="table bg-white">
                    <thead>
                        <tr>
                            <th>Day's</th>
                            <th>9 am</th>
                            <th>11 am</th>
                            <th>12 pm</th>
                            <th>2 pm</th>
                            <th class="last">3 pm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="day">Sunday</td>
                            <td class="active">
                                <h4>Algoritme 2</h4>
                                <p>9 am - 11 am</p>
                                <div class="hover">
                                    <h4>Algoritme 2</h4>
                                    <p>9 am - 11 am</p> <span>Vesa Morina</span>
                                </div>
                            </td>
                            <td></td>
                            <td class="active">
                                <h4>SHKI 1</h4>
                                <p>03 pm - 04 pm</p>
                                <div class="hover">
                                    <h4>SHKI 1</h4>
                                    <p>03 pm - 04 pm</p> <span>Lavdim Menxhiqi</span>
                                </div>
                            </td>
                            <td class="active">
                                <h4>Rrjeta Kompjuterike</h4>
                                <p>05 pm - 06 pm</p>
                                <div class="hover">
                                    <h4>Rrjeta Kompjuterike</h4>
                                    <p>05 pm - 046am</p> <span>Besnik Qehaja</span>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="day">Monday</td>
                            <td></td>
                            <td class="active">
                                <h4>Sisteme e Bazes se te Dhenave</h4>
                                <p>11 am - 12 pm</p>
                                <div class="hover">
                                    <h4>Sisteme e Bazes se te Dhenave</h4>
                                    <p>11 am - 12 pm</p> <span>Elton Boshnjaku</span>
                                </div>
                            </td>
                            <td class="active">
                                <h4>Inxhineri e WEB</h4>
                                <p>03 pm - 05 pm</p>
                                <div class="hover">
                                    <h4>Inxhineri e WEB</h4>
                                    <p>03 pm - 05 pm</p> <span>Greta Ahma</span>
                                </div>
                            </td>
                            <td></td>
                            <td class="active">
                                <h4>Matematike 1</h4>
                                <p>07 pm - 08 pm</p>
                                <div class="hover">
                                    <h4>Matematike 1</h4>
                                    <p>07 pm - 08 pm</p> <span>Hizer Leka</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="day">Tuesday</td>
                            <td class="active">
                                <h4>Hyrje ne Algoritme</h4>
                                <p>10 am - 11 am</p>
                                <div class="hover">
                                    <h4>Hyrje ne Algoritme</h4>
                                    <p>10 am - 11 am</p> <span>Shkelqim Berisha</span>
                                </div>
                            </td>
                            <td></td>
                            <td></td>
                            <td class="active">
                                <h4>AOK</h4>
                                <p>05 pm - 06 pm</p>
                                <div class="hover">
                                    <h4>AOK</h4>
                                    <p>05 pm - 06 pm</p> <span>Valdrin Haxhiu</span>
                                </div>
                            </td>
                            <td class="active">
                                <h4>Qarqet Digjitale</h4>
                                <p>07 pm - 08 pm</p>
                                <div class="hover">
                                    <h4>Qarqet Digjitale</h4>
                                    <p>07 pm - 08 pm</p> <span>Bertan Karahoda</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="day">Wednesday</td>
                            <td class="active">
                                <h4>Matematike 2</h4>
                                <p>10 am - 12 pm</p>
                                <div class="hover">
                                    <h4>Matematike 2</h4>
                                    <p>10 am - 12 pm</p> <span>Hizer Leka</span>
                                </div>
                            </td>
                            <td></td>
                            <td class="active">
                                <h4>Sisteme Operative</h4>
                                <p>03 pm - 05 pm</p>
                                <div class="hover">
                                    <h4>Sisteme Operative</h4>
                                    <p>03 pm - 05 pm</p> <span>Blerina Rrmoku</span>
                                </div>
                            </td>
                            <td></td>
                            <td class="active">
                                <h4>Shkrim Shkencor dhe Teknik</h4>
                                <p>07 pm - 08 pm</p>
                                <div class="hover">
                                    <h4>Shkrim Shkencor dhe Teknik</h4>
                                    <p>07 pm - 08 pm</p> <span>Shejnaze Gagica</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="day">Thursday</td>
                            <td></td>
                            <td class="active">
                                <h4>IT, e Drejta dhe Shoqeria</h4>
                                <p>11 am - 12 pm</p>
                                <div class="hover">
                                    <h4>IT, e Drejta dhe Shoqeria</h4>
                                    <p>1 am - 12 pm</p> <span>Dashmir Istrefi</span>
                                </div>
                            </td>
                            <td></td>
                            <td class="active">
                                <h4>Bazat e Teknologjis Informative</h4>
                                <p>05 pm - 06 pm</p>
                                <div class="hover">
                                    <h4>Bazat e Teknologjis Informative</h4>
                                    <p>05 pm - 06 pm</p> <span>Zhilbert Tafa</span>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td class="day">Friday</td>
                            <td class="active">
                                <h4>TZP</h4>
                                <p>10 am - 11 am</p>
                                <div class="hover">
                                    <h4>TZP</h4>
                                    <p>10 am - 11 am</p> <span>Vesa Morina</span>
                                </div>
                            </td>
                            <td></td>
                            <td class="active">
                                <h4>Gjuhe Angleze</h4>
                                <p>03 pm - 05 pm</p>
                                <div class="hover">
                                    <h4>Gjuhe Angleze</h4>
                                    <p>03 pm - 05 pm</p> <span>Erza Mehmeti</span>
                                </div>
                            </td>
                            <td></td>
                            <td class="active">
                                <h4>LAB 1</h4>
                                <p>07 pm - 08 pm</p>
                                <div class="hover">
                                    <h4>LAB 1</h4>
                                    <p>07 pm - 08 pm</p> <span>Lavdim Menxhiqi</span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="day">Saturday</td>
                            <td></td>
                            <td></td>
                            <td class="active">
                                <h4>Nderveprim Kompjuter-Njeri</h4>
                                <p>03 pm - 04 pm</p>
                                <div class="hover">
                                    <h4>Nderveprim Kompjuter-Njeri</h4>
                                    <p>03 pm - 04 pm</p> <span>Vesa Morina</span>
                                </div>
                            </td>
                            <td class="active">
                                <h4>Sisteme Operative</h4>
                                <p>05 pm - 06 pm</p>
                                <div class="hover">
                                    <h4>Sisteme Operative</h4>
                                    <p>05 pm - 06 pm</p> <span>Osman Osmani</span>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

  <!-- JavaScript Libraries -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/admin/lib/chart/chart.min.js"></script>
  <script src="/assets/admin/lib/easing/easing.min.js"></script>
  <script src="/assets/admin/lib/waypoints/waypoints.min.js"></script>
  <script src="/assets/admin/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="/assets/admin/lib/tempusdominus/js/moment.min.js"></script>
  <script src="/assets/admin/lib/tempusdominus/js/moment-timezone.min.js"></script>
  <script src="/assets/admin/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

  <!-- Template Javascript -->
  <script src="/assets/admin/js/main.js"></script>
</body>

</html>