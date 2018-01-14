<?php

namespace LaraUsers\Http\Controllers\Api;

use LaraUsers\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

use LaraUsers\Domain\User\UserRepository;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function all(Response $response)
    {
        try {
            $users = $this->userRepository->all();
        } catch (\LaraUsers\Exceptions\ModelNotFoundException $exception) {
            return $response->setStatusCode($exception->getCode())
                            ->setContent($exception->getBody());
        }
        return $response->setStatusCode(200)->setContent($users);
    }

    public function show($id, Request $request)
    {
        dd($id);
    }

    public function edit($id, Request $request)
    {
        dd($id);
    }
}
