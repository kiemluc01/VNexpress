@extends('.layout.main-layout')
@section('content')
<h4 class="mt-3">Tìm kiếm</h4>
<div class="row  ">
    <div class="col-md-7 ghn">
        <form class="input-form" method="post">
            <input type="text" class="txt-search input_form w-100  ">
            <button type="submit" class="btn-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
        <div class="row mt-3">
            <div class="col-md-4">
                <p class="mb-2">Thời gian</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">1 ngày qua</option>
                    <option value="2">1 tuần qua</option>
                    <option value="3">1 tháng qua </option>
                    <option value="3">1 năm qua </option>
                </select>
            </div>
            <div class="col-md-4">
                <p class="mb-2">Chuyên mục</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Thế giới</option>
                    <option value="2">Kinh doanh</option>
                    <option value="3">Thể thao</option>
                </select>
            </div>
            <div class="col-md-4">
                <p class="mb-2">Dạng bài</p>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Bài viết</option>
                    <option value="2">Ảnh</option>
                    <option value="3">Video</option>
                </select>
            </div>
        </div>
        <div>
            @foreach($search_posts as $search_post)
            <div class="row mt-3 "> 
                <div class="col-md-8">
                    <a href="/details/{{$search_post->id}}"><h5 class="serch_title">{{$search_post->name}}</h5></a>
                    <p>{{$search_post->shortDescription}}</p>
                </div>
                <div class="col-md-4">
                    <img src="{{$search_post->rootImage}}" class="img-fluid w-100" alt="">
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-5">
        <h3>đọc nhiều</h3>
        <hr>
        @php  
            $view_posts = App\Http\Controllers\PostController::view_post_search($_REQUEST['text']);
        @endphp
        @foreach($view_posts as $view_post)
            <div class="bt pb-2 ">
                <a href="/details/{{$view_post->id}}">{{$view_post->name}}</a>
                <div class="row pt-3">
                    <a href="/details/{{$view_post->id}}" class="col-md-5">
                        <img src="{{$view_post->rootImage}}" class="img-fluid" alt="">
                    </a>
                    <div class="col-md-7 pl-0">
                        <p class="ab">{{$view_post->shortDescription}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection