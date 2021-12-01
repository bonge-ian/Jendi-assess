<x-app-layout title="{{ auth()->user()->name }}'s Dashoard">
    <section class="uk-section">
        <div class="uk-container">
            <div class="uk-flex-center uk-grid" uk-grid>
                <div class="uk-width-1-1 uk-width-3-5@s">
                    <div class="uk-card uk-box-shadow-small uk-box-shadow-hover-large">
                        <div class="uk-card-body">
                            <h2 class="uk-card-title uk-margin-remove-bottom uk-text-lead uk-text-center">
                                <a href="" class="uk-icon-button uk-button-primary" uk-icon="star"></a>
                                Welcome, {{ auth()->user()->name }}!
                            </h2>
                            <hr>
                            <p class="uk-text-meta uk-text-center uk-margin-remove-top">
                                It's
                                <time datetime="{{ now()->format('c') }}">
                                    {{ now()->format('l, F \\t\\h\\e jS \\@ g:i a') }}!
                                </time>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="uk-section uk-section-large">
        <div class="uk-container uk-container-large">
            <div class="uk-width-1-1 uk-panel">
                <div class="uk-overflow-auto">
                    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
                        <thead>
                            <tr>
                                <th class="uk-table-shrink">Preserve</th>
                                <th class="uk-table-expand">Conference</th>
                                <th class="uk-table-shrink uk-text-nowrap">Start Date</th>
                                <th class="uk-table-shrink uk-text-nowrap">End Date</th>
                                <th class="uk-table-shrink uk-text-nowrap">Actions</th>

                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($conferences as $conference)
                                <tr>
                                        <td>
                                            <img class="uk-preserve-width " data-src="{{ $conference->cover_image_url }}" width="40" height="30" alt=""
                                                uk-img>
                                        </td>
                                        <td class="uk-table-link">
                                            <a class="uk-link-reset uk-text-capitalize"
                                                href="{{ route('conferences.show', $conference->slug) }}">{{ $conference->name }}.</a>
                                        </td>
                                        <td class="uk-text-nowrap">{{ $conference->start_date->format('d/m/Y H:m:s') }}
                                        </td>
                                        <td class="uk-text-nowrap">{{ $conference->end_date->format('d/m/Y H:m:s')}}</td>
                                        <td>
                                            <a href="{{ route('conferences.decline', $conference->slug) }}" class="uk-button uk-button-danger">Decline</a>
                                        </td>
                                    </tr>
                            @empty
                                <tr>
                                    <td colspan="5">
                                        <div class="uk-alert uk-alert-primary" uk-alert>
                                            <p class="uk-margin-small-bottom">You haven't subscribed to any conference.
                                            </p>
                                            <p class="uk-margin-remove-top">Check out
                                                <a href="{{ route('conferences.index')}}">upcoming conferences</a>
                                            </p>
                                        </div>
                                    </td>
                                </tr>
                            @endforelse


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
