<x-rms-layout>
    <!-- Start All Pages -->
    <x-rms-all-pages-header-card :title="$title='Special Menu'"></x-rms-all-pages-header-card>

    <!-- Start Menu -->
    <x-rms-menu-box :foodItems="$foodItems" :drinks="$drinks" :lunches="$lunches" :dinners="$dinners"></x-rms-menu-box>

    <!-- Start QT -->
    <x-rms-qt :shortQuote="$shortQuote"></x-rms-qt>

    <!-- Start Customer Review -->
    <x-rms-review-box :reviews="$reviews"></x-rms-review-box>

    <!-- Start Contact Information -->
    <x-rms-contact-info-box></x-rms-contact-info-box>

</x-rms-layout>
