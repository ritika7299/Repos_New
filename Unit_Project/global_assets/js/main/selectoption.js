document.addEventListener("DOMContentLoaded", function () {
    const pageSelect = document.getElementById("pageSelect");

    // Event listener for dropdown change
    pageSelect.addEventListener("change", function () {
      const selectedPage = pageSelect.value;
      if (selectedPage !== "select") {
        // Redirect to the selected page
        window.location.href = selectedPage;
      }
    });
  });
