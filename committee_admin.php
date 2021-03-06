<?php
/**
 * Reports page
 * @author Rene F. Gabriel Junior <renefgj@gmail.com>
 * @author Rene Faustino Gabriel Junior  (Analista-Desenvolvedor)
 * @copyright © Pan American Health Organization, 2013. All rights reserved.
 * @access public
 * @version v0.13.46
 * @package ProEthos
 * @subpackage Secretary
 */
if (($perfil -> valid('#ADM')) or ($perfil -> valid('#MAS')) or ($perfil -> valid('#SCR'))) {
	$menu = array();
	array_push($menu, array(msg('admin_protocols'), msg('protocols_new'), 'admin_protocols.php'));

	array_push($menu, array(msg('admin_research'), msg('admin_research'), 'admin_user.php'));

	array_push($menu, array(msg('admin_calender_type'), msg('scheduled_meeting'), 'meeting_scheduled.php'));
	//array_push($menu,array(msg('admin_metting'),msg('minutes_meeting'),'meeting_minutes.php'));
	array_push($menu, array(msg('admin_calender_type'), msg('calender'), 'admin_calender.php'));

	array_push($menu, array(msg('documents_title'), msg('document_type'), 'admin_document_type.php'));
	array_push($menu, array(msg('documents_title'), msg('documents_title'), 'admin_docs_type.php'));

	array_push($menu, array(msg('admin_post_mail'), msg('post_mail'), 'admin_ic.php'));

	array_push($menu, array(msg('admin_faq'), msg('admin_faq'), 'admin_faq.php'));

	if (($perfil -> valid('#ADM')) or ($perfil -> valid('#MAS'))) {
		array_push($menu, array(msg('admin_perfil'), msg('users'), 'admin_user.php'));
		array_push($menu, array(msg('admin_perfil'), msg('perfil_member'), 'admin_perfil_member.php'));
		array_push($menu, array(msg('admin_perfil'), msg('report_perfil_member'), 'admin_perfil_member_report.php'));
	}

	echo '<h1>' . msg('secretary_menu') . '</h1>';
	echo '<fieldset>';
	$tela = menus($menu, "3");
	echo $tela;
	echo '</fieldset>';
}
?>
