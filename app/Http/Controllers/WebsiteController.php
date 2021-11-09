<?php

namespace App\Http\Controllers;

use App\Content;
use App\Website;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function websites(){
        $websites = Website::all();
        return view('websites.index', compact('websites'));
    }
    public function websiteView($id){
        $website = Website::find($id);
        return view('websites.view', compact('website'));
    }
    public function websiteCreate(){
        return view('websites.create');
    }
    public function websiteStore(Request $request){
        $gs = new Website();
        $gs->sitename = $request->sitename;
        $gs->email = $request->email;
        $gs->phone = $request->phone;
        $gs->address = $request->address;
        $gs->time = $request->time;
        $gs->facebook = $request->facebook;
        $gs->instagram = $request->instagram;
        $gs->footer_text = $request->footer_text;
        if ($request->hasfile('logo')) {
            $image1 = $request->file('logo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->logo = 'allimages/' . $name;
        }
        if ($request->hasfile('footer_logo')) {
            $image1 = $request->file('footer_logo');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $gs->footer_logo = 'allimages/' . $name;
        }
        $gs->save();
        $content = new Content();
        $content->website_id = $gs->id;
        $content->save();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function websiteSlider($id){
        $content = Content::where('website_id', $id)->first();
        return view('websites.content.slider', compact('content'));
    }
    public function sliderStore(Request $request, $id){
        $content = Content::where('website_id', $id)->first();
        if ($request->hasfile('slider1')) {
            $image1 = $request->file('slider1');
            $name = time() . 'allimages' . '.' . $image1->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image1->move($destinationPath, $name);
            $content->slider1 = 'allimages/' . $name;
        }
        if ($request->hasfile('slider2')) {
            $image2 = $request->file('slider2');
            $name2 = time() . 'allimages' . '.' . $image2->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image2->move($destinationPath, $name2);
            $content->slider2 = 'allimages/' . $name2;
        }
        if ($request->hasfile('slider3')) {
            $image3 = $request->file('slider3');
            $name3 = time() . 'allimages' . '.' . $image3->getClientOriginalExtension();
            $destinationPath = 'allimages/';
            $image3->move($destinationPath, $name3);
            $content->slider3 = 'allimages/' . $name3;
        }
        $content->update();
        $notification = array(
            'messege' => 'Sauvegarde réussie!',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
