@extends('blog.master')

@section('content')
<section>
<div class="container">
					
    <div class="row">

        <div class="col-lg-8 col-md-8 col-sm-12">
            <article class="blog-news big-detail-wrap">
                <div class="blog-detail-wrap">
                
                    <!-- Featured Image -->
                    <figure class="img-holder">
                        @if (!$content->imageUrl=="" && !$content->videoUrl=="")

                        <a href="blog-detail.html"><img src="{{$content->imageUrl}}" class="img-responsive" style=" width:860px; height:525px" alt="News"></a>
                        <div class="blog-post-date theme-bg">
                        {{jdate($content->created_at)->ago()}}
                        </div>
                        <hr>
                        <video width="400" controls>
                            <source src="{{$content->videoUrl}}" type="video/mp4"> 
                        </video>
                        
                        @elseif(!$content->videoUrl=="")
                        <video width="800" controls>
                            <source src="{{$content->videoUrl}}" type="video/mp4"> 
                             </video>

                        @elseif(!$content->imageUrl=="" )
                        <a href="blog-detail.html"><img src="{{$content->imageUrl}}" class="img-responsive" style=" width:860px; height:525px" alt="News"></a>
                        <div class="blog-post-date theme-bg">
                        {{jdate($content->created_at)->ago()}}
                        </div>
                        @endif

                       
                    </figure>
                    
                    <!-- Blog Content -->
                    <div class="full blog-content">
                        <div class="post-meta">توسط: <a href="#" class="author theme-cl">Admin</a>  </div>
                        <a href="blog-detail.html"><h3>{{$content->title}}</h3></a>
                        <div class="blog-text">
                            
                            {!!$content->body !!}

                          
                          

                            @if (!$content->audioUrl=="")
                            <audio controls>
                                <source src="{{$content->audioUrl}}" type="audio/mpeg">
                           </audio>
                           @else 
                           <div></div>
                           @endif
                        <div class="small">تگ ها: <span class="category"><a href="#" class="theme-cl">{{$content->tags}}</a></span></div>
                        </div>
                        
                        <!-- Blog Share Option -->
                      <hr>
                        
                    </div>
                    <!-- Blog Content -->
                    
                </div>
            </article>
            
            <!-- Comment -->
         
                    
        </div>
        
        <!-- Sidebar Start -->
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div class="sidebar">
                
              
                
                <div class="side-widget">
                    <div class="side-widget-header">
                        <h4><i class="ti-check-box"></i>آخرین پست ها</h4>
                    </div>


                    <div class="side-widget-body p-t-10">
                        <div class="side-list">
                            <ul class="side-blog-list">
                                @foreach (App\Content::latest()->paginate(4) as $item)
                                <li>
                                    <a href="#">
                                        <div class="blog-list-img">
                                            <img src="{{$item->imageUrl}}" class="img-responsive" alt="">
                                        </div>
                                    </a>
                                    <div class="blog-list-info">
                                        <h5><a href="{{Route('contentshow',["id"=>$item->id])}}" title="blog">"{{$item->title}}</a></h5>
                                        <div class="blog-post-meta">
                                            <span class="updated">"{{jdate($item->created_at)->ago()}}</span> | <a href="#" rel="tag">"{{$item->category}}</a>					
                                        </div>
                                    </div>
                                </li>  
                                @endforeach
                                
                                
                    

                            </ul>
                        </div>
                    </div>
                </div>
                
               
                
            </div>
        </div>
        
    </div>
    
</div>
</section>
<div class="clearfix"></div>
    
@endsection