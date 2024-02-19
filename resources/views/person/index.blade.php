<x-app-layout :title="$title">
    <h1>PERSON PAGE</h1>
    <a style="text-decoration: none" href="{{ route('person.create') }}"><button class="btn-route; btn-primary">ADD
            DATA</button></a>

    <div class="tbl-header">
        <table cellpadding="0" cellspacing="0" border="0">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Gender</th>
                    <th>Posisi</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="tbl-content">
        <table cellpadding="0" cellspacing="0" border="0">
            <x-table :persons="$persons" />
        </table>
    </div>

    <div class="container">
        <button class="btn-route2"><a style="text-decoration: none; color: white" href="/contact">CONTACT</a></button>
    </div>

</x-app-layout>
