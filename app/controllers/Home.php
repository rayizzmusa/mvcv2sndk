<?php

class Home extends Controller
{
    public function index()
    {
        $data['judul'] = "Home";
        $data['nama'] = $this->model('User_model')->getUser();
        $data['services'] = $this->model('Service_model')->getAllServices();


        $this->view('templates/header', $data);
        $this->view('home/index', $data);
        $this->view('templates/footer');
    }

    public function tambah()
    {
        if ($this->model('Service_model')->tambahDataService($_POST) > 0) {
            Flasher::setFlash('berhasil', 'ditambahkan', 'success');
            header('Location: ' . BASEURL . '/home');
            exit;
        } else {
            Flasher::setFlash('gagal', 'ditambahkan', 'danger');
        }
    }
}
