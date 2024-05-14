
document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".mySwiper", {
    spaceBetween: 40,
    grabCursor: true,
    a11y: false,
    freeMode: true,
    speed: 11000,
    loop: true,

    autoplay: {
      delay: 0.5,
      disableOnInteraction: false,
    },
    breakpoints: {
      0: { /* when window >=0px - webflow mobile landscape/portriat */
        spaceBetween: 10,
        slidesPerView: 1,
      },
      480: { /* when window >=0px - webflow mobile landscape/portriat */
        spaceBetween: 10,
        slidesPerView: 2,
      },
      767: { /* when window >= 767px - webflow tablet */
        spaceBetween: 10,
        slidesPerView: 3,
      },
      992: { /* when window >= 988px - webflow desktop */
        spaceBetween: 10,
        slidesPerView: 4,
      }
    },
  });
});


const volunteerModal = new bootstrap.Modal(document.getElementById('volunteerModal'));
function showPopup(a) {
  if (a == 'done') {
    document.getElementById("overlay").style.display = "flex";
  } else {
    document.getElementById("overlay2").style.display = "flex";
  }
}

function hidePopup() {
  document.getElementById("overlay").style.display = "none";
}
$(document).ready(function () {
  $('#submitBtn').click(function () {
    var country = $('#country').val();
    var phone2 = $('#phone2').val();
    var name = $('#name').val();
    var email = $('#floatingInput').val();

    $.ajax({
      type: 'POST',
      url: 'partials/submit_form.php',
      data: {
        country: country,
        phone2: phone2,
        name: name,
        email: email
      },
      success: function (response) {
        if (response == 'done') {
          showPopup(response)
          document.getElementById("submitForm").reset();
        }
        console.log(response);
        // You can update the UI or show a success message here
      },
      error: function (error) {
        console.log(error);
        // Handle errors if any
      }
    });
  });
});


window.addEventListener('load', function () {
  var logosContainer = document.getElementById('logos');
  var logos = document.querySelectorAll('.logos img');

  // Clone and append the logos to create an infinite loop
  for (var i = 0; i < logos.length; i++) {
    var clonedLogo = logos[i].cloneNode(true);
    logosContainer.appendChild(clonedLogo);

  }

  // Scroll the logos horizontally
  var scrollAmount = 1; // Adjust the scroll amount as needed
  var interval = 20; // Adjust the interval duration as needed
  var direction = 1; // -1 for left, 1 for right
  var scrollInterval;

  function scrollLogos() {
    logosContainer.scrollLeft += scrollAmount * direction;
    if (direction === -1 && logosContainer.scrollLeft <= 0) {
      logosContainer.scrollLeft = logosContainer.scrollWidth / 2;
    } else if (direction === 1 && logosContainer.scrollLeft >= logosContainer.scrollWidth / 2) {
      logosContainer.scrollLeft = 0;
    }
  }

  // Start the scrolling animation
  scrollInterval = setInterval(scrollLogos, interval);

  // Pause the animation when hovering over the logos
  logosContainer.addEventListener('mouseenter', function () {
    clearInterval(scrollInterval);
  });

  // Resume the animation when not hovering over the logos
  logosContainer.addEventListener('mouseleave', function () {
    scrollInterval = setInterval(scrollLogos, interval);
  });


  $(document).ready(function(){
    
    $("#vsubmitForm").on('submit',function(e){
      e.preventDefault()
      vbtn = document.getElementById("vsubmitForm");
        $.ajax({
            type: "POST",
            url: "partials/volunteerSubmit.php", // Change this to your PHP file name
            data: $("#vsubmitForm").serialize(),
            success: function (response) {
              console.log(response)
              vbtn.reset()
              showPopup('done')
              if (response == 'done') {
              }
              // console.log(response);// You can update the UI or show a success message here
            },
            error: function (error) {
              console.log(error);// Handle errors if any
            }
        });
    });
});
});







