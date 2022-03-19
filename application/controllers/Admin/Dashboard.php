<?php

class Dashboard extends CI_Controller
{
    public function Index()
    {
        $data=[
            'title'     => 'HOTELZENI | Dashboard',
            'judul'     => 'Dashboard',
            'subjudul'  => 'Dashboard',
            'breadcrum1'    => 'Dashboard'
        ];
        $this->template->load('Admin/Template','Admin/Dashboard/Index',$data);
    }
}