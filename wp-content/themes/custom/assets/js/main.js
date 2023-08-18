/*main*/

// Get all elements with the class "box"
const boxElements = document.querySelectorAll('.box');

// Function to set the height of <p> elements within a box
const setParagraphsHeight = (boxElement, height) => {
    const paragraphElements = boxElement.querySelectorAll('p');
    paragraphElements.forEach(paragraphElement => {
        paragraphElement.style.height = height + 'px';
    });
};

// Check if the device width is greater than 768px
if (window.innerWidth > 768) {
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

    // Set the height of <p> elements within each box element to the maximum height
    boxElements.forEach(boxElement => {
        setParagraphsHeight(boxElement, maxHeight+12);
    });
}