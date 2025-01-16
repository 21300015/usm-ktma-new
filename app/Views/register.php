<!DOCTYPE html>
<html lang="en">
  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard and Admin Template">
    <meta name="author" content="ThemePixels">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <title>Pendaftaran KTMA Universitas Saintek Muhamadiyah</title>

    <!-- vendor css -->
    <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/prismjs/themes/prism-tomorrow.css" rel="stylesheet">

    <!-- template css -->
    <link rel="stylesheet" href="assets/css/cassie.css">
    <style type="text/css">
      .page-center {
        width: 100%;
        height: 100vh;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        padding: 0 20px;
      }
    </style>
  </head>
  <body class="bg-gray-100">
    <nav class="navbar bg-white shadow-base">
      <a class="navbar-brand tx-bold tx-spacing--2 tx-color-01" href="#">LOGO</a>
    </nav>

   
    <div class="container mt-5">
      <div class="card bg-white">
        <div class="card-body">
          <h5 id="section2" class="tx-semibold">Pandaftaran KTMA</h5>
        </div>

        <div id="wizard2">
          <h3>Data Diri</h3>
          <section>
            <p class="mg-b-20">Try the keyboard navigation by clicking arrow left or right!</p>

            <div class="row row-sm">
              <div class="col-md-6">
                <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required>
              </div><!-- col -->
              <div class="col-md-6 mg-t-20 mg-md-t-0">
                <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                <input id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" type="text" required>
              </div><!-- col -->
            </div><!-- row -->
          </section>
          <h3>Data Alamat</h3>
          <section>
            <p>Wonderful transition effects.</p>
            <div class="form-group">
              <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
              <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
            </div><!-- form-group -->
          </section>
          <h3>Data Pendidikan</h3>
          <section>
            <p>The next and previous buttons help you to navigate through your content.</p>
          </section>
        </div>
      </div>
    </div>
    

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="lib/prismjs/prism.js"></script>
    <script src="lib/parsleyjs/parsley.min.js"></script>
    <script src="lib/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="lib/js-cookie/js.cookie.js"></script>
    <script>
      $(function(){

        'use strict'

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var lname = $('#lastname').parsley();

                if(fname.isValid() && lname.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                if(email.isValid()) {
                  return true;
                } else { email.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });

      })
    </script>
  </body>
</html>
