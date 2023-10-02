   // Get references to the plus and minus icons and the number element
   const increaseButton = document.getElementById('increase');
   const decreaseButton = document.getElementById('decrease');
   const numberElement = document.getElementById('number');

   // Initialize a variable to store the current number
   let currentNumber = 0;

   // Function to update the number element
   function updateNumber() {
       numberElement.textContent = currentNumber;
   }

   // Event listener for the plus button
   increaseButton.addEventListener('click', () => {
       console.log('add')
       currentNumber++; // Increment the number
       updateNumber(); // Update the displayed number
   });

   // Event listener for the minus button
   decreaseButton.addEventListener('click', () => {
       if (currentNumber > 1) {
           currentNumber--; // Decrement the number (if greater than 1)
           updateNumber(); // Update the displayed number
       }
   });