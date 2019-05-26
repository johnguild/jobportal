<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Sector;

class CreateSectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title', 150)->default('');
            $table->timestamps();
        });

        Sector::create(['title'=>'Accounting / Finance']);
        Sector::create(['title'=>'Administrative / Clerical']);
        Sector::create(['title'=>'Call Center / Customer Service']);
        Sector::create(['title'=>'Computers / Telecommunication']);
        Sector::create(['title'=>'Construction']);
        Sector::create(['title'=>'Design / Arts / Media']);
        Sector::create(['title'=>'Education / University']);
        Sector::create(['title'=>'Engineering / Technical']);
        Sector::create(['title'=>'General Services, Cleaning and Security']);
        Sector::create(['title'=>'Healthcare / Medical']);
        Sector::create(['title'=>'Hospitality / Catering']);
        Sector::create(['title'=>'Human Resources']);
        Sector::create(['title'=>'Legal / Consulting']);
        Sector::create(['title'=>'Logistics / Transport']);
        Sector::create(['title'=>'Management']);
        Sector::create(['title'=>'Marketing, Advertising & Communication']);
        Sector::create(['title'=>'Purchasing / Foreign trade']);
        Sector::create(['title'=>'QA / Research']);
        Sector::create(['title'=>'Repair and Maintenance']);
        Sector::create(['title'=>'Sales']);
        Sector::create(['title'=>'Skilled labour / Trades']);
        Sector::create(['title'=>'Travel, Leisure / Tourism']);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectors');
    }
}
