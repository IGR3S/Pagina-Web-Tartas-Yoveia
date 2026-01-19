const track = document.querySelector('.carousel-track');
const slides = document.querySelectorAll('.slide');

// Clon del primer slide
const firstClone = slides[0].cloneNode(true);
track.appendChild(firstClone);

const allSlides = document.querySelectorAll('.slide');
const slideWidth = document.querySelector('.carousel').clientWidth;

let index = 0;

function moveRight() {
  index++;
  track.style.transition = 'transform 0.5s ease-in-out';
  track.style.transform = `translateX(-${index * slideWidth}px)`;

  // Cuando llega al clon, vuelve al inicio sin animación
  if (index === allSlides.length - 1) {
    setTimeout(() => {
      track.style.transition = 'none';
      index = 0;
      track.style.transform = 'translateX(0px)';
    }, 500);
  }
}

// Botones → ambos avanzan a la derecha
document.querySelector('.next').addEventListener('click', moveRight);
document.querySelector('.prev').addEventListener('click', moveRight);

// Auto slide (opcional)
setInterval(moveRight, 3000);
