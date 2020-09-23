<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToNotesTable extends Migration
{
    public function up()
    {
        Schema::table('notes', function (Blueprint $table) {
            $table->unsignedInteger('project_id')->nullable();
            $table->foreign('project_id', 'project_fk_2252304')->references('id')->on('projects');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2252471')->references('id')->on('teams');
        });
    }
}
