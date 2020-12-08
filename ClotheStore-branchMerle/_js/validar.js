$(document).ready(function() {
    $("#basic-form").validate({
      rules: {
        fname : {
          required: true,
          minlength: 3
        },
        lname : {
          required: true,
          minlength: 3
        },
        email: {
          required: true,
          email: true
        }
      },
      messages : {
        fname: {
          minlength: "El nombre debería tener al menos 3 caracteres"
        },
        lname: {
          minlength: "El apellido debería tener al menos 3 caracteres"
        },
        email: {
          email: "El formato del email debe ser abc@domain.tld"
        }
      }
    });
  });