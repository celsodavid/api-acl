<?php

use Illuminate\Support\Facades\Route;

Route::get('/', static fn () => response()->json(['message' => 'ok']));
