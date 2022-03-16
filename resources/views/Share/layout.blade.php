<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>FOCAES</title>

    <!-- Favicons -->
    <link href="{{ asset('/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    @include('Share.css')

</head>

<body>
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/" class="logo d-flex align-items-center">
                <span class="d-none d-lg-block"><i class="bi bi-collection"></i> Cemede</span>
            </a>
            <i class="bi bi-arrow-left-right toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <form class="search-form d-flex align-items-center" method="POST" action="#">
                <input type="text" name="query" placeholder="Search" title="Enter search keyword">
                <button type="submit" title="Search"><i class="bi bi-search"></i></button>
            </form>
        </div><!-- End Search Bar -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item d-block d-lg-none">
                    <a class="nav-link nav-icon search-bar-toggle " href="#">
                        <i class="bi bi-search"></i>
                    </a>
                </li><!-- End Search Icon-->

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <i class="bi bi-person-circle"></i>
                        <span class="d-none d-md-block dropdown-toggle ps-2">Paola Espinoza</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Paola Espinoza</h6>
                            <span>Web Designer</span>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Mi perfil</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-gear"></i>
                                <span>Ajustes</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                                <i class="bi bi-question-circle"></i>
                                <span>Ayuda ?</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="#">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Salir</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->
                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Icons Navigation -->

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
        <ul class="sidebar-nav" id="sidebar-nav">
            <li class="nav-item">
                <a class="nav-link " href="/">
                    <i class="bi bi-columns-gap"></i>
                    <span>Home</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#projects-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-clipboard-data"></i><span>Proyectos</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="projects-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Proyectos">
                            <i class="bi bi-circle"></i><span>Lista</span>
                        </a>
                    </li>
                    <li>
                        <a href="/Proyectos/reportes">
                            <i class="bi bi-circle"></i><span>Reportes</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Projects Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#socios-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-briefcase-fill"></i><span>Socios</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="socios-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Socios">
                            <i class="bi bi-circle"></i><span>Lista</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Socios Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#academicos-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people-fill"></i><span>Acádemicos</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="academicos-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Academicos">
                            <i class="bi bi-circle"></i><span>Lista</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Academicos Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#universidad-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-bank2"></i><span>Universidades</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="universidad-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/Universidades">
                            <i class="bi bi-circle"></i><span>Lista</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Universidad Nav -->

            <li class="nav-heading">Ajustes</li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="users-profile.html">
                    <i class="bi bi-person"></i>
                    <span>Perfil</span>
                </a>
            </li><!-- End Profile Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-register.html">
                    <i class="bi bi-card-list"></i>
                    <span>Registrarse</span>
                </a>
            </li><!-- End Register Page Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="pages-login.html">
                    <i class="bi bi-box-arrow-in-right"></i>
                    <span>Inicia Sesión</span>
                </a>
            </li><!-- End Login Page Nav -->

        </ul>
    </aside><!-- End Sidebar-->

    <main id="main" class="main">
        @yield('contenido')
    </main>

    <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>FOCAES</span></strong>. Derechos reservados
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Diseñado por <a href="https://bootstrapmade.com/">Paola Espinoza</a>
    </div>
  </footer><!-- End Footer -->
    @include('Share.js')
</body>

</html>