<?php

namespace App\Http\Controllers\Backend;
use Illuminate\Routing\Controller;

class YonetimController extends Controller
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


}
