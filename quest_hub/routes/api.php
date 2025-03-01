<?php
use App\Http\Controllers\InterestController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\UserAccountController;
use App\Http\Controllers\AdventureController;
use App\Http\Controllers\CharacterController;
use App\Http\Controllers\GroupController;

Route::apiResource('interests', InterestController::class);
Route::apiResource('experiences', ExperienceController::class);
Route::apiResource('user-accounts', UserAccountController::class);
Route::apiResource('adventures', AdventureController::class);
Route::apiResource('characters', CharacterController::class);
Route::apiResource('groups', GroupController::class);
