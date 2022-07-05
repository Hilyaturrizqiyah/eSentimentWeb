<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use DB;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
		
		$admin = Admin::All();
		$pw = "False";
		foreach ($admin as $p) {
			$decrypted = Crypt::decryptString($p->password);
			if($decrypted == $request->password)
			{
				$pw = $p->password;
			}		
		}

        $data = Admin::where('email',$request->email)->where('password',$pw)->get();
        
        if (count($data)>0) {
    		Auth::guard('admin')->LoginUsingId($data[0]['email']);
    		return redirect('/admin/dashboard');
    	}
    	else{
    		return redirect('/admin/login')->with('Login Gagal');
    	}
    }

    public function logout()
    {
        if (Auth::guard('admin')->check()) {
    		Auth::guard('admin')->logout();
    	}
		return redirect('/admin/login');
    }

	public function dashboard()
	{
		$profil = DB::table('admins')->get();
        // $jmlh_kelompok = DB::table('tb_kelompok')->where('desa', '>', 0)->count();
        // $jmlh_individu = DB::table('tb_anggota_individu')->where('desa', '>', 0)->count();
        return view('admin.dashboardAdmin', [
            'profil' => $profil,
			'admin' => \Auth::user()
            // 'jmlh_kelompok' => $jmlh_kelompok,
            // 'jmlh_individu' => $jmlh_individu
        ]);
	}
}
