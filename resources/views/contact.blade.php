<x-loyaut.main>
    <x-slot:title>
        Contact
    </x-slot:title>



    <x-loyaut.header>
        <x-slot:pagetitle>Contact</x-slot:pagetitle>
    </x-loyaut.header>

<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-lg-6">
                <h6 class="text-secondary font-weight-semi-bold text-uppercase mb-3">Contact Us</h6>
                <h1 class="section-title mb-3">Contact Us For Cleaning Services</h1>
            </div>
            <div class="col-lg-6">
                <h4 class="font-weight-normal text-muted mb-3">Eirmod kasd duo eos et magna, diam dolore stet sea clita sit ea erat lorem. Ipsum eos ipsum magna lorem stet</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-7 mb-5 mb-lg-0">
                <div class="contact-form">
                    <div id="success"></div>
                    <form name="sentMessage" id="contactForm" novalidate="novalidate">
                        <div class="form-row">
                            <div class="col-sm-6 control-group">
                                <input type="text" class="form-control p-4" id="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="col-sm-6 control-group">
                                <input type="email" class="form-control p-4" id="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-primary btn-block py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5" style="min-height: 400px;">
                <div class="position-relative h-100 rounded overflow-hidden">
                    <iframe style="width: 100%; height: 100%; object-fit: cover;"
                            src="https://maps.app.goo.gl/4vZ16REmRPCtuLax9"
                            frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
</x-loyaut.main>
