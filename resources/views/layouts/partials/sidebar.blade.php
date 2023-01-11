<div class="main-sidebar">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="{{ url('/') }}">AYUNA APRAK</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="{{ url('/') }}">AP</a>
    </div>
    <ul class="sidebar-menu">
      <li class={{ Request::is('/')? "active" : "" }}>
        <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class={{ Request::is('cari')? "active" : "" }}>
        <a class="nav-link" href="{{ url('/cari') }}"><i class="fas fa-search"></i>
          <span>Cari Barang</span>
        </a>
      </li>

      <li class={{ Request::is('jenis-barang')? "active" : "" }}>
        <a class="nav-link" href="{{ url('/jenis-barang') }}"><i class="fas fa-bars"></i>
          <span>Jenis Barang</span>
        </a>
      </li>

      <li class={{ Request::is('barang')? "active" : "" }}>
        <a class="nav-link" href="{{ url('/barang') }}"><i class="fas fa-list"></i>
          <span>Daftar Barang</span>
        </a>
      </li>

      <li class={{ Request::is('rak')? "active" : "" }}>
        <a class="nav-link" href="{{ url('/rak') }}"><i class="fas fa-th"></i>
          <span>Daftar Rak</span>
        </a>
      </li>

      <li class={{ Request::is('info')? "active" : "" }}>
        <a class="nav-link" href="{{ url('/info') }}"><i class="fas fa-info"></i>
          <span>Pusat Bantuan</span>
        </a>
      </li>
    </ul>
  </aside>
</div>
