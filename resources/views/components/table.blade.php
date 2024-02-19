@if (isset($persons))
    <tbody>
        @foreach ($persons as $person)
            <tr>

                <td><a style="text-decoration: none; color:white"
                        href="{{ route('person.show', $person->id) }}">{{ $person->name }}</a></td>
                <td>{{ ucfirst($person->gender) }}</td>
                <td>{{ $person->position }}</td>
                <td>{{ $person->salary }}</td>
                <td style="display: flex; align-items: center;">
                    <a style="text-decoration: none" href="{{ route('person.edit', $person->id) }}"><button
                            class="btn-primary" style="margin-right: 3px">
                            Edit</button></a>
                    <form method="POST" action="{{ route('person.destroy', $person->id) }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn-secondary" type="submit">Delete</button>

                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@elseif (isset($contacts))
    <tbody>
        @foreach ($contacts as $contact)
            <tr>

                <td>{{ $contact->person->name }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td style="display: flex; align-items: center;">
                    <a style="text-decoration: none" href="{{ route('contact.edit', $contact->id) }}"><button
                            class="btn-primary" style="margin-right: 3px">
                            Edit</button></a>
                    <form method="POST" action="{{ route('contact.destroy', $contact->id) }}">
                        @method('DELETE')
                        @csrf
                        <button class="btn-secondary" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
@endif
