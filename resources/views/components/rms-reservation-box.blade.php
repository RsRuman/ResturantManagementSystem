<!-- Start Reservation -->
<div class="reservation-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Reservation</h2>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-sm-12 col-xs-12">
                <div class="contact-block">
                    <form action="/reservation" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <h3>Book a table</h3>
                                <div class="col-md-12">

                                    <!-- Date Input -->
                                    <div class="form-group">
                                        <input id="input_date" class="datepicker picker__input form-control" name="date" type="date" required>
                                    </div>

                                </div>

                                <div class="col-md-12">

                                    <div class="row">
                                        <!-- Time Input -->
                                        <div class="form-group col-5 float-left">

                                            <!-- Time From -->
                                            <input id="timeFrom" class="time form-control picker__input" name="timeFrom" type="time" required>

                                        </div>

                                        <div class="col-2 font-weight-bold p-3 text-center text-info">To</div>

                                        <div class="form-group col-5 float-right">

                                            <!-- Time To -->
                                            <input id="timeTo" class="time form-control picker__input" name="timeTo" type="time" required>

                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="custom-select d-block form-control" id="numberOfPerson" name="numberOfPerson" required>
                                            <option disabled selected>Select Person*</option>
                                            <option value="2">2</option>
                                            <option value="4">4</option>
                                            <option value="6">8</option>
                                            <option value="10">10</option>
                                            <option value="15">15</option>
                                            <option value="20">20</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <h3>Contact Details</h3>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Your Name" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Email" id="customer_email" class="form-control" name="customer_email" required>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" placeholder="Your Phone Number" id="customer_phone" class="form-control" name="customer_phone" required>
                                    </div>
                                </div>

                            </div>

                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-common">submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Reservation -->
