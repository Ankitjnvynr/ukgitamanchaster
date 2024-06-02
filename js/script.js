

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

  var modal = document.getElementById('volunteerModal');
  // volunteer form submissiobn
  $('#vsubmitForm').on('submit', function(e) {
    e.preventDefault(); // Prevent default form submission
    
    // Serialize form data
    var formData = $(this).serialize();
    
    // AJAX request
    $.ajax({
        type: 'POST', // Or 'GET' depending on your server-side handling
        url: 'partials/volunteerSubmit.php', 
        data: formData,
        success: function(response) {
          
          $('#volunTrigger').click();
          
          if (response == 'done') {
            showPopup(response)
            document.getElementById("vsubmitForm").reset();
          }
          console.log(response);
        },
        error: function(xhr, status, error) {
            console.error("Error submitting form:", error);
            // Handle error response here if needed
        }
    });
});


  $('#sponsorForm').on('submit', function(e) {
    e.preventDefault(); // Prevent default form submission
    
    // Serialize form data
    var formData = $(this).serialize();
    
    // AJAX request
    $.ajax({
        type: 'POST', // Or 'GET' depending on your server-side handling
        url: 'partials/sponserSubmit.php', 
        data: formData,
        success: function(response) {
          
          $('#sponsorTrigger').click();
          
          if (response == 'done') {
            showPopup(response)
            document.getElementById("sponsorForm").reset();
          }
          console.log(response);
        },
        error: function(xhr, status, error) {
            console.error("Error submitting form:", error);
            // Handle error response here if needed
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
});



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


// popup js

  // Function to display the popup after 3 seconds
  function displayPopup() {
    setTimeout(function() {
      document.getElementById('popupImage').style.display = 'block';
      document.getElementsByClassName('backdrop')[0].style.display = 'block';
      
    }, 1000); // 3000 milliseconds = 3 seconds
  }

  // Call the displayPopup function when the window loads
displayPopup();

// JavaScript to close the popup
function closePopup() {
  document.getElementById('popupImage').style.display = 'none';
  document.getElementsByClassName('backdrop')[0].style.display = 'none';
}


