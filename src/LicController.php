<?php

namespace WebZow;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class LicController extends Controller {
    
    public function licenseCheck() {
        return "Hehehe! I'm here! :D";
        //return view('webzow::action1');
    }
}
