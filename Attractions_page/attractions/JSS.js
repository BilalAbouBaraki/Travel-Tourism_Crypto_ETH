// Get all the tab buttons
const tabHeaders = document.querySelectorAll('.tab-header');

// Add event listeners to each button
tabHeaders.forEach(tabHeader => {
  tabHeader.addEventListener('click', () => {
    // Get the data-tab attribute of the clicked button
    const tabId = tabHeader.getAttribute('data-tab');
    
    // Get all the tab content elements
    const tabContents = document.querySelectorAll('.tab-content');
    
    // Loop through all the tab content elements and toggle their visibility
    tabContents.forEach(tabContent => {
      if (tabContent.getAttribute('data-tab') === tabId) {
        tabContent.classList.add('active');
      } else {
        tabContent.classList.remove('active');
      }
    });
    
    // Loop through all the tab buttons and toggle their active state
    tabHeaders.forEach(header => {
      if (header.getAttribute('data-tab') === tabId) {
        header.classList.add('active');
      } else {
        header.classList.remove('active');
      }
    });
  });
});
