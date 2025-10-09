<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loan Application Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f4f7fa;
    }
    .container {
      width: 60%;
      margin: 50px auto;
      background-color: white;
      padding: 20px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      border-radius: 8px;
    }
    h1 {
      text-align: center;
      font-size: 32px;
      margin-bottom: 30px;
    }
    .section {
      margin-bottom: 20px;
    }
    .section label {
      font-size: 18px;
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }
    .section input[type="text"],
    .section input[type="email"],
    .section input[type="tel"],
    .section input[type="number"],
    .section textarea {
      width: 100%;
      padding: 10px;
      font-size: 16px;
      border: 1px solid #ddd;
      border-radius: 4px;
    }
    .section textarea {
      resize: vertical;
    }
    .section input[type="checkbox"] {
      margin-right: 10px;
    }
    button {
      display: block;
      width: 100%;
      padding: 15px;
      background-color: #4CAF50;
      color: white;
      font-size: 18px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.3s;
    }
    button:hover {
      background-color: #45a049;
    }
    .terms {
      font-size: 14px;
      color: #555;
      margin-top: 10px;
    }
  </style>
</head>
<body>

  <div class="container">
    <h1>Loan Application Form</h1>

    <form action="/submit-loan" method="POST">
      <div class="section">
        <label for="fullName">Full Name:</label>
        <input type="text" id="fullName" name="fullName" required>
      </div>

      <div class="section">
        <label for="email">Email Address:</label>
        <input type="email" id="email" name="email" required>
      </div>

      <div class="section">
        <label for="phone">Phone Number:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>

      <div class="section">
        <label for="loanAmount">Loan Amount (in USD):</label>
        <input type="number" id="loanAmount" name="loanAmount" required>
      </div>

      <div class="section">
        <label for="loanTerm">Loan Term (in months):</label>
        <input type="number" id="loanTerm" name="loanTerm" required>
      </div>

      <div class="section">
        <label for="income">Monthly Income (in USD):</label>
        <input type="number" id="income" name="income" required>
      </div>

      <div class="section">
        <label for="address">Residential Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>
      </div>

      <div class="section">
        <label for="purpose">Purpose of Loan:</label>
        <textarea id="purpose" name="purpose" rows="4" required></textarea>
      </div>

      <div class="section">
        <label for="agree">
          <input type="checkbox" id="agree" name="agree" required> I agree to the terms and conditions.
        </label>
      </div>

      <button type="submit">Submit Application</button>

      <p class="terms">Improvement should be measured regularly and assessed in order for you to know what’s beneficial and what is not. This will help you set new targets.</p>
    </form>
  </div>

</body>
</html>
