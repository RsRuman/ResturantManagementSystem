@props(['currentReservations', 'previousReservations', 'hasNoReviewYet'])
<div style="padding: 150px 0 150px">
    <h1 class="bg-info p-4 text-center text-white">All Reservations</h1>
    @if(!$hasNoReviewYet)
    <x-rms-rating-modal></x-rms-rating-modal>
    @endif



    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-6 mt-3">
                <h2 class="bg-success p-2 p-4 rounded text-center text-white">Current Reservations Of You Make</h2>
                <br>

                <div class="row">

                    @foreach($currentReservations as $currentReservation)
                    <div class="col-lg-6">
                        <!-- Current Reservation -->
                        <div class="gallery-single">
                            <div class="bg-success rounded text-white p-2">
                                <h2 class="text-center text-white">Reservation No. {{ $currentReservation->id }}</h2>
                                <div class="ml-0 mr-0 rounded row" style="background: #d65106">
                                    <p class="col-4 pt-3 text-center">Name: {{ $currentReservation->customer_name }}</p>
                                    <p class="col-4 pt-3 text-center">Phone: {{ $currentReservation->customer_phone }}</p>
                                    <p class="col-4 pt-3 text-center">Date: {{ $currentReservation->date }}</p>
                                </div>
                                <div class="bg-white text-dark ml-0 mr-0 rounded row">
                                    <p class="col-4 pt-3 text-center">Time: From <span>{{ $currentReservation->from }}</span> To <span>{{ $currentReservation->to }}</span></p>
                                    <p class="col-4 pt-3 text-center">Number Of Person: {{ $currentReservation->number_of_person }}</p>
                                    <p class="col-4 pt-3 text-center">Status: <span class="text-success">{{ $currentReservation->status }}</span></p>
                                </div>
                            </div>
                            <div class="why-text">
                                <div class="text-center">
                                    <a href="#" class="btn btn-danger">Delete Reservation</a>
                                </div>
                            </div>
                        </div>
                        <!-- Current Reservation -->
                    </div>
                    @endforeach

                </div>

            </div>

            <div class="col-lg-6 mt-3">
                <h2 class="bg-danger p-2 p-4 rounded text-center text-white">Previous Reservations Of You Made</h2>
                <br>

                <div class="row">


                @foreach($previousReservations as $previousReservation)
                    <!-- Previous Reservation -->
                    <div class="col-lg-6">
                        <div class="bg-info rounded text-white p-2">
                            <h2 class="text-center text-white">Reservation No. {{ $previousReservation->id }}</h2>
                            <div class="ml-0 mr-0 rounded row" style="background: #d65106">
                                <p class="col-4 pt-3 text-center">Name: {{$previousReservation->customer_name}}</p>
                                <p class="col-4 pt-3 text-center">Phone: {{ $previousReservation->customer_phone }}</p>
                                <p class="col-4 pt-3 text-center">Date: {{ $previousReservation->date }}</p>
                            </div>
                            <div class="bg-white text-dark ml-0 mr-0 rounded row">
                                <p class="col-4 pt-3 text-center">Time: From <span>{{ $previousReservation->from }}</span> To <span>{{ $previousReservation->to }}</span></p>
                                <p class="col-4 pt-3 text-center">Number Of Person: {{ $previousReservation->number_of_person }}</p>
                                <p class="col-4 pt-3 text-center">Status: <span class="text-success">{{ $previousReservation->status }}</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- End Previous Reservation -->
                    @endforeach

                </div>

            </div>
        </div>
    </div>
</div>
