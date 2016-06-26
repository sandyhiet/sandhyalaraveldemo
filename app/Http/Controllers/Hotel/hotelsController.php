<?php
namespace App\Http\Controllers;
namespace App\Http\Controllers\Hotel;
use App\Hotel;
use App\Comment;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Input;
use Validator;

class hotelsController extends Controller {

    
     /********************* Display all hotels listing	*****************/
     
    public function index()
    {
        //getting all data from hotels table
        $hotels = Hotel::all();
        //return result on the welcome blade page
        return view('welcome', compact('hotels'));
    }
 
     
     /*********************** Show all comments of hotel and return response ***************/
	 
	 
     
    public function showAllComments($id)
    {
        //find all comments as per Hotel id basics 
        $comments = Hotel::find($id)->comments;
        $hotelid = $id;
        $hotelname = Hotel::findOrFail($id);
        // show all comments listing on detail blade page
        return view('detail', compact('comments','hotelid','hotelname'));
    }

    
     /*********************** Post comment ******************/
    
    public function postComments(Request $request)
    {
         
         //create object of comment class
         $comment = new Comment;
         $comment->description = $request->input('body');
         $comment->hotel_id = $request->input('hotel_id');
         //save
         $comment->save();
         //return to the previous view
         return redirect()->back();
    }
  
}
?>