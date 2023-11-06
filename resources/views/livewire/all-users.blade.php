<div>
    <div class="row g-3 align-items-center">
        <div class="col-auto">
            <input type="text" wire:model.live='q' class="form-control" placeholder="Search...">
        </div>
        <div class="col-auto">
            <select wire:model.live='perPage' class="form-select">
                <option value="10">10</option>
                <option value="25">25</option>
                <option value="50">50</option>
                <option value="100">100</option>
            </select>
        </div>
    </div>
    <table class="table table-sm">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <th scope="row">{{ $loop->index+1 }}</th>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>@mdo</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <span>{{ $users->links() }}</span>
</div>
