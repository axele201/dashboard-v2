<main class="app-main">
  <!-- Title Section -->
  <div class="txtLgo">
    <h1>Dashboard</h1>
  </div>
  <div class="ngaturDash">

    <!-- Card for Members -->
    <div class="cardDas">
      <div class="card-inner">
        <div class="card-front">
          <i class="fa-solid fa-users" style="font-size: 80px;"></i>
          <p class="text" style="font-size: 25px; margin: 0;">MEMBERS</p>
        </div>
        <div class="card-back">
          <div style="padding: 15px;">
            <h1 class="heading">Members</h1>
            <p class="text">Terdapat 1000 anggota, yang terdiri dari 500 perempuan dan 500 laki-laki.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Card for Fakultas -->
    <div class="cardDas">
      <div class="card-inner">
        <div class="card-front">
          <i class="bi bi-trophy-fill" style="font-size: 80px;"></i>
          <p class="text" style="font-size: 25px; margin: 0;">FAKULTAS</p>
        </div>
        <div class="card-back">
          <div style="padding: 15px;">
            <p class="text">Kampus ini memiliki satu fakultas, yaitu Fakultas Ilmu Komputer, sesuai dengan visi dan misi yang berfokus pada pengembangan ilmu komputer dan teknologi.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Card for Program Studi -->
    <div class="cardDas">
      <div class="card-inner">
        <div class="card-front">
          <i class="fa-solid fa-book-open" style="font-size: 80px;"></i>
          <p class="text" style="font-size: 25px; margin: 0;">PROGRAM STUDI</p>
        </div>
        <div class="card-back">
          <div style="padding: 15px;">
            <a href="" class="heading" style="text-decoration: none">Program Studi</a>
            <ul>
              <li style="font-size: 22px;">INFORMATIKA</li>
              <li style="font-size: 22px;">SISTEM INFORMASI</li>
              <li style="font-size: 22px;">TEKNOLOGI INFORMASI</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- Card for UKM -->
    <div class="cardDas">
      <div class="card-inner">
        <div class="card-front">
          <i class="fa-solid fa-sitemap" style="font-size: 80px;"></i>
          <p class="text" style="font-size: 25px; margin: 0;">UKM</p>
        </div>
        <div class="card-back">
          <div style="padding: 15px;">
            <p class="text">Kampus ini memiliki 6 Unit Kegiatan Mahasiswa baik fisik maupun akademik. <a href="" style="text-decoration: none">Selengkapnya</a></p>
          </div>
        </div>
      </div>
    </div>

    <!-- Card for Organisasi -->
    <div class="cardDas">
      <div class="card-inner">
        <div class="card-front">
          <i class="fa-solid fa-users" style="font-size: 80px;"></i>
          <p class="text" style="font-size: 25px; margin: 0;">Organisasi</p>
        </div>
        <div class="card-back">
          <div style="padding: 15px;">
            <p class="text">Kampus ini memiliki empat organisasi aktif yang berperan penting dalam mendukung mahasiswa dan seluruh lingkungan kampus <br><a href="" style="text-decoration: none">Selengkapnya</a></p>
          </div>
        </div>
      </div>
    </div>
    
  </div> <!-- End of ngaturDash -->

{{-- ini data grafik --}}

  <!--begin::Row-->
  <div class="txtLgo"  style="text-align: center; margin-top:20px;">
    <h1>DATA</h1>
  </div>
<div class="data" style="margin-left: 20px; margin-right:20px;">
  <div class="row">
      <div class="col-lg-6">
          <!-- Card 1: Online Store Visitors -->
          <div class="card mb-4">
              <div class="card-header border-0">
                  <div class="d-flex justify-content-between">
                      <h3 class="card-title">ALL MAJOR</h3> 
                      <a href="javascript:void(0);" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View Report</a>
                  </div>
              </div>
              <div class="card-body" style="height: 573px; display: flex; align-items: center; justify-content: center;">
                  <canvas id="myChart" style="width:100%; max-width:1200px"></canvas>
              </div>
          </div>
          <!-- Card 2: Products Table -->
          <div class="card mb-4">
              <div class="card-header border-0">
                  <h3 class="card-title">Products</h3>
                  <div class="card-tools"> 
                      <a href="#" class="btn btn-tool btn-sm"> <i class="bi bi-download"></i> </a> 
                      <a href="#" class="btn btn-tool btn-sm"> <i class="bi bi-list"></i> </a> 
                  </div>
              </div>
              <div class="card-body table-responsive p-0">
                  <table class="table table-striped align-middle">
                      <thead>
                          <tr>
                              <th>Product</th>
                              <th>Price</th>
                              <th>Sales</th>
                              <th>More</th>
                          </tr>
                      </thead>
                      <tbody>
                          <!-- Placeholder for product rows -->
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
      
      <div class="col-lg-6">
          <!-- Card 3: Reading -->
<div class="card mb-4">
  <div class="card-header border-0">
      <div class="d-flex justify-content-between">
          <h3 class="card-title">Reading (Avg Time per Day)</h3> 
          <a href="javascript:void(0);" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">View Report</a>
      </div>
  </div>
  <div class="card-body">
      <div class="d-flex">
          <p class="d-flex flex-column"> 
              <span class="fw-bold fs-5">2 hours</span> 
              <span>Avg Reading Time per Day</span> 
          </p>
          <p class="ms-auto d-flex flex-column text-end"> 
              <span class="text-success"> 
                  <i class="bi bi-arrow-up"></i> 15%
              </span> 
              <span class="text-secondary">Since Last Month</span> 
          </p>
      </div>
      <!-- /.d-flex -->
      <div class="position-relative mb-4">
          <!-- Placeholder for reading chart -->
          <canvas id="readingChart"></canvas>
      </div>
      <div class="d-flex flex-row justify-content-end"> 
          <span class="me-2"> 
              <i class="bi bi-square-fill text-primary"></i> This Month
          </span> 
          <span> 
              <i class="bi bi-square-fill text-secondary"></i> Last Month
          </span> 
      </div>
  </div>
</div>


          <!-- Card 4: Online Store Overview -->
          <div class="card">
              <div class="card-header border-0">
                  <h3 class="card-title">Online Store Overview</h3>
                  <div class="card-tools"> 
                      <a href="#" class="btn btn-sm btn-tool"> <i class="bi bi-download"></i> </a> 
                      <a href="#" class="btn btn-sm btn-tool"> <i class="bi bi-list"></i> </a> 
                  </div>
              </div>
              <div class="card-body">
                  <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                      <p class="text-success fs-2">
                          <!-- Success Icon SVG -->
                      </p>
                      <p class="d-flex flex-column text-end"> 
                          <span class="text-secondary">CONVERSION RATE</span> 
                      </p>
                  </div>
                  <!-- /.d-flex -->
                  <div class="d-flex justify-content-between align-items-center border-bottom mb-3">
                      <p class="text-info fs-2">
                          <!-- Info Icon SVG -->
                      </p>
                      <p class="d-flex flex-column text-end"> 
                          <span class="text-secondary">SALES RATE</span> 
                      </p>
                  </div>
                  <!-- /.d-flex -->
                  <div class="d-flex justify-content-between align-items-center mb-0">
                      <p class="text-danger fs-2">
                          <!-- Danger Icon SVG -->
                      </p>
                      <p class="d-flex flex-column text-end"> 
                          <span class="text-secondary">REGISTRATION RATE</span> 
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
{{-- grafik sampai sini --}}

  <!-- Card Section for Jasa Penengah -->
  <div class="col-md-6"> 
    <div class="card-TENGAH">
      <div class="card-header">
        <div class="txtLgo"  style="text-align: center;">
          <h1>JASA PENENGAH</h1>
        </div>
        <div class="card-tools"> 
          <button type="button" class="btn btn-tool" data-lte-toggle="card-collapse"> 
            <i data-lte-icon="expand" class="bi bi-plus-lg"></i>
            <i data-lte-icon="collapse" class="bi bi-dash-lg"></i> 
          </button> 
          <button type="button" class="btn btn-tool" data-lte-toggle="card-remove"> 
            <i class="bi bi-x-lg"></i> 
          </button> 
        </div>
      </div>
      <div class="card-body p-0">
        <div class="row text-center m-1" style="gap:30px;">
          <!-- Member 1 -->
          <div class="card-jasa">
            <div class="card-border-top">
            </div>
            <div class="img">
              <img src="{{asset('img/DA.jpeg')}}" class="img"alt="">
            </div>
            <span> Dimas Ismawan Abdullah</span>
            <p class="job">Mahasiswa Informatika Smester 3</p>
            <button onclick="window.location='{{ route('contact') }}'" style="margin-top: 0">
               Click
            </button>
          </div>
          <!-- Member 2 -->
          <div class="card-jasa">
            <div class="card-border-top">
            </div>
            <div class="img">
              <img src="{{asset('img/DA.jpeg')}}" class="img"alt="">
            </div>
            <span> Dimas Ismawan Abdullah</span>
            <p class="job">Mahasiswa Informatika Smester 3</p>
            <button onclick="window.location='{{ route('contact') }}'" style="margin-top: 0">
               Click
            </button>
          </div>
          <!-- Member 3 -->
          <div class="card-jasa">
            <div class="card-border-top">
            </div>
            <div class="img">
              <img src="{{asset('img/DA.jpeg')}}" class="img"alt="">
            </div>
            <span> Dimas Ismawan Abdullah</span>
            <p class="job">Mahasiswa Informatika Smester 3</p>
            <button onclick="window.location='{{ route('contact') }}'" style="margin-top: 0">
               Click
            </button>
          </div>
          <!-- Member 4 -->
          <div class="card-jasa">
            <div class="card-border-top">
            </div>
            <div class="img">
              <img src="{{asset('img/DA.jpeg')}}" class="img"alt="">
            </div>
            <span> Dimas Ismawan Abdullah</span>
            <p class="job">Mahasiswa Informatika Smester 3</p>
            <button onclick="window.location='{{ route('contact') }}'" style="margin-top: 0">
               Click
            </button>
          </div>
          <!-- Member 5 -->
          <div class="card-jasa">
            <div class="card-border-top">
            </div>
            <div class="img">
              <img src="{{asset('img/DA.jpeg')}}" class="img"alt="">
            </div>
            <span> Dimas Ismawan Abdullah</span>
            <p class="job">Mahasiswa Informatika Smester 3</p>
            <button onclick="window.location='{{ route('contact') }}'" style="margin-top: 0">
               Click
            </button>
          </div>
          <!-- Member 6 -->
          <div class="card-jasa">
            <div class="card-border-top">
            </div>
            <div class="img">
              <img src="{{asset('img/DA.jpeg')}}" class="img"alt="">
            </div>
            <span> Dimas Ismawan Abdullah</span>
            <p class="job">Mahasiswa Informatika Smester 3</p>
            <button onclick="window.location='{{ route('contact') }}'" style="margin-top: 0">
               Click
            </button>
          </div>
        </div>
      </div>
      <div class="card-footer text-center"> 
        <a href="{{route('contact')}}" class="link-primary link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover">Call Now</a>
      </div>
    </div> 
  </div> <!-- End of col-md-6 -->

</main>
