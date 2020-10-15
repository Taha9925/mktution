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


function dateTimeFormat($date) {

    if($date==NULL) {
        return "---";
    } else {
        return date('d F, Y', strtotime($date)).' | '.date('h:i A', strtotime($date));
    }

}

function dateFormat($date) {

    if($date==NULL) {
        return "---";
    } else {
        return date('d F, Y', strtotime($date));
    }

}