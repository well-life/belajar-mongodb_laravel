@if (!isset($person))
    <form class="requires-validation" method="POST" action="{{ route('person.store') }}">
        @csrf
        <div class="col-md-12">
            <input class="form-control" type="text" name="name" placeholder="Full Name" required>
        </div>

        <div>
            <select name="position" class="form-select mt-3" required>
                <option selected disabled value="">Position</option>
                <option value="Junior Web Developer">Junior Web Developer</option>
                <option value="Senior Web Developer">Senior Web Developer</option>
                <option value="Project Manager">Project Manager</option>
            </select>
        </div>

        <div>
            <input class="form-control" type="text" name="salary" placeholder="Salary" required>
        </div>

        <div class="col-md-12">
            <input class="form-control" type="text" name="contact_code" placeholder="contact-code" required>
        </div>

        <div class="radio">
            <label for="gender">Gender: </label>

            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="male"
                required>
            <label for="male">Male</label>

            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" value="female"
                required>
            <label for="female">Female</label>
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
@else
    <form class="requires-validation" method="POST" action="{{ route('person.update', $person->id) }}">
        @method('PUT')
        @csrf
        <div class="col-md-12">
            <input class="form-control" type="text" name="name" placeholder="Full Name"
                value="{{ $person->name }}" required>
        </div>

        <div>
            <select name="position" class="form-select mt-3" required>
                <option selected disabled value="">Position</option>
                <option value="Junior Web Developer"
                    {{ $person->position == 'Junior Web Developer' ? 'selected' : '' }}>Junior Web
                    Developer</option>
                <option value="Senior Web Developer"
                    {{ $person->position == 'Senior Web Developer' ? 'selected' : '' }}>Senior Web
                    Developer</option>
                <option value="Project Manager" {{ $person->position == 'Project Manager' ? 'selected' : '' }}>Project
                    Manager
                </option>
            </select>
        </div>


        <div>
            <input class="form-control" type="text" name="salary" value="{{ $person->salary }}" placeholder="Salary"
                required>
        </div>

        <div class="col-md-12">
            <input class="form-control" type="text" name="contact_code" value="{{ $person->contact_code }}"
                placeholder="contact-code" required>
        </div>
        <div class="radio">
            <label for="gender">Gender: </label>

            <input type="radio" class="btn-check" name="gender" id="male" autocomplete="off" value="male"
                {{ $person->gender == 'male' ? 'checked' : '' }} required>
            <label for="male">Male</label>

            <input type="radio" class="btn-check" name="gender" id="female" autocomplete="off" value="female"
                {{ $person->gender == 'female' ? 'checked' : '' }} required>
            <label for="female">Female</label>
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
