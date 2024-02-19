<x-app-layout :title="$title">
    <h1>CONTACT PAGE</h1>
    <button class="btn-route; btn-primary"><a style="text-decoration: none" href="{{ route('contact.create') }}">ADD DATA</a></button>
    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <x-table :contacts="$contacts" />
        </table>
    </div>
    <div class="container">
        <button class="btn-route2"><a style="text-decoration: none; color: white" href="/person">PERSON</a></button>
    </div>


</x-app-layout>
