<?php

namespace App\Http\Controllers\Backend;

use Auth;
use DataTables;
use Redirect,Response;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Setting;
use App\Models\Backend\System\Message;

class DashboardController extends Controller {

  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    return view('pages.backend.dashboard');
  }

  public function documentation() {
    return view('pages.backend.system.documentation');
  }

  public function file_manager() {
    return view('pages.backend.system.file-manager');
  }

  public function setting() {
    $data = Setting::first();
    return view('pages.backend.system.setting', compact('data'));
  }

  public function setting_update(Request $request, $id) {
    $data = Setting::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect('/dashboard/settings')->with('success', trans('default.notification.success.setting-updated'));
  }

  public function message() {
      if(request()->ajax()) {
        return DataTables::of(Message::where('id_receiver', Auth::User()->id)->get())
        ->editColumn('date_start', function($order) { return \Carbon\Carbon::parse($order->date_start)->format('d F Y, H:i'); })
        ->editColumn('date_end', function($order) { return \Carbon\Carbon::parse($order->date_end)->format('d F Y, H:i'); })
        ->editColumn('id_senders', function($order) { return \DB::table('users')->where('id', 2)->first()->name; })
        ->editColumn('photo', function($order) { return
          '<div class="symbol symbol-circle symbol-25">
            <img alt="Pic" src="/assets/backend/media/users/blank.png" title="' . \DB::table('users')->where('id', 2)->first()->name . '">
          </div>';
        })
        ->editColumn('test', function($order) { return
          \DB::table('users')->where('id', 2)->first()->name . '<br>' .
          '<small>'. $order->content . '</small>';
        })
        ->rawColumns(['description', 'action', 'test', 'photo'])
        ->addIndexColumn()
        ->make(true);
      }
      return view('pages.backend.system.message');
  }

  public function profile_overview(Request $request) {
    $data = User::where('username', Auth::User()->username)->first();
    return view('pages.backend.system.profile.overview', compact('data'));
  }

  public function profile_update_overview(Request $request, $id) {
    if ($request->file('profile_avatar')) {
      $photo = time().'_'. $request->file('profile_avatar')->getClientOriginalName();
      $destination = base_path() . '/public/profile_avatar/user/' . $id;
      $request->file('profile_avatar')->move($destination, $photo);
      User::where('id', $id)->update([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'profile_avatar' => $photo,
      ]);
    }
    else if ($request->get('profile_avatar')) {
      User::where('id', $id)->update([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'profile_avatar' => $request->get('profile_avatar'),
      ]);
    }
    else {
      User::where('id', $id)->update([
        'name' => $request->get('name'),
        'email' => $request->get('email'),
        'phone' => $request->get('phone'),
        'profile_avatar' => NULL,
      ]);
    }
    return redirect('/dashboard/profile/overview')->with('success', trans('default.notification.success.profile-updated'));
  }

  public function profile_security() {
    return view('pages.backend.system.profile.security');
  }

  public function profile_timeline() {
    return view('pages.backend.system.profile.timeline');
  }

  public function profile_update_password(Request $request) {
    if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {
      return redirect()->back()->with('error', trans('default.notification.error.password-current'));
    }

    if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){
      return redirect()->back()->with('error', trans('default.notification.error.password-new'));
    }

    if(!(strcmp($request->get('new-password'), $request->get('confirm-password'))) == 0){
      return redirect()->back()->with('error', trans('default.notification.error.password-confirm'));
    }

    $user = Auth::user();
    $user->password = bcrypt($request->get('new-password'));
    $user->save();

    return redirect()->back()->with('success', trans('default.notification.success.password-changed'));
  }

  /**
  **************************************************
  * @return Logout
  **************************************************
  **/

  public function logout() {
    Auth::logout();
    return redirect('login');
  }

  /**
  **************************************************
  * @return Language-Switcher
  **************************************************
  **/

  public function language($language = '') {
    request()->session()->put('locale', $language);
    return redirect()->back();
  }

  public function template() {
    return view('layouts.default');
  }

}
