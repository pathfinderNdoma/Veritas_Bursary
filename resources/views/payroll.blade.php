<!doctype html>
<html lang="en">

<head>

  <title>Veritas University Bursary</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/boostrap.min.css">



</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <!-- //Adding the side bar -->
    @include('sidebar');
    <!-- //Adding the side bar -->

    <!-- Page Content  -->
    {{-- <div id="content" class="p-0 md-12 ">
      <!-- Adding the navbar -->
      <div style="background-color: rgb(3, 73, 39); height: 40px;" class="">
        <button type="button" alt="Collapse sidebar" id="sidebarCollapse" class="btn btn-info" style="background-color: rgb(3, 73, 39);">
          <i class="fa fa-bars"></i>
          <span class="sr-only fa fa-bars">Toggle Menu</span>
        </button><span style="color: white"> {{$veritas}}</span>
      </div> --}}


      <div id="content" class="p-4 md-12 ">
        <h4 >Payroll<hr></h4>
        <table class="table table-striped table-bordered table-responsive table-hover" id="empTable" style="color:#000; font-size:13px; text-align:center">
          <thead>
            <th>SN</th>
      <th>Staff No.</th> 
      <th>Name</th>
      <th>Rank</th>
      <th>Department</th>
      <th>Basic Salary</th>
      <th>Housing Allow</th>
      <th>Health Insurane</th>
      <th>Tax</th>
      <th>Pension</th>
      <th>Bank</th>
      <th>Branch</th>
      <th>Sort code</th>
      <th>Download payslip</th>


          </thead>
          <tbody>
            <td>1</td>
            <td>AT105</td>
            <td>Mr. Supreme Okoh</td>
            <td>##</td>
            <td>##</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
        </tr>
        <tr>
            <td>2</td>
            <td>AT106</td>
            <td>Miss. Nelly </td>
            <td>##</td>
            <td>##</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
            <td>NN</td>
        </tr>
        <tr>
          <td>3</td>
          <td>AT113</td>
          <td>Dr. Emmanuel N. </td>
          <td>##</td>
          <td>##</td>
          <td>NN</td>
          <td>NN</td>
          <td>NN</td>
          <td>NN</td>
          <td>NN</td>
          <td>NN</td>
          <td>NN</td>
          <td>NN</td>
          <td>NN</td>
      </tr>
      <tr>
        <td>4</td>
        <td>AT046</td>
        <td>Miss. Nelly </td>
        <td>##</td>
        <td>##</td>
        <td>NN</td>
        <td>NN</td>
        <td>NN</td>
        <td>NN</td>
        <td>NN</td>
        <td>NN</td>
        <td>NN</td>
        <td>NN</td>
        <td>NN</td>
    </tr>
    <tr>
      <td>5</td>
      <td>AT401</td>
      <td>Miss. Nelly </td>
      <td>##</td>
      <td>##</td>
      <td>NN</td>
      <td>NN</td>
      <td>NN</td>
      <td>NN</td>
      <td>NN</td>
      <td>NN</td>
      <td>NN</td>
      <td>NN</td>
      <td>NN</td>
  </tr>
  <tr>
    <td>6</td>
    <td>AT244</td>
    <td>Miss. Nelly </td>
    <td>##</td>
    <td>##</td>
    <td>NN</td>
    <td>NN</td>
    <td>NN</td>
    <td>NN</td>
    <td>NN</td>
    <td>NN</td>
    <td>NN</td>
    <td>NN</td>
    <td>NN</td>
</tr>
<tr>
  <td>7</td>
  <td>AT436</td>
  <td>Miss. Nelly </td>
  <td>##</td>
  <td>##</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
</tr>
<tr>
  <td>8</td>
  <td>AT336</td>
  <td>Miss. Nelly </td>
  <td>##</td>
  <td>##</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
</tr>
<tr>
  <td>9</td>
  <td>AT236</td>
  <td>Miss. Nelly </td>
  <td>##</td>
  <td>##</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
</tr>
<tr>
  <td>10</td>
  <td>AT213</td>
  <td>Miss. Nelly </td>
  <td>##</td>
  <td>##</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
</tr>
<tr>
  <td>11</td>
  <td>AT206</td>
  <td>Miss. Nelly </td>
  <td>##</td>
  <td>##</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
</tr>
<tr>
  <td>12</td>
  <td>AT016</td>
  <td>Miss. Nelly </td>
  <td>##</td>
  <td>##</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
  <td>NN</td>
</tr>
          </tbody>
        </table>
      </div>
    </div>

      <script src="js/jquery.min.js"></script>
      <script src="js/popper.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/main.js"></script>

      <script src="js/jquery-3.2.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="j/bootstrap-filestyle.min.js"> </script>



     

  </body>

<script>
  $(document).ready(function() {
    $("#empTable").dataTable();
    $('.file-upload').file_upload();
  });
</script>

</html>