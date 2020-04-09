<?php

namespace App\Http\Controllers\Blog;

use App\Category;
use App\Content;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Personnel;
use App\Sample;
use App\Us;
use App\Page;
use Illuminate\Support\Facades\App;

class BlogController extends Controller
{
    public function index()
    {
        $local=app()->getLocale();
       
        $personnels=Personnel::whereLang($local)->get();
        return view('blog.index', compact('personnels'));
    }

    

    public function about()
    {
        return view('blog.about');
    }

    public function us()
    {
        return view('blog.us');
    }
    public function order()
    {
        $local=app()->getLocale();
        $categories=Category::whereLang($local)->get();
        return view('blog.order', compact('categories'));
    }
 
    public function webdesign()
    {
        SEOTools::setTitle('برنامه نویسی و طراحی  وب ');
        SEOTools::setDescription(" برنامه نویسی و طراحی  وب در گیلان', 'برنامه نویسی و طراحی وب در بندر انزلی', 'طراحی وب','برنامه نویسی وب'");
       
        return view('blog.services.web_design');
    }


    public function ContentGeneration()
    {
        SEOTools::setTitle('تولید محتوا ');
        SEOTools::setDescription("تولید محتوا داستان ر گیلان', 'تولید محتوا در بندر انزلی', 'تولید محتوا',' بهترین تولید محتوا ','بهترین تولید محتوا در ایران','بهترین تولید محتوا در تهران'");
      
        return view('blog.services.Content_Generation');
    }

    public function socialmedia()
    {
        return view('blog.services.social_media');
    }

    public function pintingdesign()
    {
        return view('blog.services.Pinting_design');
    }

    public function photography()
    {
        SEOTools::setTitle('عکاسی ساخت تیزر و انیمیشن  ');
        SEOTools::setDescription("'عکاسی ساخت تیزر و انیمیشن ،عکاسی ساخت تیزر و انیمیشن،عکاسی ساخت تیزر و انیمیشن درگیلان،عکاسی ساخت تیزر و انیمیشن در بندر انزلی  ");
        return view('blog.services.photography_animation');
    }
    public function logo()
    {
        SEOTools::setTitle('طراحی ');
        SEOTools::setDescription("'طراحی ، طراحی لوگو،طراحی درگیلان،طراحی در بندر انزلی  ");
        return view('blog.services.logo_design');
    }

    public function banding()
    {
        SEOTools::setTitle('مشاوره ی تبلیغاتی و برندینگ  ');
        SEOTools::setDescription("'مشاوره ی تبلیغاتی و برندینگ ، مشاوره ی تبلیغاتی و برندینگ ،مشاوره ی تبلیغاتی و برندینگ  درگیلان،مشاوره ی تبلیغاتی و برندینگ  در بندر انزلی  ");
        return view('blog.services.branding_advice');
    }

    public function content()
    {
        $local=app()->getLocale();
        $rows=Content::whereLang($local)->paginate(9);
        return view('blog.content.index', compact('rows'));
    }

    public function contentShow(Content $content)
    {
        SEOTools::setTitle($content->title);
        SEOTools::setDescription($content->description);
        return view('blog.content.show', compact('content'));
    }

    public function android()
    {
        SEOTools::setTitle('برنامه نویسی اندروید و ios ');
        SEOTools::setDescription("'برنامه نویسی اندروید و ios ");
        return view('blog.services.android');
    }

    public function indexWeb()
    {
        $local=app()->getLocale();
        $rows=Sample::whereLang($local)->orwhere('category', 'program')->paginate(9);
        return view('blog.sample.web_design', compact('rows'));
    }

    public function SampleShow(Sample $sample)
    {
        return view('blog.sample.show.show', compact('sample'));
    }

    public function sampleAll()
    {
        $local=app()->getLocale();
        $rows=Sample::whereLang($local)->paginate(12);
        return view('blog.sample.show.all', compact('rows'));
    }

    public function sampleAndroid(){

        $local=app()->getLocale();
        $items=Sample::where('category','android')->Where('lang',$local)->paginate(12);
        return view('blog.sample.android',compact('items'));
    }

    public function sampleAnimaite()
    {
        $local=app()->getLocale();
        $items=Sample::where('category','animaite')->Where('lang',$local)->paginate(12);
        return view('blog.sample.animaite',compact('items'));
    }

    public function sampleCampaign()
    {
        
        $items=Sample::where('category','Campaign')->Where('lang',$local)->paginate(12);
        return view('blog.sample.Campaign',compact('items'));
    }

    public function sampleLogo()
    {
        $local=app()->getLocale();
        $items=Sample::where('category','logo')->Where('lang',$local)->paginate(12);
        return view('blog.sample.logo_design',compact('items'));
    }

    public function samplePoster()
    {
        $local=app()->getLocale();
        $items=Sample::where('category','poster')->Where('lang',$local)->paginate(12);
        return view('blog.sample.poster',compact('items'));
    }

    public function sampleProgram()
    {
        $local=app()->getLocale();
        $items=Sample::where('category','program')->Where('lang',$local)->paginate(12);
        return view('blog.sample.program',compact('items'));
    }

    public function sampleTeaser()
    {
        $local=app()->getLocale();
        $items=Sample::where('category','teaser')->Where('lang',$local)->paginate(12);
        return view('blog.sample.teaser',compact('items'));
    }


    
    
    public function url(Page $page)
    { 
       

      return view('blog.headerShow',compact('page'));
      
       
    }
}
