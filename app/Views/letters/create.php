<style>
.arsip-create-container {
  background: linear-gradient(135deg, rgba(255,255,255,0.95) 0%, rgba(248,250,252,0.95) 100%);
  backdrop-filter: blur(20px);
  border-radius: 30px;
  border: 1px solid rgba(255,255,255,0.4);
  box-shadow: 0 30px 60px rgba(0,0,0,0.12);
  overflow: hidden;
  position: relative;
  margin: 20px 0;
}

.create-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, #667eea, #764ba2, #11998e, #38ef7d);
  background-size: 400% 400%;
  animation: rainbow-flow 12s ease infinite;
  opacity: 0.08;
  pointer-events: none;
}

@keyframes rainbow-flow {
  0% { background-position: 0% 50%; }
  25% { background-position: 100% 50%; }
  50% { background-position: 100% 0%; }
  75% { background-position: 0% 0%; }
  100% { background-position: 0% 50%; }
}

.create-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 40px;
  text-align: center;
  position: relative;
  overflow: hidden;
}

.create-header::before {
  content: '';
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  top: -100px;
  left: -100px;
  animation: float-left 8s ease-in-out infinite;
}

.create-header::after {
  content: '';
  position: absolute;
  width: 150px;
  height: 150px;
  border-radius: 50%;
  background: rgba(255,255,255,0.08);
  bottom: -75px;
  right: -75px;
  animation: float-right 6s ease-in-out infinite 2s;
}

@keyframes float-left {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-20px) rotate(180deg); }
}

@keyframes float-right {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(20px) rotate(-180deg); }
}

.create-title {
  font-size: 2.5rem;
  font-weight: 700;
  margin: 0 0 15px 0;
  position: relative;
  z-index: 2;
}

.create-subtitle {
  opacity: 0.9;
  margin: 0;
  font-size: 1.1rem;
  position: relative;
  z-index: 2;
}

.create-form {
  padding: 50px;
  position: relative;
  z-index: 1;
}

.form-row-modern {
  display: flex;
  flex-wrap: wrap;
  gap: 25px;
  margin-bottom: 30px;
}

.form-col-modern {
  flex: 1;
  min-width: 250px;
}

.form-col-full {
  width: 100%;
}

.input-group-create {
  position: relative;
  margin-bottom: 30px;
}

.form-control-create {
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
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
}

.form-select-create {
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
  box-shadow: 0 8px 25px rgba(0,0,0,0.08);
  cursor: pointer;
}

.form-control-create:focus,
.form-select-create:focus {
  outline: none;
  border-color: #667eea;
  background: white;
  transform: translateY(-3px);
  box-shadow: 0 15px 40px rgba(102, 126, 234, 0.2);
}

.form-label-create {
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

.form-control-create:focus + .form-label-create,
.form-control-create:not(:placeholder-shown) + .form-label-create,
.form-select-create:focus + .form-label-create,
.form-select-create:not([value=""]) + .form-label-create {
  top: 8px;
  font-size: 12px;
  font-weight: 700;
  transform: translateY(-2px);
}

.input-icon-create {
  position: absolute;
  right: 25px;
  top: 50%;
  transform: translateY(-50%);
  color: #667eea;
  font-size: 20px;
  transition: all 0.3s ease;
  pointer-events: none;
}

.form-control-create:focus ~ .input-icon-create,
.form-select-create:focus ~ .input-icon-create {
  color: #764ba2;
  transform: translateY(-50%) scale(1.1);
}

.file-upload-area {
  position: relative;
  border: 3px dashed rgba(102, 126, 234, 0.3);
  border-radius: 20px;
  padding: 40px;
  text-align: center;
  transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
  background: rgba(255,255,255,0.5);
  cursor: pointer;
  overflow: hidden;
}

.file-upload-area::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(102, 126, 234, 0.1), transparent);
  transition: left 1s;
}

.file-upload-area:hover::before {
  left: 100%;
}

.file-upload-area:hover {
  border-color: #667eea;
  background: rgba(102, 126, 234, 0.05);
  transform: scale(1.02);
}

.file-upload-area.dragover {
  border-color: #38ef7d;
  background: rgba(56, 239, 125, 0.1);
  transform: scale(1.05);
}

.file-input-hidden {
  position: absolute;
  opacity: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
}

.file-upload-icon {
  font-size: 60px;
  color: #667eea;
  margin-bottom: 20px;
  transition: all 0.3s ease;
}

.file-upload-area:hover .file-upload-icon {
  transform: scale(1.1);
  color: #764ba2;
}

.file-upload-text {
  font-size: 18px;
  font-weight: 600;
  color: #333;
  margin-bottom: 10px;
}

.file-upload-subtext {
  color: #666;
  font-size: 14px;
  margin-bottom: 20px;
}

.file-requirements {
  background: rgba(17, 153, 142, 0.1);
  border: 1px solid rgba(17, 153, 142, 0.3);
  border-radius: 15px;
  padding: 15px;
  color: #11998e;
  font-size: 14px;
  font-weight: 500;
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 15px;
}

.selected-file {
  background: rgba(56, 239, 125, 0.1);
  border: 2px solid #38ef7d;
  border-radius: 15px;
  padding: 20px;
  margin-top: 15px;
  display: none;
  align-items: center;
  gap: 15px;
}

.file-icon {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-size: 20px;
}

.file-info h4 {
  margin: 0 0 5px 0;
  color: #333;
  font-weight: 600;
}

.file-info p {
  margin: 0;
  color: #666;
  font-size: 14px;
}

.button-group-create {
  display: flex;
  gap: 20px;
  margin-top: 40px;
  justify-content: flex-end;
}

.btn-create {
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
  min-width: 160px;
}

.btn-create::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
  transition: left 0.6s;
}

.btn-create:hover::before {
  left: 100%;
}

.btn-submit-create {
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  color: white;
  box-shadow: 0 12px 35px rgba(17, 153, 142, 0.4);
}

.btn-submit-create:hover {
  transform: translateY(-4px);
  box-shadow: 0 18px 45px rgba(17, 153, 142, 0.5);
  color: white;
}

.btn-back-create {
  background: linear-gradient(135deg, #6c757d 0%, #5a6268 100%);
  color: white;
  box-shadow: 0 12px 35px rgba(108, 117, 125, 0.4);
}

.btn-back-create:hover {
  transform: translateY(-4px);
  box-shadow: 0 18px 45px rgba(108, 117, 125, 0.5);
  color: white;
}

.form-entrance-create {
  animation: slideInCreate 0.8s cubic-bezier(0.4, 0, 0.2, 1);
}

@keyframes slideInCreate {
  0% {
    opacity: 0;
    transform: translateY(60px) scale(0.9);
  }
  100% {
    opacity: 1;
    transform: translateY(0) scale(1);
  }
}

@media (max-width: 768px) {
  .create-form {
    padding: 30px 20px;
  }
  
  .form-row-modern {
    flex-direction: column;
    gap: 0;
  }
  
  .form-col-modern {
    min-width: 100%;
  }
  
  .button-group-create {
    flex-direction: column;
    gap: 15px;
  }
  
  .create-title {
    font-size: 2rem;
  }
  
  .btn-create {
    padding: 15px 30px;
    font-size: 13px;
  }
  
  .file-upload-area {
    padding: 30px 20px;
  }
  
  .file-upload-icon {
    font-size: 50px;
  }
}

.loading-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.9);
  backdrop-filter: blur(5px);
  display: none;
  align-items: center;
  justify-content: center;
  z-index: 1000;
  border-radius: 30px;
}

.loading-spinner {
  width: 60px;
  height: 60px;
  border: 4px solid rgba(102, 126, 234, 0.2);
  border-left: 4px solid #667eea;
  border-radius: 50%;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

<div class="arsip-create-container form-entrance-create">
  <div class="create-glow"></div>
  <div class="loading-overlay">
    <div class="loading-spinner"></div>
  </div>
  
  <div class="create-header">
    <h1 class="create-title">
      <i class="fas fa-archive"></i> Arsipkan Surat
    </h1>
    <p class="create-subtitle">Upload dan simpan dokumen surat ke dalam sistem arsip digital</p>
  </div>
  
  <form method="post" action="<?= site_url('arsip/simpan'); ?>" enctype="multipart/form-data" class="create-form" id="arsipForm">
    <?= csrf_field(); ?>
    
    <div class="form-row-modern">
      <div class="form-col-modern" style="flex: 0 0 35%;">
        <div class="input-group-create">
          <input type="text" 
                 name="number" 
                 value="<?= old('number'); ?>" 
                 class="form-control-create" 
                 id="numberInput"
                 placeholder=" " 
                 required>
          <label class="form-label-create" for="numberInput">Nomor Surat</label>
          <div class="input-icon-create">
            <i class="fas fa-barcode"></i>
          </div>
        </div>
      </div>
      
      <div class="form-col-modern" style="flex: 1;">
        <div class="input-group-create">
          <input type="text" 
                 name="title" 
                 value="<?= old('title'); ?>" 
                 class="form-control-create" 
                 id="titleInput"
                 placeholder=" " 
                 required>
          <label class="form-label-create" for="titleInput">Judul Surat</label>
          <div class="input-icon-create">
            <i class="fas fa-heading"></i>
          </div>
        </div>
      </div>
    </div>
    
    <div class="form-row-modern">
      <div class="form-col-modern">
        <div class="input-group-create">
          <select name="category_id" class="form-select-create" id="categorySelect" required>
            <option value="">-- Pilih Kategori --</option>
            <?php foreach($categories as $c): ?>
              <option value="<?= $c['id']; ?>" <?= set_select('category_id',$c['id']); ?>>
                <?= esc($c['name']); ?>
              </option>
            <?php endforeach; ?>
          </select>
          <label class="form-label-create" for="categorySelect">Kategori Surat</label>
          <div class="input-icon-create">
            <i class="fas fa-tags"></i>
          </div>
        </div>
      </div>
      
      <div class="form-col-modern">
        <div class="input-group-create">
          <input type="text" 
                 name="origin" 
                 value="<?= old('origin'); ?>" 
                 class="form-control-create" 
                 id="originInput"
                 placeholder=" ">
          <label class="form-label-create" for="originInput">Asal Surat (Opsional)</label>
          <div class="input-icon-create">
            <i class="fas fa-building"></i>
          </div>
        </div>
      </div>
    </div>
    
    <div class="form-col-full">
      <div class="file-upload-area" id="fileUploadArea">
        <input type="file" name="file" accept="application/pdf" class="file-input-hidden" id="fileInput" required>
        <div class="file-upload-content">
          <div class="file-upload-icon">
            <i class="fas fa-cloud-upload-alt"></i>
          </div>
          <div class="file-upload-text">Klik atau Drag & Drop File PDF</div>
          <div class="file-upload-subtext">Upload dokumen surat dalam format PDF</div>
          <div class="file-requirements">
            <i class="fas fa-info-circle"></i>
            <span>Hanya file PDF dengan ukuran maksimal 5MB yang diperbolehkan</span>
          </div>
        </div>
        
        <div class="selected-file" id="selectedFile">
          <div class="file-icon">
            <i class="fas fa-file-pdf"></i>
          </div>
          <div class="file-info">
            <h4 id="fileName">Nama File</h4>
            <p id="fileSize">Ukuran File</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="button-group-create">
      <a class="btn-create btn-back-create" href="<?= site_url('arsip'); ?>">
        <i class="fas fa-arrow-left"></i>
        Kembali
      </a>
      <button type="submit" class="btn-create btn-submit-create" id="submitBtn">
        <i class="fas fa-save"></i>
        Simpan Arsip
      </button>
    </div>
  </form>
</div>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
document.addEventListener('DOMContentLoaded', function() {
  const fileInput = document.getElementById('fileInput');
  const fileUploadArea = document.getElementById('fileUploadArea');
  const selectedFile = document.getElementById('selectedFile');
  const fileName = document.getElementById('fileName');
  const fileSize = document.getElementById('fileSize');
  const form = document.getElementById('arsipForm');
  const submitBtn = document.getElementById('submitBtn');
  const loadingOverlay = document.querySelector('.loading-overlay');
  
  // File upload handling
  fileUploadArea.addEventListener('click', () => fileInput.click());
  
  fileInput.addEventListener('change', function(e) {
    const file = e.target.files[0];
    if (file) {
      displaySelectedFile(file);
    }
  });
  
  // Drag and drop functionality
  fileUploadArea.addEventListener('dragover', function(e) {
    e.preventDefault();
    this.classList.add('dragover');
  });
  
  fileUploadArea.addEventListener('dragleave', function(e) {
    e.preventDefault();
    this.classList.remove('dragover');
  });
  
  fileUploadArea.addEventListener('drop', function(e) {
    e.preventDefault();
    this.classList.remove('dragover');
    
    const files = e.dataTransfer.files;
    if (files.length > 0) {
      const file = files[0];
      if (file.type === 'application/pdf') {
        fileInput.files = files;
        displaySelectedFile(file);
      } else {
        alert('Hanya file PDF yang diperbolehkan!');
      }
    }
  });
  
  function displaySelectedFile(file) {
    const sizeInMB = (file.size / (1024 * 1024)).toFixed(2);
    fileName.textContent = file.name;
    fileSize.textContent = `${sizeInMB} MB`;
    selectedFile.style.display = 'flex';
    
    // Animate the selected file display
    selectedFile.style.opacity = '0';
    selectedFile.style.transform = 'translateY(20px)';
    
    setTimeout(() => {
      selectedFile.style.transition = 'all 0.5s ease';
      selectedFile.style.opacity = '1';
      selectedFile.style.transform = 'translateY(0)';
    }, 100);
  }
  
  // Form submission
  form.addEventListener('submit', function(e) {
    // Show loading overlay
    loadingOverlay.style.display = 'flex';
    
    // Update submit button
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
    submitBtn.style.background = 'linear-gradient(135deg, #667eea 0%, #764ba2 100%)';
    
    // Validate file size
    const file = fileInput.files[0];
    if (file && file.size > 5 * 1024 * 1024) {
      e.preventDefault();
      loadingOverlay.style.display = 'none';
      submitBtn.innerHTML = '<i class="fas fa-save"></i> Simpan Arsip';
      submitBtn.style.background = 'linear-gradient(135deg, #11998e 0%, #38ef7d 100%)';
      alert('File terlalu besar! Maksimal 5MB.');
      return;
    }
  });
  
  // Enhanced input animations
  const inputs = document.querySelectorAll('.form-control-create, .form-select-create');
  inputs.forEach(input => {
    input.addEventListener('focus', function() {
      this.parentElement.classList.add('focused');
    });
    
    input.addEventListener('blur', function() {
      if (!this.value) {
        this.parentElement.classList.remove('focused');
      }
    });
    
    // Check if input has value on load
    if (input.value) {
      input.parentElement.classList.add('focused');
    }
  });
  
  // Add entrance animation for form elements
  const formElements = document.querySelectorAll('.input-group-create, .file-upload-area, .button-group-create');
  formElements.forEach((element, index) => {
    element.style.opacity = '0';
    element.style.transform = 'translateY(30px)';
    
    setTimeout(() => {
      element.style.transition = 'all 0.6s cubic-bezier(0.4, 0, 0.2, 1)';
      element.style.opacity = '1';
      element.style.transform = 'translateY(0)';
    }, 200 + (index * 150));
  });
});
</script>