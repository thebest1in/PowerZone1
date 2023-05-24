<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Active</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
                <tr>
                    <td>{{ $row['name'] }}</td>
                    <td>{{ $row['email'] }}</td>
                    <td>{{ $row['active'] }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary" wire:click="edit({{ $row['id'] }})"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-sm btn-danger" wire:click="destroy({{ $row['id'] }})"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<livewire:modal name="edit-modal" />
