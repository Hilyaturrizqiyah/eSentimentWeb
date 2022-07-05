<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title" key="t-menu">Beranda</li>
                <li>
                    <a href="{{ url('/admin/dashboard') }}" class="waves-effect">
                        <i class="bx bx-home"></i>
                        <span key="t-layouts">Dashboard</span>
                    </a>
                </li>

                <li class="menu-title" key="t-menu">Pengaturan</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-id-card"></i>
                        <span key="t-layouts">Profil</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-calculator"></i>
                        <span key="t-layouts">Akuntansi</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="{{url('/user')}}" class="waves-effect">
                        <i class="bx bx-user-circle"></i>
                        <span key="t-layouts">Pengguna</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-list-ul"></i>
                        <span key="t-layouts">Data Master</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-menu">Manajemen</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-file"></i>
                        <span key="t-layouts">Proposal</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-dollar-circle"></i>
                        <span key="t-layouts">Pinjaman</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-menu">Keanggotaan</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-users"></i>
                        <span key="t-layouts">Kelompok</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>  
                    </ul>
                </li>
                <li>
                    <a href="{{ url('individu-anggota') }}" class="waves-effect">
                        <i class="fas fa-user"></i>
                        <span key="t-layouts">Individu</span>
                    </a>
                </li>

                <li class="menu-title" key="t-menu">Transaksi</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-check-double"></i>
                        <span key="t-layouts">Penerimaan Angsuran</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">Kelompok</a></li>
                        <li><a href=# key="t-light-sidebar">Individu</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-credit-card"></i>
                        <span key="t-layouts">Penyaluran Kredit</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-book"></i>
                        <span key="t-layouts">Buku Kas</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li> 
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-book"></i>
                        <span key="t-layouts">Buku Bank</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-book"></i>
                        <span key="t-layouts">Buku Bantu Lainnya</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href="{{ url('buku-bantu-bdd') }}" key="t-light-sidebar">Daftar BDD</a></li>
                        <li><a href="{{ url('buku-bantu-inventaris') }}" key="t-light-sidebar">Daftar Inventaris</a></li>
                        <li><a href="{{ url('buku-bantu-aktiva-tetap') }}" key="t-light-sidebar">Daftar Aktiva Tetap</a></li>
                        <li><a href="{{ url('buku-bantu-hutang') }}" key="t-light-sidebar">Daftar Hutang</a></li>
                    </ul>
                </li>

                <li class="menu-title" key="t-menu">Laporan</li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-money"></i>
                        <span key="t-layouts">Laporan Keuangan</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">Neraca Mikrofinance</a></li>
                        <li><a href=# key="t-light-sidebar">Rugi Laba Mikrofinance</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-car"></i>
                        <span key="t-layouts">Operasional</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-data"></i>
                        <span key="t-layouts">UEP</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-data"></i>
                        <span key="t-layouts">SPP</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-users"></i>
                        <span key="t-layouts">Kelompok</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">Daftar Kelompok SPKP</a></li>
                        <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-file-blank"></i>
                        <span key="t-layouts">Berkas</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">A</a></li>
                        <li><a href=# key="t-light-sidebar">B</a></li>
                        <li><a href=# key="t-light-sidebar">C</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-book"></i>
                        <span key="t-layouts">Buku Pembantu</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                        <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                        <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bxs-archive-out"></i>
                        <span key="t-layouts">Pinjaman UEP</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="true">
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-vertical">Kelompok</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                                <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="javascript: void(0);" class="has-arrow"
                                key="t-vertical">Individu</a>
                            <ul class="sub-menu" aria-expanded="true">
                                <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                                <li><a href=# key="t-light-sidebar">Daftar Kelompok UEP</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
