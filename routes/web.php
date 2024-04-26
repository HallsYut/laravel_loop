<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('loop');
});

Route::get('/loopfor_detail/{item1}/{item2}/{item3}', function ($item1,$item2,$item3) {
    return view('loopfor_detail', array('loopfor'=>[$item1,$item2,$item3]));
}) ->name('loopfor_detail');

Route::get('/loopforeach_detail/{item1}/{item2}/{item3}', function($item1,$item2,$item3) {
    return view('loopforeach_detail', array('loopforeach'=>[$item1,$item2,$item3]));
})->name('loopforeach_detail');

Route::get('/loopforelse_detail/{item1}/{item2}/{item3}', function($item1,$item2,$item3) {
    return view('loopforelse_detail', array('loopforelse'=>[]));
})->name('loopforelse_detail');

Route::get('/loopwhile_detail/{item1}/{item2}/{item3}', function($item1,$item2,$item3) {
    return view('loopwhile_detail', array('loopwhile'=>[$item1,$item2,$item3]));
})->name('loopwhile_detail');