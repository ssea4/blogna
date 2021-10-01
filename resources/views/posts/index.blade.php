@extends('layouts.app')

@section('content')

  
<div class="container">

    <div class="row">
        <!-- Blog entries-->
      
        @foreach ($showit as $post)
        
        <div class="col-lg-8">
            <!-- Featured blog post-->
       
            <div class="card mb-4">
                <a href="#!"><img style="width:100%" src="storage/cover_images/{{$post->cover_image}}"></a>
                <div class="card-body">
                    <div class="small text-muted"> {{$post->created_at}}</div>
                    <h2 class="card-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <p class="card-text"><?php echo "$post->body" ?></p>
                    <a class="btn btn-primary" href="posts/{{$post->id}}">Read more →</a>
                </div>
            </div>
    
            <!-- Nested row for non-featured blog posts-->
            <div class="row">
                
                    <!-- Blog post-->
                    @if(!empty($showit))
                    @foreach ($showit as $post)
                    <div class="col-lg-6">
                            <div class="card mb-4">
                                <a href="#!"><img style="width:100%" src="storage/cover_images/{{$post->cover_image}}"></a>
                                <div class="card-body">
                                    <div class="small text-muted"> {{$post->created_at}}</div>
                                    <h2 class="card-title"><a href="posts/{{$post->id}}">{{$post->title}}</a></h2>
                                    <p class="card-text"><?php echo "$post->body" ?></p>
                                    <a class="btn btn-primary" href="posts/{{$post->id}}">Read more →</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                   
                    @else 
                    <p>No Post found</p>
                    @endif
            
                
            </div>
            <!-- Pagination-->
            <nav aria-label="Pagination">
                <hr class="my-0" />
                <ul class="pagination justify-content-center my-4">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1" aria-disabled="true">Newer</a></li>
                    <li class="page-item active" aria-current="page"><a class="page-link" href="#!">1</a></li>
                    <li class="page-item"><a class="page-link" href="#!">2</a></li>
                    <li class="page-item"><a class="page-link" href="#!">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#!">...</a></li>
                    <li class="page-item"><a class="page-link" href="#!">15</a></li>
                    <li class="page-item"><a class="page-link" href="#!">Older</a></li>
                </ul>
            </nav>
            
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <!-- Search widget-->
            <div class="card mb-4">
                <div class="card-header">Search</div>
                <div class="card-body">
                    <div class="input-group">
                        <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                        <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                    </div>
                </div>
            </div>
            <!-- Categories widget-->
            <div class="card mb-4">
                <div class="card-header">Categories</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Pollution</a></li>
                                <li><a href="#!">Clean Environment</a></li>
                                <li><a href="#!">Aforestation</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="list-unstyled mb-0">
                                <li><a href="#!">Clean Water</a></li>
                                <li><a href="#!">Agriculture</a></li>
                                <li><a href="#!">Clean city</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Side widget-->
            <div class="card mb-4">
                <div class="card-header">Side Widget</div>
                <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
            </div>
        </div>
    
        @endforeach
    </div>
</div>
       
    
@endsection