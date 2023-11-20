function validarEmail(input) 
{
    const email = input.value;
    const errorSpan = document.getElementById("email_error");
    const errorInput = document.getElementById("email");
    const emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    const emailRegex2 = /^[a-zA-Z0-9._-]+@[gmail]+\.[com]{3}$/;

    if (email.trim() === "") 
    {
        errorSpan.textContent = "Este campo es obligatorio.";
        errorInput.style.borderColor="red";
    } 


    else if (!emailRegex.test(email)) 
    {
        errorSpan.textContent = "Ingresa un correo electronico valido del dominio '@gmail.com'.";
        errorSpan.style.color="red";
        errorInput.style.borderColor="red";
    } 

    else if (!emailRegex2.test(email)) {
        errorSpan.textContent = "Ingresa un correo que sea del dominio '@gmail.com'.";
        errorSpan.style.color="red";
        errorInput.style.borderColor="red";

    }
    
    else 
    {
        errorSpan.textContent = "";
        errorInput.style.borderColor="blue";
    }
}


function validarPwd(input) 
{
    const pwd = input.value;
    const errorInput = document.getElementById("pwd");
    const errorSpan = document.getElementById("pwd_error");
  
    if (pwd.trim() === "") 
    {
      errorSpan.textContent = "Este campo es obligatorio.";
      errorSpan.style.color="red";
      errorInput.style.borderColor="red";
    } 
    
    else if (pwd.length < 9) 
    {
      errorSpan.textContent = "La contraseña debe contener al menos 9 caracteres.";
      errorSpan.style.color="red";
      errorInput.style.borderColor="red";
    } 
    
    else 
    {
      errorSpan.textContent = "";
      errorInput.style.borderColor="blue";
    }
}
