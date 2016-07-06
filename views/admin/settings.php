<?php $view->script('views', 'twitter:app/bundle/settings.js', ['vue', 'jquery']);?>

<div id="settings" class="uk-form uk-form-horizontal" v-cloak>

    <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin>
        <div data-uk-margin>
            <h2 class="uk-margin-remove">{{ 'Edit Settings' | trans }}</h2>
        </div>
        <div data-uk-margin>
            <button class="uk-button uk-button-primary" @click.prevent="save">{{ 'Save' | trans }}</button>
        </div>
    </div>
    <form class="uk-form uk-form-horizontal">
    <div class="uk-form-row">
        <div class="uk-form-controls">
            <div class="uk-form-row">
            <label class="uk-form-label">{{ 'Twittername' | trans }}</label><input class="uk-form-width-large" type="text" v-model="config.name">
            </div>
            <div class="uk-form-row">
            <label class="uk-form-label">Transparent</label><input type="checkbox" v-model="config.transparent">
                </div>
            <div class="uk-form-row">
            <label class="uk-form-label">noborders</label><input type="checkbox" v-model="config.noborders">
                </div>
            <div class="uk-form-row">
            <label class="uk-form-label">noscrollbar</label><input type="checkbox" v-model="config.noscrollbar">
                </div>
            <div class="uk-form-row">
            <label class="uk-form-label">Tweets</label><input class="uk-form-width-mini uk-form-small" type="number" v-model="config.number">
                </div>
        </div>
    </div>
    </form>
</div>
