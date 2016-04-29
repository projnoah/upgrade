<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVersionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('versions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('version');
            $table->boolean('beta');
            $table->text('description');
            $table->timestamps();
        });
        
        \App\Version::create([
            'version' => '0.1.0',
            'beta' => true
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('versions');
    }
}
