<?
//$edit_mode = True;
echo '<div class="proto_menu">';
$edit_mode_old = $edit_mode; 
//$edit_mode = 0;
$cls = array('','prevStep','currentStep','','','','','','','','');
$cls = array('','','','','','','','','','','');

$ini = $pag;

for ($r=0;$r <= $ini;$r++) {$cls[$r] = 'prevStep'; }
$cls[$ini] = 'currentStep';
echo '<table width="100%" cellpadding=0 cellspacing=0 border=0 class="lt1">';
for ($r=1;$r < 7;$r++)
	{
		//$edit_mode = True;
		$op = msg("top_submit_menu_".$r);
		$name="item".$r;
		$class_name="topmenu_off";
		if ($ini == $r) { $class_name = 'topmenu_on'; }
		echo '<TD align="center" class="'.$class_name.'" height=30>';
		if ($protocolo != '0000000') { echo '<A HREF="submit.php?dd91='.$r.'">'; }
		echo '<center><font class="'.$class_name.'">';
		echo $op; 
		echo '</A>';
		echo '<TD class="'.$class_name.'" width="20">';
		echo '<img src="img/topmenu_sp.png">';
	}
echo '</table>';
$edit_mode = $edit_mode_old;
echo '<center><H3>'.msg("submit_process").'</h3></center>';
$proj->le($protocolo);
echo $proj->resumo_cab();

$clinic = round($proj->doc_clinic);
?>

