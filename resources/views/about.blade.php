<x-rms-layout>

    <!-- Start All Pages Header -->
    <x-rms-all-pages-header-card :title="$title='About Us'"></x-rms-all-pages-header-card>

    <!-- Start About Section -->
    <x-rms-about-section-box :shortStory="$shortStory"></x-rms-about-section-box>

    <!-- Start Menu -->
    <x-rms-menu-box :foodItems="$foodItems" :drinks="$drinks" :lunches="$lunches" :dinners="$dinners"></x-rms-menu-box>

    <!-- Start Contact Information -->
    <x-rms-contact-info-box></x-rms-contact-info-box>

</x-rms-layout>
