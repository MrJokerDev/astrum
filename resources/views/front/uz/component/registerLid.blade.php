<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Registratsiya</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

        <form action="{{ route('create.user') }}" method="POST">
          @csrf
          <div id="errorContainer" class="text-center p-3"></div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Ism</label>
            <input type="text" name="first_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Familiya</label>
            <input type="text" name="last_name" class="form-control">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="tel" name="phone" class="form-control"  id="phoneInput" pattern="[0-9]{12}" placeholder="998 99 111 22 33" required>
            <small id="phoneError" class="form-text text-danger invalid-feedback"></small>
          </div>
          <button type="submit" class="btn btn-primary">Yuborish</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">SMS Kodni kiriting</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('send.notify') }}" method="POST">
            @csrf
            <div id="errorContainer2" class="text-center p-3"></div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Kod</label>
                <input type="number" type="number" name="notify" placeholder="SMS code" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Yuborish</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div id="seccessContainer" class="alert alert-success" role="alert">
          <h4 class="alert-heading">Tabriklaymiz!</h4>
          <p>Siz ro'yxatdan muvaffaqiyatlik o'tdingiz. Tez orada operator siz bilan aloqaga chiqadi.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-danger bg-dark p-2 text-white" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Hoziroq ro'yxatdan o'ting</button>

<script>
  $(document).ready(function() {
    $("#exampleModalToggle form").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      $.ajax({
          url: form.attr("action"),
          type: "POST",
          data: form.serialize(),
          success: function(response) {
              $("#exampleModalToggle").modal("hide");
              $("#exampleModalToggle2").modal("show");
          },
          error: function(xhr, status, error) {
              var errorMessage = xhr.responseJSON;
              if (errorMessage.errors && errorMessage.errors.email) {
                $("#errorContainer").html(`<div class="p-3 mb-2 bg-danger text-white" role="alert"></div>`);
              } else if (errorMessage.errors && errorMessage.errors.phone) {
                $("#errorContainer").html(`<div" class="p-3 mb-2 bg-danger text-white" role="alert">Bunday telefon raqami mavjud</div>`);
              } else {
                $("#errorContainer").text('An error occurred during form submission.');
              }
              console.log(errorMessage.errors)

          }
      });
    });

    // Handle form submission of the second pop-up
    $("#exampleModalToggle2 form").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      $.ajax({
          url: form.attr("action"),
          type: "POST",
          data: form.serialize(),
          success: function(response, status, xhr) {
              $("#exampleModalToggle2").modal("hide");
              $("#exampleModalToggle3").modal("show");
          },
          error: function(xhr, status, error) {
              var errorMessage = xhr.responseJSON;
              $("#errorContainer2").html(`<div class="p-3 mb-2 bg-danger text-white" role="alert">${errorMessage.error}</div>`);
              console.log(errorMessage.error)
          }
      });
    });
    // Handle form submission of the second pop-up
    $("#exampleModalToggle3 form").submit(function(e) {
      e.preventDefault();
      var form = $(this);
      $.ajax({
          data: form.serialize(),
          success: function(response, status, xhr) {
              var successMessage = xhr.responseJSON;
              $("#seccessContainer").text(successMessage.message);
              console.log(successMessage);
          },
          error: function(xhr, status, error) {
              var errorMessage = xhr.responseJSON;
              $("#errorContainer").text(errorMessage.message);
          }
      });
    });
  });


  (function() {
    'use strict';

    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.querySelectorAll('.needs-validation');

    // Loop over each form and prevent submission
    Array.prototype.slice.call(forms)
      .forEach(function(form) {
        form.addEventListener('submit', function(event) {
          if (!form.checkValidity()) {
            event.preventDefault();
            event.stopPropagation();
          }

          form.classList.add('was-validated');
        }, false);
      });
  })();


</script>
