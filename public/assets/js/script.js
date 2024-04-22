
const inputEmail = document.getElementById("email");

const btnConnexion = document.getElementById("btnConnexion");

btnConnexion.addEventListener("click", handleFormSubmission);

function handleFormSubmission(event) {
  event.preventDefault();

  const inputEmail = document.getElementById("email");
  const inputPassword = document.getElementById("password");
  const body = document.getElementById("body");
  const inputEmailValue = inputEmail.value;
  const inputPasswordValue = inputPassword.value;

  const url = "/";

  const user = {
    email: inputEmailValue,
    password: inputPasswordValue,
  };

  fetch(url, {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify(user),
  })
    .then((response) => {
      return response.text();
    })
    .then((result) => {
      body.innerHTML = "";
      body.innerHTML = result;
    });
}
