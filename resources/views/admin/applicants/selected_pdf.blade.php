<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Selected Applicants Report</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .header { text-align: center; margin-bottom: 30px; }
        .applicant { margin-bottom: 20px; border-bottom: 1px solid #ccc; padding-bottom: 10px; }
        .applicant h3 { margin: 0 0 10px 0; color: #333; }
        .info { display: flex; margin-bottom: 5px; }
        .label { font-weight: bold; width: 150px; }
        .value { flex: 1; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Fatima Girls College</h1>
        <h2>Selected Applicants Report</h2>
        <p>Generated on: {{ now()->format('M d, Y H:i') }}</p>
    </div>

    @foreach($applications as $application)
    <div class="applicant">
        <h3>{{ $application->full_name }} ({{ $application->application_id }})</h3>

        <div class="info">
            <span class="label">Program:</span>
            <span class="value">{{ $application->program->name }}</span>
        </div>

        <div class="info">
            <span class="label">Status:</span>
            <span class="value">{{ ucfirst(str_replace('_', ' ', $application->status)) }}</span>
        </div>

        <div class="info">
            <span class="label">CNIC:</span>
            <span class="value">{{ $application->formatted_cnic }}</span>
        </div>

        <div class="info">
            <span class="label">Phone:</span>
            <span class="value">{{ $application->phone }}</span>
        </div>

        <div class="info">
            <span class="label">Email:</span>
            <span class="value">{{ $application->email }}</span>
        </div>

        <div class="info">
            <span class="label">Address:</span>
            <span class="value">{{ $application->address }}</span>
        </div>

        <div class="info">
            <span class="label">Previous School:</span>
            <span class="value">{{ $application->previous_school }}</span>
        </div>

        <div class="info">
            <span class="label">Marks:</span>
            <span class="value">{{ $application->marks_obtained }}/{{ $application->total_marks }} ({{ $application->percentage }}%)</span>
        </div>

        @if($application->remarks)
        <div class="info">
            <span class="label">Remarks:</span>
            <span class="value">{{ $application->remarks }}</span>
        </div>
        @endif
    </div>
    @endforeach

    <div style="margin-top: 30px; text-align: center; font-size: 12px; color: #666;">
        Total Selected Applicants: {{ $applications->count() }}
    </div>
</body>
</html>
