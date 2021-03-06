<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/apple.png') }}">
  <title>Detail</title>
  <!-- Bootstrap Core CSS -->
  <link href="{{ asset('admin/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
  <!-- You can change the theme colors from here -->
  <link href="{{ asset('admin/css/colors/blue.css') }}" id="theme" rel="stylesheet">
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="fix-header fix-sidebar card-no-border">
  <!-- ============================================================== -->
  <!-- Preloader - style you can find in spinners.css -->
  <!-- ============================================================== -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
      <header class="topbar">
        <nav class="navbar top-navbar navbar-toggleable-sm navbar-light">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-header">
            <a class="navbar-brand" href="index.html">
              <!-- Logo icon --><b>
              <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->

              <!-- Light Logo icon -->
              <img src="{{asset('admin/images/logo-light-icon.png')}}" alt="homepage" class="light-logo" />
            </b>
            <!--End Logo icon -->
            <span style="color: white"><strong>ADMIN PAGE</strong></span>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto mt-md-0">
              <!-- This is  -->
              <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="mdi mdi-menu"></i></a> </li>
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                <form class="app-search">
                  <input type="text" class="form-control" placeholder="Search & enter"> <a class="srh-btn"><i class="ti-close"></i></a> </form>
                </li>
              </ul>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="admin/images/users/1.jpg" alt="user" class="profile-pic m-r-10" />{{ Session::get('nama') }}</a>
                </li>
              </ul>
            </div>
          </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
          <!-- Sidebar scroll-->
          <div class="scroll-sidebar">
            <!-- Sidebar navigation-->
            <nav class="sidebar-nav">
              <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{ url('dashboard') }}" aria-expanded="false"><i class="mdi mdi-gauge"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                <li> <a class="waves-effect waves-dark" href="{{ url('data') }}" aria-expanded="false"><i class="mdi mdi-book-open-variant"></i><span class="hide-menu">Data</span></a>
                </li>
              </ul>
            </nav>
            <!-- End Sidebar navigation -->
          </div>
          <!-- End Sidebar scroll-->
          <!-- Bottom points-->
          <div class="sidebar-footer">
            <!-- item--><a href="{{url('logout')}}" class="link" data-toggle="tooltip" title="Logout">
            <button class="btn btn-danger">
                <i class="mdi mdi-power"></i>
            </button>
            </a>
        </div>
            <!-- End Bottom points-->
          </aside>
          <!-- ============================================================== -->
          <!-- End Left Sidebar - style you can find in sidebar.scss  -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Page wrapper  -->
          <!-- ============================================================== -->
          <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
              <!-- ============================================================== -->
              <!-- Bread crumb and right sidebar toggle -->
              <!-- ============================================================== -->
              <div class="row page-titles">
                <div class="col-md-5 col-8 align-self-center">
                  <h3 class="text-themecolor m-b-0 m-t-0">Data</h3>
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Data Detail</li>
                  </ol>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- End Bread crumb and right sidebar toggle -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- Start Page Content -->
              <!-- ============================================================== -->
              <div class="row">
                <div class="col-12">
                  <div class="card">
                    <div class="card-block">
                      <h2>Data detail {{$detail[0]->nama}}</h2>
                      <p>
                        <a href="{{url('data')}}"><button onclick="return confirm('Back to data page?');" type="button" name="button" class="btn btn-primary">back</button></a>
                      </p>
                      <form method="post" action="{{ url('send') }}">
                        {{ csrf_field() }}
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Nama</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->nama}}"   name="nama" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Angkatan</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->angkatan}}"   name="angkatan" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Jurusan</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->jurusan}}"   name="jurusan" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Prodi</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->prodi}}"   name="prodi" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">IPK</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->ipk}}"   name="ipk" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Judul Skripsi</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->skripsi}}"   name="skripsi" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Nomor Telp/WA</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->no_telp}}"   name="telp" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Email</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->email}}"   name="email" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Instagram</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->instagram}}"   name="instagram" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Sosmed Lainnya</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->sosmed}}"   name="sosmed" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Alamat</label>
                          <div class="col-sm-10">
                            <textarea   name="alamat" class="form-control">{{$detail[0]->alamat}}</textarea>
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Kegiatan saat ini</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->kegiatan}}"   name="kegiatan" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Kegiatan Lainnya</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->lainnya}}"   name="lainnya" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">tempat kerja/freelance/part-time/ekstensi</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->tempat_kerja}}"   name="tempat_kerja" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Posisi Kerja</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->posisi}}"   name="posisi" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Jabatan Kerja</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->jabatan}}"   name="jabatan" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Sertifikat yang pernah didapat</label>
                          <div class="col-sm-10">
                            <textarea   name="sertifikat" class="form-control">{{$detail[0]->sertifikat}}</textarea>
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Lomba yang pernah diikuti</label>
                          <div class="col-sm-10">
                            <textarea   name="lomba" class="form-control">{{$detail[0]->lomba}}</textarea>
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Prestasi yang pernah diraih</label>
                          <div class="col-sm-10">
                            <textarea   name="prestasi" class="form-control">{{$detail[0]->prestasi}}</textarea>
                          </div>
                        </div> <!-- /form group -->
                        <div class="form-group row">
                          <label class="col-sm-2 control-label">Berminat jadi dosen PNJ?</label>
                          <div class="col-sm-10">
                            <input value="{{$detail[0]->minat_dosen}}"   name="dosen" type="text" class="form-control">
                          </div>
                        </div> <!-- /form group -->

                        <!-- <div class="text-center">
                          <button type="submit" name="button" class="btn btn-primary"  >Submit</button>
                        </div> -->

                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ============================================================== -->
              <!-- End PAge Content -->
              <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer">
              © 2017 Material Pro Admin by wrappixel.com
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
          </div>
          <!-- ============================================================== -->
          <!-- End Page wrapper  -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{ asset('admin/plugins/bootstrap/js/tether.min.js') }}"></script>
        <script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
        <!-- slimscrollbar scrollbar JavaScript -->
        <script src="{{ asset('admin/js/jquery.slimscroll.js') }}"></script>
        <!--Wave Effects -->
        <script src="{{ asset('admin/js/waves.js') }}"></script>
        <!--Menu sidebar -->
        <script src="{{ asset('admin/js/sidebarmenu.js') }}"></script>
        <!--stickey kit -->
        <script src="{{ asset('admin/plugins/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>
        <!--Custom JavaScript -->
        <script src="{{ asset('admin/js/custom.min.js') }}"></script>
      </body>

      </html>
