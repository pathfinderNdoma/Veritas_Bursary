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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>


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
      <h4>Salary Definition
        <hr>
      </h4>
      
        <div class=" row input-group">
            <div class="col-lg-4 col-md-6 col-xs-12"></div>
            <div class="col-lg-5 col-md-6 col-xs-12"></div>

            <div class="col-lg-3 col-md-3 col-xs-12">
                 
      <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addmodal">
    Add Salary Definition
  </button>
                {{-- <a href="" id="generate_report" class="btn btn-primary btn-md form-control">Add Salary Definition</a> --}}
            </div>

        </div>
        <br/>

@include('inc.addSalary_definition_modal')

@include('inc.messages')
          {{-- <input type="submit" value="Generate Report" name="submit" class="btn btn-outline-success form-control"> --}}
          <div class="row gy-5">
         
        <table class="table" id="empTable" style="color:#000; font-size:13px;">
          <thead>
      <th>SN</th>
      <th>Grade Level</th> 
      <th>Basic Salary</th>
      <th>Allowance</th>
      <th>Tax</th>
      <th>Pension</th>
      <th>Edit</th>
      <th>Delete</th>
      
    
    
          </thead>
         <p class="d-none">{{$n=1}} </p>

          <tbody>
     @foreach ($data as $data)
            <td>{{$n}}</td>
            <td>{{$data->gradeLevel}}</td>
            <td>{{$data->basicSalary}}</td>
            <td>{{$data->allowance}}</td>
            <td>{{$data->tax}}</td>
            <td>{{$data->pension}}</td>
            
            <td><span type="button"  class="fa fa-edit btn" data-bs-toggle="modal" data-bs-target="#updatemodal{{$n}}" style="font-weight:700; font-size:20px; color:blue"></span></td>
            <td><span class="fa fa-trash btn" style="font-weight:700; font-size:20px; color:red"></span></td>
            @include('inc.updateSalary_definition_modal')
            
            
        </tr>
        <p class="d-none">{{$n++}} </p> 
        
     @endforeach
          </tbody>
         
          
      </table> 
      
        </div>

      </br>
           
    {{-- <input type="submit" value="Generate Report" id="report_button" class="btn btn-primary"> --}}
        </div>
        <br>
   
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
  // document.getElementById('update').addEventListener('click', function() {
  //   var grade_level = document.getElementById('grade_level').value;
  //   var basciSalary = document.getElementById('basicSalary').value;
  //   var allowance = document.getElementById('allowance').value;
  //   var tax = document.getElementById('tax').value;
  //   var pension = document.getElementById('pension').value;
  //   var id = document.getElementById('id').value;

  //   // build the URL with the values as query parameters
  //   var url = '/log?faculty=' + encodeURIComponent(faculty) + '&basicSalary=' + encodeURIComponent(basicSalary) + '&allowance=' + encodeURIComponent(allowance);

  //   // update the href attribute of the anchor tag
  //   this.setAttribute('href', url);
  // });
</script>

<style>
  .lineColor {
    border: 1px solid rgb(190, 186, 167);
  }
</style>

</html>