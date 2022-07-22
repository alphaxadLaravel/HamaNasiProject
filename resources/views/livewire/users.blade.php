<div>
    {{-- All normal users here --}}
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h5 class=" mb-0"><i class="mdi mdi-account-multiple"></i> All Users</h5>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">

                        <select class="form-select w-auto">
                            <option selected="" value="option-1">All Users</option>
                            <option value="users">Normal users</option>
                            <option value="pending...">New Agents</option>
                            <option value="house_agent">House Agents</option>
                            <option value="transport_agent">Transport Agents</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row g-4 mt-4">
        <div class="app-card app-card-orders-table shadow-sm mb-2">
            <div class="app-card-body">
                @if (Session::has('blocked'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <small>You have Blocked One User!!</small>
                    </div>
                @endif
                @if (Session::has('allowed'))
                    <div class="alert alert-success alert-dismissible" role="alert">
                        <small>User Allowed Successfully!</small>
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table app-table-hover mb-0 text-left">
                        <thead>
                            <tr>
                                <th class="cell">User</th>
                                <th class="cell"></th>
                                <th class="cell">Fullname</th>
                                <th class="cell">Phone</th>
                                <th class="cell">Email</th>
                                <th class="cell">Role</th>
                                <th class="cell">Status</th>
                                <th class="cell">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr>
                                    <td class="cell"><img src="{{ asset($user->profile) }}"
                                            class="img-fluid rounded-circle" height="30px" width="30px" alt=""></td>
                                    <td class="cell"><span class="truncate">{{ ucwords($user->username) }} </span>
                                    </td>
                                    <td class="cell"><span class="truncate">{{ ucwords($user->fullname) }}</span>
                                    </td>
                                    <td class="cell"><span class="truncate">{{ $user->phone }}</span>
                                        <td class="cell"><span class="truncate">{{ $user->email }}</span>
                                    <td class="cell"><span
                                            class="truncate text-success">{{ ucwords($user->role) }}</span></td>
                                    <td class="cell"><span
                                            class="truncate {{($user->status == "Blocked...") ? 'text-danger':'text-success'}}">{{ ucwords($user->status) }}</span></td>

                                    <td>
                                        <button class="mx-2 btn-sm btn app-btn-secondary" data-toggle="tooltip"
                                            data-placement="top" title="Block This User"
                                            wire:click="block({{ $user->id }})"><i class="mdi mdi-block-helper"></i></button>
                                        <button class="mx-2 btn-sm btn app-btn-secondary" data-toggle="tooltip"
                                            data-placement="top" title="Accept This Agent"
                                            wire:click="approove({{ $user->id }})"><i class="mdi mdi-check-all"></i></button>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

        <div class="d-flex justify-content-center">

            <nav class="app-pagination my-3">
                {{ $users->links() }}
             </nav>
        </div>

    </div>

</div>
