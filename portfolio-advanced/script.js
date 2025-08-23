document.addEventListener('DOMContentLoaded', () => {
  // Simple carousel
  document.querySelectorAll('[data-carousel]').forEach(carousel => {
    const track = carousel.querySelector('[data-carousel-track]');
    const items = Array.from(track.children);
    let index = 0;

    function update() {
      track.style.transform = `translateX(-${index * 100}%)`;
    }

    carousel.querySelectorAll('[data-carousel-btn]').forEach(btn => {
      btn.addEventListener('click', () => {
        if (btn.dataset.carouselBtn === 'next') {
          index = (index + 1) % items.length;
        } else {
          index = (index - 1 + items.length) % items.length;
        }
        update();
      });
    });

    // Auto-play
    setInterval(() => {
      index = (index + 1) % items.length;
      update();
    }, 4000);
  });
});
