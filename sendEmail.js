const email = document.querySelector(".input-form#email"),
  phone = document.querySelector(".input-form#phone"),
  notiPhone = document.querySelector(".noti#phone"),
  notiEmail = document.querySelector(".noti#email");

function checkValidateForm(input, noti, text, regex) {
  if (input.value === "") {
    return (
      (noti.style = "display: none") &&
      (document.querySelector(".btn-signup").style = "pointer-events: auto;")
    );
  }
  if (input.value.match(regex)) {
    noti.style = "display: none";
    noti.textContent = "";
    document.querySelector(".btn-signup").style = "pointer-events: auto;";
  } else {
    noti.style = "display: block";
    noti.textContent = text;
    document.querySelector(".btn-signup").style = "pointer-events: none;";
  }
}
phone.addEventListener("keyup", function () {
  checkValidateForm(phone, notiPhone, "Số điện thoại không hợp lệ", /^\d{10}$/);
});
email.addEventListener("keyup", function () {
  checkValidateForm(
    email,
    notiEmail,
    "Địa chỉ email không hợp lệ",
    /^[^ ]+@[^ ]+\.[a-z]{2,3}$/
  );
});
if (window.history.replaceState) {
  window.history.replaceState(null, null, window.location.href);
}
