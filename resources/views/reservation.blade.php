<x-rms-layout>

    <!-- Start All Pages header -->
    <x-rms-all-pages-header-card :title="$title='Reservation'"></x-rms-all-pages-header-card>

    <!-- Start Reservation Box-->
    <x-rms-reservation-box></x-rms-reservation-box>

    <!-- Start Customer Reviews -->
    <x-rms-review-box :reviews="$reviews"></x-rms-review-box>

    <!-- Start Contact Info -->
    <x-rms-contact-info-box></x-rms-contact-info-box>

</x-rms-layout>
