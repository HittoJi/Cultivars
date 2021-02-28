document.addEventListener("DOMContentLoaded", function(event) {
  jQuery(document).ready(function ($) {
      tab = $(".tabs h3 a");
      tab.on("click", function (event) {
        event.preventDefault();
        tab.removeClass("active");
        $(this).addClass("active");
    
        tab_content = $(this).attr("href");
        $('div[id$="tab-content"]').removeClass("active");
        $(tab_content).addClass("active");
      });
    });
    $(window).resize(function() {
      if(this.resizeTO) clearTimeout(this.resizeTO);
      this.resizeTO = setTimeout(function() {
          let imgFondo = document.querySelector('.imgFondo');
          console.log(imgFondo);
            var w = window.innerWidth;
            var h = window.innerHeight;
            imgFondo.setAttribute("width", w+"pc");
            imgFondo.setAttribute("height", h+"pc")
            imgFondo.wi

          console.log(w+" "+h);
          $(this).trigger('resizeEnd');
      }, 500);
    });
});

