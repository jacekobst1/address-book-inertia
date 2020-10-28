<?php

namespace App\Services;

use App\Models\Subscriber;
use Inertia\Inertia;
use Inertia\Response as InertiaResponse;

class SubscriberService {

    public function index(): InertiaResponse {
        $subscribers = Subscriber::orderBy('last_name')
            ->orderBy('first_name')
            ->get();

        return Inertia::render('Subscribers/Index', [
            'subscribers' => $subscribers,
        ]);
    }

    public function create(): InertiaResponse {
        return Inertia::render('Subscribers/CreateEdit', [
            'genderTypes' => Subscriber::genderTypes,
        ]);
    }

    public function store(array $data): void {
        Subscriber::create($data);
    }

    public function edit(Subscriber $subscriber): InertiaResponse {
        return Inertia::render('Subscribers/CreateEdit', [
            'subscriber' => $subscriber,
            'genderTypes' => Subscriber::genderTypes,
        ]);
    }

    public function update(Subscriber  $subscriber, array $data): void {
        $subscriber->update($data);
    }

    public function destroy(Subscriber  $subscriber): void {
        $subscriber->delete();
    }
}
