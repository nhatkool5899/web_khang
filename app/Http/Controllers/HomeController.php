<?php

namespace App\Http\Controllers;

use App\Models\Collected;
use App\Models\PhotoLayout;
use App\Models\Sanpham;
use App\Models\Tulieu;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function loader_more(Request $request)
    {
        $data = $request->all();

        if($request->id > 0){
            $result = PhotoLayout::where('name', 'whats-new')->where('status', 1)->where('id','>',$request->id)->paginate(4);
        }else{
            $result = PhotoLayout::where('name', 'whats-new')->where('status', 1)->paginate(4);
        }

        $output = '';
        if(!$result->isEmpty()){
            $output .= '';

            foreach ($result as $key => $value) {
                $last_id = $value->id;
                if($value->type == 3){
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('whats-new/'.$value->id).'">
                            <div class="grid-wrapper grid-wrapper-1">
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_1).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_2).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_3).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_4).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->title.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->content.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('whats-new/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>
                    <div class="line-2 style-line"></div>
                    ';
                }else{
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('whats-new/'.$value->id).'">
                            <div class="grid-wrapper grid-wrapper-2">
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_1).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_2).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_3).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/whats-new/'.$value->img_4).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->title.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->content.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('whats-new/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>

                    <div class="line-2 style-line"></div>
                    ';
                }
            }

            $output .= '
                        <div class="box-view-more">
                            <span class="btn-view-more" data-id="'.$last_id.'">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }else{
            $output .= '
                        <div class="box-view-more">
                            <span class="btn-view-default">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }

        echo $output;
    }


    public function loader_more_2(Request $request)
    {
        $data = $request->all();

        if($request->id > 0){
            $result = Collected::with('layout')->where('status', 1)->where('id','>',$request->id)->paginate(4);
        }else{
            $result = Collected::with('layout')->where('status', 1)->paginate(4);
        }

        $output = '';
        if(!$result->isEmpty()){
            $output .= '';

            foreach ($result as $key => $value) {
                $last_id = $value->id;
                if($value->layout->type == 3){
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('khach-hang/'.$value->id).'">
                            <div class="grid-wrapper grid-wrapper-1">
                                <div class="img" style="max-height:700px"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_1).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_2).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_3).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_4).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->name.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->description.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('khach-hang/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>
                    <div class="line-2 style-line"></div>
                    ';
                }elseif($value->layout->type == 5){
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('khach-hang/'.$value->id).'">
                            <div class="grid-wrapper grid-wrapper-2">
                                <div class="img resize-img-1"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_1).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_2).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_3).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->name.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->description.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('khach-hang/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>

                    <div class="line-2 style-line"></div>
                    ';
                }else{
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('khach-hang/'.$value->id).'">
                            <div class="grid-wrapper grid-wrapper-3">
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_1).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_2).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_3).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/bo-suu-tap/'.$value->layout->img_4).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->name.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->description.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('khach-hang/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>
                    <div class="line-2 style-line"></div>
                    ';
                }
            }

            $output .= '
                        <div class="box-view-more">
                            <span class="btn-view-more" data-id="'.$last_id.'">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }else{
            $output .= '
                        <div class="box-view-more">
                            <span class="btn-view-default">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }

        echo $output;
    }

    public function loader_more_3(Request $request)
    {
        $data = $request->all();

        if($request->id > 0){
            $result = Tulieu::with('layout')->where('status', 1)->where('id','>',$request->id)->paginate(4);
        }else{
            $result = Tulieu::with('layout')->where('status', 1)->paginate(4);
        }

        $output = '';
        if(!$result->isEmpty()){
            $output .= '';

            foreach ($result as $key => $value) {
                $last_id = $value->id;
                if($value->layout->type == 4){
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('tu-lieu/'.$value->id).'">
                            <div class="grid-wrapper grid-wrapper-2">
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_1).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_2).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_3).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_4).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->name.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->description.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('tu-lieu/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>
                    <div class="line-2 style-line"></div>
                    ';
                }elseif($value->layout->type == 7){
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('tu-lieu/'.$value->id).'">
                            <div class="grid-wrapper">
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_1).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->name.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->description.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('tu-lieu/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>

                    <div class="line-2 style-line"></div>
                    ';
                }else{
                    $output .= '
                    <div class="line-2 style-line"></div>
                    <div class="container hide-padding">
                        <a href="'.url('tu-lieu/'.$value->id).'">
                            <div class="grid-wrapper grid-wrapper-1">
                                <div class="img" style="max-height:700px"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_1).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_2).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_3).'" alt=""></div>
                                <div class="img"><img src="'.url('uploads/tu-lieu/'.$value->layout->img_4).'" alt=""></div>
                            </div>
                        </a>
        
                        <div class="introduce_body whatsnew-body">
                            <div class="introduce_title padding-title">
                                <h4 class="whatnew-title">'.$value->name.'</h4>
                            </div>
                            <div class="introduce_content">
                                <div class="whatsnew-desc">
                                    '.$value->description.'
                                </div>
                            </div>
                            <div class="btn-whatsnew"><a href="'.url('tu-lieu/'.$value->id).'">(xem thêm)</a></div>
                        </div>
                    </div>
                    <div class="line-2 style-line"></div>
                    ';
                }
            }

            $output .= '
                        <div class="box-view-more">
                            <span class="btn-view-more" data-id="'.$last_id.'">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }else{
            $output .= '
                        <div class="box-view-more">
                            <span class="btn-view-default">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }

        echo $output;
    }

    public function loader_collected(Request $request)
    {
        $data = $request->all();


        if($request->id > 0){
            $result = Sanpham::where('danhmuc_id', 1)->where('id','<',$request->id)->orderBy('id','desc')->paginate(10);
        }else{
            $result = Sanpham::where('danhmuc_id', 1)->orderBy('id','desc')->paginate(10);
        }

        $output = '';
        if(!$result->isEmpty()){

            foreach ($result as $key => $item) {
                $last_id = $item->id;

                $output .= '
                <div class="col-6 filter-item gender_'.$item->gender.'">
                    <div class="collection_item">
                        <a href="'.url('bo-suu-tap/'.$item->slug).'">
                            <div class="collection_item-img">
                                <img src="'.url('uploads/sanpham/'.$item->danhmuc_id.'/'.$item->img).'" alt="'.$item->img.'">
                            </div>
                            <div class="collection_item-body">
                                <div class="title">'.$item->name.'</div>
                                <div class="desc">'.$item->description.'</div>
                                <div class="price">'.number_format($item->price,0,',','.').' Vnd</div>
                            </div>
                        </a>
                    </div>
                </div>
                ';
                }

            $output .= '
                        <div class="box-collection-btn">
                            <span class="collection_view-more" data-id="'.$last_id.'">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }else{

            $output .= '
                        <div class="box-collection-btn">
                            <span class="collection_view-default">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }

        echo $output;
    }

    public function loader_phukien(Request $request)
    {
        $data = $request->all();


        if($request->id > 0){
            $result = Sanpham::where('danhmuc_id', 2)->where('id','<',$request->id)->orderBy('id','desc')->paginate(10);
        }else{
            $result = Sanpham::where('danhmuc_id', 2)->orderBy('id','desc')->paginate(10);
        }

        $output = '';
        if(!$result->isEmpty()){

            foreach ($result as $key => $item) {
                $last_id = $item->id;

                $output .= '
                <div class="col-6 filter-item gender_'.$item->gender.'">
                    <div class="collection_item">
                        <a href="'.url('phu-kien/'.$item->slug).'">
                            <div class="collection_item-img">
                                <img src="'.url('uploads/sanpham/'.$item->danhmuc_id.'/'.$item->img).'" alt="'.$item->img.'">
                            </div>
                            <div class="collection_item-body">
                                <div class="title">'.$item->name.'</div>
                                <div class="desc">'.$item->description.'</div>
                                <div class="price">'.number_format($item->price,0,',','.').' Vnd</div>
                            </div>
                        </a>
                    </div>
                </div>
                ';
                }

            $output .= '
                    <div class="box-collection-btn">
                        <span class="collection_view-more" data-id="'.$last_id.'">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                    </div>';
        }else{

            $output .= '
                        <div class="box-collection-btn">
                            <span class="collection_view-default">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }

        echo $output;
    }

    public function loader_chatlieu(Request $request)
    {
        $data = $request->all();


        if($request->id > 0){
            $result = Sanpham::where('danhmuc_id', 3)->where('id','<',$request->id)->orderBy('id','desc')->paginate(10);
        }else{
            $result = Sanpham::where('danhmuc_id', 3)->orderBy('id','desc')->paginate(10);
        }

        $output = '';
        if(!$result->isEmpty()){

            foreach ($result as $key => $item) {
                $last_id = $item->id;

                $output .= '
                <div class="col-6 filter-item gender_'.$item->gender.'">
                    <div class="collection_item">
                        <a href="'.url('chat-lieu/'.$item->slug).'">
                            <div class="collection_item-img">
                                <img src="'.url('uploads/sanpham/'.$item->danhmuc_id.'/'.$item->img).'" alt="'.$item->img.'">
                            </div>
                            <div class="collection_item-body">
                                <div class="title">'.$item->name.'</div>
                                <div class="desc">'.$item->description.'</div>
                            </div>
                        </a>
                    </div>
                </div>
                ';
                }

            $output .= '
                        <div class="box-collection-btn">
                            <span class="collection_view-more" data-id="'.$last_id.'">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }else{

            $output .= '
                        <div class="box-collection-btn">
                            <span class="collection_view-default">Hiển thị thêm <i style="font-size: 12px" class="fa-solid fa-chevron-down"></i></span>
                        </div>';
        }

        echo $output;
    }

}
