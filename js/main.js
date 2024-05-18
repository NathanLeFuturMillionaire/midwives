function checkInputs() {
  let inputs = document.querySelectorAll(".contact input"),
    textArea = document.getElementById("message"),
    error = document.querySelector(".errors"),
    submitButton = document.querySelector(".submit"),
    lastname = document.getElementById("lastname"),
    firstname = document.getElementById("firstname"),
    email = document.getElementById("email");

  submitButton.addEventListener("click", (e) => {
    e.preventDefault();

    let formChecked = {};

    for (let i = 0; i < inputs.length; i++) {
      if (inputs[i].className == "user-lastname") {
        if (inputs[i].value.length >= 3 || inputs[i].value == "") {
          inputs[i].classList.remove("lastname-error-background");
          error.textContent = "";
          formChecked.username = true;
        } else {
          inputs[i].classList.add("lastname-error-background");
          error.classList.add("lastname-error-color");
          error.textContent =
            "Hum hum 🤔, regardes les champs en rouge, il faut corriger ça";
          formChecked.username = false;
        }
      } else if (inputs[i].className == "user-firstname") {
        if (inputs[i].value.length >= 3 || inputs[i].value == "") {
          inputs[i].classList.remove("firstname-error-background");
          error.textContent = "";
          formChecked.firstname = true;
        } else {
          inputs[i].classList.add("firstname-error-background");
          error.classList.add("firstname-error-color");
          error.textContent =
            "Hum hum 🤔, regardes les champs en rouge, il faut corriger ça";
          formChecked.firstname = false;
        }
      }
    }

    if (textArea.value.length >= 5) {
      textArea.classList.remove("message-error-background");
      error.textContent = "";
      formChecked.message = true;
    } else {
      textArea.classList.add("message-error-background");
      error.classList.add("message-error-color");
      error.textContent =
        "Hum hum 🤔, regardes les champs en rouge, il faut corriger ça";
      formChecked.message = false;
    }

    // Si tous les champs on bien été rempli
    if (formChecked.username == true && formChecked.firstname == true && formChecked.message == true) {
      sendFormData();
    } else {
      error.classList.add("message-error-color");
      error.textContent =
        "Hum hum 🤔, regardes les champs en rouge, il faut corriger ça";
    }
  });
}

function sendFormData() {
  const formData = new FormData();
  formData.append("lastname", lastname.value);
  formData.append("firstname", firstname.value);
  formData.append("email", email.value);
  formData.append("message", message.value);

  const xhr = new XMLHttpRequest();
  xhr.open("POST", "../php/send.feedback.php", true);
  xhr.onload = function() {
    if (xhr.status === 200) {
      const response = JSON.parse(xhr.responseText);
      if(response.success) {
        showModal();
      } else {
        error.classList.add("message-error-color");
        error.textContent = response.message;
      }
    }
  };
  xhr.send(formData);
}

function showModal() {
  // Récupère le modal parent et enfant
  let parentModal = document.querySelector(".modal-success"),
    childModal = document.querySelector(".modal-success-content");

  // Vérifie si le modal est masqué afin de l'afficher
  if ((parentModal.style.display = "none")) {
    parentModal.style.display = "block";

    // Récupère le lien qui ferme le modal
    let closeModal = document.querySelector(".link-6");

    if ((parentModal.style.display = "block")) {
      closeModal.addEventListener("click", (e) => {
        e.preventDefault();
        parentModal.style.display = "none";
      });
    }

    // Récupère le nom et le prénom
    let usernames = document.querySelectorAll(".username");
    for (let i = 0; i < usernames.length; i++) {
      // Affiche le nom et le prénom
      usernames[i].textContent = lastname.value + " " + firstname.value;
    }
  }
}

checkInputs();
