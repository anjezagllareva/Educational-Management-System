<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Professor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('admin/img/favicon.ico')}}" rel="icon">

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
                <h3 class="text-primary">Professor</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Professor</h6>
                        <span>Professor</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/admin/admin')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="{{ url('/admin/users') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Users</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ url('/student/1stYear') }}" class="dropdown-item">Gjuhe Angleze per Inxhinieri</a>
                            <a href="{{ url('/student/2ndYear') }}" class="dropdown-item">Teknikat e Zgjidhjes se Problemeve</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Matematike 1</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">IT, E Drejta dhe Shoqeria</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Bazat e Teknologjise Informative</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Bazat e Inxhinierise Elektronike / Elektrike</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Shkenca Kompjuterike 1</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Qarqet Digjitale dhe Sinjalet</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Hyrje ne Algoritme</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Shkenca Kompjuterike 2</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Inxhinieri e Web</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Struktura Diskrete I (Matematike)</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Sistemet e Bazes se te Dhenave</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Rrjeta Kompjuterike dhe Komunikimi</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Algortimet dhe Struktura e te Dhenave</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Lëndë Laboratorike 1 (Programim)</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Inxhinieri Softuerike</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Hyrje në Siguri të Informacionit</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Zhvillimi dhe Dizajnimi i Ueb</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Rrjeta Kompjuterike II</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Programimi i Lojërave</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Nderrmarresi dhe Inovacion</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Kriptografia</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Lëndë Laboratorike 2 (Programim)</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Ueb Multimedia</a>
                            <a href="{{ url('/student/3rdYear') }}" class="dropdown-item">Arkitekturë Softuerike</a>
                        </div>
                    </div>
                    <a href="{{ url('/admin/widget') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="{{ url('/admin/form') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Forms</a>
                    <a href="{{ url('/admin/table') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tables</a>
                    <a href="{{ url('/admin/chart') }}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Pages</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Sign In</a>
                            <a href="signup.html" class="dropdown-item">Sign Up</a>
                            <a href="404.html" class="dropdown-item">404 Error</a>
                            <a href="blank.html" class="dropdown-item">Blank Page</a>
                        </div>
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
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Message</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Professor send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Professor send you a message</h6>
                                        <small>15 minutes ago</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Professor send you a message</h6>
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
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificatin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="img/user.jpg" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">John Doe</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">My Profile</a>
                            <a href="#" class="dropdown-item">Settings</a>
                            <a href="{{ url('/index') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- form start -->
            <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row mb-4 mt-4">
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6Example1" class="form-control" />
                      <label class="form-label" for="form6Example1">First name</label>
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-outline">
                      <input type="text" id="form6Example2" class="form-control" />
                      <label class="form-label" for="form6Example2">Last name</label>
                    </div>
                  </div>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4 m-4">
                  <input type="text" id="form6Example3" class="form-control" />
                  <label class="form-label" for="form6Example3">Country</label>
                </div>

                <!-- Text input -->
                <div class="form-outline mb-4 m-4">
                  <input type="text" id="form6Example4" class="form-control" />
                  <label class="form-label" for="form6Example4">Address</label>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4 m-4">
                  <input type="email" id="form6Example5" class="form-control" />
                  <label class="form-label" for="form6Example5">Email</label>
                </div>

                <!-- Number input -->
                <div class="form-outline mb-4 m-4">
                  <input type="number" id="form6Example6" class="form-control" />
                  <label class="form-label" for="form6Example6">Phone</label>
                </div>

                <!-- Message input -->
                <div class="form-outline mb-4 m-4">
                  <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                  <label class="form-label" for="form6Example7">Additional information</label>
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                  <input class="form-check-input me-2" type="checkbox" value="" id="form6Example8" checked />
                  <label class="form-check-label" for="form6Example8"> Create an account? </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">Place order</button>
              </form>
            <!-- form End -->




            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4 position-absolute bottom-0 start-50 translate-middle-x ">
                <div class="bg-light rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Your Site Name</a>, All Right Reserved.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                        
                        </br>
                       
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->
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
