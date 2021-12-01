<x-app-layout>
    <section class="uk-section-default"
        uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-medium; delay: 200;">
        <div class="uk-section uk-section-xlarge uk-background-norepeat uk-background-top-left"
            data-src="{{ $conference->cover_image_url}}" uk-img uk-parallax="bg: 0, 300;media: @m">
            <div class="uk-container">
                <div class="uk-grid uk-grid-margin" uk-grid>
                    <div class="uk-width-3-5@m"></div>
                    <div class="uk-width-2-5@m">
                        <div class="uk-card uk-card-secondary uk-card-large uk-card-body uk-margin uk-text-center uk-scrollspy-inview "
                            uk-scrollspy-class="" style="">
                            <div class="uk-h4 uk-margin-top uk-margin-remove-bottom">Location</div>
                            <h1 class="uk-h1 uk-margin-top uk-margin-remove-bottom">{{ $conference->location }}
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="uk-grid uk-grid-margin" uk-grid>
                    <div class="uk-width-3-5@m">
                        <div class="uk-panel uk-tile uk-tile-primary" uk-scrollspy-class>
                            <h4><span class="uk-text-lead uk-text-success">Starts at:</span> <br>
                                <span class="uk-text-large">
                                    {{ $conference->start_date->format("d/m/Y, H:m:s") }}</span>
                            </h4>
                            <h4><span class="uk-text-lead uk-text-danger">Ends at:</span> <br>
                                <span class="uk-text-large">
                                    {{ $conference->start_date->format("d/m/Y, H:m:s") }}</span>
                            </h4>
                        </div>
                    </div>
                    <div class="uk-width-2-5@m">

                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="uk-section uk-section-secondary">
        <div class="uk-container uk-container-large">
            <div class="uk-width-1-1 uk-text-center"
                uk-scrollspy="target: [uk-scrollspy-class]; cls: uk-animation-slide-bottom-medium; delay: 100;">
                <h2 class="uk-heading-medium uk-text-capitalize" uk-scrollspy-class>{{ $conference->name }}</h2>
                <hr class="uk-divider-small" uk-scrollspy-class>
                <p class="uk-text-lead" uk-scrollspy-class>
                    {{ $conference->theme }}
                </p>

                <div class="uk-margin-medium uk-text-center uk-scrollspy-inview" uk-scrollspy-class>
                    <div class="uk-flex-middle uk-grid-small uk-child-width-auto uk-flex-center uk-grid" uk-grid="">
                        <div class="uk-first-column">
                            <a class="uk-button uk-button-default uk-button-large"
                                href="{{ route('conferences.attend', $conference->slug) }}">
                                Attend Event
                            </a>
                        </div>
                        <div>
                            <a class="uk-button uk-button-secondary uk-button-large" href="#">
                                Request Admin
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="uk-section uk-section-default">
        <div class="uk-container uk-container-large">
            <div class="uk-width-1-1 uk-text-center">
                <h3 class="uk-heading-small uk-text-bold uk-heading-line"><span>Speakers</span></h3>
            </div>
            <div class="uk-margin-large">
                <div class="uk-child-width-1-2 uk-child-width-1-4@m uk-grid uk-flex-top uk-flex-wrap-top"
                    uk-grid="masonry: 1; parallax: 200;">
                    @forelse ($speakers as $speaker)
                    <div>
                        <x-speaker-card :speaker="$speaker" />
                    </div>

                    @empty
                    <div class="uk-width-1-1">
                        <div class="uk-tile uk-tile-large uk-panel">
                            <div class="uk-text-center">
                                There are currently no speakers yet
                            </div>
                        </div>
                    </div>
                    @endforelse
                </div>
            </div>
        </div>
    </section>

    <section class="uk-section uk-section-large">
        <div class="uk-container">
            <div class="uk-width-1-1 uk-text-center">
                <h4>Conference Agenda</h4>
                <hr class="uk-divider-small">
                <p>{{ $conference->description }}</p>
                @if ($conference->attendants_count)
                <div class="uk-tile uk-tile-small">
                    <h6 class="uk-text-large">Total Confirmed Attendees</h6>
                    <p class="uk-text-lead">{{ $conference->attendants_count}}</p>
                </div>
                @endif
            </div>


        </div>
    </section>
</x-app-layout>
