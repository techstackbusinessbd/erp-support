<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateProfileRequest;
use App\Http\Resources\UserResource;
use App\Services\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function __construct(private ProfileService $profileService)
    {}

    public function show(Request $request)
    {
        $user = $request->user();
        $user->load('roles');
        return new UserResource($user);
    }

    public function update(UpdateProfileRequest $request)
    {
        $user = $this->profileService->updateProfile(
            $request->user(),
            $request->validated(),
            $request->file('profile_picture')
        );

        $user->load('roles');

        return response()->json([
            'message' => 'Profile updated successfully',
            'data' => new UserResource($user),
        ]);
    }
}
