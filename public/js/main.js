window.onload = function() {
  let goBackBtn = document.getElementById('go-back');
  let perPageCount = 6;

  if(window.screen.width <= 1024) {
    perPageCount = 4;
  } else if(window.screen.width <= 1280) {
    perPageCount = 5;
  }


  var splide = new Splide( '.splide', {
    type   : 'loop',
    perPage: perPageCount,
  });

  splide.mount();


  window.onscroll = (event) => {  
    if(window.pageYOffset > 500) {
      goBackBtn.style = "display: block";
    } else {
      goBackBtn.style = "display: none";
    }
  }
};
