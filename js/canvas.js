const canvas = document.getElementById('myCanvas');
const ctx = canvas.getContext('2d');
const circleRadius = 10;
let x = 0;
let y = canvas.height/2;
const speed = 5;

function draw() {
  // Effacer le canvas
  ctx.clearRect(0, 0, canvas.width, canvas.height);

  // Dessiner le projectile
  ctx.beginPath();
  ctx.arc(x, y, circleRadius, 0, Math.PI*2);
  ctx.fillStyle = "#0095DD";
  ctx.fill();
  ctx.closePath();

  // Déplacer le projectile
  x += speed;

  // Vérifier si le projectile est sorti de l'écran
  if (x > canvas.width + circleRadius) {
    // Réinitialiser la position du projectile
    x = -circleRadius;
  }

  // Demander au navigateur de répéter cette fonction d'animation
  requestAnimationFrame(draw);
}

// Démarrer l'animation
draw();
