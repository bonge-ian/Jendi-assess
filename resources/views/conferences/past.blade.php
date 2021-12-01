<x-app-layout>
    <section class="uk-section uk-section-large">
        <div class="uk-container uk-container-expand">
            <h1 class="uk-heading-medium uk-text-center">Past Conferences</h1>
            <article
                class="uk-grid uk-grid-medium uk-child-width-1-4@l uk-child-width-1-3@m uk-child-width-1-2@s uk-child-width-1-1 uk-grid-match"
                uk-grid>
                @forelse ($conferences as $conference)
                <div class="uk-panel">
                    <x-event-card :conference="$conference" />
                </div>
                @empty
                <div class="uk-width-1-1">
                    <div class="uk-panel uk-tile uk-tile-small">
                        <div class="uk-alert uk-alert-warning" uk-alert>
                            <p>There are no upcoming events at the moment</p>
                        </div>
                    </div>
                </div>

                @endforelse
            </article>

            <div class="uk-margin-medium">
                {{ $conferences->links() }}
            </div>
        </div>
    </section>
</x-app-layout>
