const hamburgerLines = document.getElementById("lines");
const mobMenu = document.getElementById("mob-menu");
const mobHome = document.getElementById("mob-home");
const mobServices = document.getElementById("mob-services");
const mobSecurity = document.getElementById("mob-security");
const mobContact = document.getElementById("mob-contact");
const mobLogin = document.getElementById("mob-login");
const mobSignup = document.getElementById("mob-signup");

hamburgerLines.addEventListener("click", () => {
  mobMenu.style.display = "flex";
});
mobHome.addEventListener("click", () => {
  mobMenu.style.display = "none";
});
mobServices.addEventListener("click", () => {
  mobMenu.style.display = "none";
});
mobSecurity.addEventListener("click", () => {
  mobMenu.style.display = "none";
});
mobContact.addEventListener("click", () => {
  mobMenu.style.display = "none";
});
mobLogin.addEventListener("click", () => {
  mobMenu.style.display = "none";
});
mobSignup.addEventListener("click", () => {
  mobMenu.style.display = "none";
});
