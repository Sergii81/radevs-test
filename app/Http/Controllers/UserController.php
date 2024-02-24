<?php

namespace App\Http\Controllers;

use App\Actions\Users\CreateManagerAction;
use App\Actions\Users\DeleteManagerAction;
use App\Actions\Users\GetManagerAction;
use App\Actions\Users\GetManagersAction;
use App\Actions\Users\UpdateManagerAction;
use App\Dto\User\CreateManagerDto;
use App\Dto\User\UpdateManagerDto;
use App\Http\Requests\Manager\ManagerCreateRequest;
use App\Http\Requests\Manager\ManagerUpdateRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * @param GetManagersAction $action
     * @return View
     */
    public function index(GetManagersAction $action): View
    {
        return view('users.index', ['managers' => $action->execute()]);
    }

    /**
     * @return View
     */
    public function create(): View
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ManagerCreateRequest $request, CreateManagerAction $action): RedirectResponse
    {
        $dto = CreateManagerDto::fromRequest($request);
        $action->execute($dto);

        return redirect()->route('users.index');
    }

    /**
     * @param int $id
     * @param GetManagerAction $action
     * @return View
     */
    public function show(int $id, GetManagerAction $action): View
    {
        return view('users.show', ['manager' => $action->execute($id)]);
    }

    /**
     * @param int $id
     * @param GetManagerAction $action
     * @return View
     */
    public function edit(int $id, GetManagerAction $action): View
    {
        return view('users.edit', ['manager' => $action->execute($id)]);
    }

    /**
     * @param ManagerUpdateRequest $request
     * @param UpdateManagerAction $action
     * @return RedirectResponse
     */
    public function update(ManagerUpdateRequest $request, UpdateManagerAction $action): RedirectResponse
    {
        $dto = UpdateManagerDto::fromRequest($request);
        $action->execute($request->id, $dto);

        return redirect()->route('users.index');
    }

    /**
     * @param int $id
     * @param DeleteManagerAction $action
     * @return RedirectResponse
     */
    public function delete(int $id, DeleteManagerAction $action): RedirectResponse
    {
        $action->execute($id);

        return redirect()->route('users.index');
    }
}
