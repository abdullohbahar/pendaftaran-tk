 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="index3.html" class="brand-link">
         <img src="https://i0.wp.com/web.suaramuhammadiyah.id/wp-content/uploads/2023/02/logo-aisyiyah-official.png?resize=1024%2C1024&ssl=1" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
         <span class="brand-text font-weight-light">TK ABA NGABEAN 1</span>
     </a>

     <!-- Sidebar -->
     <div class="sidebar">

         <!-- Sidebar Menu -->
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                 <li class="nav-item">
                     <a href="<?= base_url('dashboard'); ?>" class="nav-link <?= $active == 'dashboard' ? 'active' : ''; ?>">
                         <i class="nav-icon fas fa-th"></i>
                         <p>
                             Dashboard
                         </p>
                     </a>
                 </li>
                 <li class="nav-item <?= $active == 'data-siswa' ? 'menu-open' : ''; ?>">
                     <a href="#" class="nav-link <?= $active == 'data-siswa' ? 'active' : ''; ?>">
                         <i class="nav-icon fas fa-users"></i>
                         <p>
                             Data Siswa
                             <i class="right fas fa-angle-left"></i>
                         </p>
                     </a>
                     <ul class="nav nav-treeview">
                         <li class="nav-item">
                             <a href="#" class="nav-link active">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Pendaftaran Siswa</p>
                             </a>
                         </li>
                         <li class="nav-item">
                             <a href="#" class="nav-link">
                                 <i class="far fa-circle nav-icon"></i>
                                 <p>Data Siswa Aktif</p>
                             </a>
                         </li>
                     </ul>
                 </li>
                 <li class="nav-item">
                     <a href="#" class="nav-link">
                         <i class="nav-icon fas fa-users"></i>
                         <p>
                             Data Guru
                         </p>
                     </a>
                 </li>
             </ul>
         </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>