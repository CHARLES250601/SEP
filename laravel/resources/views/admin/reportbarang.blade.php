<!DOCTYPE html>
<html lang="en">

    @if ($errors->any())
    @foreach ($errors->all() as $err)
        <div class="alert alert-danger">{{ $err }}</div>
    @endforeach
    @endif

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BOARDGAME</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="assets/adminlte/plugins/fontawesome-free/css/all.min.css">

    <link rel="stylesheet" href="assets/adminlte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/adminlte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/adminlte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="assets/adminlte/dist/css/adminlte.min.css">
  </head>
  <body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button">
              <i class="fas fa-bars"></i>
            </a>
          </li>
        </ul>
        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
              <i class="fas fa-expand-arrows-alt"></i>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.navbar -->
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="/assets/index3.html" class="brand-link">

          <span class="brand-text font-weight-light">Boardgame Admin</span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                @if(Auth::check())
                <span class="text-white" style="line-height: 2.5;margin-right:10px;">{{Auth::user()->username }}</span>
                @endif
            </div>
          </div>
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="nav-icon fas fa-clipboard-list"></i>
                  <p> Boardgame Item </p>
                </a>

                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="/Admin" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Boardgame</p>
                    </a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="/user" class="nav-link">
                    <i class="nav-icon fas fa-address-card"></i>
                    <p> User</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="" class="nav-link">
                    <i class="nav-icon fas fa-file"></i>
                    <p> Report </p>
                </a>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/reportbarang" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Report Item</p>
                      </a>
                    </li>
                </ul>

                <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="/reportuser" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Report User</p>
                      </a>
                    </li>
                </ul>

              </li>

              <li class="nav-item">
                <a href="{{ url('logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-power-off"></i>
                    <p> Log out</p>
                </a>
              </li>

            </ul>
          </nav>
        </div>
      </aside>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6"></div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right"></ol>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title"></h3>
                  <a href="" button type="text" class="btn btn-success" >Report Barang</a></button>
                  <BR>
                  <BR>
                  <div class="card-tools">
                    <div class="input-group input-group-sm" style="width: 150px;"></div>
                  </div>
                  <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <th>ID</th>
                        <th>Boardgame</th>
                        <th>Qty</th>
                        <th>Purchase Price</th>
                        <th>Sell Price</th>
                        <th>Total Purchase</th>
                        <th>Total sales</th>
                        <th>Laba</th>
                    </thead>

                    <tbody>
                        @foreach ($reports as $row)
                        <tr>
                            <td>{{ $row->id }}</td>
                            <td>{{ $row->boardgames->boardgame_nama}}</td>
                            <td>{{ $row->qty_sold }}</td>
                            <td>Rp. {{ number_format($row->purchase_price,2,',','.') }}</td>
                            <td>Rp. {{ number_format($row->sell_price,2,',','.') }}</td>
                            <td>Rp. {{ number_format(($row->purchase_price* $row->qty_sold),2,',','.') }}</td>
                            <td>Rp. {{ number_format(($row->sell_price* $row->qty_sold),2,',','.') }}</td>
                            <td>Rp. {{ number_format(($row->sell_price - $row->purchase_price)*$row->qty_sold,2,',','.') }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
        </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="float-right d-none d-sm-block"></div>
      </footer>
      <!-- Control Sidebar -->
      <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
      </aside>

    </div>
    <script src="assets/adminlte/plugins/jquery/jquery.min.js"></script>>
    <script src="assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/adminlte/dist/js/adminlte.min.js"></script>
    <script src="assets/adminlte/dist/js/demo.js"></script>
    <script src="assets/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
  </body>
</html>
