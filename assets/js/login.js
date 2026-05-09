var pwd = document.getElementById('pwd');
var eye = document.getElementById('eye');

eye.addEventListener('click',togglePass);

function togglePass(){

   eye.classList.toggle('active');

   (pwd.type == 'password') ? pwd.type = 'text' : pwd.type = 'password';
}

// Form Validation

function forget() {
  
  var msg = document.getElementById('msgforgot');
  var email = document.form1.email;
  if (email.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }

    
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!re.test(email.value)) {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter a valid email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
  
}

function login() {
  var email = document.form1.email;
  var password = document.form1.password;
  var msg = document.getElementById('msglog');

  var msgReg = document.getElementById('msg-sucreg');
  msgReg.style.display = 'none';

  var msgSuc = document.getElementById('msg-suc');
  msgSuc.style.display = 'none';
  
  if (email.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your email/username";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
  
   if (password.value == "") {
    msg.innerHTML = "Please enter your password";
    password.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }

}



function register() {
  var username = document.form1.username; 
  var email = document.form1.email;
  var password = document.form1.password;
  var msg = document.getElementById('msgreg');


  if (username.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your username"; // Pesan kesalahan untuk username
    username.focus();
    return false;
  } else {
      msg.innerHTML = "";
  }

  // Validasi Username dengan panjang minimum
if (username.value.length < 4) {
  msg.style.display = 'block';
  msg.innerHTML = "Username minimal 4 karakter"; // Pesan kesalahan
  username.focus();
  return false;
} else {
  msg.innerHTML = "";
}


  if (password.value == "") {
    msg.innerHTML = "Please enter your password";
    password.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }

  if (password.value.length < 5) {
    msg.style.display = 'block';
    msg.innerHTML = "Password minimal 5 karakter"; // Pesan kesalahan
    password.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
  
  if (email.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
  
   var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  if (!re.test(email.value)) {
    msg.innerHTML = "Please enter a valid email";
    email.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }
}


function resetpass() {
  var password1 = document.form1.password1;
  var password2 = document.form1.password2;
  var msg = document.getElementById('msgreset');

  // Validasi apakah password1 diisi
  if (password1.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your password";
    password1.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }

    // Validasi panjang password minimal 5 karakter
  if (password1.value.length < 5) {
      msg.style.display = 'block';
      msg.innerHTML = "Password minimal 5 karakter"; 
      password1.focus();
      return false;
  } else {
      msg.innerHTML = "";
  }


  // Validasi apakah password2 diisi
  if (password2.value == "") {
    msg.style.display = 'block';
    msg.innerHTML = "Please enter your password confirmation";
    password2.focus();
    return false;
  } else {
    msg.innerHTML = "";
  }




  // Validasi apakah kedua password sama
  if (password1.value != password2.value) {
    msg.style.display = 'block';
    msg.innerHTML = "Password yang dimasukkan tidak sama"; // Pesan kesalahan jika password tidak sama
    password2.focus();
    return false;
  } else {
    msg.innerHTML = ""; // Reset pesan error
  }

  return true; // Form valid dan bisa dikirim
}