<?php
require("cab.php");
require($include.'sisdoc_data.php');
require("_class/_class_resume.php");
require("_class/_class_cep.php");
$cep = new cep;
require("_class/_class_cep_reports.php");
$cep_r = new cep_reports;

$rs = new resume;

echo '<h2>'.msg("report_002").'</h2>';
echo '<P>'.msg("report_002_inf").'</P>';

echo $cep_r->report_002();

echo '</div>';
?>
<script>
	
</script>
<?php 
require("foot.php");
?>
