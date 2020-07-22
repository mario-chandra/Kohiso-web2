<nav class="navbar navbar-inverse" role="navigation">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#"><span class="fa fa-globe"></span>KOHISO ADMIN PAGE</a>
    </div>
    <ul class="nav navbar-right top-nav">
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-danger">42</span> <i class="fa fa-envelope"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu message-dropdown">
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="message-preview">
                            <a href="#">
                                <div class="media">
                                    <div class="media-body">
                                        <h5 class="media-heading"><strong>John Smith</strong>
                                        </h5>
                                        <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li class="message-footer">
                            <a href="#">Read All New Messages</a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i> <b class="caret"></b></a>
                    <ul class="dropdown-menu alert-dropdown">
                        <li>
                            <a href="#">Alert Name <span class="label label-default">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-primary">Alert Badge</span></a>
                        </li>
                        <li>
                            <a href="#">Alert Name <span class="label label-success">Alert Badge</span></a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">View All</a>
                        </li>
                    </ul>
                </li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $admin['nama_admin'];?><span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="logoutadmin.php">Logout</a></li>

                </ul>
            </li>
        </ul>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav side-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="member.php">Data Member</a></li>

            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Data Produk <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="produk.php">Daftar Produk</a></li>
                    <li><a href="brand.php">Brand / Merk</a></li>
                    <li><a href="supplier.php">Suplier</a></li>
                    <li><a href="kategori.php">Kategori Produk</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Data Kurir <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="ongkir.php">Daftar Harga Ongkir</a></li>
                    <li><a href="kurir.php">Daftar Kurir</a></li>
                </ul>
            </li>
            <li class="dropdown">
                <a aria-expanded="false" href="#" class="dropdown-toggle" data-toggle="dropdown">Pengaturan <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="infobis.php">Informasi Bisnis</a></li>
                    <li><a href="identitas.php">Informasi SEO Website</a></li>
                    <li><a href="slider.php">Foto Slider</a></li>
                    <li><a href="admin.php">Akun Admin</a></li>
                </ul>
            </li>

        </ul>
    </div>
</nav>