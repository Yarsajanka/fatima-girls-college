<div class="card-header bg-primary text-white">
                    <h4 class="mb-0">Admission Schedule 2024</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Application Start Date:</h6>
                            <p class="text-muted">December 1, 2024</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Application Deadline:</h6>
                            <p class="text-muted">December 31, 2024</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Entry Test Date:</h6>
                            <p class="text-muted">January 5, 2025</p>
                        </div>
                        <div class="col-md-6">
                            <h6>Result Announcement:</h6>
                            <p class="text-muted">January 15, 2025</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <h6>Classes Start:</h6>
                            <p class="text-muted">February 1, 2025</p>
                        </div>
                    </div>
                </div>
            </div>
=======
            @if($schedule)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">{{ $schedule->title }}</h4>
                </div>
                <div class="card-body">
                    <p>{{ nl2br($schedule->content) }}</p>
                </div>
            </div>
            @endif
