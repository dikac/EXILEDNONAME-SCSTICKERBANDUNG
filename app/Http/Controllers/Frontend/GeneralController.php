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

use App\Models\Backend\Main\Product;

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
    $product = Product::get();
    return view($this->path . 'index', compact('product'));
  }

}
