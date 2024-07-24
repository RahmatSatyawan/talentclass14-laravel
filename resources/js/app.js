import './bootstrap';

// DARK MODE TOGGLE BUTTON
var themeToggleDarkIcon = document.getElementById("theme-toggle-dark-icon");
var themeToggleLightIcon = document.getElementById("theme-toggle-light-icon");

var themeToggleDarkIconMobile = document.getElementById("theme-toggle-dark-icon-mobile");
var themeToggleLightIconMobile = document.getElementById("theme-toggle-light-icon-mobile");

var themeToggleBtn = document.getElementById("theme-toggle");
var themeToggleBtnMobile = document.getElementById("theme-toggle-mobile");

if (
    localStorage.getItem("color-theme") === "dark" ||
    (!("color-theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
)  {
    themeToggleLightIcon.classList.remove("hidden");
    themeToggleLightIconMobile.classList.remove("hidden");
    themeToggleDarkIcon.classList.add("hidden");
    themeToggleDarkIconMobile.classList.add("hidden");
    } else {
    themeToggleDarkIcon.classList.remove("hidden");
    themeToggleDarkIconMobile.classList.remove("hidden");
    themeToggleLightIcon.classList.add("hidden");
    themeToggleLightIconMobile.classList.add("hidden");
}

themeToggleBtn.addEventListener("click", function () {
    themeToggleDarkIcon.classList.toggle("hidden");
    themeToggleLightIcon.classList.toggle("hidden");

    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});

themeToggleBtnMobile.addEventListener("click", function () {
    themeToggleDarkIconMobile.classList.toggle("hidden");
    themeToggleLightIconMobile.classList.toggle("hidden");

    if (localStorage.getItem("color-theme")) {
        if (localStorage.getItem("color-theme") === "light") {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        } else {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        }
    } else {
        if (document.documentElement.classList.contains("dark")) {
            document.documentElement.classList.remove("dark");
            localStorage.setItem("color-theme", "light");
        } else {
            document.documentElement.classList.add("dark");
            localStorage.setItem("color-theme", "dark");
        }
    }
});