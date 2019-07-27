<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Schema table name to migrate
     * @var string
     */
    public $set_schema_table = 'users';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this -> set_schema_table, function (Blueprint $table) {
            $table -> increments('id');
            $table -> string('name');
            $table -> string('phone_number') -> unique();
            $table -> string('email') -> nullable();

            $table -> integer('role_id') -> default(0); // 0 - user / 1 - profesor / doctor / 2 - admin / 3 - detinator de farmacie
            $table -> integer('target') -> nullable(); // 1 - slabit / 2 -mentinere / 3 - pune masa
            $table -> string('language') -> default('Romanian'); // Romanian / English
            $table -> string('city') -> nullable();
            $table -> string('country') -> nullable(); // sau 'Alta';
            $table -> tinyInteger('gender') -> nullable(); // 1 - barbat / 2 - femeie
            $table -> integer('age') -> nullable(); // ani
            $table -> string('code') -> nullable(); // cod 
            $table -> longText('password') -> nullable(); // parola
            $table -> integer('weight') -> nullable(); // kg
            $table -> integer('height') -> nullable(); // cm
            $table -> integer('lifestyle') -> nullable(); // 1 - sedentar / 2 - normal / 3 - sportiv / 4 - atlet
            $table -> timestamps();
            $table -> softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this -> set_schema_table);
    }
}
