<style>
.kategori-container {
  background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(248,250,252,0.9) 100%);
  backdrop-filter: blur(20px);
  border-radius: 25px;
  border: 1px solid rgba(255,255,255,0.3);
  box-shadow: 0 25px 50px rgba(0,0,0,0.12);
  overflow: hidden;
  position: relative;
}

.container-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, #667eea, #764ba2, #667eea);
  background-size: 400% 400%;
  animation: gradient-flow 10s ease infinite;
  opacity: 0.05;
  pointer-events: none;
}

@keyframes gradient-flow {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.header-section {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 35px;
  position: relative;
  overflow: hidden;
}

.header-section::before {
  content: '';
  position: absolute;
  width: 300px;
  height: 300px;
  border-radius: 50%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 70%);
  top: -150px;
  right: -150px;
  animation: float-header 8s ease-in-out infinite;
}

@keyframes float-header {
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

.header-title {
  font-size: 2.2rem;
  font-weight: 700;
  margin: 0 0 10px 0;
}

.header-subtitle {
  opacity: 0.9;
  margin: 0;
  font-size: 1rem;
}

.add-button-container {
  text-align: right;
}

.btn-add-modern {
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  color: white;
  border: none;
  border-radius: 50px;
  padding: 15px 30px;
  font-weight: 700;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: 12px;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 10px 25px rgba(17, 153, 142, 0.4);
  position: relative;
  overflow: hidden;
}

.btn-add-modern::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.5s;
}

.btn-add-modern:hover::before {
  left: 100%;
}

.btn-add-modern:hover {
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(17, 153, 142, 0.5);
  color: white;
}

.table-container {
  padding: 0;
  position: relative;
  z-index: 1;
}

.table-modern {
  width: 100%;
  border-collapse: separate;
  border-spacing: 0;
  background: transparent;
  margin: 0;
}

.table-modern thead {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}

.table-modern thead th {
  color: white;
  padding: 25px 20px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 13px;
  border: none;
  position: relative;
  text-align: center;
}

.table-modern thead th:first-child {
  border-radius: 0;
}

.table-modern thead th:last-child {
  border-radius: 0;
}

.table-modern tbody {
  background: rgba(255,255,255,0.7);
  backdrop-filter: blur(10px);
}

.table-modern tbody tr {
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  border-bottom: 1px solid rgba(102, 126, 234, 0.1);
}

.table-modern tbody tr:hover {
  background: rgba(102, 126, 234, 0.08);
  transform: scale(1.01);
  box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.table-modern tbody td {
  padding: 25px 20px;
  border: none;
  text-align: center;
  font-weight: 500;
  position: relative;
}

.id-badge {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  width: 45px;
  height: 45px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  font-size: 16px;
  margin: 0 auto;
  box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.category-name {
  font-size: 18px;
  font-weight: 600;
  color: #333;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.action-buttons {
  display: flex;
  gap: 10px;
  justify-content: center;
}

.btn-action {
  padding: 10px 20px;
  border: none;
  border-radius: 25px;
  font-weight: 600;
  text-decoration: none;
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  display: inline-flex;
  align-items: center;
  gap: 8px;
  position: relative;
  overflow: hidden;
}

.btn-action::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
  transition: left 0.4s;
}

.btn-action:hover::before {
  left: 100%;
}

.btn-edit {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  box-shadow: 0 5px 15px rgba(102, 126, 234, 0.3);
}

.btn-edit:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
  color: white;
}

.btn-delete {
  background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
  color: white;
  box-shadow: 0 5px 15px rgba(255, 107, 107, 0.3);
}

.btn-delete:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(255, 107, 107, 0.4);
  color: white;
}

.empty-state {
  text-align: center;
  padding: 60px 40px;
  color: #667eea;
}

.empty-icon {
  font-size: 80px;
  margin-bottom: 20px;
  opacity: 0.6;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.empty-text {
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 10px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.empty-subtext {
  color: #999;
  font-size: 16px;
}

.table-entrance {
  animation: slideInUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes slideInUp {
  0% {
    opacity: 0;
    transform: translateY(60px);
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
  
  .header-title {
    font-size: 1.8rem;
  }
  
  .action-buttons {
    flex-direction: column;
    gap: 8px;
  }
  
  .btn-action {
    padding: 8px 15px;
    font-size: 11px;
  }
  
  .table-modern thead th,
  .table-modern tbody td {
    padding: 15px 10px;
  }
  
  .category-name {
    font-size: 16px;
  }
}
</style>

<div class="kategori-container table-entrance">
  <div class="container-glow"></div>
  
  <div class="header-section">
    <div class="header-content">
      <div>
        <h1 class="header-title">
          <i class="fas fa-tags"></i> Kategori Surat
        </h1>
        <p class="header-subtitle">Berikut ini adalah kategori  yang bisa digunakan untuk melabeli surat.</p>
         <p class="header-subtitle">Klik "Tambah" pada kolom aksi untuk menambahkan kategori baru.</p>
      </div>
      <div class="add-button-container">
        <a class="btn-add-modern" href="<?= site_url('kategori/tambah'); ?>">
          <i class="fas fa-plus"></i>
          Tambah Kategori
        </a>
      </div>
    </div>
  </div>
  
  <div class="table-container">
    <table class="table-modern">
      <thead>
        <tr>
          <th style="width:80px"><i class="fas fa-hashtag"></i> ID</th>
          <th><i class="fas fa-tag"></i> Nama Kategori</th>
          <th style="width:200px"><i class="fas fa-cogs"></i> Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php if(empty($rows)): ?>
          <tr>
            <td colspan="3" class="empty-state">
              <div class="empty-icon">
                <i class="fas fa-folder-open"></i>
              </div>
              <div class="empty-text">Belum Ada Kategori</div>
              <div class="empty-subtext">Mulai dengan menambahkan kategori pertama Anda</div>
            </td>
          </tr>
        <?php else: foreach($rows as $r): ?>
          <tr>
            <td>
              <div class="id-badge"><?= $r['id']; ?></div>
            </td>
            <td>
              <div class="category-name"><?= esc($r['name']); ?></div>
            </td>
            <td>
              <div class="action-buttons">
                <a class="btn-action btn-edit" href="<?= site_url('kategori/edit/'.$r['id']); ?>">
                  <i class="fas fa-edit"></i>
                  Edit
                </a>
                <a class="btn-action btn-delete" href="#" onclick="return confirmDelete('<?= site_url('kategori/hapus/'.$r['id']); ?>')">
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
</div>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
// Enhanced confirm delete function
function confirmDelete(url) {
  // Create custom modal for confirmation
  const modal = document.createElement('div');
  modal.innerHTML = `
    <div class="confirm-modal-overlay" style="
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(0,0,0,0.7);
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 10000;
      animation: fadeIn 0.3s ease;
    ">
      <div class="confirm-modal" style="
        background: white;
        border-radius: 25px;
        padding: 40px;
        text-align: center;
        box-shadow: 0 25px 50px rgba(0,0,0,0.3);
        max-width: 400px;
        margin: 20px;
        animation: scaleIn 0.3s ease;
      ">
        <div style="font-size: 60px; color: #ff6b6b; margin-bottom: 20px;">
          <i class="fas fa-exclamation-triangle"></i>
        </div>
        <h3 style="color: #333; margin-bottom: 15px; font-weight: 700;">Konfirmasi Hapus</h3>
        <p style="color: #666; margin-bottom: 30px;">Apakah Anda yakin ingin menghapus kategori ini? Tindakan ini tidak dapat dibatalkan.</p>
        <div style="display: flex; gap: 15px; justify-content: center;">
          <button class="btn-cancel" style="
            background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
          ">Batal</button>
          <button class="btn-confirm" style="
            background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
            color: white;
            border: none;
            padding: 12px 25px;
            border-radius: 25px;
            cursor: pointer;
            font-weight: 600;
            transition: all 0.3s ease;
          ">Ya, Hapus</button>
        </div>
      </div>
    </div>
    
    <style>
      @keyframes fadeIn {
        0% { opacity: 0; }
        100% { opacity: 1; }
      }
      
      @keyframes scaleIn {
        0% { transform: scale(0.7); opacity: 0; }
        100% { transform: scale(1); opacity: 1; }
      }
    </style>
  `;
  
  document.body.appendChild(modal);
  
  const overlay = modal.querySelector('.confirm-modal-overlay');
  const cancelBtn = modal.querySelector('.btn-cancel');
  const confirmBtn = modal.querySelector('.btn-confirm');
  
  cancelBtn.onclick = () => {
    overlay.style.animation = 'fadeOut 0.3s ease';
    setTimeout(() => modal.remove(), 300);
  };
  
  confirmBtn.onclick = () => {
    window.location.href = url;
  };
  
  overlay.onclick = (e) => {
    if (e.target === overlay) {
      cancelBtn.onclick();
    }
  };
  
  // Add fadeOut animation
  const style = document.createElement('style');
  style.textContent = `
    @keyframes fadeOut {
      0% { opacity: 1; }
      100% { opacity: 0; }
    }
  `;
  document.head.appendChild(style);
  
  return false;
}

// Add entrance animation for table rows
document.addEventListener('DOMContentLoaded', function() {
  const rows = document.querySelectorAll('.table-modern tbody tr');
  rows.forEach((row, index) => {
    row.style.opacity = '0';
    row.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
      row.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
      row.style.opacity = '1';
      row.style.transform = 'translateY(0)';
    }, 200 + (index * 100));
  });
});
</script>