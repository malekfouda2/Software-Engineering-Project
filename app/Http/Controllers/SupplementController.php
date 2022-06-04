<?php

namespace App\Http\Controllers;

use App\Models\Supplement;
use Illuminate\Support\Facades\Auth;
use App\Models\Request as SupplementsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class SupplementController extends Controller
{
    public function addSupplement(Request $request)
    {
        request()->validate([
            'protein_name' => 'required|min:6|regex:/^[\pL\s]+$/u',
            'protein_description' => 'required|min:6',
            'protein_price' => 'required|int|min:1',
            'image' => 'required|image|mimes:jpeg,png,jpg'
        ]);

        $supplement = new Supplement();

        $supplement->name = request('protein_name');
        $supplement->description = request('protein_description');
        $supplement->price = request('protein_price');

        $image = request('protein_name') . "_" . time() . "." . $request->image->extension();
        $supplement->image = "images/supplements/" . $image;

        if (request()->image->move(public_path('/images/supplements/'), $image)) {
            if ($supplement->save()) {
                return redirect('/addsupplement')->with('addmessage', 'Supplement Added Successfully.');
            } else {
                return redirect('/addsupplement')->with('addmessage', 'Error adding, please try again.');
            }
        } else {
            return redirect('/addsupplement')->with('addmessage', 'Error uploading photo please try again.');
        }
    }

    public function loadViewSupplements()
    {
        $supplements = Supplement::all();
        return view('viewsupplements')->with('supplements', $supplements);
    }

    public function loadAddSupplement()
    {
        return view('addsupplement');
    }

    public function deleteSupplement($id)
    {
        $supplement = Supplement::find($id);
        if ($supplement == NULL) {
            return redirect('/viewsupplements')->with('findmsg', 'Cannot find the supplement.');
        } else {
            if($supplement->delete()){
                return redirect('/viewsupplements')->with('deletemsg', 'Supplement Deleted!');
            }
            else {
                return redirect('/viewsupplements')->with('deletemsg', 'Error deleting supplement please try again.');
            }
        }
    }

    public function loadEditSupplement($id)
    {
        $supplement = Supplement::find($id);
        if ($supplement == NULL) {
            return redirect('/viewsupplements')->with('findmsg', 'Cannot find the supplement.');
        } else {
            return view('editsupplement')->with('supplement', $supplement);
        }
    }

    public function submitEditSupplement($id, Request $request)
    {
        $supplement = Supplement::find($id);
        $old_image = $supplement->image;

        request()->validate([
            'protein_name' => 'required|min:6|regex:/^[\pL\s]+$/u',
            'protein_description' => 'required|min:6',
            'protein_price' => 'required|int|min:1',
            'image' => 'image|mimes:jpeg,png,jpg'
        ]);

        $supplement->name = request('protein_name');
        $supplement->description = request('protein_description');
        $supplement->price = request('protein_price');

        if (request('image') == "") {
            $supplement->image = $old_image;
            if ($supplement->save()) {
                return redirect('/viewsupplements')->with('editmessage', 'Supplement Edited Successfully.');
            } else {
                return redirect('/viewsupplements')->with('editmessage', 'Error updating supplement, please try again.');
            }
        } else {
            $image = request('protein_name') . "_" . time() . "." . $request->image->extension();
            $supplement->image = "images/supplements/" . $image;
            if ($supplement->save()) {
                if (request()->image->move(public_path('/images/supplements/'), $image)) {
                    return redirect('/viewsupplements')->with('editmessage', 'Supplement Edited Successfully.');
                } else {
                    return redirect('/viewsupplements')->with('editmessage', 'Error updating supplement, please try again.');
                }
            }
        }
    }

    public function requestSupplement($id){
        $supplement = Supplement::find($id);
        if ($supplement == NULL) {
            return redirect('/viewsupplements')->with('findmsg', 'Cannot find the supplement.');
        }else {
            $sr = new SupplementsRequest();
            $sr->user_id = Auth::user()->id;
            $sr->supplement_id = $id;

            if($sr->save()){
                Session::flash('requestmsg', 'Request sent successfully.');
                return redirect('/viewsupplements');
            }
            else {
                return view('/viewsupplements')->with('requestmsg', 'Error sending request.');
            }
        }
    }

    public function loadViewRequests(){
        $requests = DB::table('supplements_requests')
            ->join('users', 'users.id', '=', 'supplements_requests.user_id')
            ->join('supplements', 'supplements.id', '=', 'supplements_requests.supplement_id')
            ->select('supplements.name as sname', 'users.name', 'supplements.price', 'supplements_requests.id')
            ->where('supplements_requests.accepted', '=', '0')
            ->get();
        return view('viewrequests')->with('requests', $requests);
    }

    public function acceptRequest($id){
        $supplementR = SupplementsRequest::find($id);
        if ($supplementR == NULL) {
            return redirect('/viewrequests')->with('findmsg', 'Cannot find the supplement.');
        }
        else {
            $supplementR->accepted = 1;
            if($supplementR->save()){
                return redirect('/viewrequests')->with('acceptmsg', 'Request accepted successfully.');
            }
            else {
                return redirect('/viewrequests')->with('acceptmsg', 'Error accepting request.');
            }
        }
    }

}
