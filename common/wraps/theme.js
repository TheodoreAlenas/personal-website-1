function setUpThemeSwitches() {
  forEachThemeSwitch(makeItToggleTheTheme);
}

function applyStoredTheme() {
  if (getThemeIsDark())
    showDarkness();
  else
    showBrightness();
}

function forEachThemeSwitch(callback) {
  const themeSwitches = document.getElementsByClassName("theme-switch");
  for (let i = 0; i < themeSwitches.length; i++)
    callback(themeSwitches[i]);
}
function makeItToggleTheTheme(themeSwitch) {
  themeSwitch.addEventListener("click", toggleTheme);
}

function getThemeIsDark() {
  return "dark" === localStorage.getItem('preferredTheme');
}
function storeDarkTheme() {
  localStorage.setItem('preferredTheme', 'dark');
}
function storeLightTheme() {
  localStorage.setItem('preferredTheme', 'light');
}
function showDarkness() {
  const classList = document.getElementById('theme-wrapper').classList;
  classList.remove("light-themed");
  classList.add("dark-themed");
}
function showBrightness() {
  const classList = document.getElementById('theme-wrapper').classList;
  classList.remove("dark-themed");
  classList.add("light-themed");
}

function makeItDark() {
  showDarkness();
  storeDarkTheme();
}
function makeItBright() {
  showBrightness();
  storeLightTheme();
}

function toggleTheme() {
  if (getThemeIsDark())
    makeItBright();
  else
    makeItDark();
}
