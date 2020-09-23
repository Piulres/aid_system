<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToDocumentsTable extends Migration
{
    public function up()
    {
        Schema::table('documents', function (Blueprint $table) {
            $table->unsignedInteger('project_id')->nullable();
            $table->foreign('project_id', 'project_fk_2252310')->references('id')->on('projects');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2252472')->references('id')->on('teams');
        });
    }
}
