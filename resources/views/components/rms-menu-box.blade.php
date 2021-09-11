@props(['foodItems','drinks','lunches','dinners'])
<!-- Start Menu -->
<div class="menu-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Special Menu</h2>
                    <p>We Have Plenty Menu Items That You Might Enjoy </p>
                </div>
            </div>
        </div>

        <div class="row inner-menu-box">
            <div class="col-3">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-all" role="tab" aria-controls="v-pills-home" aria-selected="true">All</a>
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-drinks" role="tab" aria-controls="v-pills-profile" aria-selected="false">Drinks</a>
                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-lunch" role="tab" aria-controls="v-pills-messages" aria-selected="false">Lunch</</a>
                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-dinner" role="tab" aria-controls="v-pills-settings" aria-selected="false">Dinner</a>
                </div>
            </div>

            <div class="col-9">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-all" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <div class="row">

                            @foreach($foodItems as $foodItem)
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <img src="{{ asset('storage'.'/'.$foodItem->thumbnail) }}" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>{{ $foodItem->name }}</h4>
                                        <p>{{ $foodItem->ingredients }}</p>
                                        <h5> Tk. {{ $foodItem->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-drinks" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <div class="row">

                            @foreach($drinks as $drink)
                            <div class="col-lg-4 col-md-6 special-grid drinks">
                                <div class="gallery-single fix">
                                    <img src="{{ asset('storage'.'/'.$drink->thumbnail) }}" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>{{ $drink->name }}</h4>
                                        <p>{{ $drink->ingredients }}</p>
                                        <h5>tk. {{ $drink->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>

                    </div>
                    <div class="tab-pane fade" id="v-pills-lunch" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <div class="row">

                            @foreach($lunches as $lunch)
                            <div class="col-lg-4 col-md-6 special-grid lunch">
                                <div class="gallery-single fix">
                                    <img src="{{ asset('storage'.'/'.$lunch->thumbnail) }}" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>{{ $lunch->name }}</h4>
                                        <p>{{ $lunch->ingredients }}</p>
                                        <h5>Tk. {{ $lunch->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-dinner" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <div class="row">

                            @foreach($dinners as $dinner)
                            <div class="col-lg-4 col-md-6 special-grid dinner">
                                <div class="gallery-single fix">
                                    <img src="{{ asset('storage'.'/'.$dinner->thumbnail) }}" class="img-fluid" alt="Image">
                                    <div class="why-text">
                                        <h4>{{ $dinner->name }}</h4>
                                        <p>{{ $dinner->ingredients }}</p>
                                        <h5>Tk. {{ $dinner->price }}</h5>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- End Menu -->
