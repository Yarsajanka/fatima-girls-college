@extends('layouts.app')

@section('title', 'Apply Online - Fatima Girls College')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">Online Application Form</h1>

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Step-by-Step Application Process</h4>
                </div>
                <div class="card-body">
                    <div class="progress mb-4">
                        <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Step 1 of 6</div>
                    </div>

                    <form id="applicationForm">
                        <!-- Step 1: Personal Information -->
                        <div class="step active" id="step1">
                            <h5 class="mb-4">Step 1: Personal Information</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fullName" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="fullName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dateOfBirth" class="form-label">Date of Birth *</label>
                                    <input type="date" class="form-control" id="dateOfBirth" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="cnic" class="form-label">CNIC/B-Form Number *</label>
                                    <input type="text" class="form-control" id="cnic" placeholder="12345-1234567-1" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="gender" class="form-label">Gender *</label>
                                    <select class="form-select" id="gender" required>
                                        <option value="">Select Gender</option>
                                        <option value="female">Female</option>
                                        <option value="male">Male</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="phone" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="address" class="form-label">Permanent Address *</label>
                                <textarea class="form-control" id="address" rows="3" required></textarea>
                            </div>
                        </div>

                        <!-- Step 2: Parent/Guardian Information -->
                        <div class="step" id="step2">
                            <h5 class="mb-4">Step 2: Parent/Guardian Information</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fatherName" class="form-label">Father's Name *</label>
                                    <input type="text" class="form-control" id="fatherName" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="fatherCnic" class="form-label">Father's CNIC *</label>
                                    <input type="text" class="form-control" id="fatherCnic" placeholder="12345-1234567-1" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="fatherOccupation" class="form-label">Father's Occupation</label>
                                    <input type="text" class="form-control" id="fatherOccupation">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="fatherPhone" class="form-label">Father's Phone Number</label>
                                    <input type="tel" class="form-control" id="fatherPhone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="motherName" class="form-label">Mother's Name</label>
                                    <input type="text" class="form-control" id="motherName">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="guardianName" class="form-label">Guardian Name (if different)</label>
                                    <input type="text" class="form-control" id="guardianName">
                                </div>
                            </div>
                        </div>

                        <!-- Step 3: Academic Information -->
                        <div class="step" id="step3">
                            <h5 class="mb-4">Step 3: Academic Information</h5>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="previousSchool" class="form-label">Previous School/College Name *</label>
                                    <input type="text" class="form-control" id="previousSchool" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="board" class="form-label">Board/University *</label>
                                    <input type="text" class="form-control" id="board" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="rollNumber" class="form-label">Roll Number *</label>
                                    <input type="text" class="form-control" id="rollNumber" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="yearOfPassing" class="form-label">Year of Passing *</label>
                                    <input type="number" class="form-control" id="yearOfPassing" min="2000" max="2024" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="totalMarks" class="form-label">Total Marks *</label>
                                    <input type="number" class="form-control" id="totalMarks" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="obtainedMarks" class="form-label">Obtained Marks *</label>
                                    <input type="number" class="form-control" id="obtainedMarks" required>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="subjects" class="form-label">Subjects Studied *</label>
                                <textarea class="form-control" id="subjects" rows="3" placeholder="List your main subjects" required></textarea>
                            </div>
                        </div>

                        <!-- Step 4: Program Selection -->
                        <div class="step" id="step4">
                            <h5 class="mb-4">Step 4: Program Selection</h5>
                            <div class="mb-3">
                                <label for="program" class="form-label">Select Program *</label>
                                <select class="form-select" id="program" required>
                                    <option value="">Choose a program</option>
                                    <option value="fa">F.A (Faculty of Arts)</option>
                                    <option value="fsc_pm">F.Sc Pre-Medical</option>
                                    <option value="fsc_pe">F.Sc Pre-Engineering</option>
                                    <option value="ics">ICS (Computer Science)</option>
                                    <option value="icom">ICOM (Commerce)</option>
                                    <option value="bscs">BS Computer Science</option>
                                </select>
                            </div>
                            <div class="alert alert-info">
                                <strong>Note:</strong> Program selection is subject to eligibility criteria and seat availability.
                            </div>
                        </div>

                        <!-- Step 5: Document Uploads -->
                        <div class="step" id="step5">
                            <h5 class="mb-4">Step 5: Document Uploads</h5>
                            <p class="text-muted mb-4">Please upload scanned copies of the following documents (PDF/JPG format, max 2MB each):</p>

                            <div class="mb-3">
                                <label for="cnicCopy" class="form-label">CNIC/B-Form Copy *</label>
                                <input type="file" class="form-control" id="cnicCopy" accept=".pdf,.jpg,.jpeg" required>
                            </div>
                            <div class="mb-3">
                                <label for="matricCertificate" class="form-label">Matriculation Certificate *</label>
                                <input type="file" class="form-control" id="matricCertificate" accept=".pdf,.jpg,.jpeg" required>
                            </div>
                            <div class="mb-3">
                                <label for="marksSheet" class="form-label">Detailed Marks Sheet *</label>
                                <input type="file" class="form-control" id="marksSheet" accept=".pdf,.jpg,.jpeg" required>
                            </div>
                            <div class="mb-3">
                                <label for="characterCertificate" class="form-label">Character Certificate *</label>
                                <input type="file" class="form-control" id="characterCertificate" accept=".pdf,.jpg,.jpeg" required>
                            </div>
                            <div class="mb-3">
                                <label for="photos" class="form-label">Recent Passport Size Photos (4 copies) *</label>
                                <input type="file" class="form-control" id="photos" accept=".pdf,.jpg,.jpeg" multiple required>
                            </div>
                            <div class="mb-3">
                                <label for="domicile" class="form-label">Domicile Certificate</label>
                                <input type="file" class="form-control" id="domicile" accept=".pdf,.jpg,.jpeg">
                            </div>
                        </div>

                        <!-- Step 6: Review & Submit -->
                        <div class="step" id="step6">
                            <h5 class="mb-4">Step 6: Review & Submit</h5>
                            <div class="alert alert-warning">
                                <strong>Important:</strong> Please review all information carefully. Once submitted, you cannot edit your application.
                            </div>

                            <div class="accordion" id="reviewAccordion">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#personalReview">
                                            Personal Information
                                        </button>
                                    </h2>
                                    <div id="personalReview" class="accordion-collapse collapse show" data-bs-parent="#reviewAccordion">
                                        <div class="accordion-body">
                                            <div id="personalReviewContent">Loading...</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#academicReview">
                                            Academic Information
                                        </button>
                                    </h2>
                                    <div id="academicReview" class="accordion-collapse collapse" data-bs-parent="#reviewAccordion">
                                        <div class="accordion-body">
                                            <div id="academicReviewContent">Loading...</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#programReview">
                                            Program Selection
                                        </button>
                                    </h2>
                                    <div id="programReview" class="accordion-collapse collapse" data-bs-parent="#reviewAccordion">
                                        <div class="accordion-body">
                                            <div id="programReviewContent">Loading...</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check mt-4">
                                <input class="form-check-input" type="checkbox" id="declaration" required>
                                <label class="form-check-label" for="declaration">
                                    I declare that all information provided is true and correct to the best of my knowledge. I understand that providing false information may result in cancellation of my admission.
                                </label>
                            </div>
                        </div>

                        <!-- Navigation Buttons -->
                        <div class="d-flex justify-content-between mt-4">
                            <button type="button" class="btn btn-secondary" id="prevBtn" disabled>Previous</button>
                            <button type="button" class="btn btn-primary" id="nextBtn">Next</button>
                            <button type="submit" class="btn btn-success d-none" id="submitBtn">Submit Application</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const steps = document.querySelectorAll('.step');
    const nextBtn = document.getElementById('nextBtn');
    const prevBtn = document.getElementById('prevBtn');
    const submitBtn = document.getElementById('submitBtn');
    const progressBar = document.querySelector('.progress-bar');
    let currentStep = 0;

    function showStep(stepIndex) {
        steps.forEach((step, index) => {
            step.classList.toggle('active', index === stepIndex);
        });

        prevBtn.disabled = stepIndex === 0;
        nextBtn.style.display = stepIndex === steps.length - 1 ? 'none' : 'block';
        submitBtn.classList.toggle('d-none', stepIndex !== steps.length - 1);

        const progress = ((stepIndex + 1) / steps.length) * 100;
        progressBar.style.width = progress + '%';
        progressBar.textContent = `Step ${stepIndex + 1} of ${steps.length}`;
    }

    nextBtn.addEventListener('click', function() {
        if (currentStep < steps.length - 1) {
            currentStep++;
            showStep(currentStep);
        }
    });

    prevBtn.addEventListener('click', function() {
        if (currentStep > 0) {
            currentStep--;
            showStep(currentStep);
        }
    });

    // Form validation and review population would go here
    // For now, this is a basic structure
});
</script>
@endsection
