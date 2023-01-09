@extends('.layout.main-layout')
@section('content') 
@php  
    App\Http\Controllers\CookieController::set('url','/');
@endphp
    <!--satrt main-->
    <div class="container py-4">
        <!-- start main news  -->
        <div class="row bt">
            <div class="col-md-9">
                <div class="row">
                    <a href="/details/{{$post_new['id']}}" class="col-md-8 pr-0" >
                        <img src="{{$post_new['rootImage']}}" class="img-fluid" alt="">
                    </a>
                    <div class="col-md-4 bg-light">
                        <a href="/details/{{$post_new['id']}}"><h4>{{$post_new['name']}}</h4></a> 
                        <p>{{$post_new['shortDescription']}}</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <img src="https://scr.vn/wp-content/uploads/2020/07/T%E1%BA%BFt-n%C3%A0y-%C4%91%C6%B0a-g%E1%BA%A5u-v%E1%BB%81-nh%C3%A0.jpg" class="img-fluid" alt="">
            </div>
        </div>
        <!-- end main news  -->
        <div class="row py-4 bt">
            <!-- start left news  -->
            <div class="col-md-5 br " style="padding-left: 0px;">
                <div class="bt pb-3">
                        <img src="https://s1.vnecdn.net/vnexpress/restruct/i/v728/banner/tethyvong_home_pc.png" class="img-fluid" alt="">
                </div>
                <!-- viewest -->
                @foreach($view_posts as $viewpost)
                <div class="bt py-3">
                    <a href="/details/{{$viewpost->id}}" >{{$viewpost->name}}</a>
                    <div class="row pt-3">
                        <a href="/details/{{$viewpost->id}}" class="col-md-5">
                            <img src="{{$viewpost->rootImage}}" class="img-fluid" alt="">
                        </a>
                        <div class="col-md-7 pl-0">
                            <p>{{$viewpost->shortDescription}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- viewest -->
            </div>
            <!-- end left news  -->
            <div class="col-md-7 ">
                <!-- tin thế giới -->
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k" >Thế giới</a></li>
                    </ul>
                    @php  
                        $news_world = App\Http\Controllers\PostController::getpost('Thế giới');
                    @endphp
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <a href="/details/{{$news_world[0]['id']}}" class="h-100">
                                        <img src="{{$news_world[0]['rootImage']}}" class="img-fluid h-100 " alt="">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                <div>
                                    <a href="/details/{{$news_world[0]['id']}}">{{$news_world[0]['name']}}</a>
                                    <p class="ab">{{$news_world[0]['shortDescription']}}</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="/details/{{$news_world[1]['id']}}">{{$news_world[1]['name']}}</a>
                                <p class="ab">{{$news_world[1]['shortDescription']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tin thế giới -->
                <!-- tin kinh doanh -->
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k" >Kinh Doanh</a></li>
                    </ul>
                    @php  
                        $news = App\Http\Controllers\PostController::getpost('Kinh doanh');
                    @endphp
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <a href="/details/{{$news[0]['id']}}" class="h-100">
                                        <img src="{{$news[0]['rootImage']}}" class="img-fluid h-100 " alt="">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                <div>
                                    <a href="/details/{{$news[0]['id']}}">{{$news[0]['name']}}</a>
                                    <p class="ab">{{$news[0]['shortDescription']}}</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="/details/{{$news[1]['id']}}">{{$news[1]['name']}}</a>
                                <p class="ab">{{$news[1]['shortDescription']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tin kihnh doanh -->
                <!-- tin thời sự -->
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k" >Thời sự</a></li>
                    </ul>
                    @php  
                        $news = App\Http\Controllers\PostController::getpost('Thời sự');
                    @endphp
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <a href="/details/{{$news[0]['id']}}" class="h-100">
                                        <img src="{{$news[0]['rootImage']}}" class="img-fluid h-100 " alt="">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                <div>
                                    <a href="/details/{{$news[0]['id']}}">{{$news[0]['name']}}</a>
                                    <p class="ab">{{$news[0]['shortDescription']}}</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="/details/{{$news[1]['id']}}">{{$news[1]['name']}}</a>
                                <p class="ab">{{$news[1]['shortDescription']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tin thời sự -->
                <!-- tin podcasts -->
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k" >Đời sống</a></li>
                    </ul>
                    @php  
                        $news = App\Http\Controllers\PostController::getpost('Đời sống');
                    @endphp
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <a href="/details/{{$news[0]['id']}}" class="h-100">
                                        <img src="{{$news[0]['rootImage']}}" class="img-fluid h-100 " alt="">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                <div>
                                    <a href="/details/{{$news[0]['id']}}">{{$news[0]['name']}}</a>
                                    <p class="ab">{{$news[0]['shortDescription']}}</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="/details/{{$news[1]['id']}}">{{$news[1]['name']}}</a>
                                <p class="ab">{{$news[1]['shortDescription']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tin podcasts -->
                <!-- tin giải trí -->
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k" >Giải trí</a></li>
                    </ul>
                    @php  
                        $news = App\Http\Controllers\PostController::getpost('Giải trí');
                    @endphp
                    <div class="row ">
                        <div class="col-md-8 br">
                            <div class="row">
                                <div class="col-md-6" style="padding-right: 0;">
                                    <a href="/details/{{$news[0]['id']}}" class="h-100">
                                        <img src="{{$news[0]['rootImage']}}" class="img-fluid h-100 " alt="">
                                    </a>
                                </div>
                                <div class="col-md-6">
                                <div>
                                    <a href="/details/{{$news[1]['id']}}">{{$news[0]['name']}}</a>
                                    <p class="ab">{{$news[0]['shortDescription']}}</p>
                                </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div>
                                <a href="/details/{{$news[0]['id']}}">{{$news[1]['name']}}</a>
                                <p class="ab">{{$news[1]['shortDescription']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tin giải trí -->
            </div>
        </div>
        <div class="row bt py-3">
            <div class="col-md-12 pl-0">
                <ul class="ti-ul">
                    <li><a href="/category/domestic" class="a-k">Tin trong nước</a></li>
                </ul>
            </div>
            @php  
                $news_dometic = App\Http\Controllers\PostController::DomesticPost();
            @endphp
            <div class="col-md-6 pl-0">
                <div class="bt pb-3">
                    <div class="row ">
                        <div class="col-md-12 br">
                            <div class="row">
                                <a href="/details/{{$news_dometic[1]['id']}}" class="col-md-3" style="padding-right: 0;">
                                    <div class="h-100">
                                        <img src="{{$news_dometic[1]['rootImage']}}" class="img-fluid h-100 " alt="">
                                    </div>
                                </a>
                                <div class="col-md-9">
                                   <div>
                                        <a href="/details/{{$news_dometic[1]['id']}}" class="row2-title" >{{$news_dometic[1]['name']}}</a>
                                        <p class="ab">{{$news_dometic[1]['shortDescription']}}</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="row">
                            <a href="/details/{{$news_dometic[2]['id']}}" class="col-md-3" style="padding-right: 0;">
                                <div class="h-100">
                                    <img src="{{$news_dometic[2]['rootImage']}}" class="img-fluid h-100 " alt="">
                                </div>
                            </a>
                            <div class="col-md-9">
                               <div>
                                <a href="/details/{{$news_dometic[2]['id']}}" class="row2-title" >{{$news_dometic[2]['name']}}</a>
                                <p class="ab">{{$news_dometic[2]['shortDescription']}}</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bt py-3">
            <div class="col-md-6 pl-0">
                <div class="bt pb-3">
                    <div class="row ">
                        <div class="col-md-12 br">
                            <div class="row">
                                <a href="/details/{{$news_dometic[3]['id']}}" class="col-md-3" style="padding-right: 0;">
                                    <div class="h-100">
                                        <img src="{{$news_dometic[3]['rootImage']}}" class="img-fluid h-100 " alt="">
                                    </div>
                                </a>
                                <div class="col-md-9">
                                   <div>
                                        <a href="/details/{{$news_dometic[3]['id']}}" class="row2-title" >{{$news_dometic[3]['name']}}</a>
                                        <p class="ab">{{$news_dometic[3]['shortDescription']}}</p>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row ">
                    <div class="col-md-12 ">
                        <div class="row">
                            <a href="/details/{{$news_dometic[4]['id']}}" class="col-md-3" style="padding-right: 0;">
                                <div class="h-100">
                                    <img src="{{$news_dometic[4]['rootImage']}}" class="img-fluid h-100 " alt="">
                                </div>
                            </a>
                            <div class="col-md-9">
                               <div>
                                <a href="/details/{{$news_dometic[4]['id']}}" class="row2-title" >{{$news_dometic[4]['name']}}</a>
                                <p class="ab">{{$news_dometic[4]['shortDescription']}}</p>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="row bt py-3">
            <div class="col-4 pl-0 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/huy-7327-1670472720-4642-1670472801.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=oeKkEbBrkTEAoh1zpHV0zQ" class="img-fluid" alt="">
                        <a href="">Đề xuất nghiên cứu bổ sung quy hoạch 9 sân bay mới</a>
                        <p>Cục Hàng không Việt Nam vừa đề xuất Bộ Giao thông Vận tải tiếp tục nghiên cứu, đưa vào quy hoạch 9 sân bay mới khi đủ điều kiện. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/09/tau-dau-iran-1670545360-4950-1670545561.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=ok2L2G1BUIvcmdqbF2164w" class="img-fluid" alt="">
                        <a href="">Mỹ trừng phạt doanh nhân mua bán dầu Iran</a>
                        <p>Bộ Tài chính Mỹ áp lệnh trừng phạt doanh nhân Thổ Nhĩ Kỳ và cấm vận 20 công ty dưới quyền ông vì cáo buộc mua bán dầu Iran. </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 br">
                <div class="bt pb-3">
                    <ul class="ti-ul">
                        <li><a href="" class="a-k">Kinh doanh</a></li>
                    </ul>
                    <div>
                        <img src="https://i1-vnexpress.vnecdn.net/2022/12/08/huy-7327-1670472720-4642-1670472801.jpg?w=380&h=228&q=100&dpr=1&fit=crop&s=oeKkEbBrkTEAoh1zpHV0zQ" class="img-fluid" alt="">
                        <a href="">Đề xuất nghiên cứu bổ sung quy hoạch 9 sân bay mới</a>
                        <p>Cục Hàng không Việt Nam vừa đề xuất Bộ Giao thông Vận tải tiếp tục nghiên cứu, đưa vào quy hoạch 9 sân bay mới khi đủ điều kiện. </p>
                    </div>
                </div>
            </div>
        </div> -->
    </div>
    <!--end main-->
@endsection