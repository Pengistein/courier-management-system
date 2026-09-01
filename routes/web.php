<?php


use App\Http\Controllers\formcontroller;
use Illuminate\Support\Facades\Route;


Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
});



Route::get('/admin/couriers', function () {
    return view('admin.couriers.index');
});

Route::get('/admin/couriers/create', function () {
    return view('admin.couriers.create');
});

Route::get('/admin/couriers/1', function () {
    return view('admin.couriers.show');
});

Route::get('/admin/couriers/1/edit', function () {
    return view('admin.couriers.edit');
});



Route::get('/admin/agents', function () {
    return view('admin.agents.index');
});

Route::get('/admin/agents/create', function () {
    return view('admin.agents.create');
});

Route::get('/admin/agents/1/edit', function () {
    return view('admin.agents.edit');
});



Route::get('/admin/customers', function () {
    return view('admin.customer.index');
});

Route::get('/admin/customers/1', function () {
    return view('admin.customer.show');
});



Route::get('/admin/shipments', function () {
    return view('admin.shipments.index');
});

Route::get('/admin/shipments/create', function () {
    return view('admin.shipments.create');
});

Route::get('/admin/shipments/1', function () {
    return view('admin.shipments.show');
});