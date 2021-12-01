<x-admin-layout>
    <div class="uk-container uk-container-expand">
        <div class="uk-width-1-1">
            <h1 class="uk-heading-small uk-text-center">
                All Conferences
            </h1>
            <article class="uk-tile uk-tile-default">

                <x-admin.list-conferences :conferences="$conferences" />


            </article>
        </div>
    </div>
</x-admin-layout>
