<?php namespace App\Models;

use CodeIgniter\Model;

class ModelPetugas extends Model
{
    //table name
    protected $table = "Petugas";

    //allowed fields
    protected $allowedFields = 
    [
        'NipPetugas',
        'NamaPetugas',
        'TglLahirPetugas',
        'NoTelpPetugas',
        'EmailPetugas',
        'AlamatPetugas',
        'BagianPetugas'
    ];

    public function getPetugas()
    {
        return $this->findAll();
    }


    public function getPetugasById($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['IDPetugas' => $id]);
        }   
    }
	
	public function UpdatePetugas($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('IDPetugas' => $id));
        return $query;
    }
	
	public function DeletePetugas($id)
    {
        $query = $this->db->table($this->table)->delete(array('IDPetugas' => $id));
        return $query;
    }

    public function InsertPetugas($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}

?>