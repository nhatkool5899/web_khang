<?php

namespace App\Http\Controllers;

use App\Models\Danhmuc;
use App\Models\Sanpham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sanpham = Sanpham::with('danhmuc')->orderBy('id','desc')->get();
        return view('admin.sanpham.index', compact('sanpham'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = Danhmuc::orderBy('id','asc')->get();
        return view('admin.sanpham.create', compact('danhmuc'));
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
                'name' => 'required|unique:tbl_sanpham',
                'slug' => 'required',
                'img' => 'required',
            ],
            [
                'name.required' => 'Tên sản phẩm không thể trống',
                'img.required' => 'Ảnh sản phẩm không thể trống',
            ]
        );

        $data = $request->all();
        $sanpham = new Sanpham();
        $sanpham->danhmuc_id = $data['danhmuc_id'];
        $sanpham->name = $data['name'];
        $sanpham->slug = $data['slug'];
        $sanpham->gender = $data['gender'];
        $sanpham->description = $data['description'];
        $sanpham->content = $data['content'];
        $sanpham->price = $data['price'];

        $get_img = $request->file('img');

        $get_name_img = $get_img->getClientOriginalName();
        $name_image = current(explode('.', $get_name_img));
        $new_image = $name_image.'-'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
        $path = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/';

        $get_img->move($path, $new_image);

        $sanpham->img = $new_image; 


        // Thư viện ảnh
        $images = array();
        if($files = $request->file('list_img'))
		{
            $path = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->name;
            foreach($files as $file)
			{
                $name = rand(0,99).$file->getClientOriginalName();
			    $file->move($path, $name);  
			    $images[] = $name;  
			}
		}

        $sanpham->list_img = json_encode($images);

        $sanpham->save();

        return redirect('/sanpham');
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
        $danhmuc = Danhmuc::all();
        $sanpham = Sanpham::find($id);
        return view('admin.sanpham.edit', compact('sanpham','danhmuc'));
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
                'slug' => 'required',
            ],
            [
                'name.required' => 'Tên sản phẩm không thể trống',
            ]
        );

        $data = $request->all();
        $sanpham = Sanpham::find($id);
        $sanpham->danhmuc_id = $data['danhmuc_id'];
        $sanpham->name = $data['name'];
        $sanpham->slug = $data['slug'];
        $sanpham->gender = $data['gender'];
        $sanpham->description = $data['description'];
        $sanpham->content = $data['content'];
        $sanpham->price = $data['price'];

        $get_img = $request->file('img');
        if($get_img){
            $path_file = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->img;
            if(file_exists($path_file)){
                unlink($path_file);
            }

            $get_name_img = $get_img->getClientOriginalName();
            $name_image = current(explode('.', $get_name_img));
            $new_image = $name_image.'-'.rand(0,99).'.'.$get_img->getClientOriginalExtension();
            $path = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/';
    
            $get_img->move($path, $new_image);
    
            $sanpham->img = $new_image; 

            $sanpham->list_img = json_encode($data['list_img']);


            
            // Thêm ảnh
            $images = array();
            if($files = $request->file('add_img'))
            {
                $path = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->name;
                foreach($files as $file)
                {
                    $name = $file->getClientOriginalName();
                    $file->move($path, $name);  
                    $images[] = $name;  
                }
            }

            $sanpham->save();
        }else{

            // Thêm ảnh
            $images = array();
            if($files = $request->file('add_img'))
            {
                $path = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->name;
                foreach($files as $file)
                {
                    $name = $file->getClientOriginalName();
                    $file->move($path, $name);  
                    $images[] = $name;  
                }
            }

            $sanpham->list_img = json_encode($data['list_img']);
    
            $sanpham->save();
        }
        

        return redirect('/sanpham');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sanpham = Sanpham::find($id);
        $path = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->img;
        if(file_exists($path)){
            unlink($path);
        }

        $directory = 'uploads/sanpham/'.$sanpham->danhmuc_id.'/'.$sanpham->name;
        if($directory) File::deleteDirectory($directory);
        
        Sanpham::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa sản phẩm thành công');
    }
}
