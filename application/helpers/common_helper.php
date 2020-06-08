<?php

function pr($data="", $switch=0) {

	if($switch) {
		echo "<pre>"; print_r($data); exit();
	} else {
		return true;	
	}

}

function tutor_url() {

	return base_url().PROJECT_TUTOR_URL.'/';

}
