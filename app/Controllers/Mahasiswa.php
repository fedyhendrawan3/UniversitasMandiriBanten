<?php
    namespace App\Controllers;
    use App\Models\ModelMahasiswa;

    class Mahasiswa extends BaseController
    {
        public function index()
        {
            $model = new ModelMahasiswa();
            $pager = \Config\Services::pager();

            $data = array (
                'Mahasiswa' => $model->paginate(10, 'Mahasiswa'),
                'pager' => $model->pager
            );

            return view('Mahasiswa/Mahasiswa', $data);
        }

        public function Update($id)
        {
            $model = new ModelMahasiswa();   
            $data['Mahasiswa'] = $model->getMahasiswaById($id)->getRow();
            echo view('Mahasiswa/MahasiswaEdit', $data);
        }

        public function Edit()
        {
            $model = new ModelMahasiswa();
            $id = $this->request->getPost('IDMahasiswa');
            $data = array (
                'NimMahasiswa'  => $this->request->getPost('NimMahasiswa'),
                'NamaMahasiswa' => $this->request->getPost('NamaMahasiswa'),
                'TglLahirMahasiswa' => $this->request->getPost('TglLahirMahasiswa'),
                'NoTelpMahasiswa' => $this->request->getPost('NoTelpMahasiswa'),
                'EmailMahasiswa' => $this->request->getPost('EmailMahasiswa'),
                'AlamatMahasiswa' => $this->request->getPost('AlamatMahasiswa'),
                'ProdiMahasiswa' => $this->request->getPost('ProdiMahasiswa'),
            );
            $model->UpdateMahasiswa($data, $id);
            return redirect()->to('/Mahasiswa');

        }

        public function Delete($id)
        {
            $model = new ModelMahasiswa();
            $model->DeleteMahasiswa($id);
            return redirect()->to('/Mahasiswa');
        }

        public function Input()
        {
            echo view('Mahasiswa/MahasiswaInput');
        }

        public function Insert()
        {
            $model = new ModelMahasiswa();
            //$id = $this->request->getPost('id');
            $data = array (
                'NimMahasiswa'  => $this->request->getPost('NimMahasiswa'),
                'NamaMahasiswa' => $this->request->getPost('NamaMahasiswa'),
                'TglLahirMahasiswa' => $this->request->getPost('TglLahirMahasiswa'),
                'NoTelpMahasiswa' => $this->request->getPost('NoTelpMahasiswa'),
                'EmailMahasiswa' => $this->request->getPost('EmailMahasiswa'),
                'AlamatMahasiswa' => $this->request->getPost('AlamatMahasiswa'),
                'ProdiMahasiswa' => $this->request->getPost('ProdiMahasiswa'),
            );
            $model->InsertMahasiswa($data);
            return redirect()->to('/Mahasiswa');   
        }

    }
    

?>