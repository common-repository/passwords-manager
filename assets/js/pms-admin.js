jQuery(document).ready(function(){
  /*Side Bar Menu*/
  var menu_btn = document.querySelector("#menu-btn");
  var sidebar = document.querySelector("#sidebar");
  var container = document.querySelector(".my-container");
  menu_btn.addEventListener("click", () => {
    sidebar.classList.toggle("active-nav");
    container.classList.toggle("active-cont");
  });  

  jQuery('.color-field').wpColorPicker();


  jQuery('#banners').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
   
    autoplay:true,
    autoPlaySpeed: 5000,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 2
        },
        1000: {
            items: 2
        }
    }
});

jQuery('#kinsta_banners').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots: false,
    autoplay:true,
    autoPlaySpeed: 5000,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive: {
        0: {
            items: 2
        },
        600: {
            items: 3
        },
        1400: {
            items: 6
        }
    }
});

});