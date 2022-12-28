<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Article;

use DB;

class NewsArticleController extends Controller
{
    public function index()
    {
        $data['news'] = Article::get();
        return view('admin.news.news',$data)->with('i');
    }

    public function createNewsArticle(){
        return view('admin.news.create');
     }

     public function addNewsArticle(Request $request){
      
            $news = new Article;
            if (request()->hasFile('image')) {
                $image = $request->file('image');
                $name = time().'.'.$image->getClientOriginalExtension();
                $destinationPath = public_path('/images');
                $image->move($destinationPath, $name);
                $news['image'] = $name;
            }
            $news->name = $request->name;
            $news->type = $request->type;
            $news->date = $request->date;
            $news->creator = $request->creator;
            $news->content = $request->content;
            
            $news->save();

            $data['news'] = Article::get();

            return view('admin.news.news',$data);
        
     }

     public function editNewsArticle(Article $articles , $id){
        $article = Article::all()->where('id',$id)->first();
        return view('admin.news.edit')->with(compact(['article', 'articles']));
        
    }
    
    public function update(Request $request, Article $articles, $id)
    {
        $article = Article::find($id);
        if (request()->hasFile('image')) {
            $image = $request->file('image');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);
            $article['image'] = $name;
        }
        $article->name = $request->name;
        $article->type = $request->type;
        $article->date = $request->date;
        $article->creator = $request->creator;
        $article->content = $request->content;


         if ($article->save() ) {
             return redirect()->route('NewsArticle')->with(['success' => 'News & Article edited successfully updated.']);
         }

         else{
             return redirect()->back()->with(['fail' => 'Unable to update article.']);     
         }

}

     public function deleteNewsArticle($id){

        $article = DB::delete('delete from articles where id = ?',[$id]);
        return redirect()->route('NewsArticle')->with('success', 'News & Articles details deleted successfully');
     }
}
