<!-- ***************************************MODAL POPUP STARTS FROM HERE*********************************************** -->
<!-- Modal -->
{{-- <form name="form" method="POST" action="{{route('add')}}" enctype="multipart/form-data"> --}}
  @csrf

<div class="row col-12">
    <div class="modal fade" id="addmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
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
                        <select class="form-select" aria-label="Default select example" name="grade_level" required>
                            <option>Select Grade Level</option>
                            <option value="CVUSS1">CVUSS1</option>
                            <option value="CVUSS2">CVUSS2</option>
                            <option value="CVUSS3">CVUSS3</option>
                            <option value="CVUSS4">CVUSS4</option>
                            <option value="CVUSS5">CVUSS5</option>
                            <option value="CVUSS6">CVUSS6</option>
                            <option value="CVUSS7">CVUSS7</option>
                            <option value="CVUSS8">CVUSS8</option>
                            <option value="CVUSS9">CVUSS9</option>
                            <option value="CVUSS10">CVUSS10</option>
                            <option value="CVUSS11">CVUSS11</option>
                            <option value="CVUSS12">CVUSS12</option>
                            <option value="CVUSS13">CVUSS13</option>
                            <option value="CVUSS14">CVUSS14</option>
                            <option value="CVUSS15">CVUSS15</option>
                          </select> 
                    </div>
                </br>
                    <div class="col-12 g-3">
                        <label for="basicSalary">Basic Salary</label>
                        <input type="text" class="form-control" placeholder="Basic Salary" aria-label="First name" name="basicSalary" required>
                       
                    </div>
    
                    <div class="col-12  g-3">
                        <label for="allowance">Allowance</label>
                        <input type="text" class="form-control" placeholder="Allowance" aria-label="First name" name="allowance" required>
                    </div>
    
                    <div class="col-12  g-3">
                        <label for="tax">Tax</label>
                        <input type="text" class="form-control" placeholder="Tax" aria-label="First name" name="tax" required>
                    </div>
    
                    <div class="col-12  g-3">
                        <label for="pension">Pension</label>
                        <input type="text" class="form-control" placeholder="Pension" aria-label="First name" name="pension" required>
                    </div>
    
                </div>
    
            </div>
    
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
              <input type="submit" value="Add" class="btn btn-primary">
              
            </div>
          </div>
        </div>
      </div>
    </div>
        
  {{-- </form> --}}
             <!-- ***************************************MODAL POPUP ENDSHERE*********************************************** -->
    