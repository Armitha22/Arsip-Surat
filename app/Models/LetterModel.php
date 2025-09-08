<?php namespace App\Models;

use CodeIgniter\Model;

class LetterModel extends Model
{
    protected $table = 'letters';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'number','title','origin','category_id','file_name','original_name'
    ];
    protected $useTimestamps = false;

    public function withCategory($keyword = null)
    {
        $builder = $this->select('letters.*, categories.name as category_name')
                        ->join('categories', 'categories.id = letters.category_id', 'left')
                        ->orderBy('letters.created_at','DESC');

        if ($keyword) {
            $builder->like('letters.title', $keyword);
        }
        return $builder;
    }
}
