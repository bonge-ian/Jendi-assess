<x-app-layout>
    <section class="uk-section uk-section-default uk-section-large uk-padding-remove-bottom"
        uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-top-small; delay: false;">
        <div class="uk-container uk-container-expand">
            <div class="uk-width-1-1 uk-margin">
                <h1 class="uk-heading-medium uk-text-bold" uk-scrollspy-class>
                    <span class="uk-text-background">
                        Conferences that Light Up
                        <br class="uk-visible@s">
                        Your World
                    </span>
                </h1>
                <div class="uk-margin-medium uk-margin-remove-bottom" uk-scrollspy-class>
                    <ul class="uk-margin-remove-bottom uk-subnav  uk-subnav-divider" uk-margin>
                        <li>
                            <a href="#">Upcoming Conferences</a>
                        </li>
                        <li>
                            <a href="#">Explore More</a>
                        </li>
                        <li>
                            <a href="#">Sponsors</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="uk-width-1-1">
                <div class="uk-cover-container">
                    <canvas width="1067" height="600"></canvas>
                    <img data-src="{{ asset('img/hero.jpg') }}" alt="Hero Image" uk-img uk-cover>
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-muted">
        <div class="uk-container uk-container-large">
            <div class="uk-width-1-1">
                <h2 class="uk-heading-small uk-text-primary">
                    Upcoming Events
                </h2>
                <hr class="uk-divider-small">
            </div>

            <article class="uk-grid uk-grid-medium uk-child-width-1-4@l uk-child-width-1-3@m ul-child-width-1-2@s uk-child-width-1-1 uk-grid-match" uk-grid>
                @forelse ($upcomingConferences as $conference)
                    <div>
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
        </div>
    </section>

</x-app-layout>
