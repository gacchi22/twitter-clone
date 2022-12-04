<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Response;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use App\Http\Requests\EditUserRequest;

use Carbon\Carbon;

class EditUserController extends Controller
{
    public function showEditUserPage()
    {
        $user = DB::table('users')->where('id',Auth::user()->id)->first();
        return view('edit',[
            // 'image_url' => 'https://thumb.ac-illust.com/77/77d8905d1a9192f70ecacde86aae5de6_t.jpeg',
            'user' => $user,
        ]);
    }
    
    public function editComplete(EditUserRequest $request, Response $response)
    {
        // ・リクエストから_tokenとimage_url以外を取得して、$paramに設定する
        // $param = $request->except('image_url', '_token');
        // ・$param（配列）を、区切り文字’</br>’で文字列へと変換する
        // $output = implode('</br>', $param);
        // ・リクエストからimage_urlを取得して$image_urlへ設定する
        // $image_url = $request->input('image_url');
        // ・次スライドに書いてる$htmlをResponseのsetContentで設定する
        // $html = '';
// $html = <<<EOF
// <html>
// <head><title>Access</title></head>
// <body>
// <h3>User</h3>
// <p>
// EOF
// .$output.
// <<<EOF
// </p>
// <img src="
// EOF
// .$image_url.
// <<<EOF
// " width="40%" height="auto">
// </body>
// </html>
// EOF;
//         $response->setContent($html);
//         // ・戻り値としてResponseを返却する
        // return $response;
        
        // $rules = [
        //     'name' => ['required','string','max:50'],
        //     'email' => ['required','string','email','max:50'],
        //     'tel_number' => ['nullable','string','regix:/^[0-9-]{10,13}$/'],
        //     'image_url' => ['nullable','string','max:50'],
        //     'profile' => ['nullable','string','max:50'],
        // ];
        // $this->validate($request, $rules);
        // return view('timeline',[
        //     'image_url' => 'https://thumb.ac-illust.com/77/77d8905d1a9192f70ecacde86aae5de6_t.jpeg',
        //     'name' => '田中太郎',
        //     'msg' => '正しい入力です'
        //     ]);
        
        $param = [
            'name' => $request['name'],
            'email' => $request['email'],
            'tel_number' => $request['tel_number'],
            'profile' => $request['profile'],
            'image_url' => $request['image_url'],
            'update_user' => $request['name'],
            'updated_at' => Carbon::now()
        ];
        
        DB::table('users')->where('id', Auth::user()->id)->update($param);
        $tweets = DB::table('tweets')->where('user_id', Auth::user()->id)->get();
        $user = DB::table('users')->where('id', Auth::user()->id)->first();
        
        return view ('edit',[
            'user' => $user,
            'tweets' => $tweets
        ]);
    }
    
    public function postTweet()
    {

    }

}