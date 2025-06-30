<x-master header="admin.layouts.header" title="Contact Details">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3>Contact Details</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Name</th>
                                <td>{{ $contact->name }}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{ $contact->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{ $contact->phone }}</td>
                            </tr>
                            <tr>
                                <th>Message</th>
                                <td>{{ $contact->message }}</td>
                            </tr>
                        </table>

                        <a href="{{ route('admin.contacts.index') }}" class="btn btn-primary py-3 mt-3">Back to Contacts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-master>
