
    function sendMail() {
      Email.send({
        Host: "smtp.gmail.com",
        Username: "marianojesuscorazza@gmail.com",
        Password: "Corazzam250793",
        To: 'marianojesuscorazza@gmail.com',
        From: "marianojesuscorazza@gmail.com",
        Subject: "Prueba",
        Body: "Enviado Correctamente",
      })
        .then(function (message) {
          alert("Enviado correctamente")
        });
    }
  