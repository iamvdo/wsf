<?php
if (!empty($_GET)) {
  $annee = $_GET['a'];
  $seance = $_GET['s'];
}

include('reveal/reveal-head.html');
?>
<script src="browserify.js"></script>
<script>VDO('slides', <?php echo $annee; ?>, <?php echo $seance; ?>);</script>
<?php
include('reveal/reveal-footer.html');
?>