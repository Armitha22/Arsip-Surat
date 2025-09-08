<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'Letters::index');

$routes->group('arsip', static function($routes) {
    $routes->get('/', 'Letters::index');
    $routes->get('tambah', 'Letters::create');
    $routes->post('simpan', 'Letters::store');
    $routes->get('(:num)', 'Letters::show/$1');           // Lihat (preview)
    $routes->get('unduh/(:num)', 'Letters::download/$1'); // Unduh PDF
    $routes->get('hapus/(:num)', 'Letters::delete/$1');   // Hapus
});

$routes->group('kategori', static function($routes) {
    $routes->get('/', 'Categories::index');
    $routes->get('tambah', 'Categories::create');
    $routes->post('simpan', 'Categories::store');
    $routes->get('edit/(:num)', 'Categories::edit/$1');
    $routes->post('update/(:num)', 'Categories::update/$1');
    $routes->get('hapus/(:num)', 'Categories::delete/$1');
});

$routes->get('about', 'About::index');

$routes->get('filepdf/(:segment)', function($file){
    $path = WRITEPATH.'uploads/surat/'.$file;
    if (!is_file($path)) throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    header('Content-Type: application/pdf');
    readfile($path);
    exit;
});

$routes->get('viewer', function(){
    // sederhana: tampilkan filepdf di <embed>, dipanggil dari iframe
    $f = service('request')->getGet('f');
    echo '<!doctype html><html><head><meta charset="utf-8"></head><body style="margin:0">
          <embed src="'.site_url('filepdf/'.$f).'" type="application/pdf" width="100%" height="100%">
          </body></html>';
});

