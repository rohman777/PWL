  <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">
      <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
          <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
            <i class="bi bi-house-door-fill"></i>
            <span>Home</span>
          </a>
        </li>
        <!-- End Home -->

        <li class="nav-item">
          <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
            <i class="bi bi-cart-check"></i>
            <span>Keranjang</span>
          </a>
        </li>
        <!-- End Keranjang -->

        <?php
if (session()->get('role') == 'admin') {
?>
    <li class="nav-item">
          <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
            <i class="bi bi-handbag-fill"></i>
            <span>Produk</span>
          </a>
        </li>
        <!-- End Produk -->
<?php
}
?>

<li class="nav-item">
    <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="/profile">
        <i class="bi bi-person"></i>
        <span>Profil</span>
    </a>
</li>
<!-- End Profil -->

      </ul>
    </aside>
    <!-- End Sidebar-->