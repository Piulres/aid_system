<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToProjectsTable extends Migration
{
    public function up()
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->unsignedInteger('client_id')->nullable();
            $table->foreign('client_id', 'client_fk_2252295')->references('id')->on('clients');
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_2252299')->references('id')->on('project_statuses');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2252470')->references('id')->on('teams');
        });
    }
}
