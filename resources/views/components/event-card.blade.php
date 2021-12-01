<div class="uk-card uk-card-default uk-card-small">
    <div class="uk-card-media-top">
        <a href="{{ route('conferences.show', $conference->slug) }}">
            <div class="uk-inline-clip uk-transition-toggle">
                <canvas width="640" height="480"></canvas>
                <img class="el-image uk-transition-scale-down uk-transition-opaque"
                    alt=""
                    data-src="{{ $conference->cover_image_url }}" width="640" height="480" uk-img uk-cover>
            </div>
        </a>
    </div>
    <div class="uk-card-body uk-margin-remove-first-child">
        <h6 class="uk-card-title uk-text-primary uk-margin-top uk-margin-remove-bottom">
            <a href="{{ route('conferences.show', $conference->slug) }}" rel="tag" class="uk-text-capitalize uk-link-heading">{{ $conference->name }}</a>
        </h6>
        <h3 class=" uk-h5 uk-margin-remove-top uk-margin-remove-bottom">
            <span class="uk-icon uk-margin-small-right" uk-icon="icon: future"></span>
            {{ $conference->start_date->diffForHumans() }}
        </h3>
    </div>
</div>
