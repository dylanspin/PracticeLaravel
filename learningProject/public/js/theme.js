loadCurrentTheme();

function loadCurrentTheme()
{
    const match = document.cookie.match(/(^|;) ?theme=([^;]*)/);
    const theme = match ? match[2] : 'light';
    document.documentElement.setAttribute('data-theme', theme);
}

function toggleTheme() 
{
  const currentTheme = document.documentElement.getAttribute("data-theme");
  console.log(currentTheme);
  const newTheme = currentTheme === "dark" ? "light" : "dark";
  document.documentElement.setAttribute("data-theme", newTheme);

  document.cookie = `theme=${newTheme}; path=/; max-age=${60 * 60 * 24 * 30}`;
}
