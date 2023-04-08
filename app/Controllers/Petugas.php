<?php
    namespace App\Controllers;
    use App\Models\ModelPetugas;

    class Petugas extends BaseController
    {
        public function index()
        {
            $model = new ModelPetugas();
            $pager = \Config\Services::pager();

            $data = array (
                'Petugas' => $model->paginate(10, 'Petugas'),
                'pager' => $model->pager
            );

            return view('Petugas/Petugas', $data);
        }

        public function Update($id)
        {
            $model = new ModelPetugas();   
            $data['Petugas'] = $model->getPetugasById($id)->getRow();
            echo view('Petugas/PetugasEdit', $data);
        }

        public function Edit()
        {
            $model = new ModelPetugas();
            $id = $this->request->getPost('IDPetugas');
            $data = array (
                'NipPetugas'  => $this->request->getPost('NipPetugas'),
                'NamaPetugas' => $this->request->getPost('NamaPetugas'),
                'TglLahirPetugas' => $this->request->getPost('TglLahirPetugas'),
                'NoTelpPetugas' => $this->request->getPost('NoTelpPetugas'),
                'EmailPetugas' => $this->request->getPost('EmailPetugas'),
                'AlamatPetugas' => $this->request->getPost('AlamatPetugas'),
                'BagianPetugas' => $this->request->getPost('BagianPetugas'),
            );
            $model->UpdatePetugas($data, $id);
            return redirect()->to('/Petugas');

        }

        public function Delete($id)
        {
            $model = new ModelPetugas();
            $model->DeletePetugas($id);
            return redirect()->to('/Petugas');
        }

        public function Input()
        {
            echo view('Petugas/PetugasInput');
        }

        public function Insert()
        {
            $model = new ModelPetugas();
            //$id = $this->request->getPost('id');
            $data = array (
                'NipPetugas'  => $this->request->getPost('NipPetugas'),
                'NamaPetugas' => $this->request->getPost('NamaPetugas'),
                'TglLahirPetugas' => $this->request->getPost('TglLahirPetugas'),
                'NoTelpPetugas' => $this->request->getPost('NoTelpPetugas'),
                'EmailPetugas' => $this->request->getPost('EmailPetugas'),
                'AlamatPetugas' => $this->request->getPost('AlamatPetugas'),
                'BagianPetugas' => $this->request->getPost('BagianPetugas'),
            );
            $model->InsertPetugas($data);
            return redirect()->to('/Petugas');   
        }

    }
    

?>