<?php

function check_already_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id');
    if($user_session) {
        redirect('dashboard');
    }
}

function check_not_login()
{
    $ci =& get_instance();
    $user_session = $ci->session->userdata('id');
    if(!$user_session) {
        redirect('auth/login');
    }
}

function check_not_ts()
{
    $ci =& get_instance();
    $user_sessions = $ci->session->userdata('bimbel_user_type_id');
    if(($user_sessions == 3) OR ($user_sessions == 4)) {
        redirect('home');
    }
}

function check_admin()
{
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if($ci->fungsi->user_login()->bimbel_user_type_id != 1) {
        redirect('dashboard');
    }
}

function indo_currency($nominal)
{
	$result = "Rp " . number_format($nominal, 2, ',', '.');
	return $result;
}

function indo_date($date)
{
	$d = substr($date, 8, 2);
	$m = substr($date, 5, 2);
	$y = substr($date, 0, 4);
	return $d.'/'.$m.'/'.$y;
}

function tgl_ind($date)
{

	// array hari dan bulan
	$Hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
	$Bulan = array(
		"Januari", "Februari", "Maret", "April", "Mei", "Juni",
		"Juli", "Agustus", "September", "Oktober", "November", "Desember"
	);

	// pemisahan tahun, bulan, hari, dan waktu
	$tahun = substr($date, 0, 4);
	$bulan = substr($date, 5, 2);
	$tgl = substr($date, 8, 2);
	$waktu = substr($date, 11, 5);
	$hari = date("w", strtotime($date));
	$result = $tgl . " " . $Bulan[(int) $bulan - 1] . " " . $tahun . "";
	return $result;
}

function get_bimbel_user_name($id)
{
	$ci = &get_instance();
	$ci->load->model('bimbel_user_m');

	$name = $ci->bimbel_user_m->get($id)->row()->name;
	return $name;
}

function timeAgo($timestamp)
{
	$time = time() - $timestamp;

	if ($time < 60)
		return ($time > 1) ? $time . ' seconds' : 'a second';
	elseif ($time < 3600) {
		$tmp = floor($time / 60);
		return ($tmp > 1) ? $tmp . ' minutes' : ' a minute';
	} elseif ($time < 86400) {
		$tmp = floor($time / 3600);
		return ($tmp > 1) ? $tmp . ' hours' : ' a hour';
	} elseif ($time < 2592000) {
		$tmp = floor($time / 86400);
		return ($tmp > 1) ? $tmp . ' days' : ' a day';
	} elseif ($time < 946080000) {
		$tmp = floor($time / 2592000);
		return ($tmp > 1) ? $tmp . ' months' : ' a month';
	} else {
		$tmp = floor($time / 946080000);
		return ($tmp > 1) ? $tmp . ' years' : ' a year';
	}
}