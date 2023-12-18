$(document).ready(function(){
  $(document).on('click', '[data-section]', function(e){
    e.preventDefault();
    let section = $(this).data('section');
    $('.practices__container_main').addClass('loader');
    
    BX.ajax({   
        url: '/local/ajax/ajax_events.php',
        data: {
          code: section
        },
        method: 'POST',
        onsuccess: function(data){
          $('.practices__container_main').html(data);
          setTimeout(function(){
            $('.practices__container_main').removeClass('loader');
          },500);
          practices();
        },
      });

  })
})
