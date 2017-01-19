$(document).ready(function(){
  // Add scrollspy to <body>
  $('body').scrollspy({target: ".navbar", offset: 50});

  // Add smooth scrolling on all links inside the navbar
  $("#myNavbar a, a").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    }  // End if
  });
  // Closes the Responsive Menu on Menu Item Click
  $('.navbar-collapse ul li a').click(function() {
      $('.navbar-toggle:visible').click();
  });
  // Protfolio
  // Magnific Popup jQuery Lightbox Gallery Settings
    $('.gallery-link').magnificPopup({
        type: 'image',
        gallery: {
            enabled: true
        },
        image: {
            titleSrc: 'title'
        }
    });

    $('.mix').magnificPopup({
        type: 'image',
        image: {
            titleSrc: 'title'
        }
    });
    /*Collapse*/
    $('.hidden').removeClass('hidden').hide();
          $('.toggle-text').click(function() {
              $(this).find('span').each(function() { $(this).toggle(); });
          });
});


//animation

/*Animation Js*/

    $(window).scroll(function() {
      $('.progress').each(function(){
      var imagePos = $(this).offset().top;

      var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+500) {
          $(this).addClass("pulse");
        }
      });

      $('.proimage').each(function(){
      var imagePos = $(this).offset().top;

      var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+450) {
          $(this).addClass("fadeInRight");
        }
      });
      $('.detailsImg').each(function(){
      var imagePos = $(this).offset().top;

      var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+450) {
          $(this).addClass("fadeInLeft");
        }
      });
      $('.hi-icon-wrap').each(function(){
      var imagePos = $(this).offset().top;

      var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
          $(this).addClass("zoomInDown");
        }
      });
      $('.title').each(function(){
      var imagePos = $(this).offset().top;

      var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+750) {
          $(this).addClass("fadeInDown animated");
        }
      });
      $('#contact').each(function(){
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if(imagePos < topOfWindow + 450) {
        $('.section-heading').addClass("fadeInUp animated");
        $('#email').addClass("fadeInUp animated");
        $('#name').addClass("fadeInUp animated");
        $('#ph').addClass("fadeInUp animated");
        $('#txt').addClass("fadeInUp animated");
        $('.maps').addClass("fadeInUp animated");
        $('#btn').addClass("fadeInUp animated");
        }
      })
      /*Number block counting*/
      var no = 1;
      $('.Numberblock').each(function () {
                    var imagePos = $(this).offset().top;

                    var topOfWindow = $(window).scrollTop();
                    if (imagePos < topOfWindow + 500) {
                        if (no == 1) {
                            $('.no').each(function () {
                                $(this).prop('Counter', 0).animate({
                                    Counter: $(this).text()
                                }, {
                                    duration: 4000,
                                    easing: 'swing',
                                    step: function (now) {
                                        $(this).text(Math.ceil(now));
                                    }
                                });
                            });
                            no = 0;
                        }
                    }
                });
    });


    // Modal Image Gallery
    function onClick(element) {
      document.getElementById("img01").src = element.src;
      document.getElementById("modal01").style.display = "block";
      var captionText = document.getElementById("caption");
      captionText.innerHTML = element.alt;
    }


    // Portfolio Filtering Scripts & Hover Effect
var filterList = {
    init: function() {

        // MixItUp plugin
        $('#portfoliolist').mixItUp();

    },

};

filterList.init();
  /*  var byline = document.getElementById('byline');     // Find the H2
    bylineText = byline.innerHTML;                                      // Get the content of the H2
    bylineArr = bylineText.split('');                                   // Split content into array
    byline.innerHTML = '';                                                      // Empty current content

    var span;                   // Create variables to create elements
    var letter;

    for(i=0;i<bylineArr.length;i++){                                    // Loop for every letter
      span = document.createElement("span");                    // Create a <span> element
      letter = document.createTextNode(bylineArr[i]);   // Create the letter
      if(bylineArr[i] == ' ') {                                             // If the letter is a space...
        byline.appendChild(letter);                 // ...Add the space without a span
      } else {
            span.appendChild(letter);                       // Add the letter to the span
        byline.appendChild(span);                   // Add the span to the h2
      }
    };*/
