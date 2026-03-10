<!-- WhatsApp Floating Button -->
<div class="whatsapp-float" id="whatsappFloat">
  <a href="https://wa.me/919876543210?text=Hi%20Coral%20Educational%20Consultancy,%20I'm%20interested%20in%20MBA%20admission%20guidance" 
     target="_blank" 
     class="whatsapp-button"
     title="Chat with us on WhatsApp">
    <i class="fab fa-whatsapp"></i>
  </a>
  <div class="whatsapp-tooltip">
    <span>Need MBA Guidance? Chat with our experts!</span>
  </div>
</div>

<style>
.whatsapp-float {
  position: fixed;
  bottom: 30px;
  right: 30px;
  z-index: 1000;
}

.whatsapp-button {
  display: flex;
  align-items: center;
  justify-content: center;
  width: 60px;
  height: 60px;
  background-color: #25D366;
  color: white;
  border-radius: 50%;
  font-size: 28px;
  box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
  transition: all 0.3s ease;
  text-decoration: none;
  animation: pulse 2s infinite;
}

.whatsapp-button:hover {
  transform: scale(1.1);
  box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4);
  color: white;
  text-decoration: none;
}

.whatsapp-tooltip {
  position: absolute;
  bottom: 70px;
  right: 0;
  background: #333;
  color: white;
  padding: 8px 12px;
  border-radius: 8px;
  font-size: 14px;
  white-space: nowrap;
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  max-width: 200px;
  text-align: center;
}

.whatsapp-tooltip::after {
  content: '';
  position: absolute;
  top: 100%;
  right: 20px;
  border: 8px solid transparent;
  border-top-color: #333;
}

.whatsapp-float:hover .whatsapp-tooltip {
  opacity: 1;
  visibility: visible;
}

@keyframes pulse {
  0% {
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
  }
  50% {
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.6);
  }
  100% {
    box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
  }
}

@media (max-width: 768px) {
  .whatsapp-float {
    bottom: 20px;
    right: 20px;
  }
  
  .whatsapp-button {
    width: 50px;
    height: 50px;
    font-size: 24px;
  }
  
  .whatsapp-tooltip {
    max-width: 150px;
    font-size: 12px;
  }
}
</style>
