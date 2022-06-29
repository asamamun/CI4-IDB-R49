<?php

namespace App\Models;

use CodeIgniter\Model;
use App\Models\CategoryModel;

class ProductModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'products';
    protected $primaryKey       = 'product_id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['product_name', 'product_code', 'product_description', 'product_price', 'category_id'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
/*     protected function checkCategory($data)
    {
        if (!isset($data['product_category'])) {
            $cat = $data['product_category'];
            //check if the catefory is in the database
            $c = new CategoryModel();
            $categories = $c->find($cat);
            if (!$categories) {
                $this->validationFailures['product_category'] = 'Category does not exist';
                return false;
            }
            else{
                $data['product_category'] = $cat;
            }
        }
        else{
            return false;
        }        
    } */


}
