<x-person-layout :title="$title = 'Add Contact'">
    <div class="form-items">
        <h3>Input The Data Contact</h3>
        <p>Fill in the data below.</p>
        <form class="requires-validation" method="POST" action="{{ route('contact.store') }}">
            @csrf
            <div>
                <input class="form-control" type="text" name="code" placeholder="Code" required>
            </div>
            <div>
            </div>
            <div>
                <input class="form-control" type="text" name="email" placeholder="Email" required>
            </div>

            <div class="col-md-12">
                <input class="form-control" type="text" name="phone" placeholder="Phone" required>
            </div>

            <div class="col-md-12">
                <input class="form-control" type="text" name="address" placeholder="Address" required>
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

    </div>
</x-person-layout>
