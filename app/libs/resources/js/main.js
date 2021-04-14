(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Testimonials slider
   */
  new Swiper('.testimonials-slider', {
    speed: 600,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false
    },
    slidesPerView: 'auto',
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true
    }
  });

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

})()

function SendNotify(mtext, mresult) {
  $.notify({
      // options
      icon: (mresult) ? 'bi-check-circle-fill' : 'bi-x-circle-fill',
      title: (mresult) ? '<b>Éxito:</b> ' : '<b>Error:</b> ',
      message: mtext
  },{
      // settings
      element: 'body',
      position: null,
      type: (mresult) ? 'success' : 'danger',
      allow_dismiss: true,
      newest_on_top: false,
      showProgressbar: false,
      placement: {
          from: "bottom",
          align: "right"
      },
      offset: 20,
      spacing: 10,
      z_index: 1031,
      delay: 5000,
      timer: 1000,
      url_target: '_blank',
      mouse_over: null,
      animate: {
          enter: 'animated fadeInDown',
          exit: 'animated fadeOutUp'
      },
      onShow: null,
      onShown: null,
      onClose: null,
      onClosed: null,
      icon_type: 'class',
      template: '<div data-notify="container" class="col-xs-11 col-sm-3 alert alert-{0}" role="alert">' +
          '<button type="button" aria-hidden="true" class="close" data-notify="dismiss">×</button>' +
          '<span data-notify="icon"></span> ' +
          '<span data-notify="title">{1}</span> ' +
          '<span data-notify="message">{2}</span>' +
          '<div class="progress" data-notify="progressbar">' +
              '<div class="progress-bar progress-bar-{0}" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;"></div>' +
          '</div>' +
          '<a href="{3}" target="{4}" data-notify="url"></a>' +
      '</div>' 
  });
}

// Contact
function SendContact() {
  var inputContactName = document.getElementById("name").value;
  var inputContactEmail = document.getElementById("email").value;
  var inputContactMessage = document.getElementById("message").value;

  // Prevalidations in frontend
  var Error = false;
  if (!inputContactName || inputContactName.length === 0) {
      SendNotify("El campo 'Nombre' no puede estar vacío", false);
      Error = true;
  }
  if (!inputContactEmail || inputContactEmail.length === 0) {
      SendNotify("El campo 'Correo electrónico' no puede estar vacío", false);
      Error = true;
  }
  if (!inputContactMessage || inputContactMessage.length === 0) {
      SendNotify("El campo 'Mensaje' no puede estar vacío", false);
      Error = true;
  }
  if (inputContactMessage.length > 450) {
      SendNotify("El mensaje no debe ser mayor a 450 caracteres", false);
      Error = true;
  }

  if (Error) return false;
  
  var data = "inputContactName=" + inputContactName + "&inputContactEmail=" + inputContactEmail + "&inputContactMessage=" + inputContactMessage;
  
  $.ajax({
      type:'POST',
      url:'/index/SendContact',
      data:data,
      success:function(resp) {
          var obj = JSON.parse(resp);
          SendNotify(obj['text'], obj['result']);
          // Clean inputs
          if (obj['result']) {
              document.getElementById("name").value = "";
              document.getElementById("email").value = "";
              document.getElementById("message").value = "";
          }
      }
  });
  return false;
}