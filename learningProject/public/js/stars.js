const container = document.getElementById("shooting-stars");

const cellSize = 40; // Match this to your CSS grid cell size
const starCount = 10;

const minDuration = 6;
const maxDuration = 15

const minDelay = 1
const maxDelay = 5

const TOTAL_INITIAL_STARS = 5; // the inititial stars showing up on first loading the page

const usedRows = new Set(); // list of already used heights
const totalRows = Math.floor(window.innerHeight / cellSize);

let currentSpawned = 0;


for (let i = 0; i < starCount; i++) 
{
    createStar();
}

function createStar() 
{
    const row = getUniqueRow();

    if (row === null) return; // skip if no row available

    const star = document.createElement("div");
    star.className = "star";

    // Align star on a random grid row
    star.style.top = `${row * cellSize}px`;

    // random speeds
    const duration = Math.random() * (maxDuration - minDuration) + minDuration; 
    const width = Math.floor(Math.random() * 100) + 150; // 150–250px
    star.style.animationDuration = `${duration}s`;
    star.style.width = `${width}px`;

    if(currentSpawned < TOTAL_INITIAL_STARS)
    {
        star.style.animationDelay = `0s`;
    }
    else
    {
        // Random animation delay to stagger movement
        const delay = Math.random() * (maxDelay - minDelay) + minDelay; 
        star.style.animationDelay = `${delay}s`;
    }

    container.appendChild(star);

    currentSpawned += 1;
}

function getUniqueRow() 
{
  if (usedRows.size >= totalRows) return null; // all rows used

  let row;
  do {
    row = Math.floor(Math.random() * totalRows);
  } while (usedRows.has(row));

  usedRows.add(row);
  return row;
}