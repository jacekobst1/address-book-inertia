<?php

namespace App\Http\Controllers;

use App\Http\Requests\SaveSubscriberRequest;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;
use App\Services\SubscriberService;

class SubscriberController extends Controller
{
    private SubscriberService  $service;

    public function __construct(SubscriberService $service) {
        $this->service = $service;
    }

    public function index(): InertiaResponse
    {
        return $this->service->index();
    }

    public function create()
    {
        return $this->service->create();
    }

    public function store(SaveSubscriberRequest $request): InertiaResponse
    {
        $this->service->store($request->validated());
        return $this->service->index();
    }

    public function edit(Subscriber $subscriber): InertiaResponse
    {
        return $this->service->edit($subscriber);
    }

    public function update(Subscriber $subscriber, SaveSubscriberRequest $request): InertiaResponse
    {
        $this->service->update($subscriber, $request->validated());
        return $this->service->index();
    }

    public function destroy($id)
    {
        //
    }
}
