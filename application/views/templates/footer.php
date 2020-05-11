        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
            All Rights Reserved by <a href="<?= base_url('admin'); ?>">Antar Food</a>
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
        <script src="<?= base_url('assets'); ?>/libs/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="<?= base_url('assets'); ?>/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= base_url('assets'); ?>/libs/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url('assets'); ?>/dist/js/app-style-switcher.js"></script>
        <!--Wave Effects -->
        <script src="<?= base_url('assets'); ?>/dist/js/waves.js"></script>
        <!--Menu sidebar -->
        <script src="<?= base_url('assets'); ?>/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="<?= base_url('assets'); ?>/dist/js/custom.js"></script>
        <!--This page JavaScript -->

        <script>
            $('.costum-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.costum-file-label').addClass("selected").html(fileName);
            });
        </script>

        </body>

        </html>