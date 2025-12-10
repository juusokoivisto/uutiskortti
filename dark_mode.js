const darkModeToggle = document.getElementById("darkModeToggle");
const darkModeIcon = document.getElementById("darkModeToggle-icon");
darkModeToggle.addEventListener("click", toggleDarkMode);

function toggleDarkMode() {
    isDark = document.body.classList.toggle("dark-theme");
    darkModeIcon.src = isDark 
        ? "assets/light_mode.svg" 
        : "assets/dark_mode.svg";

    localStorage.setItem("darkMode", isDark);
}

function onload() {
    let darkMode = localStorage.getItem("darkMode");
    darkModeIcon.src = darkMode 
        ? "assets/light_mode.svg" 
        : "assets/dark_mode.svg";
}