function openPopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "block";
}

function closePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}
//----------------------------------------------------------------------//
function openPopupEgresso() {
  var popupegresso = document.getElementById("popupegresso");
  popupegresso.style.display = "block";
}

function closePopupEgresso() {
  var popupegresso = document.getElementById("popupegresso");
  popupegresso.style.display = "none";
}
//----------------------------------------------------------------------//
function openPopupdados() {
  var popupdados = document.getElementById("popupdados");
  popupdados.style.display = "block";
}

function closePopupdados() {
  var popupdados = document.getElementById("popupdados");
  popupdados.style.display = "none";
}
//----------------------------------------------------------------------//
function openPopuprevista() {
  var popuprevista = document.getElementById("popuprevista");
  popuprevista.style.display = "block";
}

function closePopuprevista() {
  var popuprevista = document.getElementById("popuprevista");
  popuprevista.style.display = "none";
}

//----------------------------------------------------------------------//
function openEventos() {
  var eventos = document.getElementById("eventos");
  eventos.style.display = "block";
}

function closeEventos() {
  var eventos = document.getElementById("eventos");
  eventos.style.display = "none";
}
// document.addEventListener("DOMContentLoaded", function() {
//     var boxes = document.querySelectorAll(".sessao4 > div");
//     boxes.forEach(function(box) {
//       var title = box.querySelector("h3");
//       var content = box.querySelector("p");
  
//       title.addEventListener("click", function() {
//         closeAllBoxes();
//         content.style.display = "block";
//       });
//     });
  
//     function closeAllBoxes() {
//       boxes.forEach(function(box) {
//         var content = box.querySelector("p");
//         content.style.display = "none";
//       });
//     }
//   });
  
// --------------------------------------------

// document.addEventListener("DOMContentLoaded", function() {
//   var boxes = document.querySelectorAll(".sessao4 > div");
//   boxes.forEach(function(box) {
//     var title = box.querySelector("h3");
//     var content = box.querySelector("p");
//     var isOpen = false;

//     title.addEventListener("click", function() {
//       if (isOpen) {
//         content.style.display = "none";
//         isOpen = false;
//       } else {
//         closeAllBoxes();
//         content.style.display = "block";
//         isOpen = true;
//       }
//     });
//   });

//   function closeAllBoxes() {
//     boxes.forEach(function(box) {
//       var content = box.querySelector("p");
//       content.style.display = "none";
//     });
//   }
// });

// -----------------------------------------

document.addEventListener("DOMContentLoaded", function() {
  var boxes = document.querySelectorAll(".sessao4 > div");
  boxes.forEach(function(box) {
    var title = box.querySelector("h3");
    var content = box.querySelector("p");
    var isOpen = false;

    title.addEventListener("click", function(event) {
      if (event.target === title) {
        if (isOpen) {
          content.style.display = "none";
          isOpen = false;
        } else {
          closeAllBoxes();
          content.style.display = "block";
          isOpen = true;
        }
      }
    });
  });

  function closeAllBoxes() {
    boxes.forEach(function(box) {
      var content = box.querySelector("p");
      content.style.display = "none";
    });
  }
});

// ---------------------------------------

// document.addEventListener("DOMContentLoaded", function() {
//   var form = document.getElementById("matriculaForm");

//   form.addEventListener("submit", function(event) {
//     event.preventDefault(); // Prevent form submission

//     var nome = document.getElementById("nome").value;
//     var email = document.getElementById("email").value;
//     var whatsapp = document.getElementById("whatsapp").value;

//     // Enviar o email com os dados de matrícula
//     enviarEmail(nome, email, whatsapp);

//     // Limpar os campos do formulário
//     form.reset();
//   });

// // ...

// // Adicione esta função para enviar o email usando a biblioteca EmailJS
// function enviarEmail(nome, email, whatsapp) {
//   // Substitua estas informações com as suas próprias credenciais do EmailJS
//   const SERVICE_ID = 'your_service_id';
//   const TEMPLATE_ID = 'your_template_id';
//   const USER_ID = 'your_user_id';

//   // Defina os parâmetros do email
//   const params = {
//     from_name: nome,
//     to_name: 'Nome do Destinatário',
//     message: `Email: ${email}\nWhatsApp: ${whatsapp}`
//   };

//   // Envie o email usando o serviço EmailJS
//   emailjs.send(SERVICE_ID, TEMPLATE_ID, params, USER_ID)
//     .then(function(response) {
//       console.log('Email enviado com sucesso!', response);
//       // Faça algo após o envio do email, se necessário
//     })
//     .catch(function(error) {
//       console.error('Erro ao enviar o email:', error);
//       // Faça algo em caso de erro no envio do email, se necessário
//     });
// }

// // ...

// });

// -----------------------------------------------------------------

// document.getElementById("contact-form").addEventListener("submit", function(event) {
//   event.preventDefault(); // Impede o envio padrão do formulário

//   var name = document.getElementById("name").value;
//   var email = document.getElementById("email").value;
//   var whatsapp = document.getElementById("whatsapp").value;

//   var subject = "Matrícula para o curso de DIREITO";
//   var body = "Nome: " + name + "\nEmail: " + email + "\nWhatsApp: " + whatsapp;

//   // Substitua o valor abaixo pelo seu próprio endereço de email para receber as notificações
//   var recipient = "nekinho@live.com";

//   window.open("mailto:" + recipient + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(body));
//   // Você também pode usar serviços de backend, como o Node.js, para enviar emails programaticamente
// });

// -------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function() {
  var form = document.querySelector("#meuFormulario");
  var successMessage = document.querySelector("#success-message");

  form.addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "enviar_email.php");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          successMessage.style.display = "block";
        } else {
          alert("Ocorreu um erro, verifique as informações e tente novamente.");
        }
      }
    };
    xhr.send(formData);
  });
});

// -------------------------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function() {
  var form = document.querySelector("#FormularioPos");
  var successMessage = document.querySelector("#success-message");

  form.addEventListener("submit", function(event) {
    event.preventDefault();

    var formData = new FormData(form);
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "enviar_email_pos.php");
    xhr.onreadystatechange = function() {
      if (xhr.readyState === 4) {
        if (xhr.status === 200) {
          successMessage.style.display = "block";
        } else {
          alert("Ocorreu um erro, verifique as informações e tente novamente.");
        }
      }
    };
    xhr.send(formData);
  });
});

// -------------------------------------------------------------------------------------

function autoResize(textarea) {
  textarea.style.height = 'auto';
  textarea.style.height = textarea.scrollHeight + 'px';
}

// JavaScript para funcionalidade do menu mobile (menu hambúrguer)
document.addEventListener("DOMContentLoaded", function() {
  const menuIcon = document.querySelector('.burger'); // Classe do ícone do menu (ajuste se necessário)
  const mainNav = document.getElementById('main-nav'); // ID do elemento de navegação principal

  if (menuIcon && mainNav) {
 menuIcon.addEventListener('click', function() {
      mainNav.classList.toggle('active');
    });
  }
});

// -------------------------------------------------------------------------------------

