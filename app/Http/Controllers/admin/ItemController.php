<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Item;
use Carbon\Carbon;
class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::all();
        return view('admin.item',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::all();
         return view('admin.item_create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'category_id' => 'required',
            'itemName'    => 'required',
            'description' => 'required',
            'price'       => 'required',
            'image'       => 'required',
            
        ]);

         $item            = new Item();

         if($image=$request->file('image')){
            $imageName =time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'),$imageName);
            $item->image=$imageName;
          }
       
        $item  ->category_id    = $request->category_id;
        $item  ->itemName       = $request->itemName;
        $item  ->description    = $request->description;
        $item  ->price          = $request->price;
       
        $item->save();
        return redirect()->route('item.index')->with('Msg','Item Inserted Successfully '); 

        
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
        $categories =Category::all();
        
        $items=Item::find($id);
        return view('admin.item_edit',compact('items','categories'));
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
         
            $this->validate($request,[
            'category_id' => 'required',
            'itemName'    => 'required',
            'description' => 'required',
            'price'       => 'required',
            'image'       => 'mimes:jpeg,jpg,bmp,png',
        ]);

        $item = Item::find($id);
        $image = $request->file('image');
        //$slug = str_slug($request->name);
        if (isset($image))
        {
            $currentDate = Carbon::now()->toDateString();
            $imagename = /*$slug.'-'.$currentDate.'-'.*/ uniqid() .'.'. $image->getClientOriginalExtension();

            if (!file_exists('images'))
            {
                mkdir('images',0777,true);
            }
            unlink('images/'.$item->image);
            $image->move('images',$imagename);
        }else{
            $imagename = $item->image;
        }

        $item->category_id = $request->category_id;
        $item->itemName    = $request->itemName;
        $item->description = $request->description;
        $item->price       = $request->price;
        $item->image       = $imagename;
        $item->save();
        return redirect()->route('item.index')->with('Msg','Item Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $item=Item::find($id);
       if (file_exists('images/'.$item->image))
        {
            unlink('images/'.$item->image);
        }
        $item->delete();
        return redirect()->route('item.index')->with('Msg','Item Deleted Successfully'); 
    }
}
