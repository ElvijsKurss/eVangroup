/*Responsive navigation bar js*/
$(".nav__trigger").on("click", function (e) {
  e.preventDefault();
  $(this).parent().toggleClass("nav--active");
});

/*Navbar scroll effect*/
$(window).on("scroll", () => {
  const scrollTop = $(window).scrollTop();
  const $navBar = $(".navbar");

  if (scrollTop > 0) {
    $navBar.addClass("active");
  } else {
    $navBar.removeClass("active");
  }
});
