<?php

$this->extend('Croogo/Croogo./Common/admin_index');
$this->CroogoHtml
	->addCrumb('', '/admin', array('icon' => $_icons['home']))
	->addCrumb(__d('croogo', 'Users'), '/' . $this->request->url);
?>
