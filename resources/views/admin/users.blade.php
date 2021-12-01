<x-admin-layout>
    <div class="uk-container uk-container-expand">
        <div class="uk-width-1-1">
            <h1 class="uk-heading-small uk-text-center">
                All users
            </h1>
            <article class="uk-tile uk-tile-default">

                <div class="uk-overflow-auto">

                    <table class="uk-table uk-table-divider uk-table-hover uk-table-middle uk-table-justify">
                        <thead>
                            <tr>
                                <th></th>
                                <th>User Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Conferences Attended</th>
                                <th colspan="2">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td class="uk-table-link">
                                    <a href="#" target="_blank" class="uk-link-reset">{{ $user->name }}</a>
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>{{ implode(', ', $user->roles->pluck('name')->toArray()) }}</td>

                                <td>{{ $user->conferences_count }}</td>

                                <td>

                                    <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="uk-button uk-button-danger">Delete User</button>
                                    </form>

                                </td>

                            </tr>

                            @endforeach
                        </tbody>
                    </table>

                </div>

                <div class="uk-text-center">
                    {{ $users->links() }}
                </div>


            </article>
        </div>
    </div>

</x-admin-layout>
