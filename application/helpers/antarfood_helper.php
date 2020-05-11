<?php

function is_logged_in()
{
    $antar = get_instance();
    if (!$antar->session->userdata('email')) {
        redirect('auth');
    }
}
