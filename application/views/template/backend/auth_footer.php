 <!-- Bootstrap core JavaScript-->
 <script src="<?= base_url('asset/'); ?>sb-admin/vendor/jquery/jquery.min.js"></script>
 <script src="<?= base_url('asset/'); ?>sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= base_url('asset/'); ?>sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="<?= base_url('asset/'); ?>sb-admin/js/sb-admin-2.min.js"></script>

 <!-- Jquery Validation Forms -->
 <script src="<?= base_url('asset/Template library/jquery-validation/jquery.validate.min.js');?>"></script>
 <script src="<?= base_url('asset/Template library/jquery-validation/additional-methods.min.js');?>"></script>

 <script type="text/javascript">
$(document).ready(function () {
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5
      }
    },
    messages: {
      email: {
        required: "Please enter a email address",
        email: "Please enter a vaild email address"
      },
      password: {
        required: "Please provide a password",
        minlength: "Your password must be at least 5 characters long"
      }
    },
    errorElement: 'p',
    errorPlacement: function (error, element) {
      error.addClass('text-danger');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

 </body>

 </html>