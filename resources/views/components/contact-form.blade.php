@if (!isset($contact))
@else
    <form class="requires-validation" method="POST" action="{{ route('contact.update', $contact->id) }}">
        @method('PUT')
        @csrf
        <div>
            <input class="form-control" type="text" name="code" placeholder="Code" value="{{ $contact->name }}"
                required>
        </div>
        <div>
        </div>
        <div>
            <input class="form-control" type="text" name="email" placeholder="Email" value="{{ $contact->email }}"
                required>
        </div>

        <div class="col-md-12">
            <input class="form-control" type="text" name="phone" placeholder="Phone" value="{{ $contact->phone }}"
                required>
        </div>

        <div class="col-md-12">
            <input class="form-control" type="text" name="address" placeholder="Address"
                value="{{ $contact->address }}" required>
        </div>

        <div class="form-button">
            <button id="submit" type="submit" class="btn btn-primary">Submit</button>
            <button class="btn btn-secondary" onclick="goBack()">Cancel</button>
            <script>
                function goBack() {
                    window.history.back();
                }
            </script>
        </div>
    </form>
@endif
