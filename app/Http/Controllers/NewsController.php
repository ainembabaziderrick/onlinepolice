<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function Homenews(){
        $getRecord = News::latest()->get();
        return view('admin.news.list', compact('getRecord'));
    }

    public function Addnews(){
        return view('admin.news.add');
    }

    public function Storenews(Request $request){

        $news_image = $request->file('image');
        $name_gen = hexdec(uniqid());
        $img_ext = strtolower($news_image->getClientOriginalExtension());
        $img_name = $name_gen.'.'.$img_ext;
        $up_location = 'image/news/';
        $last_img = $up_location.$img_name;
        $news_image -> move($up_location, $img_name);

        $save = new News;
        $save->title = $request->title;
        $save->text = $request->text;
        
        $save->image = $last_img;
       
        $save->save();

       

        return redirect('admin/news')->with('success', 'News successfully created');
        
    }

    public function Editnews($id){
        $cases = News::find($id);
       
        return view('admin.news.edit', compact('cases'));
     
     }

     public function Updatenews(Request $request, $id){
    
        $update =   News::find($id)->update([
               'title' => $request->title,
               'text' => $request->text,
              
               'image' => $request->image,
               
              
                      
           ]);
           return redirect('admin/news')->with('success','News Updated succcessfully');
        
        }


    public function Deletenews($id){
        $delete = News::find($id)->Delete();
        return Redirect()->back()->with('success','News Deleted succcessfully');
     }
}
