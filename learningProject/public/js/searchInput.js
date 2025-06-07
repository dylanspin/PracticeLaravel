// ?? Sets the right aspect ratio with transition

function syncCircleWidthToHeight() {
  const container = document.querySelector('.search-container');
  if (!container) return;

  const height = container.offsetHeight;
  container.style.setProperty('--circle-size', `${height}px`);

  // Once width is set, reveal the container
  container.classList.add('ready');
}

window.addEventListener('DOMContentLoaded', syncCircleWidthToHeight);
window.addEventListener('resize', syncCircleWidthToHeight);