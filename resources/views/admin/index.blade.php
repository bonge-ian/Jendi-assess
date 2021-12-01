<x-admin-layout>
    <!-- CONTENT -->
    <section class="uk-section uk-section-large" uk-height-viewport="offset-top: true">
        <div class="uk-container">
            <div class="uk-grid uk-grid-divider uk-grid-medium uk-child-width-1-2 uk-child-width-1-3@l" data-uk-grid>
                <div>
                    <div class="uk-panel uk-tile uk-tile-default">
                        <span class="uk-text-lead">
                            <span data-uk-icon="icon:future"
                                class="uk-margin-small-right uk-text-primary"></span>Current
                            Events</span>
                        <h1 class="uk-heading-primary uk-margin-remove  uk-text-primary">{{ $upcomingConferencesCount }} </h1>
                        <div class="uk-text-lead">
                            <a href="{{ route('conferences.index') }}" class="uk-button uk-button-text">View All Conferences</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-panel uk-tile uk-tile-primary">
                        <span class="uk-text-lead">
                            <span data-uk-icon="icon:history" class="uk-margin-small-right uk-text-primary"></span>
                            Past Events
                        </span>
                        <h1 class="uk-heading-primary uk-margin-remove  uk-text-primary">{{ $pastConferencesCount}} </h1>
                        <div class="uk-text-lead">
                            <a href="{{ route('conferences.past') }}" class="uk-button uk-button-text">View Past Events</a>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="uk-panel uk-tile uk-tile-secondary">
                        <span class="uk-text-lead">
                            <span data-uk-icon="icon:info" class="uk-margin-small-right uk-text-primary"></span>
                            Total Conferences
                        </span>
                        <h1 class="uk-heading-primary uk-margin-remove  uk-text-primary">{{ $conferencesCount }} </h1>
                        <div class="uk-text-lead">
                            <a href="{{ route('conferences.index') }}" class="uk-button uk-button-text">View All Conferences</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- /CONTENT -->
    <!-- OFFCANVAS -->
    <div id="offcanvas-nav" data-uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar uk-offcanvas-bar-animation uk-offcanvas-slide">
            <button class="uk-offcanvas-close uk-close uk-icon" type="button" data-uk-close></button>
            <ul class="uk-nav uk-nav-default">
                <li class="uk-active"><a href="#">Active</a></li>
                <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Sub item</a></li>
                        <li><a href="#">Sub item</a></li>
                    </ul>
                </li>
                <li class="uk-nav-header">Header</li>
                <li><a href="#js-options"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: table"></span>
                        Item</a></li>
                <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: thumbnails"></span>
                        Item</a>
                </li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right uk-icon" data-uk-icon="icon: trash"></span> Item</a>
                </li>
            </ul>
            <h3>Title</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                commodo consequat.</p>
        </div>
    </div>
    <!-- /OFFCANVAS -->
</x-admin-layout>
