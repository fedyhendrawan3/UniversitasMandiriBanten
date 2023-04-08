<?php namespace App\Models;

use CodeIgniter\Model;

class ModelDosen extends Model
{
    //table name
    protected $table = "Dosen";

    //allowed fields
    protected $allowedFields = 
    [
        'NidDosen',
        'NamaDosen',
        'TglLahirDosen',
        'NoTelpDosen',
        'EmailDosen',
        'AlamatDosen',
        'MataKuliahDosen'
    ];

    public function getDosen()
    {
        return $this->findAll();
    }


    public function getDosenById($id = false)
    {
        if($id === false)
        {
            return $this->findAll();
        }
        else
        {
            return $this->getWhere(['IDDosen' => $id]);
        }   
    }
	
	public function UpdateDosen($data, $id)
    {
        $query = $this->db->table($this->table)->update($data, array('IDDosen' => $id));
        return $query;
    }
	
	public function DeleteDosen($id)
    {
        $query = $this->db->table($this->table)->delete(array('IDDosen' => $id));
        return $query;
    }

    public function InsertDosen($data)
    {
        $query = $this->db->table($this->table)->insert($data);
        return $query;
    }
}

?>