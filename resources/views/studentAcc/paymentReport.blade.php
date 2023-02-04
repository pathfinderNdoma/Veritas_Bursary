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
    @include ('sidebar')
    <!-- //Adding the side bar -->

    <!-- Page Content  -->
    {{-- <div id="content" class="p-0 md-12 "> --}}
    <!-- Adding the navbar -->


    <div class="container">
    <div id="content" class="p-4 md-12 ">
      <h4>School Fees Payment Report
        <hr>
      </h4>
      <form method="POST" action="download_payslip">
        @csrf
        <div class="input-group ">
          
          <select type="text" name="year" id="year" class="form-control lineColor">
            <option>Select</option>
            <option>Faculty</option>
            <option>Department</option>
            
            
          </select><span style="color: white">' '</span>
          <select type="text" name="year" id="year" class="form-control lineColor">
          <option>Select Academic Year</option>
            <option>2022/2023</option>
            
          </select><span style="color: white">' '</span>
          <a href="#" class="btn btn-primary">Generate Report</a>
        </div>
        <br>
        <table class="table table-striped table-bordered table-responsive table-hover" id="empTable" style="color:#000; font-size:13px; text-align:center">
            <thead>
              <th>SN</th>
        <th>Matric No.</th> 
        <th>Name</th>
        <th>Department</th>
        <th>Faculty</th>
        <th>Amount paid</th>
        <th>DateTime</th>
        <th>Balance</th>
        <th>Download receipt</th>
  
  
            </thead>
            <tbody>
              <td>1</td>
              <td>##</td>
              <td>##</td>
              <td>##</td>
              <td>##</td>
              <td>NN</td>
              <td>NN</td>
              <td>NN</td>
              <td>NN</td>
              
          </tr>
  
            </tbody>
          </table>
        
    
    
        
      </form>
    </div>
  </div>
  </div>
@csrf
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <script src="js/jquery-3.2.1.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="j/bootstrap-filestyle.min.js"> </script>


@include('inc.payslip_js')


</body>

<script>
  $(document).ready(function() {
    $("#empTable").dataTable();
    $('.file-upload').file_upload();
  });
</script>
<style>
  .lineColor {
    border: 1px solid rgb(190, 186, 167);
  }
</style>

</html>