$(document).ready(function () {
      let open = true;
      const activePage = window.location.pathname;
      const navLinks = document.querySelectorAll('.nav-list a')
      .forEach(e => {
            console.log(e.href);
            // if(e.href.includes(activePage)){
            //       e.classList.remove('text-white');
            //       e.classList.add('text-warning');
            // }
            if(e.href.includes(activePage) && e.href == 'http://127.0.0.1:8000/profile'){
                  e.classList.remove('text-white');
                  e.classList.add('text-warning');
                  $('#border-profile').addClass('border-warning');
                  return 0;
            }else if(e.href.includes(activePage)){
                  e.classList.remove('text-white');
                  e.classList.add('text-warning');
                  $('#border-profile').removeClass('border-warning');
            }
      });

      $(".bi-bookmark-fill").click(function() {
            $(this).toggleClass("active");
            if ($(this).hasClass("active")) {
                  $(this).addClass("dark");
            } else {
            $(this).removeClass("dark");
      }
      });

      $('.nav-menu').on('click', function(){
            if(open == true){
                  open = false;
                  $('#side_nav').removeClass('sidebar');
                  $('#side_nav').addClass('sidebar_kecil');
                  $('#side_nav').css('transition', 'all 0.5s ease-in');

                  $('.nav-menu').css('transform', 'rotate(180deg)');

                  $('.text-header').css('display', 'none');
                  $('.text-menu').css('display', 'none');
                  $('.text-profile').css('display', 'none');
                  $('.text-login').css('display', 'none');

                  $('.logo-menu').css('text-align', 'center');
                  $('.header-logo').addClass('justify-content-center');
                  $('.logo-profile').addClass('d-flex justify-content-center');
                  $('.profile').addClass('d-flex flex-column align-items-center');
                  $('.logo-login').removeClass('d-none');
                  $('.logo-login').addClass('d-flex justify-content-center');
            }else{
                  open = true;
                  $('#side_nav').removeClass('sidebar_kecil');
                  $('#side_nav').addClass('sidebar');
                  // $('#side_nav').css('transition', 'all 0.5s ease-in');

                  $('.nav-menu').css('transform', 'rotate(0deg)');

                  $('.text-header').css('display', 'block');
                  $('.text-menu').css('display', 'block');
                  $('.text-profile').css('display', 'block');
                  $('.text-login').css('display', 'block');

                  $('.logo-menu').css('text-align', 'start');
                  $('.header-logo').removeClass('justify-content-center');
                  $('.logo-profile').removeClass('d-flex justify-content-center');
                  $('.profile').removeClass('d-flex flex-column align-items-center');
                  $('.logo-login').removeClass('d-flex justify-content-center');
                  $('.logo-login').addClass('d-none');

            }
      });
      
});