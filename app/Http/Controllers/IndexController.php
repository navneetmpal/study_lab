<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\SchoolDetails;
use App\Models\TeacherJobs;
use App\Models\AdmisionInquery;
use App\Models\Address;
use App\Models\BlogContent;
use App\Models\Boards;
use App\Models\Medium;
use App\Models\Grades;
use App\Models\Subject;
use App\Models\Fees;
use App\Models\User;
use App\Models\SchoolRate;
use Illuminate\Support\Facades\Hash;
use App\Mail\AdmissionInquery;
use Illuminate\Support\Facades\Auth;
use Mail;
use Session;
// use Illuminate\Database\Eloquent\Collection

class IndexController extends Controller
{
    public function student(){
        $address=Address::get();
        $mediums = Medium::get();
        $grades = Grades::get();
        // $subjects = ''; // $subjects = Subject::get();
        $fees = Fees::get();
        $details=SchoolDetails::get();
        // $jobdetails='';  // $jobdetails=TeacherJobs::get();
        $boards=Boards::get();
        $blogcontent = BlogContent::orderBy('created_at', 'desc')->take(3)->get();
        $schoolplace ='';
        $jobplace = '';
        $jobdata = '';
        return view('front.student_index',compact('details', 'address','schoolplace', 'jobplace', 'jobdata', 'blogcontent', 'boards', 'mediums', 'grades', 'fees'));

        // return view('front.student_index');
    }


    public function teacher(){
        $address=Address::get();
        $mediums = Medium::get();
        $grades = Grades::get();
        $subjects = Subject::get();
        $fees = Fees::get();
        $details=SchoolDetails::get();
        $jobdetails=TeacherJobs::get();
        $boards=Boards::get();
        $blogcontent = BlogContent::orderBy('created_at', 'desc')->take(3)->get();
        $schoolplace ='';
        $jobplace = '';
        $jobdata = '';
        return view('front.teacher_index',compact('details','jobdetails', 'address', 'jobplace', 'jobdata', 'blogcontent', 'boards', 'mediums', 'grades', 'fees', 'subjects'));

        // return view('front.teacher_index');
    }

    public function index(){
        $address=Address::get();
        $mediums = Medium::get();
        $grades = Grades::get();
        $subjects = Subject::get();
        $fees = Fees::get();
        $details=SchoolDetails::get();
        $jobdetails=TeacherJobs::get();
        $boards=Boards::get();
        $blogcontent = BlogContent::orderBy('created_at', 'desc')->take(3)->get();
        $schoolplace ='';
        $jobplace = '';
        $jobdata = '';
        return view('front.index',compact('details','jobdetails', 'address','schoolplace', 'jobplace', 'jobdata', 'blogcontent', 'boards', 'mediums', 'grades', 'fees', 'subjects'));
    }
// -----------------------------------------------------------------------
    public function school($id){
        // dd($id);
        $details=SchoolDetails::where('id', $id)->first();
        $review = SchoolRate::where('school_id', $id)->orderBy('created_at', 'desc')->take(3)->get();
        // echo "<pre>";
        // print_r($details);
        return view('front.school_details',compact('details','review'));
        // $details=SchoolDetails::get();
        // $jobdetails=TeacherJobs::get();
        // return view('front.index',compact('details','jobdetails'));
    }
// ------------------------------------------------------------------
    public function admission($id){
        $details=SchoolDetails::where('id', $id)->first();
        return view('front.school_admission_form',compact('details'));
    }
// ---------------------------------------------------------------
    public function store(Request $request, $id){
        // dd($request->all());
        // $inquery = new AdmisionInquery();
        // $inquery->student_name = isset($request->name)?$request->name:'NULL';
        // $inquery->father_name = isset($request->fathername)?$request->fathername:'NULL';
        // $inquery->mother_name = isset($request->mothername)?$request->mothername:'NULL';
        // $inquery->class = isset($request->class)?$request->class:'NULL';
        // $inquery->contact = isset($request->contact)?$request->contact:'NULL';
        // $inquery->address = isset($request->address)?$request->address:'NULL';
        // $inquery->mytextarea = isset($request->mytextarea)?$request->mytextarea:'NULL';
        // $inquery->save();
        // return redirect()->route('mail');

        // $request->validate([
        //   'class' => 'required',
        //   'fathername' => 'required',
        //   'mothername' => 'required',
        //   'name' => 'required',
        //   'contact' => 'required',
        // ]);

        $details = [
          'mothername' => $request->mothername,
          'fathername' => $request->fathername,
          'name' => $request->name,
          'class' => $request->class,
          'contact' => $request->contact
        ];

        $email=SchoolDetails::where('id', $id)->value('email');
        if ($email) {
            \Mail::to($email)->send(new \App\Mail\AdmissionInquery($details));
        }
        // dd("Email is Sent.");
        return redirect()->route('thanks');
    }
// -----------------------------------------------------------------------------
    public function thanks(){
        return view('front.thankyou');
    }
// ------------------------------------------------------------------------
    public function place(){
        // $add = $request->address;
        $places = SchoolDetails::get();
        $viewplace = '';
        $schoolviewplace = '';
        // dd($places);
        return view('front.school_list', compact('places', 'viewplace', 'schoolviewplace'));
    }
// ----------------------------------------------------school filter------------------------
    public function pick(Request $request){
        $address = Address::get();
        $blogcontent = BlogContent::orderBy('created_at', 'desc')->take(3)->get();
        $boards = Boards::get();
        $details ='';
        $jobplace = '';
        $jobdata = '';
        $add = $request->address;
        $board = $request->board;
        $medium = $request->medium;
        $grade = $request->grade;
        $fee = $request->fee;
        $query = SchoolDetails::query();
        if ($add) {
            $query->where('address', $add);
        }
        if ($board) {
            $query->where('board', $board);
        }
        if ($medium) {
            $query->where('medium', $medium);
        }
        if ($grade) {
            $query->where('grade', $grade);
        }
        if ($fee) {
            $query->where('fee', $fee);
        }
        // else{
        //     return "no data found";
        // }
        if($add==''){
            $place = $query->get(); 
            $schoolplace = ''; 
        }else{
            $place = $query->get(); 
            $schoolplace =  $query->first(); 
        }
        $jobdetails = TeacherJobs::get();
        $mediums = Medium::get();
        $grades = Grades::get();
        $fees = Fees::get();
        $subjects = Subject::get();
        return view('front.student_index', compact('schoolplace', 'address', 'jobdetails', 'place', 'blogcontent', 'boards', 'details', 'jobplace', 'jobdata', 'mediums', 'grades', 'fees', 'subjects'));

        // echo "<pre>";
        // print_r($schoolplace);
    }
// --------------------------------------------------------------------------------
    public function viewplace($address){
        // return "hello";
        $places = '';
        $schoolviewplace = SchoolDetails::where('address', $address)->first();
        $viewplace = SchoolDetails::where('address', $address)->get();
        return view('front.school_list', compact('viewplace', 'places', 'schoolviewplace'));
    }
// ------------------------------------------------------------------------------
    public function viewjobdetail($id){
        // return "hello";
        $jobdetails=TeacherJobs::where('id', $id)->first();
        // echo "<pre>";
        // print_r($jobdetails); 
        return view('front.job_details',compact('jobdetails'));    
    }
// -----------------------------------------------------------------------------
    public function viewall(){
        // return "hello";
        $jobdetails=TeacherJobs::get();
        $joblocation = '';
        // echo "<pre>";
        // print_r($jobdetails); 
        return view('front.job_listing',compact('jobdetails', 'joblocation'));    
    }
// ---------------------------------------------------------------
    public function location(Request $request){
        // return "hello";
        $address=Address::get();
        $details=SchoolDetails::get();
        $blogcontent = BlogContent::orderBy('created_at', 'desc')->take(3)->get();
        $jobdetails='';
        $fees = Fees::get();
        $boards=Boards::get();
        $subjects = Subject::get();
        $mediums = Medium::get();
        $grades = Grades::get();
        $schoolplace = '';      
        // $jobplace = TeacherJobs::where('address', $jobadd)->first();
        // $jobdata = TeacherJobs::where('address', $jobadd)->get();
        $add = $request->address;
        $board = $request->board;
        $medium = $request->medium;
        $grade = $request->grade;
        $fee = $request->fee;
        $subject = $request->subject;
        $query = TeacherJobs::query();
        if ($add) {
            $query->where('address', $add);
        }
        if ($board) {
            $query->where('board', $board);
        }
        if ($medium) {
            $query->where('medium', $medium);
        }
        if ($grade) {
            $query->where('grade', $grade);
        }
        if ($fee) {
            $query->where('fee', $fee);
        }
        if ($subject) {
            $query->where('sub_name', $subject);
        }
        // else{
        //     return "no data found";
        // }
        if($add==''){
            $jobdata = $query->get(); 
            $jobplace = ''; 
        }else{
            $jobdata = $query->get(); 
            $jobplace =  $query->first(); 
        }
        // dd($schoolplace);
        // echo "<pre>";
        // print_r($request->all());
        return view('front.teacher_index', compact('jobplace', 'address', 'jobdetails', 'details', 'jobdata', 'schoolplace', 'blogcontent', 'boards', 'mediums', 'grades', 'fees', 'subjects'));
    }
// ------------------------------------------------------------------------------
    public function viewjoblocation($address){
        $joblocation = TeacherJobs::where('address', $address)->get();
        return view('front.job_listing', compact('joblocation'));  
    }
// -----------------------------------------------------------------
    public function writeblogs(){
        return view('front.blog_form');  
    }
// -------------------------------------------------------blogcontent
    public function blogcontent(Request $request){
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $detailPageImgFileName = 'product_img_' . time() . '.' . $image->getClientOriginalExtension();
            $savePath = public_path('/asset/blogimg');
            $image->move($savePath, $detailPageImgFileName);
            $pname = 'asset/blogimg/' . $detailPageImgFileName;
            BlogContent::create(['image' => $pname, 'blog' => $request->blog]);
            // return redirect('index');
        }
        return redirect('index');
        // dd($request->all());
    }
// ----------------------------------------------------viewblog
    public function viewblog($id){
        // return "hello";
        $blogcontent = BlogContent::where('id',$id)->first();
        // dd($blogcontent);
        return view('front.viewblog', compact('blogcontent'));  
    }
// ---------------------------------------------editblog
    public function editblog($id){
        // return "hello";
        // $blogcontent = BlogContent::where('id',$id)->first();
        // dd($blogcontent);
        // $blogcontent = '';
        // $blogcontent = '';
        $blogcontent = BlogContent::where('id',$id)->first();
        return view('front.editblog', compact('blogcontent'));  
    }
// ----------------------------------------deleteblog
    public function deleteblog($id){
        // return "hello";
        $blogcontent = BlogContent::where('id',$id)->delete();
        // dd($blogcontent);
        // $blogcontent = BlogContent::where('id',$id)->first();
        return redirect('index');  
    }
// ---------------------------------------------updateblog
    public function updateblog(Request $request, $id){
        $content = BlogContent::where('id', $id)->first();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $detailPageImgFileName = 'product_img_' . time() . '.' . $image->getClientOriginalExtension();
            $savePath = public_path('/asset/blogimg');
            $image->move($savePath, $detailPageImgFileName);
            $pname = 'asset/blogimg/' . $detailPageImgFileName;
            $content->image = $pname;
        }
        if ($request->filled('blog')) {
            $content->blog = $request->blog;
        }
        $content->save();
        return redirect('index');
    }
// ------------------------------------------------
    public function viewallblog(){
        return "ERROR 404:page not found";
    }
// -----------------------------------------------job_apply_form
    public function job_apply_form($id){
        $jobdetails=TeacherJobs::where('id', $id)->first();
        return view('front.job_apply_form', compact('jobdetails'));
    }
// ----------------------------------------------------------jobapply
    public function jobapply(Request $request, $id){
        $details = [
          'name' => $request->name,
          'subject' => $request->subject,
          'minclass' => $request->minclass,
          'maxclass' => $request->maxclass,
          'contact' => $request->contact,
          'address' => $request->address
        ];

        $email=TeacherJobs::where('id', $id)->value('email');
        if ($email) {
            \Mail::to($email)->send(new \App\Mail\JobApplyMail($details));
        }
        // dd("Email is Sent.");
        return redirect()->route('thanks');
    }
// ------------------------------------------------review
    public function review(Request $request, $id){
        // return "fello";
        $review = new SchoolRate;
        $review->school_id = $id;
        $review->star = isset($request->star)?$request->star:'NULL';
        $review->name = isset($request->name)?$request->name:'NULL';
        $review->review = isset($request->review)?$request->review:'NULL';
        $review->save();
        return redirect()->route('thanks');
        // dd($request->all());
    }
// --------------------------------------------------------------
    public function header(){
        $address=Address::get();
        return view('layout.front.header',compact('address'));
    }
// ------------------------------------------------
    public function searchforall(Request $request){
        // $address=Address::get();
        // return view('layout.front.header',compact('address'));
        return "fello";
    }
// ----------------------------------------loginpage
    public function loginpage(Request $request){
        // $address=Address::get();
        return view('front.login');
        // return "fello";
    }
// -----------------------------------------registger
    public function registger(Request $request){
        // $request->validate([
        //   'name' => 'required',
        //   'contact' => 'required|numeric',
        //   'email' => 'required|email|unique:users,email',
        //   'password' => 'required'
        // ]);
        $inquery = new User();
        $inquery->name = isset($request->name)?$request->name:'NULL';
        $inquery->contact = isset($request->contact)?$request->contact:'NULL';
        $inquery->email = isset($request->email)?$request->email:'NULL';
        $inquery->password = Hash::make($request->password);
        $inquery->save();
        return redirect()->route('loginpage');
    }
// -----------------------------------------------
    public function login(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        if(auth::attempt($credentials))
        {
            $request->session()->regenerate();
            $id = Auth::user();
            if ($id->type === 0) {
                // return redirect()->route('index');
                return redirect()->route('student');
            }
            if ($id->type === 1) {
                // return redirect()->route('index');
                return redirect()->route('teacher');
            }
            if ($id->type === 2) {
                // return redirect()->route('index');
                return redirect()->route('index');
            }
            // else {
            //     return redirect()->route('teacher');
            //     // return "teacher";
            // }
        }
        return back();
    }
// ----------------------------------------
    public function logout(){
        Auth::logout();
        return redirect()->route('loginpage');
    } 
}
