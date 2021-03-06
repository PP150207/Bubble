<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('upload_image', function (Blueprint $table) {
            $table->dropColumn('file_path');
            $table->dropColumn('file_name');
            $table->renameColumn('title', 'subtitle');
            $table->renameColumn('image_title', 'title');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('upload_image', function (Blueprint $table) {
            //
        });
    }
}
