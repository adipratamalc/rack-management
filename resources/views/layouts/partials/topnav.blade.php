<div class="navbar-bg"></div>

<nav class="navbar navbar-expand-lg main-navbar">
  <ul class="navbar-nav mr-3">
    <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
  </ul>

  <ul class="navbar-nav navbar-right ml-auto">
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">{{ Auth::user()->name }}</div>
      </a>

      <div class="dropdown-menu dropdown-menu-right">
        <button type="button" class="d-flex align-items-center dropdown-item has-icon text-danger" data-toggle="modal"
          data-target="#modalLogout">
          <i class="fas fa-sign-out-alt"></i> Logout
        </button>
      </div>
    </li>
  </ul>
</nav>


{{-- MODAL LOGOUT --}}
<div class="modal fade" role="dialog" tabindex="-1" id="modalLogout">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Keluar Aplikasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <span>Yakin ingin keluar?</span>
      </div>

      <div class="modal-footer bg-whitesmoke br">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <a href="/logout" class="btn btn-danger">Keluar</a>
      </div>
    </div>
  </div>
</div>
