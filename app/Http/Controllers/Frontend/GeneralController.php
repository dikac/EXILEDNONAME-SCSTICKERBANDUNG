<?php

namespace App\Http\Controllers\Frontend;

use Auth;
use DataTables;
use Redirect,Response;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;

use App\Http\Requests\Backend\Main\Section1\StoreRequest;
use App\Http\Requests\Backend\Main\Section1\UpdateRequest;

use App\Setting;
use App\Models\Backend\Main\Banner;
use App\Models\Backend\Main\Product;
use App\Models\Backend\Main\Slider;

class GeneralController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {
    $this->path = 'pages.frontend.';
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $setting = Setting::first();
    $banner = Banner::where('active', 1)->get();
    $product = Product::where('active', 1)->get();
    $slider = Slider::where('active', 1)->get();
    return view($this->path . 'index', compact('setting', 'banner', 'product', 'slider'));
  }

}
