<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Ratom_chven;
use App\Models\products;
use App\Models\Filialebi;
use App\Models\Photo_gallery;
use App\Models\Video_gallery;
use App\Models\Blogs;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Mxileba;
use App\Models\Main_page;
use App\Models\Product;
use App\Models\Sub_category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('adminadmin.home');
    }

    public function contact()
    {
        $info = Contact::firstOrFail();
        return view('adminadmin.contact', compact('info'));
    }

    public function mtavari_update(Request $request)
    {
        $generate = Main_page::firstOrFail();
        if(request()->has('image'))
        {
            $generate->update([
                'image' => request()->image->store('mtavari', 'public'),
            ]);
            return redirect()->back()->with('successimage','ფოტო წარმატებით განახლდა!');
        }
        return redirect()->back()->with('dangerimage','ფოტოს განახლება ვერ მოხერხდა!');
    }

    public function contact_update(Request $request)
    {
        $generate = Contact::firstOrFail();
        $generate->contact_youtube = $request->contact_youtube;
        $generate->contact_instagram = $request->contact_instagram;
        $generate->contact_facebook = $request->contact_facebook;
        $generate->contact_address_geo = $request->contact_address_geo;
        $generate->contact_address_eng = $request->contact_address_eng;
        $generate->contact_address_rus = $request->contact_address_rus;
        $generate->contact_phone_one = $request->contact_phone_one;
        $generate->contact_phone_two = $request->contact_phone_two;
        $generate->contact_email_one = $request->contact_email_one;
        $generate->contact_email_two = $request->contact_email_two;
        $generate->contact_time = $request->contact_time;
        $generate->save();
        return redirect()->back()->with('success', 'კონტაქტი წარმატებით განახლდა!');
    }

    public function media_blogs()
    {
        $info = Blogs::orderBy('news_id', 'desc')->paginate(10);
        return view('adminadmin.media_blogs', compact('info'));
    }

    public function media_blogs_add()
    {
        $info = "";
        return view('adminadmin.media_blogs_add', compact('info'));
    }

    public function media_blogs_drop($id)
    {
        $Temp = new Blogs();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function media_blogs_add_insert(Request $request)
    {

        $info = new Blogs();
        $info->news_title_geo = $request->news_title_geo;
        $info->news_title_eng = $request->news_title_eng;
        $info->news_title_rus = $request->news_title_rus;
        $info->news_text_geo = $request->news_text_geo;
        $info->news_text_eng = $request->news_text_eng;
        $info->news_text_rus = $request->news_text_rus;
        $info->save();
        $this->storeImageBlog($info);
        return redirect()->back()->with('success', 'სიახლე წარმატებით დაემატა!');
    }

    public function media_blogs_details($id)
    {
        $info = Blogs::where('news_id', $id)->firstOrFail();
        return view('adminadmin.media_blogs_edit', compact('info'));
    }

    public function media_blogs_post_update(Request $request, $id)
    {

        $generate = Blogs::where('news_id', $id)->first();
        $generate->news_title_geo = $request->news_title_geo;
        $generate->news_title_eng = $request->news_title_eng;
        $generate->news_title_rus = $request->news_title_rus;
        $generate->news_text_geo = $request->news_text_geo;
        $generate->news_text_eng = $request->news_text_eng;
        $generate->news_text_rus = $request->news_text_rus;
        $generate->save();
        $this->storeImageBlog($generate);
        return redirect()->back()->with('success', 'სიახლე წარმატებით დარედაქტირდა!');
    }

    public function media_video()
    {
        $info = Video_gallery::orderBy('video_gallery_id', 'desc')
                                ->get();
        return view('adminadmin.media_video', compact('info'));

    }

    public function media_video_add_insert(Request $request)
    {
        $link = $request->video_gallery_url;
        $video_id = explode("?v=", $link);
        $video_id = $video_id[1];
        $info = new Video_gallery();
        $info->video_gallery_url = $video_id;
        $info->save();
        return redirect()->back()->with('success', 'ვიდეო წარმატებით დაემატა გალერიაში!');
    }

    public function media_video_edit($id)
    {
        $info = Video_gallery::where('video_gallery_id', $id)->firstOrFail();
        return view('adminadmin.media_video_edit', compact('info'));

    }

    public function media_video_update(Request $request, $id)
    {

        $link = $request->video_gallery_url;
        $video_id = explode("?v=", $link);
        $video_id = $video_id[1];
        $info = Video_gallery::where('video_gallery_id', $id)->firstOrFail();
        $info->video_gallery_url = $video_id;
        $info->save();
        return redirect()->back()->with('success', 'ვიდეო წარმატებით განახლდა გალერიაში!');
    }

    public function media_video_drop($id)
    {
        $Temp = new Video_gallery();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function media_photo()
    {
        $infos = Photo_gallery::orderBy('photo_gallery_id', 'desc')
                                ->get();
        return view('adminadmin.media_photo', compact('infos'));

    }

    public function media_photo_add_insert(Request $request)
    {
        if(request()->hasFile('image')) {
            foreach(request()->file('image') as $file){
                $path = $file->store('public/photogallery');
                $gallery = new Photo_gallery;
                $gallery->image = $path;
                $gallery->save();
            }
            return  back()->with('success', "სურათები წარმატებით დაემატა!");
        }
        return  back()->with('danger', "სურათების ატვირთვა ვერ მოხერხდა!");
    }

    public function media_photo_drop($id)
    {
        $Temp = new Photo_gallery();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function products_all()
    {
        $info = Product::orderBy('products_id', 'desc')->paginate(10);
        return view('adminadmin.product_all', compact('info'));
    }

    public function product_add()
    {
        $choosecategories = Category::orderBy('name_geo', 'asc')->get();
        return view('adminadmin.product_add', compact('choosecategories'));
    }

    public function product_drop($id)
    {
        $Temp = new Product();
        $Temp->destroy($id);
        return redirect()->back();
    }

    public function product_add_insert(Request $request)
    {
        $info = new Product();
        $info->products_title_geo = $request->products_title_geo;
        $info->products_title_eng = $request->products_title_eng;
        $info->products_title_rus = $request->products_title_rus;
        $info->products_text_geo = $request->products_text_geo;
        $info->products_text_eng = $request->products_text_eng;
        $info->products_text_rus = $request->products_text_rus;
        $info->cat_id = $request->cat_id;
        $info->sub_cat_id = $request->sub_category;
        $info->price = $request->price;
        $info->save();
        $this->storeImageProduct($info);
        return redirect()->back()->with('success', 'სერვისი წარმატებით დაემატა!');
    }

    public function product_details($id)
    {
        $info = Product::where('products_id', $id)->firstOrFail();
        $choosecategories = Category::orderBy('name_geo', 'asc')->get();
        $choosesubcategories = Sub_category::where('cat_id', $info->cat_id)->orderBy('name_geo', 'asc')->get();
        return view('adminadmin.product_edit', compact('info', 'choosecategories', 'choosesubcategories'));
    }

    public function product_update(Request $request, $id)
    {
        $generate = Product::where('products_id', $id)->firstOrFail();
        $generate->products_title_geo = $request->products_title_geo;
        $generate->products_title_eng = $request->products_title_eng;
        $generate->products_title_rus = $request->products_title_rus;
        $generate->products_text_geo = $request->products_text_geo;
        $generate->products_text_eng = $request->products_text_eng;
        $generate->products_text_rus = $request->products_text_rus;
        $generate->cat_id = $request->cat_id;
        $generate->sub_cat_id = $request->sub_category;
        $generate->price = $request->price;
        $generate->save();
        $this->storeImageProduct($generate);
        return redirect()->back()->with('success', 'სერვისი წარმატებით განახლდა!');
    }

    public function product_update_image(Request $request)
    {
        $products_id = $request->products_id;
        $products_image = $request->products_image;

        $generate = Product::where('products_id', $products_id)->first();
        $generate->products_image=$products_image;
        $generate->save();
        return redirect()->back();
    }

    public function main()
    {
        $info = Ratom_chven::firstorFail();
        return view('adminadmin.main', compact('info'));
    }

    public function main_update(Request $request)
    {
        $generate = Ratom_chven::firstOrFail();
        $generate->ratom_chven_text_geo = $request->ratom_chven_text_geo;
        $generate->ratom_chven_text_eng = $request->ratom_chven_text_eng;
        $generate->ratom_chven_text_rus = $request->ratom_chven_text_rus;
        $generate->save();
        return redirect()->back()->with('success', 'ინფორმაცია წარმატებით განახლდა!');
    }

    public function about()
    {
        $info = About::firstorFail();
        return view('adminadmin.about', compact('info'));
    }

    public function about_update(Request $request)
    {
        $generate = About::firstOrFail();
        $generate->about_text_geo= $request->about_text_geo;
        $generate->about_text_eng= $request->about_text_eng;
        $generate->about_text_rus= $request->about_text_rus;
        $generate->save();
        return redirect()->back()->with('success', 'ინფორმაცია წარმატებით განახლდა!');
    }


    public function categories()
    {
        $info = Category::orderBy('name_geo', 'asc')->get();
        return view('adminadmin.categories', compact('info'));
    }

    public function category_add()
    {
        return view('adminadmin.category_add');
    }

    public function category_add_insert(Request $request)
    {
        $generate = new Category();
        $generate->name_geo = $request->name_geo;
        $generate->name_eng = $request->name_eng;
        $generate->name_rus = $request->name_rus;
        $generate->save();
        $this->storeImageCategory($generate);
        return redirect()->back()->with('success', 'თქვენ წარმატებით დაამატეთ პროდუქტის კატეგორია');
    }

    public function category_edit($id)
    {
        $info = Category::where('id', $id)->firstOrFail();
        return view('adminadmin.category_edit', compact('info'));
    }

    public function category_update(Request $request, $id)
    {
        $generate = Category::findOrFail($id);
        $generate->name_geo = $request->name_geo;
        $generate->name_eng = $request->name_eng;
        $generate->name_rus = $request->name_rus;
        $generate->save();
        $this->storeImageCategory($generate);
        return redirect()->back()->with('success', 'თქვენ წარმატებით დაარედაქტირეთ კატეგორია');
    }

    public function category_delete($id)
    {
        $Temp = new Category();
        $Temp->destroy($id);
        Product::where('cat_id', $id)->delete();
        Sub_category::where('cat_id', $id)->delete();
        return redirect()->back()->with('success', 'კატეგორია წარმატებით წაიშალა');
    }

    public function sub_categories()
    {
        $info = Sub_category::orderBy('name_geo', 'asc')->get();
        return view('adminadmin.sub_category', compact('info'));
    }

    public function sub_add()
    {
        $cats = Category::orderBy('id', 'asc')->get();
        return view('adminadmin.sub_add', compact('cats'));
    }

    public function sub_add_insert(Request $request)
    {
        $generate = new Sub_category();
        $generate->cat_id = $request->category;
        $generate->name_geo = $request->name_geo;
        $generate->name_eng = $request->name_eng;
        $generate->name_rus = $request->name_rus;
        $generate->save();
        $this->storeImageSubCategory($generate);
        return redirect()->back()->with('success', 'თქვენ წარმატებით დაამატეთ პროდუქტის კატეგორია');
    }

    public function subcat_edit($id)
    {
        $cats = Category::orderBy('id', 'asc')->get();
        $info = Sub_category::where('id', $id)->firstOrFail();
        return view('adminadmin.sub_edit', compact('info', 'cats'));
    }

    public function sub_update(Request $request, $id)
    {
        $generate = Sub_category::findOrFail($id);
        $generate->cat_id = $request->category;
        $generate->name_geo = $request->name_geo;
        $generate->name_eng = $request->name_eng;
        $generate->name_rus = $request->name_rus;
        $generate->save();
        $this->storeImageSubCategory($generate);
        return redirect()->back()->with('success', 'თქვენ წარმატებით დაარედაქტირეთ კატეგორია');
    }

    public function sub_delete($id)
    {
        $Temp = new Sub_category();
        $Temp->destroy($id);
        Product::where('cat_id', $id)->delete();
        return redirect()->back()->with('success', 'კატეგორია წარმატებით წაიშალა');
    }

    public function about_update_img(Request $request)
    {
        $generate = About::firstOrFail();
        if(request()->has('image'))
        {
            $generate->update([
                'image' => request()->image->store('about', 'public'),
            ]);
            return redirect()->back()->with('successimage','ფოტო წარმატებით განახლდა!');
        }
        return redirect()->back()->with('dangerimage','ფოტოს განახლება ვერ მოხერხდა!');
    }


    public function storeImageProduct($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('products', 'public'),
            ]);
        }
    }

    public function storeImageBlog($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('blogs', 'public'),
            ]);
        }
    }

    public function storeImageCategory($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('categories', 'public'),
            ]);
        }
    }

    public function storeImageSubCategory($createdObject)
    {
        if(request()->has('image'))
        {
            $createdObject->update([
                'image' => request()->image->store('sub_categories', 'public'),
            ]);
        }
    }



    public function getSubCategory($id)
    {
        echo json_encode(Sub_category::where('cat_id', $id)->get());
    }


    public function getMySubCategory($id)
    {
        echo json_encode(Sub_category::where('cat_id', $id)->get());
    }
}
