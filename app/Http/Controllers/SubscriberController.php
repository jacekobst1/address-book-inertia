<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response;
use App\Services\SubscriberService;

class SubscriberController extends Controller
{
    private SubscriberService  $service;

    public function __construct(SubscriberService $service) {
        $this->service = $service;
    }

    public function index(): Response
    {
        return $this->service->index();
    }

    public function create()
    {
        return $this->service->create();
    }

    public function store(SaveSubscriberRequest $request): Response
    {
        $this->service->store($request->validated());
        return $this->service->index();
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
