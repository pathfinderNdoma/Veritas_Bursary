<nav id="sidebar" style="background-color: rgb(3, 73, 39)">
				
    <div class="img bg-wrap text-center py-4">
        <div class="user-logo">
            <div class="img" style="background-image: url(images/logo1.png);"></div>
            <h3>Veritas University Bursary</h3>
            
        </div>
    </div>
<ul class="list-unstyled components mb-5">
<li >
  
  <a href="dashboard"  ><span class="fa fa-dashboard mr-3"></span>Dashboard</a>
      
  
</li>
<li class="active">
    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-support mr-3 "><small class="d-flex align-items-center justify-content-center"></small></span> Staff A/C</a>
    <ul class="collapse list-unstyled" id="homeSubmenu">
      <li>
          <a href="{{url('staffReg')}}">Update Bursary Information</a>
      </li>
      <li>
        <a href="payslip">Payslip</a>
    </li>
    <li>
      <a href="{{url('staffRecod')}}">Staff Record</a>
  </li>
  <li>
    <a href="salaryDefinition">Salary Definition</a>
</li>
<li>
  <a href="salarySchedule">Salary Schedule</a>
</li>
      <li>
          <a href="{{url('payroll')}}">Payroll</a>
      </li>
     
      </ul>
</li>
<li>
  <a href="#staffAcc" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><span class="fa fa-support mr-3 "><small class="d-flex align-items-center justify-content-center"></small></span> Student A/C</a>
  <ul class="collapse list-unstyled" id="staffAcc">
    <li>
        <a href="paymentLog">Payment Log</a>
    </li>
    <li>
      <a href="paymentReport">Payment Report</a>
  </li>
  </ul>
</li>

<li>
  <a href="#"><span class="fa fa-support mr-3"></span> Procurment</a>
</li>
<li>
  <a href="#"><span class="fa fa-support mr-3"></span> Audit</a>
</li>
<li>
  <a href="bursaryLogin"><span class="fa fa-sign-out mr-3"></span> Sign Out</a>
</li>
</ul>

</nav>
<div id="content" class="p-0 md-12 ">
  <div style="background-color: rgb(3, 73, 39); height: 40px;" class="">
    <button type="button" alt="Collapse sidebar" id="sidebarCollapse" class="btn btn-info" style="background-color: rgb(3, 73, 39);">
      <i class="fa fa-bars"></i>
      <span class="sr-only fa fa-bars">Toggle Menu</span>
    </button><span style="color: white">Veritas University Bursary - welcome <span>{{ucwords(strtolower($data1->title ))}} {{ucwords(strtolower($data1->fname))}} {{ucwords(strtolower($data1->oname))}} {{ucwords(strtolower($data1->lname))}} ({{ucwords(strtolower($data1->role))}})</span></span>
    <span style="float: right; color:white; margin: 10px"><a href='bursaryLogin'>Logout</a></span></span>
    
  </div>