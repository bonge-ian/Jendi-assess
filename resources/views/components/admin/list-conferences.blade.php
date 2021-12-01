<div class="uk-overflow-auto">

<table class="uk-table uk-table-divider uk-table-hover uk-table-middle uk-table-justify">
    <thead>
        <tr>
            <th></th>
            <th>Conference Name</th>
            <th>Location</th>
            <th>Start Date</th>
            <th>End Date</th>
            <th>Speakers</th>
            <th>Attendees </th>
            <th >Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($conferences as $conference)
        <tr>
            <td>{{ $conference->id }}</td>
            <td class="uk-table-link">
                <a href="{{ route('conferences.show', $conference->slug) }}" target="_blank" class="uk-link-reset">{{ $conference->name }}</a>
            </td>
            <td>{{ $conference->location }}</td>
            <td>{{ $conference->start_date->format('d/m/Y') }}</td>
            <td>{{ $conference->end_date->format('d/m/Y') }}</td>
            <td>{{ $conference->speakers_count }}</td>
            <td>{{ $conference->attendants_count }}</td>

            <td>
              <form action="{{ route('conferences.destroy', $conference->slug) }}" method="POST">
                  @csrf
                  @method('DELETE')
                  <button class="uk-button uk-button-danger">Delete</button>
              </form>

            </td>

        </tr>

        @endforeach
    </tbody>
</table>

</div>

<div class="uk-text-center">
    {{ $conferences->links() }}
</div>

 
