<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\About;
use App\Models\Service_list;
use App\Models\Photo_gallery;
use App\Models\Video_gallery;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\Filialebi;
use App\Models\Mxileba;
use App\Models\Main_page;
use App\Models\Product;
use App\Models\Sub_category;

class GuestController extends Controller
{

    public function index()
    {
        $last_news = Blogs::OrderBy('news_id' , 'DESC')->take(3)->get();
        $AboutUs = About::first();
        $getCategories = Category::orderBy('id', 'asc')->take(12)->get();
        $lastAutoparts = Product::orderBy('products_id', 'desc')->take(4)->get();
        return view('index' , compact('last_news', 'AboutUs', 'getCategories', 'lastAutoparts'));
    }

    public function about()
    {
        $AboutUs = About::first();
        return view('about', compact('AboutUs'));
    }

    public function branch_detail($id)
    {
        $filiali = Filialebi::where('filialebi_id' , $id)->first();
        if(!empty($filiali))
        {
            return view('branches', compact('filiali'));
        }
        return back();
    }

    public function photo_gallery()
    {
        $gallery = Photo_gallery::orderBy('photo_gallery_id', 'desc')->get();
        return view('photo_gallery', compact('gallery'));
    }

    public function video_gallery()
    {
        $gallery = Video_gallery::orderBy('video_gallery_id', 'desc')->get();
        return view('video_gallery', compact('gallery'));
    }

    public function blog()
    {
        $news = Blogs::orderBy('news_id', 'desc')->paginate(9);
        return view('blog', compact('news'));
    }

    public function blog_detail($id)
    {
        $mainnews = Blogs::where('news_id' , $id)->first();

        if(!empty($mainnews))
        {
            return view('blog_detail' , compact('mainnews'));
        }
        return back();
    }

    public function contact()
    {
        return view('contact');
    }

    public function subcategory($id)
    {
        $subcategory = Sub_category::where('cat_id', $id)->orderBy('id', 'desc')->paginate(9);
        return view('subcategory', compact('subcategory'));
    }

    public function product($id)
    {
        $product = Product::where('sub_cat_id', $id)->orderBy('products_id', 'desc')->paginate(9);
        return view('product', compact('product'));
    }

    public function product_detail($id)
    {
        $mainproduct = Product::where('products_id' , $id)->first();

        if(!empty($mainproduct))
        {
            return view('product_detail' , compact('mainproduct'));
        }
        return back();
    }

}
