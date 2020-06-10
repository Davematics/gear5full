<?php

namespace App\Http\Controllers;

use App\Ads;
use App\Category;
use App\AdsImage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adss=Ads::where('user_id',auth()->user()->id)->get();
        return view('ads.myads',compact('adss'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        return view('ads.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:200',
            'amount' => 'required|string|max:200',
            'description' => 'required|string|min:100',
            'category' => 'required|string|max:200',
            'location' => 'required|string|max:200',
            'condition' => 'nullable|string|max:200',
            'type' => 'required|string|max:200',
            
           
            'dimension' => 'required|string|max:200',
            'display_photo' => 'required|image|max:1024',
            'display_photo_2' => 'required|image|max:1024',
            'display_photo_3' => 'required|image|max:1024',
            'display_photo_4' => 'required|image|max:1024',
            ]);
            
            //uplaing photos
            $adsImage= new AdsImage();
            // if ($request->hasFile('display_photo')) {
            //     dd('hh');
            // }
            $display_photo_1 = $request->file('display_photo');
            $display_photo_1_new =rand().time() . '.' . $display_photo_1->getClientOriginalExtension();
            $display_photo_1->move(public_path('ads_images'), $display_photo_1_new);
            $adsImage->display_photo_1="/ads_images/".$display_photo_1_new;
            // $fileName = time().'.'.$request->file->extension();  
   
            // $request->file->move(public_path('uploads'), $fileName);

            
            $display_photo_2 = $request->file('display_photo_2');
            $display_photo_2_new =rand().time() . '.' . $display_photo_2->getClientOriginalExtension();
            $display_photo_2->move(public_path('ads_images'), $display_photo_2_new);
            $adsImage->display_photo_2="/ads_images/".$display_photo_2_new;

            $display_photo_3 = $request->file('display_photo_3');
            $display_photo_3_new =rand().time() . '.' . $display_photo_3->getClientOriginalExtension();
            $display_photo_3->move(public_path('ads_images'), $display_photo_3_new);
            $adsImage->display_photo_3="/ads_images/".$display_photo_3_new;


            $display_photo_4 = $request->file('display_photo_4');
            $display_photo_4_new =rand().time() . '.' . $display_photo_4->getClientOriginalExtension();
            $display_photo_4->move(public_path('ads_images'), $display_photo_4_new);
            $adsImage->display_photo_4="/ads_images/".$display_photo_4_new;


            $create= new Ads();
            $create->user_id=auth()->user()->id;
            $create->title=$request->title;
            $create->amount=$request->amount;
            $create->description=$request->description;
            $create->category=$request->category;
            $create->location=$request->location;
            $create->condition=$request->condition;
            $create->dimension=$request->dimension;
            $create->type=$request->type;
            $create->brand=$request->brand;
            $create->specification=$request->specification;
            $create->slug=Str::slug($request->title,'-').'_'.time();
            $create->status="1";
           
            $create->save();
           
            $adsImage->ads_id=$create->id;
            $adsImage->save();
            return response()->json(['message'=>'Ads stored successfully']);
            return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\use App\AdsImage;  $ads
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id=base64_decode($id);
        $ads=Ads::where('id',$id)->first();
        if($ads){
        return view('ads.show',compact('ads'));
        }else{
            abort('404');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function edit(Ads $ads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $ads)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:200',
            'amount' => 'required|string|max:200',
            'description' => 'required|string|min:100',
            'category' => 'required|string|max:200',
           
            'condition' => 'nullable|string|max:200',
            'type' => 'required|string|max:200',
            
           
            'dimension' => 'required|string|max:200',
            'display_photo' => 'nullable|image|max:1024',
            'display_photo_2' => 'nullable|image|max:1024',
            'display_photo_3' => 'nullable|image|max:1024',
            'display_photo_4' => 'nullable|image|max:1024',
            ]);
            
            //uplaing photos
            $adsImage= AdsImage::where('ads_id',$ads)->first();

            // if ($request->hasFile('display_photo')) {
            //     dd('hh');
            // }
            if ($request->hasFile('display_photo')) {
                $display_photo_1 = $request->file('display_photo');
                $display_photo_1_new =rand().time() . '.' . $display_photo_1->getClientOriginalExtension();
                $display_photo_1->move(public_path('ads_images'), $display_photo_1_new);
                $adsImage->display_photo_1="/ads_images/".$display_photo_1_new;
                // $fileName = time().'.'.$request->file->extension();
            }
            // $request->file->move(public_path('uploads'), $fileName);

            if ($request->hasFile('display_photo_2')) {
                $display_photo_2 = $request->file('display_photo_2');
                $display_photo_2_new =rand().time() . '.' . $display_photo_2->getClientOriginalExtension();
                $display_photo_2->move(public_path('ads_images'), $display_photo_2_new);
                $adsImage->display_photo_2="/ads_images/".$display_photo_2_new;
            }
            if ($request->hasFile('display_photo_3')) {
                $display_photo_3 = $request->file('display_photo_3');
                $display_photo_3_new =rand().time() . '.' . $display_photo_3->getClientOriginalExtension();
                $display_photo_3->move(public_path('ads_images'), $display_photo_3_new);
                $adsImage->display_photo_3="/ads_images/".$display_photo_3_new;
            }
            if ($request->hasFile('display_photo_4')) {
                $display_photo_4 = $request->file('display_photo_4');
                $display_photo_4_new =rand().time() . '.' . $display_photo_4->getClientOriginalExtension();
                $display_photo_4->move(public_path('ads_images'), $display_photo_4_new);
                $adsImage->display_photo_4="/ads_images/".$display_photo_4_new;
            }

            $create=  Ads::where('id',$ads)->first();
            $create->user_id=auth()->user()->id;
            $create->title=$request->title;
            $create->amount=$request->amount;
            $create->description=$request->description;
            $create->category=$request->category;
          
            $create->condition=$request->condition;
            $create->dimension=$request->dimension;
            $create->type=$request->type;
            $create->slug=Str::slug($request->title,'-').time();
            
            $create->status="1";
           // $adsImage->ads_id=$create->id;
            $create->save();
           
           if($adsImage){
            $adsImage->save();
           }
           return response()->json(['message'=>'Ads updated successfully']);
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ads  $ads
     * @return \Illuminate\Http\Response
     */
    public function destroy($ads)
    {
        //$ads->delete();
        $ads=Ads::where('id',$ads)->delete();
        return redirect()->back()->with('success', ' record deleted successfully');
    }
}
