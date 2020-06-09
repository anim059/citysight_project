
     <!--- bottom section-->
     <div class="footer-bottom" id="footer_bg_color">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-bottom-content" id="footer_text_color">
                            <a href="" class="footer-text">
                          <h3> CitySight </h3>
                            </a>
                          <p class="footer_para">©2019 citysight. Made <i class="la la-heart-o"></i> by <a href="#" class="footer-text"><span >anim and ador</span></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>



<script>

$('#loginform').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});

$('#Registerform').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
});


}

</script>

<script src='https://kit.fontawesome.com/a076d05399.js'></script>
<script src="js/jquery-3.4.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--- usse for about section-->





</body>

</html>