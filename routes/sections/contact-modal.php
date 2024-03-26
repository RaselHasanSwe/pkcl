 <div class="quote-content hidden animated-modal" id="animatedModal">
      <!--Heading-->
      <div class="pb-md-5 p-0 text-center">
       
        <h2 class="main-font font-weight-600 text-white mt-2">
          Contact Form
          <span class="text-pink js-rotating">Giver Your Feedback</span>
        </h2>
      </div>
      <!--Contact Form-->
      <form class="contact-form" id="modal-contact-form-data">
        <div class="row">
          <!--Result-->
          <div class="col-12" id="quote_result"></div>
          <!--Left Column-->
          <div class="col-md-6">
            <div class="form-group">
              <input
                class="form-control"
                id="quote_name"
                name="quoteName"
                placeholder="Name"
                required=""
                type="text"
              />
            </div>
            <div class="form-group">
              <input
                class="form-control"
                id="quote_contact"
                name="userPhone"
                placeholder="Contact "
                required=""
                type="text"
              />
            </div>
          </div>
          <!--Right Column-->
          <div class="col-md-6">
            <div class="form-group">
              <input
                class="form-control"
                id="quote_email"
                name="userEmail"
                placeholder="Email"
                required=""
                type="email"
              />
            </div>
            <div class="form-group">
              <input
                class="form-control"
                id="subject"
                name="userSubject"
                placeholder="Subject"
                required=""
                type="text"
              />
            </div>
          </div>
          <!--Full Column-->
          <div class="col-md-12">
            <div class="form-group">
              <textarea
                class="form-control"
                id="userMessage"
                name="userMessage"
                placeholder="Please give us your feedback here"
              ></textarea>
            </div>
          </div>
          <!--Button-->
          <div class="col-md-12">
            <a
              class="btn button btn-rounded white-btn modal_contact_btn"
              id="quote_submit_btn"
              href="javascript:void(0);"
            >
              Submit Now
            </a>
          </div>
        </div>
      </form>
    </div>