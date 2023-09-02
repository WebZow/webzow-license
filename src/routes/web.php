<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::get('webzow-license-check', 'WebZow\\LicController@licenseCheck');
});