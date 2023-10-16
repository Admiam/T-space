var multipleCardCarousel = document.querySelector("#carouselTea");
if (window.matchMedia("(min-width: 768px)").matches) {
  var carousel = new bootstrap.Carousel(multipleCardCarousel, {
    interval: false,
  });
  var carouselWidth = $(".carousel-inner")[0].scrollWidth;
  var cardWidth = $(".carousel-item").width();
  var scrollPosition = 0;
  $("#carouselTea .carousel-control-next").on("click", function () {
    console.log("clicked!");
    if (scrollPosition < carouselWidth - cardWidth * 4) {
      scrollPosition += cardWidth;
      $("#carouselTea .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600,
      );
    }
  });
  $("#carouselTea .carousel-control-prev").on("click", function () {
    console.log("clicked!");

    if (scrollPosition > 0) {
      scrollPosition -= cardWidth;
      $("#carouselTea .carousel-inner").animate(
        { scrollLeft: scrollPosition },
        600,
      );
    }
  });
} else {
  $(multipleCardCarousel).addClass("slide");
}
