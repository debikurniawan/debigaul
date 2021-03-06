<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-riht">
    <div class="container d-flex justify-content-left justify-content-md-between">
      <div class="contact-info d-flex align-items-left">
        
      </div>
      
    </div>
  </section>

  <div class="container-fluid">
  <a class="navbar-brand" href="#"><h3>WEB SEKOLAH</h3></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="profil-dropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            Profil
          </a>
          <ul class="dropdown-menu" aria-labelledby="profil-dropdown">
            <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'tentang']) }}">Tentang</a></li>
            <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'sejarah']) }}">Sejarah</a></li>
            <li><a class="dropdown-item" href="{{ route('page', ['slug' => 'visi-misi']) }}">Visi & Misi</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('guru.index') }}">Guru</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" href="{{ route('berita.index') }}">Berita</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('galeri.index') }}">Galeri</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('kontak.index') }}">Kontak</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
