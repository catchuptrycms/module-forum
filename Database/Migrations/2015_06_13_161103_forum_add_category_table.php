<?php

use Illuminate\Database\Migrations\Migration;

class ForumAddCategoryTable extends Migration
{

    public function __construct()
    {
        // Get the prefix
        $this->prefix = config('cms.forum.config.table-prefix', 'forum_');
    }

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $prefix = $this->prefix;
        $authModel = config('auth.model');

        Schema::create($prefix.'categories', function ($table) {
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('slug');
            $table->tinyInteger('order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $prefix = $this->prefix;

        Schema::drop($prefix.'categories');
    }
}
