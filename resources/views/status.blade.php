@extends('layouts.app')

@section('title', 'Application Status - Fatima Girls College')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">Check Application Status</h1>

    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Enter Your Details</h4>
                </div>
                <div class="card-body">
                    <form id="statusForm">
                        <div class="mb-3">
                            <label for="cnic" class="form-label">CNIC/B-Form Number *</label>
                            <input type="text" class="form-control" id="cnic" placeholder="12345-1234567-1" required>
                        </div>
                        <div class="mb-3">
                            <label for="applicationId" class="form-label">Application ID (Optional)</label>
                            <input type="text" class="form-control" id="applicationId" placeholder="FGC20250001">
                            <div class="form-text">If you have your application ID, enter it for faster lookup.</div>
                        </div>
                        <button type="submit" class="btn btn-primary w-100">Check Status</button>
                    </form>
                </div>
            </div>

            <div class="card mt-4 d-none" id="statusResult">
                <div class="card-header">
                    <h5 class="mb-0">Application Status</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <strong>Application ID:</strong>
                        </div>
                        <div class="col-sm-8" id="resultAppId">-</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <strong>Applicant Name:</strong>
                        </div>
                        <div class="col-sm-8" id="resultName">-</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <strong>Program Applied:</strong>
                        </div>
                        <div class="col-sm-8" id="resultProgram">-</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <strong>Status:</strong>
                        </div>
                        <div class="col-sm-8">
                            <span class="badge" id="resultStatus">-</span>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <strong>Submission Date:</strong>
                        </div>
                        <div class="col-sm-8" id="resultDate">-</div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-4">
                            <strong>Remarks:</strong>
                        </div>
                        <div class="col-sm-8" id="resultRemarks">-</div>
                    </div>
                </div>
            </div>

            <div class="alert alert-info mt-4">
                <h6><i class="bi bi-info-circle me-2"></i>Status Explanations:</h6>
                <ul class="mb-0">
                    <li><strong>Pending:</strong> Your application is under review</li>
                    <li><strong>Under Review:</strong> Documents are being verified</li>
                    <li><strong>Shortlisted:</strong> You have been shortlisted for interview</li>
                    <li><strong>Accepted:</strong> Congratulations! Your admission is confirmed</li>
                    <li><strong>Rejected:</strong> Unfortunately, your application was not successful</li>
                    <li><strong>Waitlisted:</strong> You are on the waiting list</li>
                </ul>
            </div>

            <div class="text-center mt-4">
                <p>Need help? <a href="/contact">Contact our admission office</a></p>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const statusForm = document.getElementById('statusForm');
    const statusResult = document.getElementById('statusResult');

    statusForm.addEventListener('submit', function(e) {
        e.preventDefault();

        // Simulate API call - in real implementation, this would be an AJAX request
        const cnic = document.getElementById('cnic').value;
        const applicationId = document.getElementById('applicationId').value;

        // Mock data - replace with actual API call
        const mockData = {
            applicationId: applicationId || 'FGC20250001',
            name: 'Ayesha Khan',
            program: 'F.Sc Pre-Medical',
            status: 'Under Review',
            date: '2024-12-01',
            remarks: 'Documents received. Awaiting verification.'
        };

        // Update result display
        document.getElementById('resultAppId').textContent = mockData.applicationId;
        document.getElementById('resultName').textContent = mockData.name;
        document.getElementById('resultProgram').textContent = mockData.program;
        document.getElementById('resultDate').textContent = mockData.date;
        document.getElementById('resultRemarks').textContent = mockData.remarks;

        const statusBadge = document.getElementById('resultStatus');
        statusBadge.textContent = mockData.status;

        // Set badge color based on status
        statusBadge.className = 'badge';
        switch(mockData.status.toLowerCase()) {
            case 'pending':
                statusBadge.classList.add('bg-warning');
                break;
            case 'under review':
                statusBadge.classList.add('bg-info');
                break;
            case 'shortlisted':
                statusBadge.classList.add('bg-primary');
                break;
            case 'accepted':
                statusBadge.classList.add('bg-success');
                break;
            case 'rejected':
                statusBadge.classList.add('bg-danger');
                break;
            case 'waitlisted':
                statusBadge.classList.add('bg-secondary');
                break;
            default:
                statusBadge.classList.add('bg-light', 'text-dark');
        }

        statusResult.classList.remove('d-none');
        statusResult.scrollIntoView({ behavior: 'smooth' });
    });
});
</script>
@endsection
