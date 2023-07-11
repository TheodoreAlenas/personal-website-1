
applyStoredTheme();
applyThemeSwitchPersistence();


function applyStoredTheme() {
  if ("dark" === localStorage.getItem('preferredTheme'))
    flipDarknessSwitch();
}
function storeDarkTheme() {
  localStorage.setItem('preferredTheme', 'dark');
}
function storeLightTheme() {
  localStorage.setItem('preferredTheme', 'light');
}

function judgeThisTheme(darkThemeSwitch) {
  const isChecked = darkThemeSwitch.checked;
  if (isChecked)
    storeDarkTheme();
  else
    storeLightTheme();
}


function flipDarknessSwitch() {
  document.getElementById('dark-theme-switch').checked = true;
}

function applyThemeSwitchPersistence() {
  const darkThemeSwitch = document.getElementById('dark-theme-switch');
  if (!darkThemeSwitch)
    console.warn('dark-theme-switch' + "is" + darkThemeSwitch);
  else
    darkThemeSwitch.addEventListener("change", judgeTheme);
}

function judgeTheme(_event) {
  judgeThisTheme(this);
}

// localStorage.setItem('preferredTheme', 'dark');
