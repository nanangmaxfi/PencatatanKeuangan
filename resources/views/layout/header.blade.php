<!-- Navigation-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="{{url('/')}}">Pencatatan Keuangan</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="{{url('/')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Kategori">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-area-chart"></i>
                <span class="nav-link-text">Kategori</span>
            </a>
            <ul class="sidenav-second-level collapse" id="collapseMulti">
                <li>
                    <a href="{{url('/kategori/tambah')}}">Tambah Kategori</a></a>
                </li>
                <li>
                    <a href="{{url('/kategori/pemasukan')}}">Pemasukan</a>
                </li>
                <li>
                    <a href="{{url('/kategori/pengeluaran')}}">Pengeluaran</a></a>
                </li>                 
            </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Transaksi">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#trans" data-parent="#trans">
                <i class="fa fa-fw fa-table"></i>
                <span class="nav-link-text">Transaksi</span>
            </a>
            <ul class="sidenav-second-level collapse" id="trans">
                <li>
                    <a href="{{url('/transaction/pilih')}}">Tambah Transaksi</a></a>
                </li>
                <li>
                    <a href="{{url('/transaction/pemasukan')}}">Pemasukan</a>
                </li>
                <li>
                    <a href="{{url('/transaction/pengeluaran')}}">Pengeluaran</a></a>
                </li>                 
            </ul>
        </li>       
      </ul>

    </div>
  </nav>