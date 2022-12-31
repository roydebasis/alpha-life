<div>
    <div class="row mt-4">
        <div class="col">
            <input type="text" class="form-control my-2" placeholder=" Search by employee code or policy number" wire:model="searchTerm" />

            <table class="table table-hover table-responsive-sm">
                <thead>
                <tr>
                    <th>{{ __('labels.backend.users.fields.name') }}</th>
                    <th>{{ __('labels.backend.users.fields.email') }}</th>
                    <th>Employee Code</th>
                    <th>Policy Number</th>
                    <th>Role</th>
                    <th class="text-right">{{ __('labels.backend.action') }}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            <strong> {{ $user->name ?? '--'}} </strong>
                        </td>
                        <td>{{ $user->email ?? '--' }}</td>
                        <td> {{ $user->employee_code ?? '--' }} </td>
                        <td> {{ $user->policy_number ?? '--' }} </td>
                        <td>
                            @if($user->getRoleNames()->count() > 0)
                                <ul class="fa-ul">
                                    @foreach ($user->getRoleNames() as $role)
                                        <li><span class="fa-li"><i class="fas fa-check-square"></i></span> {{ ucwords($role) }}</li>
                                    @endforeach
                                </ul>
                            @endif
                        </td>
                        <td class="text-right">
                            @can('edit_users')
                                <a href="{{route('backend.users.changePassword', [$user, 'isEditingEmpPolicyHolder' => true])}}" class="btn btn-info btn-sm mt-1" data-toggle="tooltip" title="{{__('labels.backend.changePassword')}}"><i class="fas fa-key"></i></a>
                            @endcan
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-7">
            <div class="float-left">
                {!! $users->total() !!} {{ __('labels.backend.total') }}
            </div>
        </div>
        <div class="col-5">
            <div class="float-right">
                {!! $users->links() !!}
            </div>
        </div>
    </div>
</div>
