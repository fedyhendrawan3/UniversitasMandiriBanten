<?php
    namespace App\Controllers;
    use App\Models\ModelDosen;

    class Dosen extends BaseController
    {
        public function index()
        {
            $model = new ModelDosen();
            $pager = \Config\Services::pager();

            $data = array (
                'Dosen' => $model->paginate(10, 'Dosen'),
                'pager' => $model->pager
            );

            return view('Dosen/Dosen', $data);
        }

        public function Update($id)
        {
            $model = new ModelDosen();   
            $data['Dosen'] = $model->getDosenById($id)->getRow();
            echo view('Dosen/DosenEdit', $data);
        }

        public function Edit()
        {
            $model = new ModelDosen();
            $id = $this->request->getPost('IDDosen');
            $data = array (
                'NidDosen'  => $this->request->getPost('NidDosen'),
                'NamaDosen' => $this->request->getPost('NamaDosen'),
                'TglLahirDosen' => $this->request->getPost('TglLahirDosen'),
                'NoTelpDosen' => $this->request->getPost('NoTelpDosen'),
                'EmailDosen' => $this->request->getPost('EmailDosen'),
                'AlamatDosen' => $this->request->getPost('AlamatDosen'),
                'MataKuliahDosen' => $this->request->getPost('MataKuliahDosen'),
            );
            $model->UpdateDosen($data, $id);
            return redirect()->to('/Dosen');

        }

        public function Delete($id)
        {
            $model = new ModelDosen();
            $model->DeleteDosen($id);
            return redirect()->to('/Dosen');
        }

        public function Input()
        {
            echo view('Dosen/DosenInput');
        }

        public function Insert()
        {
            $model = new ModelDosen();
            //$id = $this->request->getPost('id');
            $data = array (
                'NidDosen'  => $this->request->getPost('NidDosen'),
                'NamaDosen' => $this->request->getPost('NamaDosen'),
                'TglLahirDosen' => $this->request->getPost('TglLahirDosen'),
                'NoTelpDosen' => $this->request->getPost('NoTelpDosen'),
                'EmailDosen' => $this->request->getPost('EmailDosen'),
                'AlamatDosen' => $this->request->getPost('AlamatDosen'),
                'MataKuliahDosen' => $this->request->getPost('MataKuliahDosen'),
            );
            $model->InsertDosen($data);
            return redirect()->to('/Dosen');   
        }

    }
    

?>