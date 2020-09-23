<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToContentCategoriesTable extends Migration
{
    public function up()
    {
        Schema::table('content_categories', function (Blueprint $table) {
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2252430')->references('id')->on('teams');
        });
    }
}
