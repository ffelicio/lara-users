<?php

namespace LaraUsers\Http\Controllers\Api;

use LaraUsers\Http\Controllers\Controller;
use LaraUsers\Http\Requests\UserRequest;
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

    public function create(UserRequest $request, Response $response)
    {
        try {
            $user = $this->userRepository->create($request->all());
        } catch (\LaraUsers\Exceptions\ModelNotFoundException $exception) {
            return $response->setStatusCode($exception->getCode())
                            ->setContent($exception->getBody());
        }
        return $response->setStatusCode(201)->setContent($user);
    }

    public function edit($id, Response $response)
    {
        try {
            $user = $this->userRepository->getById((int)$id);
        } catch (\LaraUsers\Exceptions\ModelNotFoundException $exception) {
            return $response->setStatusCode($exception->getCode())
                            ->setContent($exception->getBody());
        }
        return $response->setStatusCode(200)->setContent($user);
    }

    public function update($id, UserRequest $request, Response $response)
    {
        try {
            $user = $this->userRepository->update((int)$id, $request->all());
        } catch (\LaraUsers\Exceptions\ModelNotFoundException $exception) {
            return $response->setStatusCode($exception->getCode())
                            ->setContent($exception->getBody());
        }
        return $response->setStatusCode(204);
    }

    public function destroy($id, Response $response)
    {
        try {
            $this->userRepository->destroy((int)$id);
        } catch (\LaraUsers\Exceptions\ModelNotFoundException $exception) {
            return $response->setStatusCode($exception->getCode())
                            ->setContent($exception->getBody());
        }
        return $response->setStatusCode(204);
    }
}
