<?php

function is_logged_in()
{
    $CI = &get_instance();
    $is_login = $CI->session->userdata('is_login');
    if (!$is_login) redirect('auth');
    return true;
}

function dd($data)
{
    var_dump($data);
    die();
}

function upload_file($file_upload)
{
    $CI = get_instance();

    $config['upload_path'] = "./uploads/";
    $config['file_name'] = time();
    $config['allowed_types'] = '*';

    $CI->load->library('upload');
    $CI->upload->initialize($config);

    if (!$CI->upload->do_upload($file_upload)) {
        var_dump($CI->upload->display_errors());
        die();
    } else {
        return $CI->upload->data()['file_name'];
    }
}

function set_toasts($message, $color)
{
    $CI = get_instance();
    $params = array(
        'message' => $message,
        'color' => $color
    );
    $CI->session->set_flashdata('toasts', $params);
}

function get_tahun_ajaran()
{

    $tanggalSekarang = new DateTime();
    $tahun = (int) $tanggalSekarang->format('Y');
    $bulan = (int) $tanggalSekarang->format('m');

    // Logika tahun ajaran
    if ($bulan >= 7) {
        $awal = $tahun;
    } else {
        $awal = $tahun - 1;
    }
    $akhir = $awal + 1;

    return $awal . '/' . $akhir;
}
