<section id="contact" class="contact">
    <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Request a quote</h2>
            <p>Tell us about your project so we can offer you a solution</p>
        </div>
        <div class="row">
            <div class="col-lg-12 mt-5 mt-lg-0 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="form-group">
                        <label for="name">Describe Your Project</label>
                        <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please decribe your project"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="phone">Your Phone</label>
                            <input type="text" name="phone" class="form-control" id="phone" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="file">Attach a File</label>
                            <input type="file" class="form-control" name="file" id="file" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
            </div>
        </div>
    </div>
</section>