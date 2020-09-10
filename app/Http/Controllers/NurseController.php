<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Nurse;
use App\Model\NurseExperience;
use App\Model\NurseQualification;
use Illuminate\Support\Facades\Storage;
class NurseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        // $this->middleware('auth');
    }



    public function index()
    {

        
        return view('backend.nurse.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.nurse.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $request->validate([
                'name'=>'required',
                'mobile'=>'required',
                'father_name'=>'required',
                'mother_name'=>'required',
                'dob'=>'required',
                'maritual_status'=>'required',

                'nurse_salary'=>'required',
                'gender'=>'required',
                'nationality'=>'required',
                'religion'=>'required',

                'present_address'=>'required',
                'permanent_address'=>'required',
                'photo'=>'required|mimes:jpg,png,jpeg',
        ]);


        $nurseData=[];    

// photo
        $nurseData['name']=$request->name;
        $nurseData['date']=date('Y-m-d');
        
        $nurseData['mobile']=$request->mobile;
        $nurseData['father_name']=$request->father_name;
        $nurseData['mother_name']=$request->mother_name;
        $nurseData['dob']=$request->dob;
        $nurseData['maritual_status']=$request->maritual_status;
        $nurseData['gender']=$request->gender;
        $nurseData['nationality']=$request->nationality;
        $nurseData['religion']=$request->religion;        
        $nurseData['salary']=$request->nurse_salary;
        $nurseData['permanent_address']=$request->permanent_address;
        $nurseData['present_address']=$request->present_address;
        $nurseData['refer_name']=$request->refer_name;

            if($request->hasFile('photo')){
               $image=$request->file('photo');
               $imageName=mt_rand()."_".time();
               $imageOriginalName = $imageName."_".$image->getClientOriginalName(); 

            // //    Storage::disk('public')->put($imageOriginalName, 'nurse');


            // //    $image->move('nurse/', $imageOriginalName);


            //    $image->storeAs('nurse', $imageOriginalName);


               $request->photo->move(public_path('nurse'), $imageOriginalName);



            //    Storage::disk('public')->put($imageOriginalName, 'nurse');


            //    Storage::put('file.jpg', $contents, 'public');



              
            }


            $nurseData['photo']=$imageOriginalName;


            Nurse::insert( $nurseData );
            
            

        
        
        return "Data Inserted !";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function addQutalification(Request $request){




        if ($request->ajax()) {            

            $output  = '<tr id="test_row_'.$request->exam_qty.'">';



            $output .= '<input type="hidden" name="exam_name[]" value="'.$request->examName.'" />';
            $output .= '<td> '.$request->examName.' </td>';
             $output .= '<td >'.$request->examGroup.' <input type="hidden" name="exam_group[]" value="'.$request->examGroup.'" />';
             $output .= '<td >'.$request->examYear.' <input type="hidden" name="exam_year[]" value="'.$request->examYear.'" />';
             $output .= '<td >'.$request->examGrade.' <input type="hidden" name="exam_grade[]" value="'.$request->examGrade.'" />';
             $output .= '<td >'.$request->universityName.' <input type="hidden" name="exam_board[]" value="'.$request->universityName.'" />';       
             
            $output .= '<td width="10%">
                        <button type="button" class="btn-remove btn btn-sm btn-danger"  data-testid="'.$request->exam_qty.'">
                            Delete
                        </button>
                        </td>';
            $output .= '</tr>';


           


            echo json_encode($output);
        }

    }


    public function addExpericence(Request $request){


            // return $request->all();
            if ($request->ajax()) {    


                $output  = '<tr id="test_exp_row_'.$request->exp_qty.'">';



                // $output .= ''" />';
                // $output .= '<td> '.$request->orgName.'</td>';
                $output .= '<td >'.$request->orgName.' <input type="hidden" name="org_name[]" value="'.$request->orgName.'" />';
                 $output .= '<td >'.$request->expYear.' <input type="hidden" name="exp_year[]" value="'.$request->expYear.'" />';
                 $output .= '<td >'.$request->startinDate.' <input type="hidden" name="exp_starting_date[]" value="'.$request->startinDate.'" />';
                 $output .= '<td >'.$request->endingDate.' <input type="hidden" name="exp_ending_date[]" value="'.$request->endingDate.'" />';       
                 
                $output .= '<td width="10%">
                            <button type="button" class="btn-remove-nurse btn btn-sm btn-danger"  data-exp_testid="'.$request->exp_qty.'">
                                Delete
                            </button>
                            </td>';
                $output .= '</tr>';
    
    
               
    
    
                echo json_encode($output);
                


            }



    }
}
