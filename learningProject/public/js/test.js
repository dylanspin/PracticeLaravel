
function toggleTheme() 
{
  const currentTheme = document.documentElement.getAttribute("data-theme");
  console.log(currentTheme);
  const newTheme = currentTheme === "dark" ? "light" : "dark";
  document.documentElement.setAttribute("data-theme", newTheme);
}
