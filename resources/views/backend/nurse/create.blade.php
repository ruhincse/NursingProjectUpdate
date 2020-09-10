
@extends('backend.app')

@push('css')

@endpush

@section('content')

  <!-- Start Content-->
  <div class="container-fluid">
                        
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Nurse</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div>
                <h4 class="page-title">Nurse Information</h4>
            </div>
        </div>
    </div>     
    <!-- end page title --> 
<form action="{{route('nurse.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                     
                        <h4> Personal Information </h4>
                    <div class="row">
                        <div class="col-md-6">
                            
                                <div class="form-group">
                                    <label>Name <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="name" value="{{old('name')}}" id="nurseName"  placeholder="Nurse Name" required>
                                    <span style="color:red;display: none" id="error_nurse_name">Name field is Required</span>

                                    @error('name')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                 </div>
                                <div class="form-group">
                                    <label>Mobile No <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="mobile"  id="nurseMobile" value="{{old('mobile')}}" placeholder="Mobile No" required>
                                    <span style="color:red;display: none" id="error_nurse_mobile">Mobile field is Required</span>

                                    @error('mobile')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror
                                    {{-- <span class="font-13 text-muted">e.g "HH:MM:SS"</span> --}}
                                </div>

                                <div class="form-group">
                                    <label>Father's Name <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="father_name" id="nurseFatherName"  value="{{old('father_name')}}" placeholder="Father's Name" required>
                                    <span style="color:red;display: none" id="error_nurse_father_name">Father's field is Required</span>
                                   
                                    @error('father_name')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Mother's Name <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="mother_name"  id="nurseMotherName" value="{{old('mother_name')}}" placeholder="Mother's Name"
                                    required>    
                                    <span style="color:red;display: none" id="error_nurse_mother_name">Mother's field is Required</span>

                                    @error('mother_name')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror


                                </div>

                                <div class="form-group">
                                    <label>Date of Birth <span style="color:red">*<span></label>
                                    <input type="date" class="form-control" data-toggle="input-mask" name="dob" value="{{old('dob')}}" id="nurseBirthDate"  placeholder="Date of Birth" required>
                                    <span style="color:red;display: none" id="error_nurse_dob">Date of Birht field is Required</span>

                                    @error('dob')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label>Maritual Status <span style="color:red">*<span></label>

                                    <select class="form-control" name="maritual_status"  id="nurseMaritualStatus" required>
                                        <option value="">Select Maritual Status</option>
                                        <option value="Unmarried">Unmarried</option>
                                        <option value="Married">Married</option>
                                        <option value="Widow">Widow</option>
                                    </select>

                                    <span style="color:red;display: none" id="error_nurse_status">Maritual Status field is Required</span>

                                    @error('maritual_status')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                     
                                </div>

                                <div class="form-group">
                                    <label>Salary <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="nurse_salary" value="{{old('nurse_salary')}}" id="nurse_salary"  placeholder="Salary" required>
                                    <span style="color:red;display: none" id="error_nurse_salary">Salary Field is Required</span>

                                    @error('nurse_salary')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                </div>


                                


                              

                            
                        </div> <!-- end col -->

                        <div class="col-md-6">
                           
                                <div class="form-group">
                                    <label>Photo <span style="color:red">*<span></label>
                                    <input type="file" class="form-control" data-toggle="input-mask"  id="nursePhoto" name="photo" required>
                                    <span style="color:red;display: none" id="error_nurse_photo">Photo field is Required</span>

                                    @error('photo')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror


                                    
                                </div>
                                <div class="form-group">
                                    <label>Gender <span style="color:red">*<span></label>
                                    <select class="form-control" name="gender"  id="nurseGender" required>
                                        <option value="">Select Gender</option>                                         
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Other">Other</option>
                                    </select>

                                    <span style="color:red;display: none" id="error_nurse_gender">Gender field is Required</span>

                                    @error('gender')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror


                                </div>

                                <div class="form-group">
                                    <label>Nationality <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" id="nurseNationality" name="nationality" value="{{old('nationality')}}"  placeholder="Nationality" required>
                                    <span style="color:red;display: none" id="error_nurse_nationality">Nationality field is Required</span>

                                    @error('nationality')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label>Religion <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" id="nurseReligion" name="religion" value="{{old('religion')}}" placeholder="Religion" required>
                                    <span style="color:red;display: none" id="error_nurse_religion">Religion field is Required</span>

                                    @error('religion')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label>Present Address <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask"  id="nursePresentAddress" name="present_address"  value="{{old('present_address')}}" placeholder="Present Address" required>
                                    <span style="color:red;display: none" id="error_nurse_present_address">Present Address field is Required</span>

                                    @error('present_address')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                </div>
                                <div class="form-group">
                                    <label>Permanent address <span style="color:red">*<span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask"  id="nursePermanentAddress"  name="permanent_address" value="{{old('Permanent_address')}}" placeholder="Permanent Address"  required>                                    
                                    <span style="color:red;display: none" id="error_nurse_permanent_address">Permanent Address field is Required</span>

                                    @error('permanent_address')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                </div>   
                                
                                <div class="form-group">
                                    <label>Referenced By <span style="color:red"><span></label>
                                    <input type="text" class="form-control" data-toggle="input-mask" name="refer_name" value="{{old('refer_name')}}" id="refer_name"  placeholder="Referenced By ">
                                    

                                    @error('refer_name')
                                    <div class="alert alert-danger" role="alert">
                                      <strong>{{ $message }}</strong>
                                   </div>
                                    @enderror

                                </div>

                             

                          
                        </div> <!-- end col -->

                 

                    </div>
                    
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row --> 

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Education Qualifications</h4>                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" id="edct_tbl">
                                <thead>
                                    <tr>
                                        <th>Exam Name </th>
                                        <th>Group / Subject  </th>
                                        <th>Year</th>
                                        <th>Grade</th>
                                        <th>Board/University</th>
                                        <th>Action</th>
                                     </tr>
                                </thead>
                                <tr>    
                                    <td>
                                    <input type="text" class="form-control exam_name" data-toggle="input-mask" name="exam_name" placeholder="Exam Name">
                                        <span style="color:red;display:none" id="error_exam">Exam field is Required</span>
                                    </td>
                                    <td> 
                                         <input type="text" class="form-control group_name" data-toggle="input-mask" name="group" placeholder="Subject or Group Name">
                                         <span style="color:red;display: none" id="error_group">Group field is Required</span>
                                    </td>
                                    <td>
                                          <input type="text" class="form-control exam_year" data-toggle="input-mask" name="year" placeholder="Exam Year">
                                          <span style="color:red;display: none" id="error_exam_year">Year field is Required</span>
                                    </td>
                                    <td>  
                                        <input type="text" class="form-control grade" data-toggle="input-mask" name="grade" placeholder="Grade">
                                        <span style="color:red;display: none" id="error_grade">Grade field is Required</span>
                                    </td>
                                    <td> 
                                         <input type="text" class="form-control university" data-toggle="input-mask" name="university" placeholder="Board/University">
                                         <span style="color:red;display: none" id="error_borad">Board/University field is Required</span>
                                    </td>
                                    <td> <a  type="button" class="btn btn-success waves-effect waves-light" id="add_exam" style="color:#ffff"> <i class="mdi mdi-plus-circle mr-1"></i>  </a></td>


                                </tr>

                        </table>
                             

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" id="exam_body">
                                    <thead id="exam_tbl_head" style="display: none">
                                        <tr>
                                            <th>Exam Name </th>
                                            <th>Group / Subject  </th>
                                            <th>Exp Year</th>
                                            <th>Grade</th>
                                            <th>Board/University</th>
                                            <th>Action</th>
                                            
                                         </tr>
                                    </thead>

                            </table>

           
                        </div> <!-- end col -->
 
                    </div>

                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row --> 
    
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Job Expereicence (if any)</h4>                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Organization Name </th>
                                        <th>Expereicence Year</th>
                                        <th>Starting Date</th>
                                        <th>Ending Date</th>
                                        <th>Action</th>
                                     </tr>
                                </thead>
                                <tr>    
                                    <td> 
                                         <input type="text" class="form-control" data-toggle="input-mask" name="org_name" placeholder="Organization Name" id="org_name">
                                         <span style="color:red;display:none" id="error_org_name">Organization field is Required</span>
                                   </td>
                                    <td> 
                                         <input type="text" class="form-control" data-toggle="input-mask" name="year" placeholder="Total Expereicence Year" id="total_year">
                                         <span style="color:red;display:none" id="error_total_year">Year field is Required</span>
                                    </td>
                                    <td> 
                                         <input type="date" class="form-control" data-toggle="input-mask" name="starting_date" placeholder="Starting Date" id="job_starting_date">
                                         <span style="color:red;display:none" id="error_job_starting_date">Starting Date field is Required</span>
                                        </td>
                                    <td> 
                                    <input type="date" class="form-control" data-toggle="input-mask" name="ending_date" placeholder="Ending Date" id="job_ending_date">
                                    <span style="color:red;display:none" id="error_job_ending_date">Ending Date field is Required</span>
                                </td>
                                    <td> <a type="button" class="btn btn-danger waves-effect waves-light" id="add_experice" style="color:#ffff"> <i class="mdi mdi-plus-circle mr-1"></i>  </a></td>


                                </tr>

                        </table>
                             

                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-striped" id="experience_tbl">
                                    <thead>
                                        <tr>
                                            <th>Org Name</th>
                                            <th>Year</th>
                                            <th>Starting Date</th>
                                            <th>Ending Date</th>
                                            <th>Action</th>
                                         </tr>
                                    </thead>                                    

                            </table>

           
                        </div> <!-- end col -->
 
                    </div>
                    <!-- end row -->

                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div> <!-- end row -->
    
    
    <button type="submit" class="btn btn-primary waves-effect waves-light pull-right" id="storeData">Add Nurse</button>
</form>
</div> <!-- container -->

@endsection


@push('js')


<script>

var exam_qty=0;
var exp_qty=0;
$(document).on('click','#add_exam',function(){

    ++exam_qty;

    var examName=$('.exam_name').val();
     
    var examGroup=$('.group_name').val();
    var examYear=$('.exam_year').val();
    var examGrade=$('.grade').val();
    var universityName=$('.university').val();

    /*Hide the Error Msg*/
    $('#error_exam').hide()
    $('#error_group').hide()
    $('#error_exam_year').hide()
    $('#error_grade').hide()
    $('#error_borad').hide()
    
    
    // console.log(examName);

    if(examName && examGroup && examYear  && examGrade && universityName){
        


        var _token = '{{ csrf_token() }}';
           $.ajax({
               url: "{{ route('add.nurse.qualification') }}",
               method: "POST",
               data: {_token:_token, examName:examName,examGroup:examGroup,examYear:examYear,examGrade:examGrade,universityName:universityName ,exam_qty:exam_qty},
               dataType: "json",
               success: function (response) {

                   console.log(response);
                   $('#exam_tbl_head').show();
                //    console.log(response);
                    $('#exam_body').append(response);

                //     $('#qtty').val('');
                //     $('#pro_total').val(0);
                //     $('#u_price').val(0);
                    

                //      getTotalPrice();

               }
           });



    }else{
                if(examName==''){                            
                $('#error_exam').show()
                }else if(examGroup ==''){

                $('#error_group').show()


                }else if(examYear ==''){
                $('#error_exam_year').show()

                }else if(examGrade ==''){
                $('#error_grade').show()

                }else{
                $('#error_borad').show()
                }

    }

    

})

$(document).on('click', '.btn-remove', function() {
          $('#test_row_' + $(this).data('testid')).remove();           

           
       });
       


/*function for Add multiple Expericence*/


       $(document).on('click','#add_experice',function(){   // alert("HI");
        var orgName=$('#org_name').val();
        var expYear=$('#total_year').val();
        var startinDate=$('#job_starting_date').val();
        var endingDate=$('#job_ending_date').val();


            $('#error_org_name').hide()
            $('#error_total_year').hide()
            $('#error_job_starting_date').hide()
            $('#error_job_ending_date').hide()



            if(orgName && expYear && startinDate && endingDate){

                ++exp_qty;
                var _token="{{csrf_token()}}"


                $.ajax({

                            url:"{{route('add.nurse.experience')}}",
                            method:"post",
                            data:{_token:_token,orgName:orgName,expYear:expYear,startinDate:startinDate,endingDate:endingDate,exp_qty:exp_qty},
                            dataType:"json",

                            success:function(response){

                                // console.log(response);

                                $('#experience_tbl').append(response);


                                // console.log(response)


                            }

                })

            }else{


                if(orgName==''){   

                    $('#error_org_name').show()

                }else if(expYear ==''){

                    $('#error_total_year').show()


                }else if(startinDate ==''){
                    $('#error_job_starting_date').show()

                }else if(endingDate ==''){
                    $('#error_job_ending_date').show()

                }else{
                    
                }


            }    
        
        
        

       })

       


       $(document).on('click', '.btn-remove-nurse', function() {

          $('#test_exp_row_' + $(this).data('exp_testid')).remove();           

           
       });


       $(document).on('click','#storeData',function(){  
    
        $(':input[type="submit"]').prop('disabled', false);

        /*Hide the Form Erro*/

            $('#error_nurse_name').hide()
            $('#error_nurse_mobile').hide()
            $('#error_nurse_father_name').hide()
            $('#error_nurse_mother_name').hide()
            $('#error_nurse_dob').hide()
            $('#error_nurse_status').hide()
            $('#error_nurse_photo').hide()
            $('#error_nurse_gender').hide()
            $('#error_nurse_nationality').hide()
            $('#error_nurse_religion').hide()
            $('#error_nurse_present_address').hide()
            $('#error_nurse_permanent_address').hide()
            $('#error_nurse_salary').hide()
            
            
                /*Cath The Input Field Values*/

                let nurseName=$('#nurseName').val()
                let nurseSalary=$('#nurse_salary').val()
                let nurseMobile=$('#nurseMobile').val()
                let nurseFatherName=$('#nurseFatherName').val()
                let nurseMotherName=$('#nurseMotherName').val()                
                let nurseBirthDate=$('#nurseBirthDate').val()
                let nurseMaritualStatus=$('#nurseMaritualStatus').val()
                let nursePhoto=$('#nursePhoto').val()
                let nurseGender=$('#nurseGender').val()

                let nurseNationality=$('#nurseNationality').val()
                let nurseReligion=$('#nurseReligion').val()
                let nursePresentAddress=$('#nursePresentAddress').val()
                let nursePermanentAddress=$('#nursePermanentAddress').val()
              


   

if(nurseName && nurseMobile && nurseFatherName && nurseMotherName && nurseBirthDate && nurseMaritualStatus && nursePhoto && nurseGender && nurseNationality && nurseReligion && nursePresentAddress && nursePermanentAddress  && nurseSalary){

$(':input[type="submit"]').prop('disabled', false);


}else{

    if(nurseName==""){
            $('#error_nurse_name').show()
    }else if(nurseMobile==""){
        $('#error_nurse_mobile').show()

    }else if(nurseFatherName==""){
         $('#error_nurse_father_name').show()

    }else if(nurseMotherName==""){
         $('#error_nurse_mother_name').show()

    }else if(nurseBirthDate==""){
          $('#error_nurse_dob').show()

    }else if(nurseMaritualStatus==""){
           $('#error_nurse_status').show()

    }else if(nurseSalary==""){
        $('#error_nurse_salary').show()


    }
    else if(nursePhoto==""){
           $('#error_nurse_photo').show()
    }else if(nurseGender==""){
      $('#error_nurse_gender').show()
    }else if(nurseNationality==""){

           $('#error_nurse_nationality').show()

    }else if(nurseReligion==""){
        $('#error_nurse_religion').show()

    }else if(nursePresentAddress==""){
          $('#error_nurse_present_address').show()
    }
    
    else if(nursePermanentAddress==""){
         $('#error_nurse_permanent_address').show()
    }




    



}






       


       })


       

</script>




@endpush

