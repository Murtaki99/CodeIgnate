<?php

namespace App\Controllers;

use App\Models\ComicModel;


class ComicController extends BaseController
{

    protected $comicModel;

    public function __construct()
    {
        $this->comicModel = new ComicModel();
    }

    public function index()
    {
        // $comic = $this->comicModel->findAll();
        $data = [
            'title' => 'All Comics',
            // 'comics' => $comic
            'comics' => $this->comicModel->getComic()
        ];

        // CONNECT DB NOT USING MODEL
        // $db = \Config\Database::connect();
        // $comic = $db->query("SELECT * FROM comics");
        // foreach ($comic->getResultArray() as $row){
        //     d($row);
        // }

        // USE MODEL
        // $comics = new ComicModel();
        // $comic= $this->comicModel ->findAll();
        return view('comics/index', $data);
    }

    public function detail($slug)
    {
        // $comic = $this->comicModel->where(['slug' => $slug])->first();
        $data = [
            'title' => 'Detail Comic',
            'comic' =>  $this->comicModel->getComic($slug)
        ];


        if (empty($data['comic'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('This tilte ' . $slug . ' Not Found');
        }




        return view('comics/detail', $data);
    }

    public function create()
    {
         session();
        $data = [
            'title' => 'Create comic',
            'validation' => \Config\Services::validation()
        ];

        return view('comics/create', $data);
    }

    public function store()
    {
        // validate
        // if (!$this->validate([
        //     'title' => 'required|is_unique[comic.title]'
        // ])) {
        //     $validation = \Config\Services::validation();
        //     $errors = implode(', ',
        //         $validation->getErrors()
        //     );
        //     log_message('error', 'Validation errors: ' . $errors);

        //     return redirect()->to('comics/create')->withInput()->with('validation', $validation);
        // }


        $slug = url_title($this->request->getVar('title'), '-', true);
        $this->comicModel->save([
            'title' => $this->request->getVar('title'),
             'slug'=> $slug,
            'penulis' => $this->request->getVar('penulis'),
            'penerbit' => $this->request->getVar('penerbit'),
            'cover' => $this->request->getVar('cover'),
        ]);
        session()->setFlashdata('flash','Ditambah');
        return redirect()->to('/comics');
    }
}
