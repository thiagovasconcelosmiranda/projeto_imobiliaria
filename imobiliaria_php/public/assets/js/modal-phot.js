if (document.querySelectorAll('.photos')) {
  document.querySelectorAll('.photos .image-photo').forEach(item => {
    document.querySelector('.carousel-close').addEventListener('click', () => {
      document.querySelector('.container-photo').style.display = "none";
    });
    item.addEventListener('click', () => {
      document.querySelector('.container-photo').style.display = "flex";
    });
  });
}


const imageList = document.querySelector('.slider-wrapper .image-list');
const sliderButtons = document.querySelectorAll('.slider-wrapper .slider-button');
const sliderScrollbar = document.querySelector('.carousel .slider-scrollbar');
const scrollBarThumb = sliderScrollbar.querySelector('.scrollbar-thumb');

const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth + 20 ;

sliderButtons.forEach(button => {
  button.addEventListener('click', () => {
    const direction = button.id === "prev-slide" ? -1 : 1;
    const scrollAmount = imageList.clientWidth * direction;
    
    imageList.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  });
});

function handlerSlideButton() {
  sliderButtons[0].style.display= imageList.scrollLeft <= 0 ? 'none': 'flex';
  sliderButtons[1].style.display= imageList.scrollLeft >= maxScrollLeft ? 'none': 'flex';

}

function updateScrollThumbPosition(){
  const scrollPosition = imageList.scrollLeft;
  const thumbPosition = Math.floor((scrollPosition / maxScrollLeft ) * (sliderScrollbar.clientWidth - scrollBarThumb.offsetWidth));
  console.log((maxScrollLeft));
  scrollBarThumb.style.left =`${thumbPosition}px`;
}

imageList.addEventListener('scroll', () => {
  handlerSlideButton();
  updateScrollThumbPosition();
});
