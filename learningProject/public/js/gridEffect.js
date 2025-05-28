const grid = document.querySelector('.grid-overlay');

  document.addEventListener('mousemove', (e) => {
    const x = `${e.clientX}px`;
    const y = `${e.clientY}px`;
    grid.style.setProperty('--mouse-x', x);
    grid.style.setProperty('--mouse-y', y);
  });
