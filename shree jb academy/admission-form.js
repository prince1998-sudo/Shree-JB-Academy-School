// Function to download the form as a PDF
function downloadPDF() {
    // Retrieve form data
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const dob = document.getElementById('dob').value;
    const citizenship = document.getElementById('citizenship').value;
    const gender = document.getElementById('gender').value;
    const parentFirstName = document.getElementById('parentFirstName').value;
    const parentLastName = document.getElementById('parentLastName').value;

    // Use jsPDF to create the PDF
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    // Add content to the PDF
    doc.setFontSize(16);
    doc.text('Admission Enquiry Form', 20, 20);

    doc.setFontSize(12);
    doc.text('Name: ' + firstName + ' ' + lastName, 20, 40);
    doc.text('Date of Birth: ' + dob, 20, 50);
    doc.text('Citizenship: ' + citizenship, 20, 60);
    doc.text('Gender: ' + gender, 20, 70);
    doc.text("Parent's Name: " + parentFirstName + ' ' + parentLastName, 20, 80);

    // Save the PDF
    doc.save('admission-enquiry-form.pdf');
    doc.downloadPDF('admission-enquiry-form.pdf');
}
