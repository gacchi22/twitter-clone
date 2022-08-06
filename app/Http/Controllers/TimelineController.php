<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\TimelineRequest;

class TimelineController extends Controller
{
    public function showTimelinePage(Request $request, Response $response)
    {
        // $html = '';
        //  $html = <<<EOF
            // <html lang="ja">
                // <head>
                // <meta charset="utf-8">
                // <title>タイトル</title>
                // </head>
                // <body>
                    // <form method="POST" action="" accept-charset="UTF-8" enctype="multipart/form-data"> <input name="_token" type="hidden" value="fd7woLGuMo6iV9CAzwDmIMk6ii3pmhS8aLjGCQSi"> <input type="hidden" name="_token" value="fd7woLGuMo6iV9CAzwDmIMk6ii3pmhS8aLjGCQSi">
                        // <div class="row mb-4">
                            // <div class="col-sm-4">
                                // <strong>名前</strong> <br><br> 
                                // <input class="form-control mr-auto" name="tweet" type="text">
                                // <input id="image_url" class="form-control mr-auto" name="image_url" type="file">
                                // <input class="btn btn-primary" type="submit" value="ツイート">
                            // </div>
                        // </div>
                    // </form>
                // </body>
            // </html>
// EOF;
        // $response->setContent($html);
        // return $response;
        
        return view('timeline', [
            'image_url' => 'https://thumb.ac-illust.com/77/77d8905d1a9192f70ecacde86aae5de6_t.jpeg',
            'name' => '田中太郎',
        ]);
        
        // return view('edit',[
            // 'image_url' => 'https://thumb.ac-illust.com/77/77d8905d1a9192f70ecacde86aae5de6_t.jpeg',
        // ]);
    }
    
    public function postTweet(TimelineRequest $request)
    {
        return view('timeline');
    }
}
