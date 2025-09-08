<style>
.arsip-main-container {
  background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(248,250,252,0.95) 100%);
  backdrop-filter: blur(20px);
  border-radius: 25px;
  border: 1px solid rgba(255,255,255,0.3);
  box-shadow: 0 25px 50px rgba(0,0,0,0.1);
  overflow: hidden;
  position: relative;
}

.main-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, #667eea, #764ba2, #11998e, #38ef7d);
  background-size: 400% 400%;
  animation: main-gradient 15s ease infinite;
  opacity: 0.06;
  pointer-events: none;
}

@keyframes main-gradient {
  0% { background-position: 0% 50%; }
  25% { background-position: 100% 50%; }
  50% { background-position: 100% 0%; }
  75% { background-position: 0% 0%; }
  100% { background-position: 0% 50%; }
}

.arsip-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 40px;
  position: relative;
  overflow: hidden;
}

.arsip-header::before {
  content: '';
  position: absolute;
  width: 400px;
  height: 400px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 60%);
  top: -200px;
  right: -200px;
  animation: header-float 10s ease-in-out infinite;
}

@keyframes header-float {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-30px) rotate(180deg); }
}

.header-content {
  position: relative;
  z-index: 2;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.header-info h1 {
  font-size: 2.5rem;
  font-weight: 700;
  margin: 0 0 10px 0;
}

.header-info p {
  margin: 0;
  opacity: 0.9;
  font-size: 1.1rem;
}

.stats-mini {
  text-align: right;
  background: rgba(255,255,255,0.15);
  backdrop-filter: blur(10px);
  padding: 20px;
  border-radius: 20px;
  border: 1px solid rgba(255,255,255,0.2);
}

.stats-number {
  font-size: 2.5rem;
  font-weight: 700;
  margin: 0;
}

.stats-label {
  opacity: 0.9;
  margin: 5px 0 0 0;
  font-size: 14px;
}

.search-section {
  background: rgba(255,255,255,0.8);
  backdrop-filter: blur(15px);
  padding: 30px 40px;
  position: relative;
  z-index: 1;
  border-bottom: 1px solid rgba(0,0,0,0.05);
}

.search-container {
  display: flex;
  align-items: center;
  gap: 20px;
  flex-wrap: wrap;
}

.search-input-group {
  flex: 1;
  min-width: 300px;
  position: relative;
  background: white;
  border-radius: 50px;
  box-shadow: 0 10px 30px rgba(0,0,0,0.1);
  overflow: hidden;
}

.search-input {
  width: 100%;
  height: 60px;
  border: none;
  background: transparent;
  padding: 0 25px 0 60px;
  font-size: 16px;
  font-weight: 500;
  color: #333;
}

.search-input:focus {
  outline: none;
}

.search-icon {
  position: absolute;
  left: 25px;
  top: 50%;
  transform: translateY(-50%);
  color: #667eea;
  font-size: 18px;
  z-index: 2;
}

.search-buttons {
  display: flex;
  gap: 15px;
}

.btn-search-modern {
  padding: 15px 25px;
  border: none;
  border-radius: 50px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-size: 14px;
  cursor: pointer;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  display: flex;
  align-items: center;
  gap: 8px;
  position: relative;
  overflow: hidden;
}

.btn-search-modern::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.5s;
}

.btn-search-modern:hover::before {
  left: 100%;
}

.btn-primary-search {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.btn-primary-search:hover {
  transform: translateY(-2px);
  box-shadow: 0 12px 30px rgba(102, 126, 234, 0.4);
}

.btn-outline-search {
  background: rgba(255,255,255,0.8);
  color: #667eea;
  border: 2px solid rgba(102, 126, 234, 0.3);
}

.btn-outline-search:hover {
  background: rgba(102, 126, 234, 0.1);
  border-color: #667eea;
  transform: translateY(-2px);
}

.btn-add-arsip {
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  color: white;
  padding: 15px 30px;
  border-radius: 50px;
  text-decoration: none;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  display: flex;
  align-items: center;
  gap: 10px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 10px 25px rgba(17, 153, 142, 0.3);
  position: relative;
  overflow: hidden;
}

.btn-add-arsip::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.5s;
}

.btn-add-arsip:hover::before {
  left: 100%;
}

.btn-add-arsip:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(17, 153, 142, 0.4);
  color: white;
}

.table-section {
  position: relative;
  z-index: 1;
}

.table-responsive-modern {
  background: rgba(255,255,255,0.9);
  backdrop-filter: blur(15px);
  border-radius: 0 0 25px 25px;
  overflow: hidden;
}

.table-arsip {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  background: transparent;
  margin: 0;
}

.table-arsip thead {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.table-arsip thead th {
  color: white;
  padding: 25px 20px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  font-size: 13px;
  border: none;
  text-align: center;
  position: relative;
}

.table-arsip tbody tr {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  border-bottom: 1px solid rgba(0,0,0,0.05);
}

.table-arsip tbody tr:hover {
  background: rgba(102, 126, 234, 0.08);
  transform: scale(1.01);
  box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.table-arsip tbody td {
  padding: 25px 20px;
  border: none;
  text-align: center;
  vertical-align: middle;
}

.row-number {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 14px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.document-number {
  background: rgba(102, 126, 234, 0.1);
  color: #667eea;
  padding: 8px 15px;
  border-radius: 20px;
  font-weight: 700;
  font-size: 16px;
  display: inline-block;
}

.document-title {
  font-weight: 600;
  color: #333;
  font-size: 16px;
  margin-bottom: 5px;
}

.category-badge {
  background: linear-gradient(135deg, #ff9a9e 0%, #fecfef 100%);
  color: #666;
  padding: 6px 15px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  display: inline-block;
}

.date-info {
  font-weight: 600;
  color: #333;
  margin-bottom: 3px;
}

.time-info {
  color: #666;
  font-size: 13px;
}

.action-buttons-arsip {
  display: flex;
  gap: 8px;
  justify-content: center;
  align-items: center;
}

.btn-action-arsip {
  padding: 10px 15px;
  border: none;
  border-radius: 20px;
  font-weight: 600;
  text-decoration: none;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 0.3px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  display: inline-flex;
  align-items: center;
  gap: 6px;
  position: relative;
  overflow: hidden;
}

.btn-action-arsip::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
  transition: left 0.4s;
}

.btn-action-arsip:hover::before {
  left: 100%;
}

.btn-view {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.btn-view:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
  color: white;
}

.btn-download {
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  color: white;
  box-shadow: 0 5px 15px rgba(17, 153, 142, 0.3);
}

.btn-download:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(17, 153, 142, 0.4);
  color: white;
}

.btn-delete-arsip {
  background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
  color: white;
  box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
}

.btn-delete-arsip:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(255, 107, 107, 0.4);
  color: white;
}

.empty-state-arsip {
  text-align: center;
  padding: 80px 40px;
  color: #667eea;
}

.empty-icon-arsip {
  font-size: 100px;
  margin-bottom: 30px;
  opacity: 0.6;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.empty-text-arsip {
  font-size: 24px;
  font-weight: 700;
  margin-bottom: 15px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.empty-subtext-arsip {
  color: #999;
  font-size: 16px;
  margin-bottom: 30px;
}

.pagination-modern {
  background: rgba(255,255,255,0.8);
  backdrop-filter: blur(15px);
  padding: 30px 40px;
  text-align: center;
  border-radius: 0 0 25px 25px;
}

.pagination-modern .pagination {
  display: inline-flex;
  gap: 10px;
  margin: 0;
}

.pagination-modern .page-item .page-link {
  background: rgba(102, 126, 234, 0.1);
  border: 2px solid rgba(102, 126, 234, 0.2);
  color: #667eea;
  padding: 12px 18px;
  border-radius: 50px;
  font-weight: 600;
  text-decoration: none;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  position: relative;
  overflow: hidden;
}

.pagination-modern .page-item .page-link::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.2), transparent);
  transition: left 0.4s;
}

.pagination-modern .page-item .page-link:hover::before {
  left: 100%;
}

.pagination-modern .page-item .page-link:hover {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  border-color: #667eea;
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(102, 126, 234, 0.3);
}

.pagination-modern .page-item.active .page-link {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  border-color: #667eea;
  box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
}

.table-entrance-arsip {
  animation: slideInArsip 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes slideInArsip {
  0% {
    opacity: 0;
    transform: translateY(50px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (max-width: 768px) {
  .header-content {
    flex-direction: column;
    gap: 20px;
    text-align: center;
  }
  
  .header-info h1 {
    font-size: 2rem;
  }
  
  .search-container {
    flex-direction: column;
    gap: 15px;
  }
  
  .search-input-group {
    min-width: 100%;
  }
  
  .search-buttons {
    justify-content: center;
    width: 100%;
  }
  
  .action-buttons-arsip {
    flex-direction: column;
    gap: 5px;
  }
  
  .btn-action-arsip {
    padding: 8px 12px;
    font-size: 11px;
    width: 100%;
    justify-content: center;
  }
  
  .table-arsip thead th,
  .table-arsip tbody td {
    padding: 15px 8px;
    font-size: 12px;
  }
  
  .document-title {
    font-size: 14px;
  }
  
  .category-badge {
    font-size: 10px;
    padding: 4px 8px;
  }
  
  .pagination-modern {
    padding: 20px;
  }
}
</style>

<div class="arsip-main-container table-entrance-arsip">
  <div class="main-glow"></div>
  
  <div class="arsip-header">
    <div class="header-content">
      <div class="header-info">
        <h1><i class="fas fa-archive"></i> Arsip Surat</h1>
        <p>Berikut adalah surat-surat yang telah terbit dan diarsipkan. Klik Lihat pada kolom aksi untuk melihat detail surat.</p>
      </div>
      <div class="stats-mini">
        <div class="stats-number"><?= count($rows ?? []) ?></div>
        <div class="stats-label">Total Arsip</div>
      </div>
    </div>
  </div>
  
  <div class="search-section">
    <form class="search-container" method="get" action="<?= site_url('arsip'); ?>">
      <div class="search-input-group">
        <i class="fas fa-search search-icon"></i>
        <input type="text" 
               class="search-input" 
               name="q" 
               value="<?= esc($q); ?>" 
               placeholder="Cari berdasarkan judul, nomor surat, atau kategori...">
      </div>
      <div class="search-buttons">
        <button class="btn-search-modern btn-primary-search">
          <i class="fas fa-search"></i>
          Cari
        </button>
        <a class="btn-search-modern btn-outline-search" href="<?= site_url('arsip'); ?>">
          <i class="fas fa-redo"></i>
          Reset
        </a>
      </div>
      <div class="ms-auto">
        <a class="btn-add-arsip" href="<?= site_url('arsip/tambah'); ?>">
          <i class="fas fa-plus-circle"></i>
          Arsipkan Surat
        </a>
      </div>
    </form>
  </div>

  <div class="table-section">
    <div class="table-responsive-modern">
      <table class="table-arsip">
        <thead>
          <tr>
            <th style="width:50px"><i class="fas fa-hashtag"></i></th>
            <th><i class="fas fa-barcode"></i> Nomor Surat</th>
            <th><i class="fas fa-heading"></i> Judul</th>
            <th><i class="fas fa-tags"></i> Kategori</th>
            <th><i class="fas fa-clock"></i> Waktu Pengarsipan</th>
            <th style="width:240px"><i class="fas fa-cogs"></i> Aksi</th>
          </tr>
        </thead>
        <tbody>
          <?php if(empty($rows)): ?>
            <tr>
              <td colspan="6" class="empty-state-arsip">
                <div class="empty-icon-arsip">
                  <i class="fas fa-folder-open"></i>
                </div>
                <div class="empty-text-arsip">Belum Ada Arsip</div>
                <div class="empty-subtext-arsip">
                  Mulai dengan mengarsipkan dokumen surat pertama Anda
                </div>
                <a class="btn-add-arsip" href="<?= site_url('arsip/tambah'); ?>" style="margin-top: 20px;">
                  <i class="fas fa-plus-circle"></i>
                  Arsipkan Surat Pertama
                </a>
              </td>
            </tr>
          <?php else:
            $no = 1 + (int)($pager->getCurrentPage() - 1) * $pager->getPerPage();
            foreach($rows as $r): ?>
            <tr>
              <td>
                <div class="row-number"><?= $no++; ?></div>
              </td>
              <td>
                <div class="document-number"><?= esc($r['number']); ?></div>
              </td>
              <td>
                <div class="document-title"><?= esc($r['title']); ?></div>
              </td>
              <td>
                <span class="category-badge"><?= esc($r['category_name']); ?></span>
              </td>
              <td>
                <div class="date-info"><?= date('d/m/Y', strtotime($r['created_at'])); ?></div>
                <div class="time-info"><?= date('H:i', strtotime($r['created_at'])); ?></div>
              </td>
              <td>
                <div class="action-buttons-arsip">
                  <a class="btn-action-arsip btn-view" href="<?= site_url('arsip/'.$r['id']); ?>" title="Lihat Dokumen">
                    <i class="fas fa-eye"></i>
                    Lihat
                  </a>
                  <a class="btn-action-arsip btn-download" href="<?= site_url('arsip/unduh/'.$r['id']); ?>" title="Unduh PDF">
                    <i class="fas fa-download"></i>
                    Unduh
                  </a>
                  <a class="btn-action-arsip btn-delete-arsip" href="#" onclick="return confirmDeleteArsip('<?= site_url('arsip/hapus/'.$r['id']); ?>')" title="Hapus Arsip">
                    <i class="fas fa-trash-alt"></i>
                    Hapus
                  </a>
                </div>
              </td>
            </tr>
          <?php endforeach; endif; ?>
        </tbody>
      </table>
    </div>
    
    <?php if(!empty($rows)): ?>
    <div class="pagination-modern">
      <?= $pager->links(); ?>
    </div>
    <?php endif; ?>
  </div>
</div>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
// Enhanced confirm delete function for arsip
function confirmDeleteArsip(url) {
  const modal = document.createElement('div');
  modal.innerHTML = `
    <div class="confirm-modal-overlay" style="
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.8);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10000;
      animation: fadeInModal 0.3s ease;
    ">
      <div class="confirm-modal" style="
        background: white;
        border-radius: 25px;
        padding: 50px;
        text-align: center;
        box-shadow: 0 30px 60px rgba(0,0,0,0.3);
        max-width: 450px;
        margin: 20px;
        animation: scaleInModal 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        position: relative;
        overflow: hidden;
      ">
        <div style="
          position: absolute;
          top: 0;
          left: 0;
          right: 0;
          height: 5px;
          background: linear-gradient(90deg, #ff6b6b 0%, #ee5a52 100%);
        "></div>
        
        <div style="font-size: 80px; margin-bottom: 25px;">
          <i class="fas fa-exclamation-triangle" style="
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
          "></i>
        </div>
        
        <h3 style="
          color: #333; 
          margin-bottom: 15px; 
          font-weight: 700;
          font-size: 1.5rem;
        ">Konfirmasi Penghapusan</h3>
        
        <p style="
          color: #666; 
          margin-bottom: 35px;
          font-size: 16px;
          line-height: 1.6;
        ">Apakah Anda yakin ingin menghapus arsip ini? <br><strong>Tindakan ini tidak dapat dibatalkan</strong> dan akan menghapus file secara permanen.</p>
        
        <div style="display: flex; gap: 20px; justify-content: center;">
          <button class="btn-modal-cancel" style="
            background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
          ">
            <i class="fas fa-times" style="margin-right: 8px;"></i>
            Batal
          </button>
          <button class="btn-modal-confirm" style="
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: white;
            border: none;
            padding: 15px 30px;
            border-radius: 50px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
          ">
            <i class="fas fa-trash-alt" style="margin-right: 8px;"></i>
            Ya, Hapus
          </button>
        </div>
      </div>
    </div>
    
    <style>
      @keyframes fadeInModal {
        0% { opacity: 0; }
        100% { opacity: 1; }
      }
      
      @keyframes scaleInModal {
        0% { transform: scale(0.7) translateY(-50px); opacity: 0; }
        100% { transform: scale(1) translateY(0); opacity: 1; }
      }
      
      @keyframes fadeOutModal {
        0% { opacity: 1; }
        100% { opacity: 0; }
      }
      
      .btn-modal-cancel:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(108, 117, 125, 0.4);
      }
      
      .btn-modal-confirm:hover {
        transform: translateY(-2px);
        box-shadow: 0 10px 25px rgba(255, 107, 107, 0.4);
      }
    </style>
  `;
  
  document.body.appendChild(modal);
  
  const overlay = modal.querySelector('.confirm-modal-overlay');
  const cancelBtn = modal.querySelector('.btn-modal-cancel');
  const confirmBtn = modal.querySelector('.btn-modal-confirm');
  
  cancelBtn.onclick = () => {
    overlay.style.animation = 'fadeOutModal 0.3s ease';
    setTimeout(() => modal.remove(), 300);
  };
  
  confirmBtn.onclick = () => {
    confirmBtn.innerHTML = '<i class="fas fa-spinner fa-spin" style="margin-right: 8px;"></i>Menghapus...';
    setTimeout(() => {
      window.location.href = url;
    }, 500);
  };
  
  overlay.onclick = (e) => {
    if (e.target === overlay) {
      cancelBtn.onclick();
    }
  };
  
  return false;
}

// Add entrance animation for table rows
document.addEventListener('DOMContentLoaded', function() {
  const rows = document.querySelectorAll('.table-arsip tbody tr');
  rows.forEach((row, index) => {
    if (!row.querySelector('.empty-state-arsip')) {
      row.style.opacity = '0';
      row.style.transform = 'translateX(-30px)';
      
      setTimeout(() => {
        row.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
        row.style.opacity = '1';
        row.style.transform = 'translateX(0)';
      }, 150 + (index * 100));
    }
  });
  
  // Add search input enhancement
  const searchInput = document.querySelector('.search-input');
  if (searchInput) {
    searchInput.addEventListener('input', function() {
      if (this.value.length > 0) {
        this.parentElement.style.boxShadow = '0 15px 40px rgba(102, 126, 234, 0.2)';
        this.parentElement.style.transform = 'translateY(-2px)';
      } else {
        this.parentElement.style.boxShadow = '0 10px 30px rgba(0,0,0,0.1)';
        this.parentElement.style.transform = 'translateY(0)';
      }
    });
  }
  
  // Add hover sound effect simulation (visual feedback)
  const actionButtons = document.querySelectorAll('.btn-action-arsip');
  actionButtons.forEach(button => {
    button.addEventListener('mouseenter', function() {
      this.style.animation = 'pulse 0.3s ease';
    });
    
    button.addEventListener('animationend', function() {
      this.style.animation = '';
    });
  });
});

// Add pulse animation
const style = document.createElement('style');
style.textContent = `
  @keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
  }
`;
document.head.appendChild(style);
</script>