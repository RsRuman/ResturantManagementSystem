<x-rms-layout>

    <!-- Start All Pages header -->
    <x-rms-all-pages-header-card :title="$title='Gallery'"></x-rms-all-pages-header-card>

    <!-- Start Stuff -->
    <x-rms-gallery-box></x-rms-gallery-box>

    <!-- Start Customer Review -->
    <x-rms-review-box :reviews="$reviews"></x-rms-review-box>

    <!-- Start Contact Info -->
    <x-rms-contact-info-box></x-rms-contact-info-box>

</x-rms-layout>
