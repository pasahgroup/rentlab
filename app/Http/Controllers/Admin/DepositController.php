<?php

namespace App\Http\Controllers\Admin;

use App\Models\Deposit;
use App\Models\Gateway;
use App\Models\GeneralSetting;
use App\Http\Controllers\Controller;
use App\Models\PlanLog;
use App\Models\RentLog;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DepositController extends Controller
{

    public function pending()
    {
        //dd('pp');
        $pageTitle = 'Pending Payments';
        $emptyMessage = 'No pending payments.';

 if(request('today')){
 $pageTitle = 'Today Pending Payments';
  
    //        $depositsx = Deposit::where('created_at',Carbon::today())
    // ->where('method_code', '>=', 1000)
    //     ->where('status',2)
    //    ->with(['user', 'gateway'])
    //   ->orderBy('id','desc')
    // ->paginate(getPaginate());

     // $records = DB::table('deposits')->select(DB::raw('*'))
     //  ->with(['user', 'gateway'])
     //              ->whereRaw('Date(created_at) = CURDATE()')
     //             ->where('method_code', '>=', 1000)
     //    ->where('status',2)
                  
     //              ->orderBy('id','desc')
     //              ->paginate(getPaginate());

                  $deposits = Deposit::whereDate('created_at',\Carbon\Carbon::today())
                    ->where('method_code', '>=', 1000)
        ->where('status',2)
       ->with(['user', 'gateway'])
      ->orderBy('id','desc')
    ->paginate(getPaginate());
    //dd($deposits);

          }elseif(request('tomorrow')){
             $pageTitle = 'Tomorrow Pending Payments';
                    $deposits = Deposit::whereDate('created_at',\Carbon\Carbon::now()->addDays(1))
    ->where('method_code', '>=', 1000)
        ->where('status',2)
       ->with(['user', 'gateway'])
      ->orderBy('id','desc')
    ->paginate(getPaginate());

      // dd($deposits);
          }
          elseif(request('week')){

                $pageTitle = 'Week Pending Payments';
                    $deposits = Deposit::wherebetween('created_at',[Carbon::now()->startOfWeek()->toDateString(),Carbon::now()->endOfWeek()->toDateString()])
    ->where('method_code', '>=', 1000)
        ->where('status',2)
       ->with(['user', 'gateway'])
      ->orderBy('id','desc')
    ->paginate(getPaginate());

    //dd($deposits);
}
elseif(request('month')){
        $pageTitle = 'Month Pending Payments';
                    $deposits = Deposit::wherebetween('created_at',[Carbon::now()->startOfMonth()->toDateString(),Carbon::now()->endOfMonth()->toDateString()])
    ->where('method_code', '>=', 1000)
        ->where('status',2)
       ->with(['user', 'gateway'])
      ->orderBy('id','desc')
    ->paginate(getPaginate());}

          else
          {
    $pageTitle = 'All Pending Payments';
        $deposits = Deposit::where('method_code', '>=', 1000)->where('status', 2)->with(['user', 'gateway'])->orderBy('id','desc')->paginate(getPaginate());
    }

    return view('admin.deposit.log_pending', compact('pageTitle', 'emptyMessage', 'deposits'));
    }


    public function approved()
    {
        $pageTitle = 'Approved Payments';
        $emptyMessage = 'No approved payments.';
        $deposits = Deposit::where('method_code','>=',1000)->where('status', 1)->with(['user', 'gateway'])->orderBy('id','desc')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'emptyMessage', 'deposits'));
    }

    public function successful()
    {
        $pageTitle = 'Successful Payments';
        $emptyMessage = 'No successful payments.';
        $deposits = Deposit::where('status', 1)->with(['user', 'gateway'])->orderBy('id','desc')->paginate(getPaginate());
        return view('admin.deposit.log', compact('pageTitle', 'emptyMessage', 'deposits'));
    }

    public function rejected(Request $request)
    {
          $pageTitle = 'Rejected Payments';
        $emptyMessage = 'No rejected payments.';
       
          if(request('weekcancellation')){
  $pageTitle = 'Week Rejected Payments';

           $deposits = Deposit::wherebetween('created_at',[Carbon::now()->startOfWeek()->toDateString(),Carbon::now()->endOfWeek()->toDateString()])
    ->where('method_code', '>=', 1000)
        ->where('status', 3)
       ->with(['user', 'gateway'])
      ->orderBy('id','desc')
    ->paginate(getPaginate());

    //dd($deposits);

          }elseif(request('monthcancellation')){
              $pageTitle = 'Month Rejected Payments';

 $deposits = Deposit::wherebetween('created_at',[Carbon::now()->startOfMonth()->toDateString(),Carbon::now()->endOfMonth()->toDateString()])
    ->where('method_code', '>=', 1000)
        ->where('status', 3)
       ->with(['user', 'gateway'])
      ->orderBy('id','desc')
    ->paginate(getPaginate());
          }

          else{ 

            $pageTitle = 'All Rejected Payments';           
        $deposits = Deposit::where('method_code', '>=', 1000)->where('status', 3)->with(['user', 'gateway'])->orderBy('id','desc')->paginate(getPaginate());

          }
     
        return view('admin.deposit.log_reject', compact('pageTitle', 'emptyMessage', 'deposits'));
    }

    public function deposit()
    {

        //dd('poopp');

        $pageTitle = 'Payment History';
        $emptyMessage = 'No payment history available.';
        $deposits = Deposit::with(['user', 'gateway'])->where('status','!=',0)->orderBy('id','desc')->paginate(getPaginate());
        $successful = Deposit::where('status',1)->sum('amount');
        $pending = Deposit::where('status',2)->sum('amount');
        $rejected = Deposit::where('status',3)->sum('amount');
        return view('admin.deposit.log', compact('pageTitle', 'emptyMessage', 'deposits','successful','pending','rejected'));
    }

    public function depositViaMethod($method,$type = null){
        $method = Gateway::where('alias',$method)->firstOrFail();
        if ($type == 'approved') {
            $pageTitle = 'Approved Payment Via '.$method->name;
            $deposits = Deposit::where('method_code','>=',1000)->where('method_code',$method->code)->where('status', 1)->orderBy('id','desc')->with(['user', 'gateway']);
        }elseif($type == 'rejected'){
            $pageTitle = 'Rejected Payment Via '.$method->name;
            $deposits = Deposit::where('method_code','>=',1000)->where('method_code',$method->code)->where('status', 3)->orderBy('id','desc')->with(['user', 'gateway']);

        }elseif($type == 'successful'){
            $pageTitle = 'Successful Payment Via '.$method->name;
            $deposits = Deposit::where('status', 1)->where('method_code',$method->code)->orderBy('id','desc')->with(['user', 'gateway']);
        }elseif($type == 'pending'){
            $pageTitle = 'Pending Payment Via '.$method->name;
            $deposits = Deposit::where('method_code','>=',1000)->where('method_code',$method->code)->where('status', 2)->orderBy('id','desc')->with(['user', 'gateway']);
        }else{
            $pageTitle = 'Payment Via '.$method->name;
            $deposits = Deposit::where('status','!=',0)->where('method_code',$method->code)->orderBy('id','desc')->with(['user', 'gateway']);
        }
        $deposits = $deposits->paginate(getPaginate());
        $successful = $deposits->where('status',1)->sum('amount');
        $pending = $deposits->where('status',2)->sum('amount');
        $rejected = $deposits->where('status',3)->sum('amount');
        $methodAlias = $method->alias;
        $emptyMessage = 'No Payment Found';
        return view('admin.deposit.log', compact('pageTitle', 'emptyMessage', 'deposits','methodAlias','successful','pending','rejected'));
    }

    public function search(Request $request, $scope)
    {
        $search = $request->search;
        $emptyMessage = 'No search result was found.';
        $deposits = Deposit::with(['user', 'gateway'])->where('status','!=',0)->where(function ($q) use ($search) {
            $q->where('trx', 'like', "%$search%")->orWhereHas('user', function ($user) use ($search) {
                $user->where('username', 'like', "%$search%");
            });
        });
        if ($scope == 'pending') {
            $pageTitle = 'Pending Payments Search';
            $deposits = $deposits->where('method_code', '>=', 1000)->where('status', 2);
        }elseif($scope == 'approved'){
            $pageTitle = 'Approved Payments Search';
            $deposits = $deposits->where('method_code', '>=', 1000)->where('status', 1);
        }elseif($scope == 'rejected'){
            $pageTitle = 'Rejected Payments Search';
            $deposits = $deposits->where('method_code', '>=', 1000)->where('status', 3);
        }else{
            $pageTitle = 'Payments History Search';
        }

        $deposits = $deposits->paginate(getPaginate());
        $pageTitle .= '-' . $search;

        return view('admin.deposit.log', compact('pageTitle', 'search', 'scope', 'emptyMessage', 'deposits'));
    }

    public function dateSearch(Request $request,$scope = null){
        $search = $request->date;
        if (!$search) {
            return back();
        }
        $date = explode('-',$search);
        $start = @$date[0];
        $end = @$date[1];
        // date validation
        $pattern = "/\d{2}\/\d{2}\/\d{4}/";
        if ($start && !preg_match($pattern,$start)) {
            $notify[] = ['error','Invalid date format'];
            return redirect()->route('admin.deposit.list')->withNotify($notify);
        }
        if ($end && !preg_match($pattern,$end)) {
            $notify[] = ['error','Invalid date format'];
            return redirect()->route('admin.deposit.list')->withNotify($notify);
        }


        if ($start) {
            $deposits = Deposit::where('status','!=',0)->whereDate('created_at',Carbon::parse($start));
        }
        if($end){
            $deposits = Deposit::where('status','!=',0)->whereDate('created_at','>=',Carbon::parse($start))->whereDate('created_at','<=',Carbon::parse($end));
        }
        if ($request->method) {
            $method = Gateway::where('alias',$request->method)->firstOrFail();
            $deposits = $deposits->where('method_code',$method->code);
        }
        if ($scope == 'pending') {
            $deposits = $deposits->where('method_code', '>=', 1000)->where('status', 2);
        }elseif($scope == 'approved'){
            $deposits = $deposits->where('method_code', '>=', 1000)->where('status', 1);
        }elseif($scope == 'rejected'){
            $deposits = $deposits->where('method_code', '>=', 1000)->where('status', 3);
        }
        $deposits = $deposits->with(['user', 'gateway'])->orderBy('id','desc')->paginate(getPaginate());
        $pageTitle = ' Payments Log';
        $emptyMessage = 'No Payment Found';
        $dateSearch = $search;
        return view('admin.deposit.log', compact('pageTitle', 'emptyMessage', 'deposits','dateSearch','scope'));
    }

    public function details($id)
    {
        //dd('dddd');
        $general = GeneralSetting::first();
        $deposit = Deposit::where('id', $id)->with(['user', 'gateway'])->firstOrFail();
        $pageTitle = $deposit->user->username.' requested ' . showAmount($deposit->amount) . ' '.$general->cur_text;
        $details = ($deposit->detail != null) ? json_encode($deposit->detail) : null;
        return view('admin.deposit.detail', compact('pageTitle', 'deposit','details'));
    }


    public function approve(Request $request)
    {

//dd('print');
        $request->validate(['id' => 'required|integer']);
        $deposit = Deposit::where('id',$request->id)->where('status',2)->firstOrFail();
        $deposit->status = 1;
        $deposit->save();

        $user = User::find($deposit->user_id);

        //update status
        if ($deposit->rent_id){
            $rent_log = RentLog::findOrFail($deposit->rent_id);
            $rent_log->status = 1;
            $rent_log->trx = $deposit->trx;
            $rent_log->save();
        } else {
            $plan_log = PlanLog::findOrFail($deposit->plan_id);
            $plan_log->status = 1;
            $plan_log->trx = $deposit->trx;
            $plan_log->save();
        }


        $general = GeneralSetting::first();
     //dd($general);
        // Email lodge
        notify($user, 'PAYMENT_APPROVE', [
            'method_name' => $deposit->gatewayCurrency()->name,
            'method_currency' => $deposit->method_currency,
            'method_amount' => showAmount($deposit->final_amo),
            'amount' => showAmount($deposit->amount),
            'charge' => showAmount($deposit->charge),
            'currency' => $general->cur_text,
            'rate' => showAmount($deposit->rate),
            'trx' => $deposit->trx
        ]);

        // dd('print3');

        $notify[] = ['success', 'Payment request has been approved.'];

        return redirect()->route('admin.deposit.pending')->withNotify($notify);
    }

    public function reject(Request $request)
    {

        $request->validate([
            'id' => 'required|integer',
            'message' => 'required|max:250'
        ]);
        $deposit = Deposit::where('id',$request->id)->where('status',2)->firstOrFail();

        $deposit->admin_feedback = $request->message;
        $deposit->status = 3;
        $deposit->save();

        $general = GeneralSetting::first();
        notify($deposit->user, 'PAYMENT_REJECT', [
            'method_name' => $deposit->gatewayCurrency()->name,
            'method_currency' => $deposit->method_currency,
            'method_amount' => showAmount($deposit->final_amo),
            'amount' => showAmount($deposit->amount),
            'charge' => showAmount($deposit->charge),
            'currency' => $general->cur_text,
            'rate' => showAmount($deposit->rate),
            'trx' => $deposit->trx,
            'rejection_message' => $request->message
        ]);

        $notify[] = ['success', 'Payment request has been rejected.'];
        return  redirect()->route('admin.deposit.pending')->withNotify($notify);

    }
}
