 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
     <!-- Control sidebar content goes here -->
     <div class="p-3">
         <h5>Title</h5>
         <p>Sidebar content</p>
     </div>
 </aside>
 <!-- /.control-sidebar -->

 <!-- Main Footer -->
 <footer class="main-footer">
     <!-- To the right -->
     <div class="float-right d-none d-sm-inline">
         TK ABA NGABEAN 1
     </div>
     <!-- Default to the left -->
     <strong>TK ABA NGABEAN 1</strong>
 </footer>
 </div>
 <!-- ./wrapper -->

 <!-- REQUIRED SCRIPTS -->

 <!-- jQuery -->
 <script src="./assets/dashboard/plugins/jquery/jquery.min.js"></script>
 <!-- Bootstrap 4 -->
 <script src="./assets/dashboard/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
 <!-- DataTables  & Plugins -->
 <script src="./assets/dashboard/plugins/datatables/jquery.dataTables.min.js"></script>
 <script src="./assets/dashboard/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
 <script src="./assets/dashboard/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
 <script src="./assets/dashboard/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
 <script src="./assets/dashboard/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
 <script src="./assets/dashboard/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
 <script src="./assets/dashboard/plugins/jszip/jszip.min.js"></script>
 <script src="./assets/dashboard/plugins/pdfmake/pdfmake.min.js"></script>
 <script src="./assets/dashboard/plugins/pdfmake/vfs_fonts.js"></script>
 <script src="./assets/dashboard/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
 <script src="./assets/dashboard/plugins/datatables-buttons/js/buttons.print.min.js"></script>
 <script src="./assets/dashboard/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
 <!-- AdminLTE App -->
 <script src="./assets/dashboard/dist/js/adminlte.min.js"></script>

 <script>
     $(function() {
         $("#example1").DataTable({
             "responsive": true,
             "lengthChange": false,
             "autoWidth": false,
             "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
         }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
         });
     });
 </script>
 </body>

 </html>