<?php namespace App\Controllers;

use App\Models\LetterModel;
use App\Models\CategoryModel;

class Letters extends BaseController
{
    protected $letters;
    protected $categories;

    public function __construct()
    {
        helper(['form','url']);
        $this->letters    = new LetterModel();
        $this->categories = new CategoryModel();
    }

    public function index()
    {
        $q = $this->request->getGet('q');
        $data = [
            'q'     => $q,
            'rows'  => $this->letters->withCategory($q)->paginate(10),
            'pager' => $this->letters->pager,
            'menu'  => 'arsip'
        ];
        return view('layout/header', $data)
             .view('letters/index', $data)
             .view('layout/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Arsip Surat >> Unggah',
            'categories' => $this->categories->findAll(),
            'menu'  => 'arsip'
        ];
        return view('layout/header', $data)
             .view('letters/create', $data)
             .view('layout/footer');
    }

    public function store()
    {
        $rules = [
            'number'  => 'required',
            'title'   => 'required|min_length[3]',
            'category_id' => 'required|is_natural_no_zero',
            'file'    => 'uploaded[file]|max_size[file,5120]|ext_in[file,pdf]|mime_in[file,application/pdf]'
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $file = $this->request->getFile('file');
        $newName = $file->getRandomName();
        $file->move(WRITEPATH.'uploads/surat', $newName);

        $this->letters->insert([
            'number'        => $this->request->getPost('number'),
            'title'         => $this->request->getPost('title'),
            'origin'        => $this->request->getPost('origin'),
            'category_id'   => $this->request->getPost('category_id'),
            'file_name'     => $newName,
            'original_name' => $file->getClientName(),
        ]);

        return redirect()->to(site_url('arsip'))->with('msg','Data berhasil disimpan');
    }

    public function show($id)
    {
        $row = $this->letters->withCategory()->where('letters.id',$id)->get()->getRow();
        if (!$row) return redirect()->to(site_url('arsip'));
        $data = [
            'title' => 'Arsip Surat >> Lihat',
            'row'   => $row,
            'menu'  => 'arsip'
        ];
        return view('layout/header', $data)
             .view('letters/show', $data)
             .view('layout/footer');
    }

    public function download($id)
    {
        $row = $this->letters->find($id);
        if (!$row) return redirect()->to(site_url('arsip'));
        $path = WRITEPATH.'uploads/surat/'.$row['file_name'];
        return $this->response->download($path, null)->setFileName($row['original_name']);
    }

    public function delete($id)
    {
        $row = $this->letters->find($id);
        if ($row) {
            $path = WRITEPATH.'uploads/surat/'.$row['file_name'];
            if (is_file($path)) @unlink($path);
            $this->letters->delete($id);
            return redirect()->to(site_url('arsip'))->with('msg','Data terhapus');
        }
        return redirect()->to(site_url('arsip'));
    }
}
