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
                <a href="{{ url('/professor/students')}}" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary">Professor</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Professor</h6>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="{{ url('/professor/courses')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Courses</a>
                    <div class="nav-item dropdown">
                    <a href="{{ url('/professor/exams') }}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fas fa-pen-alt me-2"></i>Submits</a>
                        <div class="dropdown-menu bg-transparent border-0">
                        <a href="{{ url('/professor/shk1') }}" class="dropdown-item">Shkenca Kompjuterike 1</a>
                            <a href="{{ url('/professor/web') }}" class="dropdown-item">Inxhinieri e Web</a>
                            <a href="{{ url('/professor/lab1') }}" class="dropdown-item">Lëndë Laboratorike 1 (Programim)</a>
                            <a href="{{ url('/professor/gaming') }}" class="dropdown-item">Programimi i Lojërave</a>
                            <a href="{{ url('/professor/kripto') }}" class="dropdown-item">Kriptografia</a>
                        </div>
                        <a href="{{ url('/professor/schedule') }}" class="nav-item nav-link"><i class="fas fa-calendar-alt me-2"></i>Schedule</a>
                    <a href="{{ url('/professor/students') }}" class="nav-item nav-link"><i class="fas fa-user me-2"></i>Students</a>
                    <a href="{{ url('/professor/subjects') }}" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Subjects</a>
                    <a href="{{ url('/professor/messages') }}" class="nav-item nav-link active"><i class="fas fa-envelope me-2"></i>Messages</a>
                    <a href="{{ url('/professor/calendar') }}" class="nav-item nav-link"><i class="fas fa-calendar-week me-2"></i>Calendar</a>
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
                            <img class="rounded-circle me-lg-2" src="{{asset('assets/admin/img/admin.png')}}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Professor</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ url('/logout') }}" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
            <div class="container p-3 my-3 border">
            <a href="">Announcements</a></div>
            <br>
            <p></p>
            <div class="container">
                <p>Lavdim Menxhiqi</p>
                <p>
                    <b>E-mail</b>
                    : lavdim.menxhiqi@ubt-uni.net
                </p>

             <br>
             <p></p>

            <div class="container p-3 my-3 border">Orari i Ligjeratave:
            <ol>
                 <li>E Hënë G4a</li>
                 <li>E Martë G4a</li>
                 <li>E Merkurë G4a</li>
                 <li>E Enjte G4a</li>
                 <li>E Premte G4a</li>
                 <li>E Shtunë G4a</li>
                </ol>
            </div>

            <div class="container p-3 my-3 border">Orari i Ligjeratave:
                @foreach($fileModel as $item)
                <div>
                    <h5>Topic {{$item->id}}
                        <a href="{{url('/professor/laboratoredit/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{url('delete-lab/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </h5>
                        <a href="{{ asset($item->file_path) }}" download>{{$item->name}}</a></br>
                        <b>Title : {{$item->title}}</b>
                        <p>Info: {{$item->text}}</p>
                </div>

                @endforeach

                <tr>
                    <a href="{{url('/professor/laboratoradd')}}" class="btn btn-success btn-sm">Add</a>
                 </tr>

                </div>

                <div class="container p-3 my-3 border">Literatura:
                <br>
                <br>
                <a href="https://docs.oracle.com/javase/tutorial/">JavaOracle</a>
                <br>
                <br>
                <a href="https://www.javatpoint.com/java-tutorial">JavaTutorial</a>
                <br>
                <br>
                <a href="https://www.tutorialspoint.com/java/index.htm">LearnJava</a>
                <br>
                <br>
                <a href="https://www.javacodegeeks.com/">JavaCourse</a>
                <br>
                <br>
                <a href="https://www.udemy.com/course/java-tutorial/">JavaBeginner</a>
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
