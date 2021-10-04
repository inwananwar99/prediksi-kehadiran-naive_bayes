<html>
<head>
    <title>Search with Ajax CI</title>
    
    <script src="<?php echo base_url("assets/js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
    <script src="<?php echo base_url("assets/js/config.js"); ?>"></script> <!-- Load file process.js -->
</head>
<body>
<h1>Data Kehadiran Masyarakat</h1><hr>
<input type="text" id="keyword">
<button type="button" id="btn-search">Search</button>
<a href="<?php echo base_url(); ?>">Reset</a>
<br>
<div id="view">
  <?php $this->load->view('view', array('hadir'=>$hadir)); // Load file view.php dan kirim data siswanya ?>
</div>
</body></html>