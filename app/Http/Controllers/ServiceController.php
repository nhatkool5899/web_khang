<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

use function PHPUnit\Framework\fileExists;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dichvu = Service::orderBy('id','desc')->get();
        return view('admin.dichvu.index', compact('dichvu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dichvu.create');   
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
                'name' => 'required|unique:tbl_service',
                'description' => 'required',
                'img' => 'required',
            ],
            [
                'name.required' => 'Tên dịch vụ không thể trống',
                'description.required' => 'Mô tả không thể trống',
                'img.required' => 'Hình ảnh không thể trống',
            ]
        );

        $data = $request->all();

        $dichvu = new Service();
        $dichvu->name = $data['name'];
        $dichvu->description = $data['description'];
        $dichvu->content = $data['content'];
        
        $get_img = $request->file('img');

        $get_name_img = $get_img->getClientOriginalName();
        $name_image = current(explode('.', $get_name_img));
        $new_image = $name_image.'-'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
        $path = 'uploads/dichvu';

        $get_img->move($path, $new_image);

        $dichvu->img = $new_image;

        $dichvu->save();

        return redirect('/service');
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
        $dichvu = Service::find($id);
        return view('admin.dichvu.edit', compact('dichvu'));
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
                'name' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'Tên dịch vụ không thể trống',
                'description.required' => 'Mô tả không thể trống',
            ]
        );

        $data = $request->all();

        $dichvu = Service::find($id);
        $dichvu->name = $data['name'];
        $dichvu->description = $data['description'];
        $dichvu->content = $data['content'];
        
        $get_img = $request->file('img');

        if($get_img){
            $path_file = 'uploads/dichvu/'.$dichvu->img;
            if(fileExists($path_file)){
                unlink($path_file);
            }

            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image.'-'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $path = 'uploads/dichvu';
    
            $get_img->move($path, $new_image);
    
            $dichvu->img = $new_image;
    
            $dichvu->save();

        }else{

            $dichvu->save();
        }


        return redirect('/service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dichvu = Service::find($id);
        $path = 'uploads/dichvu/'.$dichvu->img;
        if(file_exists($path)){
            unlink($path);
        }

        Service::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa dịch vụ thành công');

    }
}
