<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::find(1);
        return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $data = $request->validate(
            [
                'title_1' => 'required',
                'text_1' => 'required',
                'text_2' => 'required',
                'text_3' => 'required',
                'text_4' => 'required',
                'text_5' => 'required',
            ],
            [
                'text_1.required' => 'Đoạn text 1 không thể trống',
                'text_2.required' => 'Đoạn text 2 không thể trống',
                'text_3.required' => 'Đoạn text 3 không thể trống',
                'text_4.required' => 'Đoạn text 4 không thể trống',
                'text_5.required' => 'Đoạn text 5 không thể trống',
            ]
        );

        $data = $request->all();

        $about = About::find($id);
        $about->title_1 = $data['title_1'];
        $about->text_1 = $data['text_1'];
        $about->text_2 = $data['text_2'];
        $about->text_3 = $data['text_3'];
        $about->text_4 = $data['text_4'];
        $about->text_5 = $data['text_5'];

        $get_img_1 = $request->file('img_1');
        $get_img_2 = $request->file('img_2');
        $get_img_3 = $request->file('img_3');

        if($get_img_1){
            $path_file = 'uploads/about/'.$about->img_1;
            if(file_exists($path_file)){
                unlink($path_file);
            }

            $get_name_img_1 = $get_img_1->getClientOriginalName();
            $name_image_1 = current(explode('.', $get_name_img_1));
            $new_image_1 = $name_image_1.'-'.rand(0,99).'.'.$get_img_1->getClientOriginalExtension();
            $path = 'uploads/about/';
            $get_img_1->move($path, $new_image_1);

            $about->img_1 = $new_image_1;
        }

        if($get_img_2){
            $path_file = 'uploads/about/'.$about->img_2;
            if(file_exists($path_file)){
                unlink($path_file);
            }

            $get_name_img_2 = $get_img_2->getClientOriginalName();
            $name_image_2 = current(explode('.', $get_name_img_2));
            $new_image_2 = $name_image_2.'-'.rand(0,99).'.'.$get_img_2->getClientOriginalExtension();
            $path = 'uploads/about/';
            $get_img_2->move($path, $new_image_2);

            $about->img_2 = $new_image_2;
        }

        if($get_img_3){
            $path_file = 'uploads/about/'.$about->img_3;
            if(file_exists($path_file)){
                unlink($path_file);
            }

            $get_name_img_3 = $get_img_3->getClientOriginalName();
            $name_image_3 = current(explode('.', $get_name_img_3));
            $new_image_3 = $name_image_3.'-'.rand(0,99).'.'.$get_img_3->getClientOriginalExtension();
            $path = 'uploads/about/';
            $get_img_3->move($path, $new_image_3);

            $about->img_3 = $new_image_3;
        }

        $about->save();

        return redirect()->back()->with('status', 'Cập nhật thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
