<!-- Start Navbar -->
<nav id="topnav" class="defaultscroll is-sticky">
    <div class="container">
        <!-- Logo container-->
        <a class="logo pl-0" href="index.html">
            <img src="{{ asset('assets/images/logo-dark.png') }}" class="inline-block dark:hidden" alt="">
            <img src="{{ asset('assets/images/logo-light.png') }}" class="hidden dark:inline-block" alt="">
        </a>

        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle" id="isToggle" onclick="toggleMenu()">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu justify-end">
                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Profil</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="about.html" class="sub-menu-item">Tentang</a></li>
                        <li><a href="vision-mission.html" class="sub-menu-item">Visi dan Misi</a></li>
                        <li><a href="legal-foundation.html" class="sub-menu-item">Landasan Hukum</a></li>
                        <li><a href="organizational-structure.html" class="sub-menu-item">Struktur Organisasi</a></li>
                        <li><a href="main-duties.html" class="sub-menu-item">Tupoksi</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Informasi</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="product-document.html" class="sub-menu-item">Dokumen Produk</a></li>
                        <li><a href="featured-program.html" class="sub-menu-item">Program Unggulan</a></li>
                        <li><a href="innovation.html" class="sub-menu-item">Inovasi</a></li>
                        <li><a href="agenda.html" class="sub-menu-item">Agenda</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-parent-menu-item">
                    <a href="javascript:void(0)">Publikasi</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="news.html" class="sub-menu-item">Berita</a></li>
                        <li><a href="announcement.html" class="sub-menu-item">Pengumuman</a></li>
                        <li class="has-submenu parent-menu-item"><a href="javascript:void(0)">Galeri</a><span class="submenu-arrow"></span>
                            <ul class="submenu">
                                <li><a href="photo.html" class="sub-menu-item">Foto</a></li>
                                <li><a href="video.html" class="sub-menu-item">Video</a></li>
                            </ul>
                        </li>
                        <li><a href="https://ppid.depok.go.id/" class="sub-menu-item" target="_blank">PPID</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Layanan</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="service.html" class="sub-menu-item">Layanan</a></li>
                        <li><a href="regulation.html" class="sub-menu-item">Regulasi</a></li>
                    </ul>
                </li>

                <li class="has-submenu parent-menu-item">
                    <a href="javascript:void(0)">Kontak</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="important-contact.html" class="sub-menu-item">Kontak Penting</a></li>
                        <li><a href="contact-us.html" class="sub-menu-item">Hubungi Kami</a></li>
                    </ul>
                </li>
            </ul><!--end navigation menu-->
        </div><!--end navigation-->
    </div><!--end container-->
</nav><!--end header-->
<!-- End Navbar -->
