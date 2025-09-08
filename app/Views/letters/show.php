<style>
.pdf-viewer-container {
  background: linear-gradient(135deg, rgba(255,255,255,0.98) 0%, rgba(248,250,252,0.98) 100%);
  backdrop-filter: blur(20px);
  border-radius: 25px;
  border: 1px solid rgba(255,255,255,0.4);
  box-shadow: 0 25px 50px rgba(0,0,0,0.15);
  overflow: hidden;
  position: relative;
  margin: 0;
  height: 100vh;
}

.viewer-glow {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, #667eea, #764ba2, #667eea);
  background-size: 400% 400%;
  animation: viewer-gradient 12s ease infinite;
  opacity: 0.03;
  pointer-events: none;
}

@keyframes viewer-gradient {
  0% { background-position: 0% 50%; }
  50% { background-position: 100% 50%; }
  100% { background-position: 0% 50%; }
}

.pdf-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  padding: 25px 30px;
  position: relative;
  z-index: 10;
  overflow: hidden;
}

.pdf-header::before {
  content: '';
  position: absolute;
  width: 200px;
  height: 200px;
  border-radius: 50%;
  background: rgba(255,255,255,0.1);
  top: -100px;
  right: -100px;
  animation: header-float-pdf 8s ease-in-out infinite;
}

@keyframes header-float-pdf {
  0%, 100% { transform: translateY(0px) rotate(0deg); }
  50% { transform: translateY(-15px) rotate(180deg); }
}

.header-content-pdf {
  position: relative;
  z-index: 2;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.document-info h2 {
  font-size: 1.4rem;
  font-weight: 700;
  margin: 0 0 8px 0;
  display: flex;
  align-items: center;
  gap: 12px;
}

.document-info p {
  margin: 0;
  opacity: 0.9;
  font-size: 0.95rem;
  display: flex;
  align-items: center;
  gap: 8px;
}

.header-actions {
  display: flex;
  gap: 15px;
  align-items: center;
}

.btn-header {
  background: rgba(255,255,255,0.2);
  backdrop-filter: blur(10px);
  color: white;
  border: 1px solid rgba(255,255,255,0.3);
  border-radius: 50px;
  padding: 12px 20px;
  text-decoration: none;
  font-weight: 600;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
  display: flex;
  align-items: center;
  gap: 8px;
  position: relative;
  overflow: hidden;
}

.btn-header::before {
  content: '';
  position: absolute;
  top: 0;
  left: -100%;
  width: 100%;
  height: 100%;
  background: linear-gradient(90deg, transparent, rgba(255,255,255,0.3), transparent);
  transition: left 0.5s;
}

.btn-header:hover::before {
  left: 100%;
}

.btn-header:hover {
  background: rgba(255,255,255,0.3);
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(255,255,255,0.2);
  color: white;
}

.btn-download-pdf {
  background: linear-gradient(135deg, #11998e 0%, #38ef7d 100%);
  border: none;
  box-shadow: 0 8px 25px rgba(17, 153, 142, 0.3);
}

.btn-download-pdf:hover {
  transform: translateY(-3px);
  box-shadow: 0 12px 30px rgba(17, 153, 142, 0.4);
}

.pdf-container {
  position: relative;
  height: calc(100vh - 120px);
  min-height: 600px;
  background: rgba(255,255,255,0.9);
  backdrop-filter: blur(15px);
  overflow: hidden;
}

.pdf-toolbar {
  background: rgba(255,255,255,0.95);
  backdrop-filter: blur(15px);
  padding: 15px 20px;
  border-bottom: 1px solid rgba(0,0,0,0.1);
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 15px;
  position: relative;
  z-index: 5;
}

.toolbar-group {
  display: flex;
  align-items: center;
  gap: 10px;
  background: rgba(102, 126, 234, 0.08);
  padding: 8px 15px;
  border-radius: 25px;
  border: 1px solid rgba(102, 126, 234, 0.2);
}

.toolbar-btn {
  background: transparent;
  border: none;
  color: #667eea;
  width: 35px;
  height: 35px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: all 0.3s ease;
  font-size: 14px;
}

.toolbar-btn:hover {
  background: #667eea;
  color: white;
  transform: scale(1.1);
}

.zoom-display {
  background: white;
  border: 2px solid rgba(102, 126, 234, 0.2);
  border-radius: 20px;
  padding: 8px 15px;
  font-weight: 600;
  color: #667eea;
  font-size: 14px;
  min-width: 80px;
  text-align: center;
}

.pdf-viewer {
  width: 100%;
  height: calc(100% - 70px);
  border: none;
  background: white;
  position: relative;
}

.pdf-embed,
.pdf-object,
.pdf-iframe {
  width: 100%;
  height: 100%;
  border: none;
  display: block;
}

.loading-pdf {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  color: #667eea;
  z-index: 3;
}

.loading-spinner-pdf {
  width: 60px;
  height: 60px;
  border: 4px solid rgba(102, 126, 234, 0.2);
  border-left: 4px solid #667eea;
  border-radius: 50%;
  animation: spin-pdf 1s linear infinite;
  margin: 0 auto 20px;
}

@keyframes spin-pdf {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}

.pdf-error {
  text-align: center;
  padding: 60px 40px;
  color: #ff6b6b;
  background: rgba(255, 107, 107, 0.05);
  border: 2px dashed rgba(255, 107, 107, 0.2);
  border-radius: 20px;
  margin: 20px;
}

.error-icon {
  font-size: 60px;
  margin-bottom: 20px;
  opacity: 0.7;
}

.error-title {
  font-size: 1.5rem;
  font-weight: 700;
  margin-bottom: 15px;
}

.error-message {
  color: #666;
  margin-bottom: 25px;
  line-height: 1.6;
}

.btn-error {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  color: white;
  border: none;
  padding: 12px 25px;
  border-radius: 25px;
  text-decoration: none;
  font-weight: 600;
  display: inline-flex;
  align-items: center;
  gap: 8px;
  transition: all 0.3s ease;
}

.btn-error:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 25px rgba(102, 126, 234, 0.3);
  color: white;
}

.fullscreen-container {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: #000;
  z-index: 9999;
  display: none;
}

.fullscreen-container .pdf-viewer {
  height: 100%;
  background: #333;
}

.fullscreen-controls {
  position: absolute;
  top: 20px;
  right: 20px;
  z-index: 10000;
}

.btn-fullscreen-exit {
  background: rgba(0,0,0,0.7);
  color: white;
  border: none;
  padding: 12px 16px;
  border-radius: 50%;
  cursor: pointer;
  font-size: 18px;
  transition: all 0.3s ease;
}

.btn-fullscreen-exit:hover {
  background: rgba(0,0,0,0.9);
  transform: scale(1.1);
}

@media (max-width: 768px) {
  .pdf-viewer-container {
    border-radius: 0;
    margin: 0;
    height: 100vh;
  }
  
  .header-content-pdf {
    flex-direction: column;
    gap: 15px;
    text-align: center;
  }
  
  .document-info h2 {
    font-size: 1.2rem;
  }
  
  .header-actions {
    flex-wrap: wrap;
    justify-content: center;
  }
  
  .pdf-container {
    height: calc(100vh - 140px);
  }
  
  .pdf-toolbar {
    flex-wrap: wrap;
    gap: 10px;
    padding: 10px;
  }
  
  .toolbar-group {
    gap: 8px;
    padding: 6px 12px;
  }
  
  .toolbar-btn {
    width: 30px;
    height: 30px;
    font-size: 12px;
  }
  
  .zoom-display {
    padding: 6px 12px;
    font-size: 12px;
    min-width: 70px;
  }
}

.document-metadata {
  position: absolute;
  top: 15px;
  left: 15px;
  background: rgba(255,255,255,0.95);
  backdrop-filter: blur(10px);
  padding: 10px 15px;
  border-radius: 15px;
  font-size: 12px;
  color: #666;
  border: 1px solid rgba(0,0,0,0.1);
  z-index: 4;
  opacity: 0.8;
  transition: all 0.3s ease;
}

.document-metadata:hover {
  opacity: 1;
  transform: scale(1.02);
}

.print-styles {
  display: none;
}

@media print {
  .pdf-header,
  .pdf-toolbar {
    display: none !important;
  }
  
  .pdf-viewer-container {
    border-radius: 0;
    box-shadow: none;
    height: 100vh;
  }
  
  .pdf-container {
    height: 100vh;
  }
}
</style>

<!-- PDF Viewer Container -->
<div class="pdf-viewer-container">
  <div class="viewer-glow"></div>
  
  <!-- Header -->
  <div class="pdf-header">
    <div class="header-content-pdf">
      <div class="document-info">
        <h2>
          <i class="fas fa-file-pdf"></i>
          <?= esc($row->title); ?>
        </h2>
        <p>
          <i class="fas fa-tag"></i>
          <?= esc($row->category_name); ?>
          <span style="margin-left: 15px;">
            <i class="fas fa-barcode"></i>
            No. <?= esc($row->number ?? 'N/A'); ?>
          </span>
        </p>
      </div>
      <div class="header-actions">
        <a class="btn-header" href="<?= site_url('arsip'); ?>">
          <i class="fas fa-arrow-left"></i>
          Kembali
        </a>
        <button class="btn-header" onclick="toggleFullscreen()" id="fullscreenBtn">
          <i class="fas fa-expand"></i>
          Layar Penuh
        </button>
        <a class="btn-header btn-download-pdf" href="<?= site_url('arsip/unduh/'.$row->id); ?>">
          <i class="fas fa-download"></i>
          Unduh PDF
        </a>
      </div>
    </div>
  </div>
  
  <!-- PDF Container -->
  <div class="pdf-container" id="pdfContainer">
    <!-- PDF Toolbar -->
    <div class="pdf-toolbar">
      <div class="toolbar-group">
        <button class="toolbar-btn" onclick="zoomOut()" title="Perkecil">
          <i class="fas fa-search-minus"></i>
        </button>
        <div class="zoom-display" id="zoomDisplay">100%</div>
        <button class="toolbar-btn" onclick="zoomIn()" title="Perbesar">
          <i class="fas fa-search-plus"></i>
        </button>
        <button class="toolbar-btn" onclick="resetZoom()" title="Reset Zoom">
          <i class="fas fa-home"></i>
        </button>
      </div>
      
      <div class="toolbar-group">
        <button class="toolbar-btn" onclick="rotatePDF()" title="Putar 90°">
          <i class="fas fa-redo-alt"></i>
        </button>
        <button class="toolbar-btn" onclick="fitToWidth()" title="Sesuaikan Lebar">
          <i class="fas fa-arrows-alt-h"></i>
        </button>
        <button class="toolbar-btn" onclick="fitToHeight()" title="Sesuaikan Tinggi">
          <i class="fas fa-arrows-alt-v"></i>
        </button>
      </div>
    </div>
    
    <!-- Document Metadata -->
    <div class="document-metadata">
      <div><strong>Diarsipkan:</strong> <?= date('d/m/Y H:i', strtotime($row->created_at ?? 'now')); ?></div>
      <?php if(!empty($row->origin)): ?>
      <div><strong>Asal:</strong> <?= esc($row->origin); ?></div>
      <?php endif; ?>
    </div>
    
    <!-- Loading Indicator -->
    <div class="loading-pdf" id="loadingPdf">
      <div class="loading-spinner-pdf"></div>
      <div>Memuat dokumen PDF...</div>
    </div>
    
    <!-- PDF Viewer -->
    <div class="pdf-viewer" id="pdfViewer">
      <!-- Primary: Embed Tag -->
      <embed 
        src="<?= base_url('filepdf/'.$row->file_name); ?>#view=FitH&toolbar=0&navpanes=0&scrollbar=1&page=1&zoom=100" 
        type="application/pdf" 
        width="100%" 
        height="100%"
        style="border: none; display: block;"
        id="pdfEmbed"
        onload="onPDFLoad()"
        onerror="onPDFError()">
      
      <!-- Fallback: Object Tag -->
      <object 
        data="<?= base_url('filepdf/'.$row->file_name); ?>#view=FitH&toolbar=0&navpanes=0" 
        type="application/pdf" 
        width="100%" 
        height="100%"
        style="border: none; display: none;"
        id="pdfObject">
        
        <!-- Final Fallback: Error Message -->
        <div class="pdf-error" id="pdfError" style="display: none;">
          <div class="error-icon">
            <i class="fas fa-file-pdf"></i>
          </div>
          <div class="error-title">Tidak Dapat Menampilkan PDF</div>
          <div class="error-message">
            Browser Anda mungkin tidak mendukung tampilan PDF inline, atau terjadi masalah saat memuat dokumen.
          </div>
          <a href="<?= base_url('filepdf/'.$row->file_name); ?>" target="_blank" class="btn-error">
            <i class="fas fa-external-link-alt"></i>
            Buka di Tab Baru
          </a>
        </div>
      </object>
    </div>
  </div>
</div>

<!-- Fullscreen Container -->
<div class="fullscreen-container" id="fullscreenContainer">
  <div class="fullscreen-controls">
    <button class="btn-fullscreen-exit" onclick="exitFullscreen()">
      <i class="fas fa-times"></i>
    </button>
  </div>
  <iframe 
    src="<?= base_url('filepdf/'.$row->file_name); ?>#view=FitH&toolbar=1&navpanes=1" 
    width="100%" 
    height="100%" 
    style="border: none;"
    id="fullscreenPDF">
  </iframe>
</div>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

<script>
let currentZoom = 100;
let currentRotation = 0;

document.addEventListener('DOMContentLoaded', function() {
  // Hide loading after 3 seconds if PDF loads
  setTimeout(() => {
    const loading = document.getElementById('loadingPdf');
    if (loading) {
      loading.style.opacity = '0';
      setTimeout(() => {
        loading.style.display = 'none';
      }, 500);
    }
  }, 3000);
  
  // Check if PDF loaded successfully
  setTimeout(checkPDFLoad, 2000);
});

function onPDFLoad() {
  const loading = document.getElementById('loadingPdf');
  if (loading) {
    loading.style.display = 'none';
  }
}

function onPDFError() {
  const embed = document.getElementById('pdfEmbed');
  const object = document.getElementById('pdfObject');
  const loading = document.getElementById('loadingPdf');
  
  if (embed) embed.style.display = 'none';
  if (loading) loading.style.display = 'none';
  if (object) {
    object.style.display = 'block';
    setTimeout(() => {
      const error = document.getElementById('pdfError');
      if (error) error.style.display = 'block';
    }, 1000);
  }
}

function checkPDFLoad() {
  const embed = document.getElementById('pdfEmbed');
  const loading = document.getElementById('loadingPdf');
  
  // Simple check - if embed exists and has loaded
  if (embed && embed.offsetHeight > 0) {
    if (loading) loading.style.display = 'none';
  } else {
    // Try object fallback
    onPDFError();
  }
}

// Zoom Functions
function zoomIn() {
  currentZoom += 25;
  if (currentZoom > 300) currentZoom = 300;
  updateZoom();
}

function zoomOut() {
  currentZoom -= 25;
  if (currentZoom < 50) currentZoom = 50;
  updateZoom();
}

function resetZoom() {
  currentZoom = 100;
  updateZoom();
}

function updateZoom() {
  const zoomDisplay = document.getElementById('zoomDisplay');
  const pdfViewer = document.getElementById('pdfViewer');
  
  if (zoomDisplay) {
    zoomDisplay.textContent = currentZoom + '%';
  }
  
  if (pdfViewer) {
    pdfViewer.style.transform = `scale(${currentZoom / 100}) rotate(${currentRotation}deg)`;
    pdfViewer.style.transformOrigin = 'center center';
  }
  
  // Add zoom animation
  pdfViewer.style.transition = 'transform 0.3s cubic-bezier(0.4, 0, 0.2, 1)';
  setTimeout(() => {
    pdfViewer.style.transition = '';
  }, 300);
}

// Rotation
function rotatePDF() {
  currentRotation += 90;
  if (currentRotation >= 360) currentRotation = 0;
  updateZoom(); // Uses same transform
}

// Fit functions
function fitToWidth() {
  const container = document.getElementById('pdfContainer');
  const viewer = document.getElementById('pdfViewer');
  
  if (container && viewer) {
    const containerWidth = container.clientWidth;
    const viewerWidth = viewer.scrollWidth;
    currentZoom = Math.floor((containerWidth / viewerWidth) * 100);
    updateZoom();
  }
}

function fitToHeight() {
  const container = document.getElementById('pdfContainer');
  const viewer = document.getElementById('pdfViewer');
  
  if (container && viewer) {
    const containerHeight = container.clientHeight - 70; // Account for toolbar
    const viewerHeight = viewer.scrollHeight;
    currentZoom = Math.floor((containerHeight / viewerHeight) * 100);
    updateZoom();
  }
}

// Fullscreen Functions
function toggleFullscreen() {
  const container = document.getElementById('fullscreenContainer');
  const btn = document.getElementById('fullscreenBtn');
  
  if (container.style.display === 'block') {
    exitFullscreen();
  } else {
    container.style.display = 'block';
    if (btn) {
      btn.innerHTML = '<i class="fas fa-compress"></i> Keluar Layar Penuh';
    }
    
    // Animate entrance
    container.style.opacity = '0';
    setTimeout(() => {
      container.style.transition = 'opacity 0.3s ease';
      container.style.opacity = '1';
    }, 10);
  }
}

function exitFullscreen() {
  const container = document.getElementById('fullscreenContainer');
  const btn = document.getElementById('fullscreenBtn');
  
  container.style.opacity = '0';
  setTimeout(() => {
    container.style.display = 'none';
    container.style.transition = '';
  }, 300);
  
  if (btn) {
    btn.innerHTML = '<i class="fas fa-expand"></i> Layar Penuh';
  }
}

// Print Function
function printDocument() {
  const printBtn = event.target.closest('button');
  const originalText = printBtn.innerHTML;
  
  printBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyiapkan...';
  
  // Create invisible iframe for printing
  const printFrame = document.createElement('iframe');
  printFrame.style.position = 'absolute';
  printFrame.style.top = '-10000px';
  printFrame.style.left = '-10000px';
  printFrame.src = '<?= base_url('filepdf/'.$row->file_name); ?>';
  
  document.body.appendChild(printFrame);
  
  printFrame.onload = function() {
    setTimeout(() => {
      try {
        printFrame.contentWindow.print();
      } catch (e) {
        // Fallback: open in new window for printing
        window.open('<?= base_url('filepdf/'.$row->file_name); ?>', '_blank');
      }
      
      printBtn.innerHTML = originalText;
      document.body.removeChild(printFrame);
    }, 500);
  };
  
  // Cleanup after 10 seconds
  setTimeout(() => {
    if (document.body.contains(printFrame)) {
      document.body.removeChild(printFrame);
      printBtn.innerHTML = originalText;
    }
  }, 10000);
}

// Keyboard Shortcuts
document.addEventListener('keydown', function(e) {
  // Ctrl/Cmd + Plus: Zoom In
  if ((e.ctrlKey || e.metaKey) && (e.key === '+' || e.key === '=')) {
    e.preventDefault();
    zoomIn();
  }
  
  // Ctrl/Cmd + Minus: Zoom Out
  if ((e.ctrlKey || e.metaKey) && e.key === '-') {
    e.preventDefault();
    zoomOut();
  }
  
  // Ctrl/Cmd + 0: Reset Zoom
  if ((e.ctrlKey || e.metaKey) && e.key === '0') {
    e.preventDefault();
    resetZoom();
  }
  
  // F11 or F: Fullscreen
  if (e.key === 'F11' || (e.altKey && e.key === 'f')) {
    e.preventDefault();
    toggleFullscreen();
  }
  
  // Escape: Exit Fullscreen
  if (e.key === 'Escape') {
    exitFullscreen();
  }
  
  // R: Rotate
  if (e.key === 'r' || e.key === 'R') {
    e.preventDefault();
    rotatePDF();
  }
  
  // P: Print
  if ((e.ctrlKey || e.metaKey) && e.key === 'p') {
    e.preventDefault();
    printDocument();
  }
});

// Touch/Mouse wheel zoom
document.getElementById('pdfViewer').addEventListener('wheel', function(e) {
  if (e.ctrlKey || e.metaKey) {
    e.preventDefault();
    
    if (e.deltaY < 0) {
      zoomIn();
    } else {
      zoomOut();
    }
  }
});

// Mobile touch gestures (basic)
let touchStartDistance = 0;

document.getElementById('pdfViewer').addEventListener('touchstart', function(e) {
  if (e.touches.length === 2) {
    touchStartDistance = Math.hypot(
      e.touches[0].clientX - e.touches[1].clientX,
      e.touches[0].clientY - e.touches[1].clientY
    );
  }
});

document.getElementById('pdfViewer').addEventListener('touchmove', function(e) {
  if (e.touches.length === 2) {
    e.preventDefault();
    
    const touchDistance = Math.hypot(
      e.touches[0].clientX - e.touches[1].clientX,
      e.touches[0].clientY - e.touches[1].clientY
    );
    
    if (touchDistance > touchStartDistance * 1.1) {
      zoomIn();
      touchStartDistance = touchDistance;
    } else if (touchDistance < touchStartDistance * 0.9) {
      zoomOut();
      touchStartDistance = touchDistance;
    }
  }
});

// Add entrance animations
setTimeout(() => {
  const elements = document.querySelectorAll('.pdf-toolbar, .document-metadata');
  elements.forEach((el, index) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(-20px)';
    
    setTimeout(() => {
      el.style.transition = 'all 0.5s cubic-bezier(0.4, 0, 0.2, 1)';
      el.style.opacity = '1';
      el.style.transform = 'translateY(0)';
    }, 200 + (index * 100));
  });
}, 100);
</script>