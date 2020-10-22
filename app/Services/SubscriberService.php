<?php

namespace App\Services;

use App\Models\Subscriber;
use Inertia\Inertia;
use Inertia\Response;

class SubscriberService {

    public function index(): Response {
        return Inertia::render('Subscribers/Index', [
            'subscribers' => Subscriber::all(),
        ]);
    }

    public function create(): Response {
        return Inertia::render('Subscribers/Create', [
            'genderTypes' => Subscriber::genderTypes
        ]);
    }

    public function store(array $data): void {
        Subscriber::create($data);
    }
}
