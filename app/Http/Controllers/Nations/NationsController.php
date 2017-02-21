<?php

namespace App\Http\Controllers\Nations;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Nations\Nations;
use Redirect;
use Request;
use Session;
use Auth;
use View;


/**
 * Class NationsController
 * @package App\Http\Controllers\Auth
 */
class NationsController extends BaseController
{
   
    /**
     * NationsController constructor.
     */
    public function __construct()
    {

    }

    /**
     *
     * @author Michel Everts <sitethief@gmail.com>
     *
     * @return View
     */
    public function index()
    {
        $nations = Nations::all()->sortBy("name");
//        $nations = Nations::all()->sortBy("name");
//        $nations = [];
        
        return View::make('nations')->withNations($nations);
    }

}