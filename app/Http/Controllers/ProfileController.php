<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
  
class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profile');
    }
    
    /**
     * Write code on Method
     *
     * 
     */
    public function update(Request $request)
    {
        $phone = $request->input('phone');
        $address = $request->input('address');

        DB::table('users')
            ->where('id', '=', Auth::user()->id)
            ->update([
                'phone' => $phone,
                'address' =>$address,
            ]);

        return redirect()->route('profile')->with('success', 'Profile berhasil diUpdate');
    }
}