<?php

/*
 * This file is part of the Antvel Shop package.
 *
 * (c) Gustavo Ocanto <gustavoocanto@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->increments('id');

            //Profile information
            $table->string('name', 100);
            $table->longText('description');
            $table->string('email', 100)->unique();
            $table->string('logo', 100)->nullable();
            $table->string('slogan', 100)->nullable();
            $table->string('theme', 50)->nullable();
            $table->boolean('status')->default(1);

            //Contact information
            $table->string('contact_email', 100)->unique();
            $table->string('sales_email', 100)->unique();
            $table->string('support_email', 100)->unique();
            $table->string('phone_number', 20)->nullable();
            $table->string('cell_phone', 20)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('state', 100)->nullable();
            $table->string('city', 100)->nullable();
            $table->string('zip_code', 20)->nullable();

            //Social information
            $table->string('website', 150);
            $table->string('twitter', 100)->nullable();
            $table->string('facebook', 100)->nullable();
            $table->string('facebook_app_id', 50)->nullable();
            $table->string('google_plus', 100)->nullable();
            $table->string('google_maps_key_api', 50)->nullable();

            //SEO information
            $table->longText('keywords');

            //CMS information
            $table->longText('about_us');
            $table->longText('refund_policy');
            $table->longText('privacy_policy');
            $table->longText('terms_of_service');

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('companies');
    }
}
