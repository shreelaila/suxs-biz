<?php

use App\Http\Controllers\UserListController;
use App\Models\UserList;
use Illuminate\Support\Facades\Route;

Route::any('manage-user-list', [UserListController::class, 'index'])->name('user.manage_user_lists');
Route::any('manage-user-add', [UserListController::class, 'addUser'])->name('user.manage_user_add');
Route::any('manage-user-edit', [UserListController::class, 'editUser'])->name('user.user_edit');
Route::any('manage-user-view', [UserListController::class, 'viewUser'])->name('user.user_view');
