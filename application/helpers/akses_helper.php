<?php

function cek_akses()
{
    $ci = get_instance();
    if (!$ci->session->userdata('username')) {
        redirect('Home');
    }
}
