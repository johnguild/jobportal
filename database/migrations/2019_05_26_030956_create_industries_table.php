<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Models\Industry;

class CreateIndustriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title', 190)->default('');
            $table->timestamps();
        });

        Industry::create(['title'=>'Advertising / PR']);
        Industry::create(['title'=>'Aerospace / Defense']);
        Industry::create(['title'=>'Agriculture']);
        Industry::create(['title'=>'Architecture']);
        Industry::create(['title'=>'Real state and Property management']);
        Industry::create(['title'=>'IT-Hardware']);
        Industry::create(['title'=>'IT-Software']);
        Industry::create(['title'=>'Consultancy and Management services']);
        Industry::create(['title'=>'Design']);
        Industry::create(['title'=>'Education']);
        Industry::create(['title'=>'Energy / Utilities']);
        Industry::create(['title'=>'Engineering / Construction']);
        Industry::create(['title'=>'Entertainment / Sports']);
        Industry::create(['title'=>'Banking and Financial services']);
        Industry::create(['title'=>'Health / Nutrition']);
        Industry::create(['title'=>'Hospitality']);
        Industry::create(['title'=>'Human Resources']);
        Industry::create(['title'=>'Internet / New Media']);
        Industry::create(['title'=>'Journalism/Publishing']);
        Industry::create(['title'=>'Legal services']);
        Industry::create(['title'=>'Leisure / Fitness / Travel']);
        Industry::create(['title'=>'Manufacturing']);
        Industry::create(['title'=>'Non-Profit / Government']);
        Industry::create(['title'=>'Professional Services']);
        Industry::create(['title'=>'Raw Materials']);
        Industry::create(['title'=>'Retail / Wholesale & Distribution']);
        Industry::create(['title'=>'Telecommunications']);
        Industry::create(['title'=>'Performing arts']);
        Industry::create(['title'=>'Transportation / Logistics']);
        Industry::create(['title'=>'Other']);
        Industry::create(['title'=>'BPO / Call center']);
        Industry::create(['title'=>'Media / Broadcasting']);
        Industry::create(['title'=>'Automotive']);
        Industry::create(['title'=>'Chemicals']);
        Industry::create(['title'=>'Consumer Products']);
        Industry::create(['title'=>'Food & Food Services']);
        Industry::create(['title'=>'Mining & Extraction']);
        Industry::create(['title'=>'NGO (non-government organization)']);
        Industry::create(['title'=>'Pharmaceuticals']);
        Industry::create(['title'=>'Semi-Conductors']);
        Industry::create(['title'=>'Textile / Apparel']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('industries');
    }
}
