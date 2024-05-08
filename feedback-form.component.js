import { Component } from '@angular/core';

@Component({
  selector: 'app-feedback-form',
  templateUrl: './feedback-form.component.html',
  styleUrls: ['./feedback-form.component.css']
})
export class FeedbackFormComponent {

  constructor() { }

  ValidationForm() {
    // Get references to the input fields in the form
    let name = document.forms["feedbackForm"]["name"];
    let email = document.forms["feedbackForm"]["email"];
    let age = document.forms["feedbackForm"]["age"];
    let opinion = document.forms["feedbackForm"]["opinion"];
    let gender = document.forms["feedbackForm"]["gender"];

    // Validate name
    if (name.value.length < 1 || !isNaN(name.value)) { // Checks if the name field is empty or contains numbers
      alert("Please enter a valid name without numbers."); // Alerts the user if the name is invalid
      name.focus(); // Sets focus back to the name box input
      return false; // Prevents form submission
    }

    // Validate email
    if (!validateEmail(email.value)) { // Calls the validateEmail function to check if the email is valid
      alert("Please enter a valid email address."); // Alerts the user if the email is invalid
      email.focus(); 
      return false; 
    }

    // Validate age
    if (age.value < 10) { // Checks if the age is less than 10
      alert("Please enter a valid age."); // Alerts the user if the age is invalid
      age.focus();
      return false; 
    }

    // Validate gender
    if (!gender.value) { // Checks if the gender is not selected
      alert("Please select your gender."); // Alerts the user if the gender is not selected
      return false; 
    }

    // Validate opinion
    if (!/[^\r\t\n\f]/.test(opinion.value)) { // Checks if the opinion field is not empty
    alert("Please provide your opinion to help us improve."); // Alerts the user if the opinion is empty
    opinion.focus(); // Sets focus back to the opinion field
    return false; // Prevents form submission
}


    return true; // If all validations pass, allows form submission
  }

  // This function validates an email address using pattern matching
  validateEmail(email) {
    var re = /\S+@\S+\.\S+/; // non-empty whitespace, followed by an @ symbol
    return re.test(email); 

  }

}
