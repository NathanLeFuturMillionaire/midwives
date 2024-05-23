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
          error.textContent = "Hum hum 🤔, regardes les champs en rouge, il faut corriger ça";
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
      error.textContent = "Hum hum 🤔, regardes les champs en rouge, il faut corriger ça";
      formChecked.message = false;
    }

    // Si tous les champs on bien été rempli
    if (formChecked.username == true && formChecked.firstname == true && formChecked.message == true) {
      sendFormData();
    } else {
      error.classList.add("message-error-color");
      error.textContent = "Hum hum 🤔, regardes les champs en rouge, il faut corriger ça";
    }
  });
}

checkInputs();

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

function scrollTop() {
  let heading = document.querySelector(".banner > .heading");
  let getServicesButtons = document.querySelectorAll("#service-link");
  let getMidWiveslink = document.querySelector(".midwives-link");
  let getHomeLink = document.querySelector(".home-link");
  let getContactLink = document.querySelector("#contact-link");

  getMidWiveslink.addEventListener("click", (e) => {
    e.preventDefault();

    window.scrollTo({
      top: 770,
    });
  });

  getHomeLink.addEventListener("click", (e) => {
    e.preventDefault();

    window.scrollTo({
      top: 0,
    });
  });

  getContactLink.addEventListener("click", (e) => {
    e.preventDefault();

    window.scrollTo({
      top: 2050,
    });
  });

  document.addEventListener("scroll", (e) => {

    // Si le scroll vertical est égal à 0
    if (window.scrollY === 0) {
      // Déclenche un effet sur le header
      heading.classList.remove("box-shadow");
    } else {
      heading.classList.add("box-shadow");

    }
  });

  for (let i = 0; i < getServicesButtons.length; i++) {
    getServicesButtons[i].addEventListener("click", (e) => {
      e.preventDefault();

      window.scrollTo({
        top: 430,
      });
    })
  }
}

scrollTop();

function displayToggle() {
  let displayToggle = document.querySelector(".banner .toggle"),
      navbar = document.querySelector(".banner .navbar"),
      links = document.querySelectorAll(".banner .navbar .sidenav a");

  displayToggle.addEventListener("click", (e) => {
    navbar.classList.add("active");
    displayToggle.classList.add("bg");

    for (let i = 0; i < links.length; i++) {
      links[i].classList.add("display-links");
      links[i].addEventListener("click", () => {
        navbar.classList.remove("active");
        displayToggle.classList.remove("bg");
        for (let i = 0; i < links.length; i++) {
          links[i].classList.remove("display-links");
        }
      });
    }

  });
}

displayToggle();