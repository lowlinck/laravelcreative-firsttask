<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fertilizers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->float('azot_norm');
            $table->float('phosphor_norm');
            $table->float('kali_norm');
            $table->unsignedBigInteger('culture_id');
            $table->string('rigeon');
            $table->float('price');
            $table->string('description');
            $table->string('purpose');
            $table->timestamps();

            $table->index('culture_id', 'culture_fertilizers_idx');
            $table->foreign('culture_id', 'culture_fertilizers_fk')->on('cultures')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fertilizers');
    }
};
