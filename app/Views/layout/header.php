<!doctype html>
<html lang="id">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= esc($title ?? 'Arsip Surat'); ?></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
  body { background:#f8fafc; }
  .sidebar { 
    width:250px; 
    min-height:100vh; 
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    border-right:1px solid #eee; 
    position:fixed; 
    box-shadow: 2px 0 10px rgba(0,0,0,0.1);
  }
  .sidebar .logo {
    text-align: center;
    padding: 2rem 1rem 1.5rem;
    border-bottom: 1px solid rgba(255,255,255,0.2);
    margin-bottom: 1rem;
  }
  .sidebar .logo h4 {
    color: white;
    font-weight: bold;
    margin: 0;
    font-size: 1.3rem;
  }
  .sidebar .logo small {
    color: rgba(255,255,255,0.8);
    font-size: 0.8rem;
  }
  .sidebar a { 
    display:flex; 
    align-items: center;
    padding:0.8rem 1.2rem; 
    color:rgba(255,255,255,0.9); 
    text-decoration:none; 
    border-radius:0.5rem; 
    margin:0.2rem 1rem;
    transition: all 0.3s ease;
    font-weight: 500;
  }
  .sidebar a i {
    margin-right: 0.8rem;
    width: 18px;
    text-align: center;
  }
  .sidebar a.active { 
    background:rgba(255,255,255,0.2); 
    color:white;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
  }
  .sidebar a:hover { 
    background:rgba(255,255,255,0.15); 
    color:white;
    transform: translateX(3px);
  }
  .content { 
    margin-left:260px; 
    padding:1.5rem;
  }
  .table thead th { 
    background:#f1f5f9; 
  }
  .page-header {
    background: white;
    padding: 1.5rem;
    border-radius: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    margin-bottom: 1.5rem;
  }
  .page-header h3 {
    margin: 0;
    color: #2d3748;
    font-weight: 600;
  }
</style>
</head>
<body>
<div class="sidebar">
  <div class="logo">
    <h4><i class="fas fa-archive"></i> MENU</h4>
    <small>Sistem Manajemen Surat</small>
  </div>
  <div class="p-2">
    <a class="<?= ($menu??'')==='arsip'?'active':''; ?>" href="<?= site_url('arsip'); ?>">
      <i class="fas fa-folder-open"></i> Arsip Surat
    </a>
    <a class="<?= ($menu??'')==='kategori'?'active':''; ?>" href="<?= site_url('kategori'); ?>">
      <i class="fas fa-tags"></i> Kategori Surat
    </a>
    <a class="<?= ($menu??'')==='about'?'active':''; ?>" href="<?= site_url('about'); ?>">
      <i class="fas fa-info-circle"></i> About
    </a>
  </div>
</div>
<div class="content">
  <div class="page-header">
    <h3><?= esc($title ?? ''); ?></h3>
  </div>

  <?php if(session()->getFlashdata('msg')): ?>
    <div class="alert alert-success small"><?= session()->getFlashdata('msg'); ?></div>
  <?php endif; ?>
  <?php if(session()->getFlashdata('errors')): $errs = (array)session()->getFlashdata('errors'); ?>
    <div class="alert alert-danger small mb-3">
      <?php foreach($errs as $e): ?><div><?= esc($e); ?></div><?php endforeach; ?>
    </div>
  <?php endif; ?>