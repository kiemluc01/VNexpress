@extends('.layout.main-layout')
@section('content')
<h4 class="mt-3">Tìm kiếm</h4>
<div class="row  ">
    <div class="col-md-7 ghn">
        <form class="input-form" method="post">
            <input type="text" name="text" value="{{$text}}" class="txt-search input_form w-100  ">
            <input type="hidden" name="_token"  value="<?php echo csrf_token(); ?>" >
            <button type="submit" class="btn-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
        </form>
        <div class="row mt-3">
            <div class="col-md-4">
                <p class="mb-2">Thời gian</p>
                <select class="form-select" id="time-filter" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">1 ngày qua</option>
                    <option value="2">1 tuần qua</option>
                    <option value="3">1 tháng qua </option>
                    <option value="3">1 năm qua </option>
                </select>
            </div>
            <div class="col-md-4">
                <p class="mb-2">Chuyên mục</p>
                <select class="form-select" id="category-filter" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Thế giới</option>
                    <option value="2">Kinh doanh</option>
                    <option value="3">Thể thao</option>
                </select>
            </div>
            <div class="col-md-4">
                <p class="mb-2">Khu vực</p>
                <select class="form-select" id="khuvuc" aria-label="Default select example">
                    <option selected>Tất cả</option>
                    <option value="1">Thế giới</option>
                    <option value="2">Trong nước</option>
                </select>
            </div>
        </div>
        <div>
            @if(count($search_posts) == 0)
                <div class="row mt-3">
                    <h2 style="text-indent: 50px; margin-top:50px;">Không tìm thấy bài viết nào</h2>
                </div>
            @else
                @php  
                    $count =0;
                @endphp
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
                @php
                    $count++;
                    if($count == 5)
                        break;  
                @endphp
                @endforeach
            @endif
        </div>
    </div>
    <div class="col-md-5">
        <h3>đọc nhiều</h3>
        <hr>
        @if(count($view_posts) != 0)
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
        @else  
            @php 
                $search_posts = $search_posts->toArray();
                $n = 10;
            @endphp
            @if(count($search_posts) < 9)
                @php
                    $n = count($search_posts);
                @endphp
            @endif
            @for($i = 5; $i < $n; $i++)
                <div class="bt pb-2 ">
                    <a href="/details/{{$search_posts[$i]['id']}}">{{$search_posts[$i]['name']}}</a>
                    <div class="row pt-3">
                        <a href="/details/{{$search_posts[$i]['id']}}" class="col-md-5">
                            <img src="{{$search_posts[$i]['rootImage']}}" class="img-fluid" alt="">
                        </a>
                        <div class="col-md-7 pl-0">
                            <p class="ab">{{$search_posts[$i]['shortDescription']}}</p>
                        </div>
                    </div>
                </div>
            @endfor
        @endif
    </div>
</div>
<script>
    $(document).ready(function(){
        $('#khuvuc').change(function(){
            var text = this.value 
            $.ajax({

            })
        })
    })
</script>
@endsection