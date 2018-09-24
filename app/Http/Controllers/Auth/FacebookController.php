<?php


namespace App\Http\Controllers\Auth;


use App\User;
use App\Http\Controllers\Controller;
use Socialite;
use Exception;
use Auth;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\FirePHPHandler;

class FacebookController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function handleFacebookCallback()
    {
        $logger = new Logger('facebook');
        // Now add some handlers
        $logger->pushHandler(new StreamHandler(__DIR__.'/my_app_facebook.log', Logger::DEBUG));
        $logger->pushHandler(new FirePHPHandler());
        $sFunc="[".__FILE__."::".__FUNCTION__."] ";
        try {
            $user = Socialite::driver('facebook')->user();
            $create['name'] = $user->getName();
            $create['email'] = $user->getEmail();
            $create['provider_id'] = $user->getId();
            $create['provider'] = "facebook";
            $create['password'] = bcrypt($user->getId());
            $create['provider_photo'] = $user->getAvatar();


            $userModel = new User;
            $logger->info($sFunc.'phase 1',$create);
            $createdUser = $userModel->addNew($create);
            $logger->info('phase 2');
            Auth::loginUsingId($createdUser->id);

            return redirect()->route('home');


        } catch (Exception $e) {
            $logger->info($sFunc."catch ".$e->getMessage());
            return redirect('facebook/redirect');


        }
    }
}
