<?php

namespace App\Http\Controllers;


// use App\Models\News;
use Illuminate\Http\Request;

class Categories 
{
    public static function all(){
        return ['Populer', 'Olahraga', 'Politik', 'Teknologi'];
    }

    public static function find(){
        return self::where('id','=',$this->id)->first();
    }
}

class News 
{
    public static function all(){
        return  collect([
            ['id' => 1, 'title' => 'Breaking News: Example Title 1', 'body' => 'This is a short description of the news article number 1.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 1', 'date' => '2024-07-20', 'region' => 'Jakarta'],
            ['id' => 2, 'title' => 'Tech Update: Example Title 2', 'body' => 'This is a short description of the news article number 2.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 2', 'date' => '2024-07-19', 'region' => 'Jawa Timur'],
            ['id' => 3, 'title' => 'kesehatan Highlight: Example Title 3', 'body' => 'This is a short description of the news article number 3.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 3', 'date' => '2024-07-18', 'region' => 'Jawa Barat'],
            ['id' => 4, 'title' => 'hiburan Buzz: Example Title 4', 'body' => 'This is a short description of the news article number 4.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 4', 'date' => '2024-07-17', 'region' => 'Jawa Tengah'],
            ['id' => 5, 'title' => 'Political Debate: Example Title 5', 'body' => 'This is a short description of the news article number 5.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 5', 'date' => '2024-07-16', 'region' => 'Jakarta'],
            ['id' => 6, 'title' => 'kesehatan Alert: Example Title 6', 'body' => 'This is a short description of the news article number 6.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 6', 'date' => '2024-07-15', 'region' => 'Jawa Timur'],
            ['id' => 7, 'title' => 'Breaking News: Example Title 7', 'body' => 'This is a short description of the news article number 7.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 7', 'date' => '2024-07-14', 'region' => 'Jawa Barat'],
            ['id' => 8, 'title' => 'Tech Update: Example Title 8', 'body' => 'This is a short description of the news article number 8.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 8', 'date' => '2024-07-13', 'region' => 'Jawa Tengah'],
            ['id' => 9, 'title' => 'kesehatan Highlight: Example Title 9', 'body' => 'This is a short description of the news article number 9.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 9', 'date' => '2024-07-12', 'region' => 'Jakarta'],
            ['id' => 10, 'title' => 'hiburan Buzz: Example Title 10', 'body' => 'This is a short description of the news article number 10.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 10', 'date' => '2024-07-11', 'region' => 'Jawa Timur'],
            ['id' => 11, 'title' => 'Political Debate: Example Title 11', 'body' => 'This is a short description of the news article number 11.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 11', 'date' => '2024-07-10', 'region' => 'Jawa Barat'],
            ['id' => 12, 'title' => 'kesehatan Alert: Example Title 12', 'body' => 'This is a short description of the news article number 12.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 12', 'date' => '2024-07-09', 'region' => 'Jawa Tengah'],
            ['id' => 13, 'title' => 'Breaking News: Example Title 13', 'body' => 'This is a short description of the news article number 13.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 13', 'date' => '2024-07-08', 'region' => 'Jakarta'],
            ['id' => 14, 'title' => 'Tech Update: Example Title 14', 'body' => 'This is a short description of the news article number 14.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 14', 'date' => '2024-07-07', 'region' => 'Jawa Timur'],
            ['id' => 15, 'title' => 'kesehatan Highlight: Example Title 15', 'body' => 'This is a short description of the news article number 15.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 15', 'date' => '2024-07-06', 'region' => 'Jawa Barat'],
            ['id' => 16, 'title' => 'hiburan Buzz: Example Title 16', 'body' => 'This is a short description of the news article number 16.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 16', 'date' => '2024-07-05', 'region' => 'Jawa Tengah'],
            ['id' => 17, 'title' => 'Political Debate: Example Title 17', 'body' => 'This is a short description of the news article number 17.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 17', 'date' => '2024-07-04', 'region' => 'Jakarta'],
            ['id' => 18, 'title' => 'kesehatan Alert: Example Title 18', 'body' => 'This is a short description of the news article number 18.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 18', 'date' => '2024-07-03', 'region' => 'Jawa Timur'],
            ['id' => 19, 'title' => 'Breaking News: Example Title 19', 'body' => 'This is a short description of the news article number 19.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 19', 'date' => '2024-07-02', 'region' => 'Jawa Barat'],
            ['id' => 20, 'title' => 'Tech Update: Example Title 20', 'body' => 'This is a short description of the news article number 20.', 'category' => 'teknologi', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 20', 'date' => '2024-07-01', 'region' => 'Jawa Tengah'],
            ['id' => 21, 'title' => 'kesehatan Highlight: Example Title 21', 'body' => 'This is a short description of the news article number 21.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 21', 'date' => '2024-06-30', 'region' => 'Jakarta'],
            ['id' => 22, 'title' => 'hiburan Buzz: Example Title 22', 'body' => 'This is a short description of the news article number 22.', 'category' => 'hiburan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 22', 'date' => '2024-06-29', 'region' => 'Jawa Timur'],
            ['id' => 23, 'title' => 'Political Debate: Example Title 23', 'body' => 'This is a short description of the news article number 23.', 'category' => 'politik', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 23', 'date' => '2024-06-28', 'region' => 'Jawa Barat'],
            ['id' => 24, 'title' => 'kesehatan Alert: Example Title 24', 'body' => 'This is a short description of the news article number 24.', 'category' => 'kesehatan', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 24', 'date' => '2024-06-27', 'region' => 'Jawa Tengah'],
            ['id' => 25, 'title' => 'kesehatan Alert: Example Title 25', 'body' => 'This is a short description of the news article number 25.', 'category' => 'olahraga', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 25', 'date' => '2024-06-28', 'region' => 'Jawa Tengah'],
            ['id' => 26, 'title' => 'kesehatan Alert: Example Title 26', 'body' => 'This is a short description of the news article number 26.', 'category' => 'olahraga', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 26', 'date' => '2024-06-29', 'region' => 'Jawa Tengah'],
            ['id' => 27, 'title' => 'kesehatan Alert: Example Title 27', 'body' => 'This is a short description of the news article number 27.', 'category' => 'olahraga', 'image_url' => 'https://via.placeholder.com/800', 'image_caption' => 'image caption 27', 'date' => '2024-06-30', 'region' => 'Jawa Tengah'],
        ]);
    }

    public static function find($id){
        return self::where('id', $id)->first();
    }
}




class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        // $news = News::find($id);
        // view('details', compact('news'));   

        $categories = Categories::all();
        $news = News::all();
        $newsItem = $news -> firstWhere('id', $id);
        if ($newsItem)
            return view('details', compact('newsItem', 'categories'));   
        else
            return view('details', message('not found')); 
            
        // foreach ($this->newsData as $news) {
        //     if ($news['id'] == $id) {
        //         return response()->json($news);
        //     }
        // }
        // return response()->json(['message' => 'News not found'], 404);
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $news = new News();
        $news->title = $request->title;
        $news->content = $request->content;
        $news->save();

        return redirect()->route('news.index');
    }

    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->save();

        return redirect()->route('news.index');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();

        return redirect()->route('news.index');
    }
}
