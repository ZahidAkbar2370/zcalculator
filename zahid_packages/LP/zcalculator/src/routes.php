<?php

use Illuminate\Support\Facades\Route;

Route::get("calculator",function(){
    echo "Hello From CWZ Calculator";
});


Route::get("add/{a}/{b}", [LP\zcalculator\CalculatorController::class, "add"]);
Route::get("subtract/{a}/{b}", [LP\zcalculator\CalculatorController::class, "subtract"]);