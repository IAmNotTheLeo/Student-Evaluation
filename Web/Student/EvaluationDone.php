<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Account Successs</title>
    <link rel="stylesheet" type="text/css" href="../../CSS/mycss.css">
    <script src="../../JavaScript/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="../../CSS/sweetalert2.min.css">
  </head>
  <body onload="load()">

<script>
  //evaluation done
  function load() {
  Swal.fire({
  type: 'error',
  title: 'Already Evaluated Student',
  text: 'Please Select Another Student to Evaluate',
  allowOutsideClick: false,
  confirmButtonText: 'OK'
  }).then((result) => {
  if (result.value) {
    location.href = 'RateStudent.php';
  }
})
}
</script>
</div>
  </body>
</html>
