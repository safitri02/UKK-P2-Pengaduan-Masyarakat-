<!DOCTYPE html>
<html lang="en">
<head>
@yield('header')
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>@yield('title')</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Libraries -->
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('../assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ url('../assets/css/components.css') }}">
  
</head>

<body>
  <div id="app">
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
          </ul>
          <div class="search-element">
            <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
            <button class="btn" type="submit"><i class="fas fa-search"></i></button>
            <div class="search-backdrop"></div>

          </div>
        </form>
        @yield('navbar')
        <ul class="navbar-nav navbar-right">
  
    
          <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div></a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-title">Logged in 5 min ago</div>
              <a href="features-profile.html" class="dropdown-item has-icon">
                <i class="far fa-user"></i> Profile
              </a>
              <a href="features-activities.html" class="dropdown-item has-icon">
                <i class="fas fa-bolt"></i> Activities
              </a>
              <a href="features-settings.html" class="dropdown-item has-icon">
                <i class="fas fa-cog"></i> Settings
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item has-icon text-danger">
                <i class="fas fa-sign-out-alt"></i> Logout
              </a>
            </div>
          </li>
        </ul>
      </nav>
      @yield('sidebar')
      <div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <ul class="sidebar-menu">
              <li>
              <a class="nav-link" href="/siswa"><i class="far fa-square"></i> <span>Data Siswa</span></a>
              </li>
              {{-- <li>
              <a class="nav-link" href="/kelas"><i class="far fa-square"></i> <span>Data Kelas</span></a>
              </li>
              <li>
              <a class="nav-link" href="/jurusan"><i class="far fa-square"></i> <span>Data Jurusan</span></a>
              </li> --}}
              <li>
              <a class="nav-link" href="/pembayaran"><i class="far fa-square"></i> <span>Pembayaran</span></a>
              </li>
              <li>
              <a class="nav-link" href="/history"><i class="far fa-square"></i> <span>History Pembayaran</span></a>
              </li>
        </aside>
      </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
          @yield('content')
          
          </div>

          <div class="section-body">
          </div>
        </section>
      </div>
      @yield('footer')
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad Nauval Azhar</a>
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="{{ url('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script src="{{ url('../assets/js/stisla.js') }}"></script>
  <!-- JS Libraies -->
  
  <!-- Template JS File -->
  <script src="{{ url('../assets/js/scripts.js') }}"></script>
  <script src="{{ url('../assets/js/custom.js') }}"></script>
  
  <script>
  
  $(document).ready(function() {
    $('.js-example-basic-single').select2();
  });

  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
  });

//   $("#id_siswa").focusout(function(e){
//     // alert($(this).val());
//     var siswa = $(this).val();
//     $.ajax({
//         type: "POST",
//         url: "{{route('pembayaran')}}",
//         data: {'siswa':siswa},
//         dataType: 'json',
//         success : function(data) {
//             $('#nama').val(data.nama); 
//             $('#mobile_number').val(data.mobile); 
//             $('#party_joining_year').val(data.party_joining_year);
//             ...
//         },
//         error: function(response) {
//             alert(response.responseJSON.message);
//         }
//     });
// });
  
  </script>
  

  <!-- Page Specific JS File -->
</body>
</html>
