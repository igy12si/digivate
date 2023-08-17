/*main*/

// Get all elements with the class "box"
const boxElements = document.querySelectorAll('.box');

// Initialize variable to store the maximum height
let maxHeight = 0;

// Loop through each box element
boxElements.forEach(boxElement => {
    // Get all <p> elements within the current box element
    const paragraphElements = boxElement.querySelectorAll('p');

    // Loop through each <p> element and find the maximum height
    paragraphElements.forEach(paragraphElement => {
        const paragraphHeight = paragraphElement.clientHeight;
        if (paragraphHeight > maxHeight) {
            maxHeight = paragraphHeight;
        }
    });
});

// Set the height of all <p> elements within each box element to the maximum height
boxElements.forEach(boxElement => {
    const paragraphElements = boxElement.querySelectorAll('p');
    paragraphElements.forEach(paragraphElement => {
        paragraphElement.style.height = maxHeight+12 + 'px'; //+12 since we have 12px gaps
    });
});
