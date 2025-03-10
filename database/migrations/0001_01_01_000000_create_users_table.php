<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->enum('departement', ['Dinas Kependudukan dan Pencatatan Sipil', 'B', 'C']); // Replace with actual enum values
            $table->enum('education', ['SD', 'SMP', 'SMA', 'S-1']); // Replace with actual enum values
            $table->enum('field', ['IT', 'HR', 'Finance']); // Replace with actual enum values
            $table->string('leader'); // Replace with actual enum values
            $table->enum('rank', ['Junior', 'Senior']); // Replace with actual enum values
            $table->enum('eselon', ['I', 'II', 'III']); // Replace with actual enum values
            $table->enum('position', ['Staff', 'Head']); // Replace with actual enum values
            $table->string('name');
            $table->bigInteger('nip')->unique();
            $table->date('tanggal_lahir');
            $table->string('pendidikan');
            $table->integer('telepon');
            $table->string('jabatan');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->integer('level');
            $table->string('remember_token')->nullable();
            $table->string('password');
            $table->date('date_spmt');
            $table->date('date_tmt_pangkat');
            $table->date('date_tmt_eselon');
            $table->enum('roles', ['admin', 'user', 'manager']); // Replace with actual enum values
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
