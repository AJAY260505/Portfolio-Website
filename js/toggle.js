const themeToggle = document.querySelector(".theme-toggle");
themeToggle.onclick = () => {
  document.querySelector("body").classList.toggle("dark");
};
