<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('login');
    }

    // public function index()
    // {
    //     $data['page'] = 'incident_list';
    //     //$this->load->view('layout', $data);  => For CI3
    //     echo view('layout', $data); //for CI4
    // }

    public function coba()
    {
        $data['title'] = 'Judul';
        $data['data1'] = 'Halo gan';
        $data['data2'] = 'Semoga sukses';
        // $aaa = $this->model->monel_name->function();

        // if(){

        // }   
        echo view('vue3', $data);
    }

    public function coba_form()
    {   
        $data['page'] = 'coba_form';
        echo view('layout', $data);
    }

    public function incident_list()
    {

        $data['page'] = 'incident_list';
        echo view('layout', $data);
    }

    public function incident_all()
    {

        $data['page'] = 'incident_all';
        echo view('layout', $data);
    }

    public function login()
    {
        echo view('login');
    }
}
