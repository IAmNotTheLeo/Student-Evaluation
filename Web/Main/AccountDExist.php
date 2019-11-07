<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Error</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
    <script src="../../JavaScript/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
  </head>
  <body onload="load()">

<script>
  function load() {
  Swal.fire({
  type: 'error',
  title: 'User ID or Password is Wrong',
  text: 'Please Enter Valid Data',
  allowOutsideClick: false,
  confirmButtonText: 'OK'
  }).then((result) => {
  if (result.value) {
    location.href = 'Login.php';
  }
})
}
</script>
</div>
  </body>
</html>
