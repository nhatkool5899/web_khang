<?php

namespace App\Http\Controllers;

use App\Models\Collected;
use App\Models\PhotoLayout;
use App\Models\Tulieu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PhotoLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $photo_layout = PhotoLayout::where('name','trang-chu')->orderBy('id','desc')->get();
        return view('admin.photo_layout.index', compact('photo_layout'));
    }

    public function whatsnew()
    {
        $photo_layout = PhotoLayout::where('name','whats-new')->orderBy('id','desc')->get();
        return view('admin.whatsnew.index', compact('photo_layout'));
    }

    public function whatsnew_create()
    {
        return view('admin.whatsnew.create');
    }


    // Stories*************

    public function stories()
    {
        $stories = PhotoLayout::where('name','stories')->orderBy('id','desc')->get();
        return view('admin.stories.index', compact('stories'));
    }

    public function stories_create()
    {
        return view('admin.stories.create');
    }

    public function gallery_stories($id)
    {
        $value = PhotoLayout::find($id);
        return view('admin.stories.gallery', compact('value'));
    }

    public function add_gallery_stories(Request $request, $id)
    {
        $data = $request->all();
        $photo_layout = PhotoLayout::find($id);

        // Thêm ảnh
        $images = array();
        if($files = $request->file('add_img'))
        {
            $path = 'uploads/stories/'.$photo_layout->id.'/';
            foreach($files as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move($path, $name);  
                $images[] = $name;  
            }
        }

        $photo_layout->list_img = json_encode($data['list_img']);

        $photo_layout->save();

        return redirect('/stories/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.photo_layout.create');
    }

    public function gallery($id)
    {
        $value = PhotoLayout::find($id);
        return view('admin.whatsnew.gallery', compact('value'));
    }

    public function add_gallery(Request $request, $id)
    {
        $data = $request->all();
        $photo_layout = PhotoLayout::find($id);

        // Thêm ảnh
        $images = array();
        if($files = $request->file('add_img'))
        {
            $path = 'uploads/whats-new/'.$photo_layout->id.'/';
            foreach($files as $file)
            {
                $name = $file->getClientOriginalName();
                $file->move($path, $name);  
                $images[] = $name;  
            }
        }

        $photo_layout->list_img = json_encode($data['list_img']);

        $photo_layout->save();

        return redirect('/whatsnew/index');
    }




    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate(
            [
                'img_1' => 'required',
                'img_2' => 'required',
                'img_3' => 'required',
                'img_4' => 'required',
                'img_5' => 'required',
            ],
            [
                'img_1.required' => 'Ảnh 1 không thể trống',
                'img_2.required' => 'Ảnh 2 không thể trống',
                'img_3.required' => 'Ảnh 3 không thể trống',
                'img_4.required' => 'Ảnh 4 không thể trống',
                'img_5.required' => 'Ảnh 5 không thể trống'
            ]
        );

        $data = $request->all();
        $photo_layout = new PhotoLayout();
        $photo_layout->name = $data['name'];
        $photo_layout->type = $data['type'];
        $photo_layout->status = 1;

        $get_img_1 = $request->file('img_1');
        $get_img_2 = $request->file('img_2');
        $get_img_3 = $request->file('img_3');
        $get_img_4 = $request->file('img_4');
        $get_img_5 = $request->file('img_5');

        // Img-1
        $get_name_img_1 = $get_img_1->getClientOriginalName();
        $name_image_1 = current(explode('.', $get_name_img_1));
        $new_image_1 = $name_image_1.'-'.rand(0,99).'.'.$get_img_1->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_1->move($path, $new_image_1);
        // Img-2
        $get_name_img_2 = $get_img_2->getClientOriginalName();
        $name_image_2 = current(explode('.', $get_name_img_2));
        $new_image_2 = $name_image_2.'-'.rand(0,99).'.'.$get_img_2->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_2->move($path, $new_image_2);
        // Img-3
        $get_name_img_3 = $get_img_3->getClientOriginalName();
        $name_image_3 = current(explode('.', $get_name_img_3));
        $new_image_3 = $name_image_3.'-'.rand(0,99).'.'.$get_img_3->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_3->move($path, $new_image_3);
        // Img-4
        $get_name_img_4 = $get_img_4->getClientOriginalName();
        $name_image_4 = current(explode('.', $get_name_img_4));
        $new_image_4 = $name_image_4.'-'.rand(0,99).'.'.$get_img_4->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_4->move($path, $new_image_4);
        // Img-5
        $get_name_img_5 = $get_img_5->getClientOriginalName();
        $name_image_5 = current(explode('.', $get_name_img_5));
        $new_image_5 = $name_image_5.'-'.rand(0,99).'.'.$get_img_5->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_5->move($path, $new_image_5);


        $photo_layout->img_1 = $new_image_1;
        $photo_layout->img_2 = $new_image_2;
        $photo_layout->img_3 = $new_image_3;
        $photo_layout->img_4 = $new_image_4;
        $photo_layout->img_5 = $new_image_5;

        $photo_layout->save();

        return redirect('/photo-layout');
    }

    public function whatsnew_store(Request $request)
    {

        $data = $request->validate(
            [
                'img_1' => 'required',
                'img_2' => 'required',
                'img_3' => 'required',
                'img_4' => 'required',
                'title' => 'required',
            ],
            [
                'img_1.required' => 'Ảnh 1 không thể trống',
                'img_2.required' => 'Ảnh 2 không thể trống',
                'img_3.required' => 'Ảnh 3 không thể trống',
                'img_4.required' => 'Ảnh 4 không thể trống',
                'title.required' => 'Tiêu đề không thể trống',
            ]
        );

        $data = $request->all();
        $photo_layout = new PhotoLayout();
        $photo_layout->name = 'whats-new';
        $photo_layout->title = $data['title'];
        $photo_layout->content = $data['content'];
        $photo_layout->type = $data['type'];
        $photo_layout->status = 1;

        $get_img_1 = $request->file('img_1');
        $get_img_2 = $request->file('img_2');
        $get_img_3 = $request->file('img_3');
        $get_img_4 = $request->file('img_4');

        // Img-1
        $get_name_img_1 = $get_img_1->getClientOriginalName();
        $name_image_1 = current(explode('.', $get_name_img_1));
        $new_image_1 = $name_image_1.'-'.rand(0,99).'.'.$get_img_1->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_1->move($path, $new_image_1);
        // Img-2
        $get_name_img_2 = $get_img_2->getClientOriginalName();
        $name_image_2 = current(explode('.', $get_name_img_2));
        $new_image_2 = $name_image_2.'-'.rand(0,99).'.'.$get_img_2->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_2->move($path, $new_image_2);
        // Img-3
        $get_name_img_3 = $get_img_3->getClientOriginalName();
        $name_image_3 = current(explode('.', $get_name_img_3));
        $new_image_3 = $name_image_3.'-'.rand(0,99).'.'.$get_img_3->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_3->move($path, $new_image_3);
        // Img-4
        $get_name_img_4 = $get_img_4->getClientOriginalName();
        $name_image_4 = current(explode('.', $get_name_img_4));
        $new_image_4 = $name_image_4.'-'.rand(0,99).'.'.$get_img_4->getClientOriginalExtension();
        $path = 'uploads/'.$photo_layout->name.'/';
        $get_img_4->move($path, $new_image_4);


        $photo_layout->img_1 = $new_image_1;
        $photo_layout->img_2 = $new_image_2;
        $photo_layout->img_3 = $new_image_3;
        $photo_layout->img_4 = $new_image_4;

        $photo_layout->save();

        return redirect('/whatsnew/index');
    }

    public function stories_store(Request $request)
    {
        $data = $request->validate(
            [
                'img_1' => 'required',
                'title' => 'required',
                'content' => 'required',
            ],
            [
                'img_1.required' => 'Ảnh 1 không thể trống',
                'title.required' => 'Tiêu đề không thể trống',
                'content.required' => 'Mô tả không thể trống',
            ]
        );

        $data = $request->all();
        $photo_layout = new PhotoLayout();
        $photo_layout->name = 'stories';
        $photo_layout->title = $data['title'];
        $photo_layout->content = $data['content'];
        $photo_layout->status = 1;

        $get_img_1 = $request->file('img_1');


        // Img-1
        $get_name_img_1 = $get_img_1->getClientOriginalName();
        $name_image_1 = current(explode('.', $get_name_img_1));
        $new_image_1 = $name_image_1.'-'.rand(0,99).'.'.$get_img_1->getClientOriginalExtension();
        $path = 'uploads/stories/';
        $get_img_1->move($path, $new_image_1);


        $photo_layout->img_1 = $new_image_1;

        $photo_layout->save();

        return redirect('/stories/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $photo_layout = PhotoLayout::find($id);
        for ($i=1; $i <= 5; $i++) { 
            $img = 'img_'.$i;
            $path = 'uploads/trang-chu/'.$photo_layout->$img;
            if(file_exists($path)){
                unlink($path);
            }
        }
        PhotoLayout::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa ảnh thành công');
    }

    public function whatsnew_destroy($id)
    {
        $photo_layout = PhotoLayout::find($id);
        for ($i=1; $i <= 4; $i++) { 
            $img = 'img_'.$i;
            $path = 'uploads/whats-new/'.$photo_layout->$img;
            if(file_exists($path)){
                unlink($path);
            }
        }

        $directory = 'uploads/whats-new/'.$id;
        if($directory) File::deleteDirectory($directory);

        PhotoLayout::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa ảnh thành công');
    }

    public function stories_destroy($id)
    {
        $photo_layout = PhotoLayout::find($id);
        $path = 'uploads/stories/'.$photo_layout->img_1;
        if(file_exists($path)){
            unlink($path);
        }

        $directory = 'uploads/stories/'.$id;
        if($directory) File::deleteDirectory($directory);

        PhotoLayout::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa thành công');
    }

    public function collected_destroy($id)
    {
        $collected = Collected::where('photo_layout_id',$id)->first();
        $photo_layout = PhotoLayout::find($id);
        for ($i=1; $i <= 4; $i++) { 
            $img = 'img_'.$i;
            $path = 'uploads/bo-suu-tap/'.$photo_layout->$img;
            if(file_exists($path)){
                unlink($path);
            }
        }

        $directory = 'uploads/bo-suu-tap/'.$collected->id;
        if($directory) File::deleteDirectory($directory);

        PhotoLayout::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa ảnh thành công');
    }

    public function tulieu_destroy($id)
    {
        $tulieu = Tulieu::where('photo_layout_id',$id)->first();
        $photo_layout = PhotoLayout::find($id);
        for ($i=1; $i <= 4; $i++) { 
            $img = 'img_'.$i;
            $path = 'uploads/tu-lieu/'.$photo_layout->$img;
            if(file_exists($path)){
                unlink($path);
            }
        }

        $directory = 'uploads/tu-lieu/'.$tulieu->id;
        if($directory) File::deleteDirectory($directory);

        PhotoLayout::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa ảnh thành công');
    }

    public function active($id)
    {
        $photo_layout = PhotoLayout::find($id);
        $photo_layout->status = 1;
        $photo_layout->save();
        return redirect()->back();
    }

    public function unactive($id)
    {
        $photo_layout = PhotoLayout::find($id);
        $photo_layout->status = 0;
        $photo_layout->save();
        return redirect()->back();
    }

    public function active_stories($id)
    {
        $photo_layout = PhotoLayout::find($id);
        $photo_layout->status = 1;
        $photo_layout->save();
        return redirect()->back();
    }

    public function unactive_stories($id)
    {
        $photo_layout = PhotoLayout::find($id);
        $photo_layout->status = 0;
        $photo_layout->save();
        return redirect()->back();
    }
}
