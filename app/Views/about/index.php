<style>
.profile-card {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 25px;
  overflow: hidden;
  box-shadow: 0 20px 40px rgba(102, 126, 234, 0.3);
  transition: all 0.3s ease;
  position: relative;
  border: none;
}

.profile-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(45deg, rgba(255,255,255,0.1) 0%, transparent 50%, rgba(255,255,255,0.1) 100%);
  pointer-events: none;
}

.profile-card:hover {
  transform: translateY(-10px) scale(1.02);
  box-shadow: 0 30px 60px rgba(102, 126, 234, 0.4);
}

.profile-content {
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(20px);
  margin: 20px;
  border-radius: 20px;
  padding: 40px;
  position: relative;
  z-index: 2;
}

.profile-image-container {
  position: relative;
  margin-bottom: 30px;
}

.profile-image {
  width: 140px;
  height: 140px;
  object-fit: cover;
  border-radius: 50%;
  border: 5px solid white;
  box-shadow: 0 10px 30px rgba(0,0,0,0.2);
  transition: all 0.3s ease;
}

.profile-image:hover {
  transform: scale(1.1);
  box-shadow: 0 15px 40px rgba(0,0,0,0.3);
}

.profile-header {
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
  font-size: 2.5rem;
  font-weight: 700;
  margin-bottom: 10px;
  text-align: center;
}

.info-item {
  display: flex;
  align-items: center;
  margin-bottom: 20px;
  padding: 15px;
  background: rgba(102, 126, 234, 0.05);
  border-radius: 15px;
  border-left: 4px solid #667eea;
  transition: all 0.3s ease;
}

.info-item:hover {
  background: rgba(102, 126, 234, 0.1);
  transform: translateX(10px);
}

.info-icon {
  width: 50px;
  height: 50px;
  background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 20px;
  color: white;
  font-size: 20px;
}

.info-label {
  font-weight: 600;
  color: #667eea;
  margin-bottom: 5px;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.info-value {
  font-size: 18px;
  font-weight: 700;
  color: #333;
}

.floating-elements {
  position: absolute;
  width: 100%;
  height: 100%;
  overflow: hidden;
  pointer-events: none;
}

.floating-circle {
  position: absolute;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.1);
  animation: float 6s ease-in-out infinite;
}

.circle-1 {
  width: 80px;
  height: 80px;
  top: 10%;
  left: 10%;
  animation-delay: 0s;
}

.circle-2 {
  width: 120px;
  height: 120px;
  top: 60%;
  right: 10%;
  animation-delay: 2s;
}

.circle-3 {
  width: 60px;
  height: 60px;
  bottom: 20%;
  left: 60%;
  animation-delay: 4s;
}

@keyframes float {
  0%, 100% { 
    transform: translateY(0px) rotate(0deg); 
  }
  50% { 
    transform: translateY(-20px) rotate(180deg); 
  }
}

@media (max-width: 768px) {
  .profile-content {
    margin: 10px;
    padding: 20px;
  }
  
  .profile-header {
    font-size: 2rem;
  }
  
  .profile-image {
    width: 120px;
    height: 120px;
  }
  
  .info-item {
    padding: 10px;
  }
  
  .info-icon {
    width: 40px;
    height: 40px;
    margin-right: 15px;
    font-size: 16px;
  }
}
</style>

<div class="profile-card">
  <div class="floating-elements">
    <div class="floating-circle circle-1"></div>
    <div class="floating-circle circle-2"></div>
    <div class="floating-circle circle-3"></div>
  </div>
  
  <div class="profile-content">
    <div class="text-center profile-image-container">
      <img src="<?= esc($me['foto']); ?>" class="profile-image" alt="Profile Photo">
    </div>
    
    <h1 class="profile-header">About Me</h1>
    
    <div class="info-item">
      <div class="info-icon">
        <i class="fas fa-user"></i>
      </div>
      <div class="flex-grow-1">
        <div class="info-label">Nama Lengkap</div>
        <div class="info-value"><?= esc($me['nama']); ?></div>
      </div>
    </div>
    
    <div class="info-item">
      <div class="info-icon">
        <i class="fas fa-briefcase"></i>
      </div>
      <div class="flex-grow-1">
        <div class="info-label">Profil</div>
        <div class="info-value"><?= esc($me['profil']); ?></div>
      </div>
    </div>
    
    <div class="info-item">
      <div class="info-icon">
        <i class="fas fa-id-card"></i>
      </div>
      <div class="flex-grow-1">
        <div class="info-label">Nomor Induk Mahasiswa</div>
        <div class="info-value"><?= esc($me['nim']); ?></div>
      </div>
    </div>
    
    <div class="info-item">
      <div class="info-icon">
        <i class="fas fa-calendar-alt"></i>
      </div>
      <div class="flex-grow-1">
        <div class="info-label">Tanggal Pembuatan</div>
        <div class="info-value"><?= esc($me['tanggal']); ?></div>
      </div>
    </div>
  </div>
</div>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">