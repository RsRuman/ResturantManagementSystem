<x-rms-layout>

    <!-- Start Slider -->
    <x-rms-slider :photos="$photos"></x-rms-slider>

    <!-- Start About -->
    <x-rms-about-section-box :shortStory="$shortStory"></x-rms-about-section-box>

    <!-- Start QT -->
    <x-rms-qt :shortQuote="$shortQuote"></x-rms-qt>

    <!-- Start Menu -->
    <x-rms-menu-box :foodItems="$foodItems" :drinks="$drinks" :lunches="$lunches" :dinners="$dinners"></x-rms-menu-box>

    <!-- Start Gallery -->
    <x-rms-gallary-box></x-rms-gallary-box>

    <!-- Start Customer Reviews -->
    <x-rms-review-box></x-rms-review-box>

    <!-- Start Contact Info -->
    <x-rms-contact-info-box></x-rms-contact-info-box>

</x-rms-layout>
