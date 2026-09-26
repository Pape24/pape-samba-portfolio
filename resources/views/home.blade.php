@extends('layouts.app')

@section('title', 'Pape Samba Touré - Développeur Full Stack')

@section('content')

<!-- =====================================================
     HERO
===================================================== -->

<section class="hero-section">

<div class="container">
    <div class="row align-items-center min-vh-100 g-5">

        <!-- TEXTE -->
        <div class="col-lg-7">

            <div class="hero-content">

                <p class="hero-small-title">
                    Bonjour, je suis
                </p>

                <h1>
                    Pape Samba
                    <span>Touré</span>
                </h1>

                <h2>
                    Développeur Full Stack
                    <br>
                    &amp; Informatique de Gestion
                </h2>

                <p class="hero-description">
                    Je conçois et développe des applications web,
                    des plateformes de gestion et des solutions
                    numériques modernes adaptées aux besoins
                    des entreprises.
                </p>

                <!-- BOUTONS -->
                <div class="hero-buttons">

                    <a href="#projects" class="btn btn-primary-custom">
                        Voir mes projets
                        <i class="bi bi-arrow-right"></i>
                    </a>

                    <a href="#contact" class="btn btn-outline-custom">
                        Me contacter
                    </a>

                </div>

                <!-- TECHNOLOGIES -->
                <div class="hero-tech">
                    <span>Laravel</span>
                    <span>PHP</span>
                    <span>JavaScript</span>
                    <span>React</span>
                    <span>MySQL</span>
                </div>

                <!-- RÉSEAUX SOCIAUX -->
                <div class="hero-socials">

                    <a href="#" aria-label="GitHub">
                        <i class="bi bi-github"></i>
                    </a>

                    <a href="#" aria-label="LinkedIn">
                        <i class="bi bi-linkedin"></i>
                    </a>

                    <a href="mailto:papesambatoure91@gmail.com"
                       aria-label="Email">
                        <i class="bi bi-envelope"></i>
                    </a>

                </div>

            </div>

        </div>


        <!-- PHOTO -->
        <div class="col-lg-5">

            <div class="hero-profile">

                <div class="profile-decoration"></div>

                <div class="profile-image-wrapper">

                    <img
                        src="{{ asset('images/profile.jpg') }}"
                        alt="Pape Samba Touré - Développeur Full Stack"
                        class="profile-image"
                    >

                </div>

                <!-- CARTE FLOTTANTE -->
                <div class="profile-card">

                    <div class="profile-card-icon">
                        <i class="bi bi-code-slash"></i>
                    </div>

                    <div>
                        <strong>Full Stack Developer</strong>

                        <small>
                            Web &amp; Solutions numériques
                        </small>
                    </div>

                </div>

            </div>

        </div>

    </div>
</div>


</section>

<!-- =====================================================
     À PROPOS
===================================================== -->

<section id="about" class="section-padding about-section">

<div class="container">

    <div class="section-heading text-center">

        <p>À PROPOS</p>

        <h2>
            Construire des solutions
            <span>numériques utiles</span>
        </h2>

    </div>

    <div class="row justify-content-center">

        <div class="col-lg-9">

            <p class="about-text text-center">

                Titulaire d'une Licence en Informatique de Gestion,
                je suis spécialisé dans le développement web,
                la gestion des bases de données et la conception
                de solutions informatiques.

                <br><br>

                Mon objectif est de transformer les besoins
                des entreprises en applications modernes,
                performantes et faciles à utiliser.

            </p>

        </div>

    </div>

</div>

</section>

<!-- =====================================================
     COMPÉTENCES
===================================================== -->

<section id="skills" class="section-padding skills-section">

<div class="container">

    <div class="section-heading text-center">

        <p>MES COMPÉTENCES</p>

        <h2>
            Technologies que
            <span>j'utilise</span>
        </h2>

    </div>

    <div class="row g-4">

        <!-- PHP -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-filetype-php"></i>
                <h4>PHP</h4>
                <p>Backend</p>
            </div>
        </div>

        <!-- Laravel -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-box"></i>
                <h4>Laravel</h4>
                <p>Framework PHP</p>
            </div>
        </div>

        <!-- JavaScript -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-filetype-js"></i>
                <h4>JavaScript</h4>
                <p>Frontend</p>
            </div>
        </div>

        <!-- MySQL -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-database"></i>
                <h4>MySQL</h4>
                <p>Base de données</p>
            </div>
        </div>

        <!-- Flutter -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-phone"></i>
                <h4>Flutter</h4>
                <p>Mobile</p>
            </div>
        </div>

        <!-- WordPress -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-wordpress"></i>
                <h4>WordPress</h4>
                <p>CMS</p>
            </div>
        </div>

        <!-- Git -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-git"></i>
                <h4>Git</h4>
                <p>Versioning</p>
            </div>
        </div>

        <!-- React -->
        <div class="col-6 col-md-4 col-lg-3">
            <div class="skill-card">
                <i class="bi bi-code-slash"></i>
                <h4>React</h4>
                <p>Frontend</p>
            </div>
        </div>

    </div>

</div>


</section>

<!-- =====================================================
     PROJETS
===================================================== -->

<section id="projects" class="section-padding projects-section">


<div class="container">

    <div class="section-heading text-center">

        <p>MES PROJETS</p>

        <h2>
            Quelques réalisations
        </h2>

    </div>

    <div class="row g-4">

        <!-- TERANGA KOOM -->
        <div class="col-lg-4">

            <div class="project-card">

                <div class="project-icon">
                    <i class="bi bi-shop"></i>
                </div>

                <div class="project-content">

                    <span class="project-category">
                        SaaS
                    </span>

                    <h3>Teranga Koom</h3>

                    <p>
                        Solution de gestion commerciale permettant
                        de gérer les ventes, clients, fournisseurs,
                        dépenses et activités commerciales.
                    </p>

                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>PHP</span>
                        <span>MySQL</span>
                    </div>

                </div>

            </div>

        </div>


        <!-- TERANGA LUX -->
        <div class="col-lg-4">

            <div class="project-card">

                <div class="project-icon">
                    <i class="bi bi-eyeglasses"></i>
                </div>

                <div class="project-content">

                    <span class="project-category">
                        E-commerce
                    </span>

                    <h3>Teranga Lux</h3>

                    <p>
                        Boutique en ligne dédiée aux lunettes et
                        montres avec une identité visuelle
                        premium.
                    </p>

                    <div class="project-tags">
                        <span>WordPress</span>
                        <span>WooCommerce</span>
                        <span>CSS</span>
                    </div>

                </div>

            </div>

        </div>


        <!-- GESTION LOGEMENT -->
        <div class="col-lg-4">

            <div class="project-card">

                <div class="project-icon">
                    <i class="bi bi-building"></i>
                </div>

                <div class="project-content">

                    <span class="project-category">
                        Gestion
                    </span>

                    <h3>Gestion Logement</h3>

                    <p>
                        Application de gestion locative permettant
                        d'administrer les propriétaires, logements,
                        locataires, contrats et paiements.
                    </p>

                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>Bootstrap</span>
                        <span>MySQL</span>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

</section>

<!-- =====================================================
     SERVICES
===================================================== -->

<section id="services" class="section-padding services-section">

<div class="container">

    <div class="section-heading text-center">

        <p>MES SERVICES</p>

        <h2>
            Ce que je peux
            <span>faire pour vous</span>
        </h2>

    </div>

    <div class="row g-4">

        <!-- DÉVELOPPEMENT WEB -->
        <div class="col-md-6 col-lg-4">

            <div class="service-card">

                <i class="bi bi-code-slash"></i>

                <h3>Développement Web</h3>

                <p>
                    Création d'applications et de sites web
                    modernes, responsifs et performants.
                </p>

            </div>

        </div>


        <!-- E-COMMERCE -->
        <div class="col-md-6 col-lg-4">

            <div class="service-card">

                <i class="bi bi-cart3"></i>

                <h3>E-commerce</h3>

                <p>
                    Création de boutiques en ligne et de
                    solutions de commerce électronique.
                </p>

            </div>

        </div>


        <!-- SOLUTIONS DE GESTION -->
        <div class="col-md-6 col-lg-4">

            <div class="service-card">

                <i class="bi bi-database"></i>

                <h3>Solutions de gestion</h3>

                <p>
                    Conception de logiciels pour automatiser
                    et améliorer les processus d'entreprise.
                </p>

            </div>

        </div>

    </div>

</div>

</section>

<!-- =====================================================
     CONTACT
===================================================== -->

<section id="contact" class="section-padding contact-section">

<div class="container">

    <div class="contact-box text-center">

        <p class="contact-small">
            UN PROJET ?
        </p>

        <h2>
            Construisons quelque chose
            <span>ensemble.</span>
        </h2>

        <p>
            Vous avez un projet web ou une idée à développer ?
            N'hésitez pas à me contacter.
        </p>

        <a
            href="mailto:papesambatoure91@gmail.com"
            class="btn btn-primary-custom"
        >
            <i class="bi bi-envelope"></i>
            Me contacter
        </a>

    </div>

</div>

</section>

@endsection
