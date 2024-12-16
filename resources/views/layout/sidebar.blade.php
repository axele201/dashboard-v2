<aside class="app-sidebar bg-body-secondary shadow">
    <div class="sidebar-brand" style="height:65px;">
        <a href="{{route('dashboard')}}" class="brand-link">
            <img src="{{asset('img/DA.jpeg')}}" class="brand-image opacity-75 shadow">
            <span class="brand-text fw-light" style="color:white;">Dimas Abdullah</span>
        </a>
    </div>
    <div class="sidebar-wrapper">
        <nav class="mt-2">
            <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
                <li class="nav-item"> <a href="{{route ('dashboard')}}" class="nav-link"><i class="bi bi-house-fill"></i>
                    <p>DASHBOARD</p>
                </a> </li>
                <li class="nav-item"> <a href="{{route ('mail')}}" class="nav-link">
                    <i class="bi bi-envelope-fill"></i>
                    <p>Mail</p>
                </a> </li>
                <li class="nav-header">PERKULIAHAN</li>
                <li class="nav-item"> 
                    <a href="{{ route('smester3') }}" class="nav-link"> <i class="fa-solid fa-book-open"></i>
                        <p>JADWAL</p>
                    </a> 
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('kalender') }}" class="nav-link"> <i class="fa-solid fa-calendar-days"></i>
                        <p>KALENDER</p>
                    </a> 
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"> <i class="bi bi-clipboard-check-fill"></i>
                    <p>
                        TUGAS
                        <i class="nav-arrow bi bi-chevron-right"></i>
                    </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item"> <a href="{{ route('kalkulus')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>KALKULUS</p>
                            </a> 
                        </li>
                        <li class="nav-item"> <a href="{{ route('bahasainggris')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>BAHASA INGGRIS</p>
                            </a> 
                        </li>
                        <li class="nav-item"> <a href="{{ route('pemogramanWeb')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>PEMOGRAMAN WEB</p>
                            </a> 
                        </li>
                        <li class="nav-item"> <a href="{{ route('logikadigital')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>LOGIKA DIGITAL & SISTEM DIGITAL</p>
                            </a> 
                        </li>
                        <li class="nav-item"> <a href="{{ route('rekayasaperangkatlunak')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>REKAYASA PERANGKAT LUNAK</p>
                            </a> 
                        </li>
                        <li class="nav-item"> <a href="{{ route('jaringankomputer')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>JARINGAN KOMPUTER</p>
                            </a> 
                        </li>
                        <li class="nav-item"> <a href="{{ route('sistemoperasi')}}" class="nav-link"> <i class="nav-icon bi bi-circle"></i>
                                <p>SISTEM OPERASI</p>
                            </a> 
                        </li>
                    </ul>
                </li>
                <li class="nav-header">PERPUSTAKAAN</li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="fa-solid fa-book"></i>
                        <p>BOOK</p>
                    </a>
                </li>
                <li class="nav-header">STORE</li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="fa-solid fa-store"></i>
                        <p>STORE</p>
                    </a>
                </li>
                <li class="nav-header">END</li>
                <li class="nav-item">
                    <a href="" class="nav-link"><i class="bi bi-person-badge"></i>
                        <p>PROFILE</p>
                    </a>
                </li>
                <li class="nav-item"> 
                    <a href="{{ route('smester3') }}" class="nav-link"> <i class="fa-solid fa-door-open"></i>   
                        <p>LOG OUT</p>
                    </a> 
                </li>
            </ul>
        </nav>
    </div>
</aside> 