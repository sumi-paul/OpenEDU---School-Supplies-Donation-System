document
  .getElementById("btn-login")
  .addEventListener("click", function (event) {
    event.preventDefault();
    console.log("button clicked");

    const userName = document.getElementById("user-name");
    const userNameValue = userName.value;
    const passWord = document.getElementById("password-field");
    const passWordValue = passWord.value;
    console.log(userNameValue, passWordValue);

    // validation
    if (userNameValue === "Donner" && passWordValue === "donner") {
      window.location.href = "../donner.html";
    } else if (userNameValue === "Admin" && passWordValue === "admin") {
      window.location.href = "../admin.html";
    } else if (userNameValue === "User" && passWordValue === "user") {
      window.location.href = "../receiver.html";
    } else {
      alert("Wrong Username or Password");
    }
  });
