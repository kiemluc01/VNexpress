<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoPostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('post')->insert(
            array(
                'name' => 'Bé trai kẹt trong cọc bê tông tử vong',
                'rootImage' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/00825203c08d18d3419c-167282792-4519-7453-1672832148.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=dd1z5oJGGe0i2_WzqXUGKQ',
                'shortDescription' => 'ĐỒNG THÁP Em Thái Lý Hạo Nam, 10 tuổi, bị kẹt bốn ngày trong cọc bêtông sâu 35 m ở công trình cầu tại xã Phú Lợi, huyện Thanh Bình, đã tử vong.',
                'category_id' => '1',
                'domestic' => true
            )
        );

        DB::table('post')->insert(
            array(
                'name' => 'Những cuốn sách phải mua nhưng không dùng',
                'rootImage' => 'https://i1-vnexpress.vnecdn.net/2022/12/30/1be8247492ac4af213bd-1566-1672400771.jpg?w=0&h=0&q=100&dpr=2&fit=crop&s=-TIJx0gh6fmowohM9oBdJw',
                'shortDescription' => 'Tháng 8 năm 2022, trước khi con trai bước vào năm học mới, chị Phương, sống tại Hà Nam, bất ngờ khi nhận được danh mục sách lớp 5 khoảng 14 cuốn, giá gần 290.000 đồng. Số sách và tiền này ít hơn nhiều so với bộ sách 28 cuốn giá 675.000 đồng mà chị đã đăng ký với giáo viên trong buổi họp phụ huynh cách đó hơn 2 tháng.',
                'category_id' => '2',
                'domestic' => true
            )
        );

        DB::table('post')->insert(
            array(
                'name' => 'Vốn hóa Apple bốc hơi 1.000 tỷ USD sau một năm',
                'rootImage' => 'https://media.doanhnghiephoinhap.vn/uploads/2022/12/30/depositphotos-45177201-xl-2015-1-1109-1-1672333724.jpg',
                'shortDescription' => 'Sau khi đạt mốc 3.000 tỷ USD năm ngoái, vốn hóa của Apple sau phiên giao dịch hôm qua (3/1) đã xuống dưới 2.000 tỷ USD.',
                'category_id' => '3'
            )
        );

        DB::table('post')->insert(
            array(
                'name' => 'Lấy lại tiền lì xì vì bị chê ít',
                'rootImage' => 'https://i1-giadinh.vnecdn.net/2022/12/28/307517829-506594918144087-6124-3100-9589-1672218963.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=RrbaC-T5G7N2ZpcRPnKXOA',
                'shortDescription' => 'Nghe đứa cháu ruột nói với mẹ cậu mợ mừng tuổi có 20 nghìn bọ, tôi lập tức lấy lại số tiền và dạy cho cháu một bài học.',
                'category_id' => '4',
                'domestic' => true
            )
        );

          DB::table('post')->insert(
            array(
                'name' => 'Ông Phạm Bình Minh, Vũ Đức Đam rời ghế Phó thủ tướng',
                'rootImage' => 'https://i1-vnexpress.vnecdn.net/2023/01/05/PBM-2261-1613614545-7962-16722-7037-6959-1672908724.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=d5zSDeT8aI38gtfvH-hxJA',
                'shortDescription' => 'Thủ tướng trình Quốc hội xem xét, phê chuẩn miễn nhiệm chức vụ Phó thủ tướng nhiệm kỳ 2021-2026 đối với hai ông Phạm Bình Minh và Vũ Đức Đam.',
                'category_id' => '1',
                'domestic' => true
            )
        );
        
        DB::table('post')->insert(
            array(
                'name' => 'NATO cảnh báo không coi thường Nga',
                'rootImage' => 'https://i1-vnexpress.vnecdn.net/2023/01/06/5563187178137267558a-NATO-7658-1672966675.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=VnDTtGjOqGmVjhvDv_9EfA',
                'shortDescription' => 'Tổng thư ký NATO nhận định coi thường Nga là điều nguy hiểm khi họ sẵn sàng chấp nhận rủi ro và tổn thất lớn trong xung đột với Ukraine.',
                'category_id' => '6'
            )
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        
    }
}
