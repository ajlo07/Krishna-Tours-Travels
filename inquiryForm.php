</option>
<?php include "header.php"; ?>
<header class="site-header d-flex flex-column justify-content-center
                align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-12 text-center">
                <h2 class="mb-0">Booking Form</h2>
            </div>

        </div>
    </div>
</header>
<style>
    .input-group-append {
        cursor: pointer;
    }
</style>
<script>
    $(function () {
        $('#datepicker').datepicker();
    });
</script>
<main>
    <section class="contact-section section-padding pt-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <form action="#" method="post" class="custom-form
                                contact-form" role="form">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="text" name="full-name" id="fullname" class="form-control"
                                        placeholder="Full Name" required="">
                                    <label for="floatingInput">Full Name</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="phone" name="phone" id="phone" pattern="/^+91(7\d|8\d|9\d)\d{9}$/"
                                        class="form-control" placeholder="Phone number" required="" inputmode="numeric">
                                    <label for="floatingInput">Phone number</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1" placeholder="Select Vehical" required="">
                                            <option for="floatingInput">Select Vehical</option>
                                            <option>Aura</option>
                                            <option>Brezza</option>
                                            <option>Innova</option>
                                            <option>swift</option>
                                            <option>Tempo</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="pickUpDate" name="pickUpDate"
                                        required="">
                                    <label for="floatingInput">Pickup Date </label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="pickUpDate" name="pickUpDate"
                                        required="">
                                    <label for="floatingInput">Return Date</label>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <div class="form-group">
                                        <select class="form-control" id="Pickup Location" placeholder="Pickup Location"
                                            required="">
                                            <option for="floatingInput">Pickup Location</option>
                                            <option>Rajkot Airport</option>
                                            <option>Ahemdabad Airport</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <div class="form-group">
                                        <select class="form-control" id="Pickup Location"
                                            placeholder="Destination Location" required="">
                                            <option for="floatingInput">Destination Location</option>
                                            <option>Ahemdabad</option>
                                            <option>Baroda</option>
                                            <option>Surat</option>
                                            <option>Jamnagar</option>
                                            <option>Dwarka</option>
                                            <option>Somnath</option>
                                            <option>Kutch</option>
                                            <option>Bhuj</option>
                                            <option>Gandhinagar</option>
                                            <option>Junagadh</option>
                                            <option>Mumbai</option>
                                            <option>Goa</option>
                                            <option>Nasik</option>
                                            <option>Pune</option>
                                            <option>Lonavala</option>
                                            <option>Kedarnath</option>
                                            <option>Badrinath</option>
                                            <option>Haridwar</option>
                                            <option>Ayodhya</option>
                                            <option>Varanasi</option>
                                            <option>Agra</option>
                                            <option>Delhi</option>
                                            <option>Shimla</option>
                                            <option>Manali</option>
                                            <option>Ujjain</option>
                                            <option>Indore</option>
                                            <option>Mount Abu</option>
                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <div class="form-group">
                                        <select class="form-control" id="sel1" placeholder="Select Vehical" required="">
                                            <option for="floatingInput">Number of Person</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>more then 6</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <div class="radio-inline">
                                        <input type="radio" class="form-check-input" id="radio1" name="optradio"
                                            value="option1" checked> One Way Trip
                                        <label class="form-check-label" for="radio1"></label>
                                        <input type="radio" class="form-check-input" id="radio2" name="optradio"
                                            value="option2"> Round Trip
                                        <label class="form-check-label" for="radio2"></label>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6 col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" id="message" name="message" placeholder="Describe message
                                                here"></textarea>
                                    <label for="floatingTextarea">Describe
                                        message here</label>
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <button type="submit" onclick="whatsapp();" class="form-control">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include "footer.php"; ?>