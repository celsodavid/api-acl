<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PermissionUserController extends Controller
{
    public function __construct(private UserRepository $userRepository)
    {
    }

    public function syncPermissionOfUser(string $id, Request $request)
    {
        $response = $this->userRepository->syncPermissionOfUser($id, $request->permissions);
        if (!$response) {
            return response()->json(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }

        return response()->json(['message' => 'Permissions synced'], Response::HTTP_OK);
    }
}
