@extends('layouts.app')

@section('title', 'Apply Online - Fatima Girls College')

@section('content')
<style>
    /* Hide navigation bar on apply page */
    nav {
        display: none !important;
    }
    
    .form-container {
        background: linear-gradient(135deg, #cbd0f3 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 0;
    }
    
    .application-card {
        border: none;
        border-radius: 15px;
        box-shadow: 0 10px 40px rgba(0, 0, 0, 0.15);
        overflow: hidden;
    }
    
    .card-header {
        background: linear-gradient(135deg, #1a3af0 0%, #fefefe 100%) !important;
        padding: 30px !important;
        border-bottom: none;
    }
    
    .card-header h4 {
        font-size: 24px;
        font-weight: 600;
        margin: 0;
    }
    
    .progress {
        height: 8px;
        border-radius: 10px;
        background-color: #e9ecef;
        margin-bottom: 30px;
    }
    
    .progress-bar {
        background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
        border-radius: 10px;
        font-size: 12px;
        font-weight: 600;
    }
    
    .step-intro {
        background-color: #ea1d91;
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 30px;
        border-left: 4px solid #667eea;
    }
    
    .step-intro h5 {
        color: #667eea;
        margin-bottom: 10px;
        font-weight: 600;
    }
    
    .form-label {
        font-weight: 600;
        color: #333;
        margin-bottom: 8px;
        font-size: 14px;
    }
    
    .form-control, .form-select {
        border: 2px solid #e9ecef;
        border-radius: 8px;
        padding: 12px 15px;
        font-size: 14px;
        transition: all 0.3s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.2rem rgba(102, 126, 234, 0.1);
    }
    
    .button-group {
        display: flex;
        gap: 15px;
        margin-top: 40px;
        justify-content: space-between;
        flex-wrap: wrap;
    }
    
    .btn {
        padding: 12px 30px;
        font-size: 15px;
        font-weight: 600;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: all 0.3s ease;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }
    
    .btn-secondary {
        background-color: #6c757d;
        color: white;
    }
    
    .btn-secondary:hover {
        background-color: #5a6268;
        transform: translateY(-2px);
        box-shadow: 0 5px 15px rgba(108, 117, 125, 0.3);
    }
    
    .btn-secondary:disabled {
        background-color: #d3d3d3;
        cursor: not-allowed;
        transform: none;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }
    
    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(102, 126, 234, 0.4);
    }
    
    .btn-success {
        background: linear-gradient(135deg, #56ab2f 0%, #a8edea 100%);
        color: white;
    }
    
    .btn-success:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(86, 171, 47, 0.4);
    }
    
    .step {
        display: none;
    }
    
    .step.active {
        display: block;
        animation: fadeIn 0.3s ease-in;
    }
    
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(10px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .alert {
        border: none;
        border-radius: 8px;
        border-left: 4px solid;
    }
    
    .alert-info {
        background-color: #e7f3ff;
        border-left-color: #2196F3;
        color: #0c5aa0;
    }
    
    .alert-warning {
        background-color: #fff3cd;
        border-left-color: #ffc107;
        color: #856404;
    }
    
    .accordion-button {
        font-weight: 600;
        color: #667eea;
    }
    
    .accordion-button:not(.collapsed) {
        background-color: #f8f9ff;
        color: #667eea;
    }
</style>

<div class="form-container">
    <div class="container my-5">
        <h1 class="text-center mb-2" style="color: white; font-weight: 700; font-size: 36px;">Online Application Form</h1>
        <p class="text-center mb-5" style="color: rgba(255,255,255,0.9); font-size: 16px;">Fatima Girls College - Admission 2026</p>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card application-card">
                    <div class="card-header">
                        <h4 class="text-white">📝 Step-by-Step Application Process</h4>
                    </div>
                    <div class="card-body p-5">
                        <div class="progress mb-4">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Step 1 of 6</div>
                        </div>

                    <form id="applicationForm">
                        <!-- Step 1: Personal Information -->
                        <div class="step active" id="step1">
                            <div class="step-intro">
                                <h5>👤 Personal Information</h5>
                                <p class="mb-0 text-muted">Please provide your basic personal details</p>
                            </div>
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
                            <div class="step-intro">
                                <h5>👨‍👩‍👧 Parent/Guardian Information</h5>
                                <p class="mb-0 text-muted">Tell us about your parent or guardian</p>
                            </div>
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
                            <div class="step-intro">
                                <h5>🎓 Academic Information</h5>
                                <p class="mb-0 text-muted">Share your educational background and performance</p>
                            </div>
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
                            <div class="step-intro">
                                <h5>📚 Program Selection</h5>
                                <p class="mb-0 text-muted">Choose the program that matches your interests</p>
                            </div>
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
                            <div class="step-intro">
                                <h5>📄 Document Uploads</h5>
                                <p class="mb-0 text-muted">Upload required documents (PDF/JPG, max 2MB each)</p>
                            </div>
                            <p class="text-muted mb-4">Please upload scanned copies of the following documents (PDF/JPG format, max 2MB each):</p>
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
                            <div class="step-intro">
                                <h5>✅ Review & Submit</h5>
                                <p class="mb-0 text-muted">Please verify all information before submitting</p>
                            </div>
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
                        <div class="button-group">
                            <button type="button" class="btn btn-secondary" id="prevBtn" disabled>
                                ← Previous Step
                            </button>
                            <button type="button" class="btn btn-primary" id="nextBtn">
                                Next Step →
                            </button>
                            <button type="submit" class="btn btn-success d-none" id="submitBtn">
                                ✓ Submit Application
                            </button>
                        </div>
                    </form>
                    </div>
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
