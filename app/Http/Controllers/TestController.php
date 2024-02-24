<?php

namespace App\Http\Controllers;

use App\Actions\Tests\CreateTestAction;
use App\Actions\Tests\DeleteTestAction;
use App\Actions\Tests\GetTestAction;
use App\Actions\Tests\GetTestsAction;
use App\Actions\Tests\UpdateTestAction;
use App\Actions\Users\DeleteManagerAction;
use App\Actions\Users\GetManagersAction;
use App\Dto\Test\TestDto;
use App\Http\Requests\Test\TestCreateRequest;
use App\Http\Requests\Test\TestUpdateRequest;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * @param GetTestsAction $action
     * @return View
     */
    public function index(GetTestsAction $action): View
    {
        return view('tests.index', ['tests' => $action->execute()]);
    }

    /**
     * @param GetManagersAction $getManagersAction
     * @return View
     */
    public function create(GetManagersAction $getManagersAction): View
    {
        $managers = $getManagersAction->execute();

        return view('tests.create', ['managers' => $managers]);
    }

    /**
     * @param TestCreateRequest $request
     * @param CreateTestAction $action
     * @return RedirectResponse
     */
    public function store(TestCreateRequest $request, CreateTestAction $action): RedirectResponse
    {
        $dto = TestDto::fromRequest($request);
        $action->execute($dto);

        return redirect()->route('tests.index');
    }

    /**
     * @param string $id
     * @param GetTestAction $action
     * @return View
     */
    public function show(string $id, GetTestAction $action): View
    {
        return view('tests.show', ['test' => $action->execute($id)]);
    }

    /**
     * @param string $id
     * @param GetTestAction $action
     * @param GetManagersAction $getManagersAction
     * @return View
     */
    public function edit(string $id, GetTestAction $action, GetManagersAction $getManagersAction): View
    {
        $managers = $getManagersAction->execute();

        return view('tests.edit', ['test' => $action->execute($id), 'managers' => $managers]);
    }

    /**
     * @param TestUpdateRequest $request
     * @param UpdateTestAction $action
     * @return RedirectResponse
     */
    public function update(TestUpdateRequest $request, UpdateTestAction $action): RedirectResponse
    {
        $dto = TestDto::fromRequest($request);
        $action->execute($request->id, $dto);

        return redirect()->route('tests.index');
    }

    /**
     * @param int $id
     * @param DeleteTestAction $action
     * @return RedirectResponse
     */
    public function delete(int $id, DeleteTestAction $action): RedirectResponse
    {
        $action->execute($id);

        return redirect()->route('tests.index');
    }
}
