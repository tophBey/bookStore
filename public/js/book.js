


const whatsApp = document.getElementById('whatsApp')


whatsApp.addEventListener("click", () => {

          const phoneNumber = "6285156438074";
          const message = encodeURIComponent("Halo Admin");
          const whatsappUrl = `https://wa.me/${phoneNumber}?text=${message}`;
          
          window.open(whatsappUrl, "_blank");
  
  });
  