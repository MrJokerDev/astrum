<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <form action="{{ route('create.user') }}" method="POST">
          @csrf
          <div id="errorContainer" class="text-center p-3"></div>
          

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">First Name</label>
            <input type="text" name="first_name" class="form-control" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Last Name</label>
            <input type="text" name="last_name" class="form-control" required>
          </div>
          {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
          </div> --}}
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Phone</label>
            <input type="number" name="phone" value="998" class="form-control" required min="7" max="7">
          </div>
          <button type="submit" class="btn btn-primary">Send</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">Enter the SMS Code</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('send.notify') }}" method="POST">
            @csrf
            <div id="errorContainer" class="text-uppercase text-danger" role="alert"></div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Code</label>
                <input type="number" type="number" name="notify" placeholder="SMS code" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
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
          <h4 class="alert-heading">Congratulations!</h4>
          <p>You have successfully registered. The operator will contact you shortly.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<button class="btn btn-danger bg-dark p-2 text-white" data-bs-target="#exampleModalToggle" data-bs-toggle="modal">Register now</button>

<!-- Script to toggle between modals -->
<script>
  $(document).ready(function() {
    // Handle form submission of the first pop-up
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
                $("#errorContainer").html(`<div" class="p-3 mb-2 bg-danger text-white" role="alert">There is such a phone number</div>`);
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
              $("#errorContainer").text(errorMessage.message);
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
</script>
