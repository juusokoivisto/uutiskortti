const darkModeToggle = document.getElementById("darkModeToggle");
const darkModeIcon = document.getElementById("darkModeToggle-icon");

(function initDarkMode() {
    const isDark = localStorage.getItem("darkMode") === "true";
    if (isDark) document.body.classList.add("dark-theme");
    darkModeIcon.src = isDark ? "assets/light_mode.svg" : "assets/dark_mode.svg";
})();

darkModeToggle.addEventListener("click", () => {
    const isDark = document.body.classList.toggle("dark-theme");
    darkModeIcon.src = isDark ? "assets/light_mode.svg" : "assets/dark_mode.svg";
    localStorage.setItem("darkMode", isDark);
});