<script type="text/javascript">
   $(document).ready(function(){

      var $modal = $('.modal');
      $modal.on('show.bs.modal', function(e) {
        
          var paragraphs = $(e.relatedTarget).data('paragraphs');
          var href = $(e.relatedTarget).data('href');
          var title = $(e.relatedTarget).attr('title');
          $modal.find(".modal-title").html(title);
          $(this)
              .addClass('modal-scrollfix')
              .find('.modal-body')
              .html('loading...')
              .load(href, function() {
                // Use Bootstrap's built-in function to fix scrolling (to no avail)
                  // $modal.removeClass('modal-scrollfix').modal('handleUpdate');
                  // $('html, body').animate({
                  //     scrollTop: $("#modal-identifier").offset().top - 48
                  // }, 900);

              $modal.find("#modal-submit").click(function(){
                  $modal.find("form input[type=submit]").click();
              });

          });


      });

   });
</script>