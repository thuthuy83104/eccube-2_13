<?php
/**
 * メルマガ登録・解除　トップページ
 */

require_once('../require.php');

class LC_Page {
	function LC_Page() {
		/** 必ず変更する **/
		$this->tpl_mainpage = 'magazine/index.tpl';
		$this->tpl_title .= 'メルマガ登録・解除';
	}
}

$objPage = new LC_Page();
$objPage->arrForm = $_POST;

// レイアウトデザインを取得
$objPage = sfGetPageLayout($objPage, false, DEF_LAYOUT);

$objView = new SC_SiteView();
$objView->assignobj($objPage);
$objView->display(SITE_FRAME);

//-----------------------------------------------------------------------------------------------------------------------------------
?>
