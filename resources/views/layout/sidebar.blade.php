<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="/dashboard">
          <i class="icon-grid menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
          <i class="ti-server menu-icon"></i>
          <span class="menu-title">Data Master</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="charts">
          <ul class="nav flex-column sub-menu">  
          <li class="nav-item">
            <a class="nav-link" href="/masjid">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Masjid</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/penceramah">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">Penceramah</span>
            </a>
          </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/kmeans">
          <i class="ti-bar-chart menu-icon"></i>
          <span class="menu-title">Perhitungan</span>
        </a>
      </li>


      @if (App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration'))->pluck('kelompok_data')->toArray() == App\Models\KmeansModel::where('iteration', App\Models\KmeansModel::max('iteration') - 1)->pluck('kelompok_data')->toArray())       
      <li class="nav-item">
        <a class="nav-link" href="/maps">
          <i class="ti-map-alt menu-icon"></i>
          <span class="menu-title">Peta</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/clustering">
          <i class="ti-search menu-icon"></i>
          <span class="menu-title">Cari Cluster</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-toggle="collapse" href="#hasil" aria-expanded="false" aria-controls="charts">
          <i class="ti-check-box menu-icon"></i>
          <span class="menu-title">Hasil</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="hasil">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/centroid"><i class="ti-pin menu-icon"></i> Centroid</a></li>
            <li class="nav-item"> <a class="nav-link" href="/hasil_cluster"><i class="ti-map menu-icon"></i> Cluster</a></li>
            <li class="nav-item"> <a class="nav-link" href="/hasil_chart"><i class="ti-pie-chart menu-icon"></i> Chart</a></li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/pengujian">
          <i class="ti-ruler-alt-2 menu-icon"></i>
          <span class="menu-title">Pengujian</span>
        </a>
      </li>
      @endif
    </ul>
  </nav>