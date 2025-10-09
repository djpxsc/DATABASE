<!-- Registration Form -->
<form class="row g-3 needs-validation" novalidate>
  <!-- Personal Information Section -->
  <div class="col-md-12">
    <h5>Personal Information</h5>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingFullName" placeholder="Full Name" required>
      <label for="floatingFullName">Full Name</label>
      <div class="invalid-feedback">Please enter your full name.</div>
    </div>
  </div>

  <div class="col-md-4">
    <label>Gender</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="genderMale" value="Male" required>
      <label class="form-check-label" for="genderMale">
        Male
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="Female">
      <label class="form-check-label" for="genderFemale">
        Female
      </label>
    </div>
    <div class="invalid-feedback">Please select your gender.</div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="date" class="form-control" id="floatingDOB" placeholder="Date of Birth" required>
      <label for="floatingDOB">Date of Birth</label>
      <div class="invalid-feedback">Please enter your date of birth.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingPlaceOfBirth" placeholder="Place of Birth" required>
      <label for="floatingPlaceOfBirth">Place of Birth</label>
      <div class="invalid-feedback">Please enter your place of birth.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingReligion" placeholder="Religion" required>
      <label for="floatingReligion">Religion</label>
      <div class="invalid-feedback">Please enter your religion.</div>
    </div>
  </div>

  <div class="col-md-4">
    <label>Nationality</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="nationality" id="nationalityResident" value="Resident" required>
      <label class="form-check-label" for="nationalityResident">
        Resident
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="nationality" id="nationalityNonResident" value="Non Resident">
      <label class="form-check-label" for="nationalityNonResident">
        Non-Resident
      </label>
    </div>
    <div class="invalid-feedback">Please select your nationality status.</div>
  </div>

  <div class="col-md-4">
    <label>Marital Status</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="maritalStatus" id="maritalStatusSingle" value="Single" required>
      <label class="form-check-label" for="maritalStatusSingle">
        Single
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="maritalStatus" id="maritalStatusMarried" value="Married">
      <label class="form-check-label" for="maritalStatusMarried">
        Married
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="maritalStatus" id="maritalStatusWidowed" value="Widowed">
      <label class="form-check-label" for="maritalStatusWidowed">
        Widowed
      </label>
    </div>
    <div class="invalid-feedback">Please select your marital status.</div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingNationalId" placeholder="National ID" required>
      <label for="floatingNationalId">National ID</label>
      <div class="invalid-feedback">Please enter your National ID.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingTinNo" placeholder="TIN No" required>
      <label for="floatingTinNo">TIN No</label>
      <div class="invalid-feedback">Please enter your TIN number.</div>
    </div>
  </div>

  <!-- Contact Information Section -->
  <div class="col-md-12">
    <h5>Contact Information</h5>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <textarea class="form-control" id="floatingAddress" placeholder="Address" style="height: 100px;" required></textarea>
      <label for="floatingAddress">Address</label>
      <div class="invalid-feedback">Please enter your address.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingCity" placeholder="City" required>
      <label for="floatingCity">City</label>
      <div class="invalid-feedback">Please enter your city.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingState" placeholder="State" required>
      <label for="floatingState">State</label>
      <div class="invalid-feedback">Please enter your state.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingZip" placeholder="Zip Code" required pattern="\d{5}" title="Zip code should be 5 digits">
      <label for="floatingZip">Zip Code</label>
      <div class="invalid-feedback">Please enter your zip code.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingCountry" placeholder="Country" required>
      <label for="floatingCountry">Country</label>
      <div class="invalid-feedback">Please enter your country.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="email" class="form-control" id="floatingEmail" placeholder="Email" required>
      <label for="floatingEmail">Email</label>
      <div class="invalid-feedback">Please enter a valid email address.</div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="tel" class="form-control" id="floatingPhone" placeholder="Phone" required>
      <label for="floatingPhone">Phone</label>
      <div class="invalid-feedback">Please enter your phone number.</div>
    </div>
  </div>

  <!-- Service Information Section -->
  <div class="col-md-12">
    <h5>Service Information</h5>
  </div>

  <div class="col-md-4">
    <label>Service Name</label>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="service" id="serviceCash" value="Cash" required>
      <label class="form-check-label" for="serviceCash">
        Cash
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="service" id="serviceDebitCard" value="Debit Card">
      <label class="form-check-label" for="serviceDebitCard">
        Debit Card
      </label>
    </div>
    <div class="form-check">
      <input class="form-check-input" type="radio" name="service" id="serviceCreditCard" value="Credit Card">
      <label class="form-check-label" for="serviceCreditCard">
        Credit Card
      </label>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-floating">
      <input type="text" class="form-control" id="floatingComments" placeholder="Comments" required>
      <label for="floatingComments">Comments</label>
      <div class="invalid-feedback">Please enter any comments.</div>
    </div>
  </div>

  <!-- Submit and Reset Buttons -->
  <div class="text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>
</form>

<!-- Script for form validation -->
<script>
  // Form Validation
  (function () {
    'use strict'
    var forms = document.querySelectorAll('.needs-validation')
    Array.prototype.slice.call(forms)
      .forEach(function (form) {
        form.addEventListener('submit', function (event) {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }
          form.classList.add('was-validated')
        }, false)
      })
  })()
</script>
