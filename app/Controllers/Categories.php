<?php namespace App\Controllers;

use App\Models\CategoryModel;

class Categories extends BaseController
{
    protected $cat;
    public function __construct()
    {
        helper(['form','url']);
        $this->cat = new CategoryModel();
    }

    public function index()
{
    $data = [
        'rows'  => $this->cat->orderBy('id','ASC')->findAll(), // ASC agar ID terkecil di atas
        'menu'  => 'kategori'
    ];
    return view('layout/header', $data)
         .view('categories/index', $data)
         .view('layout/footer');
}

    public function create()
    {
        $data = ['title'=>'Kategori Surat >> Tambah', 'menu'=>'kategori'];
        return view('layout/header', $data)
             .view('categories/form', ['action'=>site_url('kategori/simpan')])
             .view('layout/footer');
    }

    public function store()
    {
        $name = $this->request->getPost('name');
        if (!$name) 
            return redirect()->back()->with('errors',['Nama kategori wajib']);
        $this->cat->insert(['name'=>$name]);
        return redirect()->to(site_url('kategori'))->with('msg','Data berhasil disimpan');
    }

    public function edit($id)
    {
        $row = $this->cat->find($id);
        if (!$row) {
            return redirect()->to(site_url('categories'));
        }
        
        $data = [
            'title'=>'Kategori Surat >> Edit', 
            'menu'=>'kategori',
            'row'=>$row, 
            'action'=>site_url('categories/update/'.$id)
        ];
        
        return view('layout/header', $data)
             .view('categories/edit', $data)
             .view('layout/footer');
    }

    public function update($id)
{
    $model = new CategoryModel();
    $data = [
        'name' => $this->request->getPost('name'),
    ];
    $model->update($id, $data);

    // arahkan ke route yang benar
    return redirect()->to(base_url('kategori'))
                     ->with('success', 'Kategori berhasil diperbarui');
}


    public function delete($id)
    {
        $this->cat->delete($id);
        return redirect()->to(site_url('kategori'))->with('msg','Data terhapus');
    }
}
