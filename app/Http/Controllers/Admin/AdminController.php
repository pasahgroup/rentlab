<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdminNotification;
use App\Models\Deposit;
use App\Models\PlanLog;
use App\Models\RentLog;
use App\Models\User;
use App\Models\UserLogin;
use App\Models\Withdrawal;
use App\Rules\FileTypeValidate;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
//use Carbon\Carbon;

class AdminController extends Controller
{

    public function dashboard()
    {

        $pageTitle = 'Dashboard';

        // User Info
        $widget['total_users'] = User::count();
        $widget['verified_users'] = User::where('status', 1)->count();
        $widget['email_unverified_users'] = User::where('ev', 0)->count();
        $widget['sms_unverified_users'] = User::where('sv', 0)->count();

        // Monthly Deposit & Withdraw Report Graph
        $report['months'] = collect([]);
        $report['deposit_month_amount'] = collect([]);

        //Vehicle booking
        $data['total_vehicle_booking'] = RentLog::active()->count();
        $data['upcoming_vehicle_booking'] = RentLog::active()->upcoming()->count();
        $data['running_vehicle_booking'] = RentLog::active()->running()->count();
        $data['completed_vehicle_booking'] = RentLog::active()->completed()->count();

        //Plan booking
        $data['total_plan_booking'] = PlanLog::active()->count();
        $data['upcoming_plan_booking'] = PlanLog::active()->upcoming()->count();
        $data['running_plan_booking'] = PlanLog::active()->running()->count();
        $data['completed_plan_booking'] = PlanLog::active()->completed()->count();

        $depositsMonth = Deposit::where('created_at', '>=', Carbon::now()->subYear())
            ->where('status', 1)
            ->selectRaw("SUM( CASE WHEN status = 1 THEN amount END) as depositAmount")
            ->selectRaw("DATE_FORMAT(created_at,'%M-%Y') as months")
            ->orderBy('created_at')
            ->groupBy('months')->get();

        $depositsMonth->map(function ($depositData) use ($report) {
            $report['months']->push($depositData->months);
            $report['deposit_month_amount']->push(showAmount($depositData->depositAmount));
        });

        $months = $report['months'];

        for($i = 0; $i < $months->count(); ++$i) {
            $monthVal      = Carbon::parse($months[$i]);
            if(isset($months[$i+1])){
                $monthValNext = Carbon::parse($months[$i+1]);
                if($monthValNext < $monthVal){
                    $temp = $months[$i];
                    $months[$i]   = Carbon::parse($months[$i+1])->format('F-Y');
                    $months[$i+1] = Carbon::parse($temp)->format('F-Y');
                }else{
                    $months[$i]   = Carbon::parse($months[$i])->format('F-Y');
                }
            }
        }


        // Deposit Graph
        $deposit = Deposit::where('created_at', '>=', \Carbon\Carbon::now()->subDays(30))->where('status', 1)
            ->selectRaw('sum(amount) as totalAmount')
            ->selectRaw('DATE(created_at) day')
            ->groupBy('day')->get();
        $deposits['per_day'] = collect([]);
        $deposits['per_day_amount'] = collect([]);
        $deposit->map(function ($depositItem) use ($deposits) {
            $deposits['per_day']->push(date('d M', strtotime($depositItem->day)));
            $deposits['per_day_amount']->push($depositItem->totalAmount + 0);
        });


        // user Browsing, Country, Operating Log
        $userLoginData = UserLogin::where('created_at', '>=', \Carbon\Carbon::now()->subDay(30))->get(['browser', 'os', 'country']);

        $chart['user_browser_counter'] = $userLoginData->groupBy('browser')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_os_counter'] = $userLoginData->groupBy('os')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_country_counter'] = $userLoginData->groupBy('country')->map(function ($item, $key) {
            return collect($item)->count();
        })->sort()->reverse()->take(5);


        $payment['total_deposit_amount_count'] = Deposit::where('status',1)->count();
        $payment['total_deposit_amount'] = Deposit::where('status',1)->sum('amount');
        $payment['total_deposit_charge'] = Deposit::where('status',1)->sum('charge');
        $payment['total_deposit_pending'] = Deposit::where('status',2)->count();

        return view('admin.dashboard', compact('pageTitle', 'widget', 'report', 'chart','payment','depositsMonth','months','deposits','data'));
    }




   public function pendingCustomer()
    {
        $pageTitle = 'Pending cash customer dashboard';
        // User Info
        $widget['total_users'] = User::count();
        $widget['verified_users'] = User::where('status', 1)->count();
        $widget['email_unverified_users'] = User::where('ev', 0)->count();
        $widget['sms_unverified_users'] = User::where('sv', 0)->count();

        // Monthly Deposit & Withdraw Report Graph
        $report['months'] = collect([]);
        $report['deposit_month_amount'] = collect([]);

        //Vehicle booking
        $data['total_vehicle_booking'] = RentLog::active()->count();
        $data['upcoming_vehicle_booking'] = RentLog::active()->upcoming()->count();
        $data['running_vehicle_booking'] = RentLog::active()->running()->count();
        $data['completed_vehicle_booking'] = RentLog::active()->completed()->count();

        //Plan booking
        $data['total_plan_booking'] = PlanLog::active()->count();
        $data['upcoming_plan_booking'] = PlanLog::active()->upcoming()->count();
        $data['running_plan_booking'] = PlanLog::active()->running()->count();
        $data['completed_plan_booking'] = PlanLog::active()->completed()->count();

        $depositsMonth = Deposit::where('created_at', '>=', Carbon::now()->subYear())
            ->where('status', 1)
            ->selectRaw("SUM( CASE WHEN status = 1 THEN amount END) as depositAmount")
            ->selectRaw("DATE_FORMAT(created_at,'%M-%Y') as months")
            ->orderBy('created_at')
            ->groupBy('months')->get();

        $depositsMonth->map(function ($depositData) use ($report) {
            $report['months']->push($depositData->months);
            $report['deposit_month_amount']->push(showAmount($depositData->depositAmount));
        });

        $months = $report['months'];

        for($i = 0; $i < $months->count(); ++$i) {
            $monthVal      = Carbon::parse($months[$i]);
            if(isset($months[$i+1])){
                $monthValNext = Carbon::parse($months[$i+1]);
                if($monthValNext < $monthVal){
                    $temp = $months[$i];
                    $months[$i]   = Carbon::parse($months[$i+1])->format('F-Y');
                    $months[$i+1] = Carbon::parse($temp)->format('F-Y');
                }else{
                    $months[$i]   = Carbon::parse($months[$i])->format('F-Y');
                }
            }
        }


        // Deposit Graph
        $deposit = Deposit::where('created_at', '>=', \Carbon\Carbon::now()->subDays(30))->where('status', 1)
            ->selectRaw('sum(amount) as totalAmount')
            ->selectRaw('DATE(created_at) day')
            ->groupBy('day')->get();
        $deposits['per_day'] = collect([]);
        $deposits['per_day_amount'] = collect([]);
        $deposit->map(function ($depositItem) use ($deposits) {
            $deposits['per_day']->push(date('d M', strtotime($depositItem->day)));
            $deposits['per_day_amount']->push($depositItem->totalAmount + 0);
        });


        // user Browsing, Country, Operating Log
        $userLoginData = UserLogin::where('created_at', '>=', \Carbon\Carbon::now()->subDay(30))->get(['browser', 'os', 'country']);

        $chart['user_browser_counter'] = $userLoginData->groupBy('browser')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_os_counter'] = $userLoginData->groupBy('os')->map(function ($item, $key) {
            return collect($item)->count();
        });
        $chart['user_country_counter'] = $userLoginData->groupBy('country')->map(function ($item, $key) {
            return collect($item)->count();
        })->sort()->reverse()->take(5);


        $payment['total_deposit_amount_count'] = Deposit::where('status',1)->count();
        $payment['total_deposit_amount'] = Deposit::where('status',1)->sum('amount');
        $payment['total_deposit_charge'] = Deposit::where('status',1)->sum('charge');
       
        $payment['total_deposit_pending'] = Deposit::where('status',2)->count();
        $payment['total_deposit_pending_sum'] = Deposit::where('status',2)->sum('amount');
       

//        $cancelledInvoicesData=DB::select('select a.property_id,a.metaname_id,m.metaname_name,a.indicator_id,a.asset_id, a.opt_answer_id,a.answer,o.answer_classification from answers a,optional_answers o,metanames m where a.indicator_id=o.indicator_id and a.metaname_id=m.id and a.opt_answer_id=o.id and month(a.datex)=month(NOW())');
// $date = new Carbon\Carbon;
  

$todayPendingInvoices=DB::select('select * from deposits where status=2 and date_format(date(created_at),"%Y-%m-%d")=CURDATE()');
$todayPendingInvoices=collect($todayPendingInvoices);

//dd($todayPendingInvoices);

$tomorrowPendingInvoices=DB::select('select * from deposits where status=2 and date_format(date(created_at),"%Y-%m-%d")=date_add(CURDATE(),interval 1 day)');
$tomorrowPendingInvoices=collect($tomorrowPendingInvoices);

$weekPendingInvoices = Deposit::wherebetween('created_at',[Carbon::now()->startOfWeek()->toDateString(),Carbon::now()->endOfWeek()->toDateString()])
        ->where('status', 2)
    ->get();
// $weekPendingInvoices=DB::select('select * from deposits where status=2 and month(created_at)=month(NOW())');
$weekPendingInvoices=collect($weekPendingInvoices);

$monthPendingInvoices=DB::select('select * from deposits where status=2 and month(created_at)=month(NOW())');
$monthPendingInvoices=collect($monthPendingInvoices);



//dd($todayPendingInvoices->sum('amount'));
//$payment['cancelledInvoicesDataxx']=$gg;
//dd($payment['cancelledInvoicesDataxx']);

//$weekCancelledInvoicesx=DB::select('select * from deposits where status=3 and Week(created_at)=Week(NOW())');


 $weekCancelledInvoices = Deposit::wherebetween('created_at',[Carbon::now()->startOfWeek()->toDateString(),Carbon::now()->endOfWeek()->toDateString()])
        ->where('status', 3)
    ->get();
  $weekCancelledInvoices=collect($weekCancelledInvoices);  

$monthCancelledInvoices=DB::select('select * from deposits where status=3 and Month(created_at)=Month(NOW())');
$monthCancelledInvoices=collect($monthCancelledInvoices);

         $payment['cancelledInvoicesData'] = Deposit::where('status',3)->count();
        $payment['cancelledInvoicesDataSum'] = Deposit::where('status',3)->sum('amount');

//dd($weekCancelledInvoices);
        //dd($todayPendingInvoices);
        return view('admin.customers.customer', compact('pageTitle', 'widget', 'report', 'chart','payment','depositsMonth','months','deposits','data','weekCancelledInvoices','monthCancelledInvoices','todayPendingInvoices','tomorrowPendingInvoices','weekPendingInvoices','monthPendingInvoices'));
    }

    public function profile()
    {
        $pageTitle = 'Profile';
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('pageTitle', 'admin'));
    }

    public function profileUpdate(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'image' => ['nullable','image',new FileTypeValidate(['jpg','jpeg','png'])]
        ]);
        $user = Auth::guard('admin')->user();

        if ($request->hasFile('image')) {
            try {
                $old = $user->image ?: null;
                $user->image = uploadImage($request->image, imagePath()['profile']['admin']['path'], imagePath()['profile']['admin']['size'], $old);
            } catch (\Exception $exp) {
                $notify[] = ['error', 'Image could not be uploaded.'];
                return back()->withNotify($notify);
            }
        }

        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        $notify[] = ['success', 'Your profile has been updated.'];
        return redirect()->route('admin.profile')->withNotify($notify);
    }


    public function password()
    {
        $pageTitle = 'Password Setting';
        $admin = Auth::guard('admin')->user();
        return view('admin.password', compact('pageTitle', 'admin'));
    }

    public function passwordUpdate(Request $request)
    {
        $this->validate($request, [
            'old_password' => 'required',
            'password' => 'required|min:5|confirmed',
        ]);

        $user = Auth::guard('admin')->user();
        if (!Hash::check($request->old_password, $user->password)) {
            $notify[] = ['error', 'Password do not match !!'];
            return back()->withNotify($notify);
        }
        $user->password = bcrypt($request->password);
        $user->save();
        $notify[] = ['success', 'Password changed successfully.'];
        return redirect()->route('admin.password')->withNotify($notify);
    }

    public function notifications(){
        $notifications = AdminNotification::orderBy('id','desc')->with('user')->paginate(getPaginate());
        $pageTitle = 'Notifications';
        return view('admin.notifications',compact('pageTitle','notifications'));
    }


    public function notificationRead($id){
        $notification = AdminNotification::findOrFail($id);
        $notification->read_status = 1;
        $notification->save();
        return redirect($notification->click_url);
    }

    public function requestReport()
    {
        $pageTitle = 'Your Listed Report & Request';
        $arr['app_name'] = systemDetails()['name'];
        $arr['app_url'] = env('APP_URL');
        $arr['purchase_code'] = env('PURCHASE_CODE');
        $url = "https://license.viserlab.com/issue/get?".http_build_query($arr);
        $response = json_decode(curlContent($url));
        if ($response->status == 'error') {
            return redirect()->route('admin.dashboard')->withErrors($response->message);
        }
        $reports = $response->message[0];
        return view('admin.reports',compact('reports','pageTitle'));
    }

    public function reportSubmit(Request $request)
    {
        $request->validate([
            'type'=>'required|in:bug,feature',
            'message'=>'required',
        ]);
        $url = 'https://license.viserlab.com/issue/add';

        $arr['app_name'] = systemDetails()['name'];
        $arr['app_url'] = env('APP_URL');
        $arr['purchase_code'] = env('PURCHASE_CODE');
        $arr['req_type'] = $request->type;
        $arr['message'] = $request->message;
        $response = json_decode(curlPostContent($url,$arr));
        if ($response->status == 'error') {
            return back()->withErrors($response->message);
        }
        $notify[] = ['success',$response->message];
        return back()->withNotify($notify);
    }

    public function systemInfo(){
        $laravelVersion = app()->version();
        $serverDetails = $_SERVER;
        $currentPHP = phpversion();
        $timeZone = config('app.timezone');
        $pageTitle = 'System Information';
        return view('admin.info',compact('pageTitle', 'currentPHP', 'laravelVersion', 'serverDetails','timeZone'));
    }

    public function readAll(){
        AdminNotification::where('read_status',0)->update([
            'read_status'=>1
        ]);
        $notify[] = ['success','Notifications read successfully'];
        return back()->withNotify($notify);
    }


}
