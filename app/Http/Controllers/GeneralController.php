<?php

namespace App\Http\Controllers;

use App\Models\SiteData;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class GeneralController extends Controller
{

    public function maintenance(){
        return view('errors.maintenance');
    }

    protected function updateEnvFile($key, $value)
    {
        return redirect()->back();
    }

    public function siteStatus(){
        $data = SiteData::find(1);
        $data->status = $data->status == 1 ? 0 : 1;
        $data->save();

        if ($data->status == 1){
            return redirect()->back()->with("success", "Your Site Is On Air");
        }else{
            return redirect()->back()->with("info", "Your Site Is On Maintenance Mood");
        }
    }

    public function siteDataSubmit(Request $request){
        $data = SiteData::find(1);
        if (!$data){
            $request->validate([
                'logo'             => ['required'],
                'favicon'          => ['required'],
                'footer_copyright' => ['required', 'max:255']
            ]);
        }else{
            $request->validate(['footer_copyright' => ['required', 'max:255']]);
        }
        SiteData::saveSiteData($request);
        return redirect()->back()->with('success', 'Site Data Changed Successfully');
    }

    public function siteData(){
        return view('site.data', [
            'siteData' => SiteData::find(1)
        ]);
    }

    public function login(){
        return view('auth.login');
    }

    public function userLogin(Request $request){
        $request->validate([
            'email'    => ['required', 'email', 'exists:users,email'],
            'password' => ['required', 'min:8'],
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Welcome To Dashboard');
        }
        return redirect()->back()->with('error', 'Wrong Password');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function userRegister(Request $request)
    {
        $request->validate([
            'name'             => ['required'],
            'email'            => ['required', 'email', 'unique:users'],
            'password'         => ['required', 'min:8'],
            'confirm_password' => ['same:password'],
        ]);
        if (User::count() > 0){
            $request->validate(['account_type' => ['required']]);
        }
        User::saveUser($request);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect('/dashboard')->with('success', 'Welcome To Dashboard');
        }
        return redirect()->back()->with('error', 'Not Registered');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with('info', 'Logout Successfully');
    }

    public function clear()
    {
        Artisan::call('optimize:clear');
        return redirect()->back()->with('success', 'Catch Cleared Successfully');
    }

    public function migrate()
    {
        Artisan::call('migrate');
        return redirect()->back()->with('success', 'Migration Done');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
