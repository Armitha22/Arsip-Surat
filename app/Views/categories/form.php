<style>
.modern-form-container {
  background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(248,250,252,0.95) 100%);
  backdrop-filter: blur(20px);
  border-radius: 25px;
  border: 1px solid rgba(255,255,255,0.4);
  box-shadow: 0 25px 50px rgba(0,0,0,0.1);
  overflow: hidden;
  position: relative;
  margin: 20px 0;
}

.form-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, #667eea, #764ba2, #667eea);
  background-size: 400% 400%;
  animation: gradient-shift 8s ease infinite;
  opacity: 0.1;
  pointer-events: none;
}

@keyframes gradient-shift {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.form-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 35px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.form-header::before {
  content: '';
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  top: -100px;
  right: -100px;
  animation: pulse 4s ease-in-out infinite;
}

.form-header::after {
  content: '';
  position: absolute;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: rgba(255,255,255,0.05);
  bottom: -75px;
  left: -75px;
  animation: pulse 4s ease-in-out infinite 2s;
}

@keyframes pulse {
  0%, 100% { transform: scale(1); opacity: 0.1; }
  50% { transform: scale(1.1); opacity: 0.2; }
}

.form-title {
  font-size: 2rem;
  font-weight: 700;
  margin: 0 0 10px 0;
  position: relative;
  z-index: 2;
}

.form-subtitle {
  opacity: 0.9;
  margin: 0;
  position: relative;
  z-index: 2;
}

.form-body {
  padding: 40px;
  position: relative;
  z-index: 1;
}

.alert-modern {
  background: linear-gradient(135deg, #ff6b6b 0%, #ee5a52 100%);
  color: white;
  border: none;
  border-radius: 15px;
  padding: 20px;
  margin-bottom: 30px;
  box-shadow: 0 10px 25px rgba(255, 107, 107, 0.3);
  position: relative;
  overflow: hidden;
}

.alert-modern::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 5px;
  height: 100%;
  background: rgba(255,255,255,0.5);
  animation: slide-down 0.5s ease;
}

@keyframes slide-down {
  0% { height: 0; }
  100% { height: 100%; }
}

.alert-modern i {
  margin-right: 10px;
  font-size: 18px;
}

.input-group-modern {
  position: relative;
  margin-bottom: 30px;
}

.form-control-modern {
  width: 100%;
  height: 65px;
  border: 2px solid rgba(102, 126, 234, 0.2);
  border-radius: 20px;
  padding: 20px 25px 5px 25px;
  background: rgba(255,255,255,0.9);
  backdrop-filter: blur(10px);
  font-size: 16px;
  font-weight: 500;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  box-shadow: 0 5px 15px rgba(0,0,0,0.05);
}

.form-control-modern:focus {
  outline: none;
  border-color: #667eea;
  background: white;
  transform: translateY(-3px);
  box-shadow: 0 15px 35px rgba(102, 126, 234, 0.15);
}

.form-label-modern {
  position: absolute;
  top: 22px;
  left: 25px;
  color: #667eea;
  font-weight: 600;
  font-size: 16px;
  pointer-events: none;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

.form-control-modern:focus + .form-label-modern,
.form-control-modern:not(:placeholder-shown) + .form-label-modern {
  top: 8px;
  font-size: 12px;
  font-weight: 700;
  transform: translateY(-2px);
}

.input-icon-modern {
  position: absolute;
  right: 25px;
  top: 50%;
  transform: translateY(-50%);
  color: #667eea;
  font-size: 20px;
  transition: all 0.3s ease;
}

.form-control-modern:focus ~ .input-icon-modern {
  color: #764ba2;
  transform: translateY(-50%) scale(1.1);
}

.button-group {
  display: flex;
  gap: 20px;
  margin-top: 40px;
  justify-content: flex-end;
}

.btn-modern-form {
  position: relative;
  padding: 18px 40px;
  border: none;
  border-radius: 50px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 1.2px;
  font-size: 14px;
  cursor: pointer;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  overflow: hidden;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 12px;
  min-width: 150px;
}

.btn-modern-form::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
  transition: left 0.6s;
}

.btn-modern-form:hover::before {
  left: 100%;
}

.btn-submit {
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  color: white;
  box-shadow: 0 10px 30px rgba(17, 153, 142, 0.4);
}

.btn-submit:hover {
  transform: translateY(-4px);
  box-shadow: 0 15px 40px rgba(17, 153, 142, 0.5);
  color: white;
}

.btn-back {
  background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);
  color: white;
  box-shadow: 0 10px 30px rgba(108, 117, 125, 0.4);
}

.btn-back:hover {
  transform: translateY(-4px);
  box-shadow: 0 15px 40px rgba(108, 117, 125, 0.5);
  color: white;
}

.form-entrance {
  animation: formSlideUp 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes formSlideUp {
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
  .form-body {
    padding: 25px;
  }
  
  .button-group {
    flex-direction: column;
    gap: 15px;
  }
  
  .form-title {
    font-size: 1.6rem;
  }
  
  .btn-modern-form {
    padding: 15px 30px;
    font-size: 13px;
  }
}
</style>

<div class="modern-form-container form-entrance">
  <div class="form-glow"></div>
  
  <div class="form-header">
    <h1 class="form-title">
      <i class="fas fa-plus-circle"></i> Tambah Kategori
    </h1>
    <p class="form-subtitle">Buat kategori baru untuk mengorganisir surat</p>
  </div>
  
  <div class="form-body">
    <?php if(session()->getFlashdata('errors')): ?>
      <div class="alert-modern">
        <i class="fas fa-exclamation-triangle"></i>
        <?= implode('<br>', session()->getFlashdata('errors')); ?>
      </div>
    <?php endif; ?>

    <form method="post" action="<?= $action; ?>" id="categoryForm">
      <?= csrf_field(); ?>
      
      <div class="input-group-modern">
        <input type="text" 
               name="name" 
               class="form-control-modern"
               id="categoryName"
               placeholder=" "
               value="<?= old('name', $row->name ?? '') ?>"
               required>
        <label class="form-label-modern" for="categoryName">Nama Kategori</label>
        <div class="input-icon-modern">
          <i class="fas fa-tag"></i>
        </div>
      </div>
      
      <div class="button-group">
        <a href="<?= site_url('kategori'); ?>" class="btn-modern-form btn-back">
          <i class="fas fa-arrow-left"></i>
          Kembali
        </a>
        <button type="submit" class="btn-modern-form btn-submit">
          <i class="fas fa-save"></i>
          Simpan Kategori
        </button>
      </div>
    </form>
  </div>
</div>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('categoryForm');
  const input = document.getElementById('categoryName');
  const submitBtn = form.querySelector('.btn-submit');
  
  // Enhanced input interaction
  input.addEventListener('input', function() {
    if (this.value.length > 0) {
      this.style.borderColor = '#38ef7d';
      this.style.boxShadow = '0 15px 35px rgba(56, 239, 125, 0.15)';
    } else {
      this.style.borderColor = 'rgba(102, 126, 234, 0.2)';
      this.style.boxShadow = '0 5px 15px rgba(0,0,0,0.05)';
    }
  });
  
  // Form submission animation
  form.addEventListener('submit', function(e) {
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
    submitBtn.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
  });
  
  // Add ripple effect to buttons
  document.querySelectorAll('.btn-modern-form').forEach(button => {
    button.addEventListener('click', function(e) {
      const ripple = document.createElement('span');
      const rect = this.getBoundingClientRect();
      const size = Math.max(rect.width, rect.height);
      const x = e.clientX - rect.left - size / 2;
      const y = e.clientY - rect.top - size / 2;
      
      ripple.style.width = ripple.style.height = size + 'px';
      ripple.style.left = x + 'px';
      ripple.style.top = y + 'px';
      ripple.classList.add('ripple');
      
      this.appendChild(ripple);
      
      setTimeout(() => {
        ripple.remove();
      }, 600);
    });
  });
});

// Add ripple effect CSS
const style = document.createElement('style');
style.textContent = `
  .ripple {
    position: absolute;
    border-radius: 50%;
    background: rgba(255,255,255,0.6);
    transform: scale(0);
    animation: ripple-animation 0.6s linear;
    pointer-events: none;
  }
  
  @keyframes ripple-animation {
    to {
      transform: scale(4);
      opacity: 0;
    }
  }
`;
document.head.appendChild(style);