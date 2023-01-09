<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('image')->insert(
            array(
                'title' => 'Lực lượng công binh Quân khu 9 tại hiện trường, sáng 4/1. Ảnh: Ngọc Tài',
                'link' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/00825203c08d18d3419c-167282792-4519-7453-1672832148.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=dd1z5oJGGe0i2_WzqXUGKQ',
                'post_id' => '1'
            )
        );

        DB::table('image')->insert(
            array(
                'title' => 'Anh Thái Văn Tấn Tài (40 tuổi, cha Hạo Nam) ngóng chờ con ở hiện trường trong những ngày qua. Ảnh: Hoàng Nam',
                'link' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/c156c9e63371eb2fb260-167283344-4897-5584-1672834686.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=8H0fys0pSpBwGBHbrN4sCw',
                'post_id' => '1'
            )
        );

        DB::table('image')->insert(
            array(
                'title' => 'Chị Nguyễn Thị Mỹ Linh trong căn nhà của mình ở xã Phú Lợi, huyện Thanh Bình, hôm 2/1, sau ba ngày con trai rơi xuống cọc bêtông ở công trường xây cầu. Ảnh: Ngọc Tài',
                'link' => 'https://i1-vnexpress.vnecdn.net/2023/01/04/me-be-1-1672829020-3686-1672832148.jpg?w=680&h=0&q=100&dpr=1&fit=crop&s=uX9f4P8ofeAY_DGcRSWEZQ',
                'post_id' => '1'
            )
        );

        /* id2 */
        DB::table('image')->insert(
            array(
                'title' => 'Những cuốn sách mà con chị Mai không sử dụng. Ảnh: Thanh Hằng',
                'link' => 'https://i1-vnexpress.vnecdn.net/2022/12/30/1be8247492ac4af213bd-1566-1672400771.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=jw3QTAblFiuZkjvFwOG7oQ',
                'post_id' => '2'
            )
        );

        DB::table('image')->insert(
            array(
                'title' => 'Một số sách năm nay mà con chị Liễu vẫn chưa sử dụng, dù học kỳ I đã trôi qua. Ảnh: Thanh Hằng',
                'link' => 'https://i1-vnexpress.vnecdn.net/2022/12/30/322163132-1571180533295573-422-2098-8380-1672400771.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=ldhNVV1zHoeEyt670-1dNQ',
                'post_id' => '2'
            )
        );

        DB::table('image')->insert(
            array(
                'title' => 'Vốn hóa Amazon trong hơn một năm qua. Đồ thị: Bloomberg',
                'link' => 'https://i1-kinhdoanh.vnecdn.net/2022/11/10/amazon-cap-png-1668066880-1668-5503-8173-1668067026.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=XdBd51MhT-_SAwNXGae9lw',
                'post_id' => '3'
            )
        );

        DB::table('image')->insert(
            array(
                'title' => 'Lấy lại tiền lì xì vì bị chê ít. Ảnh minh họa',
                'link' => 'https://i1-giadinh.vnecdn.net/2022/12/28/307517829-506594918144087-6124-3100-9589-1672218963.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=RrbaC-T5G7N2ZpcRPnKXOA',
                'post_id' => '4'
            )
        );

        DB::table('image')->insert(
            array(
                'title' => 'Cục diện chiến sự Ukraine. Đồ họa: WP.',
                'link' => 'https://i1-vnexpress.vnecdn.net/2023/01/06/556318717813726673a-Ukraine-Ng-3008-2981-1672970325.jpg?w=1020&h=0&q=100&dpr=1&fit=crop&s=1u1JLIrCoYijxq2xY1WTWQ',
                'post_id' => '5'
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
