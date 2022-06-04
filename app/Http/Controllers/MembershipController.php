<?php

namespace App\Http\Controllers;

use App\Models\Membership;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MembershipController extends Controller
{
    public function loadAddMembership()
    {
        $users = User::all();
        $mtypes = DB::table('membership_type')->get();
        return view('addmembership')->with('users', $users)->with('mtypes', $mtypes);
    }

    public function submitMembership(Request $request)
    {
        $user_id = request('userid');
        $mtype = request('mtype');
        $sdate = request('sdate');
        $edate = request('edate');

        if ($sdate < date("Y-m-d")) {
            return redirect('/addmembership')->with('errormsg', 'Error, date must start from today and afterwards.');
        }
        elseif($sdate > $edate){
            return redirect('/addmembership')->with('errormsg', 'Error, start date cannot be greater than end date.');
        }
        else {
            $membership = new Membership();
            $membership->user_id = $user_id;
            $membership->type = $mtype;
            $membership->start_date = $sdate;
            $membership->finish_date = $edate;

            if($membership->save()){
                return redirect('/addmembership')->with('addmessage', 'Membership added successfully.');
            }
            else {
                return redirect('/addmembership')->with('errormsg', 'Error adding membership.');
            }
        }
    }

    public function viewMemberships()
    {
        $members = DB::table('memberships')
            ->join('users', 'users.id' , '=', 'memberships.user_id')
            ->join('membership_type', 'memberships.type', '=', 'membership_type.id')
            ->select('users.name', 'memberships.id', 'memberships.start_date', 'memberships.finish_date', 'membership_type.type')
            ->get();
        return view('viewmemberships')->with('members', $members);
    }

    public function loadViewMembership()
    {
        $userid = Auth::user()->id;
        $membership = DB::table('memberships')
            ->join('users', 'users.id' , '=', 'memberships.user_id')
            ->join('membership_type', 'memberships.type', '=', 'membership_type.id')
            ->select('users.name', 'memberships.id', 'memberships.start_date', 'memberships.finish_date', 'membership_type.type')
            ->where('memberships.user_id', '=', $userid)
            ->get();
        return view('viewmembership')->with('membership', $membership);
    }
}
