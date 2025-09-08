<style>
.modern-form-card {
  background: linear-gradient(135deg, rgba(255,255,255,0.9) 0%, rgba(240,248,255,0.9) 100%);
  backdrop-filter: blur(20px);
  border-radius: 25px;
  border: 1px solid rgba(255,255,255,0.3);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
  overflow: hidden;
  position: relative;
}

.modern-form-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 5px;
  background: linear-gradient(90deg, #667eea 0%, #764ba2 50%, #667eea 100%);
  background-size: 200% 100%;
  animation: shimmer 2s linear infinite;
}

@keyframes shimmer {
  0% { background-position: -200% 0; }
  100% { background-position: 200% 0; }
}

.form-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 30px;
  margin: -1px -1px 30px -1px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.form-header::before {
  content: '';
  position: absolute;
  top: -50%;
  left: -50%;
  width: 200%;
  height: 200%;
  background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, transparent 50%);
  animation: rotate 10s linear infinite;
}

@keyframes rotate {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.form-header h2 {
  margin: 0;
  font-weight: 700;
  font-size: 1.8rem;
  position: relative;
  z-index: 2;
}

.form-header p {
  margin: 10px 0 0 0;
  opacity: 0.9;
  position: relative;
  z-index: 2;
}

.modern-form {
  padding: 0 40px 40px 40px;
}

.form-floating {
  position: relative;
  margin-bottom: 25px;
}

.form-floating .form-control {
  height: 60px;
  border: 2px solid rgba(102, 126, 234, 0.2);
  border-radius: 15px;
  padding: 20px 20px 5px 20px;
  background: rgba(255,255,255,0.8);
  backdrop-filter: blur(10px);
  transition: all 0.3s ease;
  font-size: 16px;
  font-weight: 500;
}

.form-floating .form-control:focus {
  border-color: #667eea;
  box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
  background: white;
  transform: translateY(-2px);
}

.form-floating label {
  color: #667eea;
  font-weight: 600;
  font-size: 14px;
  padding: 15px 20px;
  transition: all 0.3s ease;
}

.form-floating .form-control:focus + label,
.form-floating .form-control:not(:placeholder-shown) + label {
  opacity: 1;
  transform: scale(0.85) translateY(-1.5rem) translateX(0.15rem);
  color: #667eea;
}

.btn-group-modern {
  display: flex;
  gap: 15px;
  margin-top: 30px;
}

.btn-modern {
  position: relative;
  padding: 15px 35px;
  border: none;
  border-radius: 50px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 1px;
  font-size: 14px;
  cursor: pointer;
  transition: all 0.3s ease;
  overflow: hidden;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}

.btn-modern::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.5s;
}

.btn-modern:hover::before {
  left: 100%;
}

.btn-primary-modern {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
}

.btn-primary-modern:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 35px rgba(102, 126, 234, 0.4);
  color: white;
}

.btn-secondary-modern {
  background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);
  color: white;
  box-shadow: 0 8px 25px rgba(108, 117, 125, 0.3);
}

.btn-secondary-modern:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 35px rgba(108, 117, 125, 0.4);
  color: white;
}

.input-icon {
  position: absolute;
  right: 20px;
  top: 50%;
  transform: translateY(-50%);
  color: #667eea;
  font-size: 18px;
  pointer-events: none;
  z-index: 3;
}

.form-animation {
  opacity: 0;
  transform: translateY(30px);
  animation: slideUp 0.6s ease forwards;
}

@keyframes slideUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@media (max-width: 768px) {
  .modern-form {
    padding: 0 20px 30px 20px;
  }
  
  .btn-group-modern {
    flex-direction: column;
  }
  
  .form-header {
    padding: 20px;
  }
  
  .form-header h2 {
    font-size: 1.5rem;
  }
}
</style>

<div class="modern-form-card form-animation">
  <div class="form-header">
    <h2><i class="fas fa-edit"></i> Edit Kategori</h2>
    <p>Ubah informasi kategori surat</p>
  </div>
  
  <form method="post" action="<?= site_url('kategori/update/' . $row['id']); ?>" class="modern-form">
    <?= csrf_field(); ?>
    
    <div class="form-floating">
      <input type="text" 
             name="name" 
             value="<?= esc($row['name'] ?? ''); ?>" 
             class="form-control" 
             id="categoryName"
             placeholder="Masukkan nama kategori"
             required>
      <label for="categoryName">Nama Kategori</label>
      <div class="input-icon">
        <i class="fas fa-tag"></i>
      </div>
    </div>
    
    <div class="btn-group-modern">
      <a class="btn-modern btn-secondary-modern" href="<?= site_url('kategori'); ?>">
        <i class="fas fa-arrow-left"></i>
        Kembali
      </a>
      <button class="btn-modern btn-primary-modern" type="submit">
        <i class="fas fa-save"></i>
        Simpan Perubahan
      </button>
    </div>
  </form>
</div>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
  // Add focus animation
  const input = document.querySelector('.form-control');
  const label = document.querySelector('label');
  
  input.addEventListener('focus', function() {
    this.parentElement.classList.add('focused');
  });
  
  input.addEventListener('blur', function() {
    if (!this.value) {
      this.parentElement.classList.remove('focused');
    }
  });
  
  // Add form validation animation
  const form = document.querySelector('.modern-form');
  form.addEventListener('submit', function(e) {
    const submitBtn = this.querySelector('.btn-primary-modern');
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
  });
});
</script>