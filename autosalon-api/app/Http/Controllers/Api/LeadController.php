<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    // GET /api/leads  (Заявки + данные машины)
    public function index()
    {
        return Lead::with('car')->orderByDesc('created_at')->get();
    }

    // POST /api/leads (Создать заявку)
    public function store(Request $request)
    {
        $data = $request->validate([
            'car_id' => ['nullable', 'exists:cars,id'],
            'name'   => ['required', 'string', 'max:120'],
            'phone'  => ['required', 'string', 'max:40'],
            'email'  => ['nullable', 'email', 'max:120'],
            'message'=> ['nullable', 'string', 'max:500'],
        ]);

        $lead = Lead::create($data);

        // ВОТ ТУТ мы возвращаем заявку вместе с машиной (join-логика через with)
        return $lead->load('car');
    }
}

