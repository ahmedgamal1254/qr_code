<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth')
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function save_qr(Request $request){
        $validate=Validator::make($request->all(),[
            'name' => 'required',
            'body' => 'required'
        ]);

        if($validate->fails()){
            return back()->withErrors($validate)->withInput();
        }

        $qr=QrCode::format('svg')->merge('https://w3adda.com/wp-content/uploads/2019/07/laravel.png', 0.3, true)
            ->size(200)->errorCorrection('H')
            ->generate(Request('body'));
        return back()->with([
            'stutus' => 'Qr Code is Successfully',
            'code' => $qr
        ]);
    }
}
