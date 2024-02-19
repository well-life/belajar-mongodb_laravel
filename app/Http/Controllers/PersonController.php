<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PersonController extends Controller
{
    //
    public function index()
    {
        $title = "Person";
        $persons = Person::all();
        return view('person.index', compact('persons', 'title'));
    }

    public function create()
    {
        $title = "Add";
        return view('person.create', compact('title'));
    }

    public function show(Person $person)
    {
        return view('person.show', compact('person'));
    }

    public function store(Request $request)
    {
        $request->validate([
            "name" => "required",
            "position" => "required",
            "salary" => "required",
            "contact_code" => "required",
            "gender" => "required"
        ]);

        Person::create($request->all());
        return redirect('person');
    }

    public function edit(Person $person)
    {
        $title = "Edit";
        return view('person.edit', compact('person', 'title'));
    }

    public function update(Person $person, Request $request)
    {
        $request->validate([
            "name" => "required",
            "position" => "required",
            "salary" => "required",
            "contact_code" => "required",
            "gender" => "required"
        ]);
        $person->update($request->all());
        return redirect('person');
    }

    public function destroy(Person $person)
    {
        $person->delete();
        return redirect('person');
    }
}
