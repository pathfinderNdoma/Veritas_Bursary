<!-- ***************************************MODAL POPUP STARTS FROM HERE*********************************************** -->
<!-- Modal -->
<form name="form" method="POST" action="{{route('update')}}" enctype="multipart/form-data">
  @csrf

<div class="row col-12">
    <div class="modal fade" id="updatemodal{{$n}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-top modal-fullscreen-xl-down">
          <div class="modal-content">
            <div class="modal-header btn btn-success">
              <h5 class="modal-title" id="modalLabel" style="color:white">Add Salary Definition</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" style="background-color:white"></button>
            </div>
    
            <div class="modal-body">
                <div class="row col-12">
    
                    <div class="col-12 g-3">
                        <label for="gradelevel">Grade Level</label>
                        <select class="form-select" aria-label="Default select example" name="grade_level" >
                            <option value="{{$data->gradeLevel}}">Select Grade Level</option>
                            <option value="grade1">Grade Level One</option>
                            <option value="grade2">Grade Level Two</option>
                            <option value="grade3">Grade Level Three</option>
                          </select> 
                    </div>
                </br>


                <input type="text" class="form-control d-none" value="{{$data->id}}" aria-label="First name" name="id" >
                
                

                    <div class="col-12 g-3">
                        <label for="basicSalary">Basic Salary</label>
                        <input type="text" class="form-control" value="{{$data->basicSalary}}" aria-label="First name" name="basicSalary" >
                       
                    </div>
    
                    <div class="col-12  g-3">
                        <label for="allowance">Allowance</label>
                        <input type="text" class="form-control" value="{{$data->allowance}}" aria-label="First name" name="allowance" >
                    </div>
    
                    <div class="col-12  g-3">
                        <label for="tax">Tax</label>
                        <input type="text" class="form-control" value="{{$data->tax}}" aria-label="First name" name="tax" >
                    </div>
    
                    <div class="col-12  g-3">
                        <label for="pension">Pension</label>
                        <input type="text" class="form-control" value="{{$data->pension}}" aria-label="First name" name="pension" >
                    </div>
    
                </div>
    
            </div>
    
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              {{-- <a href="{{route('update')}}" id="update">Update</a> --}}
              <input type="submit" value="Update" class="btn btn-success">
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>   

             <!-- ***************************************MODAL POPUP ENDSHERE*********************************************** -->
    