<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

class InsertIntoCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        DB::table('category')->insert(
            array(
                'name' => 'Thời sự'
            )
        );

        DB::table('category')->insert(
            array(
                'name' => 'Giáo dục'
            )
        );

        DB::table('category')->insert(
            array(
                'name' => 'Kinh doanh'
            )
        );

        DB::table('category')->insert(
            array(
                'name' => 'Podcasts'
            )
        );
        
        DB::table('category')->insert(
            array(
                'name' => 'Giải trí'
            )
        );

        DB::table('category')->insert(
            array(
                'name' => 'Thế giới'
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
