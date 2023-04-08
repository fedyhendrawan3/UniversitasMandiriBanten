<?php namespace App\Models;

use CodeIgniter\Model;

class ModelMahasiswa extends Model
{
    //table name
    protected $table = "mahasiswa";

    //allowed fields
    protected $allowedFields = 
    [
        'NimMahasiswa',
        'NamaMahasiswa',
        'TglLahirMahasiswa',
        'NoTelpMahasiswa',
        'EmailMahasiswa',
        'AlamatMahasiswa',
        'ProdiMahasiswa'
    ];

    public function getMahasiswa()
    {
        return $this->findAll();
    }


    public function getMahasiswaById($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['IDMahasiswa' => $id]);
        }   
    }
	
	public function UpdateMahasiswa($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('IDMahasiswa' => $id));
        return $query;
    }
	
	public function DeleteMahasiswa($id)
    {
        $query = $this->db->table($this->table)->delete(array('IDMahasiswa' => $id));
        return $query;
    }

    public function InsertMahasiswa($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}

?>