@extends('layouts.app')
    @section('content') 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <style>
        /**
       * The CSS shown here will not be introduced in the Quickstart guide, but shows
       * how you can use CSS to style your Element's container.
       */
        .StripeElement {
          box-sizing: border-box;
      
          height: 40px;
      
          padding: 10px 12px;
      
          border: 1px solid transparent;
          border-radius: 4px;
          background-color: white;
      
          box-shadow: 0 1px 3px 0 #e6ebf1;
          -webkit-transition: box-shadow 150ms ease;
          transition: box-shadow 150ms ease;
        }
      
        .StripeElement--focus {
          box-shadow: 0 1px 3px 0 #cfd7df;
        }
      
        .StripeElement--invalid {
          border-color: #fa755a;
        }
      
        .StripeElement--webkit-autofill {
          background-color: #fefde5 !important;
        }
      </style>
      
      <script src="https://js.stripe.com/v3/"></script>
      
      <div class="container donate">
        <div class="row">
          <div class="col-lg-4 img-fluid">
            <img src="images/environment.jpg" alt="img" class="environ-image">
            <p>We are a non-profit organisation with the main aim of keeping our environment safe and clean. <br>
              We rely on donations to carry out our mission of creating a safe and better environment.
          </div>
      
          <div class="col-lg-8">
            <h1 class="text-success">Donate</h1>
            <hr>
      
            <p>Kindly send your donations to the account number:</p>
            <h5>ACC NO: 1160306850</h5>
      
            <h5>Mpesa</h5>
            <p>+254729445484</p>
      
            <h5>M-gurush</h5>
            <p>+211918367898</p>
      
            <p class="mt-3">We are committed to your privacy. Your payment details will be securely processed and a record of
              your donation kept by us</p>
      
            <p>problems donating? <a href="/contacts">Send us an email</a> </p>
          </div>
        </div>
      </div>
      
      <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51HHQahAYh20T8GFklXO7lLfI9WyoUWnTKsb0QtWH2kQxf7HEXdPIaro4AkaCWVPxUFvI7qjtQpgWa1N2CvTMK3tp008ul8xms8');
      
        // Create an instance of Elements.
        var elements = stripe.elements();
      
        // Custom styling can be passed to options when creating an Element.
        // (Note that this demo uses a wider set of styles than the guide below.)
        var style = {
          base: {
            color: '#32325d',
            fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
            fontSmoothing: 'antialiased',
            fontSize: '16px',
            '::placeholder': {
              color: '#aab7c4'
            }
          },
          invalid: {
            color: '#fa755a',
            iconColor: '#fa755a'
          }
        };
      
        // Create an instance of the card Element.
        var card = elements.create('card', { style: style });
      
        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');
      
        // Handle real-time validation errors from the card Element.
        card.on('change', function (event) {
          var displayError = document.getElementById('card-errors');
          if (event.error) {
            displayError.textContent = event.error.message;
          } else {
            displayError.textContent = '';
          }
        });
      
        // Handle form submission.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function (event) {
          event.preventDefault();
      
          stripe.createToken(card).then(function (result) {
            if (result.error) {
              // Inform the user if there was an error.
              var errorElement = document.getElementById('card-errors');
              errorElement.textContent = result.error.message;
            } else {
              // Send the token to your server.
              stripeTokenHandler(result.token);
            }
          });
        });
      
        // Submit the form with the token ID.
        function stripeTokenHandler(token) {
          // Insert the token ID into the form so it gets submitted to the server
          var form = document.getElementById('payment-form');
          var hiddenInput = document.createElement('input');
          hiddenInput.setAttribute('type', 'hidden');
          hiddenInput.setAttribute('name', 'stripeToken');
          hiddenInput.setAttribute('value', token.id);
          form.appendChild(hiddenInput);
      
          // Submit the form
          form.submit();
        }
      </script>
  </section><!-- End Contact Section -->
    @endsection

  