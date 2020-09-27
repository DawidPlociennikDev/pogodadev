<?php
defined('BASEPATH') OR exit('No direct script access allowed');

    function chartVisitors($unique_visitors, $uniq_mobile, $uniq_computer) {
		$chartValues = ''; 
		foreach (array_reverse($unique_visitors) as $v) {
		    foreach (array_reverse($uniq_mobile) as $v_mob) {
		        if($v->day == $v_mob->day) {
		            $mobMonth = $v_mob->uniq;
		            break;
		        } else {
		            $mobMonth = 0;
		        }
		    }
		    foreach (array_reverse($uniq_computer) as $v_com) {
		        if($v->day == $v_com->day) {
		            $comMonth = $v_com->uniq;
		            break;
		        } else {
		            $comMonth = 0;
		        }
		    }
		    $date = str_split($v->day, 4);
		    $chartValues .= "['". date('m/Y', strtotime($date[0]."-".$date[1])) . "'," . $v->uniq . "," . $mobMonth . "," .  $comMonth . "],";
		}
		return $chartValues;
    }