<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $this->session->userdata('s_level'); ?></title>
</head>

<body id="page-top">
    <!-- <h1>Welcome <?php echo $this->session->userdata('s_username'); ?></h1>
    <h1>Anda Sebagai <?php echo $this->session->userdata('s_level'); ?> </h1> -->
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar Biru -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                <div class="sidebar-brand-text mx-3">Halaman <?php echo $this->session->userdata('s_level'); ?> </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('c_admin') ?>">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Produk -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Produk</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('c_admin/c_dataproduk') ?>">Data Produk</a>
                    </div>
                </div>
            </li>

            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseArticle" aria-expanded="true" aria-controls="collapseArticle">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Blog</span>
                </a>
                <div id="collapseArticle" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo site_url('C_Admin/c_article') ?>">Article Produk</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">
        </ul>
        <!-- End of Sidebar -->

        <!-- Blue Navbar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $this->session->userdata('s_username'); ?></span>
                                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Isi Konten  -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Article</h6>
                        </div>
                        <!-- Add Btn -->
                        <div class="card-header py-4">
                            <span><b>Klik button dibawah untuk menambahkan data</b></span>
                            <br><br>
                            <a href="<?php echo site_url('C_Admin/v_tambah_article') ?>" class="btn btn-primary btn-icon-split">
                                <span class="text">Tambah Data</span>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Gambar</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Opsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>

                                        <?php $no = 1;
                                        foreach ($tampil_data->result() as $tpl) { ?>

                                            <tr>
                                                <td><?php echo $no++ ?></td>
                                                <td><img style="width:100px" class="img-thumbnail" src="<?php echo base_url() ?>assets/admin/img/article/<?php echo $tpl->gambar ?>"> </td>
                                                <td><?php echo $tpl->judul ?></td>
                                                <td><?php echo $tpl->deskripsi ?></td>
                                                <td style="text-align:center;">
                                                    <a class=" btn btn-info btn-sm btn-icon-split" href="<?php echo site_url('C_Admin/v_edit_article/' . $tpl->id) ?>">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-info-circle"></i>
                                                        </span>
                                                        <span class="text">Edit</span>
                                                    </a>
                                                    <!-- set id untuk modal -->
                                                    <button class="btn btn-danger btn-sm btn-icon-split" data-target="#modal-hapus-<?php echo $tpl->id ?>" data-toggle="modal">
                                                        <span class="icon text-white-50">
                                                            <i class="fas fa-trash"></i>
                                                        </span>
                                                        <span class="text">Hapus</span>
                                                    </button>
                                                </td>
                                            </tr>
                                            <!--Default Bootstrap Modal-->
                                            <!--===================================================-->
                                            <!-- ambil id -->
                                            <div class="modal fade" id="modal-hapus-<?php echo $tpl->id ?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <!--Modal header-->
                                                        <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                                            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
                                                        </div>
                                                        <form action="<?php echo site_url('C_Admin/aksi_hapus_article/' . $tpl->id) ?>" method="POST" enctype="multipart/form-data">

                                                            <!--Modal body-->
                                                            <div class="modal-body">
                                                                <p>Yakin ingin menghapus data?</p>
                                                            </div>

                                                            <!--Modal footer-->
                                                            <div class="modal-footer">
                                                                <button data-dismiss="modal" class="btn btn-default" type="button">Batal</button>
                                                                <button class="btn btn-danger">Hapus Data</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>

                                            <?php } ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <!-- End of Main Content -->

                        <!-- Footer -->
                        <footer class="sticky-footer bg-white">
                            <div class="container my-auto">
                                <div class="copyright text-center my-auto">
                                    <span>Copyright &copy; Your Website 2019</span>
                                </div>
                            </div>
                        </footer>
                        <!-- End of Footer -->

                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

            </div>
            <!--===================================================-->

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Yakin Ingin Logout?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Klik "Logout" untuk keluar.</div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="<?php echo site_url('C_User/logout') ?>">Logout</a>
                        </div>
                    </div>
                </div>
            </div>
</body>

</html>



<!-- <?php echo site_url('C_Admin/aksi_hapus_article/' . $tpl->id) ?> -->