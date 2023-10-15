const profileBtn = document.getElementById("profile");
const logoutBtn = document.getElementById("logout-btn");
profileBtn.addEventListener("click", () => {
  if (logoutBtn.style.display == "block") {
    logoutBtn.style.display = "none";
  } else {
    logoutBtn.style.display = "block";
  }
});
