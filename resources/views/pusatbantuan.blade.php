@extends('layouts.app')

@section('content')
<section class="section">
  <div class="section-header">
    <h1>Pusat Bantuan</h1>
  </div>

  <div class="section-body">
    <div class="login-brand">
      <img src="../assets/img/favicon.svg" alt="logo-aprak" height="40">
      <p class="h3 text-primary font-weight-bold mt-3">APRAK</p>
      <span class="h6">Aplikasi Manajemen Barang dan Rak</span>
    </div>

    <div class="row d-flex flex-column align-items-center justify-content-center">
      <div class="col-12 col-md-12 col-lg-5">
        <div class="card p-4">
          <div class="profile-widget-description">
            <h4>Halo, {{ Auth::user()->name }}</h4>
            <p>
              Jika mengalami kendala terkait operasional aplikasi ini, mohon segera menghubungi tim customer
              service melalui kontak kami dibawah ini.
            </p>
            <span>Salam, <span class="text-primary">Logidev Team</span></span>
          </div>
          <div class="card-footer text-center">
            <div class="font-weight-bold mb-2">Kontak Kami</div>
            <a href="https://wa.me/6289606620616?text=Halo,%20saya%20ingin%20bertanya%20mengenai%20APRAK"
              target="_blank" class="btn btn-social-icon btn-twitter mr-1 bg-primary">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="https://logidevid.github.io/" target="_blank"
              class="btn btn-social-icon btn-github mr-1 bg-primary">
              <i class="fas fa-globe"></i>
            </a>
            <a href="https://www.instagram.com/humanit__" target="_blank" class="btn btn-social-icon bg-primary">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
