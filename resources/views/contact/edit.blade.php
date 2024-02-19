<x-person-layout :title="$title = 'Edit Contact'">
    <div class="form-items">
        <h3>Edit The Data Contact</h3>
        <p>Fill in the data below.</p>
        <x-contact-form :contact="$contact" />
    </div>
</x-person-layout>
