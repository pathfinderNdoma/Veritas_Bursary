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
      <h4>School Fees Payment Log
        <hr>
      </h4>
      <form name="form" method="GET" action="{{route('log')}}" enctype="multipart/form-data">
        @csrf
        <div class=" row input-group">
          
          <select class="form-select" name="faculty" id="faculty">
            <option>Select</option>
            @foreach ($data2 as $data2)
              <option value="{{$data2->faculty}}">{{$data2->faculty}}</option>  
            @endforeach
            
            
          </select><span style="color: white">' '</span>
          <select type="text" name="year" id="year" class="form-control lineColor">
          <option>Select Academic Year</option>
            <option>2022/2023</option>
            
          </select><span style="color: white">' '</span>
        <a href="{{route("log")}}" id="generate_report" class="btn btn-primary">Generate Report</a>
        </div>
        <br/>
          {{-- <input type="submit" value="Generate Report" name="submit" class="btn btn-outline-success form-control"> --}}
          <div class="row gy-5">
         @if (isset($log))
        @if(count($log)>=1)
        <table class="table table-striped table-bordered table-responsive table-hover table-sm" id="empTable" style="color:#000; font-size:13px;">
          <thead>
            <th>SN</th>
      <th>Matric No.</th> 
      <th>Name</th>
      <th>Faculty</th>
      <th>Department</th>
      <th>Amount paid</th>
      <th>Description</th>
      <th>DateTime</th>
      <th>Balance</th>
      <th>Download receipt</th>
    
    
          </thead>
         <p class="d-none"> {{$n=1}} </p>
        @foreach($log as $log)
        
          <tbody>
            <td>{{$n}}</td>
            <td>{{$log->matricNo}}</td>
            <td>{{$log->name}}</td>
            <td>{{$log->faculty}}</td>
            <td>{{$log->department}}</td>
            <td>{{$log->amountPaid}}</td>
            <td>{{$log->description}}</td>
            <td>{{$log->dateTime}}</td>
            <td>{{$log->balance}}</td>
            <td><input type='button' value="Download Receipt" class="btn btn-primary"></td>
            
        </tr>
    
          </tbody>
        
       <p class="d-none">{{$n++}}</p>
        @endforeach
      </table> 
        @else
        </div>

      </br>
      <div class="alert alert-success row col-12" role="alert">
        <p>No record found</p>
      </div>
        
        @endif
        

     
             
         @endif
    {{-- <input type="submit" value="Generate Report" id="report_button" class="btn btn-primary"> --}}
        </div>
        <br>
   
    
       
      
    
    
        
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

<script>
  document.getElementById('generate_report').addEventListener('click', function() {
    var faculty = document.getElementById('faculty').value;
    var year = document.getElementById('year').value;

    // build the URL with the values as query parameters
    var url = '/log?faculty=' + encodeURIComponent(faculty) + '&year=' + encodeURIComponent(year);

    // update the href attribute of the anchor tag
    this.setAttribute('href', url);
  });
</script>

<style>
  .lineColor {
    border: 1px solid rgb(190, 186, 167);
  }
</style>

</html>