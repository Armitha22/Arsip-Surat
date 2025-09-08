<?php namespace App\Models;

use CodeIgniter\Model;

class CategoryModel extends Model
{
    protected $table = 'categories';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name'];
    protected $useTimestamps = false;
    
    // Optional: Validation rules
    protected $validationRules = [
        'name' => 'required|min_length[3]|max_length[100]'
    ];
    
    protected $validationMessages = [
        'name' => [
            'required' => 'Nama kategori wajib diisi',
            'min_length' => 'Nama kategori minimal 3 karakter',
            'max_length' => 'Nama kategori maksimal 100 karakter'
        ]
    ];
}