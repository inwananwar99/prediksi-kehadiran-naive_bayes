
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
<!-- <script type="text/javascript" src="<?php echo base_url('assets/datatables/datatables.min.js') ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/datatables/lib/js/dataTables.bootstrap.min.js') ?>"></script> -->
<script type="text/javascript" src="//cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
	$(document).ready( function () {
    $('#klasifikasi').DataTable();
} );
</script>
<script type="text/javascript">
	$(document).ready( function () {
    $('.kehadiran').DataTable();
} );
</script>
</body>
</html>