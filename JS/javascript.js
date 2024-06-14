/* const $submit = document.getElementById("submit"),
      $nombre = document.getElementById("nombre"),
      $correo = document.getElementById("correo"),
      $Asunto = document.getElementById("Asunto"),
      $mensaje = document.getElementById("mensaje");

      function validateInputs(){

        const nombreRegex = /^[a-zA-ZáéíóúÁÉÍÓÚñÑüÜ\s]+$/;
        const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
        const mensajeRegex = /^[ -~\n\r]{1,500}$/;

        if(!nombreRegex.test($nombre.value)){
            alert("Ingresa correctamente el campo nombre.");
            $nombre.style.border = "1px solid red";
        }
        if(!emailRegex.test($correo.value)){
            alert("Ingresa correctamente el campo correo.");
            $correo.style.border = "1px solid red";
        }
        if(!mensajeRegex.test($mensaje.value)){
            alert("Ingresa correctamente el campo mensaje.");
            $mensaje.style.border = "1px solid red";
        }
      }

      //Evento

      document.addEventListener("click", (e)=>{
        if(e.target === $submit){
            e.preventDefault();
            validateInputs();
            //console.log("Hola!")
        }
      }); */

      function alertMessage(){
        let correo = document.getElementById("correo");
        let nombre = document.getElementById("nombre");
        let mensaje = document.getElementById("mensaje");

        if(nombre.value != "" && correo.value != "" &&
            mensaje.value != ""  
        ){
          alert("El correo ha sido enviado exitosamente!!");
        }
      }