<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta name="theme-color" content="#0a0a0a">

    <title>
        @yield('title', 'Pape Samba Touré — Développeur Full Stack')
    </title>

    <meta
        name="description"
        content="Portfolio de Pape Samba Touré — Développeur Full Stack et Informatique de Gestion."
    >

    <!-- =====================================================
         BOOTSTRAP CSS
    ====================================================== -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >

    <!-- =====================================================
         BOOTSTRAP ICONS
    ====================================================== -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    >

    <!-- =====================================================
         LARAVEL / VITE
    ====================================================== -->
    @vite([
        'resources/css/portfolio.css',
        'resources/js/app.js'
    ])

    @stack('styles')
</head>

<body>

    <!-- =====================================================
         NAVBAR
    ====================================================== -->

    <nav class="navbar navbar-expand-lg portfolio-navbar">

        <div class="container">

            <!-- LOGO -->
            <a
                href="{{ route('home') }}"
                class="navbar-brand portfolio-logo"
            >
                <span>PS</span>

                <strong>
                    Pape Samba Touré
                </strong>
            </a>


            <!-- MENU MOBILE -->
            <button
                class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#mainNavbar"
                aria-controls="mainNavbar"
                aria-expanded="false"
                aria-label="Ouvrir le menu"
            >
                <i class="bi bi-list"></i>
            </button>


            <!-- MENU -->
            <div
                class="collapse navbar-collapse"
                id="mainNavbar"
            >

                <ul class="navbar-nav ms-auto align-items-lg-center">

                    <li class="nav-item">
                        <a
                            class="nav-link active"
                            href="{{ route('home') }}#home"
                        >
                            Accueil
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route('home') }}#about"
                        >
                            À propos
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route('home') }}#skills"
                        >
                            Compétences
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route('home') }}#projects"
                        >
                            Projets
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link"
                            href="{{ route('home') }}#services"
                        >
                            Services
                        </a>
                    </li>

                    <li class="nav-item">
                        <a
                            class="nav-link btn-contact"
                            href="{{ route('home') }}#contact"
                        >
                            Me contacter
                        </a>
                    </li>

                </ul>

            </div>

        </div>

    </nav>


    <!-- =====================================================
         CONTENU
    ====================================================== -->

    <main>
        @yield('content')
    </main>


    <!-- =====================================================
         FOOTER
    ====================================================== -->

    <footer class="portfolio-footer">

        <div class="container">

            <div class="footer-content">

                <div>

                    <h3>
                        Pape Samba Touré
                    </h3>

                    <p>
                        Développeur Full Stack &
                        Informatique de Gestion
                    </p>

                </div>


                <div class="footer-socials">

                    <a
                        href="#"
                        aria-label="GitHub"
                    >
                        <i class="bi bi-github"></i>
                    </a>

                    <a
                        href="#"
                        aria-label="LinkedIn"
                    >
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a
                        href="#"
                        aria-label="WhatsApp"
                    >
                        <i class="bi bi-whatsapp"></i>
                    </a>

                </div>

            </div>


            <div class="footer-bottom">

                <p>
                    © {{ date('Y') }}
                    Pape Samba Touré.
                    Tous droits réservés.
                </p>

            </div>

        </div>

    </footer>


    <!-- =====================================================
         BOOTSTRAP JS
    ====================================================== -->

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    ></script>


    @stack('scripts')

</body>
</html>