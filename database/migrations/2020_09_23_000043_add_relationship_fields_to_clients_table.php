<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToClientsTable extends Migration
{
    public function up()
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->unsignedInteger('status_id')->nullable();
            $table->foreign('status_id', 'status_fk_2252289')->references('id')->on('client_statuses');
            $table->unsignedInteger('team_id')->nullable();
            $table->foreign('team_id', 'team_fk_2252469')->references('id')->on('teams');
        });
    }
}
