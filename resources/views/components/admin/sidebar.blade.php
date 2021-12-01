<!-- LEFT BAR -->
<aside id="left-col" class="uk-light uk-visible@m">
    <div class="left-logo uk-flex uk-flex-middle uk-text-center uk-flex-center">
        <img data-src="{{ asset('img/jendi.svg') }}" alt="MiAds Logo" uk-img width="40" height="40" />
    </div>
    <div class="left-content-box  content-box-dark">
        <img src="img/avatar.svg" alt="" class="uk-border-circle profile-img">
        <h4 class="uk-text-center uk-margin-remove-vertical text-light">
            {{ auth()->user()->name }}
            <span class="uk-icon uk-margin-small-left" uk-icon="icon: verified-admin"></span>
        </h4>

        <div class="uk-position-relative uk-text-center uk-display-block">
            <a href="#" class="uk-text-small uk-text-muted uk-display-block uk-text-center"
                duk-icon="icon: triangle-down; ratio: 0.7">Admin</a>
        </div>
    </div>

    <div class="left-nav-wrap">
        <ul class="uk-nav uk-nav-default uk-nav-parent-icon" data-uk-nav>
            <li class="uk-nav-header">ACTIONS</li>
            <li>
                <a href="/admin/">
                    <span data-uk-icon="icon: dashboard" class="uk-margin-small-right"></span>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="{{ route('admin.conferences') }}">
                    <span data-uk-icon="icon: list" class="uk-margin-small-right"></span>
                    Conferences
                </a>
            </li>
            <li>
                <a href="{{ route('admin.users') }}">
                    <span data-uk-icon="icon: users" class="uk-margin-small-right"></span>
                   Users
                </a>
            </li>
   


        </ul>


    </div>

</aside>
<!-- /LEFT BAR -->
