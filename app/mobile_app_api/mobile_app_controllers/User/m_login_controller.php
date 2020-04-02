<?php
namespace app\mobile_app_api\mobile_app_controllers\User;
use Illuminate\Http\Request;
use app\mobile_app_api\mobile_app_controllers\Controller;
use app\mobile_app_api\mobile_app_models\User;
class m_login_controller extends Controller{
public function auth(){
return response()->json(User::get(),200);
}
}


