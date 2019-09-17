<?php
    if (!defined('BASEPATH')) exit('No direct script access allowed');

    if (!function_exists('layouts')){
  		function layouts($pageData){
  			$CI = &get_instance();
  			$pages['links'] = $CI->load->view('home/links',$pageData,TRUE);
  			$pages['header'] = $CI->load->view('home/header',$pageData,TRUE);
  			$pages['scripts'] = $CI->load->view('home/scripts',$pageData,TRUE);
  			$pages['footer'] = $CI->load->view('home/footer',$pageData,TRUE);
  			return $pages;
  		}
    }
?>
